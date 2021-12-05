@extends('layouts.app')
@section('header')
@section('content')
<div class="content">



                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                           

                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Kişi Detay</h4>
                                    <p class="category">{{$data['name']}} {{$data['surname']}}</p>

                                </div>
                                <div class="card-content">
                                    <form enctype="multipart/form-data" action="{{route('admin.kisiler.create.post')}}"  method="POST">
                                        {{csrf_field()}}
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kişi Adı</label>
                                                    <input type="text" name="name" class="form-control" value="{{$data['name']}}" readonly>
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kişi Soyadı</label>
                                                    <input type="text" name="surname" class="form-control" value="{{$data['surname']}}" readonly> 
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kişi Numarası</label>
                                                    <input type="text" name="phone" class="form-control" value="{{$data['phone']}}" readonly>
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kişi Maili</label>
                                                    <input type="text" name="email" class="form-control" value="{{$data['email']}}"  readonly>
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">

                                            <div class="form-group label-floating">
                                                    <label class="control-label">Kişi Şehiri</label>
                                                    @foreach($sehir as $key => $value)
                                                        @if($value['id']== $data['sehirid'] )
                                                    <input type="text" name="email" class="form-control" value="{{$value['name']}}"  readonly>
                                                        @endif
                                                    @endforeach

                                                    <span class="material-input"></span>
                                                </div>

                                            </div>   
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection