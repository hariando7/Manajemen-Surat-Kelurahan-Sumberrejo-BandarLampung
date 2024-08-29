<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun </title>
    <link rel="icon" type="image/x-icon" href="/assets/">
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
    <x-nav-admin />
    <x-sidebar-admin />
    <div class="pb-20 pl-4 pr-4 sm:ml-64">
        <h1 class="text-3xl font-bold pb-2">Pengajuan Dokumen</h1>
        <h2 class="text-normal font-light pb-4">Surat Keterangan Domisili</h2>
        <div class="flex mx-auto w-[70%] grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-16">
            <div class="spaye-y-4">
                <h1 class="text-xl font-bold pb-4">Data Diri</h1>
                <div class="pb-2">
                    <label for="email" class="block text-sm font-normal text-gray-700">Nama</label>
                    <input type="email" id="email" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                </div>
                <div class="pb-2">
                    <label for="username" class="block text-sm font-normal text-gray-700">Tempat Lahir
                        <input type="username" id="username" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">Tanggal Lahir</label>
                    <input type="date" id="tanggal" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">PNS</label>
                    <input type="text" id="nama" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Warga Negara</label>
                    <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option selected>Warga Negara Indonesia</option>
                        <option value="WNA">Warga Negara Asing</option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Agama</label>
                    <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option selected>Islam</option>
                        <option value="KRI">Kristen </option>
                        <option value="HIN">Hindu</option>
                        <option value="BUD">Budhha</option>
                        <option value="KNG">Konghucu</option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="nik" class="block text-sm font-normal text-gray-700">Status Perkawinan</label>
                    <select id="countries" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option selected>Belum Kawin</option>
                        <option value="WNA">Kawin</option>
                    </select>
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat Sesuai KK</label>
                    <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">Berlaku s.d Tanggal</label>
                    <input type="date" id="tanggal" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="pb-2">
                    <label for="alamat" class="block text-sm font-normal text-gray-700">Alamat Saat Ini</label>
                    <input type="text" id="alamat" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">Tinggal di Alamat Saat ini Sejak</label>
                    <input type="date" id="tanggal" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
                <div class="pb-2">
                    <label for="nama" class="block text-sm font-normal text-gray-700">PNS</label>
                    <input type="text" id="nama" name="" class="bg-white mt-1 block w-full px-3 py-1 border border-gray-600 rounded shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="">
                </div>
            </div>
            <div class="">
                <div class="pb-4">
                    <label for="ktp" class="block text-sm font-normal text-gray-700">Foto KTP</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover" src="image/ktp-fake.png" />
                    </div>
                </div>
                <div class="pb-4">
                    <label for="swafoto" class="block text-sm font-normal text-gray-700">Unggah KK</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover" src="image/ktp-fake.png" />
                    </div>
                </div>
                <div class="pb-4">
                    <label for="swafoto" class="block text-sm font-normal text-gray-700">Surat Pengantar RT</label>
                    <div class="w-full h-36 mt-2">
                        <img class="mx-auto h-full object-cover" src="image/preview.png" />
                    </div>
                </div>
            </div>
        </div>
        <x-footer-admin />
</body>

</html>
