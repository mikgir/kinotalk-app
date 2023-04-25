<div>
<form>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" wire:model="name">
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <div class="form-group">
        <label for="order">Order</label>
        <input type="text" class="form-control" id="order" placeholder="Enter order" wire:model="order">
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
    </div>

    <button type="submit" class="btn btn-primary" wire:click="create">Create</button>
</form>
    </div>
