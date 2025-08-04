<div class="row">
    <div class="col-md-12">
        
                <div class="mb-4">
                    <label for="name" class="form-label">Name</label>
                    <input 
                        type="text" 
                        name="name" 
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" 
                        id="name" 
                        value="{{ old('name', $destination?->name) }}" 
                        placeholder="Masukkan Name" />
                    @error('name')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="location" class="form-label">Location</label>
                    <input 
                        type="text" 
                        name="location" 
                        class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" 
                        id="location" 
                        value="{{ old('location', $destination?->location) }}" 
                        placeholder="Masukkan Location" />
                    @error('location')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="address" class="form-label">Address</label>
                    <input 
                        type="text" 
                        name="address" 
                        class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" 
                        id="address" 
                        value="{{ old('address', $destination?->address) }}" 
                        placeholder="Masukkan Address" />
                    @error('address')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="city" class="form-label">City</label>
                    <input 
                        type="text" 
                        name="city" 
                        class="form-control {{ $errors->has('city') ? 'is-invalid' : '' }}" 
                        id="city" 
                        value="{{ old('city', $destination?->city) }}" 
                        placeholder="Masukkan City" />
                    @error('city')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="province" class="form-label">Province</label>
                    <input 
                        type="text" 
                        name="province" 
                        class="form-control {{ $errors->has('province') ? 'is-invalid' : '' }}" 
                        id="province" 
                        value="{{ old('province', $destination?->province) }}" 
                        placeholder="Masukkan Province" />
                    @error('province')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="country" class="form-label">Country</label>
                    <input 
                        type="text" 
                        name="country" 
                        class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" 
                        id="country" 
                        value="{{ old('country', $destination?->country) }}" 
                        placeholder="Masukkan Country" />
                    @error('country')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="image" class="form-label">Image</label>
                    <input 
                        type="text" 
                        name="image" 
                        class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" 
                        id="image" 
                        value="{{ old('image', $destination?->image) }}" 
                        placeholder="Masukkan Image" />
                    @error('image')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="price" class="form-label">Price</label>
                    <x-input.currency name="price" id="price"
                        value="{{ old('price', $destination?->price) }}" 
                        placeholder="Masukkan Price"
                        class="form-control text-end {{ $errors->has('price') ? 'is-invalid' : '' }}" />
                    @error('price')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="contact_person" class="form-label">Contact Person</label>
                    <input 
                        type="text" 
                        name="contact_person" 
                        class="form-control {{ $errors->has('contact_person') ? 'is-invalid' : '' }}" 
                        id="contact_person" 
                        value="{{ old('contact_person', $destination?->contact_person) }}" 
                        placeholder="Masukkan Contact Person" />
                    @error('contact_person')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
                <div class="mb-4">
                    <label for="phone" class="form-label">Phone</label>
                    <input 
                        type="text" 
                        name="phone" 
                        class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" 
                        id="phone" 
                        value="{{ old('phone', $destination?->phone) }}" 
                        placeholder="Masukkan Phone" />
                    @error('phone')<small class="invalid-feedback">{{ $message }}</small>@enderror
                </div>
    </div>
</div>