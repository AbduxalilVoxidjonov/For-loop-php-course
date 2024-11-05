
<form  method="post">
<input type="text" name="submit" >
</form>

<?php
$n = $_POST["submit"];
$sum = 0;
for($i = 0; $i< strlen($n); $i++){
    if($n[$i]=='r'){
        $sum++;
    }
}
echo "Sum : $sum";
?>    

