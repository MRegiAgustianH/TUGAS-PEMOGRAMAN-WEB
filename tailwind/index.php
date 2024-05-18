<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Halaman Utama</title>
    
</head>
<body>
    <!-- Header -->
        <header class="bg-gray-50">
        <div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
          <a class="block text-cyan-600" href="#">
            <span class="sr-only">Home</span>
            <h2 class="font-poppins font-bold text-2xl">LING STORE</h2>
          </a>
      
          <div class="flex flex-1 items-center justify-end md:justify-between">
            <nav aria-label="Global" class="hidden md:block">
              <ul class="flex items-center gap-6 text-sm">
                <li>
                  <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Tentang </a>
                </li>
      
                <li>
                  <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> Beranda </a>
                </li>
      
                <li>
                  <a class="text-gray-500 transition hover:text-gray-500/75" href="#"> History </a>
                </li>
      
                <li>
                  <a class="text-gray-500 transition hover:text-gray-500/75" href="https://wa.me/6282117697602"> Chat Admin </a>
                </li>
      
            </nav>
      
            <div class="flex items-center gap-4">
              <div class="sm:flex sm:gap-4">
                <a
                  class="block rounded-md bg-cyan-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-cyan-700"
                  href="login.php"
                >
                  Login
                </a>
      
                <a
                  class="hidden rounded-md bg-gray-300 px-5 py-2.5 text-sm font-medium text-cyan-600 transition hover:text-gray-600/75 sm:block"
                  href="register.php"
                >
                  Register
                </a>
              </div>
      
              <button
                class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
              >
                <span class="sr-only">Toggle menu</span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
              </button>
            </div>
          </div>
        </div>
        </header>

    <!-- Search -->
        <section class="bg-gray-50">
    <div class="p-8 md:p-12 lg:px-16 lg:py-24">
      <div class="mx-auto max-w-lg text-center">
        <h2 class="text-2xl font-poppins text-gray-600 md:text-3xl">
          Top Up Legal Murah dan Aman 
        </h2>
      </div>
  
      <div class="mx-auto mt-8 max-w-xl">
        <form action="#" class="sm:flex sm:gap-4">
          <div class="sm:flex-1">
            <label for="email" class="sr-only">Email</label>
  
            <input
              type="email"
              placeholder="Cari Barang . . . . "
              class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-sm transition focus:border-white focus:outline-none focus:ring focus:ring-yellow-400"
            />
          </div>
  
          <button
            type="submit"
            class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-rose-600 px-5 py-3 text-white transition focus:outline-none focus:ring focus:ring-yellow-400 sm:mt-0 sm:w-auto"
          >
            <span class="text-sm font-medium">Cari</span>
  
            <svg
              class="size-5 rtl:rotate-180"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M17 8l4 4m0 0l-4 4m4-4H3"
              />
            </svg>
          </button>
        </form>
      </div>
    </div>
        </section>

    <!-- Produk -->
        <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
          <header>
            <h2 class="text-xl font-poppins text-gray-900 sm:text-3xl">List Product</h2>
          </header>
      
          <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            <li>
              <a href="#" class="group block overflow-hidden">
                <img
                  src="Mobile Legends.jpg"
                  alt=""
                  class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
                />
      
                <div class="relative bg-white pt-3">
                  <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                    Mobile Legends
                  </h3>
      
                  <p class="mt-2">
                    <span class="sr-only"> Regular Price </span>
      
                    <span class="tracking-wider text-gray-900"> Rp.1.499 - 1.499.000 </span>
                  </p>
                </div>
              </a>
            </li>
      
            <li>
              <a href="#" class="group block overflow-hidden">
                <img
                  src="pubg.jpg"
                  alt=""
                  class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
                />
      
                <div class="relative bg-white pt-3">
                  <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                    PUBG MOBILE
                  </h3>
      
                  <p class="mt-2">
                    <span class="sr-only"> Regular Price </span>
      
                    <span class="tracking-wider text-gray-900"> Rp. 3.000 - 1.499.000 </span>
                  </p>
                </div>
              </a>
            </li>
      
            <li>
              <a href="#" class="group block overflow-hidden">
                <img
                  src="valorant.jpg"
                  alt=""
                  class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
                />
      
                <div class="relative bg-white pt-3">
                  <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                    Valorant
                  </h3>
      
                  <p class="mt-2">
                    <span class="sr-only"> Regular Price </span>
      
                    <span class="tracking-wider text-gray-900"> Rp. 13.000 - 720.000</span>
                  </p>
                </div>
              </a>
            </li>
      
            <li>
              <a href="#" class="group block overflow-hidden">
                <img
                  src="genshin.jpg"
                  alt=""
                  class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]"
                />
      
                <div class="relative bg-white pt-3">
                  <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                    Genshin Impact
                  </h3>
      
                  <p class="mt-2">
                    <span class="sr-only"> Regular Price </span>
      
                    <span class="tracking-wider text-gray-900"> Rp. 65.000 - 1.250.000</span>
                  </p>
                </div>
              </a>
            </li>
          </ul>
        </div>
        </section>

    <!-- footer -->
    <footer class="bg-gray-50"> 
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
          <div class="sm:flex sm:items-center sm:justify-between">
            <div class="flex justify-center text-cyan-600 sm:justify-start">
              <h2 class="font-poppins font-bold text-xl">LING STORE</h2>
            </div>
            <p class="mt-4 text-center text-sm text-gray-500 lg:mt-0 lg:text-right">
              Copyright &copy; 2024. All rights reserved.
            </p>
          </div>
        </div>
      </footer>

</body>
</html>