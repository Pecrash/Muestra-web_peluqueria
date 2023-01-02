<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@400;700&display=swap" rel="stylesheet">
    <script src="./src/index.js" defer></script>
</head>

<body>
    <section class="secInitial">
        <a class="secInitial__logo" href="./index.php"><img src="./assets/Logo.svg" alt=""></a>
        <img class="secInitial__image" src="./assets/Image1.png" alt="">
        <article class="secInitial__tittle">
            <p>HAIR & BEARD</p>
            <h1>Welcome to <br> Barber Shop</h1>
        </article>
        <div class="secInitial__schedules">
            <article class="secInitial__schedules-info">
                <img src="./assets/schedule_icons/phone.svg" alt="">
                <h2>0491 570 006</h2>
                <p>Call us for recording or use the form</p>
            </article>
            <article class="secInitial__schedules-info">
                <img src="./assets/schedule_icons/watch.svg" alt="">
                <h2>Daily: 9 am - 9 pm</h2>
                <p>Satuday: 11 am - 10pm <br>
                    Sunday: Closed</p>
            </article>
            <article class="secInitial__schedules-info">
                <img src="./assets/schedule_icons/map.svg" alt="">
                <h2>Carrer Negrón</h2>
                <p>Villa Salinas <br>
                    Carrer Negrón, 20, Bajos <br>
                    Spain - 72775</p>
            </article>
        </div>
        <div class="secInitial__media">
            <a href="" class="secInitial__media-icon"><?php require('./assets/social_icons/facebook.php') ?></a>
            <a href="" class="secInitial__media-icon"><?php require('./assets/social_icons/twitter.php') ?></a>
            <a href="" class="secInitial__media-icon"><?php require('./assets/social_icons/instagram.php') ?></a>
            <a href="" class="secInitial__media-icon"><?php require('./assets/social_icons/linkedin.php') ?></a>
        </div>
    </section>

    <section class="secWelcome">
        <article class="secWelcome__tittle">
            <h1 class="secWelcome__tittle-white">Welcome to</h1>
            <h1 class="secWelcome__tittle-golden">Barber Shop</h1>
        </article>
        <p class="secWelcome__text">our barber shop always offers professional quality and we are ready to deal with
            your highest expecations</p>
    </section>

    <section class="secServices">
        <h1 class="secServices__tittle">Our Services</h1>
        <div class="secServices__content">
            <article class="secServices__content-card">
                <img src="./assets/service1.png" alt="">
                <h2>Hair Cut</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime impedit labore incidunt, fugit animi,
                    ipsa.</p>
            </article>

            <article class="secServices__content-card">
                <img src="./assets/service2.png" alt="">
                <h2>Shaving</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime impedit labore incidunt, fugit animi,
                    ipsa.</p>
            </article>

            <article class="secServices__content-card">
                <img src="./assets/service3.png" alt="">
                <h2>Drying Hair</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime impedit labore incidunt, fugit animi,
                    ipsa.</p>
            </article>
        </div>
        <span class="secServices__arrow left"><img src="./assets/arrow.svg" alt=""></span>
        <span class="secServices__arrow right"><img src="./assets/arrow.svg" alt=""></span>
    </section>

    <section class="secPhrase">
        <h1 class="secPhrase__tittle">Because we do know what it <br>
            means: "Just the tips".</h1>
        <img class="secPhrase__comillas" src="./assets/comillas.svg" alt="">
        <img class="secPhrase__img" src="./assets/image2.png" alt="">
    </section>

    <section class="secPrices">
        <h1 class="secPrices__tittle">Prices List</h1>
        <div class="secPrices__container">
            <article class="secPrices__container-price">
                <p>Cut Service .................................</p>
                <p class="golden">29.900</p>
            </article>
            <article class="secPrices__container-price">
                <p>Cut Service .................................</p>
                <p class="golden">29.900</p>
            </article>
            <article class="secPrices__container-price">
                <p>Cut Service .................................</p>
                <p class="golden">29.900</p>
            </article>
            <article class="secPrices__container-price">
                <p>Cut Service .................................</p>
                <p class="golden">29.900</p>
            </article>
            <article class="secPrices__container-price">
                <p>Cut Service .................................</p>
                <p class="golden">29.900</p>
            </article>
        </div>
        <button class="secPrices__btn">ALL PRICES</button>
    </section>

    <?php require('./components/form.php') ?>

    <?php require('./components/footer.php') ?>
