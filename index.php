<html>
<img src="logo.png">
<br>
<?php
    $hostName = `hostname`;
    echo "Instace Name: " . $hostName;

if(array_key_exists('startStress', $_POST)){
    startStress();
}
else if(array_key_exists('stopStress', $_POST)){
    stopStress();
}
function startStress(){
    `stress --cpu 1`;
}
function stopStress(){
    `pkill stress`;
}
?>
<form method="POST">
    <input type="submit" name="startStress" class="button" value="startStress">
    <input type="submit" name="stopStress" class="button" value="stopStress">
</form>
</html>
