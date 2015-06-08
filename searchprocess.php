 <html>
 <head><title>My Daily Diary</title>  
 
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
 
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: "dd-mm-yy" });
  });
  </script>
 
<link rel = "stylesheet" href = "styles.css">  
 
</head>
 
<body>

<center><h4>SEARCH RESULTS</h4></center>
<br>

<?php

$date = htmlspecialchars($_POST['search']);

include 'connect.php';

$query = "SELECT * FROM `posts` WHERE searchdate = '$date'" ;

mysqli_query($dbc,$query) or die('Error querying') ;

$result = mysqli_query($dbc, $query) ; 
   if ($result)
   {
   while ($row = mysqli_fetch_array($result))
   {
    $message = $row['text']; 
      
    $date = $row['date'];
    
    $time = $row['time'] ;          
     
    echo '<div id = "message-background-interval-white"> <br> </div>' ;
    
    echo '<div id = "messages" >' ;    
    
    echo $message ;        
    
    echo '</div>' ;   
     
    echo '<div class  = "date-time" align="right">' ;  
    
    {
     
    echo 'at' .' ' . $time .' ' ;
    echo 'on' .' ' . $date ;        
    echo '</div>' ;
  
    }
  
   }
  }
     
  mysqli_close($dbc) ;

?>

<br> <center><a href = 'index.php'><button type="button" class="btn btn-default">Go to Home</button></a></center>

</body>
</html>