@extends('plantilla')

@section('content')
    


<form action="{{route('update',$clienteActualizar->id)}}">
    @csrf
    <div class="form-group">
        <input type="text" name="nombre" id="nombre" value="{{$clienteActualizar->nombre}}" class="form-control" required>
    </div>
    <div class="form-group">
        <input type="text" name="apellido" id="apellido" value="{{$clienteActualizar->apelllido}}" class="form-control" required>
        </div>
        <div class="form-group">
        <input type="text" name="dui" id="dui" value="{{$clienteActualizar->dui}}" class="form-control" required>
        </div>
        <div class="form-group">
        <input type="text" name="nit" id="nit" value="{{$clienteActualizar->nit}}" class="form-control" required>
        </div>
        <div class="form-group">
        <input type="text" name="direccion" id="direccion" value="{{$clienteActualizar->direccion}}" class="form-control" required>
        </div>
        <div class="form-group">
        <input type="text" name="telefono" id="telefono" value="{{$clienteActualizar->telefono}}" class="form-control" required>
        </div>
        <div class="form-group">
        <input type="text" name="celular" id="celular" value="{{$clienteActualizar->celular}}" class="form-control" required>
        </div>
        <div class="form-group">
        <input type="text" name="nota" id="nota" value="{{$clienteActualizar->nota}}" class="form-control" required>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-warning btn-block">Editar Cliente</button>
 
</form>
@if (session('update'))
<div class="alert-success mt-3">
    {{session('update')}}
</div>
    
@endif

@endsection('contenido')

