@extends('layouts.admin')
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <a href="{{route('admin.sehir.create')}}" class="btn btn-info">ŞEHİR EKLE</a>
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Telefon Rehberi</h4>
                                    <p class="category">Burada Şehirleri Bulabilirsiniz</p>
                                </div>
                                <div class="card-content table-responsive">
                                  
                          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>İsim</th>
                <th>Düzenle</th>
                <th>Sil</th>
                
            </tr>
        </thead>
        
    </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection
@section('footer')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $('#example').DataTable( {
        lengthMenu: [[25, 100, -1],[25, 100, "All"]],
        processing: true,
        seerverSide: true,
        ajax: {
            type:"POST",
            headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
            url: '{{route('admin.sehir.getData')}}',
        },
        columns: [
            {data: 'name', name: 'name'},
            {data: 'edit', name: 'edit',  orderable: false,searchable: false},
            {data: 'delete', name: 'edit', orderable: false,searchable: false},


        ]
    });


</script>
@endsection