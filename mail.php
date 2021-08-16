<?php
if(isset($_POST["mail"]) && !empty($_POST["mail"]) && $_POST["mail"] === $_POST["mail2"]){
        // $repjs = json_encode( ['reponse' => $_POST["nom"], 'email' => $_POST["mail"], 'mesage' => $_POST["msg"],  ]);
        // echo json_encode( ['num' => $_POST["num"]]);

        $name =  $_POST["nom"];  
        $mail =  $_POST["mail"]; 
        $message =  $_POST["msg"]; 

        header("location: mail_sent.php");
        mail( "gerente.perfecto@gmail.com", $name ," ".$name." | mail: ".$mail." | message: ".$message ); 
    }else {
        header("location: mail_not_sent.php");
    };

