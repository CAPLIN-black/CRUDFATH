<?php
//memanggil koneksi
include ('koneksi.php');

//pengujian hapus
if (@$_GET['hal'] == "hapus")
{
  //hapus data
  $hapus = mysqli_query($koneksi, "DELETE FROM tbl_mhs WHERE id = '$_GET[id]' ");

  //jika hapus data sukses
  if ($hapus){
    echo "<script>
            alert('hapus data suksess boss!!');
            document.location='index.php';
        </script>";
  }
  else {
    echo "<script>
            alert('hapus data GAGAL boss!!');
            document.location='index.php';
        </script>";
  }
}

?>