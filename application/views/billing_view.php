<br>
<?php
include 'headerhome.php';
        if(validation_errors() == TRUE)
        {
          echo "<div class='alert alert-danger' role='alert'>";
          echo validation_errors();
          echo "</div>";
        }
echo form_open('shopping/save_order');
$grand_total = 0;
// Total

if ($cart = $this->cart->contents()):
    foreach ($cart as $item):
        $grand_total = $grand_total + $item['subtotal'];
    endforeach;
endif;
?>
       <div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
                <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">MENU</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-shopping-cart"></i> Silahkan Isi Form Pembayaran</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <br>
<div class='form-horizontal' role='form' style='margin-left:36%;width:800px'>
  <div class="form-group" >
    <label class="col-sm-6 control-label" style="text-align:center;background:#ddd;">Info</label>
  </div>
  <div class="form-group">
    <label for="Total" class="col-sm-2 control-label" >Total</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" Rp.<?php echo number_format($grand_total, 2); ?><input type="hidden" name="total" value="<?php echo number_format($grand_total, 2); ?>" readonly>
    </div>
  </div>
   <div class="form-group">
    <label for="Nama" class="col-sm-2 control-label" >Nama</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="nam" name="name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="Alamat" class="col-sm-2 control-label" >Alamat</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="alamat" name="alamat" required>
    </div>
  </div>
  <div class="form-group">
    <label for="NO Hp" class="col-sm-2 control-label" >No hp</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="nohp" name="nohp" required>
    </div>
  </div>
  <div class="form-group">
    <label for="waktu" class="col-sm-2 control-label" >Yang di pesan</label>
    <div class="col-sm-4">
  <?php foreach($cart as $aww){echo $aww['name']; echo " ";echo $aww['qty']; echo"<br>";}?></td></td>
      <input type="hidden" class="form-control"  type="hidden" name="pesanan" value="<?php foreach($cart as $hue){echo $hue['name']; echo" "; echo $hue['qty']; echo "<br>";}?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="waktu" class="col-sm-2 control-label" >Tanggal Memesan</label>
    <div class="col-sm-4">
      <input type="hidden" class="form-control" type="hidden" name="status" value="Belum Konfirmasi">
      <input type="hidden" name="tgl_pesan" value="<?php echo date("Y-m-d");?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label" ></label>
    <div class="col-sm-4">
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>
  </div>
</div>
</form>