<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIGECH — Sistema de Gerenciamento de Chaves</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('keyIcon.png') }}">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="SplashPage.css">
    @vite(['resources/css/SplashPage.css', 'resources/js/SplashPage.js'])
</head>

<body>

    <main class="splash-page">

        <div class="splash-background"></div>

        <section class="splash-content">

            <div class="eyebrow">
                SESI-SP · CONTROLE PATRIMONIAL
            </div>

            <h1>
                Registros
                <span>em tempo real.</span>
            </h1>

            <p class="description">
                Retire e devolva chaves pelo sistema, com data e horário
                automáticos, aviso de pendências e o histórico completo
                de cada movimentação.
            </p>

            <button class="access-button" id="accessButton">
                <span>Acessar o sistema</span>

                <span class="arrow">
                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2.4"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <line x1="7" y1="17" x2="17" y2="7"></line>
                        <polyline points="7 7 17 7 17 17"></polyline>
                    </svg>
                </span>
            </button>

        </section>

        <div class="working-hours">
            Funcionamento diário das
            <strong>07h00</strong>
            às
            <strong>18h50</strong>
        </div>

    </main>

    <script src="SplashPage.js"></script>

</body>
</html>