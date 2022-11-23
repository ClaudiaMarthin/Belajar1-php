<?php
// 1. buat koneksi dengan MySQL
$con = mysqli_connect("localhost","root","","fakultasku");

// 2. cek koneksi dengan MySQL
if(mysqli_connect_errno{}){
    echo "koneksi gagal ". mysqli_connect_error();
    }else{
        echo "koneksi berhasil"
    }

    // 3. membaca data dari table mysql.
    $query = "SELECT * FROM mahasiswa";

    // 4. tampilkan data, dengan menjalankan sql query
    $result = mysqli_query($con,$query);
    $mahasiswa = [];
    if ($result){
             // tampilkan data satu per satu 
            while$row = mysqli_fetch_assoc($result)){
                echo "<br>".$row["nama"]."alamt : ".$row["alamat"];
                $mahasiswa[] = $row;
            }
            mysqli_free_result($result);
    }
    // 5.tuutp koneksi mysql
    mysql_close($con);

    foreach($mahasiswa as $value){
        echo $value["nama"];
    }
    ?>

    <html>
    <head>
        <title>Data Mahasiswa</title>
</tr>

  </tr>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" style="width:100%;">
    <tr>
        <th>nim</th>
        <th>nama</th>
</tr>
<?php foreach(mahasiswa as $value): ?>
<tr>
    <td><?php echo $value["nim"]; ?></td>
    <td><?php echo $value["nama"]; ?></td>
</tr>
<?php endforeach; ?> 
</table>
</body>
</html>


