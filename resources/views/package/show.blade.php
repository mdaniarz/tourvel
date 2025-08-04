<x-layout.app title="Detail Package" activeMenu="package.show" :withError="true">
     <div class="container my-5">
        <x-breadcrumb title="Detail Package" :breadcrumbs="[
            ['label' => 'Dashboard', 'url' => url('/')],
            ['label' => 'Package', 'url' => route('packages.index')],
            ['label' => 'Detail Package'],
        ]" />

        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('packages.index') }}" class="btn btn-sm btn-secondary">
                        <i class="bx bx-arrow-back me-1"></i>Kembali
                    </a>

                    <div>
                        @can('package view')
                        <a href="{{ route('packages.create') }}"
                            class="btn btn-sm btn-info">
                            <i class="bx bx-plus me-1"></i>Baru
                        </a>
                        @endcan
                        @can('package edit')
                        <a href="{{ route('package.edit', $package) }}"
                            class="btn btn-sm btn-primary">
                            <i class="bx bx-pencil me-1"></i>Edit
                        </a>
                        @endcan
                        @can('package delete')
                            <form action="{{ route('package.destroy', $package) }}"
                                method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <x-input.confirm-button text="Data package ini akan dihapus!"
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
                                <div class="col-md-8 form-group">: {{ $package->name }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Description</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $package->description }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Destination Id</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $package->destination_id }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Duration</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $package->duration }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Price</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $package->price }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Image</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $package->image }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Facilities</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $package->facilities }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Itinerary</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $package->itinerary }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Quota</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $package->quota }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Departure Date</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $package->departure_date }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Is Active</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $package->is_active }}</div>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>
