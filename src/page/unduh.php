<?php
include __DIR__ . '/../../layout.php';
include __DIR__ . '/../../config-database.php';
?>

<style>
    .typography::after {
        content: '  ';
        display: block;
        padding: 2px;
        margin-top: 6px;
        background-color: #102693;
    }
</style>

<div class="h-40"></div>

<div class="w-full flex flex-col items-center px-4 md:px-8 lg:px-16">

    <section class="container mx-auto h-fit">

        <div class="w-full text-left mb-6 md:mb-10">
            <h1 class="text-md md:text-3xl w-fit font-bold typography">Unduh File</h1>
        </div>

        <div class="w-full space-y-10 mb-20">

            <div>
                <h1 class="text-xl md:text-2xl font-semibold mb-3">SERTIFIKAT TERAKREDITASI "A" SMK ANTARTIKA SIDOARJO</h1>
                <div class="overflow-x-auto">
                    <table class="table-auto border w-full min-w-[600px]">
                        <thead class="border bg-gray-50">
                            <tr>
                                <th class="border p-2 text-center">No.</th>
                                <th class="border p-2 text-center">Nama File</th>
                                <th class="border p-2 text-center">Diunggah</th>
                                <th class="border p-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border p-2 text-center">1.</td>
                                <td class="border p-2 text-center">Sertifikasi akreditasi SMK Antartika 2 Sidoarjo</td>
                                <td class="border p-2 text-center">17 Mar 2023</td>
                                <td class="border p-2 text-center"><a href="#" class="p-2 text-blue-800 underline">Lihat</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h1 class="text-xl md:text-2xl font-semibold mb-3">Brosur PPDB SMK Antartika 2 Sidoarjo 2025/2026</h1>
                <div class="overflow-x-auto">
                    <table class="table-auto border w-full min-w-[600px]">
                        <thead class="border bg-gray-50">
                            <tr>
                                <th class="border p-2 text-center">No.</th>
                                <th class="border p-2 text-center">Nama File</th>
                                <th class="border p-2 text-center">Diunggah</th>
                                <th class="border p-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border p-2 text-center">1.</td>
                                <td class="border p-2 text-center">Brosur PPDB SMK Antartika 2 Sidoarjo 2025/2026</td>
                                <td class="border p-2 text-center">17 Oktober 2024</td>
                                <td class="border p-2 text-center"><a href="#" class="p-2 text-blue-800 underline">Unduh</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>
                <h1 class="text-xl md:text-2xl font-semibold mb-3">Sertifikat ISO 21001</h1>
                <div class="overflow-x-auto">
                    <table class="table-auto border w-full min-w-[600px]">
                        <thead class="border bg-gray-50">
                            <tr>
                                <th class="border p-2 text-center">No.</th>
                                <th class="border p-2 text-center">Nama File</th>
                                <th class="border p-2 text-center">Diunggah</th>
                                <th class="border p-2 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-100">
                                <td class="border p-2 text-center">1.</td>
                                <td class="border p-2 text-center">Sertifikat ISO 21001</td>
                                <td class="border p-2 text-center">17 Mar 2023</td>
                                <td class="border p-2 text-center"><a href="#" class="p-2 text-blue-800 underline">Lihat</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

        <?php include __DIR__ . '../../component/footer.php' ?>

    </section>
</div>