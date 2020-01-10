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



 <p>Id_Sucursal: <span id="IdSucursal"></span></p>
  <p>Sucursal <span id="Sucursal"></span></p>
   

 <script>
        $(document).ready(function(){
            $.get('http://localhost:3333/api/v1/suc',function(data){
                var dJson = JSON.parse(data);
                $('#IdSucursal').text(dJson.IdSucursal);
                $('#Sucursal').text(dJson.Sucursal);
            });
        });
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