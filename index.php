<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Jeu | Samurai Shadow</title>
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <script src="js/game_manager.js"></script>
    <script src="js/player.js"></script>
    <script src="js/enemy.js"></script>
</head>

<body>

    <div class="header">
        <p> Only one can rule Edo!</p>
        <h2>
            Choose your character!</h2>
    </div>

    <div class="interface">
        <a href="#" onclick="GameManager.setGameStart('Samurai')">
            <img src="img/avatar-player/samurai.jpg" alt="warrior">
            <div>
                <h3>Samurai</h3>
                <p>Samurais have higher health and stamina, however their
                    strength also makes them slower and clumsier.</p>
            </div>
        </a>
        <a href="#" onclick="GameManager.setGameStart('Shinobi')">
            <img src="img/avatar-player/shinobi.jpg" alt="rogue">
            <div>
                <h3>Shinobi</h3>
                <p>Shinobis are fast and have high stamina and speed which makes up
                    for their lack in strength and health.</p>
            </div>
        </a>
        <a href="#" onclick="GameManager.setGameStart('Witcher')">
            <img src="img/avatar-player/witcher.jpg" alt="mage">
            <div>
                <h3>Witcher</h3>
                <p>Witchers are glass canons which puts all their effort into spells; 
                    This means they slack on everything else.</p>
            </div>
        </a>
        <a href="#" onclick="GameManager.setGameStart('Archer')">
            <img src="img/avatar-player/archer.jpg" alt="hunter">
            <div>
                <h3>Archer</h3>
                <p>Archers are well rounded fighters that focus on evening out 
                    their skills. No strengths or weaknesses.</p>
            </div>
        </a>
    </div>

    <div class="actions">

    </div>

    <div class="arena">

    </div>

    <div class="enemy">

    </div>

    

</body>

</html>