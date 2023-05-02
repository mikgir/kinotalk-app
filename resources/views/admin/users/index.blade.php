@extends('layouts.admin.master')

@section('breadcrumb-title')
    <h3>Таблица пользователей</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Пользователи</li>
    <li class="breadcrumb-item active">Таблица пользователей</li>
@endsection

@section('content')
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>СПИСОК ПОЛЬЗОВАТЕЛЕЙ</h3>
                    </div>
                    <div class="table-responsive p-5">
                        <livewire:admin.users.user-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
