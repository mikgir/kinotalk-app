@extends('layouts.admin.master')

@section('breadcrumb-title')
    <h3>Категории</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Категории</li>
    <li class="breadcrumb-item active">Таблица категорий</li>
@endsection

@section('content')
    <div class="container-fluid basic_table">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>СПИСОК КАТЕГОРИЙ</h3>
                        {{--                    <div>--}}
                        {{--                        <a href="{{ route('admin.news.categories.create') }}" class="btn btn-outline-primary"> Добавить категорию</a>--}}
                        {{--                    </div>--}}

                    </div>
                    <div class="table-responsive p-5">
                        <livewire:admin.category.category-table/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
