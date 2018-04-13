<?php
function name($bold = true)
{
    if($bold)
        return "<h1>Tija</h1>";
    else
        return "Tija";
}
echo name();
?>

<?php

function myfunction ($a, $b)
{
    if(empty($a)){
        return false;
    }
    if($a == false || $a == ''){
        return false;
    }
    if ($b == 1) {
        echo "<h1>$a</h1>";
    } else
        echo $a;
}

myfunction ("tralialia", 0);
myfunction ("tralialia", 1);


?>

<?php

function busena ($mood) {

        if ($mood == "sad") {
            echo "Tija is :( today.";
        } else
            echo "Tija is :) today";
    }
    busena (23);
echo "<br>";
echo "<br>";
?>

<?php

$sad = ":(";
$happy = ":)";

function mymood ($mood)
{
    if ($mood == "sad") {
        echo $GLOBALS['sad'];
    } else
        echo $GLOBALS['happy'];
}
mymood ($happy);

?>

<?php

function mood ($mood)
        {
                if ($mood == "sad")
                {
                    echo "<h1>".name(false)." is :-( today</h1>";
                }
                else
                    {
                    echo "<h1>".name(false)." is :-) today</h1>";
                }
        }

mood ("smile");

?>