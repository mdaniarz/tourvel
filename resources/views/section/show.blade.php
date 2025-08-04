<x-layout.app title="Detail Section" activeMenu="section.show" :withError="true">
     <div class="container my-5">
        <x-breadcrumb title="Detail Section" :breadcrumbs="[
            ['label' => 'Dashboard', 'url' => url('/')],
            ['label' => 'Section', 'url' => route('sections.index')],
            ['label' => 'Detail Section'],
        ]" />

        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('sections.index') }}" class="btn btn-sm btn-secondary">
                        <i class="bx bx-arrow-back me-1"></i>Kembali
                    </a>

                    <div>
                        @can('section view')
                        <a href="{{ route('sections.create') }}"
                            class="btn btn-sm btn-info">
                            <i class="bx bx-plus me-1"></i>Baru
                        </a>
                        @endcan
                        @can('section edit')
                        <a href="{{ route('sections.edit', $section) }}"
                            class="btn btn-sm btn-primary">
                            <i class="bx bx-pencil me-1"></i>Edit
                        </a>
                        @endcan
                        @can('section delete')
                            <form action="{{ route('sections.destroy', $section) }}"
                                method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <x-input.confirm-button text="Data section ini akan dihapus!"
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
                                <div class="col-md-8 form-group">: {{ $section->name }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Slug</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $section->slug }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Data</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $section->data }}</div>
                                <div class="col-md-4">
                                    <label for="first-name-horizontal">Is Active</label>
                                </div>
                                <div class="col-md-8 form-group">: {{ $section->is_active }}</div>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>
