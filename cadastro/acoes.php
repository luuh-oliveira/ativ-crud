<?php

require("../database/conexao.php");

switch ($_POST["acao"]) {
    case 'inserir':

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $celular = $_POST["celular"];


        $sql = "INSERT INTO tbl_pessoa (nome, sobrenome, email, celular) 
            VALUES ('$nome', '$sobrenome', '$email', '$celular')";


        $resultado - mysqli_query($conexao, $sql);

        header('location: index.php');

        break;

    case 'deletar':

        $cod_pessoa = $_GET["cod_pessoa"];

        $sql = "DELETE FROM tbl_pessoa WHERE cod_pessoa = $cod_pessoa";
        $resultado = mysqli_query($conexao, $sql);

        header("location: ../listagem/index.php");

        break;

    case 'editar':

        $cod_pessoa = $_GET["cod_pessoa"];

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $celular = $_POST["celular"];

        $sql = "UPDATE tbl_pessoa SET nome = '$nome', 
            sobrenome = '$sobrenome', email = '$email', celular = '$celular'
            WHERE cod_pessoa = $cod_pessoa";

        $resultado = mysqli_query($conexao, $sql);

        header("location: ../listagem");

        break;

    default:
        # code...
        break;
}
