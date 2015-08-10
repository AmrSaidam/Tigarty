<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:25 GMT -->
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>HOMER | WebApp admin theme</title>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory  -->
    <!-- javaSecript code by Amr Saidam -->


    <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/metisMenu/dist/metisMenu.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/dist/css/bootstrap.css" />

    <!-- App styles -->
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="fonts/pe-icon-7-stroke/css/helper.css" />
    <link rel="stylesheet" href="styles/style.css">
    <script>



        var Price = 1;
        var NumberOfItems = 0;
        var Items_Counter = 0;
        var arrayOfIDsForTheNumberOfItems = new Array();
        var CurrentTime = new Date();
        var Total = 0;
        var New_Row_Counter = 6;
        var AdminID = -1;
        var ProductID = -1;
        var productName ;



        function Send_Requet_For_PHP_File(ids) {
            var product = document.getElementById(""+ids).value;
            productName = product;



         //   alert("ِAmr saidam " + document.getElementById("ProductName").value);

          //  window.location.href = 'FetchForSalesPoint.php';
            var xhtmlreq = new XMLHttpRequest();
            var url = "FetchForSalesPoint.php";

            var vars = "ProductName=" + product ;//+ "&Pass=" + Pass + "&Email=" + Email + "&Address=" + Address + "&Phone=" + Phone;
            xhtmlreq.open("POST", url, true);
            xhtmlreq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhtmlreq.onreadystatechange = function () {
                if (xhtmlreq.readyState == 4 && xhtmlreq.status == 200)
                {
                    //console.info(xhtmlreq.responseText);
                    var move = xhtmlreq.responseText;

                   // document.getElementById("TheProductName").value = move ;
                    //price = xhtmlreq.responseText;
                   var data = move.split("/");
                    if( data[2] != undefined) {
                        Price = data[2];
                        AdminID = data[4];
                        ProductID = data[1];

                      //  document.getElementById("TheInvoiceNumber").innerHTML =data[3];

                    }else
                    {
                     //   document.getElementById("price").innerHTML = ' ';
                    }


                    //  result.innerHTML = xhtmlreq.responseText;

                }

            }


            xhtmlreq.send(vars);








        }

        function Quanitiy(arg)
        {
            var ID;

            var result;

            var id = arg.getAttribute('id');
           var parent =  $(arg).parent().parent().attr('id');
            $("#"+parent+">td").map(function(){
                if(this.id != "") {
                   // alert(this.id);
                    //Temp = document.getElementById(this.id).value;
                    ID = this.id ;
                   
                 //   NumberOfItems++;


                }
            });

          // document.getElementById(""+ ID).innerHTML = "Amr";
           // alert("Amr Saidam "+));
          //  alert('' +parent);
            var value = parent.value;

        //  alert("Amr Saidam "+Temp);


            var Temp = document.getElementById(""+arg.id).value;
            if((Temp.match(/[\d]/))) {
                console.log("" + arg.id);
                console.log(Price);
                result = Price * Temp;
                var Totals = 0;

                document.getElementById("" + ID).innerHTML = result;
                for (var i = 1; i <= (New_Row_Counter -1); i++) {
                    if (document.getElementById("price" + i).innerText != "")
                        Totals = Totals + parseInt(document.getElementById("price" + i).innerText);
                }
                document.getElementById("Total").innerHTML = Totals;
                document.getElementById("total").innerHTML = Totals;
                // $(arg).parent().parent().children().each(function() {
                //        alert($(arg).parent().parent().children('td').attr('id'));
                ///    });//+">td").innerHTML  = "Amrsiadm" ;

                /// alert(""+$(arg).parent().parent().children('td').attr('id'));
            }else
            {
               // document.getElementById(""+arg.id).setAttribute('oninvalid','setCustomValidity(" القيمة المدخلة خطأ")');
                document.getElementById("" + ID).innerHTML = " ";
            }

        }


      function get_IDS(arg)
      {
          var id = arg.getAttribute('id');
          var parent =  $(arg).parent().parent().attr('id');
          return parent;
      }
        function TheNumberOfItems(args)
        {
           var flage = false;


            for(var i = 0 ; i< arrayOfIDsForTheNumberOfItems.length ; i++ )
            {
                //console.log();

                if((""+get_IDS(args) == arrayOfIDsForTheNumberOfItems[i]))
                {
                    flage = true;
                }
            }

            if(flage  == false)
            {
                alert(document.getElementById("table").childElementCount);
                document.getElementById("numberOfItems").innerHTML = "" + (++Items_Counter);
                arrayOfIDsForTheNumberOfItems["" + Items_Counter] = get_IDS(args);


            }

        }
        function Get_Time()
        {
            document.getElementById("time").innerHTML = ""+CurrentTime.getHours()+":"+CurrentTime.getMinutes()+":"+CurrentTime.getSeconds();
            document.getElementById("date").innerHTML = ""+CurrentTime.getMonth()+"/"+CurrentTime.getDate()+"/"+CurrentTime.getFullYear();


        }

            function generateRow()
            {
                if (window.event.keyCode == 9) {
                   // alert("was created");
                    var New_Line = document.createElement('tr');
                    New_Line.setAttribute('id', 'tr10');
                    New_Line.setAttribute('style', 'border :1px solid #ddd;  ');

                    //First Column for creating
                    var First_Column = document.createElement('td');
                    First_Column.setAttribute('style', 'text-align:right;padding:8px');
                    First_Column.textContent = ''+New_Row_Counter;
                    New_Line.appendChild(First_Column);


                    var Second_Column = document.createElement('td');
                    Second_Column.setAttribute('style', 'Padding:8px; border :1px solid #ddd; ');

                    var new_Input = document.createElement('input');
                    new_Input.setAttribute('id', 'Product'+New_Row_Counter);
                    new_Input.setAttribute('name', 'TheProductName');
                    new_Input.setAttribute('type', 'text');
                    new_Input.setAttribute('placeholder', 'اسم المنتج ');
                    new_Input.setAttribute('style', 'width:100%; height: auto;  ');

                    new_Input.setAttribute('onkeyup', 'Send_Requet_For_PHP_File(this.id);');
                    new_Input.setAttribute('onclick', 'TheNumberOfItems(this);');
                    Second_Column.appendChild(new_Input);
                    New_Line.appendChild(Second_Column);


                    var Third_Column = document.createElement('td');
                    Third_Column.setAttribute('style', 'Padding:8px; border :1px solid #ddd; ');

                    var Old_Input = document.createElement('input');
                    Old_Input.setAttribute('id', 'quantity'+New_Row_Counter);
                    Old_Input.setAttribute('name', 'TheProductName');
                    Old_Input.setAttribute('type', 'text');
                    Old_Input.setAttribute('placeholder', 'الكمية');
                    Old_Input.setAttribute('style', 'width:100%; height: auto;');
                    Old_Input.setAttribute('onkeyup', 'Quanitiy(this)');
                    Third_Column.appendChild(Old_Input);
                    New_Line.appendChild(Third_Column);

                    var Fourth_Column = document.createElement('td');
                    Fourth_Column.setAttribute('id', 'price'+New_Row_Counter);
                    Fourth_Column.setAttribute('style', 'text-align: center');
                    New_Line.appendChild(Fourth_Column);

                    if (New_Row_Counter % 2 == 1) {
                        New_Line.setAttribute('style', 'background-color:#F9F9F9');
                    }
                    New_Row_Counter++;


                    var temp = document.getElementsByTagName("table")[1];
                    temp.appendChild(New_Line);
                }
               // if (window.event.keyCode == 9)
               // {
               //     var d=document.getElementById("table");
              //      d.innerHTML += "<input type='text' name='quantity"+numOfLines+"'>&nbsp&nbsp";
             //       d.innerHTML += "<input type='text' name='itemCode"+numOfLines+"' onBlur='generateRow()'><br>" ;
             //       var felementVal = "quantity"+numOfLines;
             //       alert(felementVal);
             //       var felement = eval("document.forms[0].quantity"+numOfLines);
             //       felement.focus();
            //        felement.focus();
              //      numOfLines += 1;
               // }


            }


        function Submit_Invoice(arg) {
            var temp = 0;

            var product;
            var Quantity;

            alert("inside1");

            for (var i = 1; i <= (New_Row_Counter -1); i++) {
                //temp = temp+ parseInt(document.getElementById("price"+i).innerText);
                // var product = document.getElementById("" + ids).value;


                //   alert("ِAmr saidam " + document.getElementById("ProductName").value);

                //  window.location.href = 'FetchForSalesPoint.php';

                product = document.getElementById("Product" + i).value;

                Quantity = document.getElementById("quantity" + i).value;
                alert("" + product);
                alert("" + Quantity);


                var xhtmlreq = new XMLHttpRequest();
                var url = "Submit_Invoice.php";
                xhtmlreq.open("POST", url, true);
                xhtmlreq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                var vars = "ProductName=" + product + "&AdminID=" + AdminID + "&ProductID=" + ProductID + "&Quantity=" + Quantity;//+ "&Pass=" + Pass + "&Email=" + Email + "&Address=" + Address + "&Phone=" + Phone;

                alert("inside2");
                xhtmlreq.onreadystatechange = function () {
                    if (xhtmlreq.readyState == 4 && xhtmlreq.status == 200) {
                        //console.info(xhtmlreq.responseText);
                        var move = xhtmlreq.responseText;
                        alert(move);

                        // document.getElementById("TheProductName").value = move ;
                        //price = xhtmlreq.responseText;
                        // var data = move.split("/");
                        // if( data[2] != undefined) {
                        // Price = data[2];
                        //   document.getElementById("TheInvoiceNumber").innerHTML =data[3];

                        //}else
                        //{
                        //   document.getElementById("price").innerHTML = ' ';
                        //}


                        //  result.innerHTML = xhtmlreq.responseText;

                    }
                    // alert(document.getElementById("quantity" + i).value);


                }
                xhtmlreq.send(vars);
            }
        }

    </script>

</head>
<body onload="Get_Time()">

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

<div class="normalheader transition animated fadeIn" dir="rtl">
    <div class="hpanel" dir="rtl">
        <div class="panel-body" dir="rtl">
            <a class="small-header-action" href="#">
                <div class="clip-header">
                    <i class="fa fa-arrow-up"></i>
                </div>
            </a>

            <h4 class="font-light m-b-xs" dir="rtl">
فاتورة بيع
            </h4>

        </div>
    </div>
</div>

<div class="content animate-panel" >

    <div class="row"  >
        <div class="col-lg-12" >
            <div class="hpanel" >

                <div class="panel-body p-xl" >



<div class="row"  style="padding-right:130px;padding-left:130px">


                   <div class="row" dir="rtl" style="font-size:16px;" >
                       <div class="col-md-4" >
                           <div> رقم الفاتورة :    <span id="TheInvoiceNumber"></span></div>
                       <div> نوع الفاتور:   فاتورة بيع </div >
                       <div> تاريخ اصدار الفاتورة :     <span id="date"></span></div>

                       </div>
                       <div class="col-md-4"></div>
                       <div class="col-md-4" >
                           <div>  عدد السلع : <span id="numberOfItems"></span>  </div>
                           <div> المبلغ الاجمالي :<span id="total"></span> </div>
                           <div>    وقت اصدار الفاتورة :<span id="time"></span>   </div>
                       </div>

                   </div>
    <form method="post" >
                    <div class="row">
                        <hr/>
                    </div>
                    <div class="row" style="">

                        <div dir="rtl" style=" height:290px; overflow-y:scroll;" >
                            <table id="table" class="table table-bordered table-striped" dir="rtl"  >
                                <thead style="text-align: center">
                                <tr style="font-size:18px;" >
                                    <th style="text-align: center; width: 50px">الرقم</th>
                                    <th style="text-align: center; width: 300px">اسم المنتج </th>
                                    <th style="text-align: center; width: 100px">الكمية </th>
                                    <th style="text-align: center">السعر</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="td1">
                                    <td>1</td>
                                    <td><input id="Product1" name="TheProductName" type="text" placeholder="   اسم المنتج " style="width:100%; height: auto;" onkeyup="Send_Requet_For_PHP_File(this.id)" onclick="TheNumberOfItems(this)" ></td>
                                    <td ><input id="quantity1" name="TheProductName" type="text" placeholder=" الكمية  "style="width:100%; height: auto;" onkeyup="Quanitiy(this)"></td>
                                    <td id="price1" style="text-align: center" ></td>

                                </tr>
                                <tr id="td2">
                                    <td>2</td>
                                    <td><input id="Product2" name="TheProductName" type="text" placeholder="اسم المنتج "style="width:100%; height: auto;" onkeyup="Send_Requet_For_PHP_File(this.id)" onclick="TheNumberOfItems(this)"></td>
                                    <td><input id="quantity2" name="TheProductName" type="text" placeholder=" الكمية  "style="width:100%; height: auto;" onkeyup="Quanitiy(this)"></td>
                                    <td  id="price2" style="text-align: center"></td>

                                </tr>
                                <tr id="td3">
                                    <td>3</td>
                                    <td><input id="Product3" name="TheProductName" type="text" placeholder="اسم المنتج "   style="width:100%; height: auto;" onkeyup="Send_Requet_For_PHP_File(this.id)" onclick="TheNumberOfItems(this)"></td>
                                    <td><input id="quantity3" name="TheProductName" type="text" placeholder=" الكمية  "style="width:100%; height: auto;" onkeyup="Quanitiy(this)"></td>
                                    <td id="price3" style="text-align: center"></td>

                                </tr>
                                <tr id="td4">
                                    <td>4</td>
                                    <td><input id="Product4" name="TheProductName" type="text" placeholder="اسم المنتج "style="width:100%; height: auto;" onkeyup="Send_Requet_For_PHP_File(this.id)" onclick="TheNumberOfItems(this)"></td>
                                    <td><input id="quantity4" name="TheProductName" type="text" placeholder=" الكمية   "style="width:100%; height: auto;" onkeyup="Quanitiy(this)"></td>
                                    <td id="price4" style="text-align: center"></td>

                                </tr>
                                <tr id="td5" onkeyup=" " >
                                    <td>5</td>
                                    <td><input id="Product5" name="TheProductName" type="text" placeholder="اسم المنتج "style="width:100%; height: auto;" onkeyup="Send_Requet_For_PHP_File(this.id)" onclick="TheNumberOfItems(this);"></td>
                                    <td><input  id="quantity5" name="TheProductName" type="text" placeholder=" الكمية  "style="width:100%; height: auto;" onkeyup="Quanitiy(this);" onkeydown="generateRow();"></td>
                                    <td id="price5" style="text-align: center"></td>

                                </tr>

                                </tbody>
                                <tfoot>
                                <tr style="font-size:18px;">
                                    <td colspan="3" style="text-align: center">  السعر الاجمالي </td>
                                    <td id="Total"style="text-align: center"></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                    </div>
                    <div class="row" style="float: right;width: 104%; font-size:16px;">
                       <p style="float: right"> : ملاحظات </p>
                        <div class="row" style="width: 100%; margin-left:1px; ">
                       <textarea style="height: 100px;width:100%;  "></textarea>
                        </div>
                    </div>
                    <div class="row"  style="">
                        <div class="col-lg-4"></div>
                        <div class="col-md-1"></div>
                        <div class="col-lg-4"  style="padding-top: 2%;">
                        <input  name="Cancel" type="button"  value="الغاء" class="btn btn-danger btn-sm">
                        <input name="Save" type="button"  value="اعتماد" class="btn btn-info btn-sm" width="30px"  onclick="Submit_Invoice('table')" >
                        </div>
                    </div>

    </form>
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
<script src="vendor/iCheck/icheck.min.js"></script>
<script src="vendor/sparkline/index.js"></script>

<!-- App scripts -->
<script src="scripts/homer.js"></script>

</body>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:25 GMT -->
</html>