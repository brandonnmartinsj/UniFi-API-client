<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <?php

    foreach ($vouchers as $valor) {

        $resultado["code"] = $valor->code;
        $resultado["duration"] = $valor->duration;

        echo '<div class="voucher">';
        echo '<div class="line1">WiFi Voucher</div>';
        echo '<div class="line2">Valid for: ' . $resultado["duration"]  . 'Minutos </div>';
        echo '<div class="line3">' . $resultado["code"]  . '</div>';
        echo '</div>';

    }

    ?>

    <!-- <div class="voucher">
        <div class="line1">WiFi Voucher</div>
        <div class="line2">Valid for: <?php echo $resultado["duration"] ?> Minutos </div>
        <div class="line3"><?php echo $resultado["code"] ?></div>
    </div> -->

    <div class="bottom">
        <button onClick="window.print()" class="noPrint">Print</button>
    </div>

</body>

</html>