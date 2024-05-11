<?php
echo "<h1>Listar artigos</h1>";

foreach ($this->Data['article'] as $article) {
    extract($article);
    echo "ID: {$id} <br>";
    echo "Titulo: {$title} <br>";
    echo "Conteúdo: {$content} ";
    echo "<a href='/exemplomvc/edit?id={$id}' class='btn btn-info pull-right'>Edit</a> ";
    echo "<a href='/exemplomvc/delete?id={$id}' class='btn btn-danger pull-right'>Delete</a> <hr>";
}