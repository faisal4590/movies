<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/1/2019
 * Time: 12:25 PM
 */
session_start();
require '../connection/connection.php';

if(!empty($_POST))
{
    $msg= '';

    if(empty($_POST['email']))
    {
        $msg .= '<p>Email does not exist</p>';
    }

    if(empty($_POST['password']))
    {
        $msg .= '<p>Password is incorrect.</p>';
    }

    else
    {

        $email=$_POST['email'];


        $query="select * from users where users.email='$email'";

        $res=$db->query($query) or die('wrong query');

        $row=$res->fetch_array(MYSQLI_ASSOC);

        if(!empty($row))
        {
            if($_POST['password'] == $row['password'])
            {
                $_SESSION=array();
                $_SESSION['unm']=$row['username'];
                $_SESSION['uid']=$row['id'];
                $_SESSION['upass']=$row['password'];
                $_SESSION['uemail']=$row['email'];
                $_SESSION['status']=true;

                if($_SESSION['uemail']!="admin@gmail.com")
                {
                    header("location:../index.php");
                }
                else
                {
                    header("location:../admin/index.php");
                }
            }

            else
            {
                echo '<b style="color:red;font-size: 18px;text-align: center;">Incorrect Password.</b>';
            }
        }
        else
        {
            echo '<b style="color:red;font-size: 18px;text-align: center;">Invalid User.</b>';
        }
    }

}
else
{
    header("location:../index.php");
}