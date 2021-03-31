<?php
// Mengambil data account.php untuk digunakan datanya
include "account.php";
//pengecekan kondisi variabel menggunakan metode equal to atau ==
if ($_POST['username'] == $username) { //perbandingan inputan dengan data dari account.pnp
    if ($_POST['email'] == $email) { //perbandingan inputan dengan data dari account.pnp
        //if boolean check bernilai true, maka akan menuju ke index.php
        header("Location:/budi/tugas5/tugas1/index.php"); 
    } else {
        header("Location:/budi/tugas5/tugas1/blank_gmail_log.php"); 
    }
} else {
    header("Location:/budi/tugas5/tugas1/blank_user_log.php");
}
