<?php
Update_Quantity();

function Update_Quantity()
{
    try {
        $ServerName = "localhost";
        $DataBaseName = "mustafa3_tigarty";
        $UserName = "root";
        $Password = "";
        $Count = 0;
        $Quantity = -1;
        //$UpdateQuery = "UPDATE productdetails set quantity  WHERE AdminID =".$_POST['AdminID']."&& productdetailsid =".$_POST['ProductID'];


        $SelectQuery = "SELECT quantity FROM productdetails WHERE AdminID = 1 AND productname ='".$_POST['ProductName']."'";

        if (($connect = mysqli_connect($ServerName, $UserName, $Password, $DataBaseName))) {
            if ($result = $connect->query($SelectQuery)) {
                while ($row = $result->fetch_assoc()) {
                    $Quantity = (int)$row['quantity'];
                    $Count++;


                }

            }
        }

        $UpdateQuery = "UPDATE productdetails set quantity =  $Quantity -".(int)$_POST['Quantity']." WHERE AdminID = 1 AND productname = '".$_POST['ProductName']."'";
        if (($connect = mysqli_connect($ServerName, $UserName, $Password, $DataBaseName))) {
            if ($Result = mysqli_query($connect, $UpdateQuery)) {
                echo 'true';
            }


        }
    }catch (Exception $ex)
    {
        echo'There is an exception ';

    }finally
    {
        $connect->close();
    }


}