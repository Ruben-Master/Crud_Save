<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ruben">
    <meta name="description" content="Aprendiendo a hacer un CRUD sin Manzano">
    <meta  name="keywords" content="Computadoras, sistemas operativos, laptop">

    <!-- Bootstrap CSS links y iconos awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/table.css">
    <link rel="stylesheet" href="/css/base.css">
    <title>Mi Práctica</title>
  </head>
   <!--Aqui empieza body -->
  <body>

<!--Mi Navbar menú -->
        <i class="navbar navbar-dark bg-primary"><i class="fa fa-home" aria-hidden="true">
        <a class="navbar-brand" href="#" >Menú</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </i><span class="navbar-toggler-icon"></span>

         </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <a class="nav-link" href="/login" >Login <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="/crud">Crud</a>
             </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Registrarse</a>
              </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
             <button type="button" class="btn btn-light">Buscar</button>
           </form>
         </div>
    </i>



      <main>


       <div class="container">

     <!--Dando espacio entre el margen  card header y navbar -->
     <div class="mt-5"></div>

            @yield('content')

       </div>
  </main>
   <script type="text/javascript" src="/js/app.js"></script>

  </body>

</html>
