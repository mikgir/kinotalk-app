@extends('layouts.admin.master')

@section('title','Админка')

@section('breadcrumb-title')
    <h3>Главная</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Главная</li>
    <li class="breadcrumb-item active">Главная страница</li>
@endsection

@section('content')
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Графики</h3>
                    </div>
                    <div class="table-responsive p-5">

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
