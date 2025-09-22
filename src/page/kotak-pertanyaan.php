<?php
include __DIR__ . '/../../layout.php';
include __DIR__ . '/../../config-database.php';
?>

<style>
    .typography::after {
        content: ' ';
        display: block;
        padding: 1px;
        background-color: #1c398e;
    }
</style>

<div class="h-40"></div>

<div class="w-full flex flex-col items-center">
    <section class="block md:flex min-h-150 container mx-auto gap-3 p-1 md:p-4">

        <div class="flex-1">

            <div class="w-full h-full text-white p-8 md:p-7 bg-blue-900 relative rounded-2xl overflow-hidden">
                <h1 class="text-2xl md:text-3xl font-bold">Pusat Bantuan</h1>
                <p class="text-md md:text-lg">Temukan kami di:</p>

                <br>

                <ul class="flex flex-col gap-3 relative z-[1]">
                    <li class="flex items-center gap-2"><i class="fa-solid fa-phone text-xl"></i> 088-1238-456 | 0814-1389-749</li>
                    <li class="flex items-center gap-2"><i class="fa-brands fa-instagram text-xl"></i> @smkantartika2sda</li>
                    <li class="flex items-center gap-2"><i class="fa-solid fa-envelope text-xl"></i> info@smkantartika2.sch.id</li>
                    <li class="flex items-center gap-2"><i class="fa-brands fa-youtube text-xl"></i> Smk Antartika 2 Sidoarjo</li>
                    <li class="flex items-center gap-2"><i class="fa-brands fa-facebook text-xl"></i> Smk Antartika 2 Sidoarjo</li>
                </ul>

                <div class=" right-[-60px] bottom-[-60px] w-50 h-50 md:w-60 md:h-60 bg-blue-500 opacity-30 rounded-full absolute z-[0]"></div>
                <div class=" right-[60px] bottom-[60px] w-30 h-30 md:w-40 md:h-40 bg-blue-500 opacity-30 rounded-full absolute z-[0]"></div>
            </div>

        </div>

        <!-- pertanyaan box -->
        <div class="flex-1 p-4">
            <h1 class="font-semibold text-3xl mb-3">Kotak Pertanyaan</h1>
            <p class="font-semibold text-blue-800 typography w-fit">SMK Antartika 2 Sidoarjo</p>
            <div class="mt-3">
                <form action="" method="POST" class="flex flex-col gap-4 mt-6">
                    <div>
                        <label class="block font-semibold mb-1">Nama <span class="text-red-600">*</span></label>
                        <input type="text" name="nama" placeholder="Tulis Nama Anda"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                    </div>

                    <div>
                        <label class="block font-semibold mb-1">Email <span class="text-red-600">*</span></label>
                        <input type="email" name="email" placeholder="Tulis Alamat Email Anda"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                    </div>

                    <div>
                        <label class="block font-semibold mb-1">Telepon <span class="text-red-600">*</span></label>
                        <input type="tel" name="telepon" placeholder="Tulis Nomor HP/Telepon Anda"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                    </div>

                    <div>
                        <label class="block font-semibold mb-1">Subject</label>
                        <input type="text" name="subject" placeholder="Tulis Judul Pertanyaan Anda"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>

                    <div>
                        <label class="block font-semibold mb-1">Pertanyaan</label>
                        <textarea name="pertanyaan" rows="5" placeholder="Tulis Pertanyaan Anda"
                            class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
                    </div>

                    <button type="submit"
                        class="bg-blue-800 text-white font-semibold px-6 py-3 rounded-md hover:bg-blue-900 cursor-pointer transition">
                        Kirim
                    </button>
                </form>

            </div>
        </div>



    </section>
    <section class="container mx-auto h-fit">
        <?php include __DIR__ . '../../component/footer.php' ?>
    </section>
</div>