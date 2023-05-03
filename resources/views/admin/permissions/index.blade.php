@extends('layouts.admin.master')

@section('breadcrumb-title')
    <h3>Таблица разрешений</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Разрешения</li>
    <li class="breadcrumb-item active">Таблица разрешений</li>
@endsection

@section('content')
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>СПИСОК РАЗРЕШЕНИЙ</h3>
                    </div>
                    <div class="table-responsive p-5">
                        <livewire:admin.permission.permission-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
