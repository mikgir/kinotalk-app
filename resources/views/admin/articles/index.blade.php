@extends('layouts.admin.master')

@section('breadcrumb-title')
    <h3>Таблица статей</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Статьи</li>
    <li class="breadcrumb-item active">Таблица статей</li>
@endsection

@section('content')
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>СПИСОК СТАТЕЙ</h3>
                    {{--                    <div>--}}
                    {{--                        <a href="{{ route('admin.news.categories.create') }}" class="btn btn-outline-primary"> Добавить категорию</a>--}}
                    {{--                    </div>--}}

                </div>
                <div class="table-responsive p-5">
                    <livewire:admin.articles.article-table/>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
