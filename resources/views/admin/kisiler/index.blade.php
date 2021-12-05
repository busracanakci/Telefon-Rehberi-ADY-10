@extends('layouts.admin')
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.5/css/scroller.dataTables.min.css">

@endsection
@section('content')
<!-- Rehber projesi özelinde kişi ekleme, güncelleme, silme ve listeleme işlemleri yapılacaktır. -->
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('admin.kisiler.create')}}" class="btn btn-info">KİŞİ EKLE</a>
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Telefon Rehberi</h4>
                                    <p class="category">Burada Telefon Rehberi Kişilerini Bulabilirsiniz.</p>
                                </div>
                                <div class="card-content table-responsive">
                               

<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>İsim</th>
                <th>Soyisim</th>
                <th>Telefon</th>
                <th>Mail</th>
                <th>Şehir</th>
                <th>Düzenle</th>
                <th>Sil</th>
            </tr>
        </thead>
        <tbody>
 @foreach($kisiler as $key => $kisi)

 <tr>
    <td>{{$kisi->name}}</td>
    <td>{{$kisi->surname}}</td>
    <td>{{$kisi->phone}}</td>
    <td>{{$kisi->email}}</td>
    @foreach($sehirler as $key2 => $sehir)
        @if($kisi->sehirid == $sehir->id)
            <td>{{$sehir->name}}</td>
        @endif
    @endforeach
    <td><a href=" {{ route('admin.kisiler.edit',['id'=>$kisi->id])   }}">Düzenle</a></td>
    <td><a href="{{ route('admin.kisiler.delete',['id'=>$kisi->id])   }}">Sil</a></td>
  </tr>
  @endforeach

</tbody>
        
    </table>
    
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection
@section('footer')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.0.5/js/dataTables.scroller.min.js"></script>


<script>




$(document).ready(function() {
    $('#example').DataTable( {
        deferRender:    true,
        scrollY:        300,
        scrollCollapse: true,
        scroller:       true
    } );
} );


</script>


@endsection