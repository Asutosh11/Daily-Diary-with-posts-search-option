  <html>
  <head><title>My Daily Diary</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  
  
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
   <div id = 'container'>
   
   <div id = 'topsearch'>
	
   <form id = 'search' action = 'searchprocess.php' method = 'post'> 
   <p><input type = 'text' class="form-control" id="datepicker" name = 'search' size = '100%'></p> 
   <input type = 'submit' class="btn btn-default" value = 'Search Posts by Date'>
   </form>
   
   </div>
   
  <div class = "boddy">
  
  <br>
  <div class = "appname">
	
  M y &nbsp;&nbsp; D a i l y &nbsp;&nbsp; D i a r y
   
  </div>  
 
  <br>
  <br>
  <br>
  <br>  
  
  <form method = "post" action = "process.php">
  <p><textarea name = "data" class="form-control" rows = "3" cols = "80" required></textarea></p> 
  
  <input type = "submit" class="btn btn-primary" name = "post" value = "POST">
  </form>
  
  <br>
  <hr>
  <br>
  </div>     
  
  <?php 
  
  require 'connect.php' ;  
  
   $query = "SELECT * FROM posts ORDER BY id DESC limit 10" ; 
   
	$result = mysqli_query($dbc, $query) ; // or  die('error querying') ;
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
  
  </div>
  </body>
  </html>
