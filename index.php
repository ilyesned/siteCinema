<?php 
    include_once "./src/header.inc.php";
?>
<body>
    <header>
        <img class="logo" src="./asset/8d6074851b4ded8fe9fc46e294bbff5f - Copie.png" alt="">
        <h1>Ultimate Fighting Championship</h1>
    </header>
    <main class="main">
        <section class="entete">
            <h2>Entrez dans la cage avec le formulaire ci-dessous !</h2>
            <br>
            <p>Tous les mois profitez de toutes les nouveautés série et cinéma. A partir du mois prochain 
                on vous propose tous les classiques du cinéma. Où que vous soyez. Tous les films en VO, VOST, 
                VF et plus d'options
            </p>
        </section>
        <section class="film">
            <ul class="grid-picture-large">
                <li data-image="./asset/flyweight_champ.png"
                data-title="FILM" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/flyweight_champ.png" alt="image film">
                    </figure>
                </li>
                <li data-image="./asset/bantamweight_champ.png"
                data-title="FILM 2" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/bantamweight_champ.png" alt="image film">
                    </figure>
                </li>
                <li data-image="./asset/featherweight_champ.png"
                data-title="Expendables 2" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/featherweight_champ.png" alt="image film">
                    </figure>
                </li>
                <li data-image="./asset/lightweight_champ.png"
                data-title="Team Fortress 2" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/lightweight_champ.png" alt="image film">
                    </figure>
                </li>
                <li data-image="./asset/welteirweight_champ.png"
                data-title="Limitless" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/welteirweight_champ.png" alt="image film">
                    </figure>
                </li>
                <li data-image="./asset/middleweight_champ.png"
                data-title="Limitless" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/middleweight_champ.png" alt="image film">
                    </figure>
                </li>
                <li data-image="./asset/light-heavyweight_champ.png"
                data-title="Safe House" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/light-heavyweight_champ.png" alt="image film">
                    </figure>
                </li>
                <li data-image="./asset/heavyweight_champ.png"
                data-title="Expendables 2" 
                data-description="loremipsum" 
                data-dates="02/01/2020">
                    <figure>
                        <img src="./asset/heavyweight_champ.png" alt="image film">
                    </figure>
                </li>
            </ul>
        </section>
        <section>
            <a href="form.php">
                <button aria-label="">Cliquez ici pour Commencer</button>
            </a>
        </section>
    </main>
    <footer>
        <p>@ - Streaming - 2022</p>
    </footer>
    <div class="parent-modale" role="dialog">
        <figure class="modale">
            <button aria-label="closed">
                <i class="material-icons" aria-hidden="true">close</i>
            </button>
            <img src="https://via.placeholder.com/500" alt="picture">
            <figcaption class="desc">
                <h3>title</h3>
                <p>
                   
                </p>
                <time>Years : </time>
            </figcaption>
        </figure>
    </div>
</body>
</html>