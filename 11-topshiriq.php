<form method="post">
    <input type="number" name="submit" required>
    <button type="submit">Submit</button>
</form>

<?php

    $n = $_POST["submit"];
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $text = "";
        for ($j = 1; $j <= $i; $j++) {
            $text .= "1";
        }
        $number = (int)$text;
        $sum += $number;
    }

    echo "Sum: $sum";

?>
