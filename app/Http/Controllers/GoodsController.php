<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $num = $request->input('num',10);
        $keywords = $request->input('keywords','');

        //关键字搜索
        if ($request->has('keywords')) {
            //列表显示
            $users = DB::table('goods')
            ->where('title','like','%'.$keywords.'%')
            ->paginate($num);
        }else{
           $users = DB::table('goods')->paginate($num); 
        }
        
       //解释模板
        return view('admin.goods.index',[
       
           'goods'=>$users,
           'keywords' => $keywords,
           'num' => $num
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->file('pic'));
        // dd($request->all());
        $data = $request->only(['title','price','content','kucun']);
        //补时间
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['status'] = 1;
        //将数据插入到数据库中
        $res = DB::table('goods')->insertGetId($data);
        // dd($res);

        //如果插入成功
        if($res > 0) {
            //处理图片
            if($request->hasFile('pic')){
                $images = [];
                //遍历文件上传的数组
                foreach($request->file('pic') as $k=>$v) {
                    $tmp = [];
                    //获取文件的后缀名
                    $suffix = $v->extension();
                    //创建一个新的随机名称
                    $name = uniqid('img_').'.'.$suffix;
                    //文件夹路径
                    $dir = './uploads/'.date('Y-m-d');
                    //移动文件
                    $v->move($dir, $name);
                    //获取文件的路径
                    $tmp['goods_id'] = $res;
                    $tmp['pic'] = trim($dir.'/'.$name,'.');
                    $images[] = $tmp;
                }
                //将图片信息插入到商品图片表中
                DB::table('goods_pic')->insert($images);
            }
            return redirect('/goods')->with('msg','添加成功');
        }else{
            return redirect('/goods')->with('msg','添加失败!!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->only(['title','price','content','kucun']);
        if (DB::table('goods')->where('id',$id)->update($data)) {
             return redirect('/goods')->with('msg','更新成功');
         } else{
            return back()->with('msg','更新失败!!');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //执行删除
        if (DB::table('goods')->where('id',$id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }
}
