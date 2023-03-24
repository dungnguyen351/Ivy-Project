<?php
include "database.php";
?>
<?php

class product {
    private $db;

    public function __construct()
    {
        $this -> db = new Database();
    }
    public function show_product(){
        $query = "SELECT * FROM tbl_product ORDER BY product_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    public function show_brand(){
        // $query = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
        $query = "SELECT tbl_brand.*, tbl_cartegory.cartegory_name 
        FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    // public function show_brand_ajax($cartegory_id) {
    //     $query = "SELECT * FROM tbl_brand WHERE cartegory_id = '$cartegory_id'";
    //     $result = $this ->db->select($query);
    //     return $result;
    // }
    
    
    public function get_product($product_id) {
        $query = "SELECT * FROM tbl_product WHERE product_id = '$product_id'";
        $result = $this ->db->select($query);
        return $result;
    }

    /*---------------------------Countinue here--------------------------*/ 
    // public function update_product($product_id,$product_name,$cartegory_id,$brand_id,$product_price,$product_price_new,$product_desc) {
    //     $query = "UPDATE tbl_product SET
    //     product_name = '$product_name',
    //     cartegory_id = '$cartegory_id',
    //     brand_id= '$brand_id', 
    //     product_price= '$product_price',
    //     product_price_new = '$product_price_new',
    //     product_desc = '$product_desc' 
    //     WHERE product_id = '$product_id' ";
    //     $result = $this ->db->update($query);
    //     header('location:productlist.php');
    //     return $result;
    // }
    // public function delete_product($product_id) {
    //     $query = "DELETE FROM tbl_product WHERE product_id = '$product_id' ";
    //     $result = $this ->db->delete($query);
    //     header('location:productlist.php');
    //     return $result;
    // }
}

?>