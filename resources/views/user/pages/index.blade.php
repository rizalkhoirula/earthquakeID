@extends('user.layout.layout')

@section('content')

<!--:::::HEADER AREA START :::::::-->
<div class="header__area header2 header__absolute" id="header">
    <div class="container">
        <div class="row">
            <div class="col-6 col-md-5 col-xl-3 align-self-center">
                <a href="index-2.html" class="logo"><img src="{{ asset('user/assets/img/logo/logo3.png') }}" alt=""></a>
            </div>
            <div class="col-6 col-md-7 col-xl-6 text-center align-self-center">
                <div class="main__menu">
                    <div class="stellarnav">
                        <ul class="navclass" id="scroll">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#statistik">Statistik</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#kontak">kontak</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--::::: HEADER AREA END :::::::-->


<!--::::: MAP AREA START :::::::-->
<div class="map__area section-padding2">
    <div class="container">
        
        <div class="space-50"></div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="mapimg wow zoomIn">
                    {{-- <img src="{{ asset('user/assets/img/bg/map2.svg') }}" alt=""> --}}
                    <div class="maps" id="maps"></div>
                    <style>
                        .maps {
                            height: 500px;
                            width: 100%;
                        }

                    </style>
                </div>
                
            </div>
        </div>
    </div>
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img1">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img2">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img3">
</div>
<!--::::: MAP AREA END :::::::-->




<!--::::: STATISTIK AREA START :::::::-->
<div class="counter__area counter2" id="statistik">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="counters">
                    <div class="counters__wrap">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 text-center">
                                <div class="single__counter wow fadeInUp" data-wow-delay=".3s">
                                    
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 text-center">
                                <div class="single__counter wow fadeInUp" data-wow-delay=".5s">
                                    <h2 class="counter">{{ $totalgempa}}</h2>
                                    <p>Totals Earthquake</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 text-center">
                                <div class="single__counter ctype2 wow fadeInUp" data-wow-delay=".7s">
                                    <h2 class="counter">{{ $totalmati }}</h2>
                                    <p>Human Deaths</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 text-center">
                                <div class="single__counter no__border wow fadeInUp" data-wow-delay=".9s">
                                   
                                </div>
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="1s">
                                <div class="space-30"></div>
                                <h6 class="emergency">*** Updated less than 20 mins ago, Source: <a href="https://www.bmkg.go.id/">BMKG</a></h6>
                            </div>
                        </div>
                        <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="counter__bg counter__bg1">
                        <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="counter__bg counter__bg2">
                    </div>
                 
                </div>
            </div>
        </div>
    </div>
    <style>
        .counter__area {
            padding: 100px 0;
        }
    </style>
</div>
<!--::::: STATISTIK AREA END :::::::-->



<!--::::: ABOUT AREA START :::::::-->
<div class="about__area about2 section-padding" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about__img wow fadeInLeft">
                    <img src="{{ asset('user/assets/img/about/bumi.png') }}" alt="image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about__text wow fadeInRight">
                    <div class="title title2">
                        <p class="title__top title__top2">About Earthquakes</p>
                        <h2>What is an Earthquake?</h2>
                        <h4>An earthquake is the shaking of the surface of the Earth resulting from a sudden release of energy in the Earth's lithosphere that creates seismic waves. Earthquakes can range in size from those that are so weak that they cannot be felt to those violent enough to propel objects and people into the air, and wreak destruction across entire cities. <br> <br> You can protect yourself by identifying safe places in each room of your home, practicing "Drop, Cover, and Hold On" drills, and securing heavy items to walls and floors to prevent them from falling during a quake.</h4>
                        <div class="space-30"></div>
                        <a href="https://en.wikipedia.org/wiki/Earthquake" class="cbtn btn2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="about__shape about__shape1">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="about__shape about__shape3">
    <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="about__shape about__shape4">
</div>
<!--::::: ABOUT AREA END :::::::-->


<!--::::: CTA AREA  START::::::-->
<div class="cta__area cta2 theme__bg2__haf" id="kontak">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta">
                    <div class="cta_wrap">
                        <div class="row">
                            <div class="col-lg-8 m-auto text-center">
                                <div class="title title2">
                                    <h2>Have Problem after Earthquake?</h2>
                                    <h4>HUBUNGI SAJA YAA, AKU AKAN MEMBANTUMUUUUU</h4>
                                    <div class="space-30"></div>

                                    <div class="btn__group">
                                        <a href="#" class="cbtn emergency_btn2 emergency_btn3">
                                            <img class="btn__icon" src="{{ asset('user/assets/img/icon/phone2png.png') }}" alt="">
                                            <img class="btn__hover__icon" src="{{ asset('user/assets/img/icon/alert__phone__white.svg') }}" alt="">
                                            Call For Consultation
                                        </a>
                                        <a href="#" class="cbtn emergency_btn2 emergency_btn3">
                                            <img class="btn__icon" src="{{ asset('user/assets/img/icon/calender2_color.png') }}" alt="">
                                            <img class="btn__hover__icon" src="{{ asset('user/assets/img/icon/calender.png') }}" alt="">
                                            Book Psikolog
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img1">
                        <img src="{{ asset('user/assets/img/shape/shape__white2.png') }}" alt="" class="contagion__img contagion__img2">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--::::: CTA AREA END :::::::-->
@endsection

@section('script')
<script>
    var map = L.map('maps').setView([-0.789275, 113.921327], 5);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18
        , attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
    }).addTo(map);

    var data = @json($data);

    data.forEach(function(gempa) {
        var latitude = parseFloat(gempa.latitude);
        var longitude = parseFloat(gempa.longitude);
        var radius = parseFloat(gempa.radius) * 1000; 

        if (isNaN(latitude) || isNaN(longitude) || isNaN(radius)) {
            console.error("Invalid data for gempa:", gempa);
            return; 
        }

        var circle = L.circle([latitude, longitude], {
            radius: radius
            , color: '#ff0000', 
            fillColor: '#ff0000', 
            fillOpacity: 0.5
        }).addTo(map);

        circle.bindPopup("<b>" + gempa.nama + "</b><br>" + gempa.tanggal + "<br>Latitude: " + gempa.latitude + "<br>Longitude: " + gempa.longitude + "<br> <a href='/detail/" + gempa.id + "'>Detail</a>");
    });

</script>

@endsection


