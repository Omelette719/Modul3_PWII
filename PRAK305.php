<!DOCTYPE html>
<html>

<body>
    <form action="" method="post">
        <input type="text" name="teks">
        <button type="submit" name="submit">submit</button><br>
    </form>

    <?php
    if (isset($_POST['teks'])) {
        $input = $_POST['teks'];
        $panjang = strlen($input);

        echo "<h2>Input:</h2>";
        echo $input;
        echo "<h2>Output:</h2>";

        $i = 0;
        while ($i < $panjang) {
            $huruf = $input[$i];
            echo strtoupper($huruf);

            $j = 1;
            while ($j < $panjang) {
                echo strtolower($huruf);
                $j++;
            }
            $i++;
        }
    }
    ?>
</body>

</html>