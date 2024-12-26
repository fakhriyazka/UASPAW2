<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* General Styling */
body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
  color: #333;
}

header {
  background-color: #333;
  color: #fff;
  padding: 1rem 0;
  text-align: center;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: bold;
}

a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

/* Navigation */
nav {
  display: flex;
  justify-content: space-around;
  align-items: center;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav li {
  display: inline-block;
  margin: 0 1rem;
}

nav a {
  color: #fff;
  font-weight: bold;
}

/* Hero Section */
.hero {
  background-color: #fff;
  padding: 2rem;
  text-align: center;
}

.hero img {
  max-width: 100%;
  height: auto;
}

/* Gallery Section */
.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1rem;
  padding: 2rem;
}

.gallery-item {
  position: relative;
  overflow: hidden;
}

.gallery-item img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.gallery-item:hover img {
  transform: scale(1.1);
}

.gallery-item:hover .gallery-caption {
  opacity: 1;
}

.gallery-caption {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  padding: 1rem;
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  opacity: 0;
  transition: opacity 0.3s ease;
}

/* Footer */
footer {
  background-color: #333;
  color: #fff;
  padding: 2rem;
  text-align: center;
}

footer p {
  margin-bottom: 0;
}

/* Responsive Styling */
@media (max-width: 768px) {
  .gallery {
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  }
}

/* Additional Styling for Specific Elements */
.hero-title {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.hero-subtitle {
  font-size: 1.5rem;
  margin-bottom: 2rem;
}

.btn {
  background-color: #007bff;
  color: #fff;
  padding: 1rem 2rem;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn:hover {
  background-color: #0056b3;
}

.contact-info {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 2rem;
}

.contact-info i {
  font-size: 2rem;
  margin-bottom: 0.5rem;
}

.contact-info p {
  margin-bottom: 1rem;
}

.social-links {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 1rem;
}

.social-links i {
  font-size: 1.5rem;
  margin: 0 0.5rem;
  color: #fff;
}
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>TASTY FOOD</h1>
            </div>
            <nav>
                <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('tentang') }}">Tentang</a></li>
                <li><a href="{{ route('menu') }}">Menu</a></li>
                <li><a href="{{ route('testimoni') }}">Testimoni</a></li>
                <li><a href="{{ route('kontak') }}">Kontak</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>GALERI KAMI</h2>
            <img src="images/hero.jpg" alt="Hero Image">
        </div>
    </section>

    <section class="gallery">
        <div class="container">
            <div class="gallery-slider">
                <div class="slide">
                    <img src="images/gallery-1.jpg" alt="Gallery Image 1">
                </div>
                <div class="slide">
                    <img src="images/gallery-2.jpg" alt="Gallery Image 2">
                </div>
                <div class="slide">
                    <img src="images/gallery-3.jpg" alt="Gallery Image 3">
                </div>
                <div class="slide">
                    <img src="images/gallery-4.jpg" alt="Gallery Image 4">
                </div>
                <div class="slide">
                    <img src="images/gallery-5.jpg" alt="Gallery Image 5">
                </div>
                <div class="slide">
                    <img src="images/gallery-6.jpg" alt="Gallery Image 6">
                </div>
                <div class="slide">
                    <img src="images/gallery-7.jpg" alt="Gallery Image 7">
                </div>
                <div class="slide">
                    <img src="images/gallery-8.jpg" alt="Gallery Image 8">
                </div>
                <div class="slide">
                    <img src="images/gallery-9.jpg" alt="Gallery Image 9">
                </div>
                <div class="slide">
                    <img src="images/gallery-10.jpg" alt="Gallery Image 10">
                </div>
                <div class="slide">
                    <img src="images/gallery-11.jpg" alt="Gallery Image 11">
                </div>
                <div class="slide">
                    <img src="images/gallery-12.jpg" alt="Gallery Image 12">
                </div>
                <div class="prev"><</div>
                <div class="next"><</div>
            </div>
        </div>
    </section>

    <footer class="bg-gradient-to-r from-gray-900 to-gray-600	text-white mt-20">
    <div class="container mx-auto px-4 py-8 flex justify-between items-center">
        <div class="m-4">
            <h1>Kopi Bah Daum</h1>
            <p>Kopi arabika yang dipetik dari Gunung Sangar dan diolah dengan menggunakan proses natural.</p>
        </div>
        <div class="m-4">
            <h2>Contact Info</h2>
            <ul class="list-none p-0">
                <li class="my-2">Phone: +62 812 3456 7890</li>
                <li class="my-2">Location: Arjasari Kabupaten Bandung, Jawa Barat</li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>