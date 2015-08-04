<?php
$q = intval($_GET['q']);
include 'connectdb.php';


$sql="SELECT * FROM supplier WHERE supplierid = '".$q."'";
$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)) {
    echo "
	 <div >اسم التاجر: ".$row['fullname']." </div><span></span>
                                    <div >العنوان:  ".$row['place']."</div><span></span>
                                    <div >الجوال:  ".$row['phone']."</div><span></span>
                                    <div>البريد الالكتروني: ".$row['email']." </div><span></span>";
    
    
}

?>
