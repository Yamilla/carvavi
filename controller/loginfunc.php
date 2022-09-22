<?php 

    include_once ("../classes/manipulaDados.php");
    $manipula = new manipulaDados();
    session_start();
    $login = $_POST['txtUsuariofunc'];
    $password = $_POST['txtSenhafunc'];
    $linhas = $manipula-> validarLoginFuncionario($login,$password);

    if($linhas == null){
        echo '<script>alert("Usuário ou senha do Funcionario não cadastrado"></script>';
        echo "<script>location = '../index.php';</script>";
    }else{
        $_SESSION['usu']=$login;
        setcookie("usuario",$login);
        setcookie("senha",$password);
        header("location:../enfermeiro/home.php");
    }
