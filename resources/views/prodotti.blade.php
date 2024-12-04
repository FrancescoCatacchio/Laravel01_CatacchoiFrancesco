<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="prodotti.css">
</head>

<body>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <!-- BS CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <!-- aos -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- MY CSS -->
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <!-- NAVBAR-->
        <nav class="navbar navbar-expand-lg nav-cust position-fixed w-100 z-3" id="navbar" >
            <div class="container-fluid">
                <img class="img-top img-nav" src="./Foto/Logo.webp" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="{{route('welcome')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Shop</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Social
                            </a>
                            <ul class="dropdown-menu bg-dark ">
                                <li><a class="dropdown-item text-white" href="#">Seguici sui social</a>
                                </li>
                                <li>
                                    <p class=" text-white d-flex justify-content-around" href="#"><i
                                            class="fa-brands fa-facebook"></i> <i class="fa-brands fa-instagram"></i> <i
                                            class="fa-brands fa-tiktok"></i>
                                    </p>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="text-white w-100 text-center">
                                    <div>I nostri contatti</div>
                                    @foreach ($contatti as $contatto)
                                        nome: {{ $contatto['name'] }}, mail:{{ $contatto['mail'] }}
                                    @endforeach
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        {{-- sezione prodotti --}}

        <div class="container-fluid">
            <div class="row justify-content-center">
                
                <div class="col-12 col-md-3" data-aos="fade-up" data-aos-delay="300">

                    <h3 class="text-white text-center fs-1 mt-5 pt-5">Volkswagen</h3>

                    <div class="card bg-dark text-white text-center">
                        <img src="Foto/Prodotto1.jpg" class="card-img-top card-custom">
                        <div class="card-body">
                            <h5 class="card-title">Volkswagen</h5>
                            <p class="card-text">La Volkswagen Golf è una berlina compatta che incarna il perfetto equilibrio tra stile, funzionalità e prestazioni. Con il suo design iconico, linee fluide e dettagli moderni, si distingue per eleganza e praticità. Gli interni offrono comfort e tecnologia all'avanguardia, come un sistema di infotainment intuitivo e connettività avanzata.</p>
                            <a href="#" class="btn btn-secondary ">Scopri di piu'</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-around mt-5">

                <h3 class="text-white text-center fs-1">Bmw</h3>

                <div class="col-12 col-md-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card bg-dark text-white text-center ">
                        <img src="Foto/Prodotto2.jpg" class="card-img-top card-custom">
                        <div class="card-body">
                            <h5 class="card-title">BMW </h5>
                            <p class="card-text">Eleganza, prestazioni e tecnologia si incontrano. Con linee sportive e interni premium, la BMW Serie 3 offre un’esperienza di guida senza pari. Scopri il piacere di guidare. 🚗✨</p>
                            <a href="#" class="btn btn-secondary ">Scopri di piu'</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-white text-center" data-aos="fade-up" data-aos-delay="500">
                        <img src="Foto/Prodotto3.jpg" class="card-img-top card-custom">
                        <div class="card-body">
                            <h5 class="card-title">BMW</h5>
                            <p class="card-text">Eleganza, prestazioni e tecnologia si incontrano. Con linee sportive e interni premium, la BMW Serie 3 offre un’esperienza di guida senza pari. Scopri il piacere di guidare. 🚗✨</p>
                            <a href="#" class="btn btn-secondary ">Scopri di piu'</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-white text-center" data-aos="fade-up" data-aos-delay="700">
                        <img src="Foto/Prodotto4.jpg" class="card-img-top card-custom">
                        <div class="card-body">
                            <h5 class="card-title">BMW </h5>
                            <p class="card-text">Eleganza, prestazioni e tecnologia si incontrano. Con linee sportive e interni premium, la BMW Serie 3 offre un’esperienza di guida senza pari. Scopri il piacere di guidare. 🚗✨</p>
                            <a href="#" class="btn btn-secondary ">Scopri di piu'</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-evenly mt-5">

                <h3 class="text-white text-center fs-1">Audi</h3>

                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-white text-center" data-aos="fade-up" data-aos-delay="300">
                        <img src="Foto/Prodotto5.jpg" class="card-img-top card-custom">
                        <div class="card-body">
                            <h5 class="card-title">Audi</h5>
                            <p class="card-text">Design raffinato, comfort superiore e tecnologia all'avanguardia. L’Audi A4 unisce stile e performance per una guida impeccabile. 🌟🚘</p>
                            <a href="#" class="btn btn-secondary ">Scopri di piu'</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-white text-center" data-aos="fade-up" data-aos-delay="500">
                        <img src="Foto/Prodotto6.jpg" class="card-img-top card-custom" >
                        <div class="card-body">
                            <h5 class="card-title">Audi</h5>
                            <p class="card-text">Design raffinato, comfort superiore e tecnologia all'avanguardia. L’Audi A4 unisce stile e performance per una guida impeccabile. 🌟🚘</p>
                            <a href="#" class="btn btn-secondary ">Scopri di piu'</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-evenly mt-5">

                <h3 class="text-white text-center fs-1">Tesla</h3>

                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-white text-center" data-aos="fade-up" data-aos-delay="300">
                        <img src="Foto/Prodotto7.jpg" class="card-img-top card-custom">
                        <div class="card-body">
                            <h5 class="card-title">Tesla Model 3</h5>
                            <p class="card-text">Innovazione elettrica, prestazioni straordinarie e tecnologia futuristica. La Tesla Model 3 ridefinisce il piacere di guida sostenibile. ⚡🚗</p>
                            <a href="#" class="btn btn-secondary ">Scopri di piu'</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-white text-center" data-aos="fade-up" data-aos-delay="500">
                        <img src="Foto/Prodotto8.jpg" class="card-img-top card-custom">
                        <div class="card-body">
                            <h5 class="card-title">Tesla Model 3</h5>
                            <p class="card-text">Innovazione elettrica, prestazioni straordinarie e tecnologia futuristica. La Tesla Model 3 ridefinisce il piacere di guida sostenibile. ⚡🚗</p>
                            <a href="#" class="btn btn-secondary ">Scopri di piu'</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-evenly mt-5" data-aos="fade-up" data-aos-delay="300">

                <h3 class="text-white text-center fs-1">Lamborghini</h3>

                <div class="col-12 col-md-3">
                    <div class="card bg-dark text-white text-center">
                        <img src="Foto/Prodotto9.jpg" class="card-img-top card-custom">
                        <div class="card-body">
                            <h5 class="card-title">Lamborghini Huracán</h5>
                            <p class="card-text">Potenza pura e design mozzafiato, la Lamborghini Huracán è il simbolo della supercar italiana. Con linee affilate e un’anima ribelle, combina un motore V10 ruggente con una tecnologia di guida avanzata per prestazioni straordinarie. Gli interni lussuosi, progettati per il massimo comfort, offrono un’esperienza esclusiva ad ogni viaggio. La Huracán è più di un’auto: è un capolavoro su quattro ruote, pensato per chi vive al massimo. 🏁🔥</p>
                            <a href="#" class="btn btn-secondary ">Scopri di piu'</a>
                        </div>
                    </div>
                </div>
            </div>


            </div>
        












        <!--LIBRERIA BOOT  -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <!-- ICONE -->
        <script src="https://kit.fontawesome.com/ec9b464de4.js" crossorigin="anonymous"></script>
        <!-- js swift -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- aos -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- MY JS -->
        <script src="./prodotti.js"></script>
    </body>

    </html>
