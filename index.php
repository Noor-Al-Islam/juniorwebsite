<?php
include 'config.php';
if (isset($_POST['del']) && isset($_POST['checkbox'])) {
    $del = new annihilate();
    $del->del();
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="c55.css" />
</head>

<body>
    <div class="wrapper">
        <div class="hdr">
            <h1>Product List</h1>
            <div class="btns">
                <button onclick='location.href = "productadd.php"'>ADD</button>
                <button type="submit" form="aform" name="del">MASS DELETE</button>
            </div>
        </div>
        <div class="main">
            <form id="aform" method="POST">
                <?php
                $fetch = new aGetter();
                $fetch->gettt();
                ?>
            </form>
        </div>
    </div>
    <div class="ftr">
        <p>Scandiweb Test assignment</p>
    </div>
</body>

</html>