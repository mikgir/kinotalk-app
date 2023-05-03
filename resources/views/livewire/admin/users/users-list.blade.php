@section('breadcrumb-title')
    <h3>Таблица пользователей</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Пользователи</li>
    <li class="breadcrumb-item active">Таблица пользователей</li>
@endsection
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>СПИСОК ПОЛЬЗОВАТЕЛЕЙ</h3>
                    {{--                    <div>--}}
                    {{--                        <a href="{{ route('admin.news.categories.create') }}" class="btn btn-outline-primary"> Добавить категорию</a>--}}
                    {{--                    </div>--}}

                </div>
                <div class="table-responsive p-5">
                    <livewire:admin.users.user-table/>
                </div>

                {{--                    <table class="table">--}}
                {{--                        <thead>--}}
                {{--                        <tr class="border-bottom-primary">--}}
                {{--                            <th class="text-center" scope="col">Id</th>--}}
                {{--                            <th class="text-center" scope="col">Аватар</th>--}}
                {{--                            <th class="text-center" scope="col">Имя</th>--}}
                {{--                            <th class="text-center" scope="col">Email</th>--}}
                {{--                            <th class="text-center" scope="col">Дата регистрации</th>--}}
                {{--                            <th class="text-center" scope="col">Дата изменения</th>--}}
                {{--                            <th class="text-center" scope="col">Изменить</th>--}}
                {{--                            <th class="text-center" scope="col">Удалить</th>--}}
                {{--                        </tr>--}}
                {{--                        </thead>--}}
                {{--                        <tbody>--}}
                {{--                        @foreach ($users as $user)--}}
                {{--                            <tr class="border-bottom-secondary">--}}
                {{--                                <th class="text-center" scope="row">{{$user->id}}</th>--}}
                {{--                                <td class="text-center"><img src="{{asset($user->avatar)}}" style="width: 30px; height: 30px"></td>--}}
                {{--                                <td class="text-center">{{$user->name}}</td>--}}
                {{--                                <td class="text-center">{{$user->email}}</td>--}}
                {{--                                <td class="text-center">{{$user->created_at}}</td>--}}
                {{--                                <td class="text-center">{{$user->updated_at}}</td>--}}
                {{--                                <td class="text-center"><a href="{{route('admin.news.categories.edit', $newsCategory->id)}}" class="btn btn-outline-success">EDIT</a></td>--}}
                {{--                                <td class="text-center"> <a href="{{route('admin.news.categories.delete', $newsCategory->id)}}" class="btn btn-outline-danger">DELETE</a></td>--}}
                {{--                            </tr>--}}
                {{--                        @endforeach--}}
                {{--                        </tbody>--}}
                {{--                    </table>--}}

            </div>
        </div>
    </div>
</div>
