<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .create img{
            width: 100%;
            height: 300px;
        }

        .cr p{
            position: absolute;
            width: 293px;
            height: 72px;
            left: 42%;
            top: 120px;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 48px;
            line-height: 72px;
            color: white;
        }
        .crlog img{
            position: absolute;
            width: 85px;
            height: 85px;
            left: 100px;
            top: 40px;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-9">
            <div class="crlog">
                <img src="./assets/images/logocr.svg" alt="">
            </div>
            <div class="cr">
                <p>Create Item</p>
            </div>
            <div class="create">
                <img src="./assets/images/latar1.jpg" alt="">
            </div>
            <form action="/insert_data" method="post" enctype="multipart/form-data">
                @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 300px;height: 30px;left: 230px;top: 1100px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;
                            line-height: 30px;color: #888888;">Masukan Foto</label>
                            <input type="file"  name="foto" style="position: absolute;
                            width: 980px;height: 90px;left: 230px;top: 1150px;background: #D9D9D9;border-radius: 5px;">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="position:absolute;width: 134px;height: 30px;left: 230px;top: 340px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;line-height: 30px;color: #888888;">Preview Item</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="preview_item" style="position: absolute;width: 980px;height: 40px;left: 230px;top: 390px;background: #D9D9D9;border-radius: 5px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="position:absolute;width: 52px;height: 30px;left: 230px;top: 460px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;line-height: 30px;color: #888888;">Price</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="price" style="position: absolute;width: 980px;height: 40px;left: 230px;top: 510px;background: #D9D9D9;border-radius: 5px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 137px;height: 30px;left: 230px;top: 580px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;line-height: 30px;color: #888888;">Minimum Bid</label>
                            <input type="number" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="minimum_bid" style="position: absolute;width: 980px;height: 40px;left: 230px;top: 630px;background: #D9D9D9;border-radius: 5px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 137px;height: 30px;left: 230px;top: 710px;color: #888888;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;">Starting Date</label>
                            <input type="date" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="starting_date" style="position: absolute;width: 420px;height: 40px;left: 230px;top: 750px;background: #D9D9D9;border-radius: 5px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 158px;height: 30px;left: 760px;top: 710px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;line-height: 30px;color: #888888;">Expiration Date</label>
                            <input type="date" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="expiration_date" style="position: absolute;width: 440px;height: 40px;left: 760px;top: 750px;background: #D9D9D9;border-radius: 5px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 45px; height: 30px;left: 230px;top: 820px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;line-height: 30px;color: #888888">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="title" style="position: absolute;
                                width: 980px;height: 40px;left: 230px;top: 870px;background: #D9D9D9;border-radius: 5px;">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="position: absolute;width: 119px;height: 30px;left: 230px;top: 935px;font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 20px;
                            line-height: 30px;color: #888888;">Description</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="deskrpsi" style="position: absolute;
                                width: 980px;height: 90px;left: 230px;top: 985px;background: #D9D9D9;border-radius: 5px;">
                        </div>
                       
                        <button type="submit" class="btn btn-primary" style="position: absolute; top: 1270px;width: 300px;height: 30px;left: 580px; ">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>