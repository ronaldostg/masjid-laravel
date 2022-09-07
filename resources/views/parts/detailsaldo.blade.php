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
    <section class="w-full max-w-[22rem] lg:max-w-screen-xl mx-auto my-6">
        <div class="p-6">
            <div class="w-full h-72 rounded-[18px] banner  shadow-md">
                <img class="w-full h-72 object-cover rounded-[18px]" src={detail_masjid ? detail_masjid.banner : ''} alt="banner1" />
                {{-- <div onClick={() => {
                    localStorage.setItem('detail_masjid', '');
                    router.push('/saldo');
                }} class="absolute top-0 ml-4 mt-4 click-back" style={{ zIndex: '2' }}>
                    <div class="cursor-pointer h-10 w-10 bg-white rounded-full flex justify-center items-center">
                        <span class="font-bold text-xl"> {'<'} </span>
                    </div>
                </div>
                <div class="absolute bottom-0 ml-4 mb-4" style={{ zIndex: '2' }}>
                    <h3 class="text-white font-semibold text-xl">{detail_masjid ? detail_masjid.nama : 'Loading...'}</h3>
                    <p class="text-xs text-white">{detail_masjid ? detail_masjid.alamat : ''} | {detail_masjid ? detail_masjid.nohp : ''} | {detail_masjid ? detail_masjid.email : ''}</p>
                </div> --}}
            </div>
        </div>
    </section>

    {{-- Body  --}}

    <section class="w-full max-w-[22rem] lg:max-w-screen-xl mx-auto my-2">
        <div class="p-6 bg-white">
            <div class="flex flex-col space-y-4 lg:flex-row lg:justify-between">
            <div>
         
                <h3 class="text-center lg:text-left text-2xl lg:text-3xl font-medium"> sASLO TAHUN</h3>
         
            </div>
                <div class="flex space-x-4">
                    <button type="button" class= "py-1 px-4 text-md text-white font-medium bg-blue-600 rounded-full">Tahunan</button>
                    <button type="button" class="py-1 px-4 text-md text-white font-medium bg-blue-600 rounded-full">Bulanan</button>
                    <button type="button" class="py-1 px-4 text-md text-white font-medium bg-blue-600 rounded-full">Mingguan</button>

                </div>
            </div>
           
            <div class="w-full mt-4">

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                    
                            <div class="p-6 bg-white bg-green-500 rounded-lg">
                                <div class="flex space-x-4">
                                    <div class="w-[48px]">
                                        <div class="w-[48px] h-[48px] flex justify-center items-center bg-emerald-300 flex rounded-lg opacity-0.5" >
                                            <div class="w-[36px] h-[36px]">
                                                <img class="w-[36px]h-[36px] object-cover" src="https://cdn-icons-png.flaticon.com/128/1611/1611179.png" alt="icon"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flext flex-1 justify-center items-center">
                                        <h3 class="font-medium text-white text-lg">Saldo masuk</h3>
                                        <p class="text-white">Rp. 20000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 bg-white bg-yellow-500 rounded-lg">
                                <div class="flex space-x-4">
                                    <div class="w-[48px]">
                                        <div class="w-[48px] h-[48px] flex justify-center items-center bg-emerald-300 flex rounded-lg opacity-0.5" >
                                            <div class="w-[36px] h-[36px]">
                                                <img class="w-[36px]h-[36px] object-cover" src="https://cdn-icons-png.flaticon.com/128/1611/1611179.png" alt="icon"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flext flex-1 justify-center items-center">
                                        <h3 class="font-medium text-white text-lg">Saldo masuk</h3>
                                        <p class="text-white">Rp. 20000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6 bg-white bg-green-600 rounded-lg">
                                <div class="flex space-x-4">
                                    <div class="w-[48px]">
                                        <div class="w-[48px] h-[48px] flex justify-center items-center bg-emerald-300 flex rounded-lg opacity-0.5" >
                                            <div class="w-[36px] h-[36px]">
                                                <img class="w-[36px]h-[36px] object-cover" src="https://cdn-icons-png.flaticon.com/128/1611/1611179.png" alt="icon"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flext flex-1 justify-center items-center">
                                        <h3 class="font-medium text-white text-lg">Saldo masuk</h3>
                                        <p class="text-white">Rp. 20000</p>
                                    </div>
                                </div>
                            </div>
              

                </div>

            </div>
        

            <div class="my-8">
                <div class="flex flex-col lg:flex-row lg:justify-between items-center">
                    <div class="flex-1">
                        <h3 class="text-2xl lg:text-3xl font-medium">Rincian Saldo</h3>
                    </div>
                    {{-- <div class="w-1/2 flex justify-end mt-2 lg:mt-0">
                        {
                            filter === 'tahunan' ?
                                <div class="w-48">

                                    <select onChange={(e) => {

                                        filterByTahun(e.target.value);


                                    }} id="selectTahun" class="w-full py-2 px-3 bg-white border border-gray-400 focus:outline-none focus:border-blue-600 rounded">
                                        <option value="">Pilih tahun</option>
                                        {parse(`${filterTahun()}`)}
                                    </select>


                                </div>
                                :
                                filter === 'bulanan' ?
                                    <div class="w-full flex justify-end">

                                        <div class="flex space-x-4 w-full">

                                            <div class="w-1/2">
                                                <select onChange={(e) => {

                                                    setBulanFilterValue(e.target.value)
                                                    setSelectTahunInFilterBulanTahun(true);


                                                }} class="w-full py-2 px-3 bg-white border border-gray-400 focus:outline-none focus:border-blue-600 rounded">
                                                    <option value="">Pilih bulan</option>
                                                    {parse(`${filterBulan()}`)}
                                                </select>
                                            </div>

                                            <div class="w-1/2">

                                                <select onChange={(e) => {

                                                    filterByBulanTahun(e.target.value);



                                                }} class="w-full py-2 px-3 bg-white border border-gray-400 focus:outline-none focus:border-blue-600 rounded">
                                                <option value="">Pilih tahun</option>
                                                {parse(`${filterTahun()}`)}
                                                </select>

                                            </div>

                                        </div>

                                    </div>
                                    :
                                    <div class="w-full flex justify-end">

                                        <div class="flex space-x-4 w-full">

                                            <div class="w-1/2">
                                                <div class="flex flex-col">
                                                    <label>Tanggal Mulai</label>
                                                    <input onChange={(e) => {

                                                        e.preventDefault();
                                                        setTanggalMulai(e.target.value);
                                                        setInputTanggalAkhir(true);

                                                    }} type={"date"} class="w-full py-2 px-3 bg-white border border-gray-400 focus:outline-none focus:border-blue-600 rounded" />
                                                </div>
                                            </div>

                                            <div class="w-1/2">
                                                <div class="flex flex-col">
                                                    <label>Tanggal Akhir</label>

                                                    {
                                                        inputTanggalAkhir ?
                                                        <input onChange={(e) => {
                                                            e.preventDefault();
                                                            filterMingguan(e.target.value);
                                                        }} type={"date"} class="w-full py-2 px-3 bg-white border border-gray-400 focus:outline-none focus:border-blue-600 rounded" />
                                                        :
                                                        <input disabled type={"date"} class="w-full bg-gray-300 py-2 px-3 bg-white border border-gray-400 focus:outline-none focus:border-blue-600 rounded" />
                                                    }
                                                  
                                                </div>  
                                            </div>
                                        </div>

                                    </div>
                        }
                    </div> --}}
                </div>



                        <div class="max-w-full overflow-x-auto mt-2">


                            <table class="table-auto w-full">
                                <thead>
                                    <tr class="bg-blue-600 text-center">

                                        <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-2 px-2 border-l border-transparent"
                                            >bULA
                                        </th>
                                        <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-2 px-2 border-l border-transparent"
                                        >
                                            Saldo Masuk
                                        </th>
                                        <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-2 px-2 border-l border-transparent"
                                        >
                                            Saldo Keluar
                                        </th>
                                        <th class="w-1/6 min-w-[160px] text-lg font-semibold text-white py-2 px-2 border-l border-transparent"
                                        >
                                            Saldo Akhir
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                            <tr>

                                                <td
                                                    class="text-center text-dark font-medium text-base py-2 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]"
                                                >
                                                   ANU</td>
                                                <td
                                                    class="text-right text-dark font-medium text-base py-2 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]"
                                                >
                                                    Rp. {formatValue(item.saldo_masuk)}
                                                </td>
                                                <td
                                                    class="text-right text-dark font-medium text-base py-2 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]"
                                                >
                                                    Rp. {formatValue(item.saldo_keluar)}
                                                </td>
                                                <td
                                                    class="text-right text-dark font-medium text-base py-2 px-2 bg-[#F3F6FF] border-b border-l border-[#E8E8E8]"
                                                >
                                                    Rp. {formatValue(item.saldo_akhir)}
                                                </td>
                                            </tr>

                                </tbody>

                            </table>
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
