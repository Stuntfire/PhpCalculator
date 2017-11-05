

<?php
if (isset($_REQUEST['input1']) && isset($_REQUEST['input2']))
{
    $input1 = $_REQUEST["input1"];
    $input2 = $_REQUEST["input2"];

//    $operations = urldecode($_REQUEST['operations']);
    $operations = $_REQUEST["operations"];
    switch ($operations) {

        case ("+"):
            echo "$input1 + $input2 = ";
            $result = plus($input1, $input2);
            break;
        case ("-"):
            echo "$input1 - $input2 = ";
            $result = minus($input1, $input2);
            break;
        case ("*"):
            echo "$input1 x $input2 = ";
            $result = gange($input1, $input2);
            break;
        case ("/"):
            echo "$input1 / $input2 = ";
            $result = division($input1, $input2);
            break;
        default:
            $result = "Illegal operation " . $operations;
    }
} else {
    $input1 = "";
    $input2 = "";
    $result = "";
    $operations = '+';
}
echo $result;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<br>
<a href="index.html">Tilbage til lommeregner.</a>


<p>PLUS er lig med =
    <?php
    echo plus($input1, $input2);
    ?>
</p>

<p>MINUS er lig med =
    <?php
    echo minus($input1, $input2);
    ?>
</p>

<p>GANGE er lig med =
    <?php
    echo gange($input1, $input2);
    ?>
</p>

<p>DIVISION er lig med =
    <?php
    echo division($input1, $input2);
    ?>
</p>

<!--CALCULATOR FUNCTIONS-->
<?php
function plus($input1, $input2)
{
    $result = $input1 + $input2;
    return $result;
}

function minus($input1, $input2)
{
    $result = $input1 - $input2;
    return $result;
}

function gange($input1, $input2)
{
    $result = $input1 * $input2;
    return $result;
}

function division($input1, $input2)
{
    $result = $input1 / $input2;
    return $result;
}
?>



</body>
</html>
