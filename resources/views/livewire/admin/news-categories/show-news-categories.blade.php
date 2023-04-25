<h4><a href="{{ url('/admin/newsCategories/create') }}"> Добавить категорию</a></h4>
@foreach ($newsCategories as $newsCategory)
    <tr>
        <td>
            {{$newsCategory->name}}
        </td>
        <td>
            {{$newsCategory->order}}
        </td>
        <td>
            <button wire:click="edit({{$newsCategory->id}})" class="btn btn-primary btn-sm">Edit</button>
            <button wire:onclick="deleteCategory({{$newsCategory->id}})" class="btn btn-danger btn-sm">Delete</button>
        </td>
    </tr>
    </br>
@endforeach





