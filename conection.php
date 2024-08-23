<?php
header('Content-Type: text/html; charset=utf-8');

// Conecte-se ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_registro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtenha a consulta do parâmetro
$query = isset($_GET['query']) ? $conn->real_escape_string($_GET['query']) : '';

if ($query) {
    // Prepare e execute a consulta
    $sql = "SELECT nome FROM cursos WHERE nome LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exiba os resultados
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . htmlspecialchars($row['nome']) . "</p>";
        }
    } else {
        echo "<p>Nenhum curso encontrado.</p>";
    }
} else {
    echo "<p>Digite um nome para buscar.</p>";
}

// Feche a conexão
$conn->close();
?>