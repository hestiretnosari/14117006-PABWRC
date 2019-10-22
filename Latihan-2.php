<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan 2</title>
</head>

<body>
    <form method="GET" action="">
        <label for="nama">Nama : </label>
        <input type="text" name="nama"> <br></br>
        <label for="color">Color : </label>

        <select name="color" id="">
            <option value="yellow">Yellow</option>
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            <option value="black">Black</option>
        </select>
        <br></br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $x = $_GET['nama'];
        $y = $_GET['color'];

        function pilihan($nama)
        {
            if (strlen($nama > 20)) {
                return ((strlen($nama)) * 700);
            } elseif (strlen($nama > 11)) {
                return ((strlen($nama)) * 500);
            } else {
                return ((strlen($nama)) * 300);
            }
        }
        echo "<br>";
        echo "<font color='$y'>Nama = $x <br>";
        echo "<font color='$y'>Harga bet untuk nama $x adalah = " . pilihan($x);
    }
    ?>
</body>

</html>