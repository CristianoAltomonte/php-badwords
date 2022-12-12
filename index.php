<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <?php 
    $paragrafo="Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, doloribus, quis neque unde voluptatibus deserunt aliquam qui natus hic alias harum id sed temporibus sit, nulla incidunt nisi odit assumenda?";
    $valueInput = $_GET ['valueInput'];

    ?>
    <h1>TITOLO</h1>

    <p> <?php echo $paragrafo ?></p>
    <p> <span> <i>La lunghezza del paragrafo é:</i>  </span><?php echo strlen($paragrafo) ?></p>

    <form action="" method="GET">
        <input type="text" name="valueInput">
        <button>Submit</button>
    </form>

    <?php echo str_replace($valueInput, "***", $paragrafo) ?>
</body>
</html>