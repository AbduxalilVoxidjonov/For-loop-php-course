
<form  method="post">
<input type="number" name="submit" value="number">
</form>

<?php
$n = $_POST["submit"];
$kopaytma = 1;
for($i = 1; $i<=$n; $i++){
    $kopaytma*=$i;
}
echo "Ko'paytma : $kopaytma";
?>    

