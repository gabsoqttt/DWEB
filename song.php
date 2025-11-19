<?php
//song title and artist and mood
$title = "Infrunami";
$artist = "Steve Lacy";
$mood = "emotional";

//numeric variables 
$verseCount = 1; 
$repeatChorus = 2; 
//arrays
$nouns = ["girl", "one", "need", "blind", "me"];
$verbs = ["want", "need", "begging", "come", "see"]; 
$adjectives = ["right", "front"]; 

$chorus = [
    "Girl, you're the one I want",
    "You're the one I need",
    "I'm beggin' you, please",
    "Can you come back to me?",
    "Cause I was blind to see",
    "That you were right in front of me (You were right in front of me)",
    "You were right in front of me",
    "Girl (You were right in front of me)",
    "I was blind to see (I was, I was blind to see)",
    "That you were right in front of me (That you were right in front of me)",
    "You were right in front of me, yeah (You were right in front of me)"
];

$chorusRepeatText = $repeatChorus . " times"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> by <?php echo $artist; ?></title>
    <style>
        body { 
            font-family: 'Arial', sans-serif; 
            background-color: #f4f4f9; 
            color: #333; margin: 0; 
            padding: 0;
        }
        h1, h2 { 
            text-align: center; 
            color: #4CAF50; 
        }
        h3 { 
            text-align: center; 
            font-size: 1.5rem; 
            color: #2d2d2d; 
        }
        p { 
            text-align: center; 
            line-height: 1.8; 
            font-size: 1.1rem; 
        }
        div.lyrics { 
            padding: 20px; 
            max-width: 800px; 
            margin: 0 auto; 
            background-color: #ffffff; 
            border-radius: 10px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .chorus { 
            font-weight: bold; 
            color: #2d87f0; 
            margin-top: 20px; 
        }
        .verse {
            margin-top: 15px; 
            font-style: italic; 
            color: #555; 
        }
        .repeat-count { 
            font-size: 1.2rem; 
            font-weight: bold; 
            color: #e94e77; 
            margin-top: 20px; 
        }
    </style>
</head>
<body>
<h1><?php echo $title; ?></h1>
<h2>by <?php echo $artist; ?></h2>

<p>Song Mood: <strong><?php echo $mood; ?></strong></p>

<div class="lyrics">
    <h3>Chorus</h3>
    <?php

    for ($i = 0; $i < $repeatChorus; $i++) {
        foreach ($chorus as $line) {
            echo "<p class='chorus'>$line</p>";
        }
    }
    ?>

    <p class="repeat-count">Chorus repeats: <?php echo $chorusRepeatText; ?></p>

    <?php 
        $verses = $verseCount * 3; 
    ?>
    <p class="verse">There are <?php echo $verses; ?> total verses in the song.</p>
</div>

<div class="breakdown">
    <h3>Song Breakdown:</h3>
    
    <p><strong>Nouns used in the song:</strong> 
        <?php 
            echo "<span class='highlight'>{$nouns[0]}</span>, ";
            echo "<span class='highlight'>{$nouns[1]}</span>, ";
            echo "<span class='highlight'>{$nouns[2]}</span>, ";
            echo "<span class='highlight'>{$nouns[3]}</span>, ";
            echo "<span class='highlight'>{$nouns[4]}</span>";
        ?>
    </p>

    <p><strong>Verbs used in the song:</strong> 
        <?php 
    
            echo "<span class='highlight'>{$verbs[0]}</span>, ";
            echo "<span class='highlight'>{$verbs[1]}</span>, ";
            echo "<span class='highlight'>{$verbs[2]}</span>, ";
            echo "<span class='highlight'>{$verbs[3]}</span>, ";
            echo "<span class='highlight'>{$verbs[4]}</span>";
        ?>
    </p>

    <p><strong>Adjectives used in the song:</strong> 
        <?php 
            echo "<span class='highlight'>{$adjectives[0]}</span>, ";
            echo "<span class='highlight'>{$adjectives[1]}</span>";
        ?>
    </p>
</div>

</body>
</html>
