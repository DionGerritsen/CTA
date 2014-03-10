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
    <section class="stops">via Kogerveld, Zaandam, Sloterdijk en Lelylaan</section>
    <footer>
        <section class="next">08:22 Sprinter Schiphol rijdt niet</section>
        <section class="next">Volgende trein: 08:52 Sprinter Schiphol</section>
    </footer>
    <script>
        var setDelay = <?php echo $_GET['delay']; ?>;
        var stops = [
        <?php
            $stops = $_GET['stops'];
            $stops = $stops.explode(',');
            for($i = 0; $i < $stops.length(), $i++) {
                echo $stops[$i] + ",";
            }
        ?>
        ];
    </script>
    <script src="effects.js"></script>
</body>
</html>