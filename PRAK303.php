<!DOCTYPE html>
<html>

<body>
    <form action="" method="post">
        Batas Bawah: <input type="text" name="bawah" value="<?php if(isset($_POST['bawah'])) echo $_POST['bawah']; ?>"><br>
        Batas Atas: <input type="text" name="atas" value="<?php if(isset($_POST['atas'])) echo $_POST['atas']; ?>"><br>
        <button type="submit" name="submit">Cetak</button><br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bawah = $_POST["bawah"];
        $atas = $_POST["atas"];
        $i = $bawah;

        do {
            if (($i + 7) % 5 == 0) {
                echo "<img src='star.png' width='25'>";
            } else {
                echo $i . " ";
            }
            $i++;
        } while ($i <= $atas);
    }
    ?>
</body>

</html>