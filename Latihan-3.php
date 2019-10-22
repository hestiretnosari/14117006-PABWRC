<!DOCTYPE html>
<html>

<head>
    <title>Menghitung Faktorial</title>
</head>

<body>
    <h3>Menghitung Faktorial</h3>
    <form name="" method="POST">
        <table>
            <tr>
                <td>Masukkan Angka : </td>
                <td><input type="text" name="txtAngka" size="6" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="hasil" value="Hasil" /></td>
            </tr>
        </table>

        <?php
        error_reporting(0);
        if ($_POST['hasil'] != '') {
            $angka = $_POST['txtAngka'];

            function faktorial($angka)
            {
                if ($angka <= 1) {
                    $hasil = 1;
                    return $hasil;
                } elseif ($angka > 1) {
                    for ($i = 1; $i <= $angka; $i++) {
                        $hasil = $angka * faktorial($angka - 1);
                    }
                    return $hasil;
                }
            }
            echo "<br>";
            echo "Faktorial dari " . " " . $angka . " " . "adalah :" . " " . faktorial($angka);
        }
        ?>
    </form>
</body>

</html>