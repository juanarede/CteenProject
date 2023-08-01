@extends('layouts.app_with_modal')

@section('content')
<style>


:root {
    --font1: 'Heebo', sans-serif;
    --font2: 'Fira Sans Extra Condensed', sans-serif;
    --font3: 'Roboto', sans-serif;

    --btnbg: rgb(244, 154, 40);;
    --btnfontcolor: rgb(255, 255, 255);
    --btnfontcolorhover: rgb(255, 255, 255);
    --btnbghover: rgb(244, 154, 40);;
    --btnactivefs: rgb(244, 154, 40);;


    --label-index: rgb(0, 172, 216);
    --danger-index: #5bc257;

    --link-color: #000;
    --link-color-hover: #fff;
    --bg-content-color: #ffcc00;

}
h2 {
      font-family: 'Kanit', sans-serif;
      color: white;
      text-align: center;
      margin: 30px 0 60px 0;
      font-size: 3em;
    }
    .container-fluid {
    max-width: 1400px;

}

.card {
    background: #fff;
    box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
    border: 0;
    border-radius: 1rem;
}
.card-body{
    --bs-card-title-spacer-y: -5.5rem
}

.card-img,
.card-img-top {
    border-top-left-radius: calc(1rem - 1px);
    border-top-right-radius: calc(1rem - 1px);
}


.card h5 {
    overflow: hidden;
    height: 55px;
    font-weight: 300;
    font-size: 1rem;
}

.card h5 a {
  color: black;
  text-decoration: none;
}

.card-img-top {
    width: 100%;
    min-height: 250px;
    max-height: 250px;
    object-fit: contain;
    padding: 30px;
}

.card h2 {
    font-size: 1rem;
}


.card:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
}

/* Centered text */
.label-top {
    position: absolute;
    background-color: var(--label-index);
    color: #fff;
    top: 8px;
    right: 8px;
    padding: 5px 10px 5px 10px;
    font-size: .7rem;
    font-weight: 600;
    border-radius: 3px;
    text-transform: uppercase;
}

.top-right {
    position: absolute;
    top: 24px;
    left: 24px;

    width: 90px;
    height: 90px;
    border-radius: 50%;
    font-size: 1rem;
    font-weight: 900;
    background: #8bc34a;
    line-height: 90px;
    text-align: center;
    color: white;
}

.top-right span {
    display: inline-block;
    vertical-align: middle;
    /* line-height: normal; */
    /* padding: 0 25px; */
}

.aff-link {
    /* text-decoration: overline; */
    font-weight: 500;
}

.over-bg {
    background: rgba(53, 53, 53, 0.85);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(0.0px);
    -webkit-backdrop-filter: blur(0.0px);
    border-radius: 10px;
}
.bold-btn {

    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    padding: 5px 50px 5px 50px;
}
.box .btn {
    font-size: 1.5rem;
}

@media (max-width: 1025px) {
    .btn {
        padding: 5px 40px 5px 40px;
    }
}
@media (max-width: 250px) {
    .btn {
        padding: 5px 30px 5px 30px;
    }
}

/* START BUTTON */
.btn-warning {
    background: var(--btnbg);
    color: var(--btnfontcolor);
    fill: #ffffff;
    border: none;
    text-decoration: none;
    outline: 0;

    border-radius: 100px;
}
.btn-warning:hover {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);

}
.btn-check:focus + .btn-warning, .btn-warning:focus {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);

}
.btn-warning:active:focus {
    box-shadow: 0 0 0 0.25rem var(--btnactivefs);
}
.btn-warning:active {
    background: var(--btnbghover);
    color: var(--btnfontcolorhover);
}



.bg-success {
    font-size: 1rem;
    background-color: var(--btnbg)!important;
    color: var(--btnfontcolor)!important;
}
.bg-danger {
    font-size: 1rem;
}


.price-hp {
    font-size: 1rem;
    font-weight: 600;
    color: darkgray;
}

.amz-hp {
    font-size: .7rem;
    font-weight: 600;
    color: darkgray;
}

.fa-question-circle:before {
    color: darkgray;
}



</style>

<div class="container-fluid bg-trasparent my-4 p-3" style="position: relative">
    <h2 class="fade-in" >Cteen Store</h2>
    <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">

        <div class="col hp">
            <div class="card h-100 shadow-sm">
               <img src="{{ asset('images/store/kippah1edited_1024x1024.webp') }}" class="card-img-top" alt="product.title" />
             <div class="label-top shadow-sm">
               <a class="text-white" href="#" target="_blank">Kippa</a>
             </div>
             <div class="card-body">
               <div class="clearfix mb-3">
                 <span class="float-start badge rounded-pill bg-success">300 Puntos</span>
               </div>
               <div class="d-grid gap-2 my-4">
                <a href="#" class="btn btn-warning bold-btn agregar-carrito" data-producto-id="1" data-producto-nombre="Kippa" data-producto-imagen="{{ asset('images/store/kippah1edited_1024x1024.webp') }}">Agregar al carrito</a>
               </div>
             </div>
           </div>
         </div>

      <div class="col hp">
        <div class="card h-100 shadow-sm">
           <img src="{{ asset('images/store/Mezuzah_1_large.webp') }}" class="card-img-top" alt="product.title" />
         <div class="label-top shadow-sm">
           <a class="text-white" href="#" target="_blank">Mezuzza</a>
         </div>
         <div class="card-body">
           <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">300 Puntos</span>
           </div>
           <div class="d-grid gap-2 my-4">
            <a href="#" class="btn btn-warning bold-btn agregar-carrito" data-producto-id="2" data-producto-nombre="Mezuzza" data-producto-imagen="{{ asset('images/store/Mezuzah_1_large.webp') }}">Agregar al carrito</a>
           </div>
         </div>
       </div>
     </div>

      <div class="col hp">
        <div class="card h-100 shadow-sm">
           <img src="{{ asset('images/store/runner_1_large.webp') }}" class="card-img-top" alt="product.title" />
         <div class="label-top shadow-sm">
           <a class="text-white" href="#" target="_blank">Socks</a>
         </div>
         <div class="card-body">
           <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">300 Puntos</span>
           </div>
           <div class="d-grid gap-2 my-4">
            <a href="#" class="btn btn-warning bold-btn agregar-carrito" data-producto-id="3" data-producto-nombre="Socks" data-producto-imagen="{{ asset('images/store/runner_1_large.webp') }}">Agregar al carrito</a>
           </div>
         </div>
       </div>
     </div>

      <div class="col hp">
        <div class="card h-100 shadow-sm">
           <img src="{{ asset('images/store/runner_2_large.webp') }}" class="card-img-top" alt="product.title" />
         <div class="label-top shadow-sm">
           <a class="text-white" href="#" target="_blank">Wool Hat</a>
         </div>
         <div class="card-body">
           <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">300 Puntos</span>
           </div>
           <div class="d-grid gap-2 my-4">
            <a href="#" class="btn btn-warning bold-btn agregar-carrito" data-producto-id="4" data-producto-nombre="Wool Hat" data-producto-imagen="{{ asset('images/store/runner_2_large.webp') }}">Agregar al carrito</a>
           </div>
         </div>
       </div>
     </div>


      <div class="col hp">
        <div class="card h-100 shadow-sm">
           <img src="{{ asset('images/store/runner_6.webp') }}" class="card-img-top" alt="product.title" />
         <div class="label-top shadow-sm">
           <a class="text-white" href="#" target="_blank">Travel Bag</a>
         </div>
         <div class="card-body">
           <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">300 Puntos</span>
           </div>
           <div class="d-grid gap-2 my-4">
            <a href="#" class="btn btn-warning bold-btn agregar-carrito" data-producto-id="5" data-producto-nombre="Travel Bag" data-producto-imagen="{{ asset('images/store/runner_6.webp') }}">Agregar al carrito</a>
           </div>
         </div>
       </div>
     </div>

      <div class="col hp">
        <div class="card h-100 shadow-sm">
           <img src="{{ asset('images/store/Untitleddesign_1_large.webp') }}" class="card-img-top" alt="product.title" />
         <div class="label-top shadow-sm">
           <a class="text-white" href="#" target="_blank">Air-pod Case</a>
         </div>
         <div class="card-body">
           <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">300 Puntos</span>
           </div>
           <div class="d-grid gap-2 my-4">
            <a href="#" class="btn btn-warning bold-btn agregar-carrito" data-producto-id="6" data-producto-nombre="Air-pod Case" data-producto-imagen="{{ asset('images/store/Untitleddesign_1_large.webp') }}">Agregar al carrito</a>
           </div>
         </div>
       </div>
     </div>

      <div class="col hp">
        <div class="card h-100 shadow-sm">
           <img src="{{ asset('images/store/Untitleddesign_44_large.webp') }}" class="card-img-top" alt="product.title" />
         <div class="label-top shadow-sm">
           <a class="text-white" href="#" target="_blank">Shirt</a>
         </div>
         <div class="card-body">
           <div class="clearfix mb-3">
            <span class="float-start badge rounded-pill bg-success">300 Puntos</span>
           </div>
           <div class="d-grid gap-2 my-4">
            <a href="#" class="btn btn-warning bold-btn agregar-carrito" data-producto-id="7" data-producto-nombre="Shirt" data-producto-imagen="{{ asset('images/store/Untitleddesign_44_large.webp') }}">Agregar al carrito</a>
           </div>
         </div>
       </div>
     </div>

      <div class="col hp">
         <div class="card h-100 shadow-sm">
            <img src="{{ asset('images/store/runner_5.webp') }}" class="card-img-top" alt="product.title" />
          <div class="label-top shadow-sm">
            <a class="text-white" href="#" target="_blank">Cap</a>
          </div>
          <div class="card-body">
            <div class="clearfix mb-3">
                <span class="float-start badge rounded-pill bg-success">300 Puntos</span>
            </div>
            <div class="d-grid gap-2 my-4">
                <a href="#" class="btn btn-warning bold-btn agregar-carrito" data-producto-id="8" data-producto-nombre="Cap" data-producto-imagen="{{ asset('images/store/runner_5.webp') }}">Agregar al carrito</a>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

  <script>
    // Función para actualizar el contenido del carrito de compras en el dropdown
    function actualizarContenidoCarrito(carrito) {
        const cartItemsContainer = document.querySelector('.cart-items');

        // Limpiamos el contenido actual del dropdown del carrito
        cartItemsContainer.innerHTML = '';

        if (Object.keys(carrito).length > 0) {
            // Si hay productos en el carrito, los recorremos
            for (const [idProducto, cantidad] of Object.entries(carrito)) {
                // Obtenemos la información del producto desde la variable 'data'
                const producto = data.products.find((p) => p.id == idProducto);

                // Creamos un elemento div para representar cada producto en el dropdown
                const cartItemDiv = document.createElement('div');
                cartItemDiv.classList.add('cart-item');

                // Construimos el HTML del producto en el dropdown utilizando plantillas de cadena
                cartItemDiv.innerHTML = `
                    <div class="product-info">
                        <img src="${producto.image}" alt="${producto.name}">
                        <div class="product-details">
                            <span class="product-name">${producto.name}</span>
                            <span class="product-quantity">Cantidad: ${cantidad}</span>
                        </div>
                    </div>
                `;

                // Agregamos el elemento del producto al contenedor del dropdown
                cartItemsContainer.appendChild(cartItemDiv);
            }
        } else {
            // Si no hay productos en el carrito, mostramos un mensaje indicándolo
            cartItemsContainer.textContent = 'El carrito está vacío';
        }

        // Agregamos un separador al final del dropdown
        const cartDivider = document.createElement('div');
        cartDivider.classList.add('dropdown-divider');
        cartItemsContainer.appendChild(cartDivider);

        // Agregamos un enlace para ir al carrito completo (opcional)
        const cartLink = document.createElement('a');
        cartLink.classList.add('dropdown-item', 'text-center');
        cartLink.href = '/carrito'; // Reemplazar con la ruta a la página del carrito
        cartLink.textContent = 'Ir al carrito';
        cartItemsContainer.appendChild(cartLink);
    }

    // Resto del código del script...

</script>





















@endsection
