
<!DOCTYPE html>
<html>
<head>
	<title>Laporan Agenda Harian Guru Kelas {{$mapel->kelas->kelas}} - {{$mapel->jurusan->jurusan}} </title>
	<style>
	body{
		font-family: "Arial Narrow", Arial, sans-serif;
		
	
	}
	</style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<table width="100%" height="100%" style="border: 2px dashed;">
  <tr>
    <h2><p align="center">LAPORAN KEGIATAN HARIAN</p></h2> 
   
     {{-- TAhun ajaran --}}
    <hr style="border: 2px;">
    <br>
  {{-- Ini Gmapel  --}}
    <table width="200" align="center">
      <tr>
        <td><span class="style2">NAMA</span></td>
        <td><span class="style2">:</span></td>
        <td><span class="style2">{{Auth::user()->name}}</span></td>
      </tr>
      <tr>
        <td><span class="style2">NIP/NUPTK</span></td>
        <td><span class="style2">:</span></td>
        <td><span class="style2">{{Auth::user()->nip}}</span></td>
      </tr>
    </table>
       <br>
    <br>
  
    <center><p><h2>SMK NEGERI COMPRENG</h2></p></center>
    <p align="center" class="style1">Jl. Raya Compreng, Mekarjaya, Kec. Compreng, Kab. Subang Prov. Jawa Barat</p>
    <p align="center" class="style1"> Email : office@smkncompreng.sch.id</p>
    <p align="center" class="style1">&nbsp; </p>
    <p align="center" class="style1">&nbsp;</p></td>
  </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	 <table>
	 		<tr>
	 			<td>Guru Mata Pelajaran</td>
	 			<td>:</td>
	 			<td>{{Auth::user()->name}}</td>
	 		</tr>
	 		<tr>
	 			<td>Mata Pelajaran</td>
	 			<td>:</td>
	 			<td> {{$mapel->mapel->mapel}} </td>
	 		</tr>
	 		<tr>
	 			<td>Kelas</td>
	 			<td>:</td>
	 			<td>{{$mapel->kelas->kelas}}</td>
	 		</tr>
       <tr>
	 			<td>Jurusan</td>
	 			<td>:</td>
	 			<td>{{$mapel->jurusan->jurusan}}</td>
	 		</tr>
	 		<tr>
	 			<td>Dicetak Pada Tanggal</td>
	 			<td>:</td>
	 			<td>@php
                    echo date('d F Y');
                @endphp</td>
	 		</tr>
	 
	 </table>
	 <hr>
   {{-- End Gmapel --}}
	<table border="2" width="100%" cellspacing="0" cellpadding="4" style="border-collapse: collapse;">
   
                    <tr height="40">
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Materi</th>
                        <th>Absen</th>
                        <th>Keterangan</th>                 
                     </tr>
                     @php
                     $no=1;
                 @endphp    
                     @foreach($agenda as $item) 
                    <tr>
                      <td align="center"><?=$no++; ?></td>
                      <td align="">{{$item->tgl}}</td>
                      <td>{{$item->materi}}</td>
                      <td>{{$item->absen}}</td>
                      <td>{{$item->keterangan}}</td>
                    </tr>
                    @endforeach
 {{-- Agenda --}}
    </table>       
                     
 {{-- End --}}
     <table width="100%">
      <!--  <a href="#" class="no-print" onclick="window.print();"> <button style="height: 40px; width: 70px; background-color: dodgerblue;border:none; color: white; border-radius:7px;font-size: 17px; " type=""> Cetak</button> </a> -->
        <tr>
          <td align="right" colspan="6" rowspan="" headers="">
            <p>@php
                echo date('d F Y');
            @endphp<br> <br>
            Kepala Sekolah </p> <br> <br>
            <p> Dafik Al-Farizi <br>NIP.000001</p>
          </td>
        </tr>
      </table>
@php    
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
@endphp



</body>
</html>