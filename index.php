<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
if (isset($_POST['wa'])) {
    if (!empty($message) || !empty($nama) || !empty($email) || !empty($subject)) {
        header("location: https://api.whatsapp.com/send?phone=628892907236&text=Assalamualaikum mamang hamsah%0ANama: ".$nama."%0AEmail: ".$email."%0ASubject: ".$subject."%0AMessage: ".$message);
    }
}