<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
    {{-- Akhir DeasyUi --}}
</head>

<body>
    <section>
        <x-nav-user />
    </section>
    <section class="bg-center bg-no-repeat bg-cover bg-[url('./image/hero.svg')] bg-blend-multiply min-h-screen">

    </section>
    <section class="bg-white p-10 bg-center bg-no-repeat bg-cover bg-blend-multiply min-h-full">
        <div class="flex">
            <div class="lg:w-1/2 bg-blue-500 text-black">
                <div class="font-bold text-xl mb-10">Kentang Kami</div>
                <p class="mb-10">Kelurahan Sumberrejo merupakan kelurahan yang berada di Kecamatan Kemiling, Kota
                    Bandar Lampung.</p>
                <a role="button" class="btn bg-[#2B2A4C] text-white">Selengkapnya</a>
            </div>
            <div class="lg:w-1/2 bg-red-500"></div>
        </div>
    </section>
    <section class="bg-[#2B2A4C] p-10 bg-center bg-no-repeat bg-cover bg-blend-multiply min-h-full">
        <div class="w-1/2 m-auto">
            <div class="text-center font-bold text-white text-xl mb-5">LAYANAN KAMI</div>
            <div class="flex justify-between">
                <div class="text-center">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M62.5 8.33334H25C22.7899 8.33334 20.6702 9.21132 19.1074 10.7741C17.5446 12.3369 16.6667 14.4565 16.6667 16.6667V83.3333C16.6667 85.5435 17.5446 87.6631 19.1074 89.2259C20.6702 90.7887 22.7899 91.6667 25 91.6667H75C77.2101 91.6667 79.3297 90.7887 80.8925 89.2259C82.4553 87.6631 83.3333 85.5435 83.3333 83.3333V29.1667L62.5 8.33334Z"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M58.3333 8.33334V25C58.3333 27.2101 59.2113 29.3298 60.7741 30.8926C62.3369 32.4554 64.4565 33.3333 66.6667 33.3333H83.3333"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M41.6667 37.5H33.3333" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M66.6667 54.1667H33.3333" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M66.6667 70.8333H33.3333" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <P class="font-bold text-white">Pelaporan</P>
                </div>
                <div class="text-center">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none" class="m-auto flex"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 29.1667V20.8333C12.5 18.6232 13.378 16.5036 14.9408 14.9408C16.5036 13.378 18.6232 12.5 20.8333 12.5H29.1667"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M70.8333 12.5H79.1667C81.3768 12.5 83.4964 13.378 85.0592 14.9408C86.622 16.5036 87.5 18.6232 87.5 20.8333V29.1667"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M87.5 70.8333V79.1667C87.5 81.3768 86.622 83.4964 85.0592 85.0592C83.4964 86.622 81.3768 87.5 79.1667 87.5H70.8333"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M29.1667 87.5H20.8333C18.6232 87.5 16.5036 86.622 14.9408 85.0592C13.378 83.4964 12.5 81.3768 12.5 79.1667V70.8333"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M29.1667 33.3333H62.5" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29.1667 50H70.8333" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29.1667 66.6667H54.1667" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <p class="text-center font-bold text-white">Verifikasi Dokumen</p>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white p-10 bg-center bg-no-repeat bg-cover bg-blend-multiply min-h-full">
        <div class="ml-20 mr-20">
            <div class="text-center"></div>
            <div class="flex justify-between">
                <div class="">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M62.5 8.33334H25C22.7899 8.33334 20.6702 9.21132 19.1074 10.7741C17.5446 12.3369 16.6667 14.4565 16.6667 16.6667V83.3333C16.6667 85.5435 17.5446 87.6631 19.1074 89.2259C20.6702 90.7887 22.7899 91.6667 25 91.6667H75C77.2101 91.6667 79.3297 90.7887 80.8925 89.2259C82.4553 87.6631 83.3333 85.5435 83.3333 83.3333V29.1667L62.5 8.33334Z"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M58.3333 8.33334V25C58.3333 27.2101 59.2113 29.3298 60.7741 30.8926C62.3369 32.4554 64.4565 33.3333 66.6667 33.3333H83.3333"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M41.6667 37.5H33.3333" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M66.6667 54.1667H33.3333" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M66.6667 70.8333H33.3333" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="div">
                    <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 29.1667V20.8333C12.5 18.6232 13.378 16.5036 14.9408 14.9408C16.5036 13.378 18.6232 12.5 20.8333 12.5H29.1667"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M70.8333 12.5H79.1667C81.3768 12.5 83.4964 13.378 85.0592 14.9408C86.622 16.5036 87.5 18.6232 87.5 20.8333V29.1667"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M87.5 70.8333V79.1667C87.5 81.3768 86.622 83.4964 85.0592 85.0592C83.4964 86.622 81.3768 87.5 79.1667 87.5H70.8333"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M29.1667 87.5H20.8333C18.6232 87.5 16.5036 86.622 14.9408 85.0592C13.378 83.4964 12.5 81.3768 12.5 79.1667V70.8333"
                            stroke="white" stroke-width="10" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M29.1667 33.3333H62.5" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29.1667 50H70.8333" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29.1667 66.6667H54.1667" stroke="white" stroke-width="10" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <x-footer-user />
</body>

</html>
