

    var cajita1 = document.getElementById('cajita1'),
        cajaPrincipal = document.getElementById('caja-principal'),
        botonA = document.getElementById('boton'),
        botonB = document.getElementById('boton2'),
        cajita2 = document.getElementById('cajita2'),
        cajita3 = document.getElementById('cajita3'),
        cubierta_c = document.getElementById('cubierta_c'),
        cubierta_p = document.getElementById('cubierta_p'),
        cubierta_m = document.getElementById('cubierta_m'),
        cubierta_d = document.getElementById('cubierta_d'),
        text = document.getElementById('text1'),
        text = document.getElementById('text2'),
        text = document.getElementById('text3'),
        text = document.getElementById('text4'),


     // contadores para guardar estado de las cubiertas
        contador_h1_1 = 0;
        contador_h1_2 = 0;
        contador_h2_1 = 0;
        contador_h2_2 = 0;
        contador_h3_1 = 0;
        contador_h3_2 = 0;
        contador_h4_1 = 0;
        contador_h4_2 = 0;
        var codigo= '';


     // contadores para guardar estado de las toppings
        contador_c1_2 = 0;
        contador_c1_1 = 0;
        contador_c2_1 = 0;
        contador_c2_2 = 0;

      // otros contadores
        var x1 = 0;
        var x2 = 0;
        var x3 = 0;
        var d1 = 0;
        var c1 = 0;
        var c2 = 0;
        
      


           
    
      // funciones que cambian el cursos y preparan el cambio de estado de la caja principal
      // para las cubiertas
        function cambio_h1(){
            if(contador_h1_1 == 0){
                cubierta_c.classList.add('cambio1');                       
                cajaPrincipal.classList.add('c_chocolate');
                contador_h1_1 =1;               
                c2 = 1;
                console.log(c2);
                
            }
            else{
                cubierta_c.classList.remove('cambio1')
                cajaPrincipal.classList.remove('c_chocolate');
                contador_h1_1 =0;
                
             
                
            }

        }

    
        function cambio_h2(){
            if(contador_h1_1 == 0){
                cubierta_m.classList.add('cambio1');                       
                cajaPrincipal.classList.add('c_merengue');
                contador_h1_1 =1;                
                c2 = 2;
                console.log(c2);
               
            }
            else{
                cubierta_m.classList.remove('cambio1')
                cajaPrincipal.classList.remove('c_merengue');
                contador_h1_1 =0;
              
            }

        }

      
        /*

        function cambio_h3(){
            if(contador_h2_1 == 0){
                cubierta_p.classList.add('cambio1');                       
                cajaPrincipal.classList.add('c_pastelera');
                contador_h2_1 =1;
                contador_h2_2 = 1;
            }
            else{
                cubierta_p.classList.remove('cambio1')
                cajaPrincipal.classList.remove('c_pastelera');
                contador_h2_1 =0;
            }

        }


        function cambio_h4(){
            if(contador_h4_1 == 0){
                cubierta_d.classList.add('cambio1');                       
                cajaPrincipal.classList.add('c_dulce');
                contador_h4_1 =1;
                contador_h4_2 = 1;
            }
            else{
                cubierta_d.classList.remove('cambio1')
                cajaPrincipal.classList.remove('c_dulce');
                contador_h4_1 =0;
            }

        }

        */
    
       
        // sentencias que ejecutan los cambios de cursor y preparacion para las
        // cubiertas

        cubierta_c.addEventListener('click',cambio_h1,true)
        cubierta_m.addEventListener('click',cambio_h2,true)
       // cubierta_p.addEventListener('click',cambio_h3,true)
       // cubierta_d.addEventListener('click',cambio_h4,true)


        

    // cambios de cursores, fondo de la caja y preparacion para los agregados


    function cambio_c1(){
        if(contador_c1_1 == 0){
            cajita1.classList.add('cambio1');                       
            cajaPrincipal.classList.add('fresa');
            contador_c1_1 =1;
            contador_c1_2 = 1;
            x1 = 1;
        }
        else{
            cajita1.classList.remove('cambio1')
            cajaPrincipal.classList.remove('fresa');
            contador_c1_1 =0;
            x1 = 0;
        }

    }

    
    function cambio_c2(){
        if(contador_c2_1 == 0){
            cajita2.classList.add('cambio1');                       
            cajaPrincipal.classList.add('oreo');
            contador_c2_1 =1;
            contador_c2_2 = 1;
            x1 = 2;
        }
        else{
            cajita2.classList.remove('cambio1')
            cajaPrincipal.classList.remove('oreo');
            contador_c2_1 =0;
            x1 = 0;
        }

    }

    function cambio_c3(){
        if(contador_c2_1 == 0){
            cajita3.classList.add('cambio1');                       
            cajaPrincipal.classList.add('mym');
            contador_c2_1 =1;
            contador_c2_2 = 1;
            x1 = 3;
        }
        else{
            cajita3.classList.remove('cambio1')
            cajaPrincipal.classList.remove('mym');
            contador_c2_1 =0;
            x1 = 0;
        }

    }


// sentencias que ejecutan las funciones de preparacion y cambio de cursor
// de los toppings 

    cajita1.addEventListener('click',cambio_c1,true)     
    cajita2.addEventListener('click',cambio_c2,true)
    cajita3.addEventListener('click',cambio_c3,true)
    
   
 // funciones que cambian las cubiertas

 function cambio1_CC(){
        cajaPrincipal.classList.remove('cubierta_merengue');
        cajaPrincipal.classList.add('cubierta_chocolate');       
        cubierta_c.classList.remove('cambio1');
        cajaPrincipal.classList.remove('c_chocolate');  
        contador_h1_1 =0;                    
        d1 = 1;
        c1 = 1;
    
           
}

function cambio1_CMS(){
    
        cajaPrincipal.classList.add('cubierta_merengue');       
        cubierta_m.classList.remove('cambio1');
        cajaPrincipal.classList.remove('c_merengue');                      
        contador_h1_1 =0;
        d1 = 2;
        c1 = 1;
     
           
}

 //funciones que cambian los agregados a la cubierta de chocolate


    function cambio1_CF(){
     
        if(contador_c1_2 == 1){
            cajaPrincipal.classList.remove('chocomym');
            cajaPrincipal.classList.remove('chocooreo');
            cajaPrincipal.classList.add('chocofresa');
            cajita1.classList.remove('cambio1');
            cajaPrincipal.classList.remove('fresa');                      
            contador_c1_1 =0;
            contador_c1_2 =0;    
            codigo = "01";            
            x2 = 1;  
             
          
            
        }   
           
    }

    function cambio1_CO(){
        if(contador_c2_2 == 1){
            cajaPrincipal.classList.remove('chocomym');
            cajaPrincipal.classList.remove('chocofresa');
            cajaPrincipal.classList.add('chocooreo');
            cajita2.classList.remove('cambio1');
            cajaPrincipal.classList.remove('oreo');                      
            contador_c2_1 =0;
            contador_c2_2 =0;        
            codigo = "02";        
            x2 = 1;
            
        }   
           
    }

    function cambio1_CM(){
        if(contador_c2_2 == 1){
            cajaPrincipal.classList.remove('chocooreo');
            cajaPrincipal.classList.remove('chocofresa');
            cajaPrincipal.classList.add('chocomym');
            cajita3.classList.remove('cambio1');
            cajaPrincipal.classList.remove('mym');                      
            contador_c2_1 =0;
            contador_c2_2 =0;    
            codigo = "03";            
            x2 = 1;
           
            
        }   
           
    }

 //funciones que cambian los agregados a la cubierta de merengue

 function cambio1_MF(){
    if(contador_c1_2 == 1){
        cajaPrincipal.classList.remove('merengueMym');
        cajaPrincipal.classList.remove('merengueOreo');
        cajaPrincipal.classList.add('merengueFresa');
        cajita1.classList.remove('cambio1');
        cajaPrincipal.classList.remove('fresa');                      
        contador_c1_1 =0;
        contador_c1_2 =0;    
        codigo = "04";    
        x2 = 1;           
        
    }   
       
}

function cambio1_MO(){
    if(contador_c2_2 == 1){
        cajaPrincipal.classList.remove('merengueMym');
        cajaPrincipal.classList.remove('merengueFresa');
        cajaPrincipal.classList.add('merengueOreo');
        cajita2.classList.remove('cambio1');
        cajaPrincipal.classList.remove('oreo');                      
        contador_c2_1 =0;
        contador_c2_2 =0;  
        codigo = "05";              
        x2 = 1;
        
    }   
       
}
function cambio1_MM(){
    if(contador_c2_2 == 1){
        cajaPrincipal.classList.remove('merengueFresa');
        cajaPrincipal.classList.remove('merengueOreo');
        cajaPrincipal.classList.add('merengueMym');
        cajita3.classList.remove('cambio1');
        cajaPrincipal.classList.remove('mym');                      
        contador_c2_1 =0;
        contador_c2_2 =0;  
        codigo = "06";              
        x2 = 1;
        
    }   
       
}

// otros cambios a utilizar 

/*

    function cambio1_F(){
        if(contador_c1_2 == 1){
            cajaPrincipal.classList.add('fresa2');
            cajita1.classList.remove('cambio1');
            cajaPrincipal.classList.remove('fresa');                      
            contador_c1_1 =0;
            contador_c1_2 =0;
        
            
        }   
               
    }


    function cambio1_O(){
        if(contador_c2_2 == 1){
            cajaPrincipal.classList.add('oreo2');
            cajita2.classList.remove('cambio1');
            cajaPrincipal.classList.remove('oreo');                      
            contador_c2_1 =0;
            contador_c2_2 =0;
          
            
        }   
               
    }

    */

        // condicion y sentencia que realiza el primer cambio efectivo de la caja principal, donde evalua "c1" que corresponde
        // al estado inicial de la caja principal, si es 0, es que esta en blanco.     


            
      
         
            cajaPrincipal.addEventListener('click',() => {

                if(c2 == 1){
                    cambio1_CC();
                    c2 = 0;
                    console.log(c2);

                }
                else if(c2 == 2){
                    cambio1_CMS();
                    c2 = 0;
                    console.log(c2);
                }

            }) 
           
        
          
       

        // ejecucion del cambio de imagen central, donde se evalua "d1"  que representa la cubierta que esta aplicada a la caja principal
        // d1 == 1 > cubierta de chocolate
        // d1 == 2 > cubierta de crema pastelera
        // d1 == 3 > cubierta de merengue suizo
        // d1 == 3 > cubierta de dulce  de leche
        // tambien se evalua el estado de "x1" el cual represena la seleccion hecha por el usuario en ese momento.
        // x1 == 1 > seleccionado topping de fresa
        // x1 == 2 > sleccionado topping de galleta oreo
        // x1 == 3 > seleccionado topping de myms

        cajaPrincipal.addEventListener('click', () => {
            
            if(d1 == 1){                
           
                if (x1 == 1) {
                    cambio1_CF() 
                    text1.textContent = "Cubierta: Chocolate";
                    text2.textContent = "Agregado: Fresas";
                    text3.textContent = "Valor:  $ 70.000 8-10 porciones";
                    text4.textContent = "Calorias: 250 / por porcion (150g)"
                                
                    
                }
                else if (x1 == 2) {
                    cambio1_CO() 
                    text1.textContent = "Cubierta: Chocolate";
                    text2.textContent = "Agregado: Oreos";
                    text3.textContent = "Valor:  $ 75.000 / 8-10 porciones";
                    text4.textContent = "Calorias: 310 por porcion (150g)"
                }
                else if(x1 == 3){
                    cambio1_CM()
                    text1.textContent = "Cubierta: Chocolate";
                    text2.textContent = "Agregado: M&Ms";
                    text3.textContent = "Valor:  $ 80.000 / 8-10 porciones";
                    text4.textContent = "Calorias: 295 por porcion (150g)"
                }
            }

            else if(d1 == 2){
                if(x1 == 1){
                    cambio1_MF()
                    text1.textContent = "Cubierta: Merengue";
                    text2.textContent = "Agregado: Fresas";
                    text3.textContent = "Valor:  $ 65.000 / 8-10 porciones";
                    text4.textContent = "Calorias: 210 por porcion (150g)"
                }
                else if(x1 == 2){
                    cambio1_MO()
                    text1.textContent = "Cubierta: Merengue";
                    text2.textContent = "Agregado: Oreo";
                    text3.textContent = "Valor:  $ 70.000 / 8-10 porciones";
                    text4.textContent = "Calorias: 290 por porcion (150g)"
                }
                else if(x1 == 3){
                    cambio1_MM()
                    text1.textContent = "Cubierta: Merengue";
                    text2.textContent = "Agregado: M&Ms";
                    text3.textContent = "Valor:  $ 75.000 / 8-10 porciones";
                    text4.textContent = "Calorias: 270 por porcion (150g)"
                }


            }
        })


        // funcion que remueve los cambios realizados para los toppings


        function atras1(){


            if(x2 == 1){
                cajaPrincipal.classList.remove('chocofresa')
                cajaPrincipal.classList.remove('chocooreo') 
                cajaPrincipal.classList.remove('chocomym')
                cajaPrincipal.classList.remove('merengueFresa')
                cajaPrincipal.classList.remove('merengueOreo')
                cajaPrincipal.classList.remove('merengueMym')
                x2 = 0;  
                x1 = 0;           
                
                text1.textContent = "";
                text2.textContent = "";
                text3.textContent = "";
                text4.textContent = "";
               
            }      
          

        }


        // funcion que remueve las cubiertas aplicadas

        function atras2 (){

            if(c1 == 1){
                cajaPrincipal.classList.remove('cubierta_chocolate')
                cajaPrincipal.classList.remove('cubierta_merengue')
                c1 = 0; 
                c2 = 0;  
                d1 = 0;             
               text1.textContent = "";
               text2.textContent = "";
               text3.textContent = "";
               text4.textContent = "";     
            }
        }

        function funcionC(){
            location.href = "https://wa.me/+573204619680?text= Hola, me gustaria comprar el producto " + codigo;
        }
    


        // setencia que revierte los cambios al dar click al boton quitar agregado

        botonA.addEventListener('click',atras1,true)

        // setencia que revierte los cambios al dar click al boton quitar cubierta
        botonB.addEventListener('click',atras2,true)


      
  

        
  
    
   

   


   

