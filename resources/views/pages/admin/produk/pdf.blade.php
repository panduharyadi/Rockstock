<!DOCTYPE html>
<html>
<head>
    <title>Deskripsi Produk</title>
    <style>
        /* CSS untuk tampilan PDF */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        p {
            color: #666;
        }
    </style>
</head>
<body>
    <h1>{{ $product->produk_name }}</h1>
    <p>{{ $product->deskripsi }}</p>
</body>
</html>