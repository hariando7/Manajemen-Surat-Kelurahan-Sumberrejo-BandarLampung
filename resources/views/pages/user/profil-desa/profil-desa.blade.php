<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Desa</title>
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
        <section id="cover" class="relative bg-center bg-no-repeat bg-cover bg-[url('./image/hero.svg')] bg-blend-multiply min-h-screen flex items-center justify-center lg:pb-16">
            <div class="absolute inset-0 bg-white opacity-40"></div>
            <div class="relative w-full p-5 lg:p-20 rounded-lg shadow-lg z-10 text-black lg:mt-10 mb-20 kg:mb-0">
                <div class="font-bold text-xl lg:text-4xl mb-5 lg:mb-10 mt-20 lg:mt-0">
                    PROFIL
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-4">
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <img class="h-auto max-w-full rounded-lg" src="/image/user-profile.jpg" alt="">
                            <div class="text-center text-black w-full m-auto">
                                <div class="text-md font-bold">Edwin Putramanaha, SP</div>
                                <div class="text-sm">Lurah Sumberrejo </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <img class="h-auto max-w-full rounded-lg" src="/image/user-profile.jpg" alt="">
                            <div class="text-center text-black w-full m-auto">
                                <div class="text-md font-bold">Sekertaris</div>
                                <div class="text-sm"></div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <img class="h-auto max-w-full rounded-lg" src="/image/user-profile.jpg" alt="">
                            <div class="text-center text-black w-full m-auto">
                                <div class="text-md font-bold">Firmansyah</div>
                                <div class="text-xs">Pengawas Kasi Trantib</div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <img class="h-auto max-w-full rounded-lg" src="/image/user-profile.jpg" alt="">
                            <div class="text-center text-black w-full m-auto">
                                <div class="text-md font-bold">Indah Istika, SH. MM</div>
                                <div class="text-sm">Pengawas Kasi Pemberdayaan dan Permbangunan</div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <img class="h-auto max-w-full rounded-lg" src="/image/user-profile.jpg" alt="">
                            <div class="text-center text-black w-full m-auto">
                                <div class="text-md font-bold">Euis Setiawati, Amd</div>
                                <div class="text-sm">Pengawas Kasi Pemerintahan</div>
                            </div>
                        </div>
                    </div>
                    <div class="m-auto text-center flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center">
                            <img class="h-auto max-w-full rounded-lg" src="/image/user-profile.jpg" alt="">
                            <div class="text-center text-black w-full m-auto">
                                <div class="text-md font-bold">Deny Sukrestiani</div>
                                <div class="text-sm">Bendahara</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-footer-user />
    </div>
</body>

</html>
