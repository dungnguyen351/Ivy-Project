<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>

<?php
$product = new product;
$show_product = $product ->show_product();
?>



<div class="admin-content-right">
<div class="admin-content-right-cartegory_list">
                <h1>Danh sách sản phẩm</h1>
                <table>
                    <tr>
                        <th>Stt</th>
                        <th>Id</th>
                        <th>Tên sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Loại sản phẩm</th>
                        <th>Giá</th>
                        <th>Mô tả</th>
                        <th>Hình ảnh</th>
                        <th>Tùy biến</th>
                    </tr>
                    <?php
                    if($show_product){$i=0;
                        while($result = $show_product->fetch_assoc ()) {$i++;
                    ?>
                    
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_id'] ?></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $result['cartegory_id' ] ?></td>
                        <td><?php echo $result['brand_id'] ?></td>
                        <td><?php echo $result['product_price'] ?></td>
                        <td><?php echo $result['product_desc'] ?></td>
                        <td><?php echo $result['product_img'] ?></td>
                        <td>
                            <button>
                                <a href="productedit.php?product_id=<?php echo $result ['product_id'] ?>">Sửa</a>
                            </button>
                             <button>
                                <a href="productdelete.php?product_id=<?php echo $result ['product_id'] ?>">Xóa</a>
                            </button>
                        </td>
                    </tr>
                    <?php
                    }
                }
                    ?>
                </table> 
                
            </div>
        </div>
    </section>

</body>
</html>