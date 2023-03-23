<?php 
include "header.php";
include "slide.php";
include "cartegory.php";
include "footer.php";
require_once( "admin/class/cartegory_class.php");
?>
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory ->show_cartegory();
?>
<div class="top-menu-items">
                <ul>
                    <tr>
                        <td><?php echo $result['cartegory_name'] ?></td>
                    </tr>
                </ul>
            </div>