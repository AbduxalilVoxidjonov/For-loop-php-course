
<form  method="post">
N:<input type="number" name="submitN" value="number">
M:<input type = "number" name ="submitM" value="number">
<input type = "submit">
</form>

<?php
$n = $_POST["submitN"];
$m = $_POST["submitM"];
$sum = 0;
for($i = $n; $i<= $m; $i++){
    if($i%4==0){
        $sum+=$i;
    }
}
echo "Sum : $sum";
?>    

