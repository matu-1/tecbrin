@extends('layout')
@section('contenido')
<div class="row no-gutters ">
    <div class="card card-body">
        <h3 class="text-primary mb-3">Editar Usuario</h3> 
        <form action="{{ route('usuario.update',$usuario->id)}}" method="post" onsubmit="return validacion();">    {{-- la accion el la ruta del formulario --}} 
            {{ csrf_field() }}  
            {!! method_field('PUT') !!}
            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="nombre">Nombre</label>
                <div class="col-md-9">
                    <input  class="form-control" type="text" name="nombre" placeholder="Nombre" value="{{$usuario->nombre}}"  >
                    <span id="nombre" class="text-danger"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="nombre">Apellido</label>
                <div class="col-md-9">
                    <input  class="form-control" type="text" name="apellido" placeholder="Apellido" value="{{$usuario->apellido}}"  >
                    <span id="apellido" class="text-danger"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="Telefono">Telefono</label>
                <div class="col-md-9">
                    <input  class="form-control" type="text" name="telefono" placeholder="Telefono" value="{{$usuario->telefono}}"  >
                    <span id="telefono" class="text-danger"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="nombre">Email</label>
                <div class="col-md-9">
                    <input  class="form-control" type="text" name="email" placeholder="Email" value="{{$usuario->email}}"  >
                    <span id="email" class="text-danger"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="tipo">Tipo</label>
                <div class="col-md-9">
                    <select class="form-control" name="tipo">
                        @foreach ($tipos as $item)
                            @if ($item == $usuario->tipo)
                                <option value="{{$item}}" selected>{{$item}}</option>
                            @else
                                <option value={{$item}}>{{$item}}</option>
                            @endif
                        @endforeach   
                    </select>
                    <span id="tipo" class="text-danger"></span>
                </div>
            </div>

            <div class="d-flex justify-content-end mt-4">  
                <a href="{{ route('usuario.index') }}" class="btn btn-secondary mr-1">Volver</a>
                <button class="btn btn-primary" type="submit">Guardar</button>
            </div>

        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    function validacion(){
        validarTexto('nombre', 'nombre');
        validarTexto('apellido', 'apellido');
        validarEmail('email', 'email');
        validarNumero('telefono', 'telefono');
        validarTexto('tipo', 'tipo');
        if(validarTexto('tipo', 'tipo') && validarEmail('email', 'email') && validarTexto('nombre', 'nombre') && validarTexto('apellido', 'apellido') && validarNumero('telefono', 'telefono')){
            return true;
        }else{
            return false;
        }
    }

    function validarTexto(idCajaMensaje, campoName){
        var mensaje = document.getElementById(idCajaMensaje);
        var campo = document.getElementsByName(campoName)[0].value;
        if(campo != ""){
            mensaje.innerHTML = "";
            return true;
        }else{
            mensaje.innerHTML = "se requiere el campo";
            return false;
        }
    }

    function validarEmail(idCajaMensaje, campoName){
        var mensaje = document.getElementById(idCajaMensaje);
        var campo = document.getElementsByName(campoName)[0].value;
        console.log("cmapo" , campo);
        if(campo != ""){     
            if ( /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(campo)){
                mensaje.innerHTML = "";
                return true;  
            }else{
                mensaje.innerHTML = "el campo debe ser un email";
                return false;
            }
           
        }else{
            mensaje.innerHTML = "se requiere el campo";
            return false;
        }
    }

    function validarNumero(idCajaMensaje, campoName){
        var mensaje = document.getElementById(idCajaMensaje);
        var campo = document.getElementsByName(campoName)[0].value;
        if(campo != ""){     
            if (!isNaN(campo)){
                mensaje.innerHTML = "";
                return true;  
            }else{
                mensaje.innerHTML = "el campo debe ser un numero";
                return false;
            }
           
        }else{
            mensaje.innerHTML = "se requiere el campo";
            return false;
        }
    }

</script>
@endsection