<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "classmanagement"); //? connect database

//? memasukkan data matakuliah baru
if(isset($_POST['addnewmatkul'])){
    $idmatkul = $_POST['idmatkul'];
    $namamatkul = $_POST['namamatkul'];
    $tanggal = $_POST['tanggal'];
    $namadosen = $_POST['namadosen'];
    $jammatkul = $_post['jammatkul'];

    $addtotable = mysqli_query($conn, "INSERT into matkul (idmatkul, namamatkul, tanggal, namadosen, jammatkul) values('$idmatkul', '$namamatkul', '$tanggal', '$namadosen', '$jammatkul')");
    if($addtotable) {
        header('Location: matakuliah.php');
    } else {
        echo "Gagal";
        header('Location: matakuliah.php');
    }
}