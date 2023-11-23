<?

function getUserPassword($charLength) {
    $passwordChars = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9','!','"','#','$','%','&','\'','(',')','*','+',',','-','.','/',':',';','<','=','>','?','@','[','\\',']','^','_','`','{','|','}','~'];

    $paswordGenerating = '';
    $passwordCharsLength = count($passwordChars);
    // var_dump(count($passwordChars));

    // for ($i = 0, $res = ''; $i < $charLength; $res .= $passwordChars[rand(0, $passwordCharsLength - 1)], $i++) {
    //     ;
    // }
    do {
        $index = rand(0, $passwordCharsLength - 1);
        $paswordGenerating .= $passwordChars[$index];
        // var_dump ($paswordGenerating);
    }
    while (strlen($paswordGenerating) < $charLength);
    // return $res;
    return $paswordGenerating;
};


$charLengthStr = $_GET['pass_chr_number'];

if (!isset($charLengthStr) || $charLengthStr === '') {
    $charLength = 10;
} else {
    $charLength = intval($charLengthStr);
}

// var_dump($charLength);