<?php
include "header.php";
include "slider.php";

?>


        <div class="admin-content-right">
            <div class="admin-content-right-product_add">
                <h1>Thêm Sản phẩm</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <label for="" placeholder="">Nhập tên sản phẩm<span style="color: red;" >*</span></label>
                    <input type="text">
                    <label for="" placeholder="">Chọn danh mục<span style="color: red;" >*</span></label>
                    <select name="" id="">
                        <option value="#">--Chọn--</option>
                    </select>
                    <label for="" placeholder="">Chọn Loại sản phẩm<span style="color: red;" >*</span></label>
                    <select name="" id="">
                        <option value="#">--Chọn--</option>
                    </select>
                    <label for="" placeholder="">Giá sản phẩm<span style="color: red;" >*</span></label>
                    <input type="text">
                    <label for="" placeholder="">Giá khuyến mãi<span style="color: red;" >*</span></label>
                    <input type="text">
                    <label for="" placeholder="">Mô tả sản phẩm<span style="color: red;" >*</span></label> 
                    <textarea name="" id="" cols="30" row="10" placeholder="Mô tả sản phẩm"></textarea>
                    <label for="" placeholder="">Ảnh sản phẩm<span style="color: red;" >*</span></label> 
                    <input type="file">
                    <label for="" placeholder="">Ảnh mô tả<span style="color: red;" >*</span></label> 
                    <input multiple type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>

</body>
</html>