<!DOCTYPE html>

<body>
    <form action="" method="post">
        Jumlah Peserta: <input type="text" name="peserta" value="<?php if(isset($_POST['peserta'])) echo $_POST['peserta']; ?>"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['peserta'];
        $x = 1;

        while ($x <= $jumlah) {
            $text = "Peserta Ke-$x";
            $x++;
            if ($x % 2) {
                echo '<h2 style="color:green;">' . $text . '</h2>';
            } else {
                echo '<h2 style="color:red;">' . $text . '</h2>';
            }
        }
    }
    ?>
</body>

</html>