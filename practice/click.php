    <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<h3>jquery click event</h3>
    <div>
      <input type="radio" id="contactChoice1"
       name="contact" value="email">
      <label for="contactChoice1">Email</label>

      <input type="radio" id="contactChoice2"
       name="contact" value="phone">
      <label for="contactChoice2">Phone</label>

      <input type="radio" id="contactChoice3"
       name="contact" value="mail">
      <label for="contactChoice3">Mail</label>
    </div>
    <div class ="form-group hd" id ="lim" hidden>
      <input name = "lima" class ="form-control" value="lima" hidden>
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
    $("input[name='contact']").click(function(){
      //var value = $('#contactChoice2').val();
      if($(this).val() == 'phone'){
      $('#lim').removeAttr('hidden');
    }
    else{
      $('#lim').attr('hidden',true);

    }
    });

    });
    </script>