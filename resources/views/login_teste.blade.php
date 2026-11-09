<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Teste Login</title>
    @vite(['resources/js/login_teste.js'])
</head>
<body>
<div class="container min-vh-100 d-flex justify-content-center align-items-center">

    <div class="card border-0 shadow-lg rounded-4 p-4 w-100"
         style="max-width: 380px;">

        <!-- Cabeçalho -->
        <div class="text-center mb-4">
            <div class="mb-3">
                <span class="rounded-3 px-3 py-2 d-inline-block text-white shadow-sm"
                      style="background: linear-gradient(135deg, #2563eb, #7c3aed);">
                    <i class="bi bi-person-lock fs-4"></i>
                </span>
            </div>

            <h3 class="fw-bold mb-1 text-dark">Bem-vindo!</h3>
            <p class="text-secondary small mb-0">
                Acesse sua conta para continuar.
            </p>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label fw-semibold text-dark">
                Email
            </label>

            <input
                type="email"
                class="form-control rounded-3 py-2"
                id="email"
                placeholder="seuemail@exemplo.com"
                aria-describedby="emailHelp"
            >

            <div id="emailHelp" class="form-text">
                Informe seu email cadastrado.
            </div>
        </div>

        <!-- Senha -->
        <div class="mb-4">
            <label for="senha" class="form-label fw-semibold text-dark">
                Senha
            </label>

            <input
                type="password"
                class="form-control rounded-3 py-2"
                id="senha"
                placeholder="Digite sua senha"
            >
        </div>

        <!-- Botão -->
        <button
            type="button"
            class="btn w-100 rounded-3 py-2 text-white fw-semibold shadow-sm"
            style="background: linear-gradient(100deg, #2563eb, #7c3aed); border: none;"
        >
            Entrar
            <i class="bi bi-arrow-right ms-1"></i>
        </button>


    </div>
</div>

</body>
</html>