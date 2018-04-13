<?php


$guess = filter_input(INPUT_POST, 'guess', FILTER_VALIDATE_INT);
$total = filter_input(INPUT_POST, 'total', FILTER_VALIDATE_INT);


    if ( $guess === FALSE) {
        $error_message = 'You must enter a guess';
    }
    //else if($total !== $guess){
       // $error_message = 'Incorrect Sorry';
    //}
    else {
        $error_message = '';
    }

     if($error_message != ''){
    include('index.php');
    exit();
 }
 
    
?>

<html>
<head>
    <title>You WIN</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>You WIN</h1>

        <label>Guess:</label>
        <span><?php echo $guess; ?></span><br>


    </main>
</body>
</html>
