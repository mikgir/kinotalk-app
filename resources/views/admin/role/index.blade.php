@extends('layouts.admin.master')

@section('breadcrumb-title')
    <h3>Таблица ролей</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Роли</li>
    <li class="breadcrumb-item active">Таблица ролей</li>
@endsection

@section('content')
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>СПИСОК РОЛЕЙ</h3>
                    </div>
                    <div class="table-responsive p-5">
                        <livewire:admin.role.role-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
