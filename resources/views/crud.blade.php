<div class="row">
        <div class="col-md-9">
            <!-- <a href="/tambah_detail">upload</a> -->
            <table style="overflow:hidden;">
                <ul>
                    <li>
                        <div class="card-banner img-holder" style="--width: 500; --height: 500;" >
                            {{-- <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Foto</th>
                                    <th>Preview Item</th>
                                    <th>Price</th>
                                    <th>Minimum Bid</th>
                                    <th>Starting Date</th>
                                    <th>Expiration Date</th>
                                    <th>Title</th>
                                   
                                    <th>Description</th>
                                </tr>
                            </thead> --}}

                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                <div class="container my-5 d-flex justify-content-evenly flex-wrap">
                                @foreach ($data as $row)

                                {{-- <tr>
                                    
                                    <th scope="row">{{$no++}}</th>
                                    <th>
                                        <img src="{{ asset('/public/assets/img/'.$row->foto) }}" alt="" width="500" height="500" loading="lazy"
                                        class="img-cover">
                                    </th>
                                    <th>{{$row->preview_item}}</th>
                                    <th>{{$row->price}}</th>
                                    <th>{{$row->minimum_bid}}</th>
                                    <th>{{$row->starting_date}}</th>
                                    <th>{{$row->expiration_date}}</th>
                                    <th>{{$row->title}}</th>
                                   
                                    <th>{{$row->deskrpsi}}</th>
                                </tr> --}}
                                <div class="card my-5" style="width: 25rem;">
                                    <img src="{{ asset('/assets/img/'.$row->foto) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">{{$row->preview_item}}</h5>
                                    <div class="my-3 d-flex justify-content-lg-around align-items-center">
                                        <p class="card-text">{{$row->expiration_date}}</p>
                                        
                                    </div>
                                    <div class="my-5 d-flex align-items-center justify-content-between">
                                        <a href="#" class="btn btn-primary">Place a Bid</a>
                                        <a href="" class="btn btn-light">View Detail</a>
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            </tbody>
                        </div>
                    </li>
                </ul>
                
            </table>
        </div>
    </div>




     <!-- produk -->

     <ul>
        @php
        $no = 1;
        @endphp
        <div class="container my-5 d-flex justify-content-evenly bg-dark">
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
                   

                    <span class="span"><p class="card-text">{{$row->price}}</p></span>
                </div>
                </div>

                <div>
                <p>Highest Bid</p>

                <div class="card-price">
                   

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
        
