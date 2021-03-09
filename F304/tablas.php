<!doctype html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Tablas</title>
</head>
<body>
  tablas
 <table border="1">
   <tr>  <!--  -->

     <td>columna 1</td>
     <td>columna 2</td>
   </tr>
   <tr>
     <td>fila 2 columna1</td>
     <td>fila 2 columna 2</td>
   </tr>
</table>
<br>

<table border="1">
    <tr>
      <th>columna 1 con th</th>
      <th>columna 2 con th</th>
    </tr>
    <tr>
      <td>valor 1 fila 2</td>
      <td>valor 2 fila 2</td>
    </tr>
</table>
<br>



<table border="1">
  <thead>
    <tr>
      <th>titulo 1</th>
      <th>titulo 2</th>
      <th>titulo 3</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>f2 c1</td>
      <td>f2 c2</td>
      <td>f2 c3</td>
    </tr>
    <tr>
      <td>f3 c1</td>
      <td>f3 c2</td>
      <td>f3 c3</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>titulo 1</th>
      <th>titulo 2</th>
      <th>titulo 3</th>
    </tr>
  </tfoot>
  <caption>descripción de la tabla</caption>
</table>

<table>
  <tr>
    <th>Nombre</th>
    <td>Jhon</td>
  </tr>
  <tr>
    <th>Apellido</th>
    <td>Gómez</td>
  </tr>
</table>

<table border="1">
  <tr>
    <td>a</td>
    <td>b</td>
    <td>c</td>
  </tr>
  <tr>
    <td>d</td>
    <td colspan="2">ef</td>
  </tr>
</table>
<table border="1">
  <tr>
    <td rowspan="2">a</td>
    <td>b</td>
    <td>c</td>
  </tr>
  <tr>
    <td>d</td>
    <td>e</td>
  </tr>
</table>


<table>
  <tr>
    <th>#</th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
  </tr>
</table>
<table border="1">
  <thead>
    <tr>
      <th>#</th>
      <th>A</th>
      <th>B</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
    <tr>
      <td>1</td>
      <td>1A</td>
      <td>1B</td>
    </tr>

  <tr>
    <td>2</td>
    <td colspan="2">2AB</td>
  </tr>
  <tr>
    <td>3</td>
    <td rowspan="2"></td>
    <td>3B</td>
  </tr>
  <tr>
    <td>4</td>
    <td>4B</td>
  </tr>

</table>
</body>
</html>
