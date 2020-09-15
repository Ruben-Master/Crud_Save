

     @extends('layouts.app')
     @section('content')
     <div class="card">

        <!--Encabezado del margen -->
            <div class="card-header">
                <i class="fa fa-address-book-o" aria-hidden="true"></i> Crud
            </div>

            <div class="card-body">
                <a href="/formulario" class="btn btn-primary">Nuevo</a>


         <!--Navbar buscador-->
                <nav class="navbar navbar-light bg-light mt-3">
                    <form class="form-inline">
                        <i class="fa fa-search mr-3" aria-hidden="true"></i><input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search">
                      <button class="btn btn-primary" type="submit">Buscar</button>
                    </form>
               </nav>


                <!-- tabla-->
               <table class="table">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">N. Empleado</th>
                        <th scope="col">Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Ruben Retana</td>
                        <td>Desarrollador</td>
                        <td>197424</td>
                        <td><i class="fa fa-pencil" aria-hidden="true"> <i class="fa fa-trash-o ml-4" aria-hidden="true"></i>
                        </i>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jorge Manzano</td>
                        <td>Fullstack</td>
                        <td>197589</td>
                        <td><i class="fa fa-pencil" aria-hidden="true"> <i class="fa fa-trash-o ml-4" aria-hidden="true"></i>
                        </i>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Javier Hernandez</td>
                        <td>Ing. Software</td>
                        <td>198557</td>
                        <td><i class="fa fa-pencil" aria-hidden="true"> <i class="fa fa-trash-o ml-4" aria-hidden="true"></i>
                        </i>
                        </td>
                      </tr>
                    </tbody>
            </table>


            <!-- Number Page-->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#"><<</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">>></a></li>
                </ul>
              </nav>
            </div>
          </div>


     @endsection




