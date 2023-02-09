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
            <a href="/lobby" class="navbar-link label-lg">Home</a>
          </li>

          <li>
            <a href="/market" class="navbar-link label-lg">Marketplace</a>
          </li>

          <li>
            <a href="/tambah_detail" class="navbar-link label-lg">Create</a>
          </li>
      </nav>

      <div class="header-action">

        <button class="btn-icon primary" aria-label="wallet" onclick="togglePay()">
          <ion-icon name="wallet-outline"></ion-icon>
        </button>

        <div class="sub-pay-wrap" id="subPay">  
          <div class="sub-pay"> 
              <div class="uer-info"> 
                  <h2>SALDO</h2> 
              </div> 
              <hr> 
          </div> 
        </div> 

        <button class="btn-icon profil-btn" aria-label="Metalink account: Fiona doe">
          <img  width="50" height="50" alt="Fiona doe" class="img-cover" onclick="toggleMenu()">
        </button>
      
        <div class="sub-menu-wrap" id="subMenu">  
          <div class="sub-menu"> 
              <div class="uer-info"> 
                  <h2>{{ auth()->user()->username }}</h2> 
              </div> 
              <hr> 

              <a href="/profil" class="sub-menu-link"> 
                  <img src="/assets/images/person-outline.svg" alt="">
                  <p>My Profile</p>
              </a> 

              <a href="/sesi/logout" class="sub-menu-link"> 
                  <img src="/assets/images/log-in-outline.svg" alt="">
                  <p>Logout</p> 
              </a> 
          </div> 
      </div> 

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
            We are a huge marketplace dedicated to connecting great artists of all SMK TARUNA BHAKTI with their fans and unique
            ART collectors!
          </p>

          <form action="/sesi/search" class="hero-form" method="GET">
            <input type="search" name="search" required placeholder="Search" class="search-field">
            <button type="submit" style="margin-top: -6%; margin-left: 80%;"><img src="/assets/img/src.svg" alt=""></button>
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
            {{-- @foreach ($data as $row) --}}
            <input type="hidden" name="id_barang" value="{{ $row->id }}">
            <li>
              <div class="discover-card card">

                <div class="card-banner img-holder" style="--width: 500; --height: 500;">
                  <img src="{{ asset('/assets/img/'.$row->foto) }}" width="500" height="500" loading="lazy"
                    alt="Genuine Undead #3902" class="img-cover">

                  <button class="btn btn-primary">
                    <ion-icon name="flash" aria-hidden="true"></ion-icon>

                    <a href="/detail/{{$row->id}}"><span class="span">Place Bid</span></a>
                  </button>

                  <div class="countdown">
                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                    <p class="demo"></p>
                  </div>
                </div>

                <div class="card-profile">
                  <img src="./assets/images/avatar-8.jpg" width="32" height="32" loading="lazy" alt="StreetBoy profile"
                    class="img">

                  <a href="#" class="">{{ '@'.$row->user->username }}</a>
                </div>

                <h3 class="title-sm card-title">
                  <a href="#" class="">{{$row->preview_item}}</a>
                </h3>

                <div class="card-meta">

                  <div>
                    <p>Price</p>

                    <div class="card-price">
                      <img src="./assets/images/money.svg" width="10" height="20" loading="lazy" alt="ethereum icon">

                      <span class="span">{{$row->price}}</span>
                    </div>
                  </div>

                  <div>
                    <p>Highest Bid</p>

                    <div class="card-price">
                      <img src="./assets/images/money.svg" width="10" height="20" loading="lazy" alt="ethereum icon">

                      <span class="span">{{$row->minimum_bid}}</span>
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
                        /div>
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
            {{-- @endforeach --}}
          
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

      





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="./assets/js/main.js"></script>

</body>

</html>