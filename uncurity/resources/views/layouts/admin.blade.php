<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Uncurity</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="favicon" href="{{asset('img/favicon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <script src="{{asset('js/jquery.js')}}"></script>
  <script languague="javascript">
    function mostrarR() {
              div = document.getElementById('resultado');
              div.style.display = '';
          }

    function cerrarR() {
              div = document.getElementById('resultado');
              div.style.display = 'none';
          }
  </script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="/uncurity/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>UN</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Uncurity</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
               
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      
                      <small></small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>RFI / XSS</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              	<li><a href="/uncurity/tipo/rfi"><i class="fa fa-circle-o"></i> RFI</a></li>
                <li><a href="/uncurity/tipo/xss"><i class="fa fa-circle-o"></i> XSS</a></li>
                
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-th"></i>
                <span>Compras</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Ingresos</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Proveedores</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i>
                <span>Ventas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i> Ventas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i> Clientes</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Uncurity</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
                              @yield('contenido')
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          
        </div>
        
      </footer>

     <script>
    $( document ).ready(function($nombre) {
      $("#obtener").click(function() {
        var valor=$("#nombre").val();
        /*le quitamos todos los espacio*/
        var valor2=valor.replace(/\s/g,"");
        var inicioScript = valor2.substring(0, 8);

        var tamano = valor2.length;
        var finScript =valor2.substring(tamano,tamano-9);
        var inicioAlert = valor2.substring(8,15);
        var finAlert = valor2.substring(tamano-9,tamano-12);
        var contenido = valor2.substring(15,tamano-12);
        if (inicioScript == "<script>" && finScript == "<\/script>") {
          if((inicioAlert == "alert('" || inicioAlert == 'alert("' ) 
            && (finAlert == "');" || finAlert =='");') ){
            alert(contenido);
          }else{alert("nook");}
          } else {
                 alert("paila");
      }


        //alert(contenido);
        
      });
    });
  </script> 


  <script>
    $( document ).ready(function($nombre) {
      $("#obtenerRfi").click(function() {
        var valor=$("#nombre").val();
        /*le quitamos todos los espacio*/
        if (valor.length>0) {
          var valor2=valor.replace(/\s/g,"");
        var pagVul = valor2.substring(0,34);
        var pagAta = valor2.substring(34,54);
        var shell = valor2.substring(54,70);
        var carpeta1 = valor2.substring(70,81);
        var carpeta2 = valor2.substring(81,87);
        
       
       
        
        /*analizamos la estructura de la variable*/
       if (pagVul == "http://soyjuan.com/index.php?page=") {
          if(pagAta == "http://soyalejo.com/"){
            if (shell == "shell.txt&cmd=ls") {
              if (carpeta1 == "/principal/") {
                if (carpeta2== "Bancos") {
                  alert("Felicitaciones has encontrado la carpeta correcta");
                  return mostrarR();
                }else{
                  alert("Carpeta no encontrada");
                }
              }else{
                alert("Carpeta no encontrada");
              }

            }else{
              alert("Shell no encontrado");
            }
          }else{alert("Pagina atacante incorrecta");}
        } else {
                 alert("Pagina vulnerable incorrecta");
                 
      }


        }else{alert("Por favor ingresa una direccion");
        }
       // alert("paila");
        
      });
    });
  </script> 
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
