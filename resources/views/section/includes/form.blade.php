<div class="row">
    <div class="col-md-12">
        
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input 
                        type="text" 
                        name="name" 
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                        id="name" 
                        value="{{ old('name', $section?->name) }}" 
                        placeholder="Masukkan Name" />
                    @error('name')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="slug" class="form-label">Slug</label>
                    <input 
                        type="text" 
                        name="slug" 
                        class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" 
                        id="slug" 
                        value="{{ old('slug', $section?->slug) }}" 
                        placeholder="Masukkan Slug" />
                    @error('slug')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
    </div>
</div>