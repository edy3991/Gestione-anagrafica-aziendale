<?php
include_once 'connect.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <head>
  <title>Anagrafica PCTO Imaralu</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
 <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
 <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
 <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
 <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
 <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
 <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
 <!--===============================================================================================-->
 </head>

  <body>
<?php
  $sql= "SELECT * FROM azienda where Comune = 'Villafranca di Verona' limit 8;";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {    //prima tabella (fixed)

    echo  "<div class='limiter'>";
    echo    "<div class='container-table100'>";
    echo      "<div class='wrap-table100'>";
    echo        "<div class='table100 ver1'>";
    echo          "<div class='table100-firstcol'>";
    echo            "<table>";
    echo              "<thead>";
    echo                "<tr class='row100 head'>";
    echo                  "<th class='cell100 column1 topHead'>Ragione sociale</th>";
    echo                "</tr>";
    echo              "</thead>";
    echo"<tbody>";

    while ($row = mysqli_fetch_assoc($result)) {

      echo  "<tr class='row100 body'>";
      echo     "<td class='cell100 column1'>" . $row['Ragione_sociale']. "</td>";
      echo  "</tr>";
    }
    echo   "</tbody>";
    echo  "</table>";
    echo "</div>";
  }

  $resultBody = mysqli_query($conn, $sql);
  $resultCheckBody = mysqli_num_rows($resultBody);

  if ($resultCheckBody > 0) {   //seconda tabella (relative, with oriz scrollbar)

    echo "<div class='wrap-table100-nextcols js-pscroll'>";
    echo  "<div class='table100-nextcols'>";
    echo    "<table class ='tableAttribute'>";
    echo      "<thead>";
    echo        "<tr class='row100 head'>";
    echo          "<th class='cell100 column2'>Comune</th>";
    echo          "<th class='cell100 column3'>Provincia</th>";
    // echo          "<th class='cell100 column4'>Stato</th>";
    // echo          "<th class='cell100 column5'>Indirizzo</th>";
    // echo          "<th class='cell100 column6'>Cap</th>";
    // echo          "<th class='cell100 column7'>Telefono</th>";
    echo          "<th class='cell100 column8'>Email</th>";
    echo          "<th class='cell100 column9'>Sito</th>";
    // echo          "<th class='cell100 column10'>Numero dipendenti</th>";
    echo          "<th class='cell100 column11'>Articolazione</th>";
    // echo          "<th class='cell100 column12'>Tipo di azienda</th>";
    // echo          "<th class='cell100 column13'>Codice ATECO</th>";
    // echo          "<th class='cell100 column14'>Descrizione ATECO</th>";
    echo        "</tr>";
    echo      "</thead>";
    echo   "<tbody>";

      while ($rowb = mysqli_fetch_assoc($resultBody)) {

        echo      "<tr class='row100 body'>";
        echo          "<td class='cell100 column2'>" . $rowb['Comune']. "</td>";
        echo          "<td class='cell100 column3'>" . $rowb['Provincia']. "</td>";
        // echo          "<td class='cell100 column4'>" . $rowb['Stato']. "</td>";
        // echo          "<td class='cell100 column5'>" . $rowb['Indirizzo']. "</td>";
        // echo          "<td class='cell100 column6'>" . $rowb['Cap']. "</td>";
        // echo          "<td class='cell100 column7'>" . $rowb['Telefono']. "</td>";
        echo          "<td class='cell100 column8'>" . $rowb['Email']. "</td>";
        echo          "<td class='cell100 column9'>" . $rowb['Sito']. "</td>";
        // echo          "<td class='cell100 column10'>" . $rowb['N_dipendenti']. "</td>";
        echo          "<td class='cell100 column11'>" . $rowb['Articolazione']. "</td>";
        // echo          "<td class='cell100 column12'>" . $rowb['Tipo_azienda']. "</td>";
        // echo          "<td class='cell100 column13'>" . $rowb['Codice_ATECO']. "</td>";
        // echo          "<td class='cell100 column14'>" . $rowb['Descrizione_ATECO']. "</td>";
        echo      "</tr>";

      }
      echo    "</tbody>";
      echo            "</table>";
      echo           "</div>";
      echo          "</div>";
      echo         "</div>";
      echo       "</div>";
      echo      "</div>";
      echo     "</div>";

  }
 ?>

 <!--===============================================================================================-->
 	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
 <!--===============================================================================================-->
 	<script src="vendor/bootstrap/js/popper.js"></script>
 	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
 <!--===============================================================================================-->
 	<script src="vendor/select2/select2.min.js"></script>
 <!--===============================================================================================-->
 	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
 	<script>
 		$('.js-pscroll').each(function(){
 			var ps = new PerfectScrollbar(this);

 			$(window).on('resize', function(){
 				ps.update();
 			})

 			$(this).on('ps-x-reach-start', function(){
 				$(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
 			});

 			$(this).on('ps-scroll-x', function(){
 				$(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
 			});

 		});




 	</script>
 <!--===============================================================================================-->
 	<script src="js/main.js"></script>

  </body>
 </html>
