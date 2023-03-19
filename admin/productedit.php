<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
    $product = new product;
    $product_id = $_GET['product_id'];
    $get_product  = $product ->get_product($product_id);
    if($get_product ) {
        $resultB = $get_product  -> fetch_assoc();
    }

    if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $product_name = $_POST['product_name'];
        $cartegory_id = $_POST['cartegory_id'];  
        $brand_id = $_POST['brand_id'];
        $product_price = $_POST['product_price'];
        $product_price_new = $_POST['product_price_new'];
        $product_desc = $_POST['product_desc'];
        $update_product = $product ->update_product($product_id,$product_name,$cartegory_id,$brand_id,$product_price,$product_price_new,$product_desc); 
    }

?>
<style>
    select{
        height: 30px;
        width: 200px;
    }
</style>
        <div class="admin-content-right">

            <div class="admin-content-right-product_add">
                <h1>Sửa Sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="" placeholder="">Nhập tên sản phẩm<span style="color: red;" >*</span></label>
                    <input name="product_name" required type="text" value="<?php echo $resultB['product_name'] ?>">

                    <label for="" placeholder="">Chọn danh mục<span style="color: red;" >*</span></label>
                    <select name="cartegory_id" id="cartegory_id">                
                        <?php 
                        $show_cartegory = $product -> show_cartegory();
                        if($show_cartegory) {
                            while($result = $show_cartegory ->fetch_assoc())
                            {
                        ?>
                        <option 
                            <?php if($resultB['cartegory_id']==$result['cartegory_id']){echo "SELECTED";}
                            ?>
                                value="<?php echo $result ['cartegory_id'] ?>"><?php echo $result ['cartegory_name'] ?>
                        </option>
                        <?php 
                        }}
                        ?>
                    </select>
                    <label for="" placeholder="">Chọn Loại sản phẩm<span style="color: red;" >*</span></label>
                    <select name="brand_id" id="brand_id">
                    <?php 
                        $show_brand = $product -> show_brand();
                        if($show_brand) {
                            while($result = $show_brand ->fetch_assoc())
                            {
                        ?>
                        <option 
                            <?php if($resultB['brand_id']==$result['brand_id']){echo "SELECTED";}
                            ?>
                                value="<?php echo $result ['brand_id'] ?>"><?php echo $result ['brand_name'] ?>
                        </option>
                        <?php 
                        }}
                        ?>                     
                    </select>
                    <label for="" placeholder="">Giá sản phẩm<span style="color: red;" >*</span></label>
                    <input name="product_price"  required type="text" value="<?php echo $resultB['product_price'] ?>">

                    <label for="" placeholder="">Giá khuyến mãi<span style="color: red;" >*</span></label>
                    <input name="product_price_new" required type="text" value="<?php echo $resultB['product_price_new'] ?>">

                    <label for="" placeholder="">Mô tả sản phẩm<span style="color: red;" >*</span></label> 
                    <textarea name="product_desc" required id="editor1" cols="30" row="10" placeholder="Mô tả sản phẩm" value="<?php echo $resultB['product_desc'] ?>"></textarea>

                    
                    <button type="submit">Sửa</button>
                </form>
            </div>
        
        </div>
    </section>

</body>


<script>
    CKEDITOR.replace('editor1', {
        filebrowserBrowserUrl: 'ckfinder/ckfinder.html',
        filebrowserUploadUrl:  'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    });

</script>

<script>
    $(document).ready(function(){
        $('#cartegory_id').change(function(){
            //alert($(this).val())
            var x = $(this).val()
            $.get("productadd_ajax.php",{$cartegory_id:x},function(data){
                $("#brand_id").html(data);
            })
        })
    })
</script>

</html>