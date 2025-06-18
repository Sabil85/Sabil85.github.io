<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header><h1>Perhitungan</h1></header>
    <nav>
        <ul>
            <li><a href="index.html">Halaman Utama</a></li>
            <li><a href="halaman1.php">Link 1</a></li>
            <li><a href="halaman2.php">Link 2</a></li>
        </ul>
    </nav>
    <main>
        <h2>Form Perhitungan</h2>
        <form method="POST">
            Angka 1: <input type="number" name="a1"><br>
            Angka 2: <input type="number" name="a2"><br>
            <input type="submit" value="Hitung">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a1 = $_POST["a1"];
            $a2 = $_POST["a2"];
            // Ganti dengan logika sesuai NPM (misal ganjil)
            echo "<p>Perkalian: " . ($a1 * $a2) . "</p>";
            echo "<p>Pengurangan: " . ($a1 - $a2) . "</p>";
        }
        ?>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>
