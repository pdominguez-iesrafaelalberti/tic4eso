
<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}else if($_GET){
    echo '<pre>';
    echo htmlspecialchars(print_r($_GET, true));
    echo '</pre>';
}
?>