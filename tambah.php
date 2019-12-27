<?php
include("konek.php");
if(isset($_POST['tambah'])){
    $produk = $_POST['produk'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $sql = "INSERT INTO workshop (produk,gambar,diskripsi, harga) 
            VALUE (:produk,:gambar,:deskripsi,:harga)";
    $stmt = $db->prepare($sql);
    $params = array(
        ":produk" => $produk,
        ":gambar" => $gambar,
        ":deskripsi" => $deskripsi,
        ":harga" => $harga
    );
    $saved = $stmt->execute($params);
    if($saved) header("Location:index.php");
}
?>

<html>
    <head>
        <title>REGISTRY</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        .lol {
            border-style: solid;
            text-align: center;
            margin-top: 5%;
        }
    </style>

    <body>
        <div class="page-wrapper">
            <div class="container">
                <div class="row jstify-content-center">
                    <div class="col-4">

                    </div>
                    <div class="col-4 lol">
                        <form action="" method="POST">
                            <table>
                                <tr>

                                    <img style="width:40%;border-style: double;border-radius: 50%;margin-left: 0%;margin-top: 5%;border-width: 5px;;"
                                        src="tambah.png">

                                    <td>
                                        <h3 style="margin-top: 10%;"></h3><br>
                                        <label for="produk">PRODUK</label><br>
                                        <input type="text" id="produk" name="produk" placeholder="Nama Produk"><br>
                                        <br>
                                        <label for="foto">FOTO</label><br>
                                        <input type="file" id="foto" name="gambar" ><br>
                                        <br>
                                        <label for="deskripsi">DESKRIPSI</label><br>
                                        <textarea id="deskripsi" name="deskripsi" placeholder="Deskripsi Produk Anda" rows="5" cols="40"></textarea><br>
                                        <br>
                                        <label for="harga">HARGA</label><br>
                                        <input type="text" id="harga" name="harga" placeholder="Harga produk"><br>
                                        <br>
                                        <input type="submit" name="tambah" value="Tambahkan">
                                        <br>
                                        <a href="index.php" style=float:right>kembali</a>
                                    </td>
                                </tr>

                            </table>
                        </form>
                    </div>
                    <div class="col-4">

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>