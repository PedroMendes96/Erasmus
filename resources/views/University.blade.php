<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Erasmus</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Abhaya Libre' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function showCities(value) {
            $.get( "http://localhost:8000/cities?country="+value, function( data ) {
                $( "#cities" ).html( data );
            });
        }

        function showUniversities(value) {
            alert("O diogo e puta");
            $.get( "http://localhost:8000/universities?city="+value, function( data ) {
                $( "#universities" ).html( data );
            });
        }
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="entire-screen navbar">
    <div class="third-screen center">
        <a href="/"><img src="{{$university->img}}" width="50%"></a>
    </div>
    <div class="two-third-screen right">
        <ul>
            <li>
                Home
            </li>
            <li>
                More Info
            </li>
            <li>
                Log In
            </li>
        </ul>
    </div>
</div>

<div class="entire-screen center" style="background-image: url(/img/information.jpg);background-repeat: no-repeat;background-size:cover;margin-top: 83px;padding-right: 0px !important;padding-bottom: 0px !important;">
    <div class="fifteen-screen">

    </div>
    <div class="seventy-screen" style="padding: 0px 0px !important;border: 1px solid black;margin: 50px 0px;background-color: #eeeeee">
        <div class="entire-screen">
            <h1>{{$university->name}}</h1>
        </div>
        <div class="entire-screen">
            <div class="quart-screen"></div>
            <div class="half-screen"><img width="100%" src="/img/university/{{$university->img}}"></div>
        </div>
        <div class="entire-screen">
            <h1>Description</h1>
        </div>
        <div class="entire-screen" style="word-wrap: break-word;padding: 20px 20px;">
            <p>{{$university->description}}</p>
            <p><b>Contact:</b></p>
            <p>{{$university->email}}</p>
        </div>
    </div>
    <div class="fifteen-screen">

    </div>
</div>

<div class="entire-screen blue-theme">
    <div class="third-screen">
        <h5></h5>
    </div>
    <div class="third-screen center">
        <ul>
            <li>
                <a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            </li>
        </ul>
    </div>
    <div class="third-screen center">
        <h4>Copyright ERASMUS+</h4>
    </div>
</div>
</body>
</html>