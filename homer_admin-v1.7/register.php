
<!DOCTYPE html>
<html>

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:33 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Page title -->
    <title>HOMER | WebApp admin theme</title>
    <script>
        function Validation() {
            var status = true;
            var UserName = document.getElementById("UserName").value;
            var Pass = document.getElementById("Pass").value;
            var Email = document.getElementById("Email").value;
            var Address = document.getElementById("Address").value;
            var Phone = document.getElementById("Phone").value;

            if ((document.getElementById("Pass").value == document.getElementById("RePass").value) && (document.getElementById("RePass").value != "") && (document.getElementById("Pass").value != "")) {
                if((document.getElementById("Email").value == document.getElementById("ReEmail").value)&& (document.getElementById("Email").value != "") && (document.getElementById("ReEmail").value != "")) {

                    alert("This i sworking");
                    Send_Requet_For_PHP_File(UserName, Pass, Email, Address, Phone);
                }else
                {
                    alert( "ييرجى اعادة الايميل بشكل صحيح  ","خطأ في الايميل ");
                    document.getElementById("Email").value = "";
                    document.getElementById("ReEmail").value = "";
                    return false;

                }
            } else {
                status = false;
                document.getElementById("Pass").value = "";
                document.getElementById("RePass").value = "";
                return false;
                document.write(" تحقق من كلمة المرور ");


                // document.getElementById("Address").value = document.getElementById("Address").value;
                // document.getElementById("Phone").value = document.getElementById("Phone").value;

            }
            return true;
        }

    </script>

    <script>
        function Jor_Fun()
        {
            document.getElementById("Address").value = "  ";
           document.getElementById("Address").value = " الأردن / ";
            document.getElementById("Phone").value = "00962-";


            return false;
        }
        function Pal_Fun()
        {
            document.getElementById("Address").value = "  ";
            document.getElementById("Address").value = " فلسطين /";
            document.getElementById("Phone").value = "00972-";
            return false;
        }

        function suod_Fun()
        {
            document.getElementById("Address").value = "  ";
            document.getElementById("Address").value = " السعودية /";
            document.getElementById("Phone").value = "00966-";
            return false;
        }
    </script>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
function Send_Requet_For_PHP_File(UserName , Pass  , Email  , Address ,Phone) {


    alert("ِAmr saidam " + document.getElementById("Pass").value);

    window.location.href = 'login.html';
    var xhtmlreq = new XMLHttpRequest();
    var url = "Reg.php";

    var vars = "UserName=" + UserName + "&Pass=" + Pass + "&Email=" + Email + "&Address=" + Address + "&Phone=" + Phone;
    xhtmlreq.open("POST", url, true);
    xhtmlreq.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhtmlreq.onreadystatechange = function () {
        if (xhtmlreq.readyState == 4 && xhtmlreq.status == 200) {

        }

    }


            xhtmlreq.send(vars);




            // $.POST("Reg.php",{Pass:pass}, function(data){alert("in Aajax")});

           /* var all = new Array(5);
            all[0]= document.getElementById("UserName").value;
            all[1]= document.getElementById("Pass").value;
            all[2]= document.getElementById("Email").value;
            all[3]= document.getElementById("Address").value;
            all[4]= document.getElementById("Phone").value;
            //dataArray[5]= "longitude:" + lng;
            //dataArray[6]= "timestamp:" + timeStamp;*/
           /* var all = {
                UserName: document.getElementById("UserName").value,
                Pass: document.getElementById("Pass").value,
                Email: document.getElementById("Email").value,
                Address: document.getElementById("Address").value,
                Phone:  document.getElementById("Phone").value
                };*/
          //  var jsonString = JSON.stringify(all);
         //   var xhtmlreq = new XMLHttpRequest();
         //   var vthis = this;

        /* $.ajax({
               type: "POST",
               //dataType : 'json',
                url: "Reg.php", //includes full webserver url
                data: {data , jsonString }  ,
                cache: false,

                success: function(response){
                    console.log(response);
                    alert("OK");

                    window.location = 'Reg.php';
                    //window.location = 'Reg.php';

                }

            });
*/

            //ajax.open("POST","reg.php",true);

          // window.open('reg.php','_self');

          //  xhtmlreq.onreadystatechange = function (){alert("Amr SAida")}
          ///  xhtmlreq.open("GET" , "http://http://localhost/Tigarty/homer_admin-v1.7/Reg.php?json="+jsonString ,true);
           // xhtmlreq.send(null);




}
    </script>
</head>
<body class="blank">

<!-- Simple splash screen-->
<div class="splash"> <div class="color-line"></div><div class="splash-title"><h1>Homer - Responsive Admin Theme</h1><p>Special AngularJS Admin Theme for small and medium webapp with very clean and aesthetic style and feel. </p><img src="images/loading-bars.svg" width="64" height="64" /> </div> </div>
<!--[if lt IE 7]>
<p class="alert alert-danger">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php $PassErorr = true;?>
<div class="color-line"></div>
<div class="back-link">
    <a href="index-2.html" class="btn btn-primary">Back to Dashboard</a>
</div>
<div class="register-container" dir="rtl" >
    <div class="row">
        <div class="col-md-12">
            <div class="text-center m-b-md">
                <h2> <i class="pe-7s-users"></i>  تسجيل عضوية  </h2>

            </div>
            <div class="hpanel">
                <div class="panel-body">
                        <form action="" id="loginForm" method="post" >
                            <div class="row">
                            <div class="form-group col-lg-12">
                                <label> اسم المستخدم</label>
                                <input type="text" value="" id="UserName" class="form-control" name="UserName"
                                       required pattern="^([\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z\ ]+[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z-_\ ]{3,16})$"
                                       aria-describedby="name-format" aria-required="true"
                                       oninvalid="setCustomValidity(' يرجى ادخال الاسم بالشكل الصحيح ')"
                                       onchange="try{setCustomValidity('')}catch(e){}" placeholder="أدخل اسم المستخدم...">
                            </div>
                            <div class="form-group col-lg-6">
                                <label> اعادة كلمة المرور :</label>
                                <input type="password"  id="RePass" class="form-control" name="RePass" required  pattern="^[a-zA-Z]\w{3,14}$"  placeholder="******************" >
                            </div>
                            <div class="form-group col-lg-6">
                                <label>كلمة المرور :</label>

                                <input type="password" id="Pass" class="form-control" name="Pass" required      pattern="^[a-zA-Z]\w{3,14}$" placeholder="******************" />
                                <span id="sd"></span>






                            </div>


                            <div class="form-group col-lg-6">
                                <label> اعادة الايميل :</label>
                                <input type="email" value="" id="ReEmail" class="form-control" name="ReEmail" required  oninvalid="setCustomValidity(' الايميل لا يحتوي على اشارة @   . يرجى ادخال الايميل بشكل صحيح ')"
                                       onchange="try{setCustomValidity('')}catch(e){}"
                                       placeholder=" example@.com"
                                    />
                            </div>
                            <div class="form-group col-lg-6">
                                <label>الايميل : </label>
                                <input type="email" value="" id="Email" class="form-control" name="Email"
                                       oninvalid="setCustomValidity(' الايميل لا يحتوي على اشارة @   . يرجى ادخال الايميل بشكل صحيح ')"
                                       onchange="try{setCustomValidity('')}catch(e){}"
                                       placeholder=" example@.com" required />
                            </div>
                                <div class="form-group col-lg-6" >

                                    <label> العنوان :</label>
                                  <!--  <div class="row">
                                        <div   class="col-md-8">
                                            <input type="text" value="" id="Address" class="form-control" name="Address" required />
                                        </div>
                                    <div class="col-md-4">
                                        <select class="form-control m-b" >
                                            <option><img src="images\Icons\1438787924_Flag_of_Jordan.png" width="20px" height="20px"></option>
                                            <option>Palestine</option>
                                            <option>Palestine</option>

                                        </select>
                                    </div>


                                </div> -->


<div>
                                        <input type="text" id="Address" name="Address" class="form-control" style="float: right; width: 80%">




                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" >الدولة  <span class="caret"></span></button>
                                        <ul class="dropdown-menu pull-right" id="Countries">

                                            <li id="Pales"><a href="#" data-value="S" style="float: right" onclick="return Pal_Fun()"><img class="" src="images\Icons\1438788270_Flag_of_Palestine.png" width="20px"/> فلسطين </a></li>
                                            <li id="Jor"  data-value="A"><a href="" style="float: right" onclick="return Jor_Fun() " ><img class="" src="images\Icons\1438791171_Flag_of_Jordan.png" width="20px"/> الأردن </a></li>
                                            <li id="soudi"><a href="#" style="float: right"data-value="M" onclick="return suod_Fun()"><img class="" src="images\Icons\1438791127_Flag_of_Saudi_Arabia.png" width="20px"/> السعودية </a></li>
                                        </ul>
</div>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label> رقم الجوال :</label>
                                    <input type="" value="" id="Phone" class="form-control" name="Phone" required dir="ltr">
                                </div>

                            <!--<div class="checkbox col-lg-12">
                                <input type="checkbox" class="i-checks" checked>
                                Sigh up for our newsletter
                            </div>
                            -->
                            </div>
                            <div class="text-center">
                                <button id="success" class="btn btn-success" name="success" onclick=" return Validation() ">تسجيل</button>
                                <button class="btn btn-default">الغاء</button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center" style="font-size: 20px">
            تسجيل عضوية لدى شركة <strong> تجارتي</strong>
        </div>
    </div>
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

<!-- Mirrored from webapplayers.com/homer_admin-v1.7/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2015 12:46:33 GMT -->
</html>