@extends('Superadmin.layout.index')
@section('content')
<div class="container">
<div class="jumbotron">
@if(session('msg'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
{{session('msg')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
@endif
<br><br><br><br><br>
<h1 class="display-6">Data PIC</h1>
<hr class="my-4">     
<a href="pic/create" class="btn btn-success mb-1">Tambah PIC</a>       
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">No</th>
<th scope="col">Nama</th>
<th scope="col">Jabatan</th>
<th scope="col">Anggota</th>
<th></th>
</tr>
</thead>
<tbody>
    <?php $no=1; ?>
@foreach ($pic as $pic)
<tr>
<td style="text-transform: capitalize; ">{{ $no++ }}</td>
<td style="text-transform: capitalize; ">{{ $pic->nama }}</td>
<td style="text-transform: capitalize; ">{{ $pic->jabatan }}</td>
<td style="text-transform: capitalize; "><a data-toggle="modal" data-target="#modal" href="{{ url('/superadmin/pic/rincian/'.$pic->id) }}" >
    <button class="badge btn-primary mb-1">Rincian</button></a></td>
<td>
<a href="{{ url('/superadmin/pic/edit/'.$pic->id) }}" ><button type="submit" class="badge btn-primary mb-1">Edit</button></a>  
<form method="post" action="{{ url('/superadmin/pic/hapus/'.$pic->id) }}"> 
    @csrf 
    {{ method_field('delete') }} 
    <button type="submit" class="badgehps badge btn-warning mb-1 " >Hapus</button> </form>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.badgehps').click(function(e){
              var result = confirm("Yakin Hapus?");
              if (result) {
                      
              }else{
                    e.preventDefault();
              }
        })
    })
</script>
</div>
@endsection