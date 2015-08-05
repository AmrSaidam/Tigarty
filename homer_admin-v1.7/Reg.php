<?php

Insert_Into_DataBase();
echo 'Success';

function Insert_Into_DataBase()
{
    $ServerName = "localhost";
    $DataBaseName = "mustafa3_tigarty";
    $UserName ="root";
    $Password="";

    $InsertQuery = "INSERT INTO admin (username,password,email,phone,place) VALUES ('" . $_POST['UserName'] . "','" . $_POST['Pass'] . "','" . $_POST['Email'] . "',
                                      '" . $_POST['Phone'] . "','" . $_POST['Address'] . "')";

    try {
        if (($connect = mysqli_connect($ServerName, $UserName, $Password, $DataBaseName))) {
            if ($Result = mysqli_query($connect, $InsertQuery)) {
                et_User_ID($_POST['UserName'] ,$connect);
            }


        }
    } catch (Exception $ex) {

    } finally {
        $connect->close();
    }


}
function Get_User_ID($UserNameFoSearch ,$connect)
{
    $SelectQuery = "SELECT AdminID from admin where username = '".$UserNameFoSearch."'";
    if($result = $connect->query($SelectQuery))
    {
        while($row =  $result->fetch_assoc())
        {
            setcookie("UserName", $row['AdminID'], time() + (86400 * 30), "/");
            throw new Exception("cannot retrieve the ID ");

        }
    }


}