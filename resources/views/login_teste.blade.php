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
<div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center p-3"
     style="
        background:
            radial-gradient(ellipse at 15% 20%, rgba(37, 99, 235, 0.30), transparent 45%),
            radial-gradient(ellipse at 85% 80%, rgba(124, 58, 237, 0.30), transparent 45%),
            linear-gradient(135deg, #080d1c, #111827, #0b1020);
     ">

    <div class="w-100 p-4 p-sm-5 rounded-4 shadow-lg"
         style="
            max-width: 390px;
            background: rgba(255, 255, 255, 0.07);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.15);
         ">

        <div class="text-center mb-4">

            <h3 class="fw-bold text-white mb-2">Bem-vindo!</h3>
            <p class="text-white-50 small mb-0">
                Entre na sua conta para continuar.
            </p>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label text-white fw-semibold">
                Email
            </label>

            <input
                type="email"
                class="form-control rounded-3 py-2 border-0"
                id="email"
                placeholder="seuemail@exemplo.com"
                aria-describedby="emailHelp"
            >

            <div id="emailHelp" class="form-text text-white-50">
                Informe seu email cadastrado.
            </div>
        </div>

        <div class="mb-4">
            <label for="senha" class="form-label text-white fw-semibold">
                Senha
            </label>

            <input
                type="password"
                class="form-control rounded-3 py-2 border-0"
                id="senha"
                placeholder="Digite sua senha"
            >
        </div>

        <button
            type="button"
            class="btn w-100 py-2 rounded-3 text-white fw-semibold shadow"
            style="
                background: linear-gradient(100deg, #2563eb, #7c3aed);
                border: 1px solid rgba(255,255,255,0.2);"
            id="entrar"
        >
            Entrar
            <i class="bi bi-arrow-right ms-1"></i>
        </button>

    </div>
</div>

</body>
</html>