<div>
    <form wire:submit.prevent="update({{ $newsCategory }})">
        <div class="form-group">
            <label for="Post name">Post name</label>
            <input wire:model="newsCategory.name" type="text" name="name" id="name" class="form-control" placeholder="Name of the post">
        </div>
        <div class="form-group">
            <label for="order">Order</label>
            <input wire:model="newsCategory.order" type="text" name="order" id="order" class="form-control" placeholder="Order">
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
</div>
