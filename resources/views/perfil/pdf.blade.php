<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">       
    <title>Document</title>


    <!-- Icon Font Stylesheet -->
    
  
</head>
<body>
  

    <section class="contenedor d-flex">
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark  py-lg-0 px-lg-2 wow fadeIn" style="height: 90px">
        <div>
            <img style=" width: 10%" src="{{public_path('/img/Logotipo.jpg')}}" class="rounded d-block" alt="">
        </div>
    </section>
    </div>
   
        <div class="tarjeta">

        @forelse($pets as $pet)
                <div class="tarjeta1">
                    <div class="titulo">
                       <p class="card-text1  titulo"><b style="color: #000">Fundación:</b>{{$pet->users->nombre_usuario}}</p>  
            
                     </div>
            <div  style="margin-top: 2% ">
               <p class="card-text1" style="margin-top: 5%"><b style="color: #000"> Fecha solicitud:</b> {{$pet->fecha_solic_inic}}</p>
               <p class="card-text1" style="margin-top: 5%"><b style="color: #000"> Fecha solicitud:</b> {{$pet->fecha_solic_final}}</p>
               <p class="card-text1" style="margin-top: 5%"><b style="color: #000"> Fecha solicitud:</b> {{$pet->hora_solic_inic}}</p>
               <p class="card-text1" style="margin-top: 5%"><b style="color: #000"> Fecha solicitud:</b> {{$pet->hora_solic_final}}</p>
                <p class="card-text1"><b style="color: #000"> Estado Mascota:</b> {{$pet->estado_masc}}</p>
                <p class="card-text1"><b style="color: #000">Dirección Fundación:</b> {{$pet->direccion_usuario}}</p>
                <p class="card-text1  titulo"><b style="color: #000"> DATOS MASCOTA</b></p>
               {{--<img class="fotoF img_adopt" style="margin-left: 35%; width: 35%"  src="{{public_path('/img/fotos/'.$pet->foto_masc1)}}">--}}
               <img class="img-thumbnail rounded" style="margin-left: 35%; width: 35%" src="{{public_path('/img/fotos/'.$pet->foto_masc1)}}">
                <p class="card-text1"><b style="color: #000"> Nombre mascota:</b>     {{$pet->nombre_masc}}</p>
                <p class="card-text1"><b style="color: #000"> Edad mascota:</b> {{$pet->edad_masc}}</p>
                <p class="card-text1"><b style="color: #000"> Raza mascota:</b> {{$pet->raza_masc}}</p>
                <p class="card-text1"><b style="color: #000">Tamaño mascota:</b> {{$pet->tamaño_masc}}</p>
                <p class="card-text1"><b style="color: #000">Sexo mascota:</b> {{$pet->sexo_masc}}</p>
                <p class="card-text1"><b style="color: #000">Tipo mascota:</b> {{$pet->tipo_masc}}</p>
                <p class="card-text1"><b style="color: #000">Descripción: </b>{{$pet->descripcion_masc}}</p><br><br><br>

                @endforeach
           
                </div>
        </div>
</body>
</html> 