@extends('layout.principalFuncionario')

@section('title', 'SIGECH — Início')

@section('page-title', 'INÍCIO')

@section('content')

<section class="content">


    <!-- ==============================
         CARDS SUPERIORES
    =============================== -->

    <div class="summary-grid">


        <!-- HORÁRIO ATUAL -->

        <div class="summary-card">

            <div class="summary-icon">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >

                    <circle
                        cx="12"
                        cy="12"
                        r="9"
                    ></circle>

                    <path
                        d="M12 7V12L15 14"
                    ></path>

                </svg>

            </div>

            <strong id="homeCurrentTime">
                10:25
            </strong>

            <span>
                Horário atual
            </span>

        </div>


        <!-- CHAVES EM POSSE -->

        <div class="summary-card highlight">

            <div class="summary-icon">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >

                    <circle
                        cx="8"
                        cy="15"
                        r="4"
                    ></circle>

                    <path
                        d="M11 12L19 4"
                    ></path>

                    <path
                        d="M16 7L19 10"
                    ></path>

                    <path
                        d="M18 5L21 8"
                    ></path>

                </svg>

            </div>

            <strong id="myKey">
                0
            </strong>

            <span>
                Chaves em sua posse
            </span>

        </div>


        <!-- CHAVES DISPONÍVEIS -->

        <div class="summary-card">

            <div class="summary-icon">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >

                    <rect
                        x="3"
                        y="3"
                        width="7"
                        height="7"
                        rx="1"
                    ></rect>

                    <rect
                        x="14"
                        y="3"
                        width="7"
                        height="7"
                        rx="1"
                    ></rect>

                    <rect
                        x="3"
                        y="14"
                        width="7"
                        height="7"
                        rx="1"
                    ></rect>

                    <rect
                        x="14"
                        y="14"
                        width="7"
                        height="7"
                        rx="1"
                    ></rect>

                </svg>

            </div>

            <strong id="availableKeys">
                12
            </strong>

            <span>
                Chaves disponíveis agora
            </span>

        </div>


        <!-- PENDÊNCIAS -->

        <div class="summary-card">

            <div class="summary-icon">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                >

                    <path
                        d="M12 3L21 20H3L12 3Z"
                    ></path>

                    <path
                        d="M12 9V13"
                    ></path>

                    <circle
                        cx="12"
                        cy="16.5"
                        r=".7"
                    ></circle>

                </svg>

            </div>

            <strong>
                0
            </strong>

            <span>
                Pendências
            </span>

        </div>


    </div>


    <!-- ==============================
         GRID PRINCIPAL
    =============================== -->

    <div class="main-grid">


        <!-- CHAVES -->

        <section class="keys-card">

            <div class="section-title">

                <span></span>

                <h2>
                    MINHA CHAVE
                </h2>

            </div>


            <div class="no-key">

                <strong>
                    Nenhuma chave em uso
                </strong>

                <p>
                    Você não possui nenhuma chave retirada no momento.
                </p>

            </div>

        </section>


        <!-- PAINEL DIREITO -->

        <div class="right-panel">


            <!-- ATALHOS -->

            <section class="shortcuts-card">

                <div class="section-title">

                    <span></span>

                    <h2>
                        ACESSO RÁPIDO
                    </h2>

                </div>


                <button
                    class="shortcut-button red"
                    id="withdrawButton"
                >
                    Retirar uma chave
                </button>


                <button
                    class="shortcut-button black"
                    id="returnButton"
                >
                    Devolver uma chave
                </button>


                <button
                    class="shortcut-button white"
                    id="historyButton"
                >
                    Ver histórico
                </button>

            </section>


            <!-- ÚLTIMAS MOVIMENTAÇÕES -->

            <section class="recent-card">

                <div class="section-title">

                    <span></span>

                    <h2>
                        ÚLTIMAS MOVIMENTAÇÕES
                    </h2>

                </div>


                <div
                    class="no-movements"
                    id="historyEmpty"
                >
                    Nenhuma movimentação registrada.
                </div>

            </section>


        </div>

    </div>

</section>

@endsection


@section('scripts')

<script src="{{ asset('FuncionarioHome.js') }}"></script>

@endsection