<?php
$schoolString = "HOLY ANGEL UNIVERSITY";
$nameString = "Kim Charles Prosas";
$sampleString = "This is PHP";
$advancedString = "String Function.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String Functions</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>PHP String Functions Showcase</h1>
        <table>
            <tr><th colspan="2">Changing the Case of Characters</th></tr>
            <tr><td>Lowercase</td><td><?php echo strtolower($schoolString); ?></td></tr>
            <tr><td>Uppercase</td><td><?php echo strtoupper($schoolString); ?></td></tr>
            <tr><td>Capitalize Each Word</td><td><?php echo ucwords(strtolower($schoolString)); ?></td></tr>

            <tr><th colspan="2">Counting Characters and Words</th></tr>
            <tr><td>Number of Characters</td><td><?php echo strlen($nameString); ?></td></tr>
            <tr><td>Number of Words</td><td><?php echo str_word_count($nameString); ?></td></tr>

            <tr><th colspan="2">Removing and Replacing Characters</th></tr>
            <tr><td>Trim Left</td><td><?php echo ltrim($sampleString); ?></td></tr>
            <tr><td>Trim Right</td><td><?php echo rtrim($sampleString); ?></td></tr>
            <tr><td>Trim Both</td><td><?php echo trim($sampleString); ?></td></tr>
            <tr><td>Replace (case-sensitive)</td><td><?php echo str_replace("PHP", "HTML", $sampleString); ?></td></tr>
            <tr><td>Replace (case-insensitive)</td><td><?php echo str_ireplace("php", "SQL", $sampleString); ?></td></tr>
            <tr><td>Repeat String</td><td><?php echo str_repeat("HELLO ", 5); ?></td></tr>

            <tr><th colspan="2">Other Advanced Built-in Functions</th></tr>
            <tr><td>Word Count with Array</td><td><?php print_r(str_word_count($advancedString, 1)); ?></td></tr>
            <tr><td>Split String by Length</td><td><?php print_r(str_split("HELLO", 2)); ?></td></tr>
            <tr><td>Convert to Lowercase First Character</td><td><?php echo lcfirst("HELLO PHP"); ?></td></tr>
            <tr><td>Hexadecimal Value</td><td><?php echo bin2hex("Candy"); ?></td></tr>
            <tr><td>Convert Hex to String</td><td><?php echo hex2bin("43616e6479"); ?></td></tr>
            <tr><td>MD5 Hash</td><td><?php echo md5("password123"); ?></td></tr>
            <tr><td>SHA1 Hash</td><td><?php echo sha1("securedata"); ?></td></tr>
            <tr><td>Parse CSV String</td><td><?php print_r(str_getcsv("red,green,blue")); ?></td></tr>
            <tr><td>Count Substring Occurrences</td><td><?php echo substr_count($advancedString, "ing"); ?></td></tr>
        </table>
    </div>
</body>
</html>

