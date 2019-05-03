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
    <h3>on change event jquery</h3>
    <div class = "row clearfix" >
      <div class = "form-group col-sm-6">
        <label>employee</label>
         <select name="employee" class="employee select2">
            <option value="">select</option>
            <option value="1">Saab</option>
            <option value="2">Opel</option>
            <option value="3">Audi</option>
          </select>
      </div>

      <div class = "col-sm-6">
        <div class="form-group address">
        <label for = "address">Address</label>
        <input type = "text" class = "address" name = "address" >
        </div>
      </div>
    </div>  
  </div>


</body>
</html>
<script type="text/javascript">
 $(document).ready(function(){
  $('.employee').change(function(){
    var employee = $('.employee').val();
    if(employee == '3'){
      $('.address').attr('hidden',true);
    }
    else{
      $('.address').attr('hidden',false);
    }

  })
 })

    // $('.employee').change(function(){
    //   var employee = $('.employee').val();
    //   if(employee == '3'){
    //     $('.address').attr('hidden',true);
    //   }
    //   else{
    //     $('.address').attr('hidden',false);
    //   }

    // });


  
</script>
