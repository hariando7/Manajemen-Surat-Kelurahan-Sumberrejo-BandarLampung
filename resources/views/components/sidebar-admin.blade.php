<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto">
        <div class="flex pb-8">
            <img src="/image/logo-balam.png" class="h-10 w-10 me-3 sm:h-10 items-center" alt="Flowbite Logo" />
            <div class="">
                <h1 class="self-center font-semibold whitespace-nowrap dark:text-black">Kelurahan Sumberrejo</h1>
                <h2 class="self-center font-semibold whitespace-nowrap dark:text-black">Kecamatan Kemiling</h2>
            </div>
        </div>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="#" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 text-center">Dashboard</span>
                </a>
            </li>
            <li>
                <button type="button" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-full justify-center" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <span class="" sidebar-toggle-item>Manajemen Surat</span>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2 flex flex-col items-end">
                    <li>
                        <a href="#" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Surat Keluar</a>
                    </li>
                    <li>
                        <a href="#" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Surat Masuk</a>
                    </li>
                    <li>
                        <a href="#" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Arsip Surat</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 text-center whitespace-nowrap">Pelaporan</span>
                </a>
            </li>
            <li>
                <a href="#" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 text-center whitespace-nowrap">Informasi</span>
                </a>
            </li>
            <li>
                <a href="#" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 text-center whitespace-nowrap">Galeri</span>
                </a>
            </li>
            <li>
                <button type="button" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group w-full justify-center" aria-controls="dropdown" data-collapse-toggle="dropdown">
                    <span class="" sidebar-toggle-item>Kelola Akun</span>
                </button>
                <ul id="dropdown" class="hidden py-2 space-y-2 flex flex-col items-end">
                    <li>
                        <a href="#" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Daftar Akun</a>
                    </li>
                    <li>
                        <a href="#" class="bg-[#D72323] flex items-center w-[150px] justify-center p-1 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Permohonan Akun</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="bg-[#B2ACAC] flex items-center p-1 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <span class="flex-1 text-center whitespace-nowrap">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>

<div class="p-4 sm:ml-64">
    <div class="p-4">
        <div class="grid grid-cols-1 gap-4 mb-4 pl-72 pr-72">
            <div class="flex items-center pl-4 h-28 rounded-2xl bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" /></svg>
                </p>
            </div>
        </div>
    </div>
    <div class="p-4">
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="flex items-center pl-4 h-28 rounded-2xl bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" /></svg>
                </p>
            </div>
            <div class="flex items-center pl-4 h-28 rounded-2xl bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" /></svg>
                </p>
            </div>
        </div>
    </div>
    <div class="p-4">
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="flex items-center pl-4 h-28 rounded-2xl bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" /></svg>
                </p>
            </div>
            <div class="flex items-center pl-4 h-28 rounded-2xl bg-gray-50 dark:bg-gray-800">
                <p class="text-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-book-text">
                        <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H19a1 1 0 0 1 1 1v18a1 1 0 0 1-1 1H6.5a1 1 0 0 1 0-5H20" />
                        <path d="M8 11h8" />
                        <path d="M8 7h6" /></svg>
                </p>
            </div>
        </div>
    </div>
</div>
