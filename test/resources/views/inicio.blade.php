@extends('plantilla')
@section('content')
    <div class="row">
        <div class="col-md-7">
            <table class="table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>DUI</th>
                    <th>NIT</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Celular</th>
                    <th>Nota</th>
                    <th>options</th>
                </tr>
             @foreach ($clientes as $item)
                 <tr>
                     <td>{{$item->id}}</td>
                     <td>{{$item->nombre}}</td>
                     <td>{{$item->apellido}}</td>
                     <td>{{$item->dui}}</td>
                     <td>{{$item->nit}}</td>
                     <td>{{$item->direccion}}</td>
                     <td>{{$item->telefono}}</td>
                     <td>{{$item->celular}}</td>
                     <td>{{$item->nota}}</td>
                     <td>
                     <a href="{{route('editar',$item->id)}}" class="btn btn-warning"> Editar</a>
                     <form action="{{route('eliminar', $item->id)}}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                     </td>
                     <td>
                     </td>
                 </tr>
             @endforeach

            </table>

            @if (session('eliminar'))
            <div class="alert alert-sucess mt-3">
                {{session('eliminar')}}
            </div>
                
            @endif
            
        </div>
        {{--file form --}}
        <div class="col-md-5">
            <h3 class="text-center mb-4" >Agregar Clientes</h3>
            <form action="{{route('store')}}" method="POST">
                @csrf
                <div class="form-grup">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required>
                </div>
                <div class="form-grup">
                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" required>
                </div>
                <div class="form-grup">
                    <input type="text" name="dui" id="dui" class="form-control" placeholder="DUI" required>
                </div>
                <div class="form-grup">
                    <input type="text" name="nit" id="nit" class="form-control" placeholder="NIT" required>
                </div>
                <div class="form-grup">
                    <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion" required>
                </div>
                <div class="form-grup">
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Telefono" required>
                </div>
                <div class="form-grup">
                    <input type="text" name="celular" id="celular" class="form-control" placeholder="celular" required>
                </div>
                <div class="form-grup">
                    <input type="text" name="nota" id="nota" class="form-control" placeholder="Nota" required>
                </div>
                <button type="submit" class="btn btn-sucess btn-block">Guardar Cliente </button>
            </form>

            @if (session('agregar'))
                <div class="alert alert-sucess mt-3">
                    {{session('agregar')}}
                </div>
                @endif
        </div>
       
    </div>
@endsection