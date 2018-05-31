 <?php
 include 'headerhome.php';
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

    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
        <script type="text/javascript">
            // To conform clear all data in cart.
            function clear_cart() {
                var result = confirm('Hapus semua yang ada di keranjang?');

                if (result) {
                    window.location = "<?php echo base_url(); ?>shopping/remove/all";
                } else {
                    return false; // cancel button
                }
            }
        </script>
<?php
    foreach ($products as $product) {
        $id = $product['id_menu'];
        $name = $product['nama_menu'];
        $description = $product['deskripsi'];
        $price = $product['harga_menu'];
?>
    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-shopping-cart"></i> Silahkan pilih Menu</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>

    <tr>
        <th>Menu</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><img src="<?php echo $product['gambar'] ?>" width="100px" height="100px" id="myImg[<?php echo $product['id_menu'];?>]"/></td>
        <td class="center"><?php echo $name; ?></td>
        <td class="center"><?php echo $description; ?></td>
        <td class="center"><b>Harga</b>:
            <big style="color:green">
                Rp.<?php echo $price; ?></big>
                <?php
                echo form_open('shopping/add');
                echo form_hidden('id', $id);
                echo form_hidden('name', $name);
                echo form_hidden('price', $price);
                ?>
        <td class="center">
             <?php
                        $btn = array(
                            'class' => 'btn btn-success',
                            'value' => 'Checkout',
                            'name' => 'action'
                        );
                        
                        // Submit Button.
                        echo form_submit($btn);
                        echo form_close();
                        ?>
        </td>
    </tr>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->

    </div><!--/row-->
    <script>

var modal = document.getElementById('myModal');


var img = document.getElementById('myImg[<?php echo $product['id_menu'];?>]');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
}


var span = document.getElementsByClassName("close")[0];


span.onclick = function() { 
    modal.style.display = "none";
}
</script>

<?php } ?>

        </div>
      </div>
      <?php foreach ($products as $key => $value) { ?>
 <?php $value['id_menu']?>
            <br><br><br><br><br><br><br><br>
<?php } ?>
