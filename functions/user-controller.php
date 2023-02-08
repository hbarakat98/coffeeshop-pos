<?php



function sign_in($username,$password){
    global $connection;
    $query="select * from user where username='{$username}' and password ='{$password}'";
    $sigin_query=mysqli_query($connection,$query);

    return $sigin_query;
}



?>