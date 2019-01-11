<!DOCTYPEhtml>
<html>
    <head>
        <title>Tambah Data</title>
        <style>
        input[type=text]{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit]{
            width: 25%;
            float: right;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover{
            background-color: #45a049;
        }

        table{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: 32%;
        }

        </style>
    </head>
    <body>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <table>
            <tr>
                <td>NIS</td>
                <td><input type="text" name="Nis" /></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" size=40 /></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password" /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" /></td>
            </tr>
        </table>
        </form>
    </body>
</html>

<!--PHP Script Begin -->
<?php 
    require_once "connect.php";

    //jika filed nis dan nama diisi lalu submit
    if(isset($_POST['Nis']) && isset($_POST['nama'])){
        $Nis = $_POST['Nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

        //Tambahkan data baru ke table
        $sql = "INSERT INTO tb_siswa VALUES ('" .$Nis. "', '" .$nama. "', '" .$alamat. "', '" .$password. "')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo 'Data Berhasil Ditambahkan';
        }
        else {
            echo 'Gagal Menambahkan Data <br>';
            echo mysqli_error($connect);
        }
    }

    echo '<hr />';
    //memanggil file record.php untuk menampilkan hasil
    require_once "./record.php";
?>
<!-- PHP Script END -->