@extends('layout')
@section('contenido')
<div class="row no-gutters ">
    <div class="card card-body">
        <h3 class="text-primary mb-3">Registrar Usuario</h3> 
        <form action="{{ route('usuario.store')}}" method="post" onsubmit="return validacion();">    {{-- la accion el la ruta del formulario --}} 
            {{ csrf_field() }}  
            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="nombre">Nombre</label>
                <div class="col-md-9">
                    <input  class="form-control" type="text" name="nombre" placeholder="Nombre">
                    <span id="nombre" class="text-danger"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="nombre">Apellido</label>
                <div class="col-md-9">
                    <input  class="form-control" type="text" name="apellido" placeholder="Apellido"  >
                    <span id="apellido" class="text-danger"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="Telefono">Telefono</label>
                <div class="col-md-9">
                    <input  class="form-control" type="text" name="telefono" placeholder="Telefono"  >
                    <span id="telefono" class="text-danger"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="nombre">Email</label>
                <div class="col-md-9">
                    <input  class="form-control" type="text" name="email" placeholder="Email"   >
                    <span id="email" class="text-danger"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="nombre">Contraseña</label>
                <div class="col-md-9">
                    <input  class="form-control" type="password" name="password" placeholder="Contraseña"  >
                    <span id="password" class="text-danger"></span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-md-3 col-form-label" htmlFor="Roles">Tipo</label>
                <div class="col-md-9">
                    <select class="form-control" name="tipo" >
                        <option value="" selected disabled>Seleccione</option>
                        <option value="administrativo" >Administrativo</option>
                        <option value="vendedor" >Otro</option>
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
        validarPassword('password', 'password');
        validarNumero('telefono', 'telefono');
        validarTexto('tipo', 'tipo');
        if(validarTexto('tipo', 'tipo') && validarPassword('password', 'password') && validarEmail('email', 'email') && validarTexto('nombre', 'nombre') && validarTexto('apellido', 'apellido') && validarNumero('telefono', 'telefono')){
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

    function validarPassword(idCajaMensaje, campoName){
        var mensaje = document.getElementById(idCajaMensaje);
        var campo = document.getElementsByName(campoName)[0].value;
        console.log(campo)
        if(campo != ""){
            if(campo.length >= 8){
                mensaje.innerHTML = "";
                return true;
            }else{
                mensaje.innerHTML = "la contraseña debe tener minimo 8 digitos";
                return false;
            }
           
        }else{
            mensaje.innerHTML = "se requiere el campo";
            return false;
        }
    }

</script>
@endsection