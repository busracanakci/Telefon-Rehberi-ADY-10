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
                                    <h4 class="title">Şehir Ekle</h4>
                                    <p class="category">Yeni Şehir Ekleyiniz.</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{route('admin.sehir.create.post')}}"  method="POST">
                                        {{csrf_field()}}
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Şehir Adı</label>
                                                    <input type="text" name="name" class="form-control">
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>   
                                        </div>

                                       
                                        
                                        <button type="submit" class="btn btn-primary pull-right">Şehir Ekle</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection