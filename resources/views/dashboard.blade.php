@extends('layouts.main')

@section('container')
<div id="total-sampah" class="p-4 sm:ml-64">
   <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
    <div class="mb-4">
        <h1 class="text-2xl text-blue-800 font-bold mb-3">Total Sampah</h1>
        <div class="flex w-100 gap-8 justify-center">
            <div class="basis-1/2 block max-w-sm p-6 bg-blue-600 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-100 dark:text-white">Total Sampah</h5>
                <h6 class="mb-2 text-3xl text-center font-bold tracking-tight text-gray-100 dark:text-white">512 KG</h6>
            </div>
            <div class="basis-1/2 block max-w-sm p-6 bg-blue-600 border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-100 dark:text-white">Total Poin</h5>
                <h6 class="mb-2 text-3xl text-center font-bold tracking-tight text-gray-100 dark:text-white">512.000 </h6>
            </div>
        </div>
      </div>
      <div class="mb-4">
        <h1 class="text-2xl text-blue-800 font-bold">Sampah Per Kategori</h1>
        <div class="flex justify-between">
            <h1 class="text-xl text-gray-500 font-bold">256 KG</h1>
            <h1 class="text-xl text-gray-500 font-bold">256.000</h1>
        </div>
        <div style="width: auto; margin: auto;">
            <canvas id="myChart"></canvas>
        </div>
      </div>
      <div class="mb-4">
        <h1 class="text-2xl text-blue-800 font-bold">Sampah Per Daerah</h1>
        <div class="flex justify-between">
            <h1 class="text-xl text-gray-500 font-bold">223 KG</h1>
            <h1 class="text-xl text-gray-500 font-bold">223.000</h1>
        </div>
        <div style="width: auto; margin: auto;">
            <canvas id="myChart2"></canvas>
        </div>
      </div>
      <div class="mb-4">
        <h1 class="text-2xl text-blue-800 font-bold">Sampah Per Dropbox</h1>
        <div class="flex justify-between">
            <h1 class="text-xl text-gray-500 font-bold">134 KG</h1>
            <h1 class="text-xl text-gray-500 font-bold">134.000</h1>
        </div>
        <div style="width: auto; margin: auto;">
            <canvas id="myChart3"></canvas>
        </div>
      </div>
      <div id="top-10" class="mb-4">
        <h1 class="text-2xl text-blue-800 font-bold">10 Kurir Terbaik</h1>
        <div class="flex justify-between">
            <h1 class="text-xl text-gray-500 font-bold">213 KG</h1>
            <h1 class="text-xl text-gray-500 font-bold">213.000</h1>
        </div>
        <div style="width: auto; margin: auto;">
            <canvas id="myChart4"></canvas>
        </div>
      </div>
      <div class="mb-4">
        <h1 class="text-2xl text-blue-800 font-bold">10 Masyarakat Terbaik</h1>
        <div class="flex justify-between">
            <h1 class="text-xl text-gray-500 font-bold">312 KG</h1>
            <h1 class="text-xl text-gray-500 font-bold">312.000</h1>
        </div>
        <div style="width: auto; margin: auto;">
            <canvas id="myChart5"></canvas>
        </div>
      </div>
      <div class="mb-4">
        <h1 class="text-2xl text-blue-800 font-bold">10 Jenis Sampah Terbaik</h1>
        <div class="flex justify-between">
            <h1 class="text-xl text-gray-500 font-bold">332 KG</h1>
            <h1 class="text-xl text-gray-500 font-bold">332.000</h1>
        </div>
        <div style="width: auto; margin: auto;">
            <canvas id="myChart6"></canvas>
        </div>
      </div>
      <div id="history" class="mb-4">
        <h1 class="text-2xl text-blue-800 font-bold">History Penjemputan</h1>
        <div class="relative overflow-x-auto">
            <table class="w-full text-center border-2 text-sm rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-100 uppercase bg-blue-500 dark:bg-gray-100 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jenis Sampah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Berat (KG)
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Puput Agustina
                        </th>
                        <td class="px-6 py-4">
                            Baterai
                        </td>
                        <td class="px-6 py-4">
                            1.5
                        </td>
                        <td class="px-6 py-4">
                            23 Desember 2023
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Malika Padmasari
                        </th>
                        <td class="px-6 py-4">
                            Bohlam
                        </td>
                        <td class="px-6 py-4">
                            0.8
                        </td>
                        <td class="px-6 py-4">
                            23 Desember 2023
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Gamanto Pradipta
                        </th>
                        <td class="px-6 py-4">
                            Bohlam
                        </td>
                        <td class="px-6 py-4">
                            0.2
                        </td>
                        <td class="px-6 py-4">
                            22 Desember 2023
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Salsabila Wulandari
                        </th>
                        <td class="px-6 py-4">
                            Baterai
                        </td>
                        <td class="px-6 py-4">
                            0.3
                        </td>
                        <td class="px-6 py-4">
                            22 Desember 2023
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Zalindra Usada
                        </th>
                        <td class="px-6 py-4">
                            Ponsel
                        </td>
                        <td class="px-6 py-4">
                            0.5
                        </td>
                        <td class="px-6 py-4">
                            22 Desember 2023
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Kasusra Wasita
                        </th>
                        <td class="px-6 py-4">
                            Komputer
                        </td>
                        <td class="px-6 py-4">
                            1.2
                        </td>
                        <td class="px-6 py-4">
                            20 Desember 2023
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Harsaya Rajasa
                        </th>
                        <td class="px-6 py-4">
                            Kabel
                        </td>
                        <td class="px-6 py-4">
                            0.8
                        </td>
                        <td class="px-6 py-4">
                            19 Desember 2023
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Darijan Pratama
                        </th>
                        <td class="px-6 py-4">
                            Stopkontak
                        </td>
                        <td class="px-6 py-4">
                            0.1
                        </td>
                        <td class="px-6 py-4">
                            19 Desember 2023
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Luluh Gunarto
                        </th>
                        <td class="px-6 py-4">
                            Baterai
                        </td>
                        <td class="px-6 py-4">
                            0.5
                        </td>
                        <td class="px-6 py-4">
                            18 Desember 2023
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Farhunnisa Fujiati
                        </th>
                        <td class="px-6 py-4">
                            Ponsel
                        </td>
                        <td class="px-6 py-4">
                            0.3
                        </td>
                        <td class="px-6 py-4">
                            15 Desember 2023
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
      </div>
   </div>
</div>
@endsection