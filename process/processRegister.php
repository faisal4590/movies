<?php
/**
 * Created by PhpStorm.
 * User: optim
 * Date: 2/1/2019
 * Time: 12:34 PM
 */

require '../connection/connection.php';

if(!empty($_POST))
{
    $msg='';


    if(empty($_POST['name']) || empty($_POST['email'])
        || empty($_POST['password']) || empty($_POST['confirm_password']))
    {
        $msg.= '<p>Please fill up all the data</p>';
    }

    if($_POST['password']!=$_POST['confirm_password'])
    {
        $msg.= '<p>Your password did not match. Please Enter your Password Again.</p>';
    }


    if(strlen($_POST['password'])>30)
    {
        $msg.= '<p>Password must be within 30 charecters....</p>';
    }


    $unm=htmlspecialchars($_POST['name']);


    $query = "select * from users where users.username='$unm'";
    $result = $db->query($query);
    if($result->num_rows > 0)
    {
        $msg.= '<p>Username already exists.</p>';
    }

    //same method e check korteci email already exist kina
    $email=htmlspecialchars($_POST['mail']);
    $query = "select * from users where users.email='$email'";
    $result = $db->query($query);
    if($result->num_rows > 0)
    {
        $msg.= '<p>Email already exists.</p>';
    }

    if(is_numeric($_POST['name']))
    {
        $msg.= '<p>Name must be in String Format...</p>';
    }

    if($msg!= '')
    {
        header('location:index.php?error=' .$msg);
    }
    else
    {
        $unm=htmlspecialchars($_POST['name']);
        $pwd=htmlspecialchars($_POST['password']);
        $email=htmlspecialchars($_POST['email']);

        //prepare statement starts here

        $sql = 'insert into users(username, email, password)
			values(?,?,?)';
        $statement = $db->prepare($sql);
        $statement->bind_param("sss", $unm, $email, $pwd);
        $statement->execute();
        $statement->close();
        $db->close();

        //prepare statement ends here

        header("location:../index.php?ok=1");
    }
}
else
{
    header("location:index.php");
}
