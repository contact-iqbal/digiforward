<?php
include __DIR__ . '/../../layout.php';
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
            <h1 class="font-semibold text-3xl mb-3">Alamat</h1>
            <p class="font-semibold text-blue-800 typography w-fit">SMK Antartika 2 Sidoarjo</p>
            <div class="relative w-full overflow-hidden rounded-lg aspect-video mt-4">
                <iframe class="absolute inset-0 w-full h-full"
                    src="https://maps.google.com/maps?width=500&height=300&hl=en&q=SMK%20Antartika%202%20Sidoarjo&t=&z=19&ie=UTF8&iwloc=B&output=embed"
                    frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>



    </section>
    <section class="container mx-auto h-fit">
        <?php include __DIR__ . '../../component/footer.php' ?>
    </section>
</div>