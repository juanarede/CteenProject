<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
 


    <title>{{ config('app.name', 'cteen') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- Custom CSS -->
    <style>
            body {
        background-color: rgb(0, 172, 216);
   
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
     
    .nav-link  {
    font-size: 1.2em; 
     }

        .modal-container {
            /* Estilo para la modal-container */
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            /* Estilo para la modal-content */
            position: relative;
            background-color: #fefefe;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            max-width: 80%;
            text-align: center;
        }

        .close-modal-btn {
            /* Estilo para el botón de cerrar la modal */
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        .close-modal-btn:hover {
            color: #aaa;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark sticky-top" style="background-color: rgb(244, 154, 40);">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/cteen_logo_sinfondo.png') }}" alt="cteen logo" width="30px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('store') }}" class="nav-link">Cteen store</a>
                        </li>
                        <li class="nav-item">
                            <a href="activityHistory.html" class="nav-link">Actividades</a>
                        </li>
                        <li class="nav-item">
                            <a href="contents.html" class="nav-link">Contenidos</a>
                        </li>
                        <li class="nav-item">
                            <a href="doingood.html" class="nav-link">Doing Good!</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link cart-dropdown-toggle" data-toggle="dropdown">
                                <i class="fas fa-shopping-cart"></i>
                                <span class="cantidad-carrito">0</span>
                            </a>
                            <div class="dropdown-menu cart-dropdown" aria-labelledby="navbarDropdown">
                                <!-- Contenido del dropdown del carrito -->
                                <div class="cart-items">
                                    <!-- Los productos se agregarán dinámicamente mediante JavaScript -->
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center" href="/carrito">
                                    Ir al carrito
                                </a>
                            </div>
                        </li>
                        <!-- Elemento del usuario -->
                        @auth
                            @if (Auth::user()->points)
                                <li class="nav-item">
                                    <span class="nav-link">Puntos: {{ Auth::user()->points->points }}</span>
                                </li>
                            @endif
                        @endauth
                        <li class="nav-item">
                            @guest
                                @if (Route::has('login'))
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                @endif
                            @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                        
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/login" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                        
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            @endguest
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        
        
    
        <main class="pt-4">
            @yield('content')
            @include('includes.footer')
        </main>
    </div>
    
   

    <div class="modal-container">
        <div class="modal-content">
            <span class="close-modal-btn" onclick="closeModal()">&times;</span>
            <h2 style="color: #000">Felicidades, <span id="username">{{ Auth::user()->name }}</span></h2>
            <p>Ganaste <span id="userpoints">
                @auth
                    @if (Auth::user()->points)
                        {{ Auth::user()->points->points }}
                    @else
                        0
                    @endif
                @endauth
            </span> puntos</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/39f24fdfe8.js" crossorigin="anonymous"></script>
    <script>
        // Function to show the modal
        function showModal(username) {
            var modal = document.querySelector('.modal-container');
            modal.style.display = 'flex';
            document.getElementById('username').innerText = username;
        }

        // Function to close the modal
        function closeModal() {
            var modal = document.querySelector('.modal-container');
            modal.style.display = 'none';
        }

        // Functionality to close modal when clicking outside
        window.addEventListener('click', function (event) {
            var modal = document.querySelector('.modal-container');
            if (event.target === modal) {
                closeModal();
            }
        });

        // Check if user is logged in and show the modal with the username
        @auth
            showModal('{{ Auth::user()->name }}');
        @endauth
    </script>

<script>
   function actualizarContenidoCarrito(data) {
        const cartItemsContainer = document.querySelector('.cart-items');
        cartItemsContainer.innerHTML = ''; // Limpia el contenido anterior del dropdown

        if (data.carrito && Object.keys(data.carrito).length > 0) {
            for (const idProducto in data.carrito) {
                const cantidad = data.carrito[idProducto];
                const productoHTML = `<div>${cantidad} x Producto ${idProducto}</div>`;
                cartItemsContainer.insertAdjacentHTML('beforeend', productoHTML);
            }
        } else {
            cartItemsContainer.insertAdjacentHTML('beforeend', '<div>El carrito está vacío</div>');
        }

        // Actualiza el número de elementos en el carrito en el ícono del carrito
        const cantidadCarrito = document.querySelector('.cantidad-carrito');
        cantidadCarrito.innerText = data.totalElementosCarrito;
    }

</script>

</body>
</html>
