<div class="table-responsive" >
    <table class="table table-striped" id="data-table" style="height: 100px;">
        <thead>
            <tr>
                <th>No</th>
                
                    <th class="align-middle">Name</th>
                    <th class="align-middle">Slug</th>
                    <th class="align-middle">Data</th>
                    <th class="align-middle">Is Active</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($section as $row)
                <tr>
                    <td>{{ $loop->iteration + ($section->currentPage() - 1) * $section->perPage() }}</td>
                    
                    <td>{{ $row?->name }}</td>
                    <td>{{ $row?->slug }}</td>
                    <td>{{ $row?->data }}</td>
                    <td>{{ $row?->is_active }}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            @can('section view')
                                <div class="me-1">
                                    <a href="{{ route('sections.show', $row) }}"
                                        class="btn btn-icon btn-outline-info btn-sm"
                                        data-bs-toggle="tooltip"
                                        data-bs-title="Detail"
                                        data-bs-placement="top">
                                        <span class="bx bx-show"></span>
                                    </a>
                                </div>
                            @endcan
                            @can('section edit')
                                <div class="me-1">
                                    <a href="{{ route('sections.edit', $row) }}"
                                        class="btn btn-icon btn-outline-primary btn-sm"
                                        data-bs-toggle="tooltip" data-bs-title="Edit"
                                        data-bs-placement="top">
                                        <span class="bx bx-pencil"></span>
                                    </a>
                                </div>
                            @endcan
                            @can('section delete')
                                <form action="{{ route('sections.destroy', $row) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <x-input.confirm-button text="Data section ini akan dihapus!"
                                        positive="Ya, hapus!" icon="info"
                                        class="btn btn-icon btn-outline-danger btn-sm"
                                        data-bs-toggle="tooltip"
                                        data-bs-title="Hapus"
                                        data-bs-placement="top">
                                        <span class="bx bx-trash"></span>
                                    </x-input.confirm-button>
                                </form>
                            @endcan
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Pagination --}}
<div class="mt-3 d-flex justify-content-end">
    {!! $section->withQueryString()->links() !!}
</div>    