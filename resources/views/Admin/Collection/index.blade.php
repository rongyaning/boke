@extends('admin.base')
    @section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            收藏信息
            <small>preview of simple tables</small>
          </h1>
          
		  
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i>收藏信息管理</h3>
                  <div class="box-tools">
                    <form action="{{url('admin/Collection')}}" method="get">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="name" class="form-control input-sm pull-right" placeholder=""/>
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    </form>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
						<th>id</th>
                      <th>用户id</th>
                      <th>文章id</th>     
                      <th>文章内容</th>        
                      <th style="width: 100px">操作</th>
                    </tr>
                 @foreach($list as $v)
                    <tr>
                      <td>{{$v->id}}</td>
                      <td>{{$v->userid}}</td>
                      <td>{{$v->ArticleId}}</td>       
                      <td>{{$v->content}}</td>     
                      <td><button onclick="doDel({{$v->id}})" class="btn btn-xs btn-danger">删除</button> 
                      <button class="btn btn-xs btn-primary">编辑</button> </td>
                    </tr>
                    @endforeach
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
             
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        <form action="" style="display:none;" id="mydeleteform" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="hidden" name="_method" value="DELETE">
        </form>
    @endsection
    
    
    @section("myscript")
      <script type="text/javascript">
            function doDel(id){
                if(confirm('确定要删除吗？')){
                    $("#mydeleteform").attr("action","/"+id).submit(); 
                }
            }
      </script>
    @endsection