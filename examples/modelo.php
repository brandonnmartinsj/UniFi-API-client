<!-- <p>Codigo: <?php echo $resultado["code"] ?></p>
<p>Create Time: <?php echo $resultado["create_time"] ?></p>
<p>Duration: <?php echo $resultado["duration"] ?></p> -->



<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<div class="voucher">
    <div class="line1">WiFi Voucher</div>
    <div class="line2">Valid for: <?php echo $resultado["duration"] ?> Minutos </div>
    <div class="line3"><?php echo $resultado["code"] ?></div>
</div>
</body>
</html>

