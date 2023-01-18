<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
<link rel="shortcut icon" href="./favicon-32x32.png" type="image/x-icon">
<link rel="shortcut icon" href="./favicon-16x16.png" type="image/x-icon">
<link rel="shortcut icon" href="./android-chrome-192x192.png" type="image/x-icon">
<link rel="shortcut icon" href="./android-chrome-512x512.png" type="image/x-icon">

<!-- 
- google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- 
- custom css link
-->
<link rel="stylesheet" href="./assets/css/market.css">
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
        <a href="index.html" class="navbar-link label-lg">Home</a>
        </li>

        <li>
        <a href="market.html" class="navbar-link label-lg">Marketplace</a>
        </li>

        <li>
        <a href="#" class="navbar-link label-lg">Create</a>
        </li>
    </nav>

    <div class="header-action">

    <button class="btn-icon primary" aria-label="wallet">
        <ion-icon name= 
            "wallet-outline">
        </ion-icon>
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
   
    <section class="page-header" aria-label="home">
        <h2 style="color: black;">Marketplace</h2>

        <p style="color: black;">Lihat Karya Lainya</p>
    </section>

   <!-- produk -->
   <section class="section discover" aria-labelledby="discover-label">
    <div class="container">

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
            </div>

            <div class="card-profile">
               

                <a href="#" class="">@StreetBoy</a>
            </div>
            
            <div class="card-profile">
               

               <a href="#" class=""><h5 class="card-title">{{$row->preview_item}}</h5></a>
           </div>
          

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
                <p>Title</p>

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
    </div>
</section>

</body>
</html>