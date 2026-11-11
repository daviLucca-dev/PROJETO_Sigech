
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <script type="module"
            src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js">
    </script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">
    <title>Login | Sistema</title>
    @vite(['resources/js/login_teste.js', 'resources/css/login_teste.css'])

</head>

<body>

<div class="login-page">

    <!-- Elementos decorativos -->
    <div class="background-glow glow-one"></div>
    <div class="background-glow glow-two"></div>
    <div class="background-grid"></div>

    <div class="container-fluid login-container">

        <div class="login-card">

            <!-- Identidade visual -->
            <div class="login-brand">

                <div class="brand-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>

                <span class="brand-name">SISTEMA</span>

            </div>

            <!-- Cabeçalho -->
            <div class="login-header">

                <span class="login-subtitle">ACESSO À PLATAFORMA</span>

                <h1>Bem-vindo!</h1>

                <p>
                    Entre com suas credenciais para acessar sua conta.
                </p>

            </div>

            <!-- Formulário -->
            <div class="login-form">

                <div class="mb-4">

                    <label for="email" class="form-label">
                        Email
                    </label>

                    <div class="input-wrapper">

                        <i class="bi bi-envelope input-icon"></i>

                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="seuemail@exemplo.com"
                            aria-describedby="emailHelp"
                        >

                    </div>

                    <div id="emailHelp" class="form-text">
                        Informe seu email cadastrado.
                    </div>

                </div>

                <div class="mb-4">

                    <label for="senha" class="form-label">
                        Senha
                    </label>

                    <div class="input-wrapper">

                        <i class="bi bi-lock input-icon"></i>

                        <input
                            type="password"
                            class="form-control"
                            id="senha"
                            placeholder="Digite sua senha"
                        >

                    </div>

                </div>

                <!-- Botão -->
                <button
                    type="button"
                    class="btn-login"
                    id="entrar"
                >

                    <span>Entrar na plataforma</span>

                    <i class="bi bi-arrow-right"></i>

                </button>

            </div>

            <!-- Rodapé -->
            <div class="login-footer">

                <div class="footer-line"></div>

                <p>
                    <i class="bi bi-shield-check"></i>
                    Ambiente seguro e protegido
                </p>

                <span>© 2026 • Todos os direitos reservados</span>

            </div>

        </div>

        <!-- Texto externo -->
        <div class="login-bottom">
            <span>TECNOLOGIA • SEGURANÇA • INOVAÇÃO</span>
        </div>

    </div>

</div>

</body>
</html>
