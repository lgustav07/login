<?php
require_once("conexao.php");
    if (isset($_GET['acao']) && $_GET['acao'] === 'excluir') {
        if (isset($_GET['acao']) && $_GET['acao'] === 'excluir') {
            $id= $_GET['id'];
            $sql= "DELETE FROM usuarios WHERE id=$id";
            $del= $conn->prepare($sql);
            $del-> execute ();
            header ('Location: home.php');
        }
    }elseif(isset($_GET['acao']) && $_GET['acao'] === 'editar'){

    $id= $_POST["id"];
    $nome= $_POST["nome"];
    $senha= $_POST["senha"];
    $sql= "UPDATE usuarios SET nome=?, senha=? WHERE id=?";
    $edita= $conn->prepare($sql);
    if ($edita === false) {
        die("Erro na preparação da consulta: " . $conn->error);
    }else{
       $edita->bind_param("ssi",$nome, $senha, $id);
        if($edita->execute()){
            header('Location: home.php');
            $edita->close();
            exit();
        }
    }
    }
?>