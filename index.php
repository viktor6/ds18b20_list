<!DOCTYPE html>
<html>
<body>
<script  src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

 <script>
function autoRefresh_div()
{
  $("#temp").load("temp.php");// functio lataa datan joka x sekuntti
}

setInterval('autoRefresh_div()', 1000); // paivita div joka 1 sekuntti
</script>
<body>
<div id="temp"> </div>
</body>