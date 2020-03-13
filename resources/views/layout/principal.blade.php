<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <title>Controle de Estoque</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/estoque/public">
                            Estoque Laravel
                        </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/estoque/public">Listagem</a></li>
                    </ul>
                </div>
            </nav>
            @yield('conteudo')
            <footer class="footer">
                <p>© Projeto Laravel</p>
            </footer>
        </div>
    </body>
</html>