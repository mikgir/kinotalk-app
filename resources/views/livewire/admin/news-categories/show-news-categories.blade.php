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
                            <th class="text-center" scope="col">Id</th>
                            <th class="text-center" scope="col">Наименование</th>
                            <th class="text-center" scope="col">Order</th>
                            <th class="text-center" scope="col">Дата создания </th>
                            <th class="text-center" scope="col">Дата изменения</th>
                            <th class="text-center" scope="col">Изменить</th>
                            <th class="text-center" scope="col">Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($newsCategories as $newsCategory)
                        <tr class="border-bottom-secondary">
                            <th class="text-center" scope="row">{{$newsCategory->id}}</th>
                            <td class="text-center">{{$newsCategory->name}}</td>
                            <td class="text-center">{{$newsCategory->order}}</td>
                            <td class="text-center">{{$newsCategory->created_at}}</td>
                            <td class="text-center">{{$newsCategory->updated_at}}</td>
                            <td class="text-center"><a href="{{route('admin.news.categories.edit', $newsCategory->id)}}" class="btn btn-outline-success">EDIT</a></td>
                            <td class="text-center"> <a href="{{route('admin.news.categories.delete', $newsCategory->id)}}" class="btn btn-outline-danger">DELETE</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>




