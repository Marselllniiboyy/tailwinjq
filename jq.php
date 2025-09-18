<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator</title>
  <link href="./src/output.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-900">
  <div class="bg-gray-900">
  <header class="absolute inset-x-0 top-0 z-50">
    <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
      <div class="flex lg:flex-1">
        <a href="#" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
        </a>
      </div>
      <div class="flex lg:hidden">
        <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="index.php" class="text-sm/6 font-semibold text-white">Product</a>
        <a href="features.php" class="text-sm/6 font-semibold text-white">Features</a>
        <a href="marketplace.php" class="text-sm/6 font-semibold text-white">Marketplace</a>
        <a href="company.php" class="text-sm/6 font-semibold text-white">Company</a>
        <a href="blog.php" class="text-sm/6 font-semibold text-white">Blog</a>
        <a href="jq.php" class="text-sm/6 font-semibold text-white">Calculator</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="login.php" class="text-sm/6 font-semibold text-white">Log in <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
    <el-dialog>
      <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
        <div tabindex="0" class="fixed inset-0 focus:outline-none">
          <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
              </a>
              <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                <span class="sr-only">Close menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                  <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-white/10">
                <div class="space-y-2 py-6">
                  <a href="index.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Product</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Features</a>
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Marketplace</a>
                  <a href="company.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Company</a>
                  <a href="blog.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Blog</a>
                  <a href="jq.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-white hover:bg-white/5">Calculator</a>
                </div>
                <div class="py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-white hover:bg-white/5">Log in</a>
                </div>
              </div>
            </div>
          </el-dialog-panel>
        </div>
      </dialog>
    </el-dialog>
  </header>
  </div>

<div class="isolate bg-gray-900 px-6 py-24 sm:py-32 lg:px-8 min-h-screen">
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-4xl font-semibold tracking-tight text-white sm:text-5xl">
      Kalkulator Luas Bangun Datar
    </h2>
    <p class="mt-2 text-lg text-gray-400">
      Pilih bentuk bangun datar dan masukkan ukurannya.
    </p>
  </div>

  <form id="calculatorForm" class="mx-auto mt-16 max-w-xl sm:mt-20">
    <!-- Pilih bangun datar -->
    <div class="mb-6">
      <label for="shape" class="block text-sm font-semibold text-white">
        Pilih Bangun Datar
      </label>
      <!-- <select id="shape" name="shape"
        class="mt-2 block w-full rounded-md bg-white/5 px-3.5 py-2 text-base  outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 text-white">
        <option value="" >-- Pilih --</option>
        <option value="persegi">Persegi</option>
        <option value="persegi-panjang">Persegi Panjang</option>
        <option value="segitiga">Segitiga</option>
        <option value="lingkaran">Lingkaran</option>
      </select> -->
      <select id="shape" name="shape" class="mt-2 block w-full rounded-md 
        bg-gray-800 text-white  <!-- tambahin ini -->
        px-3.5 py-2 text-base 
        outline-1 -outline-offset-1 outline-white/10 
        focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
  <option value="">-- Pilih --</option>
  <option value="persegi">Persegi</option>
  <option value="persegi-panjang">Persegi Panjang</option>
  <option value="segitiga">Segitiga</option>
  <option value="lingkaran">Lingkaran</option>
</select>
    </div>

    <!-- Input dinamis -->
    <div id="inputs" class="space-y-6"></div>

    <!-- Tombol Hitung -->
    <div class="mt-10 flex space-x-4">
      <button type="submit"
        class="block w-full rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
        Hitung Luas
      </button>
      <button id="kelilingBtn" type="button"
        class="block w-full rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
        Hitung Keliling
      </button>
    </div>
  </form>

  <!-- Hasil -->
  <div id="result" class="mx-auto mt-10 max-w-xl text-center text-white text-xl font-semibold"></div>
</div>

<script>
$(document).ready(function(){

  // generate input sesuai bentuk
  $('#shape').on('change', function(){
    var shape = $(this).val();
    var html = '';
    $('#result').text("");

    if (shape === 'persegi') {
      html = `
        <div>
          <label class="block text-sm font-semibold text-white">Sisi</label>
          <input type="number" name="sisi" placeholder="Masukkan sisi"
            class="mt-2 block w-full rounded-md bg-white/5 px-3.5 py-2 text-white outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
        </div>`;
    }

    if (shape === 'persegi-panjang') {
      html = `
        <div>
          <label class="block text-sm font-semibold text-white">Panjang</label>
          <input type="number" name="panjang" placeholder="Masukkan panjang"
            class="mt-2 block w-full rounded-md bg-white/5 px-3.5 py-2 text-white outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
        </div>
        <div>
          <label class="block text-sm font-semibold text-white">Lebar</label>
          <input type="number" name="lebar" placeholder="Masukkan lebar"
            class="mt-2 block w-full rounded-md bg-white/5 px-3.5 py-2 text-white outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
        </div>`;
    }

    if (shape === 'segitiga') {
      html = `
        <div>
          <label class="block text-sm font-semibold text-white">Alas</label>
          <input type="number" name="alas" placeholder="Masukkan alas"
            class="mt-2 block w-full rounded-md bg-white/5 px-3.5 py-2 text-white outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
        </div>
        <div>
          <label class="block text-sm font-semibold text-white">Tinggi</label>
          <input type="number" name="tinggi" placeholder="Masukkan tinggi"
            class="mt-2 block w-full rounded-md bg-white/5 px-3.5 py-2 text-white outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
        </div>`;
    }

    if (shape === 'lingkaran') {
      html = `
        <div>
          <label class="block text-sm font-semibold text-white">Jari-jari</label>
          <input type="number" name="jari" placeholder="Masukkan jari-jari"
            class="mt-2 block w-full rounded-md bg-white/5 px-3.5 py-2 text-white outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
        </div>`;
    }

    $('#inputs').html(html);
  });

  // hitung luas
  $('#calculatorForm').on('submit', function(e){
    e.preventDefault();
    var shape = $('#shape').val();
    var luas = 0;

    if (shape === 'persegi') {
      var sisi = parseFloat($('input[name="sisi"]').val());
      luas = sisi * sisi;
    }

    if (shape === 'persegi-panjang') {
      var panjang = parseFloat($('input[name="panjang"]').val());
      var lebar = parseFloat($('input[name="lebar"]').val());
      luas = panjang * lebar;
    }

    if (shape === 'segitiga') {
      var alas = parseFloat($('input[name="alas"]').val());
      var tinggi = parseFloat($('input[name="tinggi"]').val());
      luas = 0.5 * alas * tinggi;
    }

    if (shape === 'lingkaran') {
      var jari = parseFloat($('input[name="jari"]').val());
      luas = Math.PI * jari * jari;
    }

    $('#result').text('Luas: ' + luas + "cm²");
  });

  // hitung keliling
  $('#kelilingBtn').on('click', function(){
    var shape = $('#shape').val();
    var keliling = 0;

    if (shape === 'persegi') {
      var sisi = parseFloat($('input[name="sisi"]').val());
      keliling = 4 * sisi;
    }

    if (shape === 'persegi-panjang') {
      var panjang = parseFloat($('input[name="panjang"]').val());
      var lebar = parseFloat($('input[name="lebar"]').val());
      keliling = 2 * (panjang + lebar);
    }

    if (shape === 'segitiga') {
      var alas = parseFloat($('input[name="alas"]').val());
      var tinggi = parseFloat($('input[name="tinggi"]').val());
      var sisiMiring = Math.sqrt(alas * alas + tinggi * tinggi);
      keliling = alas + tinggi + sisiMiring;
    }

    if (shape === 'lingkaran') {
      var jari = parseFloat($('input[name="jari"]').val());
      keliling = 2 * Math.PI * jari;
    }

    $('#result').text('Keliling: ' + keliling + "cm²");
  });

});
</script>

</body>
</html>