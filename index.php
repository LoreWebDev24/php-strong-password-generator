<?php 
require __DIR__ . '/passwordGenerationLogic.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpBasicPassGen</title>
</head>
<body>
    <form action="" method="get">
        <label for="pass_chr_number">Quanti caratteri deve essere lunga la Password ?</label>
        <input type="number" name="pass_chr_number" id="pass_chr_number" min="6" max="32">
        <button type="submit">Generate</button>
    </form>
    <div class="div">
        <p>
           Random Password Sample: <strong><?php echo getUserPassword($charLength) ?>
        </p></strong>
    </div>
</body>
</html>
