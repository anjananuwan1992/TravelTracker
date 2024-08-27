<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveler Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <script>
              // Hide the error card after 3 seconds
              setTimeout(function() {
                  var errorCard = document.getElementById('error-card');
                  if (errorCard) {
                      errorCard.style.display = 'none';
                  }
              }, 3000);

             

              
          </script>
          
</head>
<body class="plandashtravelbody" onload="initMap(); initMap2(); initMap3(); initMap4(); initMap5();">
            <!--navigation bar-->  
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
    </div><br><br><br><br>

        <div class="container">
                <h1>{{$plan->t_name}}</h1>
                <hr>
                <input type="hidden" id="mapid" value="{{$plan->id}}"
                <br>
                <div class="row" style= "height:78vh;">
                    <div class="row">
                    
                        @foreach($businesses as $business)
                            @if($business->id == $plan->A2)
                            
                            <h3>Day 01</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6" id="map" style="margin-top:10px; height:70vh;"></div>
                                <div class="col-md overflow-auto" id="directionsPanel" style="height:70vh;"></div>
                            </div> <br>
                            <div class="row d-flex justify-content-center navbtnmap">
                                    <button class="btn btn-success" id="navigateButton" style="margin-top:20px; width:300px;">Navigate Through Google Map</button>
                            </div>
        
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location A</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <br>
                                    <input type="hidden" id="latitude1" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude1" value="{{$business->longitude}}">
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->B2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location B</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude2" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude2" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->C2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location C</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude3" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude3" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->D2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location D</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude4" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude4" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div> <br>
                    <div class="row planinforow">
                        @foreach($businesses as $business)
                            @if($business->id == $plan->E2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location E</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude5" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude5" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->F2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location F</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude6" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude6" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->G2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location G</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude7" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude7" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->H2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location H</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude8" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude8" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div>
                    <div class="row planinforow">
                        @foreach($businesses as $business)
                            @if($business->id == $plan->I2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location I</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude9" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude9" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->J2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location J</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude10" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude10" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                
                                @endif
                            @endforeach

                            
                    </div>
                    
                    <div class="row">
                    
                        @foreach($businesses as $business)
                            @if($business->id == $plan->K2)
                            <h3>Day 02</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6" id="map2" style="margin-top:10px; height:70vh;"></div>
                                <div class="col-md overflow-auto" id="directionsPanel2" style="height:70vh;"></div>
                            </div>
                            <div class="row d-flex justify-content-center navbtnmap">
                                    <button class="btn btn-success" id="navigateButton2" style="margin-top:20px; width:300px;">Navigate Through Google Map</button>
                            </div>
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location A</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude11" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude11" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->L2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location B</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude12" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude12" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->M2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location C</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude13" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude13" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->N2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location D</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude14" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude14" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div> <br>
                    <div class="row planinforow">
                        @foreach($businesses as $business)
                            @if($business->id == $plan->O2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location E</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude15" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude15" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->P2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location F</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude16" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude16" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->Q2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location G</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude17" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude17" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->R2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location H</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude18" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude18" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div>
                    <div class="row planinforow">
                        @foreach($businesses as $business)
                            @if($business->id == $plan->S2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location I</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude19" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude19" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->T2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location J</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude20" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude20" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                               
                                @endif
                            @endforeach
                    </div>
                   
                    <div class="row">
                    
                        @foreach($businesses as $business)
                            @if($business->id == $plan->U2)
                            <h3>Day 03</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6" id="map3" style="margin-top:10px; height:70vh;"></div>
                                <div class="col-md overflow-auto" id="directionsPanel3" style="height:70vh;"></div>
                            </div>
                            <div class="row d-flex justify-content-center navbtnmap">
                                    <button class="btn btn-success" id="navigateButton3" style="margin-top:20px; width:300px;">Navigate Through Google Map</button>
                            </div>
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location A</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude21" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude21" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->V2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location B</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude22" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude22" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->W2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location C</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude23" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude23" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->X2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location D</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude24" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude24" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div> <br>
                    <div class="row planinforow">
                        @foreach($businesses as $business)
                            @if($business->id == $plan->Y2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location E</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude25" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude25" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->Z2)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location F</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude26" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude26" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->a21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location G</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude27" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude27" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->b21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location H</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude28" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude28" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div>
                    <div class="row planinforow">
                        @foreach($businesses as $business)
                            @if($business->id == $plan->c21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location I</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude29" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude29" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->d21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location J</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude30" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude30" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div>
                    
                    <div class="row">
                    
                        @foreach($businesses as $business)
                            @if($business->id == $plan->z21)
                            <h3>Day 04</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6" id="map4" style="margin-top:10px; height:70vh;"></div>
                                <div class="col-md overflow-auto" id="directionsPanel4" style="height:70vh;"></div>
                            </div>
                            <div class="row d-flex justify-content-center navbtnmap">
                                    <button class="btn btn-success" id="navigateButton4" style="margin-top:20px; width:300px;">Navigate Through Google Map</button>
                            </div>
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location A</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude31" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude31" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->f21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location B</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude32" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude32" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->g21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location C</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude33" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude33" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->h21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location D</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude34" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude34" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div> <br>
                    <div class="row planinforow">
                        @foreach($businesses as $business)
                            @if($business->id == $plan->j21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location E</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude35" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude35" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->k21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location F</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude36" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude36" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->l21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location G</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude37" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude37" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->m21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location H</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude38" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude38" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div>
                    <div class="row planinforow">
                        @foreach($businesses as $business)
                            @if($business->id == $plan->n21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location I</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude39" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude39" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->o21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location J</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude40" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude40" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div>
                    
                    <div class="row">
                    
                        @foreach($businesses as $business)
                            @if($business->id == $plan->p21)
                            <h3>Day 05</h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-6" id="map5" style="margin-top:10px; height:70vh;"></div>
                                <div class="col-md overflow-auto" id="directionsPanel5" style="height:70vh;"></div>
                            </div>
                            <div class="row d-flex justify-content-center navbtnmap">
                                    <button class="btn btn-success" id="navigateButton5" style="margin-top:20px; width:300px;">Navigate Through Google Map</button>
                            </div>
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location A</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude41" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude41" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->q21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location B</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude42" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude42" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->r21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location C</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude43" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude43" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->s21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location D</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude44" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude44" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div> <br>
                    <div class="row planinforow">
                        @foreach($businesses as $business)
                            @if($business->id == $plan->t21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location E</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude45" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude45" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->u21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location F</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude46" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude46" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->v21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location G</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude47" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude47" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->w21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location H</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude48" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude48" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div>
                    <div class="row planinforow">
                        @foreach($businesses as $business)
                            @if($business->id == $plan->x21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location I</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude49" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude49" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                            @foreach($businesses as $business)
                                @if($business->id == $plan->y21)
                        <div class="col-md-3 overflow-auto" style= "height:60vh;">
                                    <h5>Location J</h5><br>
                                    <img src="{{asset($business->cover_img)}}" class="img-fluid" id="cvrimg" alt="">
                                    <br>
                                    <h4 id="bis-name" style="margin-top:10px;">{{$business->title}}</h4>
                                    <p style="white-space: pre-wrap;" id="bis-intro">{{$business->introduction}}</p>
                                    <input type="hidden" id="latitude50" value="{{$business->latitude}}">
                                    <input type="hidden" id="longitude50" value="{{$business->longitude}}">
                                    <br>
                                    @foreach($attractions as $attraction)
                                        @if($attraction->business_id == $business->id)
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($attraction->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$attraction->information}}</p>
                                        @endif
                                    @endforeach
                    
                                    @foreach($packages as $package)
                                        @if($package->email == $business->email)`
                                            <hr>
                                            <h4>{{$package->title}}</h4>
                                            <br>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_one)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_two)}}" class="img-fluid">
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_three)}}" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6">
                                            <img src="{{asset($package->img_four)}}" class="img-fluid">
                                            </div>
                                            </div><br>
                                            <p style="white-space: pre-wrap;">{{$package->introduction}}</p>
                                            <h6>{{$package->price}} {{$package->currency}}</h6>
                                        @endif
                                    @endforeach
                                </div>
                                @endif
                            @endforeach
                    </div>
                </div>
                <br><br>
                
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
                </script>

                <script>
             // Initialize arrays for latitude and longitude
                var latitude = [];
                var longitude = [];

                // Iterate over latitude and longitude fields
                for (var i = 1; i <= 50; i++) {
                    var latElement = document.getElementById("latitude" + i);
                    var longElement = document.getElementById("longitude" + i);
                    
                    // Check if elements exist before accessing their values
                    if (latElement && longElement) {
                        latitude[i] = latElement.value;
                        longitude[i] = longElement.value;
                    } else {
                        console.log("Element with ID latitude" + i + " or longitude" + i + " not found.");
                    }
                }

                // Logging the values
                for (var j = 1; j <= 50; j++) {
                    console.log("Latitude" + j + ":", latitude[j]);
                    console.log("Longitude" + j + ":", longitude[j]);
                }

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


            function initMap() {
                const mapElement = document.getElementById("map");
            if (!mapElement) {
                console.error("Map element not found.");
                return;
            }
            const map = new google.maps.Map(mapElement, {
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
                { location: new google.maps.LatLng(latitude[1], longitude[1]) },
                { location: new google.maps.LatLng(latitude[2], longitude[2]) },
                { location: new google.maps.LatLng(latitude[3], longitude[3]) },
                { location: new google.maps.LatLng(latitude[4], longitude[4]) },
                { location: new google.maps.LatLng(latitude[5], longitude[5]) },
                { location: new google.maps.LatLng(latitude[6], longitude[6]) },
                { location: new google.maps.LatLng(latitude[7], longitude[7]) },
                { location: new google.maps.LatLng(latitude[8], longitude[8]) },
                { location: new google.maps.LatLng(latitude[9], longitude[9]) },
                { location: new google.maps.LatLng(latitude[10], longitude[10]) }
            ];




            const filteredWaypoints = waypoints.filter(waypoint => {
                const latitude = waypoint.location.lat();
                const longitude = waypoint.location.lng();
                return !(isNaN(latitude) || isNaN(longitude));
            });

          
            
            
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

      

        

   


        function initMap2() {
            const map = new google.maps.Map(document.getElementById('map2'), {
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
                panel: document.getElementById('directionsPanel2')
             });

            

             

            const waypoints = [
                { location: new google.maps.LatLng(latitude[11], longitude[11]) },
                { location: new google.maps.LatLng(latitude[12], longitude[12]) },
                { location: new google.maps.LatLng(latitude[13], longitude[13]) },
                { location: new google.maps.LatLng(latitude[14], longitude[14]) },
                { location: new google.maps.LatLng(latitude[15], longitude[15]) },
                { location: new google.maps.LatLng(latitude[16], longitude[16]) },
                { location: new google.maps.LatLng(latitude[17], longitude[17]) },
                { location: new google.maps.LatLng(latitude[18], longitude[18]) },
                { location: new google.maps.LatLng(latitude[19], longitude[19]) },
                { location: new google.maps.LatLng(latitude[20], longitude[20]) }
            ];


            const filteredWaypoints = waypoints.filter(waypoint => {
                const latitude = waypoint.location.lat();
                const longitude = waypoint.location.lng();
                return !(isNaN(latitude) || isNaN(longitude));
            });

          
            
            
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

       

        function initMap3() {
            const map = new google.maps.Map(document.getElementById('map3'), {
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
                panel: document.getElementById('directionsPanel3')
             });

            

             

            const waypoints = [
                { location: new google.maps.LatLng(latitude[21], longitude[21]) },
                { location: new google.maps.LatLng(latitude[22], longitude[22]) },
                { location: new google.maps.LatLng(latitude[23], longitude[23]) },
                { location: new google.maps.LatLng(latitude[24], longitude[24]) },
                { location: new google.maps.LatLng(latitude[25], longitude[25]) },
                { location: new google.maps.LatLng(latitude[26], longitude[26]) },
                { location: new google.maps.LatLng(latitude[27], longitude[27]) },
                { location: new google.maps.LatLng(latitude[28], longitude[28]) },
                { location: new google.maps.LatLng(latitude[29], longitude[29]) },
                { location: new google.maps.LatLng(latitude[30], longitude[30]) }
            ];


            const filteredWaypoints = waypoints.filter(waypoint => {
                const latitude = waypoint.location.lat();
                const longitude = waypoint.location.lng();
                return !(isNaN(latitude) || isNaN(longitude));
            });

          
            
            
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

        


        function initMap4() {
            const map = new google.maps.Map(document.getElementById('map4'), {
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
                panel: document.getElementById('directionsPanel4')
             });

            

             

            const waypoints = [
                { location: new google.maps.LatLng(latitude[31], longitude[31]) },
                { location: new google.maps.LatLng(latitude[32], longitude[32]) },
                { location: new google.maps.LatLng(latitude[33], longitude[33]) },
                { location: new google.maps.LatLng(latitude[34], longitude[34]) },
                { location: new google.maps.LatLng(latitude[35], longitude[35]) },
                { location: new google.maps.LatLng(latitude[36], longitude[36]) },
                { location: new google.maps.LatLng(latitude[37], longitude[37]) },
                { location: new google.maps.LatLng(latitude[38], longitude[38]) },
                { location: new google.maps.LatLng(latitude[39], longitude[39]) },
                { location: new google.maps.LatLng(latitude[40], longitude[40]) }
            ];


            const filteredWaypoints = waypoints.filter(waypoint => {
                const latitude = waypoint.location.lat();
                const longitude = waypoint.location.lng();
                return !(isNaN(latitude) || isNaN(longitude));
            });

          
            
            
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

       


        function initMap5() {
            const map = new google.maps.Map(document.getElementById('map5'), {
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
                panel: document.getElementById('directionsPanel5')
             });

            

             

            const waypoints = [
                { location: new google.maps.LatLng(latitude[41], longitude[41]) },
                { location: new google.maps.LatLng(latitude[42], longitude[42]) },
                { location: new google.maps.LatLng(latitude[43], longitude[43]) },
                { location: new google.maps.LatLng(latitude[44], longitude[44]) },
                { location: new google.maps.LatLng(latitude[45], longitude[45]) },
                { location: new google.maps.LatLng(latitude[46], longitude[46]) },
                { location: new google.maps.LatLng(latitude[47], longitude[47]) },
                { location: new google.maps.LatLng(latitude[48], longitude[48]) },
                { location: new google.maps.LatLng(latitude[49], longitude[49]) },
                { location: new google.maps.LatLng(latitude[50], longitude[50]) }
            ];


            const filteredWaypoints = waypoints.filter(waypoint => {
                const latitude = waypoint.location.lat();
                const longitude = waypoint.location.lng();
                return !(isNaN(latitude) || isNaN(longitude));
            });

          
            
            
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

        </div>

        
</body>
</html>