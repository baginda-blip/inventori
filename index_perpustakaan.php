<style type="text/css">
    .header{
        background-color: orange;
    }
</style>
<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM perpustakaan ORDER BY id DESC");
?>

<html>
<head>    
    <title>Sim Rs</title>
</head>

<body>
    <b>Data perpustakaan</b><br>
<a href="add_perpustakaan.php">Tambah Data pinjaman</a><br/><br/>

    <table width='80%' border=1>

    <tr class="header">
         <th>No</th><th>buku</th> <th>penulis</th> <th>peminjam</th> <th>id_peminjam</th> <th>waktu_pinjaman</th> <th>aksi</th>
    </tr>
    <?php  
    $i=1;
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$user_data['buku']."</td>";
        echo "<td>".$user_data['penulis']."</td>";
        echo "<td>".$user_data['peminjam']."</td>";
        echo "<td>".$user_data['id_peminjam']."</td>";   
        echo "<td>".$user_data['waktu_pinjaman']."</td>";          
        echo "<td><a href='edit_perpustakaan.php?id=$user_data[id]'>Edit</a> | <a href='delete_perpustakaan.php?id=$user_data[id]'>Delete</a></td></tr>"; 
        $i++;       
    }
    ?>
    </table>
</body>
</html>