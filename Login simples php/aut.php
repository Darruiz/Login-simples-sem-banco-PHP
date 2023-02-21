<?php 

    session_start();
try {



        $user_certo = "Darruiz"; 
        $pass_certa = "123";

    $user_digitado = $_POST ["user"]; 
    $pass_digitada = $_POST ["pass"];



    if ($user_digitado == $user_certo) {

        if($pass_digitada == $pass_certa); {
            $_SESSION["usuario_logado"] = $user_digitado;
            header("Location: index.php");
        } 
       
    }  
    if ($user_digitado != $user_certo) { 
 throw new Exception("Error");
    }
    if ($pass_digitada != $pass_certa) { 
        throw new Exception("Error");
           }


} catch (Exception $e){

        echo $e->getMessage(); 
        if ($user_digitado != $user_certo) 
        header("Location: login.php?falhou=true");

        if ($pass_digitada != $pass_certa) 
        header("Location: login.php?falhou=true");

        

}