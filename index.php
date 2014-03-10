<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/application.css"/>
</head>
<body>
    <section class="delay" id="delay"></section>
    <section class="departure-time"><?php echo $_GET['time']; ?></section>
    <section class="train" id="type"><?php echo $_GET['type']; ?><img src="nslogo.svg"/></section>
    <section class="destination"><?php echo $_GET['destination']; ?></section>
    <section class="stops" id="stops">via Kogerveld, Zaandam, Sloterdijk en Lelylaan</section>
    <footer>
        <?php
        if($_GET['notice']) {
            echo "<section class='notice'>";
            echo $_GET['notice'];
            echo "</section>";
        }
        ?>
        <?php
        if($_GET['cancel']) {
            echo "<section class='next'>";
            echo $_GET['cancel'];
            echo "</section>";
        }
        ?>
        <section class="next">Volgende trein: <?php echo $_GET['next_time']; ?> <?php echo $_GET['next_type']; ?> <?php echo $_GET['next_destination']; ?></section>
    </footer>
    <script>
        var setDelay = <?php echo $_GET['delay']; ?>;
        var stops = [<?php
            $stops = explode(",", $_GET['stops']);
            foreach($stops as $stop) {
                echo("'");
                echo($stop);
                echo("', ");
            }
        ?>];
    </script>
    <script src="effects.js"></script>
</body>
</html>