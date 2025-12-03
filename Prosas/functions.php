<?php
$playerName = "Kim Charles";
$hour = date("H");

$topPlayers = [
    ["name" => "Stephen Curry", "team" => "Golden State Warriors", "ppg" => 27.9],
    ["name" => "Shai Gilgeous-Alexander", "team" => "OKC Thunder", "ppg" => 32.9],
    ["name" => "Giannis Antetokounmpo", "team" => "Milwaukee Bucks", "ppg" => 31.1],
    ["name" => "Luka Dončić", "team" => "LA Lakers", "ppg" => 35.1],
];


function getGreeting($hour, $playerName) {
    if ($hour < 12) {
        return "Rise and grind, " . $playerName . "!";
    } elseif ($hour < 18) {
        return "Keep hustling, " . $playerName . "!";
    } else {
        return "Time to cool down, " . $playerName . "!";
    }
}


function renderPlayersTable($players) {
    $output = "";
    foreach ($players as $player) {
        $output .= "<tr>";
        $output .= "<td>" . $player["name"] . "</td>";
        $output .= "<td>" . $player["team"] . "</td>";
        $output .= "<td>" . $player["ppg"] . "</td>";
        $output .= "</tr>";
    }
    return $output;
}


function getTopScorer($players) {
    $top = $players[0];
    foreach ($players as $player) {
        if ($player["ppg"] > $top["ppg"]) {
            $top = $player;
        }
    }
    return $top;
}

$bestPlayer = getTopScorer($topPlayers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FUNCTION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo getGreeting($hour, $playerName); ?></h1>

        <p>Welcome to your basketball dashboard. Here are some top scorers this season:</p>
        <table>
            <tr>
                <th>Player</th>
                <th>Team</th>
                <th>Points Per Game</th>
            </tr>
            <?php echo renderPlayersTable($topPlayers); ?>
        </table>

        <h2>Top Scorer</h2>
        <p>
            The current top scorer is 
            <strong><?php echo $bestPlayer["name"]; ?></strong> 
            from <?php echo $bestPlayer["team"]; ?> 
            with <strong><?php echo $bestPlayer["ppg"]; ?></strong> points per game!
        </p>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
</html>