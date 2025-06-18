<!DOCTYPE html>
<html>
<head>
    <title>Hitung Diskon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Hitung Diskon</h1></header>
    <nav>
        <ul>
            <li><a href="index.html">Halaman Utama</a></li>
            <li><a href="halaman1.php">Link 1</a></li>
            <li><a href="halaman2.php">Link 2</a></li>
        </ul>
    </nav>
    <main>
        <h2>Form Diskon</h2>
        <form method="POST">
            Harga: <input type="number" name="harga"><br>
            Diskon (%): <input type="number" name="diskon"><br>
            <input type="submit" value="Hitung">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $harga = $_POST["harga"];
            $diskon = $_POST["diskon"];
            $hasil = $harga - ($harga * $diskon / 100);
            echo "<p>Harga Setelah Diskon: Rp $hasil</p>";
        }
        ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
