<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm (cache bằng Memcached)</h1>
    <ul>
        @foreach ($products as $product)
            <li>{{ $product['name'] }}</li>
        @endforeach
    </ul>
</body>
</html>