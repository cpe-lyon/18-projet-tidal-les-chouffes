<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assopuncture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico"/>
    <link href="index.css" rel="stylesheet"/>
    <link href="styles/global.css" rel="stylesheet"/>
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/343e5ac853.js" crossorigin="anonymous"></script>
    <!--Import components-->
    <script src="scripts/header.js"></script>
    <script src="scripts/footer.js"></script>
</head>
<body>
<section class="hero">
    <div id="header"></div>
    <div class="inset">
        <span>Bienvenue sur le site de</span>
        <h1>Assopuncture</h1>
        <span>Association d’acupuncteurs en médecine traditionnelle chinoise</span>
    </div>
</section>
<section class="inset">
    <div class="filters" id="filters">
        <label class="filter">
            Type
            <input type="number" name="minPrice" min="0" max="1000" value="0"/>
        </label>
        <label class="filter">
            Méridiens
            <input type="number" name="maxPrice" min="0" max="1000" value="0"/>
        </label>
    </div>
<div id="footer"></div>
</body>
</html>