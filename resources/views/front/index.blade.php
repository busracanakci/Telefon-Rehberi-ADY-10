@extends('layouts.app')
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection
@section('content')

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title"><a target="_blank" href="https://www.positive.com.tr/" >Positive A Digital Approach </a></h4>
                                    <p class="category">ADY-10 | Telefon Rehberi</p>
                                </div>

                                <div class="card-content table-responsive">
                                    <table id="example" class="display" style="width:100%">
                                                <thead>
                                                        <tr>
                                                                <th>İsim</th>
                                                                <th>Soyisim</th>
                                                                <th>Telefon</th>
                                                                <th>Detay</th>
                                                               
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($kisiler as $key => $kisi)

                                                <tr>
                                                    <td>{{$kisi->name}}</td>
                                                    <td>{{$kisi->surname}}</td>
                                                    <td>{{$kisi->phone}}</td>
                                                    <td><a href=" {{ route('front.getdata',['id'=>$kisi->id])   }}">Detay</a></td>
                                                    
                                                </tr>
                                                @endforeach

                                                </tbody>
                                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                


</div>

@endsection
@section('footer')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


<script>

$(document).ready(function(){
   $('#example').DataTable();
});


</script>


@endsection