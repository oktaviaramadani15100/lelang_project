<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,300&family=Lato:wght@100&family=Lobster&family=Playfair+Display:ital@1&family=Poppins:wght@100&family=Roboto:ital,wght@0,100;0,300;0,500;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/lengkap.css">
</head>
<body>
    <div class="container">
        <div class="con">
            <ul>
                <li><img class="img" src="../assets/images/logoAuction.svg" alt="" ></li>
                <div class="mk">
                    <li><a href="" style="margin-left: -20px;">marketplace</a></li>
                </div>
                
                <div class="sc">
                    <li><input placeholder="search" type="text"></li>
                </div>
                
                <div class="sald">
                    <li><a href="/lobby">Lobby</a></li>
                </div>
                
                <div class="sal">
                    <li><a href="">Saldo</a></li> 
                </div> 
                <div class="adm">
                    <li><img class="logo-admin" src="./assets/images/admin.jpg" alt=""></li>
                <li><a href="" class="admin">Admin</a></li>
                </div>
                
                <li><img class="search" src="assets/images/search-interface-symbol.png" alt=""></li>
            </ul>   
        </div>

        <div class="best">
             <div class="gambar">
                <img src="{{ asset('/assets/img').'/'.$data->foto }}" alt="">
                <!-- <img src="{{ asset('/assets/img'.$data->foto)}}" alt=""> -->

            </div>

            <div class="btn">
                <p><span class="span">{{$data->title}}</span></p>
            </div>
            <div class="btn2">
                <h1><h5 class="card-title">{{$data->preview_item}}</h5></h1>
            </div>
            <div class="flex">
                <p><h5 class="card-title">{{$data->price}}</h5></p>
            </div>
            <div class="flex2">
                <p><h5 class="card-title">{{$data->minimum_bid}}</h5></p>
            </div>

            <div class="lorem">
                <p><span class="span">{{$data->deskrpsi}}</span></p>
            </div>
            <div class="gambar-anime">
                <img src="assets/images/foto.jpg" alt="">
            </div>
            <div class="row">
                 <div class="alur">
                    <p>Highest bid by <b>Jonh Biden</b></p>
                </div>

                <div class="alur-harga">
                    <p><h5 class="card-title">{{$data->minimum_bid}}</h5></p>
                </div>
            </div>
        </div>
       
        
       
        <div class="alur-bawah">
            <p>Auction Ending in</p>
        </div>
        <div class="countdown">
                <div class="container-day">
                    <h3 class="day">00</h3>
                    <span>Days</span>
                </div>

                <div class="container-hours">
                    <h3 class="hours">00</h3>
                    <span>Hours</span>
                </div>

                <div class="container-minutes">
                    <h3 class="minute">00</h3>
                    <span>Minute</span>
                </div>

                <div class="container-second">
                    <h3 class="second">00</h3>
                    <span>Second</span>
                </div>

        </div>
        <div class="profil">
            <img src="assets/images/foto.jpg" alt="">
        </div>
        <div class="nama-profil">
            <p><b>John Biden</b></p>
        </div>
        <div class="nama-profil1">
            <p>Owener</p>
        </div>
        <div class="tombol1">
            <a href=""><button>Purchase now</button></a>
        </div>
        <div class="tombol2">
            <a href=""><button>Place a Bid</button></a>
        </div>
    </div>

    <script src="assets/js/main.js"></script>

</body>
</html>