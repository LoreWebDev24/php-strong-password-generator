<?php 

$charLength = intval($_GET['pass_chr_number']);
var_dump($charLength);

$passwordChars = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9','!','"','#','$','%','&','\'','(',')','*','+',',','-','.','/',':',';','<','=','>','?','@','[','\\',']','^','_','`','{','|','}','~'];



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
</body>
</html>