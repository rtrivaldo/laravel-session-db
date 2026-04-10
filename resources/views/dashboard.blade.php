<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Dashboard</h2>

<p>Selamat datang, {{ auth()->user()->name }}</p>

<a href="/products">Lihat Products</a><br><br>

<a href="/logout">Logout</a>

</body>
</html>