@extends('layouts.app')

@section('body-class','landing-page')

@section('content')

<div class="page-header header-filter" data-parallax="true">


  
<div class="main main-raised">
    <div class="container">

      <div class="section">
        <h2 class="title text-center">Agregar Nueva Categoría</h2>

        <form method="post" action="{{ url('/products') }}">
          {{ csrf_field() }}
          
          <div class="row">
              <div class="col-sm-6">
                  <div class="form-group">
                      <label for="name">Nombre de la Categoría</label>
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                  </div>
              </div>

              <div class="col-sm-6">
                  <div class="form-group">
                      <label for="code">Codigo de la Categoría</label>
                      <input type="text" class="form-control" name="code" value="{{ old('code') }}">
                  </div>
              </div>

          </div>  

          <div class="row">

               <div class="col-sm-4">
                  <div class="form-group">
                      <label for="depth">Nivel</label>
                      <input type="number" step"1" class="form-control" name="depth" value="{{ old('depth') }}">
                  </div>
              </div>

              <div class="col-sm-4">
                  <div class="form-group">
                      <label for="left">Izquierda</label>
                      <input type="number" step"1" class="form-control" name="left" value="{{ old('left') }}">
                  </div>
              </div>

              <div class="col-sm-4">
                  <div class="form-group">
                      <label for="right">Derecha</label>
                      <input type="number" step"1" class="form-control" name="right" value="{{ old('right') }}">
                  </div>
              </div>

            
          </div>

          

          <button type="submit" class="btn btn-default">Guardar</button>

        </form>


      </div>
      
    </div>
  </div>


<footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://presentation.creative-tim.com">
              About Us
            </a>
          </li>
          <li>
            <a href="https://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
</footer>

@endsection