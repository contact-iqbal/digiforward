<?php

include __DIR__ . '/../../../layout.php';
?>

<style>
    .typography::after {
        content: ' ';
        display: block;
        padding: 1px;
        background-color: #1c398e;
    }

    .active {
        background-color: #2b2b2bff;
        color: white;
    }

    .active:hover {
        background-color: #1c398e !important;
    }
</style>

<div class="h-40"></div>

<div class="w-full flex flex-col items-center">
    <section class="block md:flex min-h-150 container mx-auto gap-3 p-1 md:p-4">

        <div class="flex-1">

            <div class="w-full h-full text-white p-8 md:p-7 bg-blue-900 relative rounded-2xl overflow-hidden">
                <h1 class="text-2xl md:text-3xl font-bold">FAQ's</h1>
                <br>

                <div class="w-full bg-white rounded-3xl h-fit p-2 relative z-1">
                    <ul class="text-neutral-800 w-full flex flex-col gap-2">
                        <li>
                            <a href="src/page/faq/tentang.php" class="block w-full font-semibold p-3 text-center transition-all duration-300 rounded-xl hover:bg-blue-100">Tentang SMART2</a>
                        </li>
                        <li>
                            <a href="src/page/faq/siswa.php" class="block w-full font-semibold p-3 text-center transition-all duration-300 rounded-xl hover:bg-blue-100">Siswa SMART2</a>
                        </li>
                        <li>
                            <a href="src/page/faq/guru.php" class="block w-full font-semibold p-3 text-center transition-all duration-300 rounded-xl hover:bg-blue-100">Guru SMART2</a>
                        </li>
                        <li>
                            <a href="src/page/faq/kurikulum.php" class="block w-full font-semibold p-3 active text-center transition-all duration-300 rounded-xl hover:bg-blue-100">Kurikulum</a>
                        </li>
                        <li>
                            <a href="src/page/faq/ppdb.php" class="block w-full font-semibold p-3 text-center transition-all duration-300 rounded-xl hover:bg-blue-100">PPdb</a>
                        </li>
                    </ul>
                </div>


                <div class=" right-[-60px] bottom-[-60px] w-50 h-50 md:w-60 md:h-60 bg-blue-500 opacity-30 rounded-full absolute z-[0]"></div>
                <div class=" right-[60px] bottom-[60px] w-30 h-30 md:w-40 md:h-40 bg-blue-500 opacity-30 rounded-full absolute z-[0]"></div>
            </div>

        </div>

        <div class="flex-1 p-4">
            <h1 class="font-semibold text-3xl">Kurikulum</h1>
            <p class="font-semibold text-blue-800 typography w-fit mb-10">SMK Antartika 2 Sidoarjo</p>

            <div class="space-y-3">
                <!-- Item 1 -->
                <div>
                    <button onclick="toggleFaq(1)" class="flex items-center gap-2 w-full text-left font-semibold cursor-pointer">
                        <span id="icon-1" class="text-blue-800 transition-transform duration-300 font-extrabold text-2xl">−</span>
                        <span class="flex-1 text-lg">Apa kurikulum yang digunakan SMK Antartik 2 Sidoarjo?</span>
                    </button>
                    <div id="answer-1" class="pl-6 text-sm ml-0 md:ml-3 mt-4 text-neutral-600 overflow-hidden transition-all duration-500 ease max-h-40 opacity-100">
                        -
                    </div>
                </div>

            </div>
        </div>

    </section>
    <section class="container mx-auto h-fit">
        <?php include __DIR__ . '../../../component/footer.php' ?>
    </section>
</div>


<script>
    function toggleFaq(id) {
        document.querySelectorAll('[id^="answer-"]').forEach((el, i) => {
            const icon = document.getElementById("icon-" + (i + 1));
            if (i + 1 === id) {
                if (el.classList.contains("max-h-0")) {
                    el.classList.remove("max-h-0", "opacity-0");
                    el.classList.add("max-h-40", "opacity-100");
                    icon.textContent = "−";
                } else {
                    el.classList.add("max-h-0", "opacity-0");
                    el.classList.remove("max-h-40", "opacity-100");
                    icon.textContent = "+";
                }
            } else {
                el.classList.add("max-h-0", "opacity-0");
                el.classList.remove("max-h-40", "opacity-100");
                icon.textContent = "+";
            }
        });
    }
</script>