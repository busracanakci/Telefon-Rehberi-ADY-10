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
                                    <h4 class="title">Şehir Düzenle</h4>
                                    <p class="category">{{$data[0]['name']}}</p>
                                </div>
                                <div class="card-content">
                                    <form action="{{route('admin.sehir.edit.post',['id'=>$data[0]['id']])}}"  method="POST">
                                        {{csrf_field()}}
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating is-empty">
                                                    
                                                    <input type="text" name="name" value="{{$data[0]['name']}}" class="form-control">
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary pull-right">Şehir Düzenle</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
@endsection