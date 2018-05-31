<script type="text/javascript">

function clear_cart() {
    var result = confirm('Hapus semua item yang ada di keranjang?');

    if (result) {
        window.location = "<?php echo base_url(); ?>shopping/remove/all";
    } else {
        return false;
    }
}  
</script>


                
            <?php  $cart_check = $this->cart->contents();
            
            // If cart is empty, this will show below message.
             if(empty($cart_check)) {
             echo '<h4 align="center">Pilih menu jika belum memasukan nya ke keranjang</h4>'; 
             }  ?> 
    <?php
    // kontent yg ada d keranjang
      if ($cart = $this->cart->contents()): ?>

    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>

    <tr>
        <th>Nomor</th>
        <th>Menu</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <th>Cancel Prodk</th>
    </tr>
    </thead>
     <?php
        echo form_open('shopping/update_cart');
        $grand_total = 0;
        $i = 1;

        foreach ($cart as $item):
            
            echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
            echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
            echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
            echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
            echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
            ?>
    <tbody>
    <tr>
        <td> <?php echo $i++; ?></td>
        <td class="center"><?php echo $item['name']; ?></td>
        <td class="center">Rp. <?php echo number_format($item['price'], 2); ?></td>
        <td class="center"> <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?></td>
        <td class="center">Rp. <?php echo number_format($item['subtotal'], 2) ?></td>
        <td class="center">
        </td>
                <?php endforeach; ?>
    </tr>
    <tr>
                        <td><b>Order Total: Rp.<?php 
                        
                        //Grand Total.
                        echo number_format($grand_total, 2); ?></b></td>
                             <?php // "clear cart" button call javascript confirmation message ?>
                        <td colspan="5" align="right"><input type="button" class ='btn btn-danger' value="Kosongkan" onclick="clear_cart()">

                            <input type="button" class ='btn btn-success' value="Pesan" onclick="window.location = '<?php echo base_url()?>shopping/billing_view'"></td>
                    </tr>
<?php endif; ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    <!--/span-->
