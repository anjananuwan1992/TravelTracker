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
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
    </script>
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
<body class="plandashtravelbody">
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
        @foreach($plans as $plan)
        <a href="/travellist/{{$plan->id}}" class="btn btn-block btn-primary" type="submit">{{$plan->t_name}}</a>
        @endforeach
    </div>

</body>
</html>