<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SBRP') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway|Poppins" rel="stylesheet" type="text/css">
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
    {{-- <script src="{{asset('js/summernote.js')}}"> </script> --}}
    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
</head>
<body class="background" id="background">
    <div id="app">
        {{-- <header class="custom-header align-items-center "> --}}
        <header class="custom-header d-flex justify-content-between px-4 align-items-center ">
        
            {{-- <div class="container-fluid d-flex align-items-center  justify-content-between"> --}}
                {{-- <div class="d-flex justify-content-between"> --}}
                    <div class="d-flex p-2">
                        {{-- <a href="{{ url('/') }}" class="m-1">
                            <button class="general-button">SBRP Website</button>
                        </a> --}}
                        <a href="/" class="m-1">
                            <button class="general-button">Home</button>
                        </a>
                        <a href="{{ route('contact') }}" class="m-1">
                            <button class="general-button">Contact</button>
                        </a>
                    </div>  
                    
                    <div id="div-logo" class="d-flex">
                        <img id="logo" class="img-fluid" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1535255119052x357929023215547200%2FSunbelt-Logo-cad.png?w=192&h=&auto=compress&fit=max" alt="" class="logo-center mx-auto">
                    </div>  
                    
                    <div class="d-flex">
                            @guest
                            {{-- <a id="btn-login" href="{{ route('login') }}" class="m-1"> --}}
                                <button class="general-button m-1" data-toggle="modal" data-target="#exampleModal">Login</button>
                            {{-- </a> --}}
                            <a href="{{ route('register') }}" class="m-1">
                                <button class="general-button">Sign Up</button>
                            </a>
                        @else
                            @if(Auth::user()->hasRole('SuperAdmin')) 
                                <a href="{{ route('panel') }}" class="m-1">
                                    <button class="general-button">Panel</button>
                                </a>
                            @endif
                             @if(Auth::user()->hasRole('Admin')) 
                                <a href="{{ route('panel') }}" class="m-1">
                                    <button class="general-button">Panel</button>
                                </a>
                            @endif
                            <a id="navbarDropdown" class="nav-link dropdown-toggle login-name" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Welcome {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
        
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
        
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                    
                    </div>  

                {{-- </div> --}}





                
            </div>
        
        </header>
        <div class="line"></div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
        
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            width:440,
            height: 600,
            toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    // ['height', ['height']]
  ]
          });

    // ['fontsize', ['8', '9', '10', '11', '12', '14', '18']],
        
    </script>
    {{-- Changed @if to @isset --}}
    @isset ($custom)
        <script>
            
            background = document.getElementById('background');
            background.style.backgroundImage = "url('{{ $custom->backgroundurl }}')";

            logo = document.getElementById('logo');
            logo.src = '{{ $custom->logourl }}';

            btnsNav =  document.querySelectorAll(".general-button");
            lineDiv =  document.querySelector(".line");
            nameDiv =  document.querySelector(".login-name");
            console.log(nameDiv);
            for (let i = 0; i < btnsNav.length; i++) {
                btnsNav[i].style.border = ' solid 1px {{ $custom->colorbtn }}';
                btnsNav[i].style.backgroundColor = '{{ $custom->bgcolorbtn }}';
            }
            lineDiv.style.backgroundColor = '{{ $custom->colorbtn }}';
            nameDiv.style.color = '{{ $custom->colorbtn }}';
        </script>
    @endisset

    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> --}}
</body>
</html>
