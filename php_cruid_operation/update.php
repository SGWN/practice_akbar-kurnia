<?php

include"connection.php";

$update=$db->exec("update siswa set nama='".$_POST['nama']."',role='".$_POST['role']."'where id_siswa=".$_POST['id_siswa']);

if($update)
{
    header("Location:index.php");
}