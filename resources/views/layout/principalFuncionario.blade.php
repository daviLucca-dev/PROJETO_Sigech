<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'SIGECH')
    </title>

    <link
        rel="icon"
        type="image/png"
        href="{{ asset('keyIcon.png') }}"
    >

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    {{-- CSS padrão do ambiente do funcionário --}}
    <link
        rel="stylesheet"
        href="{{ asset('FuncionarioHome.css') }}"
    >

</head>


<body>

<div class="app">


    {{-- =====================================================
         SIDEBAR PADRÃO DO FUNCIONÁRIO
    ====================================================== --}}

    <aside class="sidebar">

        <div>


            {{-- LOGO SIGECH --}}

            <div class="logo">

                <img
                    src="{{ asset('SIGECHlogo.png') }}"
                    alt="SIGECH"
                >

            </div>


            {{-- MENU PRINCIPAL --}}

            <nav class="navigation">


                {{-- INÍCIO --}}

                <a
                    href="#"
                    class="nav-item active"
                >

                    <span class="nav-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                        >

                            <path d="M3 10.5L12 3L21 10.5"></path>

                            <path d="M5 9.5V21H19V9.5"></path>

                            <path d="M9 21V14H15V21"></path>

                        </svg>

                    </span>

                    <span>
                        Início
                    </span>

                </a>


                {{-- RETIRAR CHAVE --}}

                <a
                    href="#"
                    class="nav-item"
                >

                    <span class="nav-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                        >

                            <circle
                                cx="8"
                                cy="15"
                                r="4"
                            ></circle>

                            <path d="M11 12L19 4"></path>

                            <path d="M16 7L19 10"></path>

                        </svg>

                    </span>

                    <span>
                        Retirar Chave
                    </span>

                </a>


                {{-- DEVOLVER CHAVE --}}

                <a
                    href="#"
                    class="nav-item"
                >

                    <span class="nav-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                        >

                            <path d="M4 12A8 8 0 1 0 12 4"></path>

                            <path d="M4 4V10H10"></path>

                        </svg>

                    </span>

                    <span>
                        Devolver Chave
                    </span>

                </a>


                {{-- MINHAS MOVIMENTAÇÕES --}}

                <a
                    href="#"
                    class="nav-item"
                >

                    <span class="nav-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                        >

                            <path d="M4 6H20"></path>

                            <path d="M4 12H20"></path>

                            <path d="M4 18H20"></path>

                        </svg>

                    </span>

                    <span>
                        Minhas Movimentações
                    </span>

                </a>


                {{-- HISTÓRICO --}}

                <a
                    href="#"
                    class="nav-item"
                >

                    <span class="nav-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                        >

                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            ></circle>

                            <path d="M12 7V12L15 14"></path>

                        </svg>

                    </span>

                    <span>
                        Histórico
                    </span>

                </a>


                {{-- PERFIL --}}

                <a
                    href="#"
                    class="nav-item"
                >

                    <span class="nav-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                        >

                            <circle
                                cx="12"
                                cy="8"
                                r="4"
                            ></circle>

                            <path d="M4 21C4 16.6 7.6 14 12 14C16.4 14 20 16.6 20 21"></path>

                        </svg>

                    </span>

                    <span>
                        Perfil
                    </span>

                </a>


                {{-- AJUDA --}}

                <a
                    href="#"
                    class="nav-item"
                >

                    <span class="nav-icon">

                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                        >

                            <circle
                                cx="12"
                                cy="12"
                                r="9"
                            ></circle>

                            <path d="M12 11V16"></path>

                            <circle
                                cx="12"
                                cy="8"
                                r="0.7"
                            ></circle>

                        </svg>

                    </span>

                    <span>
                        Ajuda
                    </span>

                </a>

            </nav>

        </div>


        {{-- =====================================================
             PARTE INFERIOR DA SIDEBAR
        ====================================================== --}}

        <div class="sidebar-bottom">


            {{-- USUÁRIO --}}

            <div class="user-profile">

                <div class="user-avatar">
                    AL
                </div>

                <div>

                    <strong id="sidebarUserName">
                        André Luís
                    </strong>

                    <span>
                        Professor
                    </span>

                </div>

            </div>


            {{-- STATUS DO SISTEMA --}}

            <div class="working-status">

                <span class="status-dot"></span>

                <div>

                    <small>
                        Sistema disponível
                    </small>

                    <strong>
                        07h00 — 18h50
                    </strong>

                </div>

            </div>


            {{-- BOTÃO SAIR --}}

            <button
                class="logout-button"
                id="logoutButton"
            >
                Sair do sistema
            </button>

        </div>

    </aside>


    {{-- =====================================================
         ÁREA PRINCIPAL
    ====================================================== --}}

    <main class="main-content">


        {{-- TOPBAR --}}

        <header class="topbar">


            {{-- MENU MOBILE --}}

            <div
                class="mobile-menu"
                id="mobileMenu"
            >

                <span></span>
                <span></span>
                <span></span>

            </div>


            {{-- TÍTULO DA PÁGINA --}}

            <div class="page-title">

                <h1>
                    @yield('page-title', 'RETIRAR CHAVE')
                </h1>

            </div>


            {{-- STATUS SUPERIOR --}}

            <div class="system-status">

                <span class="online-dot"></span>

                <strong id="currentTime">
                    10:14
                </strong>

                <span class="separator">
                    •
                </span>

                <span>
                    Expediente
                </span>

                <strong>
                    07:00–18:50
                </strong>

            </div>

        </header>


        {{-- =====================================================
             CONTEÚDO ESPECÍFICO DE CADA PÁGINA
        ====================================================== --}}

        @yield('content')


    </main>

</div>


{{-- JS específico da página --}}
@yield('scripts')


</body>

</html>