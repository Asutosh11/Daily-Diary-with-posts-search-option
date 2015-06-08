    <?php
    
    date_default_timezone_set('Asia/Calcutta');
    // 'Asia/Calcutta' is the time zone where I live, you may enter yours above.        
    
    $host = '' ; // Enter your host name in the quotes. If your database is on the same server, it will be localhost
    
    $username = '' ; // Enter your database username in the quotes.
    
    $password = '' ; // Enter your database password in the quotes.    
    
    $database_name = '' ;  // Enter your database name in the quotes.
    
    
    $dbc = mysqli_connect($host, $username, $password, $database_name) or
           die('Error connecting to databse') ;
    
    
    $query = "CREATE TABLE IF NOT EXISTS `posts` (
      `id` int(10) NOT NULL AUTO_INCREMENT,
      `text` varchar(6400) NOT NULL,
      `date` varchar(6400) NOT NULL,
      `time` varchar(6400) NOT NULL,
      `searchdate` varchar(6400) NOT NULL,
      PRIMARY KEY (`id`)
    )" ;
    
    mysqli_query($dbc, $query) ;      
    
    
    ?>
