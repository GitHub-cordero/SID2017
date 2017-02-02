<div class="panel panel-default" >
    <div class="panel-heading">Registrar Usuario</div>
    <div class="panel-body">


        <div class="form-group" >
            {!!Form::label('nombre','Nombre:')!!}
            {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('email','Correo:')!!}
            {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('password','Contraseña:')!!}
            {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa el Nombre del usuario'])!!}
        </div>
        
        @include('admin.persona.buscar')
    </div>
</div>

