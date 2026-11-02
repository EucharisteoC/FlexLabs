<?php
    $total_stock = 0;
    $no = 1;
    //$index = 0;
    $products = [
        [ 
            "id" => 1,
            "name" => "Laptop Lenovo 16 Inch",
            "price" => 16000000,
            "stock" => 10
        ],
        [
            "id" => 2,
            "name" => "Laptop Toshiba 16 Inch",
            "price" => 14000000,
            "stock" => 5
        ]
    ];

    //update value in nested array 
    $products[1]["stock"] = 5;


    echo $products[0]["name"]."<br>";
    echo $products[0]["price"]."<br>";
    echo $products[0]["stock"]."<br>";

    echo "<hr>";

    echo $products[1]["name"]."<br>";
    echo $products[1]["price"]."<br>";
    echo $products[1]["stock"]."<br>";

    echo "<hr>";
    $total_stock = $products[0]["stock"] + $products[1]["stock"];
    echo "Total stock: ". $total_stock;

    echo "<hr>";

    $table = '<table width="100%" border="1">';
    $table .= '<tr>';
    $table .= '<td>No</td>';
    $table .= '<td>Product Name</td>';
    $table .= '<td>Product Price</td>';
    $table .= '<td>stock</td>';
    $table .= '</tr>';

    foreach($products as $index => $product){

        if($product["id"] == 2){
            $products[$index]["stock"] += 5;
        }
        $table .= '<tr>';
        $table .= '<td>'.$no.'</td>';
        $table .= '<td>'.$product["name"].'</td>';
        $table .= '<td>'.$product["price"].'</td>';
        $table .= '<td>'.$products[$index]["stock"].'</td>';
        $table .= '</tr>';

        $no++;
        //$index++;
    }
    
    $table .= '</table>';
    echo $table;


?>