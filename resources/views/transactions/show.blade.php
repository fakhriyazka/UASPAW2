<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title> My Coffee </title>
</head>

<body class="bg-gray-100">
<header class="bg-white rounded-xl border-2 border-stone text-gray-800">    
  <div class="container mx-auto px-4 py-8 flex justify-between items-center">
    <h1 class="font-bold text-3xl">Kopi Bah Daum</h1>
    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex gap-6" aria-label="Tabs">
                <a
                href="{{ route('landing') }}"
                class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700"
                >
                Home
                </a>
                <a
                href="{{ route('menu') }}"
                class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700"
                >
                Menu
                </a>
                <a
                href="{{ route('kontak') }}"                
                class="shrink-0 border-b-2 border-sky-500 px-1 pb-4 text-sm font-medium text-sky-600"
                aria-current="page"
                >
                Kontak
                </a>
                <a
                href="{{ route('tentang') }}"
                class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700"
                >
                Tentang
                </a>
                <a
                href="{{ route('home') }}"
                class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700"
                >
                Admin Login
                </a>
            </nav>
        </div>
    </div>
  </div>  
</header>
<div>
        <h1 class="text-2xl font-bold mb-4">Detail Pesanan</h1>
        <ul>
            <li><strong>Nama Pelanggan:</strong> {{ $transactions->customer_name }}</li>
            <li><strong>Product ID:</strong> {{ $transactions->product_id }}</li>
            <li><strong>Jumlah Pesanan:</strong> {{ $transactions->quantity }}</li>
            <li><strong>Total Harga:</strong> Rp.{{ $transactions->total_price }},00</li>
            <li><strong>Status:</strong> {{ $transactions->status }}</li>
        </ul>
        <a href="/kontak" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search Again</a>

</div>
 <footer class="bg-white text-gray-800 mt-20">
    <div class="container mx-auto px-4 py-8 flex flex-col md:flex-row justify-between items-start md:items-center space-y-8 md:space-y-0">
        <div class="m-4">
            <h1 class="text-lg font-bold mb-4">Kopi Bah Daum</h1>
            <p class="leading-relaxed text-sm md:text-base">
                Dari ketinggian Gunung Sangar, lahirlah kopi Arabika dengan karakter yang unik. Dirawat dengan penuh kasih sayang oleh para petani, setiap bulir kopi menghasilkan minuman yang kaya akan rasa dan aroma. Dengan proses pengolahan yang teliti, kopi ini menawarkan pengalaman minum yang tak terlupakan. Setiap tegukan adalah persembahan dari alam dan dedikasi manusia.
            </p>
        </div>
        <div class="m-4">
            <h2 class="text-lg font-bold mb-4">Contact Info</h2>
            <ul class="list-none p-0 space-y-2 text-sm md:text-base">
                <li class="my-2">Phone: +62 812 3456 7890</li>
                <li class="my-2">Location: Arjasari Kabupaten Bandung, Jawa Barat</li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>

