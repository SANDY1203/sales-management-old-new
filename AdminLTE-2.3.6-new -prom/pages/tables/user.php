<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  
   <!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75591362-1', 'auto');
    ga('send', 'pageview');

</script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/null.png" class="user-image" alt="User Image">
              <span class="hidden-xs">SANDEEP DHAMELIYA</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/null.png" class="img-circle" alt="User Image">

                <p>
                  SANDEEP DHAMELIYA - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
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
          <img src="../../dist/img/null.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>SANDEEP DHAMELIYA</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
	          
        <li class="treeview">
          <a href="../../index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>
          
        </li>
		<li class="treeview">
          <a href="user.php">
            <i class="fa fa-table"></i> <span>USERS</span>
            
          </a>
          
        </li>
		<li class="treeview">
          <a href="company.php">
            <i class="fa fa-table"></i> <span>COMPANY</span>
            
          </a>
          
        </li>
		<li class="treeview">
          <a href="contact.php">
            <i class="fa fa-table"></i> <span>CONTACT</span>
            
          </a>
          
        </li>
		<li class="treeview">
          <a href="feedback.php">
            <i class="fa fa-table"></i> <span>FEEDBACK</span>
            
          </a>
          
        </li>
		<li class="treeview">
          <a href="question.php">
            <i class="fa fa-table"></i> <span>QUESTION</span>
            
          </a>
          
        </li>
		<li class="treeview">
          <a href="project.php">
            <i class="fa fa-table"></i> <span>PROJECT</span>
            
          </a>
          
        </li>
		<li class="treeview">
          <a href="proserv.php">
            <i class="fa fa-table"></i> <span>PROSERV</span>
            
          </a>
          
        </li>
		<li class="treeview">
          <a href="proserv_project.php">
            <i class="fa fa-table"></i> <span>PROSERV PROJECT</span>
            
          </a>
          
        </li>
		<li class="treeview">
          <a href="team.php">
            <i class="fa fa-table"></i> <span>TEAM</span>
            
          </a>
          
        </li>
		<li class="treeview">
          <a href="team_member.php">
            <i class="fa fa-table"></i> <span>TEAM MEMBERS</span>
            
          </a>
          
        </li>
		
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
			<button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>

			  <div class="col-md-9">
			                <h1 class="box-title"><b>ALL USERS</b></h1>
			  
            </div>
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">
              <div class="records_content"></div>
            </div>
            <!-- /.box-body -->
			<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">ID</label>
                    <input type="text" id="id" placeholder="ID" class="form-control"/>
                </div>
				
				<div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" placeholder="Email Address" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="email">Password</label>
                    <input type="text" id="password" placeholder="Password" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="email">Role</label>
                    <input type="text" id="role" placeholder="Role" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">First Name</label>
                    <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">Last Name</label>
                    <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_email">Email Address</label>
                    <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="update_email">Password</label>
                    <input type="text" id="update_password" placeholder="Password" class="form-control"/>
                </div>
				<div class="form-group">
                    <label for="update_email">Role</label>
                    <input type="text" id="update_role" placeholder="role" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="view_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 class="modal-title" id="myModalLabel"><b><output id ="view_first_name" style="display:inline; font-size:80%;"> </output> <output id ="view_last_name" style="display:inline; font-size:80%;"> </output></b></h2>
            </div>
            <div class="modal-body">
			
					
					<div class="x_content">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <!-- main details -->
                    <div id="mainb">
                        <div class="col-md-12">
                            <div class="col-md-7">
                                <!--TODO upload employee images-->
                                <img style="width: 120px; height: 120px" class="img-responsive img-circle" alt="No Image" src="api/avatars/">
                            </div>
                            <div class="col-md-5 project_detail">
                                <p class="ng-binding"><span class="title control-label">ID:</span><output id ="view_id" style="display:inline"> </output></p>
                                <p class="ng-binding"><span class="title control-label">Email:</span><output id ="view_email" style="display:inline"> </output></p>
                                <p class="ng-binding"><span class="title control-label">Password:</span><output id ="view_password" style="display:inline"> </output></p>
                                <p class="ng-binding"><span class="title control-label">Role:</span></span><output id ="view_role" style="display:inline"></p>
                            </div>
                        </div>
                    </div>
                    <!-- end main details -->

                    <!-- ngIf: vm.user.plays.data -->
                </div>
            </div>
									
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="DeleteUser1()" >Delete</button>
                <input type="hidden" id="hidden_delete_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong>� 2016 All Rights Reserved. Powered by <a href="http://biocard.io">BioCard Elite LLC </a></strong> exclusively for <a href="pages/examples/login_sandy.html">SALES MANAGEMENT SYSTEM </a>.
  </footer>

  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
