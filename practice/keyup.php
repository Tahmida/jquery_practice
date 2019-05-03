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
  <div class = "container">
    <h3>Keyup event jquery</h3>
    <div class = "row">
      <div class = "col-sm-6">
        <label>quantity</label>
        <input type = "number" id = "quantity" name = "quantity" >
      </div>
      <div class = "col-sm-6">
        <label>price</label>
        <input type = "number" id = "price" name = "price" >
      </div>
    </div>
    <div class = "row">
      <div class = "col-sm-6">
        <label>Total</label>
        <input type = "number" class= "total" name = "total" >
      </div>
    </div>
  </div>


</body>
</html>
<script type="text/javascript">
 $(document).ready(function(){
  $('#quantity,#price').focusout(function(){
      var quantity = $('#quantity').val();
  var price = $('#price').val();
  var total = quantity*price;
  $('.total').val(total);

  });


 
 });
  
</script>
    