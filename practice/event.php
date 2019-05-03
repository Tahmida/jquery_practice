<!  DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class ="container">
    <h2>Data Passing Jquery Event</h2>
    <input type = "text" id = "ftest"><br>
    <input type = "text" id = "stest">

    <div id = "divresult">d</div>
  </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
  $('#ftest').click(function(event){
    callfunction(event);

  }).mouseover(function(event){
    callfunction(event);
  });
  function callfunction(event){
    var ftest = $('#ftest').val();
    var stest = $('#stest').val();
    $('#divresult').html(ftest);
  }

});
</script>




