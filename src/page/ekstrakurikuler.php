<?php
include __DIR__ . '/../../layout.php';
?>

<?php
$bannerText = "Ekstrakurikuler";
include __DIR__ . '/../component/banner.php';
?>

<style>
    .after::after {
        content: " ";
        display: block;
        height: 4px;
        width: 100%;
        background-color: #1E40AF;
    }
</style>

<section class="w-full p-2 flex flex-col justify-center items-center">

    <div class="container max-w-7xl p-3 font-[arial]">
        <h1 class="font-bold text-2xl">Ekstrakurikuler</h1>
        <p class="after text-blue-900 text-lg relative w-fit">SMK Antartika 2 Sidoarjo</p>
        <br>
        <p class="text-neutral-800">
            Dalam upaya peningkatan mutu sumber daya manusia Indonesia. Departemen Pendidikan Nasional yang tertuang dalam rencana srategis (Renstra) Depdiknas 2005-2009 menekankan bahwa perspektif pembangunan pendidikan tidak hanya untuk mengembangkan aspek intelektual saja melainkan juga watak, moral, sosial, dan fisik peserta didik atau dengan kata lain menciptan manusia Indonesia seutuhnya. Semua jenjang lembaga pendidikan formal mempunyai tugas untuk mensintesa itu semua. Pengembangan kegiatan ekstrakurikuler lebih mengandalkan inisiatif perguruan tinggi. Secara Yuridis, pengembangan kegiatan ekstrakurikuler memiliki landasan hukum yang kuat, karena diatur dalam surat Keputusan Menteri yang harus dilaksanakan oleh Perguruan tinggi. Ekstrakurikuler merupakan kegiatan yang dilaksanakan di luar jam pelajaran tetap guna memperluas wawasan serta peningkatan dan penerapan nilai-nilai pengetahuan dan kemampuan dalam berbagai hal, seperti olahraga dan seni. Selain itu, kegiatan ekstrakurikuler juga merupakan salah satu cara menampung dan mengembangkan potensi mahasiswa yang tidak tersalurkan saat di kampus. Kegiatan ekstrakurikuler merupakan salah satu upaya pembinaan yang diselenggarakan di lingkungan kampus. Pada gilirannya keterampilan mahasiswa akan ditingkatkan dengan bentuk-bentuk latihan khusus sesuai dengan yang diikuti dan diminati. Hal ini sangat penting agar pembibitan dan pembinaan bakat dan minat dikalangan mahasiswa akan terus meningkat dan mencapai hasil yang maksimal.
        </p>
    </div>

    <!-- Swiper -->
    <div class="swiper mySwiper w-full max-w-6xl mt-6">
        <div class="swiper-wrapper">
            <!-- Card 1 -->
            <div class="swiper-slide">
                <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center">
                    <img src="https://new.smktelkom-sda.sch.id/wp-content/uploads/2024/06/paskibra.png"
                        alt="Paskibra"
                        class="rounded-xl mb-4 w-full object-cover">
                    <h3 class="text-center font-medium">Ekstrakurikuler Paskibra</h3>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="swiper-slide">
                <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center">
                    <img src="https://new.smktelkom-sda.sch.id/wp-content/uploads/2024/06/5.1.jpg"
                        alt="Pramuka"
                        class="rounded-xl mb-4 w-full object-cover">
                    <h3 class="text-center font-medium">Ekstrakurikuler Pramuka wajib untuk kelas X</h3>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="swiper-slide">
                <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center">
                    <img src="https://new.smktelkom-sda.sch.id/wp-content/uploads/2024/06/Futsal.png"
                        alt="Futsal"
                        class="rounded-xl mb-4 w-full object-cover">
                    <h3 class="text-center font-medium">Ekstrakurikuler Futsal</h3>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="swiper-slide">
                <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center">
                    <img src="https://new.smktelkom-sda.sch.id/wp-content/uploads/2024/06/Basket.png"
                        alt="Basket"
                        class="rounded-xl mb-4 w-full object-cover">
                    <h3 class="text-center font-medium">Ekstrakurikuler Bola Basket</h3>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="swiper-slide">
                <div class="bg-white rounded-2xl shadow-md p-4 flex flex-col items-center">
                    <img src="https://new.smktelkom-sda.sch.id/wp-content/uploads/2024/06/Basket.png"
                        alt="Basket"
                        class="rounded-xl mb-4 w-full object-cover">
                    <h3 class="text-center font-medium">Club RPL</h3>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination mt-6"></div>
    </div>

</section>

<section class="container mx-auto h-fit">
    <?php include __DIR__ . '../../component/footer.php' ?>
</section>

<!-- SwiperJS CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000, // 3 detik
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });
</script>