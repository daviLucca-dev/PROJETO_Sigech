
document.addEventListener('DOMContentLoaded', () => {

    // ELEMENTOS DO HTML

    const loginForm = document.getElementById('loginForm');

    const emailInput = document.getElementById('email');
    const senhaInput = document.getElementById('senha');

    const togglePassword = document.getElementById('togglePassword');

    const loginButton = document.getElementById('loginButton');
    const loginButtonText = document.getElementById('loginButtonText');

    const loginError = document.getElementById('loginError');
    const forgotPassword = document.getElementById('forgotPassword');


    // MOSTRAR / OCULTAR SENHA

    togglePassword.addEventListener('click', () => {

        const isPassword = senhaInput.type === 'password';

        senhaInput.type = isPassword ? 'text' : 'password';

        togglePassword.setAttribute(
            'aria-label',
            isPassword ? 'Ocultar senha' : 'Mostrar senha'
        );

    });


    // LIMPAR MENSAGEM DE ERRO

    function clearError() {

        loginError.textContent = '';
        loginError.classList.remove('show');

    }

    emailInput.addEventListener('input', clearError);
    senhaInput.addEventListener('input', clearError);


    // EXIBIR MENSAGEM DE ERRO

    function showError(message) {

        loginError.textContent = message;
        loginError.classList.add('show');

    }


    // CONTROLE DO BOTÃO DE LOGIN

    function setLoading(isLoading) {

        loginButton.disabled = isLoading;

        loginButton.classList.toggle('loading', isLoading);

        loginButtonText.textContent = isLoading
            ? 'Verificando acesso...'
            : 'Entrar no sistema';

    }


    // PROCESSAR LOGIN

    loginForm.addEventListener('submit', async (event) => {

        event.preventDefault();

        clearError();

        const email = emailInput.value.trim();
        const senha = senhaInput.value;


        // VALIDAR CAMPOS

        if (!email || !senha) {

            showError('Preencha o e-mail e a senha para continuar.');

            return;

        }


        // VALIDAR TAMANHO DA SENHA

        if (senha.length < 6) {

            showError('A senha deve ter no mínimo 6 caracteres.');

            return;

        }


        setLoading(true);


        try {

            // REQUISIÇÃO PARA A API DO LARAVEL

            const response = await fetch('/api/login', {

                method: 'POST',

                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },

                body: JSON.stringify({
                    email: email,
                    senha: senha
                })

            });


            const data = await response.json();


            // VERIFICAR SE O LOGIN FOI REALIZADO

            if (!response.ok || data.erro !== 'n') {

                showError(
                    data.message || 'E-mail ou senha inválidos.'
                );

                setLoading(false);

                return;

            }


            // VERIFICAR SE A API RETORNOU OS DADOS NECESSÁRIOS

            if (!data.token || !data.usuario_id) {

                showError('Não foi possível concluir a autenticação.');

                setLoading(false);

                return;

            }


            // SALVAR COOKIE DO TOKEN

            document.cookie =
                `token=${encodeURIComponent(data.token)}; path=/; max-age=${7 * 24 * 60 * 60}; SameSite=Lax`;


            // SALVAR COOKIE DO ID DO USUÁRIO

            document.cookie =
                `usuario_id=${encodeURIComponent(data.usuario_id)}; path=/; max-age=${7 * 24 * 60 * 60}; SameSite=Lax`;


            // REDIRECIONAR PARA O LARAVEL

            window.location.href = '/home';


        } catch (error) {

            console.error('Erro ao realizar login:', error);

            showError(
                'Não foi possível conectar ao sistema. Tente novamente.'
            );

            setLoading(false);

        }

    });


    // ESQUECI MINHA SENHA

    forgotPassword.addEventListener('click', () => {

        alert(
            'Para redefinir sua senha, procure a gestão responsável pelo SIGECH.'
        );

    });

});
