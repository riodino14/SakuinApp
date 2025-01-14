<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Saku.In
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
   /* Tambahkan scroll-margin-top pada setiap section */
  section {
    scroll-margin-top: 64px; /* Sesuaikan dengan tinggi navbar */
  }

  /* Untuk sticky navbar */
  nav {
    height: 64px; /* Tinggi navbar */
  }
  </style>
 </head>
 <body class="bg-white text-gray-800">
<!-- Navbar -->
<nav class="flex items-center justify-between px-4 py-4 sticky top-0 bg-white z-50 shadow-md">
  <div class="flex items-center space-x-4">
    <img alt="Saku.In logo" class="h-10" height="50" src="https://i.ibb.co.com/rpsYYJN/logo.png" width="50"/>
    <span class="text-xl font-bold">Saku.In</span>
  </div>
  <div class="hidden md:flex space-x-6">
    <a class="text-gray-600 hover:text-gray-800" href="#">Home</a>
    <a class="text-gray-600 hover:text-gray-800" href="#about-us">About Us</a>
    <a class="text-gray-600 hover:text-gray-800" href="#value">Value</a>
    <a class="text-gray-600 hover:text-gray-800" href="#features">Features</a>
  </div>
  <div class="hidden md:flex space-x-4">
    <a class="px-4 py-2 border border-green-500 text-green-500 rounded hover:bg-green-500 hover:text-white" href="http://127.0.0.1:8000/admin/login">Log In</a>
    <a class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600" href="http://127.0.0.1:8000/admin/register">Sign Up</a>
  </div>
  <div class="md:hidden">
    <button class="text-gray-600">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

<!-- Hero Section -->
<section class="flex flex-col md:flex-row items-center justify-between p-6 bg-gray-92" style="height: 93vh;">
  <div class="md:w-1/2 space-y-6 text-center md:text-left">
    <h1 class="text-5xl font-bold leading-tight">
      Effective Financial Management,
    </h1>
    <h2 class="text-3xl text-green-600">
      More Productive Future
    </h2>
    <p class="text-lg text-gray-700">
      Saku.In is here to organize your personal financial management. Record income and expense properly.
    </p>
    <br><br>
    <a class="px-6 py-3 bg-green-500 text-white text-lg rounded hover:bg-green-600 transition" href="http://127.0.0.1:8000/admin">
      Get Started
    </a>
  </div>
  <div class="md:w-1/2 flex justify-center">
    <img
      alt="Financial management illustration"
      src="https://storage.googleapis.com/a1aa/image/qCJ13C9nQvrTB5MHn98yHudPAi6Sq3VyiCjHiGLJEKM1cgfJA.jpg"
      class="w-3/4 md:w-full max-w-lg"
      style="max-width: 600px; width: 100%; height: auto;"
    />
  </div>
</section>

  <!-- About Us Section -->
  <section id="about-us" class="p-6 bg-green-300">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <div>
        <h2 class="text-3xl font-bold text-gray-800 mb-4">About Us</h2>
        <p class="text-lg text-gray-700 leading-relaxed">
          Saku.In is your trusted partner in managing finances. We offer an integrated platform to help you track expenses, set budgets, and plan for a better financial future. Our mission is to make financial management simple, secure, and accessible for everyone.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed mt-4">
          Designed with smart features and a user-friendly interface, Saku.In ensures a seamless experience while keeping your data secure. Join us to take control of your finances and achieve financial freedom effortlessly.
        </p>
        <button class="mt-6 px-6 py-2 bg-green-500 text-white rounded shadow hover:bg-green-600 transition">
          Learn More
        </button>
      </div>
      <div class="flex justify-center">
        <img src="https://i.ibb.co.com/rpsYYJN/logo.png" alt="Saku.In logo" class="w-3/4 md:w-full max-w-xs">
      </div>
    </div>
  </section>
  

  <!-- Value Section -->
  <section id="value" class="p-6 bg-gray-100" style="height: 93vh;">
   <div class="text-center mb-8">
    <h2 class="text-xl font-bold text-green-600">Value</h2>
    <h3 class="text-3xl font-bold text-gray-800 mt-2">
      Manage Your Money, <br> Make Your Dreams Come True
    </h3>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <div class="p-6 bg-white shadow rounded-md flex flex-col justify-between border border-green-200">
      <div>
        {{-- <img src="https://via.placeholder.com/50" alt="Transparency Icon" class="mb-6"> --}}
        <h4 class="text-lg font-bold mb-2">Transparency</h4>
        <p class="text-sm text-gray-600">
          We provide clear and open financial management solutions, giving users full control over every transaction and financial report.
        </p>
      </div>
      <div class="mt-6">
        <a href="#" class="flex items-center justify-center w-10 h-10 border border-green-500 rounded-full text-green-500 hover:bg-green-500 hover:text-white">
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="p-6 bg-white shadow rounded-md flex flex-col justify-between border border-green-200">
      <div>
        {{-- <img src="https://via.placeholder.com/50" alt="Financial Innovation Icon" class="mb-6"> --}}
        <h4 class="text-lg font-bold mb-2">Financial Innovation</h4>
        <p class="text-sm text-gray-600">
          With the latest financial technology, Saku.In helps make it easier to manage funds, investments, and savings for your various financial needs.
        </p>
      </div>
      <div class="mt-6">
        <a href="#" class="flex items-center justify-center w-10 h-10 border border-green-500 rounded-full text-green-500 hover:bg-green-500 hover:text-white">
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="relative p-6 bg-green-100 shadow rounded-md flex flex-col justify-between">
      <div>
        {{-- <img src="https://via.placeholder.com/50" alt="Measurable Financial Planning Icon" class="mb-6"> --}}
        <h4 class="text-lg font-bold mb-2">Measurable Financial Planning</h4>
        <p class="text-sm text-gray-600">
          We provide customizable financial planning tools, helping you manage your spending, save, and achieve your financial goals more easily.
        </p>
      </div>
      <div class="mt-6">
        <a href="#" class="flex items-center justify-center w-10 h-10 border border-green-500 rounded-full text-green-500 hover:bg-green-500 hover:text-white">
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>
      <!-- Curve Decoration -->
      <div class="absolute top-0 right-0 w-32 h-32 bg-green-300 rounded-bl-full"></div>
    </div>
   </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="p-6 bg-green-100" style="height: 93vh;">
   <div class="text-center mb-6">
    <h2 class="text-3xl font-bold">
     Saku.In Features
    </h2>
   </div>
   <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="p-6 bg-white shadow rounded flex flex-col items-center justify-between">
     <img alt="Dashboard illustration" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/7eEcPDrveznhtkLHd9xFqj1vOH738NruSzZcJAXOoszRzBenA.jpg" width="100"/>
     <h4 class="text-lg font-bold text-center">
      Dashboard
     </h4>
     <p class="text-center text-sm">
      Dashboard memberikan gambaran ringkas tentang pemasukan, pengeluaran, dan selisih total dalam periode tertentu. Data ditampilkan dalam bentuk angka agregat dan grafik harian untuk memudahkan analisis keuangan secara visual. Pengguna dapat menyesuaikan rentang tanggal untuk melihat laporan spesifik sesuai kebutuhan.     </p>
    </div>
    <div class="p-6 bg-white shadow rounded flex flex-col items-center justify-between">
     <img alt="Categories illustration" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/7S6mmAXnWPrFApCnZfsVp3onI0WQoD8yLJF9k5cM6POp5AfTA.jpg" width="100"/>
     <h4 class="text-lg font-bold text-center">
      Categories
     </h4>
     <p class="text-center text-sm">
      Category adalah fitur untuk mengelompokkan jenis pemasukan dan pengeluaran berdasarkan kebutuhan, seperti "Food and Beverage," "Transportasi," "Gaji," dan "Projek." Dengan kategori ini, pengguna dapat mengelola dan mengorganisasi transaksi mereka secara lebih terstruktur.     </p>
    </div>
    <div class="p-6 bg-white shadow rounded flex flex-col items-center justify-between">
     <img alt="Transactions illustration" class="mx-auto mb-4" height="100" src="https://storage.googleapis.com/a1aa/image/NZmbev5Iao2Cda859fOsVt36xQOAy17oykSaEIgdQRlPzBenA.jpg" width="100"/>
     <h4 class="text-lg font-bold text-center">
      Transactions
     </h4>
     <p class="text-center text-sm">
      Transaction mencatat rincian setiap pemasukan dan pengeluaran. Pengguna dapat melihat informasi seperti kategori transaksi, tipe transaksi (pemasukan/pengeluaran), tanggal transaksi, jumlah, catatan tambahan, dan gambar pendukung. Fitur ini mempermudah pengguna untuk melacak keuangan harian secara mendetail.     </p>
    </div>
   </div>
  </section>

  <!-- Call to Action Section -->
  <section class="p-6">
   <div class="bg-green-100 p-6 rounded">
    <div class="flex flex-col md:flex-row items-center justify-between">
     <div class="md:w-1/2 space-y-4">
      <h2 class="text-2xl font-bold">
       Ready to improve your financial management?
      </h2>
      <p>
       Helps you manage your personal finances, from income to savings, together, achieving balance.
      </p>
     </div>
     <div class="md:w-1/2 flex space-x-4">
      <a class="px-6 py-2 bg-green-500 text-white rounded hover:bg-green-600" href="http://127.0.0.1:8000/admin">
       Get Started Now
      </a>
      {{-- <a class="px-6 py-2 border border-green-500 text-green-500 rounded hover:bg-green-500 hover:text-white" href="#"> --}}
       {{-- Learn More   --}}
      </a>
     </div>
    </div>
   </div>
  </section>
  <!-- Footer -->
  <footer class="p-6 bg-white text-center">
   <div class="flex items-center justify-center space-x-4 mb-4">
    <img alt="Saku.In logo" class="h-10" height="50" src="https://i.ibb.co.com/rpsYYJN/logo.png" width="50"/>
    <span class="text-xl font-bold">
     Saku.In
    </span>
   </div>
   <p>
    Created by
    <span class="font-bold">
     Saku.In
    </span>
   </p>
  </footer>
 </body>
</html>