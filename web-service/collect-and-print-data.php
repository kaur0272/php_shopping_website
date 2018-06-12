<?php
// COLLECT DATA
// Create the function collectArray.
// This function contains the parameter 
// that defines the required product-type. 
//function collectArray($prodType){

function collectArray($type) {
    global $products;
    $collect = [];
    if (isset($products) && sizeof($products) > 0) { 
        foreach ($products as $product) {    
            if ($type === $product["type"]) {
                array_push($collect, $product);
            } 
        }
        if (sizeof($collect) > 0) {
            return $collect;
        } else {
            return $products;
        } 
    }
}

function printHTML() {
    isset($_GET["data-prod"]) ? $selectedProds = collectArray($_GET["data-prod"]) : $selectedProds = collectArray(NULL);
    echo "<div class=\"row\">
              <div class=\"container-fluid\">
                <h2>WOMEN'S PRODUCTS</h2>
              </div>";
    foreach ($selectedProds as $selectedProd) { 
            echo "<div class=\"col col-12 col-md-6 col-lg-3 mb-0\">
        
                <figure>
                  <img src=\"{$selectedProd["image"]}\" alt=\"{$selectedProd["name"]}\">
                  <figcaption>
                    <ul>
                      <li><strong>{$selectedProd["name"]}</strong></li>
                      <li><strong>{$selectedProd["price"]}</strong></li>
                    </ul>
                  </figcaption>
                </figure>
              </div>";
    }
    echo "</div>";
}
?>