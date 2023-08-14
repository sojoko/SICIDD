<?php 
    require("../controlador/plantillas/header.php")
 ?>
    <!--
            <section class="hero">                
                <div class="contenedor-banner">
           
                    <div class="caja-b">                 
                    <h2>Postres hechos con amor</h2>  
                    <p>Somos un emprendimiento familiar que desea que obtengas la mas grata experiencia culinaria </p>    
                    <p>Hacemos los postres exactamente como tu quieres</p>   
                    <br>
                    <a href="">CONOCER MAS</a>
                    </div> 
               
                </div>     
            </section>
            -->



<div class="k1">
    <div class="contenedor_todo">
        <input type="radio" id="1" name="image-slide" hidden/>
        <input type="radio" id="2" name="image-slide" hidden/>
        <input type="radio" id="3" name="image-slide" hidden/>

        <div class="slider">
            <div class = "item_slide">
                <img src="img/hero01.png" alt="">
            </div>
            <div class = "item_slide">
                <img src="img/hero2.png" alt="">
            </div>   
            <div class = "item_slide">
                <img src="img/hero3.png" alt="">
            </div>         
        </div>   
            
        <div class="pagination">
            <label for="1" class="pagination-item">
                <img src="img/hero01.png" alt="">
            </label>
            <label for="2" class="pagination-item">
                <img src="img/hero2.png" alt="">
            </label>
            <label for="3" class="pagination-item">
                <img src="img/hero3.png" alt="">
            </label> 
        </div>
    </div>
</div>


    <section class="personaliza">          
    </section>

    <section class="clientes-felices">
    </section>

<?php 
    require("../controlador/plantillas/footer.php")
 ?>