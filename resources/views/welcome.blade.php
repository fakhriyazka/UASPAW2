<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My UMKM</title>
    <style>
        body {
            font-family: Georgia, serif;
            margin: 0;
            padding: 0;
            background-color: #d8dee9;
        }
        .navbar {
            color: #fff;
            padding: 10px;
            display: flex;
            align-items: center;
        }
        .navbar-brand {
            color : black;
            font-size: 15px;
            font-weight: bold;
            align-items: center;
        }
        .nav-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-links a {
            color: black;
            text-decoration: none;
        }
        .nav-links a:hover {
            color: #ccc;
        }
        .btn {
            color: #fff;
            padding: 0.5em 1em;
            border: none;
            border-radius: 0.5em;
            cursor: pointer;
        }
        .btn:hover {
            background-color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-brand">My UMKM</div>
        <ul class="nav-links">
            <a href="#" class="btn">Home</a>
            <a href="#" class="btn">Galeri</a>
            <a href="#" class="btn">Tentang</a>
            <a href="#" class="btn">Berita</a> 
            <a href="#" class="btn">Kontak</a>
        </ul>
    </nav>
</body>
</html>
