<!DOCTYPE html>
<html lang="en">
<head>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>


 
 <script>
const request = new XMLHttpRequest();

fetch('https://localhost:3333/api/v1/books')
  .then(function(response) {
    return response.json();
  })
  .then(function(myJson) {
    var divOut = document.getElementById('txtOut');
    var allStudents = myJson.Books;
    var txtOut = "";
    for (var k in allStudents) {
      txtOut += `<b>${allStudents[k].Nombre}</b><br />`;
      txtOut += `Apellido: ${allStudents[k].Apellido}<br />`;
      txtOut += `Usuario: ${allStudents[k].Usuario}<br />`;
      txtOut += `Estado: ${allStudents[k].Estado}<br />`;
      txtOut += `CodGrupo: ${allStudents[k].CodGrupo}<br />`;
      
    }
    divOut.innerHTML = txtOut;
  });
 </script>



</body>
</html>