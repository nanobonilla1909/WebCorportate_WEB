@extends('layouts.app')

@section('body-class','landing-page')

@section('content')

<div class="page-header header-filter" data-parallax="true">


  
<div class="main main-raised">
    <div class="container">

      <div class="section text-center">
        <h2 class="title">Listado de Productos</h2>

        <form class="form-inline" method="get" action="{{ url('/products/search') }}">
            <input type="text" placeholder="Que Producto buscas?" class="form-control" name="query">
            <button class="btn btn-primary btn-jst-icon" type="submit">
               <i class="material-icons">search</i>
            </button>
        </form>


        <div class="team">
          <div class="row">
           
           	<a href="{{ ('/products/create') }}" type="button" class="btn btn-default">Nuevo Producto</a>

			<table class="table">
			    <thead>
			        <tr>
			            <th class="text-center">#</th>
			            <th class="text-center">Nombre</th>
			            <th class="text-right">Precio</th>
			            <th class="text-center"> Categoría</th>
			            <th class="text-center"> Tipo Producto</th>
			            <th class="text-right"> Opciones</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach ($products as $product)
			        <tr>
			            <td class="text-center">{{ $product->id }}</td>
			            <td class="text-left"> {{ $product->name }}</td>
			            <td class="text-right">{{ $product->price }}</td>
			            <td class="text-center">{{ $product->product_category->name }}</td>
			            <td class="text-center">{{ $product->product_type->name }}</td>

			            <td class="td-actions text-right">


			                <form method="post" action="{{ url('/products/'.$product->id.'/delete') }}">
			                	@csrf
			 
			 					<a type="button" rel="tooltip" title="Ver Producto" class="btn btn-info btn-simple btn-xs">
			                    	<i class="fa fa-eye"></i>
			                	</a>

			                	<a href="{{ url('/products/'.$product->id.'/edit') }}" rel="tooltip" title="Editar Producto" class="btn btn-success btn-simple btn-xs">
			                    	<i class="fa fa-edit"></i>
			                	</a>

			                	<button type="submit" rel="tooltip" title="Eliminar Producto" class="btn btn-danger btn-simple btn-xs">
			                    	<i class="fa fa-times"></i>
			                	</button>
			                </form>
			            
			            </td>
			        </tr>
			        @endforeach
			    </tbody>
			</table>

			{{ $products->links() }}
          </div>
        </div>
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
