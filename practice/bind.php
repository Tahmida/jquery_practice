<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  p {
    background: yellow;
    font-weight: bold;
    cursor: pointer;
    padding: 5px;
  }
  p.over {
     background: #ccc;
  }
  span {
    color: red;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
  <div class ="container">
    <h1>jquery bind event</h1>     
    <p>Click or double click here.</p>
    <span></span>

  </div>

 
<script>
$('p').bind('click',function(){
  $('span').text('click happened');

});
$('p').bind('dblclick',function(){
  $('span').text('double click happened');

});
$('p').bind('mouseover mouseleave',function(event){
  $(this).toggleClass('over');

});
// $( "p" ).bind( "click", function( event ) {
//   var str = "( " + event.pageX + ", " + event.pageY + " )";
//   $( "span" ).text( "Click happened! " + str );
// });
// $( "p" ).bind( "dblclick", function() {
//   $( "span" ).text( "Double-click happened in " + this.nodeName );
// });
// $( "p" ).bind( "mouseenter mouseleave", function( event ) {
//   $( this ).toggleClass( "over" );
// });
</script>
 
</body>
</html>