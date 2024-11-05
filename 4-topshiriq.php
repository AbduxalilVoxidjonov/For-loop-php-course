
<form  method="post">
<input type="number" name="submit" value="number">
</form>

<?php
$n = $_POST["submit"];
$sum = 0;
for($i = 2; $i<=$n; $i+=2){
    $sum+=$i;
}
echo "Sum : $sum";
?>    

