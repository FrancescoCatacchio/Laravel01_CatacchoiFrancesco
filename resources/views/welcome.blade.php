<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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

        <!-- NAVBAR E PRIMO CAROUSEL -->
        <nav class="navbar navbar-expand-lg nav-cust">
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
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{route('prodotti')}}">Shop</a>
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
                                            class="fa-brands fa-facebook"></i> <i
                                            class="fa-brands fa-instagram"></i> <i
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


        <div class="container-fluid h-100 ">
            <div class="row h-100">

                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper">
                    <div class="parallax-bg"
                        style="
              background-image: url(./Foto/macchinacarousel.jpg);
            "
                        data-swiper-parallax="-23%"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="title" data-swiper-parallax="-300">CityCar Elettrica</div>
                            <div class="subtitle" data-swiper-parallax="-200">Mobilità intelligente per la città</div>
                            <div class="text" data-swiper-parallax="-100">
                                <p>
                                    Questa compatta elettrica è pensata per la mobilità urbana. Con un motore da 100 kW,
                                    garantisce
                                    accelerazioni scattanti, passando da 0 a 50 km/h in soli 3,8 secondi. L'autonomia di
                                    350
                                    km
                                    con
                                    una sola ricarica e le sue dimensioni ridotte la rendono ideale per il traffico
                                    cittadino,
                                    offrendo praticità e sostenibilità.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="title" data-swiper-parallax="-300">Sportiva Ibrida Plug-in</div>
                            <div class="subtitle" data-swiper-parallax="-200">Eleganza e prestazioni sostenibili
                            </div>
                            <div class="text" data-swiper-parallax="-100">
                                <p>
                                    Una coupé dal design elegante con motore ibrido plug-in che combina un propulsore
                                    termico da
                                    250
                                    CV e un motore elettrico da 120 kW. L'accelerazione da 0 a 100 km/h avviene in soli
                                    5,2
                                    secondi,
                                    con una velocità massima di 250 km/h. Perfetta per chi cerca prestazioni elevate con
                                    un
                                    occhio
                                    di riguardo all’ambiente.
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="title" data-swiper-parallax="-300">SUV Turbo Diesel</div>
                            <div class="subtitle" data-swiper-parallax="-200">Potenza e versatilità per ogni avventura
                            </div>
                            <div class="text" data-swiper-parallax="-100">
                                <p>
                                    Un SUV robusto con motore 2.0 turbo diesel da 190 CV, progettato per il comfort e
                                    l'avventura.
                                    Raggiunge i 100 km/h in 8,5 secondi e ha una trazione integrale che garantisce
                                    stabilità
                                    su
                                    qualsiasi terreno. Con consumi di 5,8 litri per 100 km, unisce potenza ed efficienza
                                    per
                                    lunghi
                                    viaggi in comodità.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>


        {{-- sezione card con Accessibilita' --}}

        <div class="container-fluid align-items-center">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="ag-courses_item">
                        <a href="{{route('prodotti')}}" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>
                            <div class="ag-courses-item_title">
                                I nostri prodotti
                            </div>

                            <div class="ag-courses-item_date-box">
                                News:
                                <span class="ag-courses-item_date">
                                   Scopri le nostre novita'
                                </span>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="ag-courses_item">
                        <a href="#" class="ag-courses-item_link">
                            <div class="ag-courses-item_bg"></div>

                            <div class="ag-courses-item_title">
                                I nostri clienti
                            </div>

                            <div class="ag-courses-item_date-box">
                                Inserisci:
                                <span class="ag-courses-item_date">
                                    Aggiungi una recensione!
                                </span>
                            </div>
                        </a>
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
        <script src="./script.js"></script>
    </body>

    </html>
