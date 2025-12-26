<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "classmanagement"); //? connect database

//? memasukkan data matakuliah baru
if(isset($_POST['tambahmatkul'])){
    $namamatkul = $_POST['namamatkul'];
    $hari = $_POST['hari'];
    $namadosen = $_POST['namadosen'];
    $jammatkul = $_POST['jammatkul'];

    $addtotable = mysqli_query($conn, "INSERT into matakuliah (namamatkul, hari, namadosen, jammatkul) values('$namamatkul', '$hari', '$namadosen', '$jammatkul')");
    if($addtotable) {
        header('Location: matakuliah.php');
    } else {
        echo "Gagal";
        header('Location: matakuliah.php');
    }
}