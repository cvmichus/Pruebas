<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="UTF-8">
        <title>Ejemplo MVC con PHP</title>
     <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
       
        <style>
      
        </style>
  <body>

<div >
<div >

  <div id="root">
<div class="container">
  <p> <div id="Sucursal"></div></p>
</div>
</div>
  
  <div id="tabla"  class="table-responsive">

 
   
 <script>
const app = document.getElementById('root');
const container = document.createElement('div');
container.setAttribute('class', 'container');

app.appendChild(container)

  var request = new XMLHttpRequest()
  request.open('GET', 'http://localhost:3333/api/v1/suc', true)
  request.onload = function() {
       var data = JSON.parse(this.response)
       $('#Sucursal').html('<strong> Cargando info... </strong>');
        if (request.status >= 200 && request.status < 400) {
                //console.log("ok"+response);
                data.forEach(movie => {
                $('#Sucursal').html('<strong> SUCURSALES</strong>');

                  const card = document.createElement('div');
                  card.setAttribute('class', 'card');

                  const h1 = document.createElement('td');
                  h1.textContent = movie.IdSucursal;

                  const item2 = document.createElement('td');
                  item2.textContent ='-';

                const p = document.createElement('td')
                p.textContent = movie.Sucursal;


                container.appendChild(card);
                card.appendChild(h1);
                card.appendChild(item2);
                card.appendChild(p);

                   
                })
        }
        else{
                //console.log("bad"+response);
                alert('Disculpe, existió un problema');
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