<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <title>Google Maps Route</title>
    <style>
        #map, #map2,#map3,#map4,#map5 {
            height: 400px;
            width: 50%;
        }

        #directionsPanel,#directionsPanel2,#directionsPanel3,#directionsPanel4,#directionsPanel5 {
            height: 400px;
            width: 50%;
        }
    </style>
</head>

<div class="row">
      <div class="col">

        <nav class="navbar navbar-expand-lg fixed-top bg-dark">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarnew" aria-controls="navbarnew" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarnew">
                  <a class="navbar-brand" href="/"><img class="img-fluid" style="height:50px" src="{{ asset('images/Logo.png') }}" alt="logo"></a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="tours">Tours</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                      </li>
                      
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                          <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="attractions">Attractions</a></li>
                              <li><a class="dropdown-item" href="hotels">Hotels</a></li>
                              <li><a class="dropdown-item" href="foods">Foods and Cafe</a></li>
                              <li><a class="dropdown-item" href="rentals">Rental Items</a></li>
                              <li><a class="dropdown-item" href="shops">Shops</a></li>
                          </ul>
                      </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item sign"><a class="nav-link" href="logout">Logout</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
      </div>
    </div>

<body class="bg-dark bg-gradient" onload="initMap(); initMap2(); initMap3(); initMap4(); initMap5();">


<div class="container dpanel" id="gmap1">
    
    <div class="row">
        <div class="row">
            <div class="lable" style="text-align:center;"><p>Day One Route Plan</p></div>
        </div>
        <div class="row">
            <div class="col-md-6" id="map" style="margin-top:10px; height:70vh;"></div>
            <div class="col-md overflow-auto" id="directionsPanel" style="height:70vh;"></div>
        </div>
        
        <div class="row rone">
            @foreach($businesses as $business)
            @if($business->id == $A2)
            <div class="col-md-2 locplan rounded-2 border border-2" id="id01">
                <br>
                <p class="lable2"> A</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
            </div>
            @endif
            @if($business->id == $B2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> B</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $C2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> C</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $D2)

            <div class="col-md-2 locplan rounded-2 border border-2">
                <br>
                <p class="lable2"> D</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $E2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> E</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $F2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> F</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
        @endforeach
        </div>
        <div class="row">
            @foreach($businesses as $business)
            @if($business->id == $G2)
            <div class="col-md-2 locplan rounded-2 border border-2" id="id01">
                <br>
                <p class="lable2"> G</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
            </div>
            @endif
            @if($business->id == $H2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> H</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $I2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> I</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                
            </div>
            @endif
            @if($business->id == $J2)

            <div class="col-md-2 locplan rounded-2 border border-2">
                <br>
                <p class="lable2"> J</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                
            </div>
            @endif
        @endforeach
        </div>
        <div class="row d-flex justify-content-center">
            <button class="btn btn-success" id="navigateButton" style="margin-top:20px; width:300px;">Navigate Through Google Map</button>
        </div>
    </div><br>
</div> 

<div class="container dpanel" id="gmap2">
    <div class="row">
        <div class="row">
            <div class="lable" style="text-align:center;"><p>Day Two Route Plan</p></div>
        </div>
        <div class="row">
            <div class="col-md-6" id="map2" style="margin-top:10px; height:70vh;"></div>
            <div class="col-md overflow-auto" id="directionsPanel2" style="height:70vh;"></div>
        </div>
        <div class="row rone">
            @foreach($businesses as $business)
            @if($business->id == $K2)
            <div class="col-md-2 locplan rounded-2 border border-2" id="id01">
                <br>
                <p class="lable2"> A</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
            </div>
            @endif
            @if($business->id == $L2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> B</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $M2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> C</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $N2)

            <div class="col-md-2 locplan rounded-2 border border-2">
                <br>
                <p class="lable2"> D</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $O2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> E</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $P2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> F</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
        @endforeach
        </div>
        <div class="row">
            @foreach($businesses as $business)
            @if($business->id == $Q2)
            <div class="col-md-2 locplan rounded-2 border border-2" id="id01">
                <br>
                <p class="lable2"> G</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
            </div>
            @endif
            @if($business->id == $R2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> H</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $S2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> I</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                
            </div>
            @endif
            @if($business->id == $T2)

            <div class="col-md-2 locplan rounded-2 border border-2">
                <br>
                <p class="lable2"> J</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                
            </div>
            @endif
        @endforeach
        </div>
        <div class="row d-flex justify-content-center">
            <button class="btn btn-success" id="navigateButton2" style="margin-top:20px; width:300px;">Navigate Through Google Map</button>
        </div>
    </div><br>
</div> 

<div class="container dpanel" id="gmap3">
    
    <div class="row">
        <div class="row">
            <div class="lable" style="text-align:center;"><p>Day Three Route Plan</p></div>
        </div>
        <div class="row">
            <div class="col-md-6" id="map3" style="margin-top:10px; height:70vh;"></div>
            <div class="col-md overflow-auto" id="directionsPanel3" style="height:70vh;"></div>
        </div>
        <div class="row rone">
            @foreach($businesses as $business)
            @if($business->id == $U2)
            <div class="col-md-2 locplan rounded-2 border border-2" id="id01">
                <br>
                <p class="lable2"> A</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
            </div>
            @endif
            @if($business->id == $V2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> B</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $W2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> C</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $X2)

            <div class="col-md-2 locplan rounded-2 border border-2">
                <br>
                <p class="lable2"> D</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $Y2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> E</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $Z2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> F</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
        @endforeach
        </div>
        <div class="row">
            @foreach($businesses as $business)
            @if($business->id == $a2)
            <div class="col-md-2 locplan rounded-2 border border-2" id="id01">
                <br>
                <p class="lable2"> G</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
            </div>
            @endif
            @if($business->id == $b2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> H</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $c2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> I</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                
            </div>
            @endif
            @if($business->id == $d2)

            <div class="col-md-2 locplan rounded-2 border border-2">
                <br>
                <p class="lable2"> J</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                
            </div>
            @endif
        @endforeach
        </div>
        <div class="row d-flex justify-content-center">
            <button class="btn btn-success" id="navigateButton3" style="margin-top:20px; width:300px;">Navigate Through Google Map</button>
        </div>
    
    </div><br>
</div> 

<div class="container dpanel" id="gmap4">
    
    <div class="row">
        <div class="row">
            <div class="lable" style="text-align:center;"><p>Day Four Route Plan</p></div>
        </div>
        <div class="row">
            <div class="col-md-6" id="map4" style="margin-top:10px; height:70vh;"></div>
            <div class="col-md overflow-auto" id="directionsPanel4" style="height:70vh;"></div>
        </div>
        <div class="row rone">
            @foreach($businesses as $business)
            @if($business->id == $z2)
            <div class="col-md-2 locplan rounded-2 border border-2" id="id01">
                <br>
                <p class="lable2"> A</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
            </div>
            @endif
            @if($business->id == $f2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> B</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $g2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> C</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $h2)

            <div class="col-md-2 locplan rounded-2 border border-2">
                <br>
                <p class="lable2"> D</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $j2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> E</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $k2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> F</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
        @endforeach
        </div>
        <div class="row">
            @foreach($businesses as $business)
            @if($business->id == $l2)
            <div class="col-md-2 locplan rounded-2 border border-2" id="id01">
                <br>
                <p class="lable2"> G</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
            </div>
            @endif
            @if($business->id == $m2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> H</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $n2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> I</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                
            </div>
            @endif
            @if($business->id == $o2)

            <div class="col-md-2 locplan rounded-2 border border-2">
                <br>
                <p class="lable2"> J</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                
            </div>
            @endif
        @endforeach
        </div>
        <div class="row d-flex justify-content-center">
            <button class="btn btn-success" id="navigateButton4" style="margin-top:20px; width:300px;">Navigate Through Google Map</button>
        </div>
    
    </div><br>
</div> 

<div class="container dpanel" id="gmap5">
    
    <div class="row">
        <div class="row">
            <div class="lable" style="text-align:center;"><p>Day Five Route Plan</p></div>
        </div>
        <div class="row">
            <div class="col-md-6" id="map5" style="margin-top:10px; height:70vh;"></div>
            <div class="col-md overflow-auto" id="directionsPanel5" style="height:70vh;"></div>
        </div>
        <div class="row rone">
            @foreach($businesses as $business)
            @if($business->id == $p2)
            <div class="col-md-2 locplan rounded-2 border border-2" id="id01">
                <br>
                <p class="lable2"> A</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
            </div>
            @endif
            @if($business->id == $q2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> B</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $r2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> C</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $s2)

            <div class="col-md-2 locplan rounded-2 border border-2">
                <br>
                <p class="lable2"> D</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $t2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> E</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $u2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> F</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
        @endforeach
        </div>
        <div class="row">
            @foreach($businesses as $business)
            @if($business->id == $v2)
            <div class="col-md-2 locplan rounded-2 border border-2" id="id01">
                <br>
                <p class="lable2"> G</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
            </div>
            @endif
            @if($business->id == $w2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> H</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                <br>
                
                
            </div>
            @endif
            @if($business->id == $x2)
            <div class="col-md-2 locplan rounded-2 border border-2">
                
                <br>
                <p class="lable2"> I</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                
            </div>
            @endif
            @if($business->id == $y2)

            <div class="col-md-2 locplan rounded-2 border border-2">
                <br>
                <p class="lable2"> J</p>
                <p>{{$business->title}}</p>
                <img src="{{asset($business->cover_img)}}" class="img-fluid">
                
            </div>
            @endif
        @endforeach
        </div>
        <div class="row d-flex justify-content-center">
            <button class="btn btn-success" id="navigateButton5" style="margin-top:20px; width:300px;">Navigate Through Google Map</button>
        </div>
    
    </div>
</div>


    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
    </script>

    <script>

if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    Xloc = position.coords.latitude;
                    Yloc = position.coords.longitude;
                    console.log("Latitude: " + Xloc);
                    console.log("Longitude: " + Yloc);
                });
            } else {
                console.log("Geolocation is not supported by this browser.");
            }
        //Day 01 Route Plan
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 7.2906, lng: 80.6337 },
                zoom: 10,
                mapTypeControl: false, // Hide map type control
                streetViewControl: false, // Hide street view control
                fullscreenControl: false, // Hide fullscreen control
                zoomControl: true, // Show zoom control
                scaleControl: true, // Show scale control
                rotateControl: true, // Show rotate control
                compassControl: true // Show compass control
            });

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer({ 
                map: map,
                panel: document.getElementById('directionsPanel')
             });

            

             

            const waypoints = [
                { location: new google.maps.LatLng(<?php echo $A ?>, <?php echo $A1 ?>) },
                { location: new google.maps.LatLng(<?php echo $B ?>, <?php echo $B1 ?>) },
                { location: new google.maps.LatLng(<?php echo $C ?>, <?php echo $C1 ?>) },
                { location: new google.maps.LatLng(<?php echo $D ?>, <?php echo $D1 ?>) },
                { location: new google.maps.LatLng(<?php echo $E ?>, <?php echo $E1 ?>) },
                { location: new google.maps.LatLng(<?php echo $F ?>, <?php echo $F1 ?>) },
                { location: new google.maps.LatLng(<?php echo $G ?>, <?php echo $G1 ?>) },
                { location: new google.maps.LatLng(<?php echo $H ?>, <?php echo $H1 ?>) },
                { location: new google.maps.LatLng(<?php echo $I ?>, <?php echo $I1 ?>) },
                { location: new google.maps.LatLng(<?php echo $J ?>, <?php echo $J1 ?>) }
            ];


            const filteredWaypoints = waypoints.filter(waypoint => {
                const latitude = waypoint.location.lat();
                const longitude = waypoint.location.lng();
                return !(isNaN(latitude) || isNaN(longitude));
            });

            if (filteredWaypoints.length === 0) {
                // If all waypoints are undefined, hide the map container
                document.getElementById('gmap1').style.display = 'none';
                return; // Exit the function early
            }
            
            
            const request = {
                origin: waypoints[0].location,
                destination: waypoints[filteredWaypoints.length - 1].location,
                waypoints: filteredWaypoints.slice(1, -1),
                travelMode: google.maps.TravelMode.DRIVING
            };

            

            directionsService.route(request, function (result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(result);
                } else {
                    console.error('Error fetching directions:', status);
                }
            });

           

                var waypointsmap = [];

                for (var i = 0; i < filteredWaypoints.length-1; i++) {
                    waypointsmap.push(encodeURIComponent(waypoints[i].location));
                }

                console.log(filteredWaypoints.length);
                var destination = waypoints[filteredWaypoints.length - 1].location;

                if (!destination) {
                    for (var i = waypoints.length - 1; i >= 0; i--) {
                        if (waypoints[i].location) {
                            destination = waypoints[i].location;
                            break;
                        }
                    }
                }

                var url = 'https://www.google.com/maps/dir/?api=1&origin='+ Xloc + ',' + Yloc + '&destination=' + encodeURIComponent(destination);

                if (waypointsmap.length >= 0) {
                    url += '&waypoints=' + waypointsmap.join('|');
                }

                document.getElementById("navigateButton").addEventListener("click", function() {
                    // Call navigatePath function with coordinates array
                    window.open(url, '_blank');
                });


                

                
 
        }

       

                





        //Day 02 route Plan
        function initMap2() {
            const map = new google.maps.Map(document.getElementById('map2'), {
                center: { lat: 7.2906, lng: 80.6337 },
                zoom: 10
            });

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer({ 
                map: map,
                panel: document.getElementById('directionsPanel2')
             });

            const waypoints = [
                { location: new google.maps.LatLng(<?php echo $K ?>, <?php echo $K1 ?>) },
                { location: new google.maps.LatLng(<?php echo $L ?>, <?php echo $L1 ?>) },
                { location: new google.maps.LatLng(<?php echo $M ?>, <?php echo $M1 ?>) },
                { location: new google.maps.LatLng(<?php echo $N ?>, <?php echo $N1 ?>) },
                { location: new google.maps.LatLng(<?php echo $O ?>, <?php echo $O1 ?>) },
                { location: new google.maps.LatLng(<?php echo $P ?>, <?php echo $P1 ?>) },
                { location: new google.maps.LatLng(<?php echo $Q ?>, <?php echo $Q1 ?>) },
                { location: new google.maps.LatLng(<?php echo $R ?>, <?php echo $R1 ?>) },
                { location: new google.maps.LatLng(<?php echo $S ?>, <?php echo $S1 ?>) },
                { location: new google.maps.LatLng(<?php echo $T ?>, <?php echo $T1 ?>) }
            ];

            const filteredWaypoints = waypoints.filter(waypoint => {
                const latitude = waypoint.location.lat();
                const longitude = waypoint.location.lng();
                return !(isNaN(latitude) || isNaN(longitude));
            });

            if (filteredWaypoints.length === 0) {
                // If all waypoints are undefined, hide the map container
                document.getElementById('gmap2').style.display = 'none';
                return; // Exit the function early
            }
            

            const request = {
                origin: waypoints[0].location,
                destination: waypoints[filteredWaypoints.length - 1].location,
                waypoints: filteredWaypoints.slice(1, -1),
                travelMode: google.maps.TravelMode.DRIVING
            };

            directionsService.route(request, function (result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(result);
                } else {
                    console.error('Error fetching directions:', status);
                }
            });

       

                var waypointsmap = [];

                for (var i = 0; i < filteredWaypoints.length-1; i++) {
                    waypointsmap.push(encodeURIComponent(waypoints[i].location));
                }

                console.log(filteredWaypoints.length);
                var destination = waypoints[filteredWaypoints.length - 1].location;

                if (!destination) {
                    for (var i = waypoints.length - 1; i >= 0; i--) {
                        if (waypoints[i].location) {
                            destination = waypoints[i].location;
                            break;
                        }
                    }
                }

                var url = 'https://www.google.com/maps/dir/?api=1&origin='+ Xloc + ',' + Yloc + '&destination=' + encodeURIComponent(destination);

                if (waypointsmap.length >= 0) {
                    url += '&waypoints=' + waypointsmap.join('|');
                }

                document.getElementById("navigateButton2").addEventListener("click", function() {
                    // Call navigatePath function with coordinates array
                    window.open(url, '_blank');
                });

        }

        //day 03 Route Plan
        function initMap3() {
            const map = new google.maps.Map(document.getElementById('map3'), {
                center: { lat: 7.2906, lng: 80.6337 },
                zoom: 10
            });

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer({ 
                map: map,
                panel: document.getElementById('directionsPanel3')
             });

            const waypoints = [
                { location: new google.maps.LatLng(<?php echo $U ?>, <?php echo $U1 ?>) },
                { location: new google.maps.LatLng(<?php echo $V ?>, <?php echo $V1 ?>) },
                { location: new google.maps.LatLng(<?php echo $W ?>, <?php echo $W1 ?>) },
                { location: new google.maps.LatLng(<?php echo $X ?>, <?php echo $X1 ?>) },
                { location: new google.maps.LatLng(<?php echo $Y ?>, <?php echo $Y1 ?>) },
                { location: new google.maps.LatLng(<?php echo $Z ?>, <?php echo $Z1 ?>) },
                { location: new google.maps.LatLng(<?php echo $a ?>, <?php echo $a1 ?>) },
                { location: new google.maps.LatLng(<?php echo $b ?>, <?php echo $b1 ?>) },
                { location: new google.maps.LatLng(<?php echo $c ?>, <?php echo $c1 ?>) },
                { location: new google.maps.LatLng(<?php echo $d ?>, <?php echo $d1 ?>) }
            ];

            const filteredWaypoints = waypoints.filter(waypoint => {
                const latitude = waypoint.location.lat();
                const longitude = waypoint.location.lng();
                return !(isNaN(latitude) || isNaN(longitude));
            });

            if (filteredWaypoints.length === 0) {
                // If all waypoints are undefined, hide the map container
                document.getElementById('gmap3').style.display = 'none';
                return; // Exit the function early
            }
            

            const request = {
                origin: waypoints[0].location,
                destination: waypoints[filteredWaypoints.length - 1].location,
                waypoints: filteredWaypoints.slice(1, -1),
                travelMode: google.maps.TravelMode.DRIVING
            };

            directionsService.route(request, function (result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(result);
                } else {
                    console.error('Error fetching directions:', status);
                }
            });

          

                var waypointsmap = [];

                for (var i = 0; i < filteredWaypoints.length-1; i++) {
                    waypointsmap.push(encodeURIComponent(waypoints[i].location));
                }

                console.log(filteredWaypoints.length);
                var destination = waypoints[filteredWaypoints.length - 1].location;

                if (!destination) {
                    for (var i = waypoints.length - 1; i >= 0; i--) {
                        if (waypoints[i].location) {
                            destination = waypoints[i].location;
                            break;
                        }
                    }
                }

                var url = 'https://www.google.com/maps/dir/?api=1&origin='+ Xloc + ',' + Yloc + '&destination=' + encodeURIComponent(destination);

                if (waypointsmap.length >= 0) {
                    url += '&waypoints=' + waypointsmap.join('|');
                }

                document.getElementById("navigateButton3").addEventListener("click", function() {
                    // Call navigatePath function with coordinates array
                    window.open(url, '_blank');
                });

        }

        //Day 04 Route Plan
        function initMap4() {
            const map = new google.maps.Map(document.getElementById('map4'), {
                center: { lat: 7.2906, lng: 80.6337 },
                zoom: 10
            });

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer({ 
                map: map,
                panel: document.getElementById('directionsPanel4')
             });

            const waypoints = [
                { location: new google.maps.LatLng(<?php echo $z ?>, <?php echo $z1 ?>) },
                { location: new google.maps.LatLng(<?php echo $f ?>, <?php echo $f1 ?>) },
                { location: new google.maps.LatLng(<?php echo $g ?>, <?php echo $g1 ?>) },
                { location: new google.maps.LatLng(<?php echo $h ?>, <?php echo $h1 ?>) },
                { location: new google.maps.LatLng(<?php echo $j ?>, <?php echo $j1 ?>) },
                { location: new google.maps.LatLng(<?php echo $k ?>, <?php echo $k1 ?>) },
                { location: new google.maps.LatLng(<?php echo $l ?>, <?php echo $l1 ?>) },
                { location: new google.maps.LatLng(<?php echo $m ?>, <?php echo $m1 ?>) },
                { location: new google.maps.LatLng(<?php echo $n ?>, <?php echo $n1 ?>) },
                { location: new google.maps.LatLng(<?php echo $o ?>, <?php echo $o1 ?>) }
            ];

            const filteredWaypoints = waypoints.filter(waypoint => {
                const latitude = waypoint.location.lat();
                const longitude = waypoint.location.lng();
                return !(isNaN(latitude) || isNaN(longitude));
            });

            if (filteredWaypoints.length === 0) {
                // If all waypoints are undefined, hide the map container
                document.getElementById('gmap4').style.display = 'none';
                return; // Exit the function early
            }


            console.log(filteredWaypoints.length);
            

            const request = {
                origin: waypoints[0].location,
                destination: waypoints[filteredWaypoints.length - 1].location,
                waypoints: filteredWaypoints.slice(1, -1),
                travelMode: google.maps.TravelMode.DRIVING
            };

            directionsService.route(request, function (result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(result);
                } else {
                    console.error('Error fetching directions:', status);
                }
            });


                var waypointsmap = [];

                for (var i = 0; i < filteredWaypoints.length-1; i++) {
                    waypointsmap.push(encodeURIComponent(waypoints[i].location));
                }

                console.log(filteredWaypoints.length);
                var destination = waypoints[filteredWaypoints.length - 1].location;

                if (!destination) {
                    for (var i = waypoints.length - 1; i >= 0; i--) {
                        if (waypoints[i].location) {
                            destination = waypoints[i].location;
                            break;
                        }
                    }
                }

                var url = 'https://www.google.com/maps/dir/?api=1&origin='+ Xloc + ',' + Yloc + '&destination=' + encodeURIComponent(destination);

                if (waypointsmap.length >= 0) {
                    url += '&waypoints=' + waypointsmap.join('|');
                }

                document.getElementById("navigateButton4").addEventListener("click", function() {
                    // Call navigatePath function with coordinates array
                    window.open(url, '_blank');
                });

        }

        //day 05 Route Plan
        function initMap5() {
            const map = new google.maps.Map(document.getElementById('map5'), {
                center: { lat: 7.2906, lng: 80.6337 },
                zoom: 10
            });

            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer({ 
                map: map,
                panel: document.getElementById('directionsPanel5')
             });

            const waypoints = [
                { location: new google.maps.LatLng(<?php echo $p ?>, <?php echo $p1 ?>) },
                { location: new google.maps.LatLng(<?php echo $q ?>, <?php echo $q1 ?>) },
                { location: new google.maps.LatLng(<?php echo $r ?>, <?php echo $r1 ?>) },
                { location: new google.maps.LatLng(<?php echo $s ?>, <?php echo $s1 ?>) },
                { location: new google.maps.LatLng(<?php echo $t ?>, <?php echo $t1 ?>) },
                { location: new google.maps.LatLng(<?php echo $u ?>, <?php echo $u1 ?>) },
                { location: new google.maps.LatLng(<?php echo $v ?>, <?php echo $v1 ?>) },
                { location: new google.maps.LatLng(<?php echo $w ?>, <?php echo $w1 ?>) },
                { location: new google.maps.LatLng(<?php echo $x ?>, <?php echo $x1 ?>) },
                { location: new google.maps.LatLng(<?php echo $y ?>, <?php echo $y1 ?>) }
            ];

            const filteredWaypoints = waypoints.filter(waypoint => {
                const latitude = waypoint.location.lat();
                const longitude = waypoint.location.lng();
                return !(isNaN(latitude) || isNaN(longitude));
            });

            if (filteredWaypoints.length === 0) {
                // If all waypoints are undefined, hide the map container
                document.getElementById('gmap5').style.display = 'none';
                return; // Exit the function early
            }
            

            const request = {
                origin: waypoints[0].location,
                destination: waypoints[filteredWaypoints.length - 1].location,
                waypoints: filteredWaypoints.slice(1, -1),
                travelMode: google.maps.TravelMode.DRIVING
            };

            directionsService.route(request, function (result, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(result);
                } else {
                    console.error('Error fetching directions:', status);
                }
            });

         

                var waypointsmap = [];

                for (var i = 0; i < filteredWaypoints.length-1; i++) {
                    waypointsmap.push(encodeURIComponent(waypoints[i].location));
                }

                console.log(filteredWaypoints.length);
                var destination = waypoints[filteredWaypoints.length - 1].location;

                if (!destination) {
                    for (var i = waypoints.length - 1; i >= 0; i--) {
                        if (waypoints[i].location) {
                            destination = waypoints[i].location;
                            break;
                        }
                    }
                }

                var url = 'https://www.google.com/maps/dir/?api=1&origin='+ Xloc + ',' + Yloc + '&destination=' + encodeURIComponent(destination);

                if (waypointsmap.length >= 0) {
                    url += '&waypoints=' + waypointsmap.join('|');
                }

                document.getElementById("navigateButton5").addEventListener("click", function() {
                    // Call navigatePath function with coordinates array
                    window.open(url, '_blank');
                });

        }
    </script>

    <div class="container">
    <div class="col col-md-offset-4 reg-form border rounded-2 border border-2 loginborder">
                      <form action="{{route('save.plan')}}" method="post">
                          @if(Session::has('fail'))
                          <div id="error-card" class="alert alert-danger">{{Session::get('fail')}}</div>
                          @endif
                          @csrf
                          
                            <h4>If you want to save your tour, Please enter your tour name..</h4>
                            
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" placeholder="Tour Name" name="t_name" value="">
                                <span class="text-danger">@error('t-name') {{$message}} @enderror</span>
                            </div><br>
                            <input type="hidden" name="A2" value="{{ $A2 }}">
                            <input type="hidden" name="B2" value="{{ $B2 }}">
                            <input type="hidden" name="C2" value="{{ $C2 }}">
                            <input type="hidden" name="D2" value="{{ $D2 }}">
                            <input type="hidden" name="E2" value="{{ $E2 }}">
                            <input type="hidden" name="F2" value="{{ $F2 }}">
                            <input type="hidden" name="G2" value="{{ $G2 }}">
                            <input type="hidden" name="H2" value="{{ $H2 }}">
                            <input type="hidden" name="I2" value="{{ $I2 }}">
                            <input type="hidden" name="J2" value="{{ $J2 }}">
                            <input type="hidden" name="K2" value="{{ $K2 }}">
                            <input type="hidden" name="L2" value="{{ $L2 }}">
                            <input type="hidden" name="M2" value="{{ $M2 }}">
                            <input type="hidden" name="N2" value="{{ $N2 }}">
                            <input type="hidden" name="O2" value="{{ $O2 }}">
                            <input type="hidden" name="P2" value="{{ $P2 }}">
                            <input type="hidden" name="Q2" value="{{ $Q2 }}">
                            <input type="hidden" name="R2" value="{{ $R2 }}">
                            <input type="hidden" name="S2" value="{{ $S2 }}">
                            <input type="hidden" name="T2" value="{{ $T2 }}">
                            <input type="hidden" name="U2" value="{{ $U2 }}">
                            <input type="hidden" name="V2" value="{{ $V2 }}">
                            <input type="hidden" name="W2" value="{{ $W2 }}">
                            <input type="hidden" name="X2" value="{{ $X2 }}">
                            <input type="hidden" name="Y2" value="{{ $Y2 }}">
                            <input type="hidden" name="Z2" value="{{ $Z2 }}">
                            <input type="hidden" name="a2" value="{{ $a2 }}">
                            <input type="hidden" name="b2" value="{{ $b2 }}">
                            <input type="hidden" name="c2" value="{{ $c2 }}">
                            <input type="hidden" name="d2" value="{{ $d2 }}">
                            <input type="hidden" name="z2" value="{{ $z2 }}">
                            <input type="hidden" name="f2" value="{{ $f2 }}">
                            <input type="hidden" name="g2" value="{{ $g2 }}">
                            <input type="hidden" name="h2" value="{{ $h2 }}">
                            <input type="hidden" name="j2" value="{{ $j2 }}">
                            <input type="hidden" name="k2" value="{{ $k2 }}">
                            <input type="hidden" name="l2" value="{{ $l2 }}">
                            <input type="hidden" name="m2" value="{{ $m2 }}">
                            <input type="hidden" name="n2" value="{{ $n2 }}">
                            <input type="hidden" name="o2" value="{{ $o2 }}">
                            <input type="hidden" name="p2" value="{{ $p2 }}">
                            <input type="hidden" name="q2" value="{{ $q2 }}">
                            <input type="hidden" name="r2" value="{{ $r2 }}">
                            <input type="hidden" name="s2" value="{{ $s2 }}">
                            <input type="hidden" name="t2" value="{{ $t2 }}">
                            <input type="hidden" name="u2" value="{{ $u2 }}">
                            <input type="hidden" name="v2" value="{{ $v2 }}">
                            <input type="hidden" name="w2" value="{{ $w2 }}">
                            <input type="hidden" name="x2" value="{{ $x2 }}">
                            <input type="hidden" name="y2" value="{{ $y2 }}">

                          
    
                          <div class="form-group">
                              <button class="btn btn-block btn-primary" type="submit">Save Your Tour</button>
                          </div>
                          
                      </form>
                  </div>
    </div><br><br>
</body>
</html>
