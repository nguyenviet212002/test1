
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" href="{{asset("css/happybirtday.css")}}" />

</head>

<body>
    <div id="clockdiv">
        <label>happy birtday</label>
        <p>28 February 2023</p>
        <div>
            <span class="days" id="day"></span>
            <div class="smalltext">Ngày</div>
        </div>
        <div>
            <span class="hours" id="hour"></span>
            <div class="smalltext">Giờ</div>
        </div>
        <div>
            <span class="minutes" id="minute"></span>
            <div class="smalltext">Phút</div>
        </div>
        <div>
            <span class="seconds" id="second"></span>
            <div class="smalltext">Giây</div>
        </div>
    </div>
    <div class="banner">
        <div class="single-banner">
            <img src="img/in.jpg" alt="" />
        </div>
    </div>
    <div class="rightcolumn">
        <div class="card">
            <div class="fakeimg" style="height: 380px">
                <img src="img/in10.jpg" alt="" style="
              border-radius: 60%;
              -moz-border-radius: 50%;
              -webkit-border-radius: 50%;
              object-fit: cover;
              width: 100%;
              height: 100%;
              border: 5px solid rgb(248, 152, 152);
              border-radius: 50%;
            " />
            </div>
            <h2 style="text-align: center;color: black;font-weight: 750;font-size: 30px;">LÊ THỊ</h2>
            <p>Chào mọi người ạ, con tên là Lê Ỉn. Con năm nay 4 tuổi, sở thích của con là xem tivi với điện thoại. Con cảm ơn mọi người đã tới dự và gửi những lời chúc tốt đẹp tới con ạ. Chúc cho mọi người luôn mạnh khỏe bình an ạ </p>
        </div>

    </div>
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Lúc đáng iu^^</h2>
                <h5>2019</h5>
                <div class="fakeimg" style="height: 300px">
                    <img src="img/in5.jpg" alt="" style="object-fit: cover; width: 100%; height: 100%" />
                </div>
                <p></p>
            </div>
            <div class="card">
                <h2>Chu mỏ ♥</h2>
                <h5>2020</h5>
                <div class="fakeimg" style="height: 300px">
                    <img src="img/in6.jpg" alt="" style="object-fit: cover; width: 100%; height: 100%" />
                </div>
                <p>Some text..</p>
            </div>
            <div class="card">
                <h2>Không biết nói gì vì quá lạnh!!</h2>
                <h5>2021</h5>
                <div class="fakeimg" style="height: 300px">
                    <img src="img/in7.jpg" alt="" style="object-fit: cover; width: 100%; height: 100%" />
                </div>
                <p>Some text..</p>
            </div>
            <div class="card">
                <h2>Sinh nhật ỉn</h2>
                <h5>2022</h5>
                <div class="fakeimg" style="height: 300px">
                    <img src="img/in8.jpg" alt="" style="object-fit: cover; width: 100%; height: 100%" />
                </div>
                <p>Some text..</p>
            </div>
            <div class="card">
                <h2>Tết của ỉn</h2>
                <h5>2023</h5>
                <div class="fakeimg" style="height: 300px">
                    <img src="img/in9.jpg" alt="" style="object-fit: cover; width: 100%; height: 100%" />
                </div>
                <p>Some text..</p>
            </div>
        </div>
    </div>
    <div class="card">
        <h3>Album của ỉn</h3>
        <div class="banner_slick" style="padding-bottom: 10px;">
            <div class="single-banner" style="height: 300px;">
                <img src="img/in1.jpg" alt="" style="height: 100%;">
            </div>
            <div class="single-banner" style="height: 300px;">
                <img src=" img/in3.jpg " alt=" " style="height: 100%; ">
            </div>
        </div>
        <button style="margin-left: 30%;">xem album</button>
    </div>
    <div class="card">
        <h3 style="text-align: center;"> Gửi lời chúc</h3>
        <p>Cảm ơn mọi người rất nhiều đã gửi lời chúc mừng đến ỉn</p>
        <form action="{{ route('add-wish')}}" method="POST">
            @csrf
            <input type="name" name="name" placeholder=" Nhập họ và tên" />
            <input type="email " name="email" placeholder=" Nhập email" />
            <input type="text" name ="wish"placeholder=" Nhập lời chúc của bạn" style="height:200px;" />
            <button style="margin-left: 30%; ">Gửi lời nhắn</button>
        </form>
        <div class="wish-box" style="border:3px solid rebeccapurple; margin-top: 15px;">
            <div class="mostly-customized-scrollbar"> 
                @foreach ($data as $wish)
                    <div>
                    <label>{{$wish ->name}}</label>
                    <p>{{$wish ->wish}}</p>
                </div>
                @endforeach       
                
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
    <!-- link slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js "></script>
    <script {{ asset('js/happybirtday.js') }}></script>

    
</body>

</html>
