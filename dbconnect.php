<?php
    $host = "localhost";
    $username = "";
    $pwd = "";
    $dbname = "";
    
    mysql_connect($host,$username,$pwd);
    
    mysql_select_db($dbname);
    
    $sql = "SELECT * from `problem` where `id`='1'";
    $array = mysql_query($sql);
    echo json_encode($array);
?>