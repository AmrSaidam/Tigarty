<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/tour.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:41:56 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>HOMER | WebApp admin theme</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/bootstrap-tour/build/css/bootstrap-tour.min.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
function showUser(str) {
  if (str=="") {
    document.getElementById("suppliername").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("suppliername").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","suppliername.php?q="+str,true);
  xmlhttp.send();
}
</script>
<script>
function showHint(str) {
     if (str.length == 0) { 
         document.getElementById("prices").innerHTML = "";
         return;
     } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("prices").innerHTML = xmlhttp.responseText;
             }
         }
         xmlhttp.open("GET", "getprice.php?q="+str, true);
         xmlhttp.send();
     }
}
</script>
</head>
<body>

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special AngularJS Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><img src="images/loading-bars.svg" width="64" height="64" /> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Header -->
<div id="header">
    <div class="color-line">
    </div>
    <div id="logo" class="light-version">
        <span style="font-size: 20px">
تجارتي
        </span>
    </div>
    <nav role="navigation">
        <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
        <div class="small-logo">
            <span class="text-primary">HOMER APP</span>
        </div>
        <form role="search" class="navbar-form-custom" method="post" action="#">
            <div class="form-group">
                <input type="text" placeholder=" البحث ..." class="form-control" name="search">
            </div>
        </form>
        <div class="navbar-right">
            <ul class="nav navbar-nav no-borders">
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-speaker"></i>
                    </a>
                    <ul class="dropdown-menu hdropdown notification animated flipInX">
                        <li>
                            <a>
                                <span class="label label-success">NEW</span> It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-warning">WAR</span> There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="label label-danger">ERR</span> Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See all notifications</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown">
                        <i class="pe-7s-keypad"></i>
                    </a>

                    <div class="dropdown-menu hdropdown bigmenu animated flipInX">
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="projects.html">
                                        <i class="pe pe-7s-portfolio text-info"></i>
                                        <h5>Projects</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="mailbox.html">
                                        <i class="pe pe-7s-mail text-warning"></i>
                                        <h5>Email</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="contacts.html">
                                        <i class="pe pe-7s-users text-success"></i>
                                        <h5>Contacts</h5>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="forum.html">
                                        <i class="pe pe-7s-comment text-info"></i>
                                        <h5>Forum</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="analytics.html">
                                        <i class="pe pe-7s-graph1 text-danger"></i>
                                        <h5>Analytics</h5>
                                    </a>
                                </td>
                                <td>
                                    <a href="file_manager.html">
                                        <i class="pe pe-7s-box1 text-success"></i>
                                        <h5>Files</h5>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle label-menu-corner" href="#" data-toggle="dropdown">
                        <i class="pe-7s-mail"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu hdropdown animated flipInX">
                        <div class="title">
                            You have 4 new messages
                        </div>
                        <li>
                            <a>
                                It is a long established.
                            </a>
                        </li>
                        <li>
                            <a>
                                There are many variations.
                            </a>
                        </li>
                        <li>
                            <a>
                                Lorem Ipsum is simply dummy.
                            </a>
                        </li>
                        <li>
                            <a>
                                Contrary to popular belief.
                            </a>
                        </li>
                        <li class="summary"><a href="#">See All Messages</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" id="sidebar" class="right-sidebar-toggle">
                        <i class="pe-7s-upload pe-7s-news-paper"></i>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="login.html">
                        <i class="pe-7s-upload pe-rotate-90"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>


<!-- Navigation -->
<aside id="menu">
    <div id="navigation">
        <div class="profile-picture">
            <a href="index-2.html">
                <img src="images/profile.jpg" class="img-circle m-b" alt="logo">
            </a>

            <div class="stats-label text-color">
                <span class="font-extra-bold font-uppercase"> اسم المتجر</span>




                <div id="sparkline1" class="small-chart m-t-sm"></div>
                <div>
                    <h4 class="font-extra-bold m-b-xs">
                        $260 104,200
                    </h4>
                    <small class="text-muted"> نسبة البيع </small>
                </div>
            </div>
        </div>

        <ul class="nav" id="side-menu" style="text-align: center">

            <li >
                <a href="index-2.html"> <span class="nav-label" > الرئيسية </span></a>
            </li>
            <li>
                <a href="#"><span class="nav-label"> ادخال فواتير </span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="Sales Point.html"> نقطة بيع </a></li>
                    <li><a href="users.html"> فاتورة مشتريات</a></li>

                </ul>
            </li>
            <li >
                <a href="#"><span class="nav-label"> عرض فواتير </span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">

                    <li><a href="search.html"> عرض فواتير البيع </a></li>
                    <li><a href="Show Traders Bills.html"> عرض فواتير المشتريات </a></li>

                </ul>
            </li>
            <li>
                <a href="#"><span class="nav-label"> المستخدمين    </span><span class="fa arrow"></span> </a>
                <ul class="nav nav-second-level">
                    <li><a href="AddUser.html"> ادخال مستخدم جديد </a></li>
                    <li><a href="Add invoice from supplier.html"> عرض المستخدمين </a></li>
                </ul>
            </li>
            <!--  <li>
                  <a href="#"><span class="nav-label">Box transitions</span><span class="fa arrow"></span> </a>
                  <ul class="nav nav-second-level">
                      <li><a href="overview.html"><span class="label label-success pull-right">Start</span> Overview </a>  </li>
                      <li><a href="transition_two.html">Columns from up</a></li>
                      <li><a href="transition_one.html">Columns custom</a></li>
                      <li><a href="transition_three.html">Panels zoom</a></li>
                      <li><a href="transition_four.html">Rows from down</a></li>
                      <li><a href="transition_five.html">Rows from right</a></li>
                  </ul>
              </li>
              <li>
                  <a href="#"><span class="nav-label">Common views</span><span class="fa arrow"></span> </a>
                  <ul class="nav nav-second-level">
                      <li><a href="login.html">Login</a></li>
                      <li><a href="register.html">Register</a></li>
                      <li><a href="error_one.html">Error 404</a></li>
                      <li><a href="error_two.html">Error 505</a></li>
                      <li><a href="lock.html">Lock screen</a></li>
                  </ul>
              </li>
              <li>
                  <a href="#"><span class="nav-label">Tables</span><span class="fa arrow"></span> </a>
                  <ul class="nav nav-second-level">
                      <li><a href="tables_design.html">Tables design</a></li>
                      <li><a href="datatables.html">Data tables</a></li>
                      <li><a href="footable.html">Foo Table</a></li>

                  </ul>
              </li>
              <li>
                  <a href="widgets.html"> <span class="nav-label">Widgets</span> <span class="label label-success pull-right">Special</span></a>
              </li>
              <li>
                  <a href="#"><span class="nav-label">Forms</span><span class="fa arrow"></span> </a>
                  <ul class="nav nav-second-level">
                      <li><a href="forms_elements.html">Forms elements</a></li>
                      <li><a href="forms_extended.html">Forms extended</a></li>
                      <li><a href="text_editor.html">Text editor</a></li>
                      <li><a href="wizard.html">Wizard</a></li>
                      <li><a href="validation.html">Validation</a></li>
                  </ul>
              </li>-->
            <li>
                <a href="ShowTraders.html"> <span class="nav-label"> عرض التجار </span></a>
            </li>
            <li>
                <a href="Show Product.html"> <span class="nav-label"> عرض السلع </span></a>
            </li>
            <!--
            <li>
                <a href="landing_page.html"> <span class="nav-label">Landing page</span></a>
            </li>
            <li>
                <a href="angular/index.html"> <span class="nav-label">AngularJS version</span></a>
            </li>
            <li>
                <a href="http://104.236.248.183/dashboard"> <span class="nav-label">Meteor version</span></a>
            </li>
            -->
        </ul>
    </div>
</aside>
<!-- Main Wrapper -->
<div id="wrapper">


    <div class="normalheader transition animated fadeIn">
        <div class="hpanel tour-1">
            <div class="panel-body">
                <a class="small-header-action" href="#">
                    <div class="clip-header">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                </a>
<!--
                <div id="hbreadcrumb" class="pull-right m-t-lg">
                    <ol class="hbreadcrumb breadcrumb">
                        <li><a href="index-2.html">Dashboard</a></li>
                        <li>
                            <span>Interface</span>
                        </li>
                        <li class="active">
                            <span>Tour</span>
                        </li>
                    </ol>
                </div>
                -->
                <h4 class="font-light m-b-xs" dir="rtl">
                    اضافة فاتورة مشتريات من التاجر
                </h4>
                <small></small>
            </div>
        </div>
    </div>
    <div class="content animate-panel">

        <div class="row">
            <div class="col-md-12">
                <div class="hpanel tour-2">
                    <div class="panel-heading">
                        <div class="panel-tools">
                            <a class="showhide"><i class="fa fa-chevron-up"></i></a>
                            <a class="closebox"><i class="fa fa-times"></i></a>
                        </div>
&nbsp;
                    </div>
                    <div class="panel-body">

                        <div class="row" style="margin-right:80px;margin-left:50px;"dir="rtl">
                            <div class="col-sm-12">
                                <div style="text-align: center;">
<form method = 'post' action='supplierinvoice.php'>
                                    <small style="font-size: medium" >اسم التاجر </small>
                                    <select id="supplier" name="supplierid" onchange="showUser(this.value)">
									
									<?php 
									include "connectdb.php";
									$sql = "SELECT supplierid ,fullname FROM supplier ";
									$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
					
						 echo '<option value="'.$row['supplierid'].'">'.$row['fullname'].'</option>';

								}
									
									} 
									
												
									?>
                                        
                                    </select>
									
                                </div>
                            </div>

                            <div class="col-lg-3"style="font-size: medium">
                                <div>
                                    <div >رقم الفاتوره: <span></span></div>
                                    <div>تاريخ الفاتوره: <span></span></div>
                                </div>
                            </div>
<div class="col-lg-5"></div>
                            <div class="col-lg-4"style="font-size: medium" id="suppliername">
                                <div >
                                    <div >اسم التاجر: <div ></div> </div><span></span>
                                    <div >العنوان:  <div id="place"></div></div><span></span>
                                    <div >الجوال:  <div id="phone"></div></div><span></span>
                                    <div>البريد الالكتروني: <div id="email"></div> </div><span></span>
                                </div>
								
                            </div>
                        </div>

                        <div class="row" style="margin-left: 30px;margin-right: 35px;margin-top: 20px">
                            <div class="table-responsive">
                                    <table class="table table-bordered table-striped" DIR="rtl" >
                                        <thead>
                                        <tr>

                                            <th style="text-align: center"> الرقم</th >
                                            <th style="text-align: center">الصنف</th>
                                            <th style="text-align: center">السعر الكلي</th>
                                            <th style="text-align: center">سعر الصنف</th>
                                            <th style="text-align: center">الكمية</th>
                                            <th style="text-align: center">المجموع</th>
                                        </tr>
                                        </thead>
                                        <tbody>
										
                                        <tr>
                                            <th></th>
                                            <th><input id="productname" type="text" name="productname" class="control-input" onkeyup="showHint(this.value)"/></th>
											<div id="prices">
                                            <th><input type="number" name="price" class="control-input"onchange="totalandtax()" value="0"/></th>
											</div>
											<th><input type="number" name="priceforpaid" class="control-input"/></th>
											<th><input type="text" name="quantity" class="control-input"/></th>
                                            
                                            
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                             <th><input id="productname" type="text" name="productname1" class="control-input"/></th>
                                            <th><input type="number" name="price1" class="control-input"onchange="totalandtax()"value="0"/></th>
											<th><input type="number" name="priceforpaid1" class="control-input" /></th>
											<th><input type="text" name="quantity1" class="control-input"/></th>
                                            
                                            
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th></th>
                                             <th><input id="productname" type="text" name="productname2" class="control-input"/></th>
                                            <th><input type="number" name="price2" class="control-input" onchange="totalandtax()" value="0"/></th>
											
                                            
                                            <th><input type="number" name="priceforpaid2" class="control-input"/></th>
											<th><input  type="text" name="quantity2" class="control-input"/></th>
                                            <th></th>
                                        </tr>

                                        <tr>
                                            <th>
                                                <small>الضريبة</small>
                                            </th>
                                            <th colspan="5"><input id="taxx" type="text" name="taxin"  onchange="totalandtax()" class="control-input" style="width:847px;margin-left: 53px;" />
                                            </th>
                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <th colspan="5">
                                                <small style="float: left;">المجموع</small>
                                            </th>
                                            <th><div id="total"></div></th>

                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <th colspan="5">
                                                <small style="float: left;" > الضريبة</small>
                                            </th>
                                            <th><div id="taxout"></div></th>

                                        </tr>
                                        <tr style="background-color: #ccc;">
                                            <th colspan="5">
                                                <small style="float: left;"> المجموع بعد الضريبة</small>
                                            </th>
                                            <th><div id="totalaftertax"></div></th>

                                        </tr>
                                        </tbody>
                                    </table>
                            </div>
                    </div>
                        <div class="row">
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-4">
                                <div style="text-align: center;">
                                    
                                        <button type="reset" class="btn btn-danger" style="width:30%;">الغاء</button>
                                        <button type="submit" class="btn btn-info" style="width:30%;">اعتماد</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>
                        </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Right sidebar -->
    <div id="right-sidebar" class="animated fadeInRight">

        <div class="p-m">
            <button id="sidebar-close" class="right-sidebar-toggle sidebar-button btn btn-default m-b-md"><i class="pe pe-7s-close"></i>
            </button>
            <div>
                <span class="font-bold no-margins"> Analytics </span>
                <br>
                <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            </div>
            <div class="row m-t-sm m-b-sm">
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">300,102</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
                <div class="col-lg-6">
                    <h3 class="no-margins font-extra-bold text-success">280,200</h3>

                    <div class="font-bold">98% <i class="fa fa-level-up text-success"></i></div>
                </div>
            </div>
            <div class="progress m-t-xs full progress-small">
                <div style="width: 25%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" role="progressbar"
                     class=" progress-bar progress-bar-success">
                    <span class="sr-only">35% Complete (success)</span>
                </div>
            </div>
        </div>
        <div class="p-m bg-light border-bottom border-top">
            <span class="font-bold no-margins"> Social talks </span>
            <br>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.</small>
            <div class="m-t-md">
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a1.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">John Novak</span>
                            <small class="text-muted">21.03.2015</small>
                            <div class="social-content small">
                                Injected humour, or randomised words which don't look even slightly believable.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a3.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Mark Smith</span>
                            <small class="text-muted">14.04.2015</small>
                            <div class="social-content">
                                Many desktop publishing packages and web page editors.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social-talk">
                    <div class="media social-profile clearfix">
                        <a class="pull-left">
                            <img src="images/a4.jpg" alt="profile-picture">
                        </a>

                        <div class="media-body">
                            <span class="font-bold">Marica Morgan</span>
                            <small class="text-muted">21.03.2015</small>

                            <div class="social-content">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-m">
            <span class="font-bold no-margins"> Sales in last week </span>
            <div class="m-t-xs">
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$170,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$580,90 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <small>Today</small>
                        <h4 class="m-t-xs">$620,20 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                    <div class="col-xs-6">
                        <small>Last week</small>
                        <h4 class="m-t-xs">$140,70 <i class="fa fa-level-up text-success"></i></h4>
                    </div>
                </div>
            </div>
            <small> Lorem Ipsum is simply dummy text of the printing simply all dummy text.
                Many desktop publishing packages and web page editors.
            </small>
        </div>

    </div>

    <!-- Footer-->
    <footer class="footer">
        <span class="pull-right">
            Example text
        </span>
        Company 2015-2020
    </footer>

</div>

<!-- Vendor scripts -->
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/jquery-ui/jquery-ui.min.js"></script>
<script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
<script src="vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendor/metisMenu/dist/metisMenu.min.js"></script>
<script src="vendor/jquery-flot/jquery.flot.js"></script>
<script src="vendor/jquery-flot/jquery.flot.resize.js"></script>
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/peity/jquery.peity.min.js"></script>
<script src="vendor/sparkline/index.js"></script>
<script src="vendor/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>
<script src="scripts/charts.js"></script>
  
<script>
function totalandtax() {
   var x = document.getElementsByName("price")[0].value; 
   x= parseFloat(x);
   var y = document.getElementsByName("price1")[0].value;
y= parseFloat(y);   
   var z = document.getElementsByName("price2")[0].value; 
   z = parseFloat(z) ;
   var total = x + y + z ;
   document.getElementById("total").innerHTML = total;

   var tax =  document.getElementsByName("taxin")[0].value;
   tax = parseFloat(tax) ;
   tax = (total*tax)/100;
   document.getElementById("taxout").innerHTML = tax;
   
   document.getElementById("totalaftertax").innerHTML = total+tax;
   
   
}
</script>


<script>
  $(function() {
    var availableTags = [
<?php


$sql = "SELECT * FROM product ";
									$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
					
						 echo '"'.$row['productname'].'",';

								}
									
									} 
									
										


?>

    ];
    $( "#productname" ).autocomplete({
      source: availableTags
    });
  });
  </script>
 

<script>

    $(function () {


        // Instance the tour
        var tour = new Tour({
            backdrop: true,
            onShown: function(tour) {

                // ISSUE    - https://github.com/sorich87/bootstrap-tour/issues/189
                // FIX      - https://github.com/sorich87/bootstrap-tour/issues/189#issuecomment-49007822

                // You have to write your used animated effect class
                // Standard animated class
                $('.animated').removeClass('fadeIn');
                // Animate class from animate-panel plugin
                $('.animated-panel').removeClass('zoomIn');

            },
            steps: [
                {
                    element: ".tour-1",
                    title: "Page header",
                    content: "Place your page title and breadcrumb. Select small or large header or give the user choice to change the size.",
                    placement: "bottom"
                },
                {
                    element: ".tour-2",
                    title: "Tour title",
                    content: "Add any components you want from the Homer theme - graphs, tables, calendars, lists, create your unique app view with Homer.",
                    placement: "top"

                },
                {
                    element: ".tour-3",
                    title: "Tour title",
                    content: "This is a 3 step on our tour. You can easy set a placement of tour tooltip.",
                    placement: "right"

                },
                {
                    element: ".tour-4",
                    title: "Tour title",
                    content: "In this 4 step is a description of how to use tour directive.",
                    placement: "left"

                }
            ]});

        // Initialize the tour
        tour.init();

        // Restart the tour
        $('.run-tour').click(function(){
            tour.restart();
        });

        /**
         * Flot charts line data and options
         */
        var chartIncomeData = [
            {
                label: "line",
                data: [ [1, 10], [2, 26], [3, 16], [4, 36], [5, 32], [6, 51] ]
            }
        ];

        var chartIncomeOptions = {
            series: {
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: true,
                    fillColor: "#64cc34"

                }
            },
            colors: ["#62cb31"],
            grid: {
                show: false
            },
            legend: {
                show: false
            }
        };

        $.plot($("#flot-income-chart"), chartIncomeData, chartIncomeOptions);

    });

</script>

</body>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/tour.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:41:58 GMT -->
</html>