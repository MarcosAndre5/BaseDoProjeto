<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
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
                        <li>
                            <a href="/estoque/public">Listagem de Produtos</a>
                        </li>
                        <li>
                            <a href="/estoque/public/produtos/novo">Novo Produto</a>
                        </li>
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