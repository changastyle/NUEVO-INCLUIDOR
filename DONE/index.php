      
      <head>
      
      
            <!-- COLOR BARRA : -->
            <meta content="width=device-width, user-scalable=no" name="viewport">
            <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
            <meta name="theme-color" content="#E36B2C">
      
            <!-- FAVICON : -->
            <link rel="icon" href="assets/images/apmticon.ico" />
      
      
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.js"></script>
      
            <!-- BS4: -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      
            <!-- FONT AWESOME: -->
            <script src="https://kit.fontawesome.com/01ed377a67.js" crossorigin="anonymous"></script>
            
            <!-- FONTS: -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
            
      
            
      
      
      
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="theme-color" content="#F38F1F">
      
            <!-- FAVICON : -->
            <link rel="icon" href="http://viewdevs.com.ar:8081/upload/email-marketing/iconos/favicon.png" />
      
            <!-- CDN REMOTO: -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="https://kit.fontawesome.com/01ed377a67.js" crossorigin="anonymous"></script>
            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
            <!--font-family: 'Lato', sans-serif;-->
      
            <style>
            @font-face {
                  font-family: "vraoum";
                  src: url("../res/fonts/vraoum.ttf");
            }
            </style>
            <!-- DE ACA SE PUEDE BORRAR: -->
            <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
            <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" rel="stylesheet" /> -->
            <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
            <!-- <script async defer src="https://apis.google.com/js/platform.js"></script> -->
      
      
      
      
      
      </head><body ng-app="app" ng-controller="ctl" ng-init="init()" ng-cloak class="body sin-padding col-12">		<div class="cont-menu col-12 sin-padding flex">
		
		
		      <!-- MENU IZQ: -->
		      <div class="col-4  flex flex-center-v">
		      
		            <img class="img-menu-logo" ng-src="{{URL_UPLOADS + 'PERSONAJE.jpg'}}">
		      
		            <h3 class="h-menu-logo white flex-center-v ">
		                  NO TENGO PACIENCIA
		            </h3>
		      </div>
		      
		      <style>
		            .img-menu-logo {
		                  border-radius: 50px;
		                  height: 50px;
		                  width: 50px;
		      
		            }
		      
		            .h-menu-logo {
		                  padding-left: 25px;
		                  padding-top: 10px;
		                  font-family: 'vraoum';
		            }
		      </style>		
		      <!-- MENU MID: -->
		      <div class="col-4  flex-center-h flex-center-v">
		      
		            <div class="cont-addon-busqueda input-group">
		                  <input type="text" class="form-control" placeholder="Busque aqui.." ng-model="busqueda">
		                  <div class="input-group-append">
		                        <span class="input-group-text" ng-click="buscar()">
		                              <i class="fa-solid fa-magnifying-glass"></i>
		                        </span>
		                  </div>
		            </div>
		      </div>
		      
		      <style>
		            .cont-addon-busqueda {
		                  border-radius: 30px;
		                  overflow: hidden;
		            }
		      </style>
		      
		
		      <!-- MENU DER: -->
		      <div class="col-4 flex-center-h flex-center-v white pointer" ng-click="openCloseMenuFlotante()">
		      
		            <img class="img-usr-logeado " style='background-image:url({{urlUpload + "nico.jpg"}})'>
		            <span class="nombre-usr-logeado">
		                  Nicolas Grossi
		            </span>
		      </div>
		      
		      <style>
		            .img-usr-logeado {
		                  height: 50px;
		                  width: 50px;
		      
		                  border-radius: 50px;
		                  background-size: cover;
		                  background-repeat: no-repeat;
		                  background-position: center center;
		            }
		      
		            .nombre-usr-logeado {
		                  padding-left: 15px;
		                  font-size: 20px;
		            }
		      </style>
		
		
		</div>
		
		
		<div id="g_id_onload" data-client_id="YOUR_GOOGLE_CLIENT_ID" data-login_uri="https://your.domain/your_login_endpoint"
		      data-your_own_param_1_to_login="any_value" data-your_own_param_2_to_login="any_value">
		</div>
		
		<!-- MENU FLOTANTE: -->
		<div class="cont-menu-flotante col-4 offset-8" ng-show="menuFlotanteAbierto">
		
		      <!-- MIS CURSOS:-->
		      <div class="item-menu-flotante flex">
		            <span class="flex-center-v ">
		                  <i class="fa-regular fa-heart"></i>
		            </span>
		            <span class="h-menu-flotante  flex-center-v">
		                  Mis Cursos
		            </span>
		      </div>
		
		      <!-- MIS DESEOS:-->
		      <div class="item-menu-flotante flex">
		            <span class="flex-center-v">
		                  <i class="fa-regular fa-cart-shopping"></i>
		            </span>
		            <span class="h-menu-flotante  flex-center-v">
		                  Mis Deseos
		            </span>
		      </div>
		
		      <!-- MIS NOTIFICACIONES:-->
		      <div class="item-menu-flotante flex">
		            <span class="flex-center-v">
		                  <i class="fa-regular fa-bell"></i>
		            </span>
		            <span class="h-menu-flotante  flex-center-v">
		                  Mis Notificaciones
		            </span>
		      </div>
		
		
		</div>
		
		<style>
		      .cont-menu-flotante {
		            position: fixed;
		            z-index: 999;
		            background-color: #3F3C3C;
		            color: white;
		      }
		
		      .item-menu-flotante {
		            padding: 25px;
		            font-size: 20px;
		      }
		
		      .h-menu-flotante {
		            padding-left: 10px;
		      }
		</style>		
		<style>
		      .cont-menu {
		            height: 80px;
		            background-color: black;
		            position: sticky;
		      }
		</style>		<br>
		<div class="separador-body">
		      <div class="cont-carrusel flex col-12 ">
		      
		          <div class="flecha-izq-carrusel white flex-center-v " ng-click="prevFilminaCarru()">
		              <div class="centrador-flecha-izq-carrusel flex-center-h flex-center-v ">
		                  <i class="fa-solid fa-chevron-left"></i>
		              </div>
		          </div>
		      
		          <div class="cont-real-carrusel" id="filmina-carrusel">
		          </div>
		          <div id="filmina-carrusel-2">
		          </div>
		      
		      
		          <div class="flecha-der-carrusel white  flex-center-v " ng-click="nextFilminaCarru()">
		              <div class="centrador-flecha-der-carrusel flex-center-h flex-center-v ">
		                  <i class="fa-solid fa-chevron-right"></i>
		              </div>
		          </div>
		      
		      </div>
		      
		      <style>
		          .cont-carrusel {
		              height: 600px;
		          }
		      
		          .cont-real-carrusel {
		              /* background-color: white; */
		              height: 100%;
		              width: 100%;
		              /* background-position: top center; */
		              background-size: cover;
		              background-repeat: no-repeat;
		              -webkit-animation: slide 0.5s forwards;
		              animation: slide 0.5s forwards;
		              animation-delay: 2s;
		              /* transition: 1s; */
		              /* border: solid 1px red; */
		          }
		      
		          @-webkit-keyframes slide {
		              100% {
		                  left: 0;
		              }
		          }
		      
		          @keyframes slide {
		              100% {
		                  left: 0;
		              }
		          }
		      
		          .flecha-izq-carrusel {
		              width: 50px;
		              height: 600px;
		              position: absolute;
		          }
		      
		          .flecha-der-carrusel {
		              width: 50px;
		              height: 600px;
		              position: absolute;
		              right: 12px;
		          }
		      
		          .centrador-flecha-izq-carrusel {
		              height: 50px;
		              width: 50px;
		              background-color: black;
		              cursor: pointer;
		              border-radius: 50px;
		              position: relative;
		              left: -25px;
		          }
		      
		          .centrador-flecha-der-carrusel {
		              height: 50px;
		              width: 50px;
		              background-color: black;
		              cursor: pointer;
		              border-radius: 50px;
		              position: relative;
		              left: 25px;
		          }
		      </style>
		      <div class="cont-cursos-recomendados">
		      
		            <h3 class="h-cursos-recomenados">
		                  Cursos Recomendados
		            </h3>
		      
		            <div class="cont-lateral-cursos-recomendados flex-wrap">
		      
		                  <div class="separador-item-curso-recomendado col-4 sin-padding" style="padding-right: 60px;"
		                        ng-repeat="curso in arrCursosRecomendados">
		      
		                        <div class="item-curso-recomendado">
		      
		                              <div class="img-item-curso" style='background-image:url({{urlUpload + curso.imagen}})'>
		                              </div>
		                              <div class="cont-cuerpo-item-curso">
		      
		                                    <h3 class="h-curso-recomendado">
		                                          {{curso.nombre}}
		                                    </h3>
		      
		                                    <div class="cont-texto-item-curso bsr"
		                                          ng-class="{'true':'max-height-auto','false':'max-height-100' }[curso.verMas]">
		                                          {{curso.descripcion}}
		                                    </div>
		      
		                                    <h6 class="ver-mas-item-curso pointer flex-center-h blue pt-2"
		                                          ng-click="curso.verMas = !curso.verMas">
		                                          <i class="fa-solid fa-plus pr-2 "></i>
		                                          Ver Mas
		                                    </h6>
		      
		                              </div>
		      
		                        </div>
		                  </div>
		            </div>
		      </div>
		      <style>
		            .h-cursos-recomenados {
		                  margin-top: 150px;
		                  margin-bottom: 150px;
		                  font-size: 38px;
		                  font-weight: bold;
		                  padding-left: 10px;
		                  font-family: 'Source Sans Pro', sans-serif;
		            }
		      
		            .separador-item-curso-recomendado {
		                  height: 700px;
		            }
		      
		            .item-curso-recomendado {
		                  background-color: white;
		                  border-radius: 30px;
		                  overflow: hidden;
		            }
		      
		            .cont-cuerpo-item-curso {
		                  padding: 15px;
		            }
		      
		            .h-curso-recomendado {
		                  font-size: 32px;
		                  font-weight: bold;
		                  font-family: 'Source Sans Pro', sans-serif;
		            }
		      
		            .img-item-curso {
		                  height: 300px;
		                  background-color: grey;
		            }
		      
		            .cont-texto-item-curso {
		                  min-height: 30px;
		                  color: #848484;
		                  font-size: 22px;
		                  font-family: 'Source Sans Pro', sans-serif;
		                  font-weight: bold;
		      
		            }
		      
		            .max-height-100 {
		                  max-height: 100px;
		                  overflow: hidden;
		                  display: -webkit-box;
		                  -webkit-line-clamp: 3;
		                  -webkit-box-orient: vertical;
		                  width: 100%;
		      
		            }
		      
		            .max-height-auto {
		                  max-height: auto;
		            }
		      </style>
		
		      {{URL_UPLOADS}}
		
		</div>
		
		<style>
		      .separador-body {
		            padding: 50px;
		      }
		</style>
		
	</body>	<script>      app = angular.module('app', ['ngSanitize']);
      app.controller('ctl', function ($scope)
      {	      $scope.URL_UPLOADS = "http://localhost/notengopaciencia/UPLOADS/";
	      $scope.$evalAsync();
	      // $scope.urlUploads = "localhost";
	      $scope.buscar = function ()
	      {
	            console.log("BUSCANDO : " + $scope.busqueda);
	      }
	      $scope.menuFlotanteAbierto = false;
	
	      $scope.openCloseMenuFlotante = function ()
	      {
	            // if($scope.menuFlotanteAbierto)
	            // {
	            //
	            // }
	            $scope.menuFlotanteAbierto = !$scope.menuFlotanteAbierto;
	            $scope.$evalAsync();
	      }
	    $scope.arrFotosCarru = [
	        { "fullFoto": "foto1.jpg", "y": 80 },
	        { "fullFoto": "foto4.jpg", "y": 20 },
	        { "fullFoto": "foto6.jpg", "y": 20 }
	    ];
	
	    $scope.posFilminaCarru = 0;
	    $().ready(function ()
	    {
	        console.log("READY CARRUSEL:");
	        $scope.setearFilminaCarru();
	
	    })
	
	    $scope.setearFilminaCarru = function ()
	    {
	        if ($scope.posFilminaCarru > $scope.arrFotosCarru.length - 1)
	        {
	            $scope.posFilminaCarru = 0;
	        }
	
	        if ($scope.posFilminaCarru == -1)
	        {
	            $scope.posFilminaCarru = $scope.arrFotosCarru.length - 1;
	        }
	        $("#filmina-carrusel").css('background-image', 'url(' + $scope.URL_UPLOADS + $scope.arrFotosCarru[$scope.posFilminaCarru].fullFoto + ')');
	        $("#filmina-carrusel").css('background-position', '0 ' + $scope.arrFotosCarru[$scope.posFilminaCarru].y + '%');
	        $("#filmina-carrusel-2").html($scope.URL_UPLOADS + $scope.arrFotosCarru[$scope.posFilminaCarru].fullFoto + " >> " + $scope.posFilminaCarru);
	    }
	
	    $scope.nextFilminaCarru = function ()
	    {
	        $scope.posFilminaCarru++;
	        $scope.$evalAsync();
	        $scope.setearFilminaCarru();
	    }
	    $scope.prevFilminaCarru = function ()
	    {
	        $scope.posFilminaCarru--;
	        $scope.$evalAsync();
	        $scope.setearFilminaCarru();
	    }
	
	      $scope.getLorem = function ()
	      {
	            console.log("GETTING LOREM!");
	            $.ajax(
	                  {
	                        url: "https://baconipsum.com/api/?type=meat-and-filler",
	                        beforeSend: function (xhr)
	                        {
	                        },
	                        success: function (resultado, textStatus, jqXHR)
	                        {
	                              $scope.lorem = resultado[0];
	
	
	                              $scope.arrCursosRecomendados = [
	                                    { "id": 1, "nombre": "Crea tu primer sitio web", "visitantes": 5888, "descripcion": $scope.lorem, "precio": 2990, "imagen": "curso1.jpg", "verMas": false },
	                                    { "id": 1, "nombre": "Bases de datos", "visitantes": 7888, "descripcion": "lallaa", "precio": 2990 },
	                                    { "id": 1, "nombre": "BackEnd Node", "visitantes": 6888, "descripcion": "lallaa", "precio": 2990 },
	                              ];
	
	                              $scope.$evalAsync();
	                        }
	
	                  });
	
	
	      }
	
	
	
	
	
	      $scope.init = function ()
	      {
	            $scope.getLorem();
	      }
	});      </script>
      
      </div>
      </div>
      
      <!-- SNACKBAR:-->
      <!--<div id="snackbar">Some text some message..</div>-->
      
      <div class="footer" >
          <!-- Un producto de View Devs Company -->
      </div>
      
      
      
      <style>
      .sin-padding
      {
          padding-left: 0px;
          padding-right: 0px;
      }
      .flex-nico {
          display: flex;
      }
      .flex-wrap {
          display: flex;
          flex-flow: wrap;
      }
      .bsr
      {
          border: solid 1px red;
      }
      .bsb
      {
          border: solid 1px blue;
      }
      .bsg
      {
          border: solid 1px green;
      }
      .bso
      {
          border: solid 1px orange;
      }
      .flex-justify
      {
          display: flex;
          justify-content: space-between;
          /*align-items: center;*/
      }
      .flex-baseline
      {
      }
      .flex-center
      {
          display: flex;
          justify-content: center;
          align-items: center;
      }
      .flex-top
      {
          align-items: start;
      }
      .flex-center-h
      {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
      }
      .flex-center-V
      {
          display: flex;
          flex-wrap: wrap;
          align-items: center;
      }
      .flex-start
      {
          display: flex;
          justify-content: start;
          align-items: center;
      }
      .flex-right
      {
          display: flex;
          justify-content: end;
          align-items: center;
      }
      .flex-column
      {
          display: flex;
          flex-direction: column;
      }
      .center
      {
          text-align: center;
      }
      .input-nico
      {
          border-radius: 5px;
      }
      .text-left
      {
          text-align: left;
      }
      .    .pointer {
          cursor: pointer;
      }
      .br-50
      {
          border-radius: 50px;
      }
      
      @font-face
      {
          font-family: Kashie;
          src: url('../res/fonts/KashieMercy.ttf');
      }
      .botonera
      {
          margin-bottom: 12px;
      }
      .head
      {
          font-weight: bold;
          text-align: center;
          font-family: 'Montserrat', sans-serif;
      }
      .btn-bold
      {
          font-weight: bold;
      }
      .sin-padding
      {
          padding-left:0px;
          padding-right: 0px;
      }
      .sin-padding-left
      {
          padding-left:0px;
      }
      .sin-padding-right
      {
          padding-right: 0px;
      }
      .transparencia
      {
          background-color: rgba(0,0,0,0.25);
          margin-top:0px;
          margin-left: 0px;
          margin-right: 0px;
          position: absolute;
          top:0px;
          left: 0px;
          right: 0px;
          bottom: 0px;
          height: 100%;
          width: 100%;
      }
      .btn-redondito
      {
          border-radius: 25px;
      }
      .h
      {
          background-color:#1abc9c;
          color: white;
          text-align: center;
          margin-top:0px;
          padding: 0px;
      }
      *
      {
          font-family: 'Lato', sans-serif;
      //font-family: 'Montserrat', sans-serif;
      }
      .sin-padding
      {
          padding-left: 0px;
          padding-right: 0px;
      }
      .sin-padding-left
      {
          padding-left: 0px;
      }
      .sin-padding-right
      {
          padding-right: 0px;
      }
      .hr
      {
          display: block;
          height: 1px;
          border: 0;
          border-top: 1px solid lightgrey;
          margin: 1em 0;
          padding: 0;
      }
      .contenedor-img-cargando
      {
          background-color: white;
          border-radius: 6px;
          border-radius: solid 1px grey;
          padding: 12px;
      }
      .h-cargando
      {
      
          text-align: center;
      }
      .verde , .verde:hover
      {
          color: #1abc9c;
      }
      .bold
      {
          font-weight: bold;
      }
      .bg-verde , .bg-verde:hover
      {
          background-color: #1abc9c;
          cursor: pointer;
          border: solid 1px #1abc9c;
      }
      .azul
      {
          color: blue;
      }
      .rojo , .rojo:hover
      {
          color: red;
      }
      .bg-rojo , .bg-rojo:hover
      {
          background-color: red;
          cursor: not-allowed;
          border: solid 1px red;
      }
      .amarillo
      {
          color: #f1c40f;
      }
      .contenido-ampliado
      {
          width: 100%;
          margin-left: 0px;
          transition: 1s;
      }
      .contenido-achicado
      {
          width: calc(100% - 100px);
          margin-left: 100px;
          transition: 1s;
      }
      .center
      {
          text-align: center;
      }
      .yellow
      {
          color: #f39c12;
      }
      .h-separador-2
      {
          margin-top: 0px;
          margin-bottom: 12px;
          height: 50px;
          overflow: hidden;
          padding: 0px;
      //border: solid 1px red;
      }
      .campo-0-h-separador-2
      {
          background-color: #14967C;
          color: white;
          text-align: center;
          font-weight: bold;
          padding: 12px;
          font-size: 24px;
          cursor:pointer;
          height: 50px;
      }
      .campo-1-h-separador-2
      {
          background-color: var(--verde);
          color: white;
          text-align: left;
          font-weight: bold;
          padding: 12px;
          font-size: 24px;
          cursor:pointer;
          overflow: hidden;
          text-overflow: ellipsis;
          word-wrap: break-word;
          height: 50px;
      }
      .campo-2-h-separador-2
      {
          background-color: #14967C;
          color: white;
          text-align: center;
          font-weight: bold;
          padding: 12px;
          font-size: 24px;
          overflow: hidden;
          text-overflow: ellipsis;
          word-wrap: break-word;
          height: 50px;
      }
      .campo-2-h-separador-2-rojo
      {
          background-color: var(--rojo);
          color: white;
          text-align: center;
          font-weight: bold;
          padding: 12px;
          font-size: 24px;
          overflow: hidden;
          text-overflow: ellipsis;
          word-wrap: break-word;
          height: 50px;
      }
      .campo-2-h-separador-2-verde
      {
          background-color: #14967C;
          color: white;
          text-align: center;
          font-weight: bold;
          padding: 12px;
          font-size: 24px;
          overflow: hidden;
          text-overflow: ellipsis;
          word-wrap: break-word;
          height: 50px;
      }
      .flex
      {
          display: flex;
          flex-wrap: wrap;
      }
      .btn-transparente , .btn-transparente:hover , .btn-transparente:focus , .btn-transparente:active ,  .btn-transparente:visited
      {
          background-color: transparent;
          border: solid 0px transparent;
      //cursor: initial;
      }
      body
      {
          background-color:#e0e0e0;
          /*min-width: 400px;*/
      }
      .hx
      {
          text-align: center;
          font-size: 24px;
      //background-color: #2DB2A4;
          background-color: lightgrey;
          padding: 25px;
          color: white;
          border-radius: 6px;
      }
      .cuadraditos
      {
          transition:0.5s;
          padding:10px;
          cursor:pointer;
          margin-bottom: 25px;
          border: solid 1px lightgrey;
          border-radius: 6px;
          background-color: white;
      }
      .cuadraditos:hover
      {
          background-color: #2DB2A4;
          transition:0.5s;
          color:white;
          box-shadow: 1px 1px 25px black;
          border: solid 0px transparent;
      }
      .cuadraditos:hover a
      {
          color:white;
          transition:0.5s;
      }
      .cuadraditos a
      {
          color: white;
          text-decoration: none;
          font-size: 24px;
          text-align: left;
          font-family: 'Raleway', sans-serif;
          font-weight: 700;
          letter-spacing: 1px;
          color: #59575a;
      //border: solid 1px red;
      }
      .listado-izquierdo::-webkit-scrollbar
      {
          display: none;
      }
      .listado-izquierdo
      {
          position: fixed;
          padding-top:50px;
          height:100%;
          background-color: lightgrey;
          overflow-x: hidden;
          overflow-y: scroll;
      }
      .h3
      {
          text-align: center;
      }
      .list-group-item
      {
          cursor:pointer;
          transition: 0.5s;
      }
      .list-group-item:hover
      {
          background-color: #2DB2A4;
          color:white;
          transition: 0.5s;
          cursor:pointer;
          transform: scale(1.08);
          z-index: 100;
      }
      .banner
      {
          background-color: #2DB2A4;
          color:white;
          border-bottom: solid 0px transparent;
          position:fixed;
          top:0px;
          left: 0px;
          right: 0px;
          z-index: 10;
      }
      .grilla-marcadores
      {
          background-color:#e0e0e0;
          /*padding-left:12px;*/
          /*padding-right:12px;*/
          box-sizing: border-box;
      }
      .imgs-circulos
      {
          background-size: cover;
          background-position: center center;
          height: 150px;
          width: 150px;
      }
      .hx
      {
          cursor:pointer;
      }
      .item-listado-acciones
      {
          text-overflow:ellipsis;
          overflow: hidden;
          margin-bottom: 12px;
          border-radius: 6px;
      }
      .contenedor-listado-seleccionados
      {
          /*        display: flex;
                  flex-wrap: wrap;
                  align-items: center;*/
          /*justify-content: center;*/
      }
      .item-grupos
      {
          cursor: pointer;
          background-color: white;
          border-radius: 6px;
          /*border: solid 1px #0062E6;*/
          margin-bottom: 12px;
          /*width: 250px;*/
          display: flex;
          border-radius: 6px;
          align-items: center;
          margin-right: 0px;
          overflow: hidden;
          padding: 8px;
      }
      .contenedor-img-rel
      {
          /*border: solid 1px red;*/
          width: 50px;
          height: 50px;
          margin-left: 0px;
          margin-right: 0px;
          display: inline-block
      }
      .cont-texto-rel
      {
          z-index: 2;
          /*border: solid 1px yellow;*/
          width: calc(100% - 100px);
          height: auto;
          justify-content: center;
          align-items: center;
          display: inline-block;
          padding-left: 12px;
          white-space: nowrap;
          overflow: hidden;
          text-overflow: ellipsis;
          word-break: break-all;
          overflow: hidden;
      
      }
      .cont-der-rel
      {
          background-color: #18BB9C;
          color: white;
          /*border: solid 1px red;*/
          width: 50px;
          height: 100%;
          margin: 10px;
          justify-content: center;
          align-items: center;
          display: inline-block;
          /*padding-left: 12px;*/
          padding-top:10px;
          padding-bottom: 10px;
          /*position: relative;*/
          /*top:0px;*/
          text-align: center;
          border-radius: 6px;
      }
      .nombre-rel
      {
          font-size: 24px;
          /*vertical-align: middle;*/
          /*height: 50px;*/
          /*line-height: 50px;*/
      }
      .email-rel
      {
          font-size: 12px;
          color:grey;
          /*vertical-align: middle;*/
          /*height: 50px;*/
          /*line-height: 50px;*/
      }
      .img-rel
      {
          border: solid 1px green;
          width: 100%;
          height: 100%;
          /*height: 80px;*/
      }
      .tilde-rel
      {
          position: relative;
          left: 5px;
          top: -55px;
          /*border: solid 1px blue;*/
          height: 70px;
          width: 70px;
          font-size: 40px;
          text-align: center;
      }
          .footer
          {
              background-color: var(--secundario);
              color: white;
              text-align: center;
              padding: 25px;
      
          }
          .white
          {
              color: white;
          }
          .blue
          {
              color: #2980b9;
          }
          .pointer
          {
              cursor: pointer;
          }
      </style></html>