<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Discusstab;

class DiscusstabController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$db = \DB::table("Discusstab");
       
       //判断并封装搜索条件
       $params = array();
       if(!empty($_GET['articleid'])){
           $db->where("articleid","like","%{$_GET['articleid']}%");
           $params['articleid'] = $_GET['articleid']; //维持搜索条件
       }
       
       // $list = $db->get(); //获取全部
       $list = $db->orderBy("id",'desc')->paginate(5); //5条每页浏览
        
       return view("admin.discusstab.index",['list'=>$list,'params'=>$params]);
	
	
	
	
	
	
       //$list = Discusstab::get(); //获取信息
      
       //遍历当前数据并添加评论名称
     
       //return view("admin.discusstab.index",['list'=>$list]);

        //return view("admin.ping.index");
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
		
		$list = Discusstab::where('id',$id)->first(); //获取信息
			return view("admin.discusstab.edit",["list"=>$list]);
		
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
		
        $data = $request->only("status");
        
        $id = \DB::table("discusstab")->where("id",$id)->update($data);
        
        if($id>0){
            return redirect('admin/discusstab');
        }else{
            return back()->with("err","修改失败!");
        }
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
      //\DB::delete('delete from discusstab where id = ?',[$id]);
	   //DB::delete('delete from student where id = ?',[$id]);
	    discusstab::where('id',$id)->delete();
       return redirect('admin/discusstab');
   }
}
