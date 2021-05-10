<?php
if ($_POST) {
    echo "Es un método POST"."<br>";
    print_r($_POST);
}else if($_GET){
    echo "Es un método GET"."<br>";
    print_r($_GET);
}
?>
