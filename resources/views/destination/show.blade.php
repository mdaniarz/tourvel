<x-layout.app title="Detail Destination" activeMenu="destination.show" :withError="true">
     <div class="container my-5">
        <x-breadcrumb title="Detail Destination" :breadcrumbs="[
            ['label' => 'Dashboard', 'url' => url('/')],
            ['label' => 'Destinasi', 'url' => route('destinations.index')],
            ['label' => 'Detail Destination'],
        ]" />

        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('destinations.index') }}" class="btn btn-sm btn-secondary">
                        <i class="bx bx-arrow-back me-1"></i>Kembali
                    </a>

                    <div>
                        @can('destination view')
                        <a href="{{ route('destinations.create') }}"
                            class="btn btn-sm btn-info">
                            <i class="bx bx-plus me-1"></i>Baru
                        </a>
                        @endcan
                        @can('destination edit')
                        <a href="{{ route('destinations.edit', $destination) }}"
                            class="btn btn-sm btn-primary">
                            <i class="bx bx-pencil me-1"></i>Edit
                        </a>
                        @endcan
                        @can('destination delete')
                            <form action="{{ route('destinations.destroy', $destination) }}"
                                method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <x-input.confirm-button text="Data destination ini akan dihapus!"
                                    positive="Ya, hapus!" icon="info"
                                    class="btn btn-danger btn-sm"
                                    data-bs-toggle="tooltip"
                                    data-bs-title="Hapus"
                                    data-bs-placement="top">
                                    <i class="bx bx-trash me-1"></i>Hapus
                                </x-input.confirm-button>
                            </form>
                        @endcan
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form class="row g-3">
                    
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Name</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->name }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Description</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->description }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Location</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->location }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Address</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->address }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">City</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->city }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Province</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->province }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Country</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->country }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Image</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->image }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Price</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->price }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Contact Person</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->contact_person }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Phone</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->phone }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Is Active</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $destination->is_active }}</div>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>
