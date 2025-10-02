<?php
include __DIR__ . '/../../layout.php';
?>

<?php
$bannerText = "Profil Alumni";
include __DIR__ . '/../component/banner.php';
?>

<section class="w-full p-4 flex justify-center items-center">
    <div class="container">
        <!-- Wrapper Swiper -->
        <div class="swiper mySwiper max-w-4xl">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide m-3">
                    <div class="p-6 bg-white shadow-md rounded-lg">
                        <h1 class="font-medium">Nama Alumni</h1>
                        <p class="text-gray-400">bekerja di ...</p>
                        <br>
                        <p class="text-gray-700 italic">"Belajar di sekolah ini membuat saya lebih percaya diri menghadapi dunia kerja."</p>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="p-6 bg-white shadow-md rounded-lg">
                        <h1 class="font-medium">Nama Alumni</h1>
                        <p class="text-gray-400">bekerja di ...</p>
                        <br>
                        <p class="text-gray-700 italic">"Guru-guru sangat mendukung dan fasilitas lengkap!"</p>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="p-6 bg-white shadow-md rounded-lg">
                        <h1 class="font-medium">Nama Alumni</h1>
                        <p class="text-gray-400">bekerja di ...</p>
                        <br>
                        <p class="text-gray-700 italic">"Pengalaman belajar di sini tidak terlupakan."</p>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<section class="container mx-auto h-fit">
    <?php include __DIR__ . '../../component/footer.php' ?>
</section>


<!-- SwiperJS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1, // selalu 1 card
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 3000, // 3 detik per slide
            disableOnInteraction: false, // tetap autoplay meski user klik
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });
</script>
