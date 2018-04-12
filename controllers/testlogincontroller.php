<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if ($_POST)
{
    if (isset($_POST[submit]) AND $_POST['submit'] == "login" )
    { 
                 $username= £_POST ['username'];
                 $password= $_POST['password'];

try
{
    include '.models/testuserloginmodel.php';
    $login = new Login($username, $password);
    
    
    if ($login == TRUE)

    {
        session_start();
        $_SESSION['username'] = $username;
        header('Location:index.php');
    }
}
 catch (Exception $ex) {
echo $ex->getMessage();
}
}
}