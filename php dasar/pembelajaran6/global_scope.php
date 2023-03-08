<!-- global variable -->
<?php 

$x=10;

function nilai() {
    global $x;
    echo $x;
}
// nilai dari function
nilai();
echo "<br>";
// nilai dari variable x paling atas
echo $x;

?>