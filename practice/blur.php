    <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<h3>jquery blur event</h3>
    <div class = "container">
      <input type = "text"></input>
      <h2>hi!i m here..</h2>

    </div>
    <script type="text/javascript">   
      $(document).ready(function(){
        $('input').focus(function(){
          $('h2').css('background','black');
        }) 
        $('input').blur(function(){
          $('h2').css('background','red');
        })
      });
    </script>