<?php
$playerName = "Kim Charles";
$hour = date("H");

$topPlayers = [
    ["name" => "Stephen Curry", "team" => "Golden State Warriors", "ppg" => 27.9],
    ["name" => "Shai Gilgeous-Alexander", "team" => "OKC Thunder", "ppg" => 32.9],
    ["name" => "Giannis Antetokounmpo", "team" => "Milwaukee Bucks", "ppg" => 31.1],
    ["name" => "Luka Dončić", "team" => "LA Lakers", "ppg" => 35.1],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Statement</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>
            <?php
            if ($hour < 12) {
                echo "Rise and grind, " . $playerName . "!";
            } elseif ($hour < 18) {
                echo "Keep hustling, " . $playerName . "!";
            } else {
                echo "Time to cool down, " . $playerName . "!";
            }
            ?>
        </h1>

        <p>Welcome to your basketball dashboard. Here are some top scorers this season:</p>
        <table>
            <tr>
                <th>Player</th>
                <th>Team</th>
                <th>Points Per Game</th>
            </tr>
            <?php
            for ($i = 0; $i < count($topPlayers); $i++) {
                echo "<tr>";
                echo "<td>" . $topPlayers[$i]["name"] . "</td>";
                echo "<td>" . $topPlayers[$i]["team"] . "</td>";
                echo "<td>" . $topPlayers[$i]["ppg"] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
</html>