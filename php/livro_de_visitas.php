<?php
// Verifica se os dados foram submetidos via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $dataHora = date('Y-m-d H:i:s');

    // Formata os dados para salvar no arquivo
    $registro = "Nome: $nome\nE-mail: $email\nComentário: $comentario\nData e Hora: $dataHora\n\n";

    // Caminho do arquivo de texto
    $arquivo = 'livro_de_visitas.txt';

    // Abre o arquivo para escrita
    $fp = fopen($arquivo, 'a');

    // Escreve os dados no arquivo
    fwrite($fp, $registro);

    // Fecha o arquivo
    fclose($fp);

    // Redireciona de volta para a página do livro de visitas
    header("Location: livro_de_visitas.php");
    exit;
} else {
    // Se não foi submetido via POST, redireciona para a página do livro de visitas
    header("Location: livro_de_visitas.php");
    exit;
}
?>
