<?php
// Function is_select() dipindahkan dari ubah.php Praktikum 8.
function is_select($var, $val) {
    if ($var == $val) return 'selected="selected"';
    return false;
}
?>
