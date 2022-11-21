const routes = [
    {
        url: "pageLogin",
        name: "Connexion"  
    },
    {
        url: "pageInscription",
        name: "Inscription"  
    }
];

function capitalizeFirstLetter(string) {
    return string.charAt(0).toUpperCase() + string.slice(1);
  }

username = capitalizeFirstLetter(username);

if(username != '') {
    routes.pop();
    routes.pop();
    routes.push({
        url: "pageRecherchemotCle",
        name: username
    });
    routes.push({
        url: "logout",
        name: "<i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>"
    });
}

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