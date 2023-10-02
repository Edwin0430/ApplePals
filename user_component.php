<?php

function user_component($productName,$price,$productImg,$id) {
    $element = "
    <div class=\"product\">
    <form action=\"user_product.php\" method=\"post\">
    <img src= \"images/$productImg\" alt=\"fe-product 1\">
    <div class=\"description\">
        <h5>$productName</h5>
        
        <h4>RM $price</h4>
    </div>
    <button type=\"submit\" name=\"add\">&#128722;</button>
    <input type='hidden' name='id' value='$id'>
    </form>
    </div>
    ";
    echo $element;
}

function user_cartElement($productImg, $productName, $price, $id) {
    $element = "
    
<form action=\"user_cart.php?action=remove&id=$id\" method=\"post\" class=\"cart-items\">
    <div class=\"border rounded\">
        <div class=\"row bg-white\">
            <div class=\"col-md-3\">
                <img src=\"images/$productImg\" alt=\"Image1\" class=\"img-fluid\">
            </div>
            <div class=\"col-md-6\">
                <h5 class=\"pt-2\">$productName</h5>
                <h5 class=\"pt-2\">RM $price</h5>
                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
            </div>
            <div class=\"col-md-3 py-5\">
                
            </div>
        </div>
    </div>
</form>
    
    ";
    echo  $element;
}
?>