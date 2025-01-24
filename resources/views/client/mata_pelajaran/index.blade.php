@extends('layout.navbar')
@section('main')    
<main class="pt-10 px-8 mb-3">
 <div class="card-title mb-5">
  <h6 class="text-4xl font-bold dark:text-white">Mata Pelajaran</h6>
  <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
 </div>
  
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 pt-3 px-4"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-700">Tambah Mapel</button>
          <thead class="border">
            <tr class="">
              <th scope="col" class="px-6 py-3">
                  No
              </th>
              <th scope="col" class="px-6 py-3">
                  Mapel
              </th>
              <th scope="col" class="px-6 py-3">
                  Kelas
              </th>
              <th scope="col" class="px-6 py-3">
                  Jurusan
              </th>
              <th scope="col" class="px-6 py-3">
                  opsi
              </th>
          </tr>
      </thead>
      <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Apple MacBook Pro 17"
              </th>
              <td class="px-6 py-4">
                  Silver
              </td>
              <td class="px-6 py-4">
                  Laptop
              </td>
              <td class="px-6 py-4">
                  $2999
              </td>
              <td class="px-6 py-4 text-right">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Microsoft Surface Pro
              </th>
              <td class="px-6 py-4">
                  White
              </td>
              <td class="px-6 py-4">
                  Laptop PC
              </td>
              <td class="px-6 py-4">
                  $1999
              </td>
              <td class="px-6 py-4 text-right">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
          <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  Magic Mouse 2
              </th>
              <td class="px-6 py-4">
                  Black
              </td>
              <td class="px-6 py-4">
                  Accessories
              </td>
              <td class="px-6 py-4">
                  $99
              </td>
              <td class="px-6 py-4 text-right">
                  <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
              </td>
          </tr>
      </tbody>
  </table>
</div>

</main>

  {{-- <div class="d-flex justify-content-between align-items-center mb-3">
    <a href="/agenda/guru" class="btn btn-warning mb-3">Kembali</a>
    <a href="/agenda/mapel/create" class="btn btn-primary">Tambah Mata Pelajaran</a>
  </div>
  <div class="card">
    <div class="card-header">
      <!-- Header -->
        <h3 class="card-title">Mata Pelajaran</h3>
      <!-- Back Button -->
     
    </div>
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Mata Pelajaran</th>
            <th>Tingkat</th>
            <th>Jurusan</th>
            <th>Opsi</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($data as $item)
          <tr>
           <td>{{$loop->iteration}}</td>
           <td>{{$item->mapel->mapel}}</td>
           <td>{{$item->kelas->kelas}}</td>
           <td>{{$item->jurusan->jurusan}}</td>
            <td>
              <a href="{{url('agenda/mapel/'.$item->id.'/edit')}}" class="btn btn-warning btn-sm">edit</a>
              <form onsubmit="return confirm('Yakin hapus Data ')" class="d-inline" action="{{ url('agenda/mapel/' . $item->id)}}" method="POST">@csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  

    <!-- Table -->
   --}}
</div>
@endsection