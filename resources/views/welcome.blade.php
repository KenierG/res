<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
   @include('layouts.header')


    
    
      <div class="carousel carosuler_after">
        <div id="carouselExampleSlidesOnly " class="carousel slide " data-bs-ride="carousel">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/carrousel_1.jpg') }}" class="d-block w-100 " style="height: 80vh;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/carrousel_2.jpg') }}" class="d-block w-100 " style="height: 80vh;" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/carrousel_3.jpg') }}" class="d-block w-100 " style="height: 80vh;" alt="...">
              </div>
            </div>
            <div class="carousel-caption  roundeds d-block">
                <h4 class="text-bg-white py-3 border  ef_blur" >Ver menú</h4>
                <h4 class="text-bg-white py-3 border  ef_blur">¡Haz tu pedido ya!</h4>

              </div>
          </div>
    </div>
    <div class="container my-4">

        <div class="about">
            <h3 class="text-center">Nosotros</h3>
            <p class="fs-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores explicabo perspiciatis molestias placeat dolore quaerat aspernatur, ipsa quam. Reprehenderit, incidunt commodi? Qui voluptas, doloremque blanditiis voluptatum impedit officia! Exercitationem!</p>
        </div>

        <div class="platos my-5">
            <div class="platillos my-2">
                <h3 class="text-center my-2">CONOCE NUESTROS PLATILLOS</h3>
                @include('layouts.platillos')
            </div>
            <p class="text-center my-2 fs-4">Ademas contamos con una gran cantidad de platillos y pasabocas</p>
            <hr>
            <div class="cantidad-platillos mx-4">
    
                <div class="row my-2">
    
                    <div class="col-4 d-flex flex-column text-center">
                        <h4>Café</h4>
                        <p id="cont-1" data-cant="10">0</p>
                    </div>
                    <div class="col-4 d-flex flex-column text-center">
                        <h4>Pasteles</h4>
                        <p id="cont-2" data-cant="10">0</p>
                    </div>
                    <div class="col-4 d-flex flex-column text-center">
                        <h4>Panes</h4>
                        <p id="cont-3" data-cant="22">0</p>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4 d-flex flex-column text-center">
                        <h4>Café</h4>
                        <p id="cont-4" data-cant="10">0</p>
                    </div>
                    <div class="col-4 d-flex flex-column text-center">
                        <h4>Pasteles</h4>
                        <p id="cont-5" data-cant="10">0</p>
                    </div>
                    <div class="col-4 d-flex flex-column text-center">
                        <h4>Panes</h4>
                        <p id="cont-6" data-cant="22">0</p>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4 d-flex flex-column text-center">
                        <h4>Café</h4>
                        <p id="cont-7" data-cant="10">0</p>
                    </div>
                    <div class="col-4 d-flex flex-column text-center">
                        <h4>Pasteles</h4>
                        <p id="cont-8" data-cant="10">0</p>
                    </div>
                    <div class="col-4 d-flex flex-column text-center">
                        <h4>Panes</h4>
                        <p id="cont-9" data-cant="22">0</p>
                    </div>
                </div>
    
            </div>
        </div>


        <div class="sedes bg-light p-4">

            <h2 class="text-center fs-1 fw-bold">¿Dondé nos puedes encontrar?</h2>
              <div class="bg-transparent border-0 text-center my-3">
                <div class="card-body py-0">
                  <h5 class="fw-bold">Barrio las americas</h5>
                  <p class=" fs-6">Calle falsa 25 #13-25</p>
                </div>
                <img src="{{ asset('images/carrousel_1.jpg') }}" class="card-img-bottom" alt="...">
              </div>
              <div class="bg-transparent border-0 text-center my-3">
                <div class="card-body py-0">
                  <h5 class="fw-bold">Barrio las americas</h5>
                  <p class=" fs-6">Calle falsa 25 #13-25</p>
                </div>
                <img src="{{ asset('images/carrousel_1.jpg') }}" class="card-img-bottom" alt="...">
              </div>
              <div class="bg-transparent border-0 text-center my-3">
                <div class="card-body py-0">
                  <h5 class="fw-bold">Barrio las americas</h5>
                  <p class=" fs-6">Calle falsa 25 #13-25</p>
                </div>
                <img src="{{ asset('images/carrousel_1.jpg') }}" class="card-img-bottom" alt="...">
              </div>

        </div>
    </div>


    
    <footer class="text-center text-dark bg-light  py-2" style="background-color: #f1f1f1;">
        <div class="logo">
            <a href=""><img src="{{ asset('images/logo.png') }}" alt="" class="w-50"></a>
        </div>
        <div class="container pt-4">
          <section class="mb-4">
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <a
              class="btn btn-link btn-floating btn-lg text-dark m-1"
              href="#!"
              role="button"
              data-mdb-ripple-color="dark"
              ><i class="fab fa-instagram"></i
            ></a>

          </section>
        </div>
        <div class="row">
            <div class="col-12 ">
                <h4>Dirección</h4>
                <p >Calle Falsa 123, Ciudad</p>
            </div>
            <div class="col-12">
                <h4>Teléfono</h4>
                <p>555-1234</p>
            </div>

        </div>
      
        <div class="text-center text-dark p-3" style="background-color: rgba(159, 127, 127, 0.2);">
          © 2023 Copyright:
          <a class="text-bg-primary" href="#">Kenier Guerrero</a>
        </div>
      </footer>

    


    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/number.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>