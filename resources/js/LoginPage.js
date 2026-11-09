document.addEventListener('DOMContentLoaded', () => {

    const loginForm = document.getElementById('loginForm');

    const emailInput = document.getElementById('email');
    const senhaInput = document.getElementById('senha');

    const togglePassword =
        document.getElementById('togglePassword');

    const loginButton =
        document.getElementById('loginButton');

    const loginButtonText =
        document.getElementById('loginButtonText');

    const loginError =
        document.getElementById('loginError');

    const forgotPassword =
        document.getElementById('forgotPassword');


    /* =========================
       MOSTRAR / OCULTAR SENHA
    ========================= */

    togglePassword.addEventListener('click', () => {

        const isPassword =
            senhaInput.type === 'password';

        senhaInput.type =
            isPassword ? 'text' : 'password';

        togglePassword.setAttribute(
            'aria-label',
            isPassword
                ? 'Ocultar senha'
                : 'Mostrar senha'
        );

    });


    /* =========================
       LIMPAR ERRO
    ========================= */

    function clearError() {
        loginError.classList.remove('show');
    }


    emailInput.addEventListener(
        'input',
        clearError
    );

    senhaInput.addEventListener(
        'input',
        clearError
    );


    /* =========================
       LOGIN
    ========================= */

    loginForm.addEventListener(
        'submit',
        async (event) => {

            event.preventDefault();

            clearError();

            const email =
                emailInput.value.trim();

            const senha =
                senhaInput.value;


            if (!email || !senha) {

                showError(
                    'Preencha o e-mail e a senha para continuar.'
                );

                return;
            }


            setLoading(true);


            try {

                /*
                 * Esta requisição será atendida
                 * pelo Laravel.
                 *
                 * O backend deverá verificar:
                 *
                 * usuario.email
                 * usuario.senha
                 * usuario.situacao
                 * usuario.perfil
                 */

                const response = await fetch(
                    '/login',
                    {
                        method: 'POST',

                        headers: {
                            'Content-Type':
                                'application/json',

                            'Accept':
                                'application/json',

                            /*
                             * Caso o Laravel esteja
                             * utilizando CSRF,
                             * adicionaremos o token
                             * posteriormente.
                             */
                        },

                        body: JSON.stringify({
                            email: email,
                            senha: senha
                        })
                    }
                );


                const data =
                    await response.json();


                if (!response.ok) {

                    showError(
                        data.message ||
                        'E-mail ou senha inválidos.'
                    );

                    setLoading(false);

                    return;
                }


                /*
                 * O Laravel deverá retornar
                 * o perfil do usuário.
                 */

                if (data.perfil === 'gestor') {

                    window.location.href =
                        'DashboardGestor.html';

                } else {

                    window.location.href =
                        'DashboardFuncionario.html';

                }

            } catch (error) {

                console.error(
                    'Erro no login:',
                    error
                );

                showError(
                    'Não foi possível conectar ao sistema. Tente novamente.'
                );

                setLoading(false);

            }

        }
    );


    /* =========================
       ERRO
    ========================= */

    function showError(message) {

        loginError.textContent = message;

        loginError.classList.add('show');

    }


    /* =========================
       LOADING
    ========================= */

    function setLoading(isLoading) {

        loginButton.disabled =
            isLoading;

        loginButton.classList.toggle(
            'loading',
            isLoading
        );


        if (isLoading) {

            loginButtonText.textContent =
                'Verificando acesso...';

        } else {

            loginButtonText.textContent =
                'Entrar no sistema';

        }

    }


    /* =========================
       ESQUECI MINHA SENHA
    ========================= */

    forgotPassword.addEventListener(
        'click',
        () => {

            alert(
                'Para redefinir sua senha, procure a gestão responsável pelo SIGECH.'
            );

        }
    );

});