<!DOCTYPE html>
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
    <h2>current target Tahmida Lima!!!</h2>
    <h4>target:<span></span> </h4>
    <h4 id ="log">log: </h4>
    <ul>
      <li><a href="herro">hello</a></li>
      <li><a href="herro">world</a></li>
      <li><a href="herro">bangladesh</a></li>
 
    </ul>
  </div>
</body>
</html>
<script type="text/javascript">
$('a').click(function(event){
  var target = $(event.currentTarget).text();
  //alert(target);
  event.preventDefault();
  $('span').text(target);
  $('#log').append(target + ",")
});
</script>

