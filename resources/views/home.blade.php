<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title> My Coffee </title>
</head>
<body>
<header class="bg-white rounded-xl border-2 border-stone text-gray-800">    
    <div class="hidden sm:block container mx-auto px-4 py-8 flex justify-between">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex gap-6" aria-label="Tabs">
                <a
                href="{{ route('landing') }}"
                class="shrink-0 border-b-2 border-sky-500 px-1 pb-4 text-sm font-medium text-sky-600"
                aria-current="page"
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
                class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700"
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
</header>
<div class="hero-section relative bg-gradient-to-r from-gray-900 to-gray-600 flex items-center">
    <img src="{{ asset('images/homekopi.png')}}"  class="hero-image absolute right-0 bottom-22 w-1/2 md:w-1/3 lg:w-1/3">
</div>
<body class="bg-gray-100">
    <div class="container mx-auto mb-5 px-4">
        <h1 class="text-5xl font-bold mb-4 mt-10 text-slate-950">Kopi <br> Bah Daum</h1>
        <p class="text-lg text-slate-950 mb-6">
            Kopi medium roast kami disangrai dengan suhu dan waktu yang tepat untuk menghasilkan cita rasa yang kompleks.
        <br>
            Proses roasting yang cermat ini menghasilkan biji kopi dengan warna cokelat keemasan dan aroma yang menggoda.
        <br>
            Rasakan perbedaannya dalam setiap tegukan.
        </p>
        <a href="{{ route('tentang') }}" class="btn bg-transparent border-transparent hover:bg-sky-600 hover:text-white text-slate-950">Tentang Kami</a>
    </div>
    <div class="text-center bg-gray-200 py-16">
        <h2 class="text-3xl font-bold mt-5 mb-5 text-slate-950">TENTANG KAMI</h2>
        <p class=" text-slate-950">
        Kopi Arabika Gunung Sangar adalah cerita tentang kehati-hatian dan keaslian. 
        <br>Diproses secara full washed, medium roast yang dihasilkan tidak sekadar rupa, tapi juga sebuah perjalanan rasa.
        <br>Dari biji kopi pilihan di lereng gunung hingga aroma yang memikat, setiap tegukan memberikan pengalaman yang mendalam dan memuaskan. 
        <br>Diibaratkan seperti kisah asmara yang penuh gairah, setiap cangkirnya memancarkan pesona yang menggoda dengan cita rasa yang kuat namun halus.
        </p>
    </div>
<section class="container mx-auto mt-10  text-slate-950">
  <h2 class="text-3xl font-bold text-center mb-6">PRODUK KAMI</h2>
  <div class="grid grid-cols-3 gap-4 items-center mb-10">
    <div class="col-span-1 flex justify-center">
      <img src="{{ asset('images/kopiutama.png')}}" alt="" class="max-w-full h-auto object-cover">
    </div>
    <div class="col-span-2 space-y-4">
        <h2>Kopi Arabika Natural</h2>
        <p>Nikmati cita rasa asli biji Kopi Arabika Gunung Sangar yang dijemur langsung di bawah sinar matahari. Proses pengeringan alami ini menghasilkan kopi dengan karakteristik buah yang kaya dan aroma yang kompleks. Dipanggang dengan tingkat medium, kopi ini menawarkan keseimbangan sempurna antara asam buah, body yang lembut, dan aftertaste yang panjang.</p>
        <h2>Kopi Arabika Natural Wine</h2>
        <p>Sebuah perjalanan rasa yang unik. Biji Kopi Gunung Sangar ini menjalani proses fermentasi panjang selama berbulan-bulan, memberikan karakteristik rasa yang mirip dengan wine. Dengan proses pengeringan alami dan roasting medium, kopi ini menghadirkan profil rasa yang kompleks dengan nuansa buah-buahan gelap, cokelat, dan sedikit asam yang menyegarkan.</p>
    </div>
  </div>
  <div class="grid grid-cols-3 gap-4 ">
      <div><img src="{{ asset('images/kopikiri.png')}}" alt="" class="max-w-full h-auto object-cover"></div>
      <div><img src="{{ asset('images/kopitengah.png')}}" alt="" class="max-w-full h-auto object-cover"></div>
      <div><img src="{{ asset('images/kopikanan.png')}}" alt="" class="max-w-full h-auto object-cover"></div>
  </div>
</section>
    <div class="container mx-auto px-4 mt-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 rounded-lg bg-white text-slate-950">
                <h2 class="text-xl font-bold mb-2">Keunggulan</h2>
                <ul class="list-disc ml-4">
                    <li>Cita rasa yang kompleks</li>
                    <li>Aroma yang menggoda</li>
                    <li>Warna cokelat keemasan</li>
                    <li>Proses roasting yang cermat</li>
                </ul>
            </div>

            <div class="p-4 rounded-lg bg-white text-slate-950">
                <h2 class="text-xl font-bold mb-2">Manfaat</h2>
                <ul class="list-disc ml-4">
                    <li>Meningkatkan konsentrasi</li>
                    <li>Meningkatkan energi</li>
                    <li>Membantu pencernaan</li>
                    <li>Menghilangkan rasa lelah</li>
                </ul>
            </div>
        </div>
    </div>
</body>
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