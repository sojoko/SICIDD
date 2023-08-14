
(async()=>{


    swal.fire({
        title: 'Bienvenido al sistema SICIDD, presione confirmar y siga las instrucciones o presione cancelar para cerrar esta ventana.',
        showDenyButton: true,
        confirmButtonText: 'confirmar',
        denyButtonText: 'cancelar',
        confirmButtonColor: '#bbd406',
        background: '#faffee',
        width: '70%',
        
    }).then(async(result) => {

        if(result.isConfirmed){
           
                const steps = ['1', '2', '3','4','5','6','7']    
    
                const q = Swal.mixin({
                 progressSteps: steps,
                 confirmButtonText: 'Siguiente >',   
                 confirmButtonColor: '#bbd406',   
                 background: '#faffee',
                 width: '60%',
                 
                
               })
                         
               await q.fire({
                   title: 'Seleccione la cubierta que desea utilizar',
                   imageUrl: '../vistas/img/k1.png',
                   imageWidth: '700px',
                   // imageHeight:
                   // imageAlt:
                  // cancelButtonColor:
                  // cancelButtonAriaLabel:                
                 

                   currentProgressStep: 0,
                   // optional class to show fade-in backdrop animation which was disabled in Queue mixin
                   showClass: { backdrop: 'swal2-noanimation' },
                 })
               await q.fire({
                   title: 'Para eliminar la cubierta existente y utilizar otra, presione el botón "quitar cubierta"',
                   imageUrl: '../vistas/img/k2.png',
                   imageWidth: '700px',
                   currentProgressStep: 1,
                   // optional class to show fade-in backdrop animation which was disabled in Queue mixin
                   showClass: { backdrop: 'swal2-noanimation' },
                 })
                 await q.fire({
                   title: 'Luego seleccione la decoración o el agregado de su preferencia',
                   imageUrl: '../vistas/img/k3.png',
                   imageWidth: '700px',
                   currentProgressStep: 2,
                   // optional class to show fade-in backdrop animation which was disabled in Queue mixin
                   showClass: { backdrop: 'swal2-noanimation' },
                 })
           
                 await q.fire({
                   title: 'Para eliminar el agregado existente, pulse el botón "quitar agregado"',
                   imageUrl: '../vistas/img/k4.png',
                   imageWidth: '700px',
                   currentProgressStep: 3,
                   // optional class to show fade-in backdrop animation which was disabled in Queue mixin
                   showClass: { backdrop: 'swal2-noanimation' },
                 })
                 await q.fire({
                   title: 'Para eliminar tanto el agregado como la cubierta, primero quite el agregado y posteriormente la cubierta, procure siempre hacerlo en orden',
                   imageUrl: '../vistas/img/k5.png',
                   imageWidth: '700px',
                   currentProgressStep: 4,
                   // optional class to show fade-in backdrop animation which was disabled in Queue mixin
                   showClass: { backdrop: 'swal2-noanimation' },
                 })
                 
                 await q.fire({
                   title: 'Si por alguna razón la pagina deja de funcionar correctamente, por favor recárguela pulsando la tecla "F5" o el botón recargar en su respectivo navegador',
                   currentProgressStep: 5,
                   // optional class to show fade-in backdrop animation which was disabled in Queue mixin
                   showClass: { backdrop: 'swal2-noanimation' },
                 })
           
                 await q.fire({
                   title: 'Por último, una vez finalizado el producto, puede dirigirse al boton comprar',
                   imageUrl: '../vistas/img/k6.png',
                   imageWidth: '700px',
                   currentProgressStep: 6,
                   // optional class to show fade-in backdrop animation which was disabled in Queue mixin
                   showClass: { backdrop: 'swal2-noanimation' },
                 })
                
            
            
        } 
       


    })



  

})()


