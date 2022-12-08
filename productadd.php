<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = new aSetter();
    $product->settt();
}
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
    <script src="jquery-3.6.1.min.js"></script>
    <script src="jquery-validation.js"></script>
    <script src="reg.js"></script>

    <script>
    $(document).ready(function() {
        $("#productType").change(function() {
            var selVal = $("#productType :selected").val();

            $(".divy").find("input").val("");

            $(".DVD,.BOOK,.FURNITURE").hide(0, function() {
                $("." + selVal).show()
            });
        })
    })
    </script>
</head>

<body>

    <div class="wrapper">
        <div class="hdr">
            <h1>Product List</h1>
            <div class="btns">
                <button type="submit" form="product_form" name="sub">SAVE</button>
                <button onclick='location.href = "index.php"'>CANCEL</button>
            </div>
        </div>

        <main class="forming">
            <form action="" id="product_form" method="POST">
                <label>SKU</label>
                <input type="text" id="sku" name="sku" />
                <br />

                <label>Name</label>
                <input type="text" id="name" name="name" />
                <br />

                <label>Price($)</label>
                <input type="number" id="price" name="price" />
                <br />

                <label>Type Switcher</label>
                <select name="select" id="productType">

                    <option value="SELECT" name="SELECT" selected="" disabled="">... . .-.. . -.-. -</option>
                    <option id="DVD" value="DVD">DVD</option>
                    <option id="BOOK" value="BOOK">Book</option>
                    <option id="FURNITURE" value="FURNITURE">Furniture</option>

                </select>
                <div class="divy">
                    <div class="SELECT"></div>

                    <div class="DVD">

                        <label>Size in MB</label>
                        <input type="number" id="size" name="size"><br>
                        <p>Please provide size in MB</p>
                    </div>

                    <div class="BOOK">

                        <label>Weight in KG</label>
                        <input type="number" id="weight" name="weight"><br>
                        <p>Please provide weight in KG</p>


                    </div>
                    <div class="FURNITURE">

                        <label>Height</label>
                        <input type="number" id="height" name="height"><br>

                        <label>Width</label>
                        <input type="number" id="width" name="width"><br>

                        <label>Length</label>
                        <input type="number" id="length" name="length"><br>

                        <p>Please provide dimension in CM</p>


                    </div>
                </div>
            </form>
        </main>
    </div>

    <div class="ftr">
        <p>Scandiweb Test assignment</p>
    </div>

</body>

</html>