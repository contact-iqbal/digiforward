<style>
  .dropdown-menu {
    transition: opacity 0.3s ease;
  }

  /* Mobile dropdown styles */
  @media (max-width: 1023px) {
    .dropdown-menu {
      position: relative !important;
      left: auto !important;
      mt-2: 0 !important;
      box-shadow: none !important;
      background: #f8f9fa !important;
      border-radius: 0 !important;
      width: 100% !important;
      opacity: 1 !important;
      margin-top: 1rem;
    }

    .dropdown-menu li a {
      padding-left: 1rem !important;
      color: #666 !important;
    }
  }
</style>

<div class="fixed w-full z-[99]">

  <?php if (!isset($hideLinkto) || $hideLinkto === false): ?>
    <div class="w-full p-2 bg-[#102693]">

      <div class="flex text-neutral-200 flex-col items-center md:items-end">

        <ul class="flex-inline md:flex gap-6">
          <li class="flex justify-center items-center gap-4">
            <i class="fa-solid fa-phone"></i>
            <p class="text-sm h-[100%]">(031) 1234567</p>
          </li>
          <li class="flex justify-center items-center gap-4">
            <i class="fa-solid fa-envelope"></i>
            <p class="text-sm h-[100%]">info@smkantartika2.sch.id</p>
          </li>
        </ul>

      </div>

    </div>
  <?php endif; ?>

  <nav class="p-4 flex justify-between items-center bg-white shadow-lg w-full">
    <!-- Logo -->
    <a class="flex items-center" href="#">
      <img src="./public/images/favicon (1).png" width="60" alt="">
      <p class="w-2 leading-none font-extrabold text-lg">SMK ANTARTIKA 2</p>
    </a>

    <!-- Hamburger Button (mobile only) -->
    <button id="menu-btn" class="lg:hidden flex flex-col gap-1.5 p-2 rounded focus:outline-none absolute right-1">
      <span class="w-6 h-0.5 bg-black"></span>
      <span class="w-6 h-0.5 bg-black"></span>
      <span class="w-6 h-0.5 bg-black"></span>
    </button>

    <!-- Nav Links -->
    <div id="menu"
      class="hidden lg:flex flex-col lg:flex-row lg:items-center lg:gap-8 absolute lg:static top-33 left-0 w-full lg:w-auto bg-white lg:bg-transparent shadow lg:shadow-none p-4 lg:p-0">
      <ul class="flex flex-col lg:flex-row gap-4 lg:gap-8 w-full lg:w-auto">

        <li class="w-full lg:w-auto text-left">
          <a href="#" class="block hover:text-blue-700 cursor-pointer">Beranda</a>
        </li>

        <!-- Jurusan -->
        <li class="relative dropdown w-full lg:w-auto text-left" data-id="jurusanDropdown">
          <button class="menu-btn hover:text-blue-700 cursor-pointer">Jurusan <i class="fa-solid fa-angle-down text-sm"></i></button>
          <ul id="jurusanDropdown"
            class="dropdown-menu absolute lg:left-0 lg:mt-2 hidden bg-white lg:shadow-lg lg:rounded-lg w-full lg:w-40 text-left opacity-0">
            <li><a href="#" class="block px-4 py-2 hover:bg-blue-100">TKJ</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-blue-100">AKL</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-blue-100">RPL</a></li>
          </ul>
        </li>

        <!-- Services -->
        <li class="relative dropdown w-full lg:w-auto text-left" data-id="servicesDropdown">
          <button class="menu-btn hover:text-blue-700 cursor-pointer">Informasi <i class="fa-solid fa-angle-down text-sm"></i></button>
          <ul id="servicesDropdown"
            class="dropdown-menu absolute lg:left-0 lg:mt-2 hidden bg-white lg:shadow-lg lg:rounded-lg w-full lg:w-40 text-left opacity-0">
            <li><a href="./src/page/faq/tentang.php" class="block px-4 py-2 hover:bg-blue-100">FAQ</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-blue-100">Pelatihan</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-blue-100">Workshop</a></li>
          </ul>
        </li>

        <!-- Contact -->
        <li class="relative dropdown w-full lg:w-auto text-left" data-id="contactDropdown">
          <button class="menu-btn hover:text-blue-700 cursor-pointer">Hubungi Kami <i class="fa-solid fa-angle-down text-sm"></i></button>
          <ul id="contactDropdown"
            class="dropdown-menu absolute lg:left-0 lg:mt-2 hidden bg-white lg:shadow-lg lg:rounded-lg w-full lg:w-40 text-left opacity-0">
            <li><a href="./src/page/kotak-pertanyaan.php" class="block px-4 py-2 hover:bg-blue-100">Kotak Pertanyaan</a></li>
            <li><a href="./src/page/kontak-kami.php" class="block px-4 py-2 hover:bg-blue-100">Kontak Kami</a></li>
          </ul>
        </li>

        <li class="w-full lg:w-auto text-left">
          <a href="http://localhost/ppdb/" class="block hover:text-blue-700 cursor-pointer">PPDB</a>
        </li>
      </ul>
    </div>

    <ul class="flex flex-col lg:flex-row gap-2 lg:gap-4 mt-4 lg:mt-0 w-full lg:w-auto">
      <li>
        <a href="./src/page/unduh.php"
          class="hidden w-full lg:w-auto lg:block text-[#2563eb] px-4 py-2 rounded-full border text-center hover:bg-blue-500 hover:text-white hover:shadow-lg">
          Unduh Data
        </a>
      </li>
      <li class="flex"></li>
    </ul>
  </nav>

</div>

<script>
  const menuBtn = document.getElementById("menu-btn");
  const menu = document.getElementById("menu");

  menuBtn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
    menu.classList.toggle("flex");
  });
</script>

<script>
  let activeDropdown = null;
  let hideTimeout = null;

  // Detect if mobile
  function isMobile() {
    return window.innerWidth < 1024;
  }

  function showDropdown(dropdown) {
    clearTimeout(hideTimeout);
    dropdown.classList.remove('hidden');

    if (isMobile()) {
      dropdown.classList.add('opacity-100');
      dropdown.classList.remove('opacity-0');
    } else {
      requestAnimationFrame(() => {
        dropdown.classList.add('opacity-100');
        dropdown.classList.remove('opacity-0');
      });
    }
  }

  function hideDropdown(dropdown) {
    if (isMobile()) {
      dropdown.classList.add('hidden');
      dropdown.classList.add('opacity-0');
      dropdown.classList.remove('opacity-100');
    } else {
      dropdown.classList.add('opacity-0');
      dropdown.classList.remove('opacity-100');
      hideTimeout = setTimeout(() => {
        dropdown.classList.add('hidden');
      }, 300);
    }
  }

  document.querySelectorAll('.dropdown').forEach(item => {
    const btn = item.querySelector('.menu-btn');
    const dropdown = document.getElementById(item.dataset.id);

    // Click toggle - works for both mobile and desktop
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const isHidden = dropdown.classList.contains('hidden');

      if (isMobile()) {
        document.querySelectorAll('#menu ul ul').forEach(el => {
          if (el !== dropdown) hideDropdown(el);
        });
        if (isHidden) {
          showDropdown(dropdown);
          activeDropdown = dropdown;
        } else {
          hideDropdown(dropdown);
          activeDropdown = null;
        }
      } else {
        document.querySelectorAll('#menu ul ul').forEach(el => {
          if (el !== dropdown) hideDropdown(el);
        });
        if (isHidden) {
          showDropdown(dropdown);
          activeDropdown = dropdown;
        } else {
          hideDropdown(dropdown);
          activeDropdown = null;
        }
      }
    });

    // Hover events - only for desktop
    if (!isMobile()) {
      item.addEventListener('mouseenter', () => {
        clearTimeout(hideTimeout);
        document.querySelectorAll('#menu ul ul').forEach(el => {
          if (el !== dropdown) hideDropdown(el);
        });
        showDropdown(dropdown);
        activeDropdown = dropdown;
      });

      item.addEventListener('mouseleave', () => {
        hideTimeout = setTimeout(() => {
          if (activeDropdown === dropdown) {
            hideDropdown(dropdown);
            activeDropdown = null;
          }
        }, 200);
      });

      // 🔥 Tambahan → biar tetap terbuka saat hover container dropdown
      dropdown.addEventListener('mouseenter', () => {
        clearTimeout(hideTimeout);
        showDropdown(dropdown);
        activeDropdown = dropdown;
      });

      dropdown.addEventListener('mouseleave', () => {
        hideTimeout = setTimeout(() => {
          hideDropdown(dropdown);
          activeDropdown = null;
        }, 200);
      });
    }
  });

  // Click outside to close - works for both mobile and desktop
  document.addEventListener('click', (e) => {
    if (!e.target.closest('#menu')) {
      document.querySelectorAll('#menu ul ul').forEach(el => hideDropdown(el));
      activeDropdown = null;
    }
  });

  // Re-initialize on window resize
  window.addEventListener('resize', () => {
    document.querySelectorAll('#menu ul ul').forEach(el => hideDropdown(el));
    activeDropdown = null;
    clearTimeout(hideTimeout);
  });
</script>