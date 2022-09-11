<?php
    define( "TITLE", "Honest clickbait headlines" );
include("functionsily.php");

    if(isset($_POST["fix_submit"] ) ) { //means that if the form has been submitted...

        checkForClickbait();
    }
?>

<!DOCTYPE html>

<html>

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo TITLE; ?></title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>
    
    <div class="container"> 
        <h1> <?php echo TITLE; ?> </h1>
    <p class="lead"> Hate click bait? Turn those annoying headlines into realistic and honest ones using this simple program. </p>

<div class = "row"> 
    <form class="col-sm-8 col-sm-offset2" action="" method="post"> 
        <textarea placeholder="Paste click bait headline here" class="form-control input-lg" name="clickbait_headline"></textarea> <br>
        <button type="submit" class="btn btn-primary btn-lg pull-right" name="fix_submit">Make honest!</button>
    </form>
</div>
        <?php //results of the php on top of the page
       
       if (isset ($_POST["fix_submit"])) {

        $clickBait = checkForClickbait()[0];
        $honestHeadline = checkForClickbait()[1];

        displayHonestHeadline($clickBait, $honestHeadline);
         }

        ?>
        
        </div>
    </body>
</html>