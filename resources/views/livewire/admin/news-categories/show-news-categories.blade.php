@section('breadcrumb-title')
    <h3>Таблица категорий</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Категории</li>
    <li class="breadcrumb-item active">Таблица категорий</li>
@endsection
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>КАТЕГОРИИ НОВОСТЕЙ</h3>
                    <div>
                        <a href="{{ route('admin.news.categories.create') }}" class="btn btn-outline-primary"> Добавить категорию</a>
                    </div>

                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr class="border-bottom-primary">
                            <th scope="col">Id</th>
                            <th scope="col">Наименование</th>
                            <th scope="col">Order</th>
                            <th scope="col">Дата создания </th>
                            <th scope="col">Дата изменения</th>
                            <th scope="col">Изменить</th>
                            <th scope="col">Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($newsCategories as $newsCategory)
                        <tr class="border-bottom-secondary">
                            <th scope="row">{{$newsCategory->id}}</th>
                            <td>{{$newsCategory->name}}</td>
                            <td>{{$newsCategory->order}}</td>
                            <td>{{$newsCategory->created_at}}</td>
                            <td>{{$newsCategory->updated_at}}</td>
                            <td><a href="{{route('admin.news.categories.edit', $newsCategory->id)}}" class="btn btn-outline-success">EDIT</a></td>
                            <td> <a href="{{route('admin.news.categories.delete', $newsCategory->id)}}" class="btn btn-outline-danger">DELETE</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




