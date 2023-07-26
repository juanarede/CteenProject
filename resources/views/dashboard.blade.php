@extends('layouts.app_with_modal')

@section('content')
<style>

    @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@600&display=swap');
  
    h2 {
      font-family: 'Kanit', sans-serif;
      color: white;
      text-align: center;
      margin: 50px 0; 
      font-size: 3em; 
    }
  
    .fade-in {
        opacity: 0; 
        transform: translateY(20px); 
        transition: opacity 0.5s ease, transform 0.5s ease;
    }
  
    .fade-in.appear {
        opacity: 1; 
        transform: translateY(0); 
    }
 

  

 
   
  </style>
<div class="container">
  <img src="{{ asset('images/bannercteen.png') }}" class="img-fluid w-100 " alt="Responsive image">

  <h2 class="fade-in" >About us:</h2>

  <div id="carouselExample" class="carousel slide fade-in  ">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/aboutus/1.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/aboutus/2.png') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/aboutus/3.png') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <h2 class="fade-in">We Have some interesting news to show you...</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
    <div class="col fade-in">
      <div class="card h-100">
        <img src="{{ asset('images/cardnews/tzdaka.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"> Hoy en #marinchospots una de nuestras esquinas favoritas: Pinat Mitzva 🙌🏻
                                Siempre lista con Kipot, Tefilin, Kupa Tzedaka, velas de Shabat y máss! 😊
                                Cuál es tu #marinchospots favorito?</p>
        </div>
      </div>
    </div>
    <div class="col fade-in">
      <div class="card h-100">
        <img src="{{ asset('images/cardnews/lanch-2.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">Así sí 😍
Otra semana que se va en Marincho 🙌🏻 te esperamos la próxima!</p>
        </div>
      </div>
    </div>
    <div class="col fade-in">
      <div class="card h-100">
        <img src="{{ asset('images/cardnews/girls.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">Seguimos compartiendo momentos juntos 😍😍</p>
        </div>
      </div>
    </div>
    <div class="col fade-in">
      <div class="card h-100">
        <img src="{{ asset('images/cardnews/shabat shalom-4.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Otra increíble semana en Marincho que disfrutamos al máximo!!
                              Shabat Shalom 🙌🏻</p>
        </div>
      </div>
    </div>
    <div class="col fade-in">
      <div class="card h-100">
        <img src="{{ asset('images/cardnews/5.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">Que lindo compartir Lag Ba Omer todos juntos!
                                Un aplauso para el asador que lo dejo todo para deleitarnos 👏🏼😋
                                Estén atentos que se vienen muchos eventos más!!</p>
        </div>
      </div>
    </div>
    <div class="col fade-in">
      <div class="card h-100">
        <img src="{{ asset('images/cardnews/inisrael-6.jpg') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">Hermoso Shabaton en Eretz Israel junto a los chicos de shnat.
Que hermosa y tan enriquecedora experiencia compartida 😀</p>
        </div>
      </div>
    </div>
  </div>

  <div class="ratio ratio-16x9 my-5 ">
        <iframe src="https://www.youtube.com/embed/Qmb_EY9ZQmE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  </div>
</div>

<script>
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth - 100) // Cambiamos aquí el offset a 100 píxeles
        );
    }

    function handleScrollAnimation() {
        const elements = document.querySelectorAll('.fade-in');
        elements.forEach((element) => {
            if (isElementInViewport(element)) {
                element.classList.add('appear');
            }
        });

      
    }

    window.addEventListener('scroll', handleScrollAnimation);

   
    window.addEventListener('load', handleScrollAnimation);
</script>
@endsection
