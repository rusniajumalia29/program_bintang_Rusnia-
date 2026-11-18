<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETORBIT Programming - Segitiga</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; }
        .container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); max-width: 600px; }
        pre { background: #f4f4f4; padding: 10px; border: 1px solid #ddd; border-radius: 4px; display: inline-block; font-family: monospace; font-size: 16px; line-height: 1.2; }
        .error { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <form method="POST" action="">
        <label for="tinggi"><strong>Tinggi = </strong></label>
        <input type="number" name="tinggi" id="tinggi" min="1" max="20"
            value="<?php echo isset($_POST['tinggi']) ? htmlspecialchars($_POST['tinggi']) : ''; ?>" required>
        <button type="submit" name="submit">Tampilkan</button>
    </form>
    <br>

    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi'];
        if (!filter_var($tinggi, FILTER_VALIDATE_INT) || $tinggi < 1 || $tinggi > 20) {
            echo '<p class="error">Masukan tidak valid! Harap masukkan bilangan bulat antara 1 sampai 20.</p>';
        } else {
            echo "<p><strong>Tinggi = $tinggi</strong></p>";

            // 1. Segitiga Atas
            echo "<h4>1. Segitiga Atas (Sama Kaki)</h4>";
            echo "<pre>";
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($j = 1; $j <= ($tinggi - $i); $j++) {
                    echo " ";
                }
                for ($k = 1; $k <= (2 * $i - 1); $k++) {
                    echo "*";
                }
                echo "\n";
            }
            echo "</pre>";

            // 2. Segitiga Bawah
            echo "<h4>2. Segitiga Bawah (Sama Kaki Terbalik)</h4>";
            echo "<pre>";
            for ($i = $tinggi; $i >= 1; $i--) {
                for ($j = 1; $j <= ($tinggi - $i); $j++) {
                    echo " ";
                }
                for ($k = 1; $k <= (2 * $i - 1); $k++) {
                    echo "*";
                }
                echo "\n";
            }
            echo "</pre>";

            // 3. Segitiga Kanan
            echo "<h4>3. Segitiga Kanan (Siku-siku Kanan)</h4>";
            echo "<pre>";
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($j = 1; $j <= ($tinggi - $i); $j++) {
                    echo "  ";
                }
                for ($k = 1; $k <= $i; $k++) {
                    echo "* ";
                }
                echo "\n";
            }
            echo "</pre>";

            // 4. Segitiga Kiri
            echo "<h4>4. Segitiga Kiri (Siku-siku Kiri)</h4>";
            echo "<pre>";
            for ($i = 1; $i <= $tinggi; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "* ";
                }
                echo "\n";
            }
            echo "</pre>";
        }
    }
    ?>
</div>

</body>
</html>
