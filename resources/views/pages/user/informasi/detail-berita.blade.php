<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Berita</title>
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
    {{-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" /> --}}
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- Akhir DeasyUi --}}
</head>

<body>
    {{-- Awal Navbar --}}
    <div>
        <x-nav-user />
        <section id="cover"
            class="relative bg-center bg-no-repeat bg-cover bg-white bg-blend-multiply min-h-screen flex items-center justify-center">
            <div class="relative w-full m-5 lg:m-20 p-6 z-10 text-black">
                <div
                    class="font-bold text-2xl lg:text-4xl mb-5 lg:mb-10 mt-10 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                    Berita
                </div>
                <div class="flex justify-center m-auto mb-6">
                    <img class="h-auto max-w-full rounded-lg flex m-auto" src="./image/berita-terkini.svg"
                        alt="">
                </div>
                <div class="lg:text-justify">
                    <div class="font-bold text-[20px] text-black mt-5 lg:mt-0">Jalan Diperbaiki, Warga Sumberejo
                        Sampaikan Terima Kasih ke Pemkot Bandar Lampung</div>
                    <div class="text-[14px] text-black-50 mb-5 lg:mb-10">12/04/2019</div>
                    <div class="text-[16px] text-black text-justify">
                        Warga yang berdomisili di sekitar Jalan Karet rt.17 LK.1, tepatnya di Kelurahan Sumberrejo
                        Kecamatan Kemiling, sudah mulai bernafas lega. Pasalnya, Pemkot Bandar Lampung melalui Dinas
                        Pekerjaan Umum (PU), sejak beberapa hari lalu sudah mulai melakukan perbaikan dan pelebaran
                        jalan tersebut.
                        Sebelum dikerjakan Dinas PU, kondisi badan jalan terlalu kecil dan berlubang akibat mobil dengan
                        muatan berat sering melintas.
                        Seperti yang diungkapkan Asmad (57), salah seorang warga, Kamis (04/07). Menurut Asmad, dirinya
                        mewakili pamong dan warga sangat bersyukur dengan adanya perbaikan jalan ini. Para warga sudah
                        menantikan adanya perbaikan dan pelebaran jalan, karena harus merasakan debu akibat kondisi
                        badan jalan yang rusak berlubang dan terlalu kecil untuk dilewati.
                        Untuk diketahui, lebar jalan sebelumnya hanya dua setengah meter. Hal itu yang menyebabkan
                        keluhan pengguna jalan dan warga ketika berpapasan. Oleh sebab itu, pemerintah menanggapi
                        permintaan warga dengan melebarkan bahu jalan menjadi 3 meter, dengan panjang 250 meter.</div>
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
    {{-- Akhir Navbar --}}
</body>

</html>
