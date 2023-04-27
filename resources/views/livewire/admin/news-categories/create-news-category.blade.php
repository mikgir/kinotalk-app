@section('breadcrumb-title')
    <h3>Категории</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">Категории</li>
    <li class="breadcrumb-item active">Создание категории</li>
@endsection
<div class="container-fluid basic_table">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>Создать категорию</h3>
                </div>
                <div class="card-body">
                    <form class="form-control">
                        <div class="form-group">
                            <label for="name" class="col-form-label pt-0">Наименование</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" wire:model="name">
                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group">
                            <label for="order" class="col-form-label pt-0">Order</label>
                            <input type="text" class="form-control" id="order" placeholder="Enter order" wire:model="order">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mt-5 mb-5" wire:click="create">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
