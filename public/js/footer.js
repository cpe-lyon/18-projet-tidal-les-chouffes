$(function() {
    $("#footer").replaceWith(`
        <section class="footer inset">
            <div class="footer__nav">
                ${routes.map(route => `
                    <a href="${route.url}">
                        ${route.name}
                    </a>
                `).join("")}
            </div>
            <div>
                <a href="/" class="footer__brand">
                    <img src="images/logo.png" alt="Logo de l'association"/>
                    <span>Assopuncture</span>
                </a>
                <sppan>© Copyright - tous droits réservés</span>
            </div>
        </section>
    `);
}); 