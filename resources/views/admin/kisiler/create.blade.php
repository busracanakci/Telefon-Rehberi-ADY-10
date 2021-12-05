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
                                    <h4 class="title">Kişi Ekle</h4>
                                    <p class="category">Telefon Rehberine Yeni Kişi Ekleyiniz.</p>
                                </div>
                                <div class="card-content">
                                    <form enctype="multipart/form-data" action="{{route('admin.kisiler.create.post')}}"  method="POST">
                                        {{csrf_field()}}
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Kişi Adı</label>
                                                    <input type="text"class="form-control @error('name') is-invalid @enderror" name="name" >
                                                    @error('name')
                                                    <span class="invalid-feedback" >
                                                      <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Kişi Soyadı</label>
                                                    <input type="text" name="surname" class="form-control">
                                                    @error('surname')
                                                    <span class="invalid-feedback" >
                                                      <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Kişi Numarası (Başına "0" yazarak 11 haneli numaranızı giriniz.)</label>
                                                    <input type="text" name="phone" class="form-control">
                                                    @error('phone')
                                                    <span class="invalid-feedback" >
                                                      <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Kişi Maili</label>
                                                    <input type="text" name="email" class="form-control">
                                                    @error('email')
                                                    <span class="invalid-feedback" >
                                                      <strong>{{ $message }}</strong>
                                                     </span>
                                                     @enderror
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label">Kişi Şehri</label>
                                                    <select name="sehirid" class="form-control" id="">
                                                        @foreach($sehir as $key => $value)
                                                        <option value="{{$value['id']}}">{{$value['name']}}</option>
                                                        
                                                        
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>   
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-right">Rehbere Ekle</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection