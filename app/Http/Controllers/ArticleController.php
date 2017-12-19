<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $num = $request->input('num',4);
        $keywords = $request->input('keywords','');
        if ($request->has('keywords')) {
            //列表显示
            $articles = DB::table('articles')->where('title','like','%'.$keywords.'%')->paginate($num);
        }else{
           //列表显示
            $articles = DB::table('articles')->paginate($num);
        }


        $user = DB::table('users')->get();
        

        return view('admin.article.index',[

           'articles' => $articles,
           'keywords' => $keywords,
           'num' => $num,
           'user'=>$user
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = DB::table('users')->get();
        return view('admin.article.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
       //获取参数
        $data = $request->only(['title','content','author','time']);
       //针对图片处理

        //图片上传
        //文件上传
         if ($request->hasFile('pic')) {
            //获取文件的后缀名
            $suffix = $request->file('pic')->extension();

            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir = './uploads/'.date('Y-m-d');
            //移动文件
            $request->file('pic')->move($dir,$name);
            //获取文件的路径
            $data['pic'] = trim($dir.'/'.$name,'.');
        }
       //将数据库插入到数据库中
        if (DB::table('articles')->insert($data)) {
            return redirect('article')->with('msg','添加成功');
        }else{
            return back()->with('msg','添加失败');
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
        //读取商品的详细信息
        $articles = DB::table('articles')->where('id',$id)->first();


        //读取最近的文章
        $recents = DB::table('articles')->orderBy('id','desc')->take(5)->first();
        // dd($recents);
        return view('home.qiangxianbuju',[
               'articles' => $articles,
               'recents'=>$recents
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //读取当前用户信息
        $article = DB::table('articles')->where('id',$id)->first();

        return view('admin.article.edit',['article'=>$article]);
       
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

        //获取参数
        $data = $request->only(['title','content','author','time','contop']);
        $data = $request->only(['title','content',]);
        $sta = $request->only(['status']);
        //针对图片处理
        if ($request->hasFile('pic')) {
            //获取文件的后缀名
            $suffix = $request->file('pic')->extension();
            //创建一个新的随机名称
            $name = uniqid('img_').'.'.$suffix;
            //文件夹路径
            $dir = './uploads'.date('Y-m-d');
            //移动文件
            $request->file('pic')->move($dir,$name);
            //获取文件的路径
            $data['pic'] = trim($dir.''.$name,'.');
        }


        
        //将数据插入到数据库中
        if (DB::table('articles')->where('id',$id)->update($data)) {
            return redirect('article')->with('msg','更新成功');
        }else{
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
        if (DB::table('articles')->where('id',$id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!!');
        }
    }




 
}
