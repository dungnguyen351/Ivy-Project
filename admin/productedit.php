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
    $cartegory_id = $_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];
    $update_product = $product ->update_product($cartegory_id,$brand_name,$brand_id); 
}

?>
<style>
    select{
        height: 30px;
        width: 200px;
    }
</style>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm Loại sản phẩm</h1> <br>
                <form action="" method="POST">
                    <select name="cartegory_id" id="">
                        <option value="#">--Chọn Danh mục--</option>
                        <?php 
                        $show_cartegory = $brand -> show_cartegory();
                        if($show_cartegory){while($rusult = $show_cartegory -> fetch_assoc()){

                        
                        ?>
                        <option <?php if($resultA['cartegory_id']==$rusult['cartegory_id']){echo "SELECTED";}?> value="<?php echo $rusult ['cartegory_id'] ?>"><?php echo $rusult ['cartegory_name'] ?></option>
                        <?php 
                        }}
                        ?>
                    </select> <br>
                    <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm" 
                    value="<?php echo $resultA['brand_name'] ?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>