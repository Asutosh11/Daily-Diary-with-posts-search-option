<html>
<head><title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    
<?php

$status = $_POST['data'];

if (isset($status) && (!empty($status)))
{

require 'connect.php' ;

date_default_timezone_set('Asia/Calcutta');
$status = mysqli_real_escape_string($dbc, $status);

$status = nl2br($status);

$time = date("g:i A", time());
$date = date("F j, Y ", time());
$searchdate = date("d-m-Y",time());

$query = "INSERT INTO posts(text, date, time, searchdate)" . "VALUES ('$status', '$date', '$time', '$searchdate')" ;

mysqli_query($dbc,$query) or die('Error querying') ;

mysqli_close($dbc) ;

?>

<script type="text/javascript">
    <!--
    window.location.href = "index.php"            
    //-->
</script>

<noscript>
    Please enable javascript on your browser.
</noscript>

<?php        

}

else 
header( 'Location: index.php' ) ;

?>
</body>
</html>
