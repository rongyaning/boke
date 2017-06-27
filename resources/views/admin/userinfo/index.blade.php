<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>网站后台管理</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- Bootstrap 3.3.4 -->
		<link href="{{asset('myadmin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Font Awesome Icons -->
		<link href="{{asset('myadmin/bootstrap/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- Ionicons -->
		<link href="{{asset('myadmin/bootstrap/css/ionicons.min.css')}}" rel="stylesheet" type="text/css" />    
		<!-- Theme style -->
		<link href="{{asset('myadmin/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
		<!-- AdminLTE Skins. Choose a skin from the css/skins 
			 folder instead of downloading all of them to reduce the load. -->
		<link href="{{asset('myadmin/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="{{asset('myadmin/bootstrap/js/html5shiv.min.js')}}')}}"></script>
			<script src="{{asset('myadmin/bootstrap/js/respond.min.js')}}')}}"></script>
		<![endif]-->
	</head>
	<body class="skin-blue sidebar-mini">
		<div class="wrapper">
      
		   <header class="main-header">
			<!-- Logo -->
				<a href="index2.html" class="logo">
					  <!-- 对于侧边栏迷你50x50像素迷你标志 -->
					  <span class="logo-mini"><b>X</b>DL</span>
					  <!-- 正常状态和移动设备标识 -->
					  <span class="logo-lg">网站后台管理</span>
				</a>
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">切换导航</span>
					</a>
				  <div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
					  <!-- Messages: style can be found in dropdown.less-->
					  <li class="dropdown messages-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						  <i class="fa fa-envelope-o"></i>
						  <span class="label label-success">4</span>
						</a>
						<ul class="dropdown-menu">
						  <li class="header">你有4条短信</li>
						  <li>
							<!-- inner menu: contains the actual data -->
							<ul class="menu">
							  <li><!-- start message -->
								<a href="#">
								  <div class="pull-left">
									<img src="{{asset('myadmin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image"/>
								  </div>
								  <h4>
									支持团队
									<small><i class="fa fa-clock-o"></i> 5分钟</small>
								  </h4>
								  <p>为什么不买一个新的令人敬畏的主题？</p>
								</a>
							  </li><!-- end message -->
							  <li>
								<a href="#">
								  <div class="pull-left">
									<img src="{{asset('myadmin/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="user image"/>
								  </div>
								  <h4>
									AdminLTE 设计团队
									<small><i class="fa fa-clock-o"></i> 2小时</small>
								  </h4>
								  <p>为什么不买一个新的令人敬畏的主题？</p>
								</a>
							  </li>
							  <li>
								<a href="#">
								  <div class="pull-left">
									<img src="{asset('myadmin/dist/img/user4-128x128.jpg)}}" class="img-circle" alt="user image"/>
								  </div>
								  <h4>
									开发商
									<small><i class="fa fa-clock-o"></i> 今天</small>
								  </h4>
								  <p>为什么不买一个新的令人敬畏的主题？</p>
								</a>
							  </li>
							  <li>
								<a href="#">
								  <div class="pull-left">
									<img src="{{asset('myadmin/dist/img/user3-128x128.jpg')}}" class="img-circle" alt="user image"/>
								  </div>
								  <h4>
									卖场部
									<small><i class="fa fa-clock-o"></i> 昨天</small>
								  </h4>
								  <p>为什么不买一个新的令人敬畏的主题？</p>
								</a>
							  </li>
							  <li>
								<a href="#">
								  <div class="pull-left">
									<img src="{{asset('myadmin/dist/img/user4-128x128.jpg')}}" class="img-circle" alt="user image"/>
								  </div>
								  <h4>
									审稿人
									<small><i class="fa fa-clock-o"></i>2天</small>
								  </h4>
								  <p>为什么不买一个新的令人敬畏的主题？</p>
								</a>
							  </li>
							</ul>
						  </li>
						  <li class="footer"><a href="#">看到所有的消息</a></li>
						</ul>
					  </li>
					  <!-- Notifications: style can be found in dropdown.less -->
					  <li class="dropdown notifications-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						  <i class="fa fa-bell-o"></i>
						  <span class="label label-warning">10</span>
						</a>
						<ul class="dropdown-menu">
						  <li class="header">你有10的通知</li>
						  <li>
							<!-- inner menu: contains the actual data -->
							<ul class="menu">
							  <li>
								<a href="#">
								  <i class="fa fa-users text-aqua"></i> 5名新成员加入了今天
								</a>
							  </li>
							  <li>
								<a href="#">
								  <i class="fa fa-warning text-yellow"></i> 很长的描述，可能不适合页面，可能导致设计问题
								</a>
							  </li>
							  <li>
								<a href="#">
								  <i class="fa fa-users text-red"></i> 5名新成员加入
								</a>
							  </li>

							  <li>
								<a href="#">
								  <i class="fa fa-shopping-cart text-green"></i> 25的盐。
								</a>
							  </li>
							  <li>
								<a href="#">
								  <i class="fa fa-user text-red"></i> 你改变你的用户名
								</a>
							  </li>
							</ul>
						  </li>
						  <li class="footer"><a href="#">查看所有</a></li>
						</ul>
					  </li>
					  <!-- Tasks: style can be found in dropdown.less -->
					  <li class="dropdown tasks-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						  <i class="fa fa-flag-o"></i>
						  <span class="label label-danger">9</span>
						</a>
						<ul class="dropdown-menu">
						  <li class="header">你有9个任务</li>
						  <li>
							<!-- inner menu: contains the actual data -->
							<ul class="menu">
							  <li><!-- Task item -->
								<a href="#">
								  <h3>
									设计一些按钮
									<small class="pull-right">20%</small>
								  </h3>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
									  <span class="sr-only">20% 完成</span>
									</div>
								  </div>
								</a>
							  </li><!-- end task item -->
							  <li><!-- Task item -->
								<a href="#">
								  <h3>
									创造一个好的主题
									<small class="pull-right">40%</small>
								  </h3>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
									  <span class="sr-only">40% 完成</span>
									</div>
								  </div>
								</a>
							  </li><!-- end task item -->
							  <li><!-- Task item -->
								<a href="#">
								  <h3>
									有些任务需要我去做
									<small class="pull-right">60%</small>
								  </h3>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
									  <span class="sr-only">60% 完成</span>
									</div>
								  </div>
								</a>
							  </li><!-- end task item -->
							  <li><!-- Task item -->
								<a href="#">
								  <h3>
								   让美丽的转变
									<small class="pull-right">80%</small>
								  </h3>
								  <div class="progress xs">
									<div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
									  <span class="sr-only">80% 完成</span>
									</div>
								  </div>
								</a>
							  </li><!-- end task item -->
							</ul>
						  </li>
						  <li class="footer">
							<a href="#">查看所有任务</a>
						  </li>
						</ul>
					  </li>
					  <!-- User Account: style can be found in dropdown.less -->
					  <li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						  <img src="{{asset('myadmin/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image"/>
						  <span class="hidden-xs">亚力山大-皮尔斯</span>
						</a>
						<ul class="dropdown-menu">
						  <!-- User image -->
						  <li class="user-header">
							<img src="{{asset('myadmin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
							<p>
							 亚力山大-皮尔斯-网站开发
							  <small>会员于2012-11</small>
							</p>
						  </li>
						  <!-- Menu Body -->
						  <li class="user-body">
							<div class="col-xs-4 text-center">
							  <a href="#">追随者</a>
							</div>
							<div class="col-xs-4 text-center">
							  <a href="#">销售</a>
							</div>
							<div class="col-xs-4 text-center">
							  <a href="#">朋友</a>
							</div>
						  </li>
						  <!-- Menu Footer-->
						  <li class="user-footer">
							<div class="pull-left">
							  <a href="#" class="btn btn-default btn-flat">简介</a>
							</div>
							<div class="pull-right">
							  <a href="#" class="btn btn-default btn-flat">签出</a>
							</div>
						  </li>
						</ul>
					  </li>
					 
					</ul>
				  </div>
				</nav>
		  </header>
      
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('myadmin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>亚力山大-皮尔斯</p>

              <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">主导航</li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>学生信息管理</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> 浏览学生信息</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> 发布学生信息</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>信息分类管理</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> 浏览分类信息</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> 添加分类信息</a></li>
              </ul>
            </li>
           
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>数据统计</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>多级</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> 一级</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> 一级<i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> 二级</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> 二级<i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> 三级</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> 三级</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> 一级</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            信息输出表
            <small>preview of simple tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">学生信息</a></li>
            <li class="active">列表</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-th"></i> 学生信息管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width:60px">学号</th>
                      <th>姓名</th>
                      <th>性别</th>
                      <th>年龄</th>
                      <th>班级</th>
                      <th style="width: 100px">操作</th>
                    </tr>
                    <tr>
                      <td>1001</td>
                      <td>张三</td>
                      <td>男</td>
                      <td>20</td>
                      <td>lamp138</td>
                      <td><button class="btn btn-xs btn-danger">删除</button> 
                      <button class="btn btn-xs btn-primary">编辑</button> </td>
                    </tr>
                    <tr>
                      <td>1001</td>
                      <td>张三</td>
                      <td>男</td>
                      <td>20</td>
                      <td>lamp138</td>
                      <td><button class="btn btn-xs btn-danger">删除</button> 
                      <button class="btn btn-xs btn-primary">编辑</button> </td>
                    </tr>
                    <tr>
                      <td>1001</td>
                      <td>张三</td>
                      <td>男</td>
                      <td>20</td>
                      <td>lamp138</td>
                      <td><button class="btn btn-xs btn-danger">删除</button> 
                      <button class="btn btn-xs btn-primary">编辑</button> </td>
                    </tr>
                    <tr>
                      <td>1001</td>
                      <td>张三</td>
                      <td>男</td>
                      <td>20</td>
                      <td>lamp138</td>
                      <td><button class="btn btn-xs btn-danger">删除</button> 
                      <button class="btn btn-xs btn-primary">编辑</button> </td>
                    </tr>
                    <tr>
                      <td>1001</td>
                      <td>张三</td>
                      <td>男</td>
                      <td>20</td>
                      <td>lamp138</td>
                      <td><button class="btn btn-xs btn-danger">删除</button> 
                      <button class="btn btn-xs btn-primary">编辑</button> </td>
                    </tr>
                    <tr>
                      <td>1001</td>
                      <td>张三</td>
                      <td>男</td>
                      <td>20</td>
                      <td>lamp138</td>
                      <td><button class="btn btn-xs btn-danger">删除</button> 
                      <button class="btn btn-xs btn-primary">编辑</button> </td>
                    </tr>
                   
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->

              
              
            </div><!-- /.col -->
            
          </div><!-- /.row -->
         
        </section><!-- /.content -->
        
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
      
      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->
    
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('myadmin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>    
    
    <!-- Slimscroll -->
    <script src="{{asset('myadmin/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="{{asset('myadmin/plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('myadmin/dist/js/app.min.js')}}" type="text/javascript"></script>    

    <!-- AdminLTE 用于演示目的 -->
    <script src="{{asset('myadmin/dist/js/demo.js')}}" type="text/javascript"></script>

  </body>
</html>
