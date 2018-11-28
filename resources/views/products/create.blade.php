@extends('layouts.app')

@section('body-class','landing-page')

@section('content')

<div class="page-header header-filter" data-parallax="true">


  
<div class="main main-raised">
    <div class="container">

      <div class="section">
        <h2 class="title text-center">Agregar Nuevo Producto</h2>

        <form method="post" action="{{ url('/products') }}">
          {{ csrf_field() }}
          
          <div class="row">
              <div class="col-sm-4">
                  <div class="form-group">
                      <label for="name">Nombre del Producto</label>
                      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                  </div>
              </div>

              <div class="col-sm-2">
                  <div class="form-group">
                      <label for="price">Precio</label>
                      <input type="number" step"0.01" class="form-control" name="price" value="{{ old('price') }}">
                  </div>
              </div>

              <div class="col-sm-3">
                  <div class="form-group">
                      <label class="control-label">Categoría del Producto</label>
                      <select class="form-control" name="product_category_id">
                          <option value="1">Todas</option>
                          @foreach ($product_categories as $product_category)
                             <option value="{{ $product_category->id }}">{{ $product_category->name }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>

              <div class="col-sm-3">
                  <div class="form-group">
                      <label class="control-label">Tipo de Producto</label>
                      <select class="form-control" name="product_category_id">
                          <option value="1">Todos</option>
                          @foreach ($product_types as $product_type)
                             <option value="{{ $$product_type->id }}">{{ $$product_type->name }}</option>
                          @endforeach
                      </select>
                  </div>
              </div>


          </div>  
  
          <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" name="description" rows="5"></textarea>
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