<head>
    <meta charset="utf-8" />
    <html lang="fr">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  
    <title>Exemplaires 2017</title>

     <?php header('Content-Type: text/html; charset=utf-8');
            ini_set('default_charset', 'utf-8');
 
$servername = "localhost";
$username = "user_test";
$password="salut";
$dbasename="biennale_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbasename);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");


?>

</head>

<body>
    
<?php include 'snippets/selection_db.php';?>