<?php

    include 'connect.php';

    $queryResult=$con->query("SELECT * FROM tb_berita");

    $result=array();

    while($fetchData=$queryResult->fetch_assoc()){
        $result[]=$fetchData;
    }

    echo json_encode($result);

?>