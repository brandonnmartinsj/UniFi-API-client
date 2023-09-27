<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
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


    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>