<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
    - primary meta tags
  -->
    <title>Metalink - Discover rate collection or Arts & NFTs</title>
    <meta name="title" content="Metalink - Discover rate collection or Arts & NFTs">
    <meta name="description" content="This is a NFT html template made by codewithsadee">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="/assets/images/favicon-32x32.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/favicon-16x16.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/android-chrome-192x192.png" type="image/x-icon">
    <link rel="shortcut icon" href="/assets/images/android-chrome-512x512.png" type="image/x-icon">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body id="top">

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#">
                <img src="./assets/images/logoAuction.svg" width="65" height="" alt="Metalink home" class="logo">
            </a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">

                    <li>
                        <a href="#" class="navbar-link label-lg">Home</a>
                    </li>

                    <li>
                        <a href="/tambah_detail" class="navbar-link label-lg">Upload</a>
                    </li>
                    
                    <li>
                        <a href="#" class="navbar-link label-lg">Marketplace</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link label-lg">Create</a>
                    </li>
            </nav>

            <div class="header-action">

                <button class="btn-icon primary" aria-label="wallet">
                    <ion-icon name="wallet-outline"></ion-icon>
                </button>

                <button class="btn-icon profil-btn" aria-label="Metalink account: Fiona doe">
                    <img src="./assets/images/profile.jpg" width="50" height="50" alt="Fiona doe" class="img-cover">
                </button>

                <button class="nav-toggle-btn" aria-label="menu toggle" data-nav-toggler>
                    <ion-icon name="menu-outline" aria-hidden="true" class="default-icon"></ion-icon>

                    <ion-icon name="close-outline" aria-hidden="true" class="active-icon"></ion-icon>
                </button>

            </div>

        </div>
    </header>





    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="section hero" aria-label="home">
                <div class="container">

                    <h1 class="headline-lg hero-title">
                        Discover
                        collection of <span class="span">Arts</span>
                    </h1>

                    <p class="section-text body-lg">
                        We are a huge marketplace dedicated to connecting great artists of all SMK TARUNA BHAKTI with
                        their fans and unique
                        ART collectors!
                    </p>

                    <form action="" class="hero-form">
                        <input type="text" name="text" required placeholder="Search" class="search-field">
                    </form>
                </div>

                </div>

            </section>

            <!-- 
        - #DISCOVER ITEM
      -->

            <section class="section discover" aria-labelledby="discover-label">
                <div class="container">

                    <h2 class="headline-md section-title text-center" id="discover-label">Live Auction</h2>

                    <ul class="grid-list">
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($data as $row)
                        <li>
                            <div class="discover-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="{{ asset('/assets/img/'.$row->foto) }}" width="500" height="500" loading="lazy"
                                        alt="Genuine Undead #3902" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="flash" aria-hidden="true"></ion-icon>

                                        <span class="span"> <a href="/detail/{{$row->id}}">Place Bid</a></span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-8.jpg" width="32" height="32" loading="lazy"
                                        alt="StreetBoy profile" class="img">

                                    <a href="#" class="">@StreetBoy</a>
                                </div>

                                <h3 class="title-sm card-title">
                                    <a href="#" class=""><h5 class="card-title">{{$row->preview_item}}</h5></a>
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Price</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span"><h5 class="card-title">{{$row->price}}</h5></span>
                                        </div>
                                    </div>

                                    <div>
                                        <p>Highest Bid</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span"><h5 class="card-title">{{$row->minimum_bid}}</h5></span>
                                        </div>
                                    </div>

                                    <!-- <div>
                                        <p>Starting Date</p>

                                        <div class="card-price">
                   

                                            <span class="span">{{$row->starting_date}}</span>
                                        </div>
                                    </div> -->

                                     <!-- <div>
                                        <p>Expiration Date</p>

                                        <div class="card-price">
                    

                                            <span class="span">{{$row->expiration_date}}</span>
                                        </div>
                                    </div> -->

                                     <!-- <div>
                                        <   p>Title</p>

                                            <div class="card-price">
                   

                                                <span class="span">{{$row->title}}</span>
                                            </div>
                                        </div> -->

                                        <!-- <div>
                                            <p>Description</p>

                                            <div class="card-price">
                  

                                                <span class="span">{{$row->deskrpsi}}</span>
                                            </div>
                                        </div> -->
                                </div>

                            </div>
                        </li>
                        @endforeach
                        
                        <li>
                            <div class="discover-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/showcase-7.jpg" width="500" height="500" loading="lazy"
                                        alt="Windchime #768" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="flash" aria-hidden="true"></ion-icon>

                                        <span class="span">Place Bid</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-7.jpg" width="32" height="32" loading="lazy"
                                        alt="CutieGirl profile" class="img">

                                    <a href="#" class="">@CutieGirl</a>
                                </div>

                                <h3 class="title-sm card-title">
                                    <a href="#" class="">Windchime #768</a>
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Price</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                    <div>
                                        <p>Highest Bid</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="discover-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/showcase-6.gif" width="500" height="500" loading="lazy"
                                        alt="Probably A Label #3277" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="flash" aria-hidden="true"></ion-icon>

                                        <span class="span">Place Bid</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-6.gif" width="32" height="32" loading="lazy"
                                        alt="ButterFly profile" class="img">

                                    <a href="#" class="">@ButterFly</a>
                                </div>

                                <h3 class="title-sm card-title">
                                    <a href="#" class="">Probably A Label #3277</a>
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Price</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                    <div>
                                        <p>Highest Bid</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="discover-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/showcase-5.jpg" width="500" height="500" loading="lazy"
                                        alt="Probably A Label #1711" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="flash" aria-hidden="true"></ion-icon>

                                        <span class="span">Place Bid</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-5.jpg" width="32" height="32" loading="lazy"
                                        alt="NorseQueen profile" class="img">

                                    <a href="#" class="">@NorseQueen</a>
                                </div>

                                <h3 class="title-sm card-title">
                                    <a href="#" class="">Probably A Label #1711</a>
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Price</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                    <div>
                                        <p>Highest Bid</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="discover-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/showcase-4.jpg" width="500" height="500" loading="lazy"
                                        alt="Shibuya Scramble Punks" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="flash" aria-hidden="true"></ion-icon>

                                        <span class="span">Place Bid</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-4.jpg" width="32" height="32" loading="lazy"
                                        alt="BigBull profile" class="img">

                                    <a href="#" class="">@BigBull</a>
                                </div>

                                <h3 class="title-sm card-title">
                                    <a href="#" class="">Shibuya Scramble Punks</a>
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Price</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                    <div>
                                        <p>Highest Bid</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="discover-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/showcase-3.jpg" width="500" height="500" loading="lazy"
                                        alt="Probably A Label #650" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="flash" aria-hidden="true"></ion-icon>

                                        <span class="span">Place Bid</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-3.jpg" width="32" height="32" loading="lazy"
                                        alt="Angel profile" class="img">

                                    <a href="#" class="">@Angel</a>
                                </div>

                                <h3 class="title-sm card-title">
                                    <a href="#" class="">Probably A Label #650</a>
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Price</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                    <div>
                                        <p>Highest Bid</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="discover-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/showcase-2.jpg" width="500" height="500" loading="lazy"
                                        alt="Looki #0147" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="flash" aria-hidden="true"></ion-icon>

                                        <span class="span">Place Bid</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">10d 23h 24m 10s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-2.jpg" width="32" height="32" loading="lazy"
                                        alt="CrazyAnyone profile" class="img">

                                    <a href="#" class="">@CrazyAnyone</a>
                                </div>

                                <h3 class="title-sm card-title">
                                    <a href="#" class="">Looki #0147</a>
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Price</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                    <div>
                                        <p>Highest Bid</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="discover-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/showcase-1.jpg" width="500" height="500" loading="lazy"
                                        alt="Poob #285" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="flash" aria-hidden="true"></ion-icon>

                                        <span class="span">Place Bid</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-1.jpg" width="32" height="32" loading="lazy"
                                        alt="Princess profile" class="img">

                                    <a href="#" class="">@Princess</a>
                                </div>

                                <h3 class="title-sm card-title">
                                    <a href="#" class="">Poob #285</a>
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Price</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                    <div>
                                        <p>Highest Bid</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,00</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </li>

                    </ul>

                    <a href="#" class="btn-link">
                        <span class="span">Explore More</span>

                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>

                </div>
            </section>

            <!-- 
        - #UPCOM
      -->

            <section class="section upcom" aria-labelledby="upcom-label">
                <div class="container">

                    <h2 class="headline-md section-title text-center" id="upcom-label">Upcoming Auction</h2>

                    <ul class="grid-list">

                        <li>
                            <div class="upcom-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/showcase-8.gif" width="500" height="500" loading="lazy"
                                        alt="Genuine Undead #3902" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">View</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-8.jpg" width="32" height="32" loading="lazy"
                                        alt="StreetBoy profile" class="img">

                                    <a href="#" class="">@StreetBoy</a>
                                </div>

                                <h3 class="title-sm card-title text-center">
                                    <a href="#" class="">Coming Soon</a>

                                    <!-- <span class="">5d 4h 18m 4s</span> -->
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Start From</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,55</span>
                                        </div>
                                    </div>

                                    <div>
                                        <!-- <p>Start From</p> -->

                                        <div class="card-price">
                                            <!-- <img src="./assets/images/money.svg" width="10" height="20" loading="lazy" alt="ethereum icon">

                      <span class="span">29,55</span> -->
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="upcom-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/showcase-2.jpg" width="500" height="500" loading="lazy"
                                        alt="Genuine Undead #3902" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">View</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-8.jpg" width="32" height="32" loading="lazy"
                                        alt="StreetBoy profile" class="img">

                                    <a href="#" class="">@StreetBoy</a>
                                </div>

                                <h3 class="title-sm card-title text-center">
                                    <a href="#" class="">Coming Soon</a>

                                    <!-- <span class="">5d 4h 18m 4s</span> -->
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Start From</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,55</span>
                                        </div>
                                    </div>

                                    <div>
                                        <!-- <p>Start From</p> -->

                                        <div class="card-price">
                                            <!-- <img src="./assets/images/money.svg" width="10" height="20" loading="lazy" alt="ethereum icon">

                      <span class="span">29,55</span> -->
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="upcom-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/showcase-4.jpg" width="500" height="500" loading="lazy"
                                        alt="Genuine Undead #3902" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">View</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-8.jpg" width="32" height="32" loading="lazy"
                                        alt="StreetBoy profile" class="img">

                                    <a href="#" class="">@StreetBoy</a>
                                </div>

                                <h3 class="title-sm card-title text-center">
                                    <a href="#" class="">Coming Soon</a>

                                    <!-- <span class="">5d 4h 18m 4s</span> -->
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Start From</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,55</span>
                                        </div>
                                    </div>

                                    <div>
                                        <!-- <p>Start From</p> -->

                                        <div class="card-price">
                                            <!-- <img src="./assets/images/money.svg" width="10" height="20" loading="lazy" alt="ethereum icon">

                      <span class="span">29,55</span> -->
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="upcom-card card">

                                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                                    <img src="./assets/images/avatar-6.gif" width="500" height="500" loading="lazy"
                                        alt="Genuine Undead #3902" class="img-cover">

                                    <button class="btn btn-primary">
                                        <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">View</span>
                                    </button>

                                    <div class="countdown">
                                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                        <span class="span">5d 04h 18m 04s</span>
                                    </div>
                                </div>

                                <div class="card-profile">
                                    <img src="./assets/images/avatar-8.jpg" width="32" height="32" loading="lazy"
                                        alt="StreetBoy profile" class="img">

                                    <a href="#" class="">@StreetBoy</a>
                                </div>

                                <h3 class="title-sm card-title text-center">
                                    <a href="#" class="">Coming Soon</a>

                                    <!-- <span class="">5d 4h 18m 4s</span> -->
                                </h3>

                                <div class="card-meta">

                                    <div>
                                        <p>Start From</p>

                                        <div class="card-price">
                                            <img src="./assets/images/money.svg" width="10" height="20" loading="lazy"
                                                alt="ethereum icon">

                                            <span class="span">29,55</span>
                                        </div>
                                    </div>

                                    <div>
                                        <!-- <p>Start From</p> -->

                                        <div class="card-price">
                                            <!-- <img src="./assets/images/money.svg" width="10" height="20" loading="lazy" alt="ethereum icon">

                      <span class="span">29,55</span> -->
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </li>


                </div>
            </section>


            <!-- 
        - #CLOSED ITEM
      -->

            <section class="section closed-item" aria-labelledby="collection-label">
                <div class="container">

                    <div class="title-wrapper">
                        <h2 class="headline-md section-title text-center" id="collection-label">Closed Auction</h2>
                    </div>

                    <div class="slider" data-slider>

                        <ul class="slider-container" data-slider-container>

                            <li class="slider-item">
                                <div class="collection-card card">

                                    <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                                        <img src="./assets/images/showcase-1.jpg" width="500" height="500"
                                            loading="lazy" alt="Digital Collection" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <div class="card-profile">
                                            <img src="./assets/images/avatar-1.jpg" width="64" height="64"
                                                loading="lazy" alt="CutieGirl profile">

                                            <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                                        </div>

                                        <h3 class="title-sm card-title">
                                            <a href="#" class="">Genuine Undead #3902</a>
                                        </h3>

                                        <p class="label-md card-author">
                                            by <a href="#" class="link">@CutieGirl</a>
                                        </p>

                                        <p class="card-text">Last Price $29,00</p>

                                    </div>

                                </div>
                            </li>

                            <li class="slider-item">
                                <div class="collection-card card">

                                    <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                                        <img src="./assets/images/showcase-2.jpg" width="500" height="500"
                                            loading="lazy" alt="GIF Collection" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <div class="card-profile">
                                            <img src="./assets/images/avatar-2.jpg" width="64" height="64"
                                                loading="lazy" alt="ButterFly profile">

                                            <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                                        </div>

                                        <h3 class="title-sm card-title">
                                            <a href="#" class="">Probably A Label #1711</a>
                                        </h3>

                                        <p class="label-md card-author">
                                            by <a href="#" class="link">@ButterFly</a>
                                        </p>

                                        <p class="card-text">Last Price $29,00</p>

                                    </div>

                                </div>
                            </li>

                            <li class="slider-item">
                                <div class="collection-card card">

                                    <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                                        <img src="./assets/images/showcase-3.jpg" width="500" height="500"
                                            loading="lazy" alt="Sports Collection" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <div class="card-profile">
                                            <img src="./assets/images/avatar-3.jpg" width="64" height="64"
                                                loading="lazy" alt="NorseQueen profile">

                                            <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                                        </div>

                                        <h3 class="title-md card-title">
                                            <a href="#" class="link:hover">Probably A Label #650</a>
                                        </h3>

                                        <p class="label-md card-author">
                                            by <a href="#" class="link">@NorseQueen</a>
                                        </p>

                                        <p class="card-text">Last Price $29,00</p>

                                    </div>

                                </div>
                            </li>

                            <li class="slider-item">
                                <div class="collection-card card">

                                    <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                                        <img src="./assets/images/showcase-4.jpg" width="500" height="500"
                                            loading="lazy" alt="Photography Collection" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <div class="card-profile">
                                            <img src="./assets/images/avatar-4.jpg" width="64" height="64"
                                                loading="lazy" alt="BigBull profile">

                                            <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                                        </div>

                                        <h3 class="title-md card-title">
                                            <a href="#" class="link:hover">Shibuya Scramble Punks</a>
                                        </h3>

                                        <p class="label-md card-author">
                                            by <a href="#" class="link">@BigBull</a>
                                        </p>

                                        <p class="card-text">Last Price $29,00</p>

                                    </div>

                                </div>
                            </li>

                            <li class="slider-item">
                                <div class="collection-card card">

                                    <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                                        <img src="./assets/images/showcase-5.jpg" width="500" height="500"
                                            loading="lazy" alt="Illustrations Collection" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <div class="card-profile">
                                            <img src="./assets/images/avatar-5.jpg" width="64" height="64"
                                                loading="lazy" alt="Angel profile">

                                            <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                                        </div>

                                        <h3 class="title-md card-title">
                                            <a href="#" class="link:hover">Looki #0147</a>
                                        </h3>

                                        <p class="label-md card-author">
                                            by <a href="#" class="link">@Angel</a>
                                        </p>

                                        <p class="card-text">Last Price $29,00</p>

                                    </div>

                                </div>
                            </li>

                            <li class="slider-item">
                                <div class="collection-card card">

                                    <figure class="card-banner img-holder" style="--width: 500; --height: 500;">
                                        <img src="./assets/images/showcase-6.gif" width="500" height="500"
                                            loading="lazy" alt="Animations Collection" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <div class="card-profile">
                                            <img src="./assets/images/avatar-6.gif" width="64" height="64"
                                                loading="lazy" alt="CrazyAnyone profile">

                                            <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>
                                        </div>

                                        <h3 class="title-md card-title">
                                            <a href="#" class="link:hover">Poob #285</a>
                                        </h3>

                                        <p class="label-md card-author">
                                            by <a href="#" class="link">@CrazyAnyone</a>
                                        </p>

                                        <p class="card-text">Last Price $29,00</p>

                                    </div>

                                </div>
                            </li>

                        </ul>

                        <button class="slider-btn prev" aria-label="Slide to previous item" data-slider-prev>
                            <ion-icon name="chevron-back-sharp" aria-hidden="true"></ion-icon>
                        </button>

                        <button class="slider-btn next" aria-label="Slide to next item" data-slider-next>
                            <ion-icon name="chevron-forward-sharp" aria-hidden="true"></ion-icon>
                        </button>

                    </div>

                    <a href="#" class="btn-link link:hover">
                        <span class="span">See More</span>

                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>

                </div>
            </section>


            <!-- 
    - #FOOTER
  -->

            <footer class="footer">

                <div class="section footer-top">
                    <div class="container">

                        <div class="footer-brand">

                            <a href="#">
                                <img src="./assets/images/logoAuction.svg" width="60" height="60" loading="lazy"
                                    alt="Metalink home">
                            </a>

                            <p class="body-md footer-text">
                                Buy, sell and discover exclusive digital assets by the top artists of SMK TARUNA BHAKTI.
                            </p>

                        </div>

                        <ul class="footer-list">

                            <li>
                                <p class="title-lg footer-list-title">Metalink</p>
                            </li>

                            <li>
                                <a href="#" class="footer-link">
                                    <ion-icon name="chevron-forward"></ion-icon>

                                    <span class="span">Explore Item</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="footer-link">
                                    <ion-icon name="chevron-forward"></ion-icon>

                                    <span class="span">Live Auction</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="footer-link">
                                    <ion-icon name="chevron-forward"></ion-icon>

                                    <span class="span">Marketplace</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="footer-link">
                                    <ion-icon name="chevron-forward"></ion-icon>

                                    <span class="span">Wallets</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="footer-link">
                                    <ion-icon name="chevron-forward"></ion-icon>

                                    <span class="span">Create</span>
                                </a>
                            </li>

                        </ul>

                        <ul class="footer-list">

                            <li>
                                <p class="title-lg footer-list-title">Useful Links</p>
                            </li>

                            <li>
                                <a href="#" class="footer-link">
                                    <ion-icon name="chevron-forward"></ion-icon>

                                    <span class="span">Terms & Condition</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="footer-link">
                                    <ion-icon name="chevron-forward"></ion-icon>

                                    <span class="span">Privacy policy</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="footer-link">
                                    <ion-icon name="chevron-forward"></ion-icon>

                                    <span class="span">Login</span>
                                </a>
                            </li>

                        </ul>

                        <div class="footer-list">

                            <ul>

                                <li>
                                    <p class="title-lg footer-list-title">Contact Details</p>
                                </li>

                                <li class="footer-list-item">
                                    <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

                                    <a href="mailto:metalink@nft.com" class="footer-link">metalink@gmail.com</a>
                                </li>

                                <li class="footer-list-item">
                                    <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

                                    <a href="tel:+111 234-567-891" class="footer-link">+62 234-567-891</a>
                                </li>

                            </ul>

                        </div>

                    </div>
                </div>

            </footer>





            <!-- 
    - #BACK TO TOP
  -->

            <a href="#top" class="back-to-top btn-icon" aria-label="back to top" data-back-top-btn>
                <ion-icon name="arrow-up" aria-hidden="true"></ion-icon>
            </a>





            <div class="body-bg-shape"></div>





            <!-- 
    - custom js link
  -->
            <script src="./assets/js/script.js"></script>

            <!-- 
    - ionicon link
  -->
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
