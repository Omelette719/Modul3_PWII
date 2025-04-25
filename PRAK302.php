<!DOCTYPE html>
<html>
<body>
    <form action="" method="post">
        Tinggi: <input type="text" name="tinggi" value="<?php if(isset($_POST['tinggi'])) echo $_POST['tinggi']; ?>"><br>
        Alamat Gambar: <input type="text" name="imagelink" value="<?php if(isset($_POST['imagelink'])) echo $_POST['imagelink']; ?>"><br>
        <button type="submit" name="submit">Cetak</button><br><br>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $tinggi = $_POST["tinggi"];
        $gambar = $_POST["imagelink"];
        if (!empty($tinggi) && !empty($gambar)) {
            $i = $tinggi;
            while ($i >= 1) {
                $spasi = $tinggi - $i;
                while ($spasi > 0) {
                    echo "<span style='display:inline-block; width:20px;'></span>";
                    $spasi--;
                }
    
                $j = 1;
                while ($j <= $i) {
                    echo "<img src='$gambar' width='20'>";
                    $j++;
                }
    
                echo "<br>";
                $i--;
            }
        }
    }
    
    ?>
</body>

</html>