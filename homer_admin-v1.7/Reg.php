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
                echo 'connect successfully';
            }


        }
    } catch (Exception $ex) {

    } finally {
        $connect->close();
    }


}