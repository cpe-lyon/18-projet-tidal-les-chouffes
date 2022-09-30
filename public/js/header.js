const routes = [
    {
        url: "index.php",
        name: "Accueil"
    }
];

$(function () {
    const cart = JSON.parse(sessionStorage.getItem("cart")) || [];
    $("#header").replaceWith(`
        <div class="header inset ${$(this).className}">
            <a href="index.html" class="header__brand">
                <img src="images/logo.png" alt="Logo de l'agence"/>
                <span>voyagice</span>
            </a>
            <div class="header__nav header__nav--desktop">
                ${routes.map(route => `
                    <a ${window.location.href.includes(route.url) && 'class="active"'} href="${route.url}">
                        ${route.name}
                    </a>
                `).join("")}
                <div class="showOnLogged" style="position: relative;">
                    <a href="cart.html"><i class="fa-solid fa-shopping-cart"></i></a>
                    <span id="cartCount">${cart.length}</span>
                </div>
                <a onclick="showLogin()" class="hideOnLogged"><i class="fa-solid fa-user"></i></a>
                <a onclick="logout()" class="showOnLogged"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </div>
    `);

    $(".mobileNav").on("click", (e) => {
        e.stopPropagation();

        $(".mobileNav").removeClass("active");
    });
});

$(window).on("scroll", () => {
    if ($(window).scrollTop() >= 100)
        $(".header").addClass("out");
    else
        $(".header").removeClass("popOut");
});