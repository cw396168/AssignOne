<?php

    if (!isset($guess)) { $guess = ''; } 
    $numbOne= (rand(1,15));
    $numbTwo= (rand(1,15));
    $total = ($numbOne+$numbTwo);
  

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="styleAssignOne.css" />
        <title>Simple Math</title>
    </head>
     <body>
        <header><h1>Simple Math</h1></header>
	
        <main>
            
            <br>
            <form action="congrats.php" method="post">
                
                <p><?php echo ($numbOne .'+'. $numbTwo); ?></p>
                <label>Guess:</label>
                <input type="text" name="guess" value="">
                <br>
                <input type="hidden" name="total" value="">
                <br>
                <br>
                <input class="button" type="submit" value="Submit">
            </form>
            
            <br><br><?php if(!empty($error_message)) { ?>
            <h2 class="error"><?php echo ($error_message); ?></h2>
            <?php } ?> <br>
            
            
        </main>

</html>
