<?php
Retrieve_Data_TO_Ajax();
function Retrieve_Data_TO_Ajax()
{
try {
    $ServerName = "localhost";
    $DataBaseName = "mustafa3_tigarty";
    $UserName = "root";
    $Password = "";
    $Count = 0;
    $SelectQuery = "SELECT productname , productID  ,  onesale, productdetailsid , AdminID  FROM productdetails  WHERE productname = '".$_POST['ProductName']."'";

    if (($connect = mysqli_connect($ServerName, $UserName, $Password, $DataBaseName))) {
        if ($result = $connect->query($SelectQuery)) {
            while ($row = $result->fetch_assoc()) {
               $productName = $row['productname'] ;
                $productID = $row['productID'] ;
                $onesale = $row['onesale'] ;
                $productdetailsid = $row['productdetailsid'] ;
                $AdminID = $row['AdminID'];
                $Count++;



            }

        }
    }


    if( $Count > 0)
         echo '' . $productName . '/' . $productID . '/' . $onesale . '/' . $productdetailsid.'/'.$AdminID;

  //  print_r($TheProduct);
}catch(Exception $ex)
{
    echo 'Erorr with database';
}
    finally
    {
        $connect->close();
    }
}