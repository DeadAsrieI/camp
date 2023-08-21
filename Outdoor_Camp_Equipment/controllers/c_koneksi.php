<?php
class C_koneksi{
    public function conn(){
        $conn = mysqli_connect('localhost', 'root', '', 'camp');
    
        if (!$conn){
            die("koneksi gagal: " . mysqli_connect_error());
        } else{
            echo "koneksi ke database berhasil";
        }
    }

}

$conn = new C_koneksi();
$conn->conn();

?>