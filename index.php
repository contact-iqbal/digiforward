<base href="/digiforward/">
<?php include './layout.php'; ?>

<div class="h-40"></div>

<div class="container mx-auto px-4 py-16">
    <!-- Hero Section -->
    <section class="w-full flex flex-col lg:flex-row border-b border-neutral-300 pb-16 gap-8">
        <div class="flex-1 flex flex-col justify-center items-center gap-8 text-center lg:text-left">
            <h1 class="font-bold text-[2.5rem] sm:text-[3rem] md:text-[4rem] lg:text-[5rem] max-w-170 leading-none">SMK ANTARTIKA 2 SIDOARJO</h1>
            <p class="max-w-170 text-neutral-700 font-semibold text-base sm:text-lg md:text-xl">The only platform that gives your team all the tools needed to work together on their awesome projects.</p>
        </div>
        <div class="flex-1 flex justify-center items-center p-4 sm:p-6 md:p-8">
            <div class="rounded-3xl overflow-hidden shadow-xl bg-neutral-200 w-full min-h-60 sm:min-h-72 md:min-h-80">
                <!-- <img src="./public/images/image (1).png" alt="smk antartika 2 sidoarjo" class="w-full h-full object-cover"> -->
            </div>
        </div>
    </section>

    <!-- Collaboration Section -->
    <section class="w-full mt-11">
        <h1 class="text-center font-bold text-2xl sm:text-3xl md:text-4xl">Kolaborasi Industri</h1>
        <?php include './src/component/collaboration.php'; ?>
    </section>
</div>

<!-- Counter section -->
<section class="w-full mt-16 bg-[#102693] p-4 pt-12 pb-12 flex justify-center items-center">
    <div class="container grid grid-cols-1 sm:grid-cols-3 gap-8 justify-around text-white list-none">
        <li class="flex flex-col justify-center items-center gap-2">
            <i class="fa-solid fa-heart text-2xl sm:text-3xl"></i>
            <h1 class="text-4xl sm:text-5xl font-bold">987</h1>
            <p class="font-semibold text-lg sm:text-xl">Siswa</p>
        </li>
        <li class="flex flex-col justify-center items-center gap-2">
            <i class="fa-solid fa-gem text-2xl sm:text-3xl"></i>
            <h1 class="text-4xl sm:text-5xl font-bold">90</h1>
            <p class="font-semibold text-lg sm:text-xl">Murid Berprestasi</p>
        </li>
        <li class="flex flex-col justify-center items-center gap-2">
            <i class="fa-solid fa-graduation-cap text-2xl sm:text-3xl"></i>
            <h1 class="text-4xl sm:text-5xl font-bold">1324</h1>
            <p class="font-semibold text-lg sm:text-xl">Alumni</p>
        </li>
    </div>
</section>

<div class="container mx-auto px-4 py-16">
    <!-- About Section -->
    <section class="w-full mt-7">
        <h1 class="text-center text-2xl sm:text-3xl md:text-4xl font-bold">Tentang SMART 2</h1>
        <div class="flex flex-col lg:flex-row w-full mt-8 gap-6 lg:gap-2">

            <div class="flex-1 p-4 sm:p-6 md:p-8 flex flex-col gap-6 md:gap-8 align-between">
                <p class="text-neutral-700 font-semibold text-justify text-sm sm:text-base">
                    SMK Antartika 2 Sidoarjo adalah Sekolah Menengah Kejuruan (SMK) swasta yang berada di bawah naungan Yayasan Pendidikan Wahyuhana Surabaya. Sekolah ini berlokasi di Jl. Siwalanpanji No.117, Buduran, Sidoarjo, Jawa Timur. Didirikan pada tahun 2002, SMK Antartika 2 telah resmi beroperasi penuh sejak 18 November 2024 dan terakreditasi A dari BAN-SM.
                </p>
                <p class="text-neutral-700 text-justify text-sm sm:text-base">
                    SMK Antartika 2 Sidoarjo merupakan sekolah kejuruan unggulan di Jawa Timur yang mempersiapkan siswa untuk dunia kerja, wirausaha, dan pendidikan tinggi. Dengan akreditasi A, fasilitas lengkap, dan kerja sama industri yang kuat, kami berkomitmen membentuk generasi yang siap bersaing di era global.
                </p>
                <a href="#" class="bg-[#2563eb] p-2 text-white rounded-md pl-6 pr-6 w-fit">Daftar PPdb sekarang&nbsp;&nbsp;<i class="fa-solid fa-arrow-right"></i></a>
            </div>

            <div class="flex-1 p-4 sm:p-6 md:p-8">
                <div class="bg-white rounded-lg shadow-md divide-y">
                    <!-- Visi -->
                    <details class="group">
                        <summary class="flex justify-between items-center px-4 py-3 text-left text-[#4A0E2E] font-medium cursor-pointer">
                            Visi
                            <svg class="w-5 h-5 text-[#4A0E2E] transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="px-4 pb-4 text-sm text-gray-700">
                            Menjadi sekolah unggulan yang menghasilkan siswa berprestasi, berkarakter, dan siap menghadapi tantangan global.
                        </div>
                    </details>

                    <!-- Misi -->
                    <details class="group">
                        <summary class="flex justify-between items-center px-4 py-3 text-left text-[#4A0E2E] font-medium cursor-pointer">
                            Misi
                            <svg class="w-5 h-5 text-[#4A0E2E] transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="px-4 pb-4 text-sm text-gray-700 space-y-1">
                            <p>- Memberikan pendidikan berkualitas berbasis teknologi.</p>
                            <p>- Membentuk siswa berkarakter disiplin dan kreatif.</p>
                            <p>- Menjalin kerjasama dengan masyarakat dan dunia industri.</p>
                        </div>
                    </details>

                    <!-- Fasilitas Sekolah -->
                    <details class="group">
                        <summary class="flex justify-between items-center px-4 py-3 text-left text-[#4A0E2E] font-medium cursor-pointer">
                            Fasilitas Sekolah
                            <svg class="w-5 h-5 text-[#4A0E2E] transition-transform duration-300 group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="px-4 pb-4 text-sm text-gray-700 space-y-1">
                            <p>- Perpustakaan modern</p>
                            <p>- Laboratorium komputer & sains</p>
                            <p>- Lapangan olahraga</p>
                            <p>- Koneksi internet cepat</p>
                        </div>
                    </details>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Superior Section -->
<div class="flex justify-center items-center mx-auto bg-[#102693] text-white">
    <section class="flex flex-col lg:flex-row container">
        <div class="flex-1 flex flex-col">
            <div class="w-full flex-1 sm:min-h-80 md:min-h-120 bg-neutral-300 border-white border-r-0 border-b-10 lg:border-r-10 lg:border-b-10"></div>
            <div class="flex w-full">
                <div class="flex-[2] h-20 sm:h-24 md:h-30 bg-neutral-300 border-white border-r-10"></div>
                <div class="flex-1 h-20 sm:h-24 md:h-30 bg-neutral-300 border-white border-r-0 lg:border-r-10"></div>
            </div>
        </div>

        <div class="flex-1">
            <div class="w-full min-h-60 sm:min-h-80 md:min-h-120 bg-transparent border-white border-b-10 p-6 sm:p-10 md:p-16 flex flex-col gap-3 sm:gap-4 md:gap-5">
                <p class="text-[#4e73e1] text-base sm:text-lg">POTRET PRESTASI SISWA</p>
                <h1 class="font-bold text-3xl sm:text-4xl md:text-5xl lg:text-6xl">Dari Kelas ke Panggung Juara</h1>
                <p class="text-sm sm:text-base">Tak hanya unggul di bidang akademik, siswa kami juga berprestasi dalam olahraga, seni, dan kreativitas yang membanggakan sekolah.</p>
                <a href="#" class="p-2 sm:p-3 bg-[#6690ff] w-fit rounded-xl sm:rounded-2xl">Lihat Prestasi Lainnya</a>
            </div>
            <div class="flex w-full">
                <div class="flex-[2] h-20 sm:h-24 md:h-30 bg-neutral-300 border-white border-r-10"></div>
                <div class="flex-1 h-20 sm:h-24 md:h-30 bg-neutral-300"></div>
            </div>
        </div>

    </section>
</div>


<!-- Jurusan section -->
<?php include './src/component/jurusan.php' ?> </div>

<!-- program magang section -->
<section class="w-full bg-[#102693] text-white flex justify-center items-center px-4 sm:px-6 lg:px-12 py-12">
    <div class="container flex flex-col md:flex-row items-center gap-8">
        <!-- Placeholder untuk gambar/ilustrasi -->
        <div class="flex-1 min-h-60 sm:min-h-80 md:min-h-96 lg:min-h-180 bg-transparent"></div>

        <!-- Konten -->
        <div class="flex-1 flex flex-col justify-center gap-6 text-center md:text-left">
            <h1 class="font-bold text-3xl sm:text-4xl lg:text-5xl relative leading-tight">
                PROGRAM MAGANG/PKL DI JEPANG
                <i class="fa-solid fa-plane-departure text-[#e63946] absolute top-0 right-1/2 md:right-auto md:left-full -translate-y-6 md:translate-y-0 text-2xl sm:text-3xl lg:text-4xl"></i>
            </h1>
            <p class="text-base sm:text-lg lg:text-xl">
                Raih pengalaman internasional untuk masa depan karier yang lebih gemilang dengan Belajar, bekerja, dan berkembang di negeri Sakura.
            </p>
            <a href="#" class="text-base sm:text-lg lg:text-xl underline hover:no-underline">
                Explore teachers and students →
            </a>
        </div>
    </div>
</section>


<div class="container mx-auto px-4 py-16 flex flex-col justify-center items-center">

    <!-- Video Profil Section -->
    <section class="w-full max-w-300 min-h-80 items-center bg-white shadow-xl rounded-lg flex flex-col md:flex-row mb-16">
        <!-- Text content -->
        <div class="flex-1 p-6 sm:p-9 flex flex-col gap-6 sm:gap-8 text-center md:text-left">
            <h1 class="text-2xl sm:text-3xl md:text-4xl font-bold">Vidio Profil SMK ANTARTIKA 2</h1>
            <ul class="space-y-2">
                <li class="flex gap-2 items-center justify-center md:justify-start">
                    <i class="fa-solid fa-check"></i>
                    <p>Sekilas tentang SMK Antartika 2 Sidoarjo.</p>
                </li>
                <li class="flex gap-2 items-center justify-center md:justify-start">
                    <i class="fa-solid fa-check"></i>
                    <p>Kenali SMK Antartika 2 lebih dekat.</p>
                </li>
                <li class="flex gap-2 items-center justify-center md:justify-start">
                    <i class="fa-solid fa-check"></i>
                    <p>Profil singkat sekolah kami.</p>
                </li>
            </ul>
            <a href="#" class="p-3 border-2 border-black rounded-lg w-fit mx-auto md:mx-0 font-semibold">Pelajari Lebih Lanjut</a>
        </div>

        <!-- Shapes + box -->
        <div class="flex-1 p-3 relative mt-8 md:mt-0">
            <!-- background shapes (hanya tampil di lg ke atas) -->
            <div class="absolute inset-0 hidden xl:block">
                <div class="w-32 h-32 rounded-full bg-[#7c4654] absolute top-[-80px] left-[-60px]"></div>
                <div class="w-40 h-[120px] bg-[#fbddd5] absolute top-[-100px] right-[50px] opacity-80 rotate-[45deg]"></div>
                <div class="w-20 h-20 rounded-full bg-[#5c7ae4] absolute bottom-[30px] left-[60px]"></div>
                <div class="w-24 h-24 rounded-[1.5rem] bg-[#5c7ae4] absolute bottom-[20px] right-[80px]"></div>
                <div class="w-36 h-36 rounded-[1rem] bg-[#c5497d] absolute top-[100px] right-[-40px] opacity-80"></div>
            </div>

            <!-- content box -->
            <div class="w-full min-h-[220px] sm:min-h-[280px] md:min-h-[340px] bg-neutral-200 rounded-lg overflow-hidden shadow-lg relative z-10"></div>
        </div>
    </section>


    <!-- artikel section -->
    <section class="p-4 pt-16 w-full">
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left">
            <h1 class="text-2xl sm:text-3xl font-bold">Artikel Sekolah</h1>
            <a href="#" class="text-base sm:text-lg md:text-xl hover:underline">
                More articles →
            </a>
        </div>

        <!-- gunakan grid biar responsif -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mt-8">
            <div class="rounded-lg shadow-lg flex flex-col overflow-hidden">
                <div class="h-48 bg-neutral-300"></div>
                <div class="flex-1 p-4 flex flex-col justify-between gap-4">
                    <h1 class="font-bold text-xl">Lorem ipsum dolor</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta impedit reprehenderit temporibus ut rerum.</p>
                    <a href="#" class="font-semibold">Read article →</a>
                </div>
            </div>

            <div class="rounded-lg shadow-lg flex flex-col overflow-hidden">
                <div class="h-48 bg-neutral-300"></div>
                <div class="flex-1 p-4 flex flex-col justify-between gap-4">
                    <h1 class="font-bold text-xl">Lorem ipsum dolor</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta impedit reprehenderit temporibus ut rerum.</p>
                    <a href="#" class="font-semibold">Read article →</a>
                </div>
            </div>

            <div class="rounded-lg shadow-lg flex flex-col overflow-hidden">
                <div class="h-48 bg-neutral-300"></div>
                <div class="flex-1 p-4 flex flex-col justify-between gap-4">
                    <h1 class="font-bold text-xl">Lorem ipsum dolor</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta impedit reprehenderit temporibus ut rerum.</p>
                    <a href="#" class="font-semibold">Read article →</a>
                </div>
            </div>

            <div class="rounded-lg shadow-lg flex flex-col overflow-hidden">
                <div class="h-48 bg-neutral-300"></div>
                <div class="flex-1 p-4 flex flex-col justify-between gap-4">
                    <h1 class="font-bold text-xl">Lorem ipsum dolor</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta impedit reprehenderit temporibus ut rerum.</p>
                    <a href="#" class="font-semibold">Read article →</a>
                </div>
            </div>
        </div>
    </section>


    <!-- acara Section -->
    <section class="p-4 pt-16 w-full">
        <!-- Header -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-center md:text-left">
            <h1 class="text-2xl sm:text-3xl font-bold">Acara Sekolah</h1>
            <a href="#" class="text-base sm:text-lg md:text-xl hover:underline">
                View More →
            </a>
        </div>

        <!-- Cards -->
        <div class="flex flex-wrap mt-8 justify-center lg:justify-start gap-6">
            <a href="#" class="w-full lg:w-[22%]">
                <div class="min-h-40 rounded-lg shadow-lg flex flex-col overflow-hidden p-4">
                    <p class="font-semibold">Ipsum</p>
                    <h1 class="text-xl lg:text-2xl font-bold">Varius est diam</h1>
                    <div class="h-40 lg:h-50 bg-neutral-300 rounded-lg mt-4"></div>
                </div>
            </a>

            <a href="#" class="w-full lg:w-[22%]">
                <div class="min-h-40 rounded-lg shadow-lg flex flex-col overflow-hidden p-4">
                    <p class="font-semibold">Ipsum</p>
                    <h1 class="text-xl lg:text-2xl font-bold">Varius est diam</h1>
                    <div class="h-40 lg:h-50 bg-neutral-300 rounded-lg mt-4"></div>
                </div>
            </a>

            <a href="#" class="w-full lg:w-[22%]">
                <div class="min-h-40 rounded-lg shadow-lg flex flex-col overflow-hidden p-4">
                    <p class="font-semibold">Ipsum</p>
                    <h1 class="text-xl lg:text-2xl font-bold">Varius est diam</h1>
                    <div class="h-40 lg:h-50 bg-neutral-300 rounded-lg mt-4"></div>
                </div>
            </a>

            <a href="#" class="w-full lg:w-[22%]">
                <div class="min-h-40 rounded-lg shadow-lg flex flex-col overflow-hidden p-4">
                    <p class="font-semibold">Ipsum</p>
                    <h1 class="text-xl lg:text-2xl font-bold">Varius est diam</h1>
                    <div class="h-40 lg:h-50 bg-neutral-300 rounded-lg mt-4"></div>
                </div>
            </a>
        </div>
    </section>

    <section class="flex flex-col lg:flex-row justify-between items-center gap-6 w-full mt-26 border-b pb-16 text-center md:text-left">
        <h1 class="text-2xl md:text-4xl font-bold">
            Jadilah sang juara bersama kami
        </h1>
        <a href="#"
            class="p-3 md:p-4 border-2 font-semibold rounded-lg hover:bg-black hover:text-white transition">
            Daftar Sekarang
        </a>
    </section>

</div>
<section class="mt-5 w-full flex justify-center items-center">
    <div class="container text-white"> <?php include './src/component/footer.php' ?> </div>
</section>