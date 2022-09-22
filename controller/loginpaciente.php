<?php 

    include_once ("../classes/manipulaDados.php");
    $manipula = new manipulaDados();
    session_start();
    $login = $_POST['txtUsuario'];
    $password = $_POST['txtSenha'];
    $linhas = $manipula-> validarLoginPaciente($login,$password);

    if($linhas == null){
        echo '<script>alert("Usuário ou senha do paciente não cadastrado"></script>';
        echo "<script>location = '../index.php';</script>";
    }else{
        $_SESSION['usu']=$login;
        setcookie("usuario",$login);
        setcookie("senha",$password);
        header("location:../paciente/home.php");
    }