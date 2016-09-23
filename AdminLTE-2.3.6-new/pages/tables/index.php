<?php 
if(isset($_POST["submit"]))
{
$company = $_POST["company"];
$address = $_POST["address"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$number = $_POST["number"];
$item = $_POST["item"];
$price = $_POST["price"];
$vat = $_POST["vat"];
$bank = $_POST["bank"];
$iban = $_POST["iban"];
$paypal = $_POST["paypal"];
$com = $_POST["com"];
$pay = 'Payment information';
$price = str_replace(",",".",$price);
$vat = str_replace(",",".",$vat);
$p = explode(" ",$price);
$v = explode(" ",$vat);
$re = $p[0] + $v[0];

/*include("../../../sales-management/AdminLTE-2.3.6-new/pages/tables/ajax/db_connection.php");

$number = 1;
$total = 0;

    foreach($_POST['checkboxName'] as $value)
{
    echo $value.'<br>';
	
	$query = mysql_query("SELECT * FROM projects WHERE id = '$value'");
	WHILE ($rows = mysql_fetch_array($query)):
	  ${"project_name$number"} = $rows['project_name'];
      ${"project_desc$number"} = $rows['project_desc'];
	  ${"project_company_id$number"} = $rows['project_company_id']; // print_r($_GET);       
	  ${"project_price$number"} = $rows['project_price'];
	  ${"project_status$number"} = $rows['project_status'];
	  
	  

	  echo "${"project_name$number"}";
	  
	
	endwhile;
	$query1 = mysql_query("SELECT * FROM company WHERE company_id = '${"project_company_id$number"}'");
	WHILE ($rows = mysql_fetch_array($query1)):
	  ${"company_id$number"} = $rows['company_id'];
      ${"company_name$number"} = $rows['company_name'];
	  ${"company_address$number"} = $rows['company_address']; // print_r($_GET);       
	  ${"company_phone$number"} = $rows['company_phone'];
	  ${"company_email$number"} = $rows['company_email'];
	  
	  
	

	  echo "${"company_id$number"}";
	  $total = $total + ${"project_price$number"};
	  
	$number++;
	endwhile;
	
}
*/

function r($r)
{
$r = str_replace("$","",$r);
$r = str_replace(" ","",$r);
$r = $r." $";
return $r;
}
$price = r($price);
$vat = r($vat);
require('../../../../fpdf181/fpdf.php');

class PDF extends FPDF
{

function Header()
{
if(!empty($_FILES["file"]))
  {
$uploaddir = "logo/";
$nm = $_FILES["file"]["name"];
$random = rand(1,99);
move_uploaded_file($_FILES["file"]["tmp_name"], $uploaddir.$random.$nm);
$this->Image($uploaddir.$random.$nm,15,20,180);
unlink($uploaddir.$random.$nm);
}
$margin = 10;
$pageWidth = 210;
$pageHeight = 297;
$this->Rect( 10, 10 , 190 ,280);
$this->SetFont('Arial','B',12);
$this->Ln(1);
}
function Footer()
{
$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
function ChapterTitle($num, $label)
{
$this->SetFont('Arial','',12);
$this->SetFillColor(200,220,255);
$this->Cell(0,6,"$num $label",0,1,'L',true);
$this->Ln(0);
}
function ChapterTitle2($num, $label)
{
$this->SetFont('Arial','',12);
$this->SetFillColor(249,249,249);
$this->Cell(0,6,"$num $label",0,1,'L',true);
$this->Ln(0);
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetTextColor(32);
$pdf->Cell(0,35,'',0,1,'L');
$pdf->Cell(5,7,'',0,0,'L');
$pdf->Cell(90,7,'INVOICE TO',0,0,'C');
$pdf->Cell(45,7,'Invoice Number: ',0,0,'L');
$pdf->Cell(45,7,'145',0,1,'R');
$pdf->Cell(5,7,'',0,0,'L');
$pdf->Cell(90,7,'HP',0,0,'C',0);
$pdf->Cell(45,7,'Invoice Date: ',0,0,'L',0);
$pdf->Cell(45,7,date('d-m-Y'),0,1,'R',0);
$pdf->Cell(5,7,'',0,0,'L');
$pdf->Cell(90,7,'BANGALORE',0,0,'C',0);
$pdf->Cell(45,7,'PO No.',0,0,'L',0);
$pdf->Cell(45,7,'789456258',0,1,'R',0);
$pdf->Cell(0,0,'',0,1,'R');
$pdf->Cell(5,7,'',0,0,'L');
$pdf->Cell(90,7,'info@hp.com',0,0,'C',0);
$pdf->Cell(90,7,'TOTAL AMOUNT',0,1,'C',0);
$pdf->Cell(5,7,'',0,0,'L');
$pdf->Cell(90,7,'+919852147632',0,0,'C',0);
$pdf->Cell(90,7,'KES 2400',0,0,'C',0);
$pdf->Cell(0,20,'',0,1,'R');
$pdf->Cell(5,7,'',0,0,'L');
$pdf->SetFillColor(200,200,200);
$pdf->Cell(110,12,'Iteam Description','B',0,'C',1);
$pdf->Cell(30,12,'Unit Price ','B',0,'C',1);
$pdf->Cell(10,12,'Qty ','B',0,'C',1);
$pdf->Cell(30,12,'Total','B',1,'C',1);

$pdf->SetFillColor(225,225,225);


for ($t = 0; $t <= 1; $t++) {
    
 
$pdf->Cell(5,7,'',0,0,'L');
$y1 = $pdf->GetY();
$x1 = $pdf->GetX();
$width = 110;
$pdf->MultiCell(110,7,'SOME PROJECTS',0,'C',1);
$y = $pdf->GetY();
$x = $pdf->GetX();
$pdf->SetXY($x1 + $width, $y1);
$pdf->Cell(30,7,'1000',0,0,'C',1);
$pdf->Cell(10,7,'1',0,0,'C',1);
$pdf->Cell(30,7,'1000',0,1,'C',1);
$pdf->SetXY($x, $y);

}



/*$pdf->MultiCell(110,7,'Iteam Description',1,'C');
$pdf->Cell(30,7,'Unit Price ',1,0,'C');
$pdf->Cell(10,7,'Qty ',1,0,'C');
$pdf->Cell(30,7,'Total',1,1,'C');*/

$pdf->Cell(0,10,'',0,1,'R');


$pdf->Cell(5,7,'',0,0,'L');
$pdf->SetFillColor(0,0,0);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(45,7,'Pin No.',1,0,'C',1);
$pdf->Cell(45,7,'POS15934601',1,0,'C',1);
$pdf->Cell(45,7,'Subtotal',1,0,'C',1);
$pdf->Cell(45,7,'KES 2000',1,1,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(5,7,'',0,0,'L');
$pdf->SetFillColor(0,0,0);
$pdf->Cell(45,7,'Served By:',1,0,'C',1);
$pdf->Cell(45,7,'Bhavya barot',1,0,'C',1);
$pdf->Cell(45,7,'TAX: VAT 20%',1,0,'C',1);
$pdf->Cell(45,7,'KES 400',1,1,'C',1);

$pdf->Cell(0,2,'',0,1,'R');
$pdf->SetFillColor(255,255,255);
$pdf->Cell(5,7,'',0,0,'L');
$pdf->SetFillColor(0,0,0);

$pdf->Cell(45,7,'Mobile:',1,0,'C',1);
$pdf->Cell(45,7,'07894561235',1,0,'C',1);
$pdf->SetFont('Times','',15);
$pdf->Cell(45,7,'GRAND TOTAL',1,0,'C',1);
$pdf->Cell(45,7,'KES 2400',1,1,'C',1);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(5,7,'',0,0,'L');
$pdf->SetFillColor(0,0,0);
$pdf->SetFont('Times','',12);
$pdf->Cell(45,7,'Email',1,0,'C',1);
$pdf->Cell(45,7,'info@biocard.io',1,0,'C',1);
$pdf->Cell(45,7,'',1,0,'C',1);
$pdf->Cell(45,7,'',1,1,'C',1);

$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(32);
$pdf->Cell(0,15,'',0,1,'R');
$pdf->Cell(180,7,'Sign & Omacle Stemp',0,1,'C',1);

$pdf->Cell(0,20,'',0,1,'R');
$pdf->SetTextColor(255,0,0);
$pdf->Cell(180,7,'THANK YOU',0,1,'C',1);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Times','',9);
$pdf->Cell(0,5,'',0,1,'R');
$pdf->Cell(180,7,'We really apprecate your business',0,1,'C',1);
$pdf->Cell(180,4,'Please send payment within 30 days of receving this invoice',0,1,'C',1);
$pdf->Cell(180,4,'There will some text',0,1,'C',1);




$pdf->Line(15, $y + 25, 195,$y + 25 );
$pdf->Line(15, $y + 50, 195, $y + 50);
$pdf->Line(15, $y + 75, 195, $y + 75);
$pdf->Line(15, $y + 100, 195, $y + 100);
$pdf->Line(15, $y + 110, 195, $y + 110);




$pdf->SetFillColor(200,220,255);


$filename="invoice.pdf";
$pdf->Output($filename,'F');
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  
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

<style>
body{background-image:url(img/bg.jpg);
}
a{
color:#999999;
text-decoration:none;
}
a:hover{
color:#999999;
text-decoration:underline;
}
#content{
width:800px;
height:600px;
background-color:#FEFEFE;
border: 10px solid rgb(255, 255, 255);
border: 10px solid rgba(255, 255, 255, .5);
-webkit-background-clip: padding-box;
background-clip: padding-box;
border-radius: 10px;
opacity:0.90;
filter:alpha(opacity=90);
margin:auto;
}
#footer{
width:800px;
height:30px;
padding-top:15px;
color:#666666;
margin:auto;
}
#title{
width:770px;
margin:15px;
color:#999999;
font-size:18px;
font-family:Verdana, Arial, Helvetica, sans-serif;
}
#body{
width:770px;
height:360px;
margin:15px;
color:#999999;
font-size:16px;
font-family:Verdana, Arial, Helvetica, sans-serif;
}
#body_l{
width:385px;
height:360px;
float:left;
}
#body_r{
width:385px;
height:360px;
float:right;
}
#name{
width:width:385px;
height:40px;
margin-top:15px;
}
input{
margin-top:10px;
width:345px;
height:32px;
-moz-border-radius: 5px;
border-radius: 5px;
border:1px solid #ccc;
background-image:url(img/paper_fibers.png);
color:#999;
margin-left:15px;
padding:5px;
}
#up{
width:770px;
height:40px;
margin:auto;
margin-top:10px;
}
</style>

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
                 <a href="http://localhost/sales-management/AdminLTE-2.3.6-new/pages/examples/login_sandy.php" class="btn btn-default btn-flat">Sign out</a>
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
		<li class="active">
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
			
			 
            </div>
			
            <!-- /.box-header -->
            <div class="box-body">
              
            
            <!-- /.box-body -->
			<!-- Modal - Add New Record/User -->

<div id="content">
<div id="title" align="center">Create a PDF invoice with PHP</div>
<div id="body">
<form action="" method="post" enctype="multipart/form-data">
<div id="body_l">
<div id="name"><input name="company" placeholder="Insert here your Company Name" type="text" /></div>
<div id="name"><input name="address" placeholder="Insert here your Company Address" type="text" /></div>
<div id="name"><input name="email" placeholder="Insert here your Email" type="text" /></div>
<div id="name"><input name="telephone" placeholder="Insert here your telephone number" type="text" /></div>
<div id="name"><input name="number" placeholder="Invoice number" type="text" /></div>
<div id="name"><input name="item" placeholder="Item" type="text" /></div>
</div>
<div id="body_r">
<div id="name"><input name="price" placeholder="Insert here price" type="text" /></div>
<div id="name"><input name="vat" placeholder="Insert here your VAT" type="text" /></div>
<div id="name"><input name="bank" placeholder="Insert the name of your Bank" type="text" /></div>
<div id="name"><input name="iban" placeholder="Insert here your IBAN number" type="text" /></div>
<div id="name"><input name="paypal" placeholder="Insert here your PayPal address" type="text" /></div>
<div id="name"><input name="com" placeholder="Add a comment" type="text" /></div>
</div>
<div id="up" align="center"><input name="file" type="file" /></div>
<div id="up" align="center"><input name="submit" style="margin-top:60px;" value="Create your Invoice" type="submit" /><br /><br />

<?php 
if(isset($_POST["submit"]))
{
echo'<a href="invoice.pdf">Download your Invoice</a>';
}
?>
</div>
</form>

<!-- // Modal -->
          </div>
          <!-- /.box -->
</div>
          
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
    <strong>© 2016 All Rights Reserved. Powered by <a href="http://biocard.io">BioCard Elite LLC </a></strong> exclusively for <a href="pages/examples/login_sandy.html">SALES MANAGEMENT SYSTEM </a>.
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