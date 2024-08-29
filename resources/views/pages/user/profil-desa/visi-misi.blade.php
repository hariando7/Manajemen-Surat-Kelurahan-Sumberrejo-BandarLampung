<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi</title>
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
                    VISI MISI
                </div>
                <div class="text-justify text-black text-sm">
                    <ul>
                        <li>- Visi</li>
                        <div>
                            Terwujudnya Kelurahan Sumberrejo yang Sejahtera, Aman, dan Berdaya Saing melalui Pelayanan Publik yang Prima dan Partisipasi Masyarakat.
                        </div>
                        <li class="mt-5 lg:mt-10">- Misi</li>
                        <div>
                            1. Meningkatkan Kualitas Pelayanan Publik: Menyediakan layanan administrasi yang cepat, tepat, dan transparan untuk seluruh warga kelurahan. <br>
                            2. Mendorong Pemberdayaan Masyarakat: Melaksanakan program-program pemberdayaan yang melibatkan masyarakat untuk meningkatkan kapasitas ekonomi, pendidikan, dan keterampilan. <br>
3. Memperkuat Keamanan dan Ketertiban Lingkungan: Menggalakkan partisipasi masyarakat dalam menjaga keamanan dan ketertiban lingkungan serta memperkuat koordinasi dengan aparat keamanan. <br>
4. Meningkatkan Infrastruktur dan Fasilitas Umum: Mengupayakan peningkatan infrastruktur dan fasilitas umum, seperti jalan, drainase, dan fasilitas sosial, guna mendukung aktivitas ekonomi dan sosial warga. <br>
5. Membangun Keharmonisan Sosial: Mendorong kerukunan dan keharmonisan antar warga melalui kegiatan sosial, budaya, dan keagamaan.
                        </div>
                    </ul>
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>