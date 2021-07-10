<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <style>



header {
    position: relative;
    width: 100%;
    min-height: auto;
    text-align: center;
    color: #fff;
    background-image: url("https://o.aolcdn.com/images/dims?quality=85&image_uri=https%3A%2F%2Fo.aolcdn.com%2Fimages%2Fdims%3Fcrop%3D2800%252C1680%252C0%252C0%26quality%3D85%26format%3Djpg%26resize%3D1600%252C960%26image_uri%3Dhttp%253A%252F%252Fo.aolcdn.com%252Fhss%252Fstorage%252Fmidas%252Fec099838a88c189b8e19a4bb6e884708%252F205944339%252Ftheater-hall-with-red-seat-and-wide-blank-white-screen-picture-id665294144%26client%3Da1acac3e1b3290917d92%26signature%3Dde8e1e9cc228854ed73f16bfaca4863d2cfbc0e6&client=amp-blogside-v2&signature=fc8e6decbc764bdc6e061a8c9653fefaa6e73ce4");
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

header .header-content {
    position: relative;
    width: 100%;
    padding: 100px 15px 70px;
    text-align: center;
}

header .header-content .header-content-inner h1 {
    margin-top: 0;
    margin-bottom: 20px;
    font-size: 50px;
    font-weight: 300;
}

header .header-content .header-content-inner p {
    margin-bottom: 50px;
    font-size: 25px;
    font-weight: 300;
    color:#fff
}



.border1{
    background-image: url("https://img.freepik.com/free-photo/abstract-blue-color-digital-particles-wave-with-dust-light-background_24070-619.jpg?size=626&ext=jpg");
    position:relative;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    text-align:center;
    color:#fff;
}

.border1 h1{
    font-size: 50px;
}

.border1 p {
    font-size: 25px;
}


.border1 .border1-img{
    border-radius: 50px;
    background-color:rgb(51,77,92);
    width: 150px;
}


.border2{
    background-image: url("http://www.specialtycinema.com/wp-content/uploads/2011/12/3dcinema.jpg");
    position:relative;
    background-position: center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    text-align:center;
    color:#fff;
    
}

.border2 h1{
    font-size: 50px;
}

.border2 p {
    font-size: 25px;
}


.border2 .border2-img{
    width: 150px;
}








            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
                position: absolute;
                left: 20px;
                top: 18px;
                font-size: 50px;
            }

            .top-right {
                position: absolute;
                right: 20px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .upcomingmovies{
                float:left;
                padding-left:300px;
                grid-template-rows: 1fr;
            }
            .currentmovies{
                float:right;
                margin-right: 250px;
                grid-template-rows: 1fr;
            }
        </style>
    </head>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Engage in our movies</h1>
                <p>Experience the new generation of cinema using high end screens and sounds.</p>
            </div>
        </div>


        <div class="top-left">
            Cinema
        </div>
        <div class="top-right">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/profile') }}">Profile</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



    </header>
    
    

    <body>
    <div class="border1">
    <br>
    <h1> Speakers </h1>
    <img class="border1-img" src="https://www.freeiconspng.com/uploads/speaker-icon-7.png">
    <p> We use the latest dolby axon speakers to enchance the experience of everyone's movie to grasp the feel as though you were in the movie itself </p>

    <br>
    <h1> 3D Effects </h1>
    <img class="border1-img" src="https://www.pngrepo.com/download/163827/3d-glasses.png">
    <p> Experience 3D like no other and jump into the world of the cenima </p>
    </div>



        
            <div class="content">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                        @else
                            <h3>Please login to view movies and buy tickets</h3>
                        @endauth
                    </div>
                    </div>
                    </div>
                @endif
                <div class="upcomingmovies">
                <div class="card-body">
                <h1>Upcoming Movies</h1>
                <table class= "table">
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
                
                @foreach($name as $movie)
                @if (!$movie->current)
                <tr>
                <td><img class= "img-rounded corners" width="120px" src="{{asset('storage/picture/'.$movie->picture)}}"> </td>
                    <td> {{$movie->name}} </td>
                    <td>
                    {!! Form::open(array('route'=>['movie.destroy', $movie->id], 'method'=> 'DELETE')) !!}
                    {{link_to_route('movie.show', 'View', [$movie->id], ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                    </td>
               </tr>
               @endif
                @endforeach
                
                </table>
                </div>
                </div>
                <div class="currentmovies">
                <div class="card-body">
                <h1>Current Movies</h1>
                <table class= "table">
                <tr>
                <th>Image</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                @foreach($name as $movie)
                @if ($movie->current)
                <tr>
                <td><img class= "img-rounded corners" width="120px" src="{{asset('storage/picture/'.$movie->picture)}}"> </td>
                    <td> {{$movie->name}} </td>
                    <td>
                    {!! Form::open(array('route'=>['movie.destroy', $movie->id], 'method'=> 'DELETE')) !!}
                    {{link_to_route('movie.show', 'View', [$movie->id], ['class'=>'btn btn-primary'])}}
                    {!! Form::close() !!}
                    </td>
               </tr>
                @endif
                @endforeach
                </table>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>
