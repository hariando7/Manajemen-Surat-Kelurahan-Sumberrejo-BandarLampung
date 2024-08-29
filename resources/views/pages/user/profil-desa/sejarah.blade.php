<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah</title>
    <link rel="icon" type="image/x-icon" href="/image/icon-logo.ico">
    {{-- Awal Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Akhir Tailwind --}}
    {{-- Awal Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- Akhir Flowbite --}}
    {{-- Awal DeasyUi --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div>
        <x-nav-user />
        <section id="cover"
            class="relative bg-center bg-no-repeat bg-cover bg-[url('./image/hero.svg')] bg-blend-multiply min-h-screen flex items-center justify-center lg:pb-16">
            <div class="absolute inset-0 bg-white opacity-40"></div>
            <div class="relative w-full p-20 rounded-lg shadow-lg z-10 text-black lg:mt-10">
                <div class="font-bold text-4xl mb-5 lg:mb-10">
                    SEJARAH
                </div>
                <div class="text-justify text-black text-sm">
                    Kelurahan Sumberrejo adalah salah satu kelurahan yang terletak di Kecamatan Kemiling, Kota Bandar Lampung, Provinsi Lampung. 
                    Nama "Sumberrejo" berasal dari bahasa Jawa, di mana "Sumber" berarti mata air dan "Rejo" berarti makmur atau sejahtera, mencerminkan harapan agar daerah ini menjadi sumber kesejahteraan bagi penduduknya. 
                    Awalnya, Sumberrejo merupakan daerah yang belum banyak berkembang, namun seiring dengan urbanisasi dan pembangunan infrastruktur di Bandar Lampung sejak tahun 1980-an, wilayah ini mulai tumbuh pesat. 
                    Sumberrejo resmi menjadi kelurahan setelah adanya pembagian wilayah di Kecamatan Kemiling, yang bertujuan untuk meningkatkan efisiensi pemerintahan dan pelayanan publik. 
                    Perekonomian di Kelurahan Sumberrejo didominasi oleh sektor perdagangan, jasa, dan pertanian dalam skala kecil, dengan dukungan lokasi strategis yang menghubungkan beberapa kawasan penting di Kota Bandar Lampung. 
                    Masyarakat di kelurahan ini hidup harmonis, dengan mayoritas penduduk berasal dari suku Jawa dan Lampung, serta agama Islam sebagai agama mayoritas. Dalam beberapa dekade terakhir, pembangunan infrastruktur seperti jalan, sekolah, dan pusat kesehatan semakin ditingkatkan untuk mendukung pertumbuhan dan kesejahteraan penduduk di wilayah ini.
                </div>
                <div class="mt-10">
                    <img src="./image/tentang-kelurahan.svg" class="w-96 flex m-auto justify-center items-center"
                        alt="">
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>