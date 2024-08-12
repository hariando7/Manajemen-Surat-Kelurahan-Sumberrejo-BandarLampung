<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Berita</title>
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
    <div class="pb-4 pl-4 pr-4 sm:ml-64">
        <h1 class="text-3xl font-bold pb-4">Edit Berita</h1>
        <div class="flex pb-2">
            {{-- <div class="">
                <a href="/daftar-berita" class="bg-[#2B2A4C] w-32 flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left">
                        <path d="m12 19-7-7 7-7" />
                        <path d="M19 12H5" /></svg>
                    <span class="pl-3 font-bold flex-1 whitespace-nowrap">Kembali</span>
                </a>
            </div> --}}
        </div>
        <div class="relative overflow-x-auto">
            <!-- Form Section -->
            <div class="bg-[#F5F3F3] pb-20 p-6 rounded-lg shadow-lg">
                <h2 class="text-xl font-semibold mb-4 text-center">Informasi Berita</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Drag and Drop Section -->
                    <div class="flex flex-col items-center justify-center  border-gray-300 rounded-lg h-64 bg-[#D9D9D9]" id="dropzone">
                        <input id="fileInput" type="file" class="hidden" />
                        <div class="text-center" id="fileDisplayArea">
                            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16s1-1 4-1 5 1 8 1 4-1 4-1v3a2 2 0 01-2 2H5a2 2 0 01-2-2v-3zM8 10h.01M16 10h.01M12 14h.01M21 12h-6.59l2.3-2.29a1 1 0 00-1.42-1.42l-4 4a1 1 0 000 1.42l4 4a1 1 0 001.42-1.42L14.41 14H21a1 1 0 000-2z" />
                            </svg> --}}
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6    w-6 mx-auto mb-2 text-gray-400">
                                <path d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15" stroke="#4B4646" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17 8L12 3L7 8" stroke="#4B4646" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 3V15" stroke="#4B4646" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <p class="text-black">Drag and drop files here</p>
                        </div>
                    </div>
                    <!-- Form Fields -->
                    <div class="space-y-4">
                        <div>
                            <input type="text" id="judul" name="judul" class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Judul Berita">
                        </div>
                        <div>
                            <textarea id="isi" name="isi" rows="4" class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Isi Berita"></textarea>
                        </div>
                        <div>
                            <input type="date" id="tanggal" name="" class="bg-[#F5F3F3] mt-1 block w-full px-3 py-2 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                </div>
                <div class="float-right text-center">
                    <button type="submit" class="bg-[#2B2A4C] text-white px-4 py-1 rounded-md hover:bg-[#414066]">Upload</button>
                </div>
            </div>
        </div>
    </div>
    <x-footer-admin />

    <script>
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('fileInput');
        const fileDisplayArea = document.getElementById('fileDisplayArea');

        dropzone.addEventListener('click', () => {
            fileInput.click();
        });

        dropzone.addEventListener('dragover', (event) => {
            event.preventDefault();
            dropzone.classList.add('border-indigo-500');
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.classList.remove('border-indigo-500');
        });

        dropzone.addEventListener('drop', (event) => {
            event.preventDefault();
            dropzone.classList.remove('border-indigo-500');
            const files = event.dataTransfer.files;
            handleFiles(files);
        });

        fileInput.addEventListener('change', (event) => {
            const files = event.target.files;
            handleFiles(files);
        });

        function handleFiles(files) {
            if (files.length > 0) {
                const file = files[0];
                fileDisplayArea.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mx-auto mb-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12l5 5L20 7" />
                    </svg>
                    <p class="text-gray-700">${file.name}</p>
                `;
            }
        }

    </script>
</body>

</html>
