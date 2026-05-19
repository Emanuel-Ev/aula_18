<?php
if(!isset($pageTitle)){
    $pageTitle =   'Painel Galera Tech';
}
?>
<!doctype html>
<html lang="pt-br" data-bs-theme="dark">
    <head>
        <title><?= $pageTitle ?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="dashboard.php">Galera Tech Admin</a>
            <div class="ms-auto">
                <a href=".../index.php" target="_blanck" class="btn btn-outline-light">Ver site</a>
            </div>
        </div>
    </nav>