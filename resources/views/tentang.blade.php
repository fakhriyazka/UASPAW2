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
                class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700"
                >
                Kontak
                </a>
                <a
                href="{{ route('tentang') }}"
                class="shrink-0 border-b-2 border-sky-500 px-1 pb-4 text-sm font-medium text-sky-600"
                aria-current="page"
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
<div class="container mx-auto p-4 mt-10  text-gray-800">
    <h2 class="text-5xl font-bold mb-4 mb-5 text-center">Tentang Kami</h2>
    <div class="flex container mx-auto flex items-center -mx-4">
        <div class="w-full md:w-1/2 xl:w-1/3 p-4">
            <img src="{{ asset('images/kopimeja.png') }}" class="w-full h-full object-cover rounded">
        </div>
        <div class="w-full md:w-1/2 xl:w-2/3 p-4">
            <p class="text-lg mb-4">Langsung dari puncak Gunung Sangar, kami hadirkan kopi Arabika dengan cita rasa yang tak tertandingi. Ditanam di ketinggian yang sempurna dan dirawat dengan penuh kasih sayang oleh para petani lokal, setiap bulir kopi menyerap esensi alam yang subur. Proses pengolahan yang teliti menghasilkan kopi dengan aroma kaya, rasa seimbang, dan aftertaste yang panjang. Setiap tegukan adalah perjalanan menuju jantung Gunung Sangar, membawa Anda pada pengalaman menikmati kopi yang benar-benar istimewa.</p>
        </div>
    </div>
    <div class="flex container mx-auto flex items-center -mx-4">
        <div class="w-full md:w-1/2 xl:w-2/3 p-4">
            <p class="text-lg mb-4">Kopi medium roast kami disangrai dengan suhu dan waktu yang tepat untuk menghasilkan cita rasa yang kompleks. Proses roasting yang cermat ini menghasilkan biji kopi dengan warna cokelat keemasan dan aroma yang menggoda. Rasakan perbedaannya dalam setiap tegukan.</p>
        </div>
        <div class="w-full md:w-1/2 xl:w-1/3 p-4">
            <img src="{{ asset('images/mediumroast.png') }}" class="w-full h-full object-cover rounded">
        </div>
    </div>
    <div class="flex container mx-auto flex items-center -mx-4">
        <div class="w-full md:w-1/2 xl:w-1/3 p-4">
            <img src="{{ asset('images/kopicangkir.png') }}" class="w-full h-full object-cover rounded">
        </div>
        <div class="w-full md:w-1/2 xl:w-2/3 p-4">
            <p class="text-lg mb-4">Nikmati kebersihan dan kesegaran dalam setiap tegukan kopi kami yang diproses dengan metode full washed. Biji kopi yang sudah dipanen akan langsung dicuci bersih untuk menghilangkan kulit dan lendirnya. Proses ini menghasilkan kopi dengan cita rasa yang bersih, cerah, dan cenderung lebih asam, cocok bagi kamu yang suka kopi dengan karakteristik yang segar.</p>
        </div>
    </div>    
</div>
<div class="container mx-auto px-4 mt-10  text-gray-800">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="p-4 rounded-lg ">
            <h2 class="text-xl font-bold mb-2">Keunggulan</h2>
            <ul class="list-disc ml-4">
                <li>Cita rasa yang kompleks</li>
                <li>Aroma yang menggoda</li>
                <li>Warna cokelat keemasan</li>
                <li>Proses roasting yang cermat</li>
            </ul>
        </div>

        <div class="p-4 rounded-lg ">
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