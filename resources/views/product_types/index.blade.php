@extends('layouts.app')

@section('body-class','landing-page')

@section('content')

<div class="page-header header-filter" data-parallax="true">


  
<div class="main main-raised">
    <div class="container">

      <div class="section text-center">
        <h2 class="title">Listado de Tipos de Producto</h2>

        <div class="team">
          <div class="row">
           
           	<a href="{{ ('/product_types/create') }}" type="button" class="btn btn-default">Nuevo Tipo de Producto</a>

			<table class="table">
			    <thead>
			        <tr>
			            <th class="text-center">#</th>
			            <th class="text-left">Nombre</th>
                  <th class="text-right"> Opciones</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach ($product_types as $product_type)
			        <tr>
			            <td class="text-center">{{ $product_type->id }}</td>
			            <td class="text-left"> {{ $product_type->name }}</td>


			            <td class="td-actions text-right">


			                <form method="post" action="{{ url('/product_types/'.$product_type->id.'/delete') }}">
			                	@csrf
			 
			 					<a type="button" rel="tooltip" title="Ver Tipo" class="btn btn-info btn-simple btn-xs">
			                    	<i class="fa fa-eye"></i>
			                	</a>

			                	<a href="{{ url('/product_types/'.$product_type->id.'/edit') }}" rel="tooltip" title="Editar Tipo" class="btn btn-success btn-simple btn-xs">
			                    	<i class="fa fa-edit"></i>
			                	</a>

			                	<button type="submit" rel="tooltip" title="Eliminar Tipo" class="btn btn-danger btn-simple btn-xs">
			                    	<i class="fa fa-times"></i>
			                	</button>
			                </form>
			            
			            </td>
			        </tr>
			        @endforeach
			    </tbody>
			</table>

			{{ $product_types->links() }}
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
