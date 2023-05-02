@extends('layouts.admin.master')

@section('breadcrumb-title')
    <h3>Таблица комментариев</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Комментарии</li>
    <li class="breadcrumb-item active">Таблица комментариев</li>
@endsection

@section('content')
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>СПИСОК КОММЕНТАРИЕВ</h3>
                    </div>
                    <div class="table-responsive p-5">
                        <livewire:admin.comment.comment-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
