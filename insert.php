
<?php

require './conexao.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['cep'], $_POST['endereco'], $_POST['bairro'], $_POST['cidade'], $_POST['estado'])) {
        
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        
        $sql = "INSERT INTO tabela (cep, endereco, bairro, cidade, estado) VALUES (:cep, :endereco, :bairro, :cidade, :estado)";
        $stmt = $pdo->prepare($sql);

        
        $stmt->bindParam(':cep', $cep);
        $stmt->bindParam(':endereco', $endereco);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':estado', $estado);

        if ($stmt->execute()) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir os dados.";
        }
    } else {
        echo "Dados do formulário ausentes.";
    }
}
?>
