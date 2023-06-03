$('#asistir').click(function(){
  const valor1 = document.querySelector('#documento').value;
  const valor2 = document.querySelector('#tel').value;
  const valor3 = document.querySelector('#direccion').value;
  const valor4= document.querySelector('#edad').value;
  const valor = document.querySelector('#nombre').value;
  if(valor ==="" ){
 
    Swal.fire({
        icon: 'error',
       
        text: 'Campo obligatorio  ',
        
        
      })
    }
    if(valor1 ==="" ){
 
      Swal.fire({
          icon: 'error',
         
          text: 'Campo obligatorio  ',
          
          
        })
      }
      if(valor2 ==="" ){
 
        Swal.fire({
            icon: 'error',
           
            text: 'Campo obligatorio  ',
            
            
          })
        }
    
      if(valor3 ==="" ){
 
        Swal.fire({
            icon: 'error',
           
            text: 'Campo obligatorio  ',
            
            
          })
        }
        if(valor4 ==="" ){
 
          Swal.fire({
              icon: 'error',
             
              text: 'Campo obligatorio  ',
              
              
            })
          }
          else{ 

            let timerInterval
                          
              Swal.fire({
                title: `${valor}`,
                text: 'Añadido con exito ',
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                  Swal.showLoading()
                  const b = Swal.getHtmlContainer().querySelector('b')
                  timerInterval = setInterval(() => {
                    b.textContent = Swal.getTimerLeft()
                  }, 100)
                },
                willClose: () => {
                  clearInterval(timerInterval)
                }
              }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                  console.log('I was closed by the timer')
                }
              }) 
    }
    
  });


  $('#agendar').click(function(){
    const valor5 = document.querySelector('#documento').value;
    const valor6 = document.querySelector('#tel').value;
    const valor7 = document.querySelector('#direccion').value;
    const valor8 = document.querySelector('#fecha').value;
    const valor9 = document.querySelector('#nombre').value;
    if(valor9 ==="" ){
   
      Swal.fire({
          icon: 'error',
         
          text: 'Campo obligatorio  ',
          
          
        })
      
      }
      if(valor5 ==="" ){
   
        Swal.fire({
            icon: 'error',
           
            text: 'Campo obligatorio  ',
            
            
          })
        
        }
        if(valor6 ==="" ){
   
          Swal.fire({
              icon: 'error',
             
              text: 'Campo obligatorio  ',
              
              
            })
          
          }
          if(valor8 ==="" ){
   
            Swal.fire({
                icon: 'error',
               
                text: 'Campo obligatorio  ',
                
                
              })
            
            }
            if(valor7 ==="" ){
   
              Swal.fire({
                  icon: 'error',
                 
                  text: 'Campo obligatorio  ',
                  
                  
                })
              
              }
              
          
      else{ 
        let timerInterval
                          
        Swal.fire({
          title: `${valor9}`,
          text: 'Termina de completar los datos y recuerda que las citas se asignan con intervalos de 30 minutos  ',
          timer: 2000,
          timerProgressBar: true,
          didOpen: () => {
            Swal.showLoading()
            const b = Swal.getHtmlContainer().querySelector('b')
            timerInterval = setInterval(() => {
              b.textContent = Swal.getTimerLeft()
            }, 100)
          },
          willClose: () => {
            clearInterval(timerInterval)
          }
        }).then((result) => {
          /* Read more about handling dismissals below */
          if (result.dismiss === Swal.DismissReason.timer) {
            console.log('I was closed by the timer')
          }
        }) 
        
      }
      
    });
  

    $('#registar').click(function(){
      const valor1 = document.querySelector('#documento').value;
      const valor2 = document.querySelector('#tel').value;
      const valor3 = document.querySelector('#direccion').value;
      const valor4= document.querySelector('#edad').value;
      const valor = document.querySelector('#nombre').value;
      if(valor ==="" ){
     
        Swal.fire({
            icon: 'error',
           
            text: 'Campo obligatorio  ',
            
            
          })
        }
        if(valor1 ==="" ){
     
          Swal.fire({
              icon: 'error',
             
              text: 'Campo obligatorio  ',
              
              
            })
          }
          if(valor2 ==="" ){
     
            Swal.fire({
                icon: 'error',
               
                text: 'Campo obligatorio  ',
                
                
              })
            }
        
          if(valor3 ==="" ){
     
            Swal.fire({
                icon: 'error',
               
                text: 'Campo obligatorio  ',
                
                
              })
            }
            if(valor4 ==="" ){
     
              Swal.fire({
                  icon: 'error',
                 
                  text: 'Campo obligatorio  ',
                  
                  
                })
              }
              else{ 
                
                let timerInterval
                          
                Swal.fire({
                  title: `${valor}`,
                  text: 'Registrado con exito ',
                  timer: 2000,
                  timerProgressBar: true,
                  didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                      b.textContent = Swal.getTimerLeft()
                    }, 100)
                  },
                  willClose: () => {
                    clearInterval(timerInterval)
                  }
                }).then((result) => {
                  /* Read more about handling dismissals below */
                  if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                  }
                })
                
           
        }
        
      });

 
  
  
  