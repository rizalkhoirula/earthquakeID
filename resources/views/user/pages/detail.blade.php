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
                            <li><a href="{{ url('/') }}#home">Home</a></li>
<li><a href="{{ url('/') }}#statistik">Statistik</a></li>
<li><a href="{{ url('/') }}#about">About</a></li>
<li><a href="{{ url('/') }}#kontak">Kontak</a></li>

                            
                        </ul>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>
<!--::::: HEADER AREA END :::::::-->

<!--:::::BLOG PAGE AREA START :::::::-->
<div class="blog-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-page-left mr-lg-4">
                    <div class="single-blog-section">
                        {{-- <img src="{{ asset('user/assets/img/blog/blog1.jpg') }}" alt=""> --}}
                        <div class="maps" id="maps"></div>
                        <style>
                            .maps {
                                height: 500px;
                                width: 100%;
                                z-index: 1;
                            }

                        </style>
                        <script>
                            var map = L.map('maps').setView([-0.789275, 113.921327], 5);

                            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                maxZoom: 18
                                , attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
                            }).addTo(map);

                            var data = @json($data);

                            // data.forEach(function(gempa) {
                            // Ensure latitude, longitude, and radius are valid numbers
                            var latitude = parseFloat(data.latitude);
                            var longitude = parseFloat(data.longitude);
                            var radius = parseFloat(data.radius) * 1000; // Convert km to meters

                            // if (isNaN(latitude) || isNaN(longitude) || isNaN(radius)) {
                            //     console.error("Invalid data for gempa:", gempa);
                            //     return; // Skip this gempa if any value is not a number
                            // }

                            var circle = L.circle([latitude, longitude], {
                                radius: radius
                                , color: '#ff0000', // Outline color
                                fillColor: '#ff0000', // Fill color
                                fillOpacity: 0.5 // Opacity of the fill color
                            }).addTo(map);

                            // Bind popup to the circle
                            circle.bindPopup("<b>" + data.nama + "</b><br>" + data.tanggal + "<br>Latitude: " + latitude + "<br>Longitude: " + longitude + "<br>Radius: " + radius + " m");
                            // });

                        </script>
                        <div class="single-blog-section-description blog-box">
                            <h2 style="color: white">{{ $data->nama }}</h2>
                            <div class="single-blog-section-author">
                                <ul>
                                    <li>
                                        <a style="color: white" class="blog-author" href="#">
                                            <img src="{{ asset('user/assets/img/blog/auhor1.jpg') }}" alt="">Intan</a>
                                    </li>
                                    <li><a href="#" style="color: white"><i class="fal fa-calendar-alt"></i> {{ $data->tanggal }}</a>
                                    </li>
                                    <li><a href="#" style="color: white"><i class="fal fa-clock"></i> 01 MiN READ</a>
                                    </li>
                                </ul>
                            </div style="color: white">{{$deskripsi}}
                            <p></p>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--:::::BLOG PAGE AREA END :::::::-->

@endsection
