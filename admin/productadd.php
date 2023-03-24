<?php
include "header.php";
include "slider.php";
include "class/product_class.php"
?>
<?php 
$product = new product;
if($_SERVER['REQUEST_METHOD']=== 'POST'){
    //var_dump($_POST,$_FILES);
    // echo '<pre>';
    // echo print_r($_FILES['product_img_desc']['name']);
    // echo '</pre>';
    $insert_product = $product ->insert_product($_POST,$_FILES); 
}
?>

        <div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Thêm Sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="" placeholder="">Nhập tên sản phẩm<span style="color: red;" >*</span></label>
                    <input name="product_name" required type="text">
                    <label for="" placeholder="">Chọn danh mục<span style="color: red;" >*</span></label>
                    <select name="cartegory_id" id="cartegory_id">
                    <option value="#">--Chọn--</option>
                        <?php 
                        $show_cartegory = $product -> show_cartegory();
                        if($show_cartegory) {while($result = $show_cartegory ->fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php 
                        }}
                        ?>
                    </select>
                    <label for="" placeholder="">Chọn Loại sản phẩm<span style="color: red;" >*</span></label>
                    <select name="brand_id" id="brand_id">
                    <option value="#">--Chọn--</option>
                    <?php 
                        $show_brand = $product -> show_brand();
                        if($show_brand) {while($result = $show_brand ->fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
                        <?php 
                        }}
                        ?>
                        
                    </select>
                    <label for="" placeholder="">Giá sản phẩm<span style="color: red;" >*</span></label>
                    <input name="product_price"  required type="text">
                    <label for="" placeholder="">Giá khuyến mãi<span style="color: red;" >*</span></label>
                    <input name="product_price_new" required type="text">
                    <label for="" placeholder="">Mô tả sản phẩm<span style="color: red;" >*</span></label> 
                    <textarea name="product_desc" required id="editor1" cols="30" row="10" placeholder="Mô tả sản phẩm"></textarea>
                    <label for="" placeholder="">Ảnh sản phẩm<span style="color: red;" >*</span></label> 
                    <span style="color:red"><?php if (isset($insert_product)) {
                        echo ($insert_product);
                    } ?></span>
                    <input name="product_img" required type="file">
                    <label for="" placeholder="">Ảnh mô tả<span style="color: red;" >*</span></label> 
                    <input name="product_img_desc[]" required multiple type="file">
                    <button type="submit">Thêm</button>
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

<!-- <script>
    $(document).ready(function(){
        $('#cartegory_id').change(function(){
            //alert($(this).val())
            var x = $(this).val()
            $.get("productadd_ajax.php",{$cartegory_id:x},function(data){
                $("#brand_id").html(data);
            })
        })
    })
</script> -->



</html>