<div class="row">
    <div class="col-md-12">
        
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input 
                        type="text" 
                        name="name" 
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                        id="name" 
                        value="{{ old('name', $package?->name) }}" 
                        placeholder="Masukkan Name" />
                    @error('name')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="destination_id" class="form-label">Destination Id</label>
                    <x-input.currency name="destination_id" id="destination_id"
                        value="{{ old('destination_id', $package?->destination_id) }}" 
                        placeholder="Masukkan Destination Id"
                        class="form-control text-end {{ $errors->has('destination_id') ? 'is-invalid' : '' }}" />
                    @error('destination_id')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="duration" class="form-label">Duration</label>
                    <x-input.currency name="duration" id="duration"
                        value="{{ old('duration', $package?->duration) }}" 
                        placeholder="Masukkan Duration"
                        class="form-control text-end {{ $errors->has('duration') ? 'is-invalid' : '' }}" />
                    @error('duration')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="price" class="form-label">Price</label>
                    <x-input.currency name="price" id="price"
                        value="{{ old('price', $package?->price) }}" 
                        placeholder="Masukkan Price"
                        class="form-control text-end {{ $errors->has('price') ? 'is-invalid' : '' }}" />
                    @error('price')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label">Image</label>
                    <input 
                        type="text" 
                        name="image" 
                        class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" 
                        id="image" 
                        value="{{ old('image', $package?->image) }}" 
                        placeholder="Masukkan Image" />
                    @error('image')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="quota" class="form-label">Quota</label>
                    <x-input.currency name="quota" id="quota"
                        value="{{ old('quota', $package?->quota) }}" 
                        placeholder="Masukkan Quota"
                        class="form-control text-end {{ $errors->has('quota') ? 'is-invalid' : '' }}" />
                    @error('quota')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
    </div>
</div>