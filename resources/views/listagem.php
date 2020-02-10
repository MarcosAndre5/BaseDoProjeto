<html>
    <head>
        <link href="css/app.css" rel="stylesheet">
        <title>Controle de Estoque</title>
    </head>
    <body>
        <div class="container">
            <h1>Listagem de Produtos</h1>
            <table class="table table-striped table-bordered table-hover">
                <?php foreach($produtos as $p): ?>
                    <tr>
                        <td><b>Nome:</b> <?= $p->nome ?></td>
                        <td>R$ <?= $p->valor ?></td>
                        <td><?= $p->descricao ?></td>
                        <td>Qtd. <?= $p->quantidade ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>