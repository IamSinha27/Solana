<?php
    $name=$_Post['name'];
    $email=$_Post['email'];
    $pass=$_Post['pass'];
    $mob=$_Post['mob'];
    $aadh=$_Post['aadh'];

    $conn = new mysqli('local host','root','','test');
    if($conn->connect_error)
    {
        die('Connection Failed :'.$conn->connect_error)
    }
    else
    {
        $stmt = $conn->prepare("insert into registeration(name, email, pass, mob, aadh) values(?, ?, ?, ?, ?, ?)")
        $stmt->bind_param("sssii", $name, $email, $pass, $mob, $aadh);
        $stmt->execute();
        echo "Congratulations!"
        $stmt->close()
        $conn->close()
    }
?>