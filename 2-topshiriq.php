
<form  method="post">
<input type="number" name="submit" value="number">
</form>

<?php
$n = $_POST["submit"];
$sum = 0;
for($i = 1; $i<=$n; $i++){
    $sum+=$i;
}
echo "summa : $sum";
?>    

