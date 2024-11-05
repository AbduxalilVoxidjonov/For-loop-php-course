

<form  method="post">
<input type="number" name="submit" value="number">
</form>
<?php
$n = $_POST["submit"];
for($i = 1; $i<=$n; $i++){
    echo "Number: $i\n"; 
}
?>    

