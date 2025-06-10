<?php
 include"koneksi.php";
 //	$id = $_GET['id'];
 //	$sid = $_GET['sid'];
 	//$id_transaksi = $_POST['id_transaksi'];
 	$Codemember = $_POST['Codemember'];
	$nama=$_POST['nama'];
  $alamat=$_POST['alamat'];
  $no_tlp=$_POST['no_tlp'];
  $Codebarang=$_POST['Codebarang'];
  $nama_barang=$_POST['nama_barang'];
  $Merek_Sepatu=$_POST['Merek_Sepatu'];
  $Harga_Sepatu=$_POST['Harga_Sepatu'];
  $jumlah=$_POST['jumlah'];
  $total=$_POST['total'];
  $bayar=$_POST['bayar'];
  $kembalian=$_POST['kembalian'];
  //$status=$_POST['status'];
	//$ket=$_POST['ket'];

  $sel =mysqli_query($db_link,"select * from tb_barang where Codebarang='$Codebarang'");
  $Stok_Barang=mysqli_fetch_array($sel);
  $Stok_Barang=$Stok_Barang['Stok_Barang'];
  //menghitung sisa stok
  $sisa=$Stok_Barang-$jumlah;

  if($Stok_Barang<$jumlah){
    ?>
    echo " Stok Tidak Cukup";
    <?php
  }

  //proses
  else{

  $insertt =mysqli_query($db_link,"insert into tb_transaksi(Codemember,nama,alamat,no_tlp,Codebarang,Merek_Sepatu,Harga_Sepatu,jumlah,total,bayar,kembalian) values ('$Codemember','$nama','$alamat','$no_tlp','$Codebarang','$Merek_Sepatu','$Harga_Sepatu','$jumlah','$total','$bayar','$kembalian')");
 // if($insertt){
 //   $insertk =mysqli_query($db_link,"insert into keranjang(codemember,kodemobil,merk,harga, jumlah, subtotal,status) values ('$codemember','$kodemobil','$merk','$harga','$jumlah','$total','LUNAS')");
    if($insertt){
    $upstok=mysqli_query($db_link,"update tb_barang set Stok_Barang='$sisa' where Codebarang='$Codebarang'");
    ?>
    <script>alert('Berhasil melakukan pemesanan, Terima Kasih Sudah berbelanja')
    window.location='indexmenu_user1.php'</script>;
    <?php
  }
  else{
    echo "Data Tidak Tersimpan";
  }
}

?>