@extends('layouts.admin')
@section('contenido')
<script languague="javascript">
        function mostrar() {
            div = document.getElementById('flotante');
            div.style.display = '';
        }

        function cerrar() {
            div = document.getElementById('flotante');
            div.style.display = 'none';
        }
        
</script>
<script languague="javascript">
	function mostrarS() {
            div = document.getElementById('servidor');
            div.style.display = '';
        }

        function cerrarS() {
            div = document.getElementById('servidor');
            div.style.display = 'none';
        }
</script>

	<h1>Cross Site Scripting (XSS)</h1>
	<h2>¿Que es?</h2>
	<div class="container-fluid">
	
			<p style="font-size:20px;" align="justify">
				Ataques en los cuales se intenta inyectar scripts maliciosos en sitios vulnerables y de confianza para la gente.<br>
				Normalmente se debe a la falta o poca frecuencia de los controles necesarios en el sitio, pensados para evitar la ejecución de comandos desde la misma página web
			</p><br>
			<p align="center"><img style="border-radius:35px; box-shadow: 2px 2px 5px #999;" src="{{asset('img/xss.gif')}}" width="50%" height="50%" alt="">
	</p>
		
			
	

	</div>
	<div class="container-fluid">
		<h2>Tipos</h2>
		<p style="font-size:20px;" align="jutsify">
					Este tipo de vulnerabilidad puede ser explotada de dos maneras: de forma <b>reflejada </b>y de forma <b>almacenada.</b>

		</p>
	</div><hr>
	<div class="container-fluid">
		<h2>Reflejada</h2>
		<p style="font-size:20px;" align="justify">
					Consiste en modificar valores que la aplicación web usa para pasar variables entre dos página.
		</p>

	</div>
	<div class="container-fluid">
		<h2>Ejemplo</h2>
		<p align="center"><img src="{{asset('img/imagen1.png')}}" alt=""></p>
		<p align="center"><img src="{{asset('img/imagen2.png')}}" alt=""></p>
	</div>
	<br><br><br>
	<div class="container-fluid">
		<p align="center"><img src="{{asset('img/imagen3.png')}}" alt=""></p>
	</div><hr>
	<div class="container-fluid">
		<h2>Almacenada-Persistente</h2>
		<p style="font-size:20px;" align="justify">
					Consiste en insertar código malicioso en sitios que lo permitan; de esta forma quedará visible a los usuarios que ingresen en el sitio modificado.

		</p>
	</div>
	<div class="container-fluid">
		<h2>Ejemplo</h2>
		
		<p align="center"><img src="{{asset('img/imagen4.png')}}" alt=""></p><br><br>
		<h2>Resultado</h2>
		<p align="center"><img src="{{asset('img/imagen5.png')}}" alt=""></p><br>
		<p style="font-size:20px;" align="center">
			&ltmeta http-equiv=”refresh” content=”15; URL=’ www.segundapagina.com’”&gt

		</p>
	</div>
	<hr>
	<p><a href="javascript:mostrar();"><button type="button" class="btn btn-info"><p style="font-size:20px;" align="center">¿Cómo evitarlo? (usuario)</p></button></a></p>
	<div id="flotante" style="display:none;">
	     <div id="close"><a href="javascript:cerrar();">cerrar</a></div>
	     <ul style="font-size:20px;">
			  <li>Contar con un sistema de seguridad instalado (bloquear ejecuciones maliciosas)
				</li>
			  <li>Ser cuidadoso con las direcciones que se visitan ( revisar URL)
				</li>
			  <li>Navegadores alternativos (Evitar ataques dirigidos)
				</li>
		 </ul>  
	</div>
	<hr>

	<p><a href="javascript:mostrarS();"><button type="button" class="btn btn-info"><p style="font-size:20px;" align="center">¿Cómo evitarlo? (Servidor)</p></button></a></p>
	<div id="servidor" style="display:none;">
	     <div id="close"><a href="javascript:cerrarS();">cerrar</a></div>
	     <ul style="font-size:20px;">
			  <li>Controles de validación en inputs 

				</li>
			  <li>La sanitización de los datos es importante (eliminar código potencialmente sensible)

				</li>
			  <li>Revisar la integridad de los datos que se devuelven
				</li>
		 </ul>  
	</div>
	<hr>
@endsection