<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-LooPsAkademi</title>
    <link href="{{asset('admin_cs/assets/css/main.css')}}" rel="stylesheet" />
</head>

<body>

@include('layouts.navbar')
    <!-- SİDEBAR -->

@include('layouts.homesidebar')
    <!-- --------- main ---------- -->

    <div class="container">
        <div class="banner">
            <img src="images/banner.png">
        </div>

        <div class="list-container">

            <div class="vid-list">
                <a href="play-video.html"> <img src="images/thumbnail1.png" class="thumbnail"></a>
                <div class="flex-div">
                    <img src="images/Jack.png">
                    <div class="vid-info">
                        <a href="play-video.html">Üstlü Sayılar TYT | ABC Eğitim Kurumu</a>
                        <p>ABC EĞİTİM KURUMU</p>
                        <p>1.550 İzlenme &bull; 2 days</p>
                    </div>
                </div>
            </div>

            <div class="vid-list">
                <a href=""> <img src="images/thumbnail1.png" class="thumbnail"></a>
                <div class="flex-div">
                    <img src="images/Jack.png">
                    <div class="vid-info">
                        <a href="">Köklü Sayılar TYT | ABC Eğitim Kurumu</a>
                        <p>ABC EĞİTİM KURUMU</p>
                        <p>5.500 İzlenme &bull; 2 days</p>
                    </div>
                </div>
            </div>

            <div class="vid-list">
                <a href=""> <img src="images/thumbnail1.png" class="thumbnail"></a>
                <div class="flex-div">
                    <img src="images/Jack.png">
                    <div class="vid-info">
                        <a href="">Türev AYT | ABC Eğitim Kurumu</a>
                        <p>ABC EĞİTİM KURUMU</p>
                        <p>60 İzlenme &bull; 2 days</p>
                    </div>
                </div>
            </div>

            <div class="vid-list">
                <a href=""> <img src="images/thumbnail1.png" class="thumbnail"></a>
                <div class="flex-div">
                    <img src="images/Jack.png">
                    <div class="vid-info">
                        <a href="">Sözcükte Anlam TYT | ABC Eğitim Kurumu</a>
                        <p>ABC EĞİTİM KURUMU</p>
                        <p>110 İzlenme &bull; 2 days</p>
                    </div>
                </div>
            </div>


            <div class="vid-list">
                <a href=""> <img src="images/thumbnail1.png" class="thumbnail"></a>
                <div class="flex-div">
                    <img src="images/Jack.png">
                    <div class="vid-info">
                        <a href="">Bitkiler AYT | ABC Eğitim Kurumu</a>
                        <p>ABC EĞİTİM KURUMU</p>
                        <p>180 İzlenme &bull; 2 days</p>
                    </div>
                </div>
            </div>


            <div class="vid-list">
                <a href=""> <img src="images/thumbnail1.png" class="thumbnail"></a>
                <div class="flex-div">
                    <img src="images/Jack.png">
                    <div class="vid-info">
                        <a href="">Coğrafi Keşigler AYT | ABC Eğitim Kurumu</a>
                        <p>ABC EĞİTİM KURUMU</p>
                        <p>250 İzlenme &bull; 2 days</p>
                    </div>
                </div>
            </div>

        </div>







        <script src="{{asset('admin_cs/assets/js/script.js')}}"></script>
</body>

</html>