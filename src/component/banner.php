<style>
    .gradient {
        background: #57C785;
        background: linear-gradient(349deg, rgba(87, 199, 133, 0) 54%, rgba(83, 147, 237, 0.59) 100%);
    }
</style>

<section class="h-fit pt-40 flex flex-col md:flex-row gradient">

    <div class="flex-1 relative p-4 flex items-center justify-center">
        <div class="flex-1 h-80 bg-neutral-200 rounded-lg max-w-150"></div>
    </div>

    <div class="flex-1 p-3 flex flex-col font-[poppins] justify-center ">
        <?php if (!empty($bannerText)): ?>
            <div class="banner">
                <p class="text-2xl font-semibold font-[arial]"><?php echo htmlspecialchars($bannerText); ?></p>
            </div>
        <?php endif; ?>
        <h1 class="text-3xl font-bold text-blue-900">SMKS Antartika 2</h1>
        <h1 class="text-3xl font-bold">Sidoarjo</h1>
    </div>

</section>