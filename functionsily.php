<?php 


function checkForClickbait () {
        // grab value from textarea in $_POST collection
                // make all letters lowercase using strtolower() function
                // store in a variable

                $clickbait = strtolower($_POST["clickbait_headline"]);

                //store array of clickbait-sounding words or phrases

                $a = array (
                "scientists",
                "doctors",
                "hate",
                "stupid",
                "weird",
                "simple",
                "trick",
                "shocked me",
                "you'll never believe",
                "hack",
                "epic",
                "unbelievable"
                );

                //array of replacements

                 $b = array (
                "so-called scientists",
                "so-called doctors",
                "aren't threatened by",
                "average",
                "completely normal",
                "ineffective",
                "method",
                "is no different than the others",
                "you won't really be surprised by",
                "slightly improve",
                "boring",
                "normal"
                );

                $honestHeadline = str_replace( $a, $b, $clickbait);

                return array ($clickbait, $honestHeadline);
    
            }

            function displayHonestHeadline ( $x, $y ) {
                echo "<strong class='text-danger'>Original Headline</strong>
                <h4>".ucwords($x)."</h4><hr>";


                echo "<strong class='text-success'>Honest Headline</strong>
                <h4>".ucwords($y)."</h4>"; 
            }

?>