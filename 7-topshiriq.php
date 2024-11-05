
<form  method="post">
M:<input type="number" name="submitM" value="number">
N:<input type = "number" name ="submitN" value="number">
<input type = "submit">
</form>

<?php
$n = $_POST["submitN"];
$m = $_POST["submitM"];
$sum = 0;
for($i = $m; $i<= $n; $i++){
    if($i%2==0){
        $sum++;
    }
}
echo "Sum : $sum";
?>    

