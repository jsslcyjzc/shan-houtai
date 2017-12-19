<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QiantaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $num = $request->input('num',5);
        $keywords = $request->input('keywords','');
          //关键字搜索
        if ($request->has('keywords')) {
            //列表显示
            $useres = DB::table('useres')
            ->where('phone','like','%'.$keywords.'%')
            ->paginate($num);
        }else{
           $useres = DB::table('useres')->paginate($num); 
        }


        $user = DB::table('users')->get();
        return view('admin.home.index',compact('useres','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $useres = DB::table('useres')->where('id',$id)->first();
        return view('admin.home.edit',compact('useres'));

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
        $data = $request->only(['phone','password']);
        if (DB::table('useres')->where('id',$id)->update($data)) {
            return redirect('/qt')->with('msg','更新成功');
        }else{
            return back()->with('msg','更新失败');
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
        //
        if (DB::table('useres')->where('id',$id)->delete()) {
            return back()->with('msg','删除成功');
        }else{
            return back()->with('msg','删除失败!');
        }
    }
}
