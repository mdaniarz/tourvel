<x-layout.app title="Detail Galery" activeMenu="galery.show" :withError="true">
     <div class="container my-5">
        <x-breadcrumb title="Detail Galery" :breadcrumbs="[
            ['label' => 'Dashboard', 'url' => url('/')],
            ['label' => 'Galeri', 'url' => route('galeries.index')],
            ['label' => 'Detail Galery'],
        ]" />

        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('galeries.index') }}" class="btn btn-sm btn-secondary">
                        <i class="bx bx-arrow-back me-1"></i>Kembali
                    </a>

                    <div>
                        @can('galery view')
                        <a href="{{ route('galeries.create') }}"
                            class="btn btn-sm btn-info">
                            <i class="bx bx-plus me-1"></i>Baru
                        </a>
                        @endcan
                        @can('galery edit')
                        <a href="{{ route('galleries.edit', $galery) }}"
                            class="btn btn-sm btn-primary">
                            <i class="bx bx-pencil me-1"></i>Edit
                        </a>
                        @endcan
                        @can('galery delete')
                            <form action="{{ route('galleries.destroy', $galery) }}"
                                method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <x-input.confirm-button text="Data galery ini akan dihapus!"
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
                                    <label for="first-name-horizontal">Title</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $galery->title }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Image</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $galery->image }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Description</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $galery->description }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Category</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $galery->category }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Is Active</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $galery->is_active }}</div>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>
