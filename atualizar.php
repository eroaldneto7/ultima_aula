<?php
include "conexao.php";
$codigo = $_POST['cod'];
$desc = $_POST['desc_nova'];
$cat = $_POST['cat_nova'];
$setor = $_POST['setor_novo'];

//1ª passo comando sql
$sql = "UPDATE tb_inventarios set descricao='$desc' where codigo='$codigo'";

//2º passo- preparar conteudo
$atualizar = $pdo->prepare($sql);
//3º passo - tentar executar
try{
    $atualizar->execute();
    if($atualizar->rowCount()>=1){
        echo "atualizado com sucesso";
        

    }else{
        echo "nenhuma alteração foi encontrada";
    }

}catch(PDOException $erro){
    echo "falha ao atualizar!".$erro->getMessage();
}

?>