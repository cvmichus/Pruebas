<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
    
     <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

          

  </head>
       
        <style>
      
        </style>
  <body >


<div >
<div class="container">
  
  <div id="tabla"  class="table-responsive">


<div id="root">
<div class="container"></div>
</div>


 <p>Id_Sucursal: <span id="IdSucursal"></span></p>
  <p>Sucursal <span id="Sucursal"></span></p>
   

 <script>

  const app = document.getElementById('root')
  const container = document.createElement('div')
  container.setAttribute('class', 'container')

  app.appendChild(container)

  var request = new XMLHttpRequest()
  request.open('GET', 'http://localhost:3333/api/v1/suc', true)
  request.onload = function() {
       var data = JSON.parse(this.response)
        if (request.status >= 200 && request.status < 400) {
                console.log("ok"+response);
            
        }
        else{
                console.log("bad"+response);

        }

  }

  request.send()

      

</script>


 
      

</div>
</div>

 <div class="col-lg-12 text-center">
                    <hr/>
                
                     <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a>
                    <hr/>
                </div> 
   
    
  </body>
</html>