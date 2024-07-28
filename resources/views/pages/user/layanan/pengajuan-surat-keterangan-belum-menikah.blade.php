<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Keterangan Belum Menikah</title>
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
    <style>
        #input_ktp::-webkit-file-upload-button {
            visibility: hidden;
        }

        #input_ktp::before {
            content: 'Pilih Foto';
            display: inline-block;
            background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }

        #input_swafoto::-webkit-file-upload-button {
            visibility: hidden;
        }

        #input_swafoto::before {
            content: 'Pilih Foto';
            display: inline-block;
            background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
            border: 1px solid #999;
            border-radius: 3px;
            padding: 5px 8px;
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            text-shadow: 1px 1px #fff;
            font-weight: 700;
            font-size: 10pt;
        }
    </style>
</head>

<body>
    {{-- Awal Navbar --}}
    <div>
        <x-nav-user />
        <section id="cover"
            class="relative bg-center bg-no-repeat bg-cover bg-white bg-blend-multiply min-h-screen flex items-center justify-center">
            <form class="relative full m-5 lg:m-10 p-6 z-10 text-black">
                <div class="mt-10 lg:mt-20 mb-10 lg:mb-20">
                    <div
                        class="font-bold text-4xl mb-5 lg:mb-10 mt-20 lg:mt-0 text-[#2B2A4C] underline underline-offset-4">
                        Surat Keterangan Belum Menikah
                    </div>
                    <div class="max-w-ful mb-5 lg:mb-10">
                        Silakan isi formulir berikut sesuai dengan data pada Kartu Tanda Penduduk (KTP) Anda.
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-4">
                        <div class="text-black text-left">
                            <div>
                                <div class="font-bold text-black mb-5 text-lg">Data Diri</div>
                                <div class="mb-2">
                                    <label for="nama-lengkap-diri"
                                        class="block mb-2 text-sm font-medium text-gray-900">Nama
                                        Lengkap</label>
                                    <input type="name" id="nama-lengkap-diri" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        placeholder="Nama Lengkap" required />
                                </div>
                                <div class="mb-2">
                                    <label for="jeniskelamindiri"
                                        class="block mb-2 text-sm font-medium text-gray-900">Jenis
                                        Kelamin</label>
                                    <select id="jeniskelamindiri"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                                <div class="mb-2 relative">
                                    <label for="tempat-lahir-diri"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tempat
                                        Lahir</label>
                                    <input type="name" id="tempat-lahir-diri" placeholder="Tempat Lahir" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-2 relative">
                                    <label for="tanggal-lahir-diri"
                                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                                        Lahir</label>
                                    <input type="date" id="tanggal-lahir-diri" placeholder="Tanggal Lahir" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-2">
                                    <label for="agama-diri"
                                        class="block mb-2 text-sm font-medium text-gray-900">Agama</label>
                                    <select id="agama-diri" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required>
                                        <option value="" selected disabled>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="mb-2 relative">
                                    <label for="pekerjaan-diri"
                                        class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                                    <input type="name" id="pekerjaan-diri" placeholder="Pekerjaan" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                                <div class="mb-2 relative">
                                    <label for="alamat-diri"
                                        class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                                    <input type="name" id="alamat-diri" placeholder="Alamat" name=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 lg:mt-0">
                            <div class="font-bold text-black mb-5 text-lg">Dokumen Penunjang</div>
                            <div class="text-black">
                                <div class="font-bold text-lg mb-2">Unggah Foto KTP</div>
                                <div class="flex  mb-2">
                                    <div class="text-sm">
                                        Pastikan seluruh bagian KTP berada dalam bingkai foto dan bukan fotokopi KTP
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="input_ktp">Upload file</label>
                                    <div class="relative">
                                        <input name=""
                                            class="block w-full text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700"
                                            aria-describedby="input_ktp_help" id="input_ktp" type="file" required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-black">
                                <div class="font-bold text-lg mb-2">Unggah Foto KK</div>
                                <div class="flex  mb-2">
                                    <div class="text-sm">
                                        Pastikan seluruh bagian KK berada dalam bingkai foto dan bukan fotokopi KK
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="input_swafoto">Upload file</label>
                                    <div class="relative">
                                        <input name=""
                                            class="block w-full text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700"
                                            aria-describedby="input_swafoto_help" id="input_swafoto" type="file"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class="text-black">
                                <div class="font-bold text-lg mb-2">Unggah Surat Pengantar RT</div>
                                <div class="flex  mb-2">
                                    <div class="text-sm">
                                        Pastikan seluruh bagian Surat Pengantar RT berada dalam bingkai foto dan bukan
                                        fotokopi Surat Pengantar RT
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="input_swafoto">Upload file</label>
                                    <div class="relative">
                                        <input name=""
                                            class="block w-full text-sm text-gray-900 rounded-lg cursor-pointer bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-l-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700"
                                            aria-describedby="input_swafoto_help" id="input_swafoto" type="file"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="btn border-none w-full text-white bg-[#2B2A4C] hover:bg-[#191831] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
        <x-footer-user />
    </div>
    {{-- Akhir Navbar --}}
</body>

</html>