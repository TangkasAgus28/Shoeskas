<?php
  session_start();
  if(isset($_SESSION['username'])){
    include "koneksi.php";
  }else{
    header("location:index.php");
  }
?>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

<body>
   <div class="container">
          <h1>FORM TRANSASKSI</h1>
          <br>
          <br>
          <br>
  <form name="autoSumForm" method="post" bgcolor="red" width="75%" action="aksi_tambahtransaksi.php">
    <label align ="center">DATA PELANGGAN</label>
    <br>
    <br>
    <fieldset>
    <?php
      $user=$_SESSION['username'];
      $sql = "SELECT * FROM tb_registrasi WHERE username ='$user'";
      $query = mysqli_query($db_link,$sql);
      $data = mysqli_fetch_array($query);
    ?>

      <tr>
        <label>CODEMEMBER</label>
        <input name='Codemember' type='text' id="Codemember" readonly="readonly" value="<?php echo $data['Codemember'] ?>">
      </tr>
      <tr>
        <label>NAMA</label>
        <input name='nama' type='text' id="nama" readonly="readonly" value="<?php echo $data['nama'] ?>">
        </tr>
<tr>
        <label>ALAMAT</label>
        <input name='alamat' type='text' id="alamat" readonly="readonly" value="<?php echo $data['alamat'] ?>">
      </tr>
<tr>
        <label>No HP</label>
        <input name='no_tlp' type='number' id="no_tlp" readonly="readonly" value="<?php echo $data['no_tlp'] ?>">
      </tr>

      </fieldset>
<br>
    <br>
    <label>DATA SEPATU</label>
    <br>
    <br>
    <fieldset>


    <?php
      $sid=$_GET['sid'];
      $sql2 = "SELECT * FROM tb_barang WHERE Codebarang ='$sid'";
      $query2 = mysqli_query($db_link,$sql2);
      $data2 = mysqli_fetch_array($query2);
    ?>
        <tr>
        <label>CODESEPATU</label>
        <input name='Codebarang' type='text' id="Codebarang" readonly="readonly" value="<?php echo $data2['Codebarang'] ?>">
      </tr>
      <tr>
        <label>MEREK SEPATU</label>
        <input name='Merek_Sepatu' type='text' id="Merek_Sepatu" readonly="readonly" value="<?php echo $data2['Merek_Sepatu'] ?>">
        </tr>
<tr>
        <label>HARGA PRODUK</label>
        <input name='Harga_Sepatu' type='text' id="Harga_Sepatu" readonly="readonly" value="<?php echo $data2['Harga_Sepatu'] ?>" onFocus="startCalc();" onBlur="stopCalc();">
      </tr>
<tr>
        <label>JUMLAH PESANAN</label>
        <input type="number" name="jumlah" value="1" onFocus="startCalc();" onBlur="stopCalc();">
      </tr>
      <tr>
        <label>TOTAL</label>
        <input type="text" name="total"  value="0" readonly="readonly"  onFocus="startCalc();" onBlur="stopCalc();">

      </tr>
      <tr>
        <label>JUMLAH BAYAR</label>
        <input type="number" name="bayar" onFocus="startCalc();" onBlur="stopCalc();" >
      </tr>
      <tr>
        <label>UANG KEMBALIAN</label>
        <input type="number" name="kembalian" readonly="readonly" onFocus="startCalc();" onBlur="stopCalc();" >
      </tr>
      </fieldset>
      <p>
      <br>
      <a href="aksi_tambahtransaksi.php"><button>BAYAR</button></a>
        <br>
        <br>
      <a href="user.php"><button>BATAL</button></a>
    </form>

<script>
function startCalc(){
  interval = setInterval("calc()",1);}
function calc(){
  one=document.autoSumForm.Harga_Sepatu.value;
  two=document.autoSumForm.jumlah.value;
  three=document.autoSumForm.bayar.value;
  four=document.autoSumForm.total.value;
  five=document.autoSumForm.kembalian.value;
  document.autoSumForm.total.value=(one*1)*(two*1);
  document.autoSumForm.kembalian.value=(three*1)-(four*1);
}

</script>
</div>
  </body>
  </html>