<?php
$database = "nome do banco";
$host = "localhost";
$conn = pg_connect ("host=$host port=5432 dbname=$database user=postgres password=tua senha");
if (!$conn) {
        echo '<div class="error">Erro ao estabelecar a conexão! </div>';
exit;
}
?>