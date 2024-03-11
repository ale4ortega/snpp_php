<?php
require 'vendor/autoload.php';
// reference the Dompdf namespace
use Dompdf\Dompdf ;
//require 'vendor/autoload.php';
//require_once 'dompdf/autoload.inc.php';
// instantiate and use the dompdf class
$dompdf = new Dompdf();


$pagina = "<! DOCTYPE html><header>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' </script>
</header>
<body>
<table class='table table-dark'>
<thead  class='thead-dark'>
  <tr>
    <th scope='col'>#</th>
    <th scope='col'>First</th>
    <th scope='col'>Last</th>
    <th scope='col'>Handle</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope='row'>1</th>
    <td>Mark</td>
    <td>Otto</td>
    <td>@mdo</td>
  </tr>
  <tr>
    <th scope='row'>2</th>
    <td>Jacob</td>
    <td>Thornton</td>
    <td>@fat</td>
  </tr>
  <tr>
    <th scope='row'>3</th>
    <td>Larry</td>
    <td>the Bird</td>
    <td>@twitter</td>
  </tr>
</tbody>
</table>
</body></html>
";


$dompdf->loadHtml($pagina);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("reporte.pdf", [Attachment =>]);





?>
