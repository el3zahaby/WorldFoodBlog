<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class testlogin{
    
    private $username;
    private $password;
    
    
    function __construct($username,$password)
    {
            $this->setData($username,$password);
            $db = Db::getInstance();
}

private function setData($username, $password)
{
        $this->username= $username;
        $this->password= $password;
        
    }
}
function getData()
{
    $query = "SELECT* from username where 'username' = '$this->username' AND 'password' = '$this->password'";
$sql = mysql_query($query);
if (mysql_num_rows($sql)>0)
{
    return TRUE;
}
else
{
 throw new exception ("username of password is invalid , please try agaain.");   
}
    
}
function close(){
}


