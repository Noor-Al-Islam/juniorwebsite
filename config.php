<?php


/* class dbconn
{
    protected function conn()
    {
        try {
            $db = new PDO("mysql:host=sql313.epizy.com;dbname=epiz_33158130_mydb", "epiz_33158130", "g5639Bh0vQ");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $db;
    }
} */
class dbconn
{
    protected function conn()
    {
        try {
            $db = new PDO("mysql:host=localhost;dbname=testinggg", "root", "");
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return $db;
    }
}


class validate extends dbconn
{
    public function skuV()
    {
        $sku = $_POST['sku'];
        $stmt = $this->conn()->prepare("SELECT sku FROM product_list WHERE sku = '$sku'");
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo 'false';
        } else {
            echo 'true';
        }
    }
}


class aSetter extends dbconn
{
    public function settt()
    {
        $sku = $_POST['sku'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $size = $_POST['size'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $width = $_POST['width'];
        $length = $_POST['length'];

        $sql = "INSERT INTO product_list (sku,name,price,size,weight,height,width,length) VALUES
                ('$sku','$name','$price','$size','$weight','$height','$width','$length')";
        $stmt = $this->conn()->prepare($sql);
        $stmt->execute();
        header('Location: index.php');
    }
}


class aGetter extends dbconn
{
    public function gettt()
    {

        foreach ($this->conn()->query("SELECT * FROM product_list") as $row) {
            $id = $row['id'];
            $sku = $row['sku'];
            $name = $row['name'];
            $price = $row['price'] . "$";
            $property = "";
            if ($row['size']) {
                $property = "Size: " . $row['size'] . " MB";
            } else if ($row['weight']) {
                $property = "Weight: " . $row['weight'] . " KG";
            } else {
                $property = "Dimension: " . $row['height'] . "x" . $row['width'] . "x" . $row['length'];
            }
            echo "<div>" .
                "<input type='checkbox' class='delete-checkbox' name='checkbox[" . $id . "]'>" .
                "<p>" . $sku . "</p>" .
                "<p>" . $name . "</p>" .
                "<p>" . $price . "</p>" .
                "<p>" . $property . "</p>" .
                "</div>";
        }
    }
}


class annihilate extends dbconn
{
    public function del()
    {

        foreach ($_POST['checkbox'] as $id => $stats) {

            $stmt = $this->conn()->prepare("DELETE FROM product_list WHERE id = '$id'");
            $stmt->execute();
        }
    }
}