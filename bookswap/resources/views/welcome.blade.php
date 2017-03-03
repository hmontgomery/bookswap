<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Book Swap</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            input[type=text] {
              width: 800px;
              box-sizing: border-box;
              border: 2px solid #ccc;
              border-radius: 4px;
              font-size: 16px;
              background-color: white;
              background-image: url('searchicon.png');
              background-position: 10px 10px;
              background-repeat: no-repeat;
              padding: 12px 20px 12px 40px;
              -webkit-transition: width 0.4s ease-in-out;
              transition: width 0.4s ease-in-out;
              }


            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <script>

        var books;

        function submitQuery(request, callback)
        {
          console.log("submitQuery called");
              $.ajax({
          method: "GET",
          url: "/listexchangeJSON",   //getting JSON
          data: { q: "intitle:" + request.term }                //get title of book from written keyword
        })
          .done(function handleResponse(response) {

            console.log("handleResponse called");
            //create new array books
            books = response;

            var titles = new Array;

          for (var i = 0; i < response.items.length; i++) {
            titles.push(response.items[i].volumeInfo.title);  //push title info into books

            // in production code, item.text should have the HTML entities escaped.
          //  document.getElementById("content").innerHTML += "<br>" + item.volumeInfo.title;
          }
<<<<<<< HEAD
           callback(titles);

          });
          //after 2 characters written potential titles of books are displayed in textbox

            }

      $(function() {
         $( "#title" ).autocomplete({
             source: submitQuery,
             minLength: 2,
             select: function( event, ui ) {
               // books.items[ui.item.id].volumeInfo.title
               console.log( "Selected: " + ui.item.value);
             }
           });
         });
        </script>
=======
          </script>
          <script src="/js/app.js"></script>
>>>>>>> 9cd275719754958a5cffd189f2a7c3bed1440a33
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/selling') }}">Sell</a>
                        <a href="{{ url('/test') }}">Explore</a>
<<<<<<< HEAD
                        <a href="{{ url('/about') }}">About us</a>
                        <a href="{{ url('/home') }}">Home</a>
                        <a href="{{ url('/example') }}">Example</a>
                        <a href="{{ url('/listexchangeJSON') }}">JSON</a>
=======
                        <a href="{{ url('/about') }}">About Us</a>
                        <a href="{{ url('/example') }}">Example</a>   
                        
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                                                                
>>>>>>> 9cd275719754958a5cffd189f2a7c3bed1440a33

                    @else
                        <a href="{{ url('/test') }}">Explore</a>
                        <a href="{{ url('/about') }}">About Us</a>
                        <a href="{{ url('/home') }}">Example</a>
                        <a href="{{ url('/listexchangeJSON') }}">JSON</a>
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Book Swap
                </div>

                  <input type="text" name="search" placeholder="Search..">

            </div>
        </div>
    </body>
</html>
