<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
 
  {{-- <link rel="{{ url() }}/globals.css"> --}}
  <link rel="stylesheet" href="{{ url('') }}/globals.css">
  <title>Komunitas Masjid Bank Sumut</title>

    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>


  <!-- Google Font: Source Sans Pro -->
 
</head>
<body class="bg-gray-50">

    {{-- Header  --}}
    <section class="w-full max-w-[22rem] lg:max-w-screen-xl mx-auto my-6 shadow-md border border-gray-300">
        <div class="flex space-x-4">
            <div class="flex-1 bg-white shadow border-gray-200 rounded-lg p-10">
        
                    <div class="flex flex-col lg:flex-row items-center lg:justify-end mb-1"> 
                        <p class="text-sm text-gray-400">sudah <span class="text-green-600 font-medium">{{ $jumlah_masjid }}</span> masjid yang telah <a href="https://www.banksumut.co.id" class="text-blue-600">bergabung</a></p>
                    </div>
               

                        {{-- <div class="flex flex-col lg:flex-row items-center lg:justify-between mb-1">
                            <a href="/" class="text-blue-900 font-semibold">Beranda</a>
                            <p class="text-sm text-gray-400">sudah <span class="text-green-600 font-medium">{jumlahmasjid}</span> masjid yang telah <a href="https://www.banksumut.co.id" class="text-blue-600">bergabung</a></p>
                        </div> --}}
                    
               
                <div class="h-72 mt-6 rounded-lg relative banner">
                    <img class="w-full h-72 object-cover rounded-[18px]" src="https://1.bp.blogspot.com/-fagprIV3V74/YFi4T2RaL2I/AAAAAAAALJo/RwEJQgh4hYAuZfDq7VENvwxjGpqg0E7KgCLcBGAsYHQ/s3015/Masjid%2BRaya%2Bal-Mashun%2BSebagai%2BMasjid%2BRaya%2BMedan%2BYang%2BMegah%2B%25281%2529.jpg" alt="banner1" />
                    <div class="absolute bottom-0" style="zIndex: 2">
                        <p class="text-white ml-4 text-xs"> 'Selamat datang di,</p>
                        <h1 class="text-xl lg:text-2xl font-medium text-white ml-4 mb-4 mt-0">Komunitas Masjid Bank Sumut</h1>
                    </div>
                </div>
                <div class="mt-8">
                    <h3 class="uppercase text-2xl lg:text-3xl font-bold">#kejar kebaikan</h3>
                    <div class="w-4/5">
                        <p class="text-sm lg:text-md mt-2 text-gray-600">Isi harimu dengan kegiatan yang baik dan bermanfaat. lihat semua kegiatan masjid disini. Atau <a href="https://www.banksumut.co.id" class="text-blue-600">gabung</a> bersama kami untuk menyebarkan kegiatan kebaikan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Body  --}}
    <section class="w-full max-w-[22rem] lg:max-w-screen-xl mx-auto my-6">
        <div class="p-10">
          <h3 class="uppercase text-2xl lg:text-3xl font-bold">Aktivitas</h3>
          <p class="uppercase text-xs mt-1 text-gray-600">#kejar kebaikan</p>
          <div class="w-full mt-4">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
              <a href="/saldo">
                <div class="h-40 shadow rounded-lg aktivitas-container">
                  <img class="w-full h-40 object-cover rounded-lg" src="https://masjidpedesaan.or.id/wp-content/uploads/2021/02/sedekah-di-bulan-ramadhan.jpg" alt="Aktivitas 1" />

                  <div class="absolute bottom-0 ml-4 mb-4" style="zIndex: 2">
                    <h3 class="text-white font-semibold text-xl">Saldo</h3>
                    <p class="text-xs text-white">Lihat Rincian Saldo Komunitas Masjid Bank Sumut</p>
                  </div>
                </div>
              </a>

              <a href="/kegiatan-masjid">
                <div class="h-40 shadow rounded-lg aktivitas-container">
                  <img class="w-full h-40 object-cover rounded-lg" src="https://www.masjidalakbar.or.id/wp-content/uploads/2018/01/WhatsApp-Image-2018-01-07-at-12.58.13.jpeg" alt="Aktivitas 1" />

                  <div class="absolute bottom-0 ml-4 mb-4" style="zIndex: 2">
                    <h3 class="text-white font-semibold text-xl">Kegiatan</h3>
                    <p class="text-xs text-white">Lihat Agenda Kegiatan Komunitas Masjid Bank Sumut</p>
                  </div>
                </div>
              </a>

              <a href="https://mesjidadmin.unibroomindonesia.com/login">
                <div class="h-40 shadow rounded-lg aktivitas-container">
                  <img class="w-full h-40 object-cover rounded-lg" src="https://static.republika.co.id/uploads/images/inpicture_slide/bagian-dalam-masjid-raya-kuwait-_170110165731-609.jpg" alt="Aktivitas 1" />

                  <div class="absolute bottom-0 ml-4 mb-4" style="zIndex: 2">
                    <h3 class="text-white font-semibold text-xl">BKM Masjid</h3>
                    <p class="text-xs text-white">Akses khusus untuk BKM Komunitas Masjid Bank Sumut</p>
                  </div>
                </div>
              </a>
            </div>

          </div>
        </div>
      </section>

    {{-- Footer  --}}
    <section class="my-10">
        <p class="text-center text-sm text-gray-800">&copy; Komunitas Masjid Bank Sumut. All reserved Right.</p>
    </section>


</body>

 
</html>
