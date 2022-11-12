const routes = [
    {
        url: "/",
        name: "Accueil"
    },
    {
        url: "pageLogin",
        name: "Connexion"  
    },
    {
        url: "pageInscription",
        name: "Inscription"  
    }
];

$(function () {
    $("#header").replaceWith(`
        <div class="header inset ${$(this).className}">
            <a href="index.php" class="header__brand">
                <img src="images/logo.png" alt="Logo de l'association"/>
            </a>
            <div class="header__nav header__nav--desktop">
                ${routes.map(route => `
                    <a ${window.location.href.includes(route.url) && 'class="active"'} href="${route.url}">
                        ${route.name}
                    </a>
                `).join("")}
            </div>
        </div>
    `);
});