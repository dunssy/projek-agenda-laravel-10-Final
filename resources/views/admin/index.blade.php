@extends('layout.sidebar')
@section('main')
<div class="col-lg-6 mb-3">
<div class="card" style="border-radius:10px;">
    <div class="card-header">
        <strong class="card-title"><span class="fa fa-user-md"></span> Guru User</strong>
    </div>
    <div class="card-body">
    </div>
</div>
</div>

<div class="col-lg-6">
<div class="card" style="border-radius:10px;">
    <div class="card-header">
        <strong class="card-title"><span class="fa fa-user-md"></span> Admin User</strong>

    </div>
    <div class="card-body">
      <a href="?page=t_admin" title="" class="btn btn-info pull-right"> <span class="fa fa-plus"></span> Add Admin </a>
      <br>
      <br>
        <table class="table table-condensed table-hover table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th> 
              <th scope="col">Username</th> 
              <th>Password</th>            
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $guru)    
            <tr>
              <th scope="row"></th>
              <td>{{$data->nip}}</td>  
              <td>{{$data->nama}}</td>  
              <td>{{$data->email}}</td> 
              <td>
                <a href="" class="btn btn-warning"> <span class="fa fa-edit"></span></a>               
                <a href="" onclick="return confirm('Yakin !! Ingin Hapus Data !!')" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
              </td>
            </tr>  
            @endforeach
          </tbody>
        </table>
        <hr>
        <p>
          <strong class="card-title"><span class="fa fa-user-md"></span> Kepala Sekolah User</strong>
           <a href="?page=t_kepsek" title="" class="btn btn-primary pull-right"> <span class="fa fa-plus"></span> Add Kepsek </a>
        </p>
        <hr>
        <table class="table table-dark table-hover table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th> 
              <th scope="col">Username</th> 
              <th>Password</th>            
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td></td>  
              <td></td>  
              <td></td> 
              <td>
            <!--     <a href="?page=e_tajaran&idt=" class="btn btn-warning"> <span class="fa fa-edit"></span></a> -->
               
                <a href="" onclick="return confirm('Yakin !! Ingin Hapus Data !!')" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
              </td>
            </tr>
         
            
          </tbody>
        </table> 
 
    </div>
</div>
</div>
@endsection