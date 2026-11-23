<?php
// Penghapusan menggunakan POST sesuai catatan keamanan pada modul Praktikum 9.
if (isset($_POST['submit']) && isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM data_barang WHERE id_barang = '{$id}'";
    $result = mysqli_query($conn, $sql);
}

header('Location: index.php?page=user/list');
exit;
?>
