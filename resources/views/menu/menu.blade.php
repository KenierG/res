<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menú</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .float{
        position:fixed;
  
        bottom:40px;
        right:40px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:30px;
        box-shadow: 2px 2px 3px #999;
        z-index:200;
      }
  
      .float:hover {
        background-color:#075e54;
      }
    </style>

  </head>
<body>
    @include('layouts.header')

    <div class="container">
        <h3 class="text-center my-3">Bienvenido a nuestro menú</h3>

        <form action="">
            <div class="row mx-2">
                <div class="col-5 p-0">
                    <input type="text" class="form-control ">
                </div>
                <div class="col-4 m-0 p-0">
                    <select name="categoria" id="cate" class="form-select ">
                        <option value="1" class="active">Categoria</option>
                        <option value="2">Desayunos</option>
                        <option value="3">Almuersos</option>
                        <option value="4">Cenas</option>
                        <option value="5">Café</option>
                        <option value="6">Jugos</option>
                        <option value="7">Cafeteria</option>
                    </select>
                </div>
                <div class="col-3 p-0">
                    <input type="submit" value="Buscar" class="form-control btn-dark">
                </div>
            </div>
            
        </form>

        <main class="container my-4">

            @foreach ($platillos as $platillo)
            <div class="row my-2">
              <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-8">
                        <div class="card-body">
                          <h5 class="card-title fs-5">{{ $platillo->nombre }}</h5>
                          <p class="card-text fs-6">{{ $platillo->descripcion }}</p>
                        </div>
                      </div>
                      <div class="col-4 d-flex ">
                        <img src="{{ asset('images/pollo-a-la-plancha.jpg') }}" class="img-fluid rounded-start" alt="...">
                      </div>
                    </div>
                  </div>
            </div>
            @endforeach
        
        </main>

        <div class="contacto text-center float " >
            <button class="btn-success fs-2 p-3 border-0 rounded rounded-3">
                ¡PIDE YA!
            </button>
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