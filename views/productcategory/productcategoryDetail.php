<!DOCTYPE html>
<html>
<head>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>

<h2 style="text-align:center">Product Card</h2>

<div class="card">
    <h1><?= $productcategory["name_category"]; ?></h1>
    <p ><?= $product["name"]; ?></p>
    <p><?= $product["description"]; ?></p>
    <p class="price"><?= $product["price"]; ?></p>
    <p ><?= $product["image"]; ?></p>
    <p><button>Add to Cart</button></p>
</div>

</body>
</html>

