<div class="row">
    <div class="col-md-12">
        
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input 
                        type="text" 
                        name="title" 
                        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" 
                        id="title" 
                        value="{{ old('title', $galery?->title) }}" 
                        placeholder="Masukkan Title" />
                    @error('title')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label">Image</label>
                    <input 
                        type="text" 
                        name="image" 
                        class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" 
                        id="image" 
                        value="{{ old('image', $galery?->image) }}" 
                        placeholder="Masukkan Image" />
                    @error('image')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="category" class="form-label">Category</label>
                    <input 
                        type="text" 
                        name="category" 
                        class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}" 
                        id="category" 
                        value="{{ old('category', $galery?->category) }}" 
                        placeholder="Masukkan Category" />
                    @error('category')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
    </div>
</div>