<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vistas/css/style2.css">

    <title>Document</title>
</head>
<body>
<header>
    <a href="../index.php">
        <div class="logosi2">
            <img src="img/logoaza2.png" alt="">        
        </div> 
    </a>
    
    <div class="logosi">
        <img src="img/siciddlogo.png" alt="">
    </div>
   
</header>


  <h2>CUBIERTAS</h2>
  
  <!--contenedor de la fila de cajas de las cubiertas --> 
    <div class="contenedor_cubiertas">
     
        <a href="#" data-title="CHOCOLATE" >
           <div class="cubierta_c" id="cubierta_c">
            
           </div>
        </a>
       
         <a href="#" data-title="MERENGUE SUIZO">
            <div class="cubierta_m" id="cubierta_m">
             
            </div> 
         </a>
         <a href="#" data-title="CREMA PASTELERA">
            <div class="cubierta_p" id="cubierta_p">
             
            </div>
         </a>
         <a href="#" data-title="DULCE DE LECHE">
            <div class="cubierta_d" id="cubierta_d">
             
            </div>
         </a>
         <a href="#">
            <div id="boton2" class="boton2">
                <p>QUITAR CUBIERTA</p>
            </div>
        </a>
       
    </div>

    
   <h2> AGREGADOS Y DECORACIONES </h2>

    <!-- contenedor de la fila de cajas de los agregados -->

    <div class="contenedor">
        <a href="#" data-title="fresas">
            <div class="cajita1" id="cajita1">   
            
            </div>
        </a> 
        <a href="#" data-title="oreo">
            <div class="cajita2" id="cajita2">   
            
            </div>
        </a>
        <a href="#" data-title="m y m">
            <div class="cajita3" id="cajita3">   
            
            </div>
        </a>

        <a href="#">
            <div id="boton" class="boton1">
                <p>QUITAR AGREGADO</p>
            </div>
        </a>
        
      
        

        <div>
            
        </div>

    </div>


    <div class="contenedor_principal">    
       

            <div class="contenedor-texto-dinamico">
                    <p id="text1" class="text"></p>
                    <p id="text2" class="text"></p>
                    <p id="text3" class="text"></p>
                    <p id="text4" class="text"></p>
            </div>
        
            <div class="caja-principal" id="caja-principal">
            </div>
    
            <div class="contenedor_botones_inf">
                <a href="../index.php">
                    <div id="boton" class="boton4">
                        <p>VOLVER A LA PAGINA DE INICIO</p>
                    </div>
                </a>
                <a href="#">
                    <div id="botonC" class="boton4" onclick="funcionC();">
                        <p>  X COMPRAR</p>
                    </div>
                </a>
            </div>
      
    </div>

    
    <footer>
        <div class="foot-contenedor">
            <div class="footer2">
                <div>
                    <img src="img/logoblanco.png" alt="logofooter" width="200px">                     
                </div>
                <div>
                    <p>Telefono: 3204619680</p>
                    <p>instagram: @azaharepost</p>
                    <p>Dirección: Calle 27#4-36</p>
                </div>
            </div>
            <div class="footer1">
                <p>Diseñado y desarrollado por: Jonhathan Sojo</p>
                <p> &copy; Todos los derechos reservados</p>
                
            </div>
           
         </div>
    
    </footer>

   
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../scripts/scrip.js"></script>
<script src="../scripts/sw2.js"></script>
</body>
</html>