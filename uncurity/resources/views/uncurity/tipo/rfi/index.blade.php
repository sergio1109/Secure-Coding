@extends('layouts.admin')
@section('contenido')
	<h1>Remote File Inclusion (RFI)(XSS)</h1>
	<h2>¿Que es?</h2>
	<div class="container-fluid">
	
			<p style="font-size:20px;" align="justify">
				
			</p><br>
			<ul style="font-size:20px;">
			  <li>Vulnerabilidad existente solamente en páginas dinámicas en PHP.

				</li>
			  <li>Permite el enlace de archivos remotos situados en otros servidores.

				</li>
			  <li>Debido a una mala programación de la página que contiene la función include().

				</li>
		 	</ul> 
	

	</div><hr>
	<div class="container-fluid">
			<h2>Resumen del ataque</h2>
			<p align="center"><img style="border-radius:15px; box-shadow: 2px 2px 5px #999;" src="{{asset('img/imagen6.png')}}" width="70%" height="70%" alt=""></p>
			<br>
		 	<p style="font-size:20px;" align="justify">
				El archivo debe tener una extensión distinta a cualquier otra que se pueda ejecutar en el servidor del atacante (.txt,.gif, etc), una extensión ".php" no sería válida. <br>
				<br>
				El código del script malicioso debe ir con una extensión distinta, ya que la función include, require, require_once, include_once ejecutaría el código php contenido en el fichero que se pasa como parámetro a la función, sin importar la extensión que tenga.

			</p><br>	

	</div><hr>
	<div class="container-fluid">
		<h2>Detener el ataque</h2>
		<p align="center"><img style="border-radius:5px; box-shadow: 2px 2px 5px #999;" src="{{asset('img/imagen7.png')}}" width="70%" height="70%" alt=""></p>
	</div>
	<hr>
	<div class="container-fluid">
		<h2>Ejemplo</h2>
		<div class="row col-md-8">
			<p style="font-size:20px;" align="justify">
				El atacante podría incluir su shell.txt para obtener información del sitio vulnerable, tal vez sienta curiosidad por saber cuantos directorios y qué contenido alberga dicho servidor. Así que se pondría manos  a la obra y haría lo siguiente …


			</p><br>
		</div>

		<div class="row col-md-4">
			<p align="center"><img style="border-radius:5px; box-shadow: 2px 2px 5px #999;" src="{{asset('img/imagen8.png')}}" width="100%" height="100%" alt=""></p>
		</div>
		<hr>		
	</div>
	<div class="container-fluid">
		
		<p style="font-size:20px;" align="justify">
				Con estas lineas de código el atacante podría ir de directorio en directorio listando el contenido del mismo. como se muestra a continuación:

		</p>
		<p align="center"><img style="border-radius:5px; box-shadow: 2px 2px 5px #999;" src="{{asset('img/imagen9.png')}}" width="100%" height="100%" alt=""></p><br><br>
		<h2>Al final...</h2>

		<p style="font-size:20px;" align="justify">
				El atacante sentirá más curiosidad y cada vez irá mejorando su shell.txt hasta que pueda tener la opción de leer los archivos que se encuentran en cada directorio. También podría llegar a subir archivos, descargar archivos, crear archivos y cualquier otra por la cual pueda sentir curiosidad.

		</p>
	</div>
@endsection