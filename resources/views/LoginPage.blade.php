<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIGECH — Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('keyIcon.png') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >
    <link rel="stylesheet" href="LoginPage.css">
    @vite(['resources/css/LoginPage.css', 'resources/js/LoginPage.js'])
</head>

<body>

    <main class="login-page">

        <!-- LADO ESQUERDO -->
        <section class="login-presentation">

            <div class="presentation-grid"></div>

            <div class="presentation-content">

                

                <div class="eyebrow">
                    SESI-SP · CONTROLE PATRIMONIAL
                </div>

                <h1>
                    CADA ESPAÇO
                    <span>SOB CONTROLE.</span>
                </h1>

                <p>
                    O SIGECH substitui a caderneta de papel por um
                    fluxo digital de retirada e devolução, com horário
                    automático e rastreabilidade das movimentações.
                </p>

                <div class="system-info">

                    <div class="info-line"></div>

                    <div>
                        <span>Funcionamento</span>
                        <strong>07h00 — 18h50</strong>
                    </div>

                </div>

            </div>

        </section>


        <!-- LADO DIREITO -->
        <section class="login-area">

            <div class="login-container">


                <div class="login-header">

                    <span class="login-label">
                        ACESSO AO SISTEMA
                    </span>

                    <h2>
                        Bem-vindo.
                    </h2>

                    <p>
                        Entre com suas credenciais para acessar o SIGECH.
                    </p>

                </div>


                <!-- FORMULÁRIO -->

                <form id="loginForm">

                    <!-- E-MAIL -->

                    <div class="form-group">

                        <label for="email">
                            E-mail
                        </label>

                        <div class="input-wrapper">

                            <span class="input-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <rect
                                        x="3"
                                        y="5"
                                        width="18"
                                        height="14"
                                        rx="2"
                                    ></rect>

                                    <path
                                        d="M3 7L12 13L21 7"
                                    ></path>
                                </svg>

                            </span>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="seu.email@escola.com"
                                autocomplete="username"
                                required
                            >

                        </div>

                    </div>


                    <!-- SENHA -->

                    <div class="form-group">

                        <div class="password-label">

                            <label for="senha">
                                Senha
                            </label>

                            <button
                                type="button"
                                id="forgotPassword"
                                class="forgot-password"
                            >
                                Esqueci minha senha
                            </button>

                        </div>

                        <div class="input-wrapper">

                            <span class="input-icon">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <rect
                                        x="4"
                                        y="10"
                                        width="16"
                                        height="11"
                                        rx="2"
                                    ></rect>

                                    <path
                                        d="M8 10V7a4 4 0 0 1 8 0v3"
                                    ></path>

                                </svg>

                            </span>

                            <input
                                type="password"
                                id="senha"
                                name="senha"
                                placeholder="Digite sua senha"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                type="button"
                                class="password-toggle"
                                id="togglePassword"
                                aria-label="Mostrar senha"
                            >

                                <svg
                                    id="eyeIcon"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.8"
                                >
                                    <path
                                        d="M2 12s3.5-6 10-6
                                        10 6 10 6-3.5 6-10 6
                                        S2 12 2 12Z"
                                    ></path>

                                    <circle
                                        cx="12"
                                        cy="12"
                                        r="2.5"
                                    ></circle>
                                </svg>

                            </button>

                        </div>

                    </div>


                    <!-- MENSAGEM DE ERRO -->

                    <div
                        class="login-error"
                        id="loginError"
                    >
                        E-mail ou senha inválidos.
                    </div>


                    <!-- BOTÃO -->

                    <button
                        type="submit"
                        class="login-button"
                        id="loginButton"
                    >

                        <span id="loginButtonText">
                            Entrar no sistema
                        </span>

                        <span class="button-arrow">

                            <svg
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <line
                                    x1="5"
                                    y1="12"
                                    x2="19"
                                    y2="12"
                                ></line>

                                <polyline
                                    points="12 5 19 12 12 19"
                                ></polyline>

                            </svg>

                        </span>

                    </button>

                </form>


                <!-- RODAPÉ -->

                <div class="login-footer">

                    <span>
                        SIGECH
                    </span>

                    <span class="separator">
                        /
                    </span>

                    <span>
                        Sistema de Gerenciamento de Chaves
                    </span>

                </div>

            </div>

        </section>

    </main>

    <script src="LoginPage.js"></script>

</body>

</html>