<!DOCTYPE html>
<html>

<body>
    <?php

    $jumlah = isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : null;

    if (isset($_POST['tambah'])) {
        $jumlah++;
    } elseif (isset($_POST['kurang'])) {
        if ($jumlah > 0) $jumlah--;
    }
    ?>
    <form action="" method="post">
        <?php if (is_null($jumlah) || $jumlah == 0) { ?>
            Jumlah bintang <input type="number" name="jumlah" min="0"><br>
            <input type="submit" value="Submit">
        <?php } else { ?>
            <p>Jumlah bintang <?php echo $jumlah; ?></p>

            <?php
            for ($i = 0; $i < $jumlah; $i++) {
                echo "<img src='star.png' width='50' style='margin: 2px;'>";
            }
            ?>

            <br><br>
            <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang">
        <?php } ?>
    </form>
</body>

</html>