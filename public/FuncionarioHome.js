document.addEventListener("DOMContentLoaded", function () {

    const currentTime = document.getElementById("currentTime");
    const currentTimeCard = document.getElementById("currentTimeCard");

    const mobileMenu = document.getElementById("mobileMenu");
    const sidebar = document.querySelector(".sidebar");

    const logoutButton = document.getElementById("logoutButton");

    const withdrawButton = document.getElementById("withdrawButton");
    const returnButton = document.getElementById("returnButton");
    const movementsButton = document.getElementById("movementsButton");


    /* =========================
       RELÓGIO
    ========================= */

    function updateClock() {

        const now = new Date();

        const hours = String(now.getHours()).padStart(2, "0");
        const minutes = String(now.getMinutes()).padStart(2, "0");

        const time = `${hours}:${minutes}`;

        if (currentTime) {
            currentTime.textContent = time;
        }

        if (currentTimeCard) {
            currentTimeCard.textContent = time;
        }
    }

    updateClock();

    setInterval(updateClock, 1000);


    /* =========================
       MENU MOBILE
    ========================= */

    if (mobileMenu) {

        mobileMenu.addEventListener("click", function () {

            sidebar.classList.toggle("open");

        });

    }


    /* =========================
       FECHAR MENU AO CLICAR
    ========================= */

    document.querySelectorAll(".nav-item").forEach(function (item) {

        item.addEventListener("click", function () {

            if (window.innerWidth <= 650) {
                sidebar.classList.remove("open");
            }

        });

    });


    /* =========================
       RETIRAR CHAVE
    ========================= */

    if (withdrawButton) {

        withdrawButton.addEventListener("click", function () {

            window.location.href = "/RetirarChave";

        });

    }


    /* =========================
       DEVOLVER CHAVE
    ========================= */

    if (returnButton) {

        returnButton.addEventListener("click", function () {

            window.location.href = "/DevolverChave";

        });

    }


    /* =========================
       MOVIMENTAÇÕES
    ========================= */

    if (movementsButton) {

        movementsButton.addEventListener("click", function () {

            window.location.href = "/MinhasMovimentacoes";

        });

    }


    /* =========================
       SAIR
    ========================= */

    if (logoutButton) {

        logoutButton.addEventListener("click", function () {

            window.location.href = "/LoginPage";

        });

    }

});