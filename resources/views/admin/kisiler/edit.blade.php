@extends('layouts.admin')
@section('content')
<div class="content">



                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            @if(session("status"))
                            <div class="alert alert-primary" role="alert">
                                {{session("status")}}
                            </div>


                            @endif

                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Kişi Düzenle</h4>
                                    <p class="category">{{$data['name']}} {{$data['surname']}}</p>

                                </div>
                                <div class="card-content">
                                    <form enctype="multipart/form-data" action="{{route('admin.kisiler.create.post')}}"  method="POST">
                                        {{csrf_field()}}
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kişi Adı</label>
                                                    <input type="text" name="name" class="form-control" value="{{$data['name']}}">
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kişi Soyadı</label>
                                                    <input type="text" name="surname" class="form-control" value="{{$data['surname']}}">
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kişi Numarası</label>
                                                    <input type="text" name="phone" class="form-control" value="{{$data['phone']}}">
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kişi Maili</label>
                                                    <input type="text" name="email" class="form-control" value="{{$data['email']}}">
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Kişi Şehri</label>
                                                    <select name="sehirid" class="form-control" id="">
                                                        @foreach($sehir as $key => $value)
                                                        <option value="{{$value['id']}}">{{$value['name']}}</option>

                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>   
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-right">Düzenle</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection