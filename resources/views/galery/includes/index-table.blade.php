<div class="table-responsive" >
    <table class="table table-striped" id="data-table" style="height: 100px;">
        <thead>
            <tr>
                <th>No</th>
                
                    <th class="align-middle">Title</th>
                    <th class="align-middle">Image</th>
                    <th class="align-middle">Description</th>
                    <th class="align-middle">Category</th>
                    <th class="align-middle">Is Active</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galery as $row)
                <tr>
                    <td>{{ $loop->iteration + ($galery->currentPage() - 1) * $galery->perPage() }}</td>
                    
                    <td>{{ $row?->title }}</td>
                    <td>{{ $row?->image }}</td>
                    <td>{{ $row?->description }}</td>
                    <td>{{ $row?->category }}</td>
                    <td>{{ $row?->is_active }}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            @can('galery view')
                                <div class="me-1">
                                    <a href="{{ route('galleries.show', $row) }}"
                                        class="btn btn-icon btn-outline-info btn-sm"
                                        data-bs-toggle="tooltip"
                                        data-bs-title="Detail"
                                        data-bs-placement="top">
                                        <span class="bx bx-show"></span>
                                    </a>
                                </div>
                            @endcan
                            @can('galery edit')
                                <div class="me-1">
                                    <a href="{{ route('galleries.edit', $row) }}"
                                        class="btn btn-icon btn-outline-primary btn-sm"
                                        data-bs-toggle="tooltip" data-bs-title="Edit"
                                        data-bs-placement="top">
                                        <span class="bx bx-pencil"></span>
                                    </a>
                                </div>
                            @endcan
                            @can('galery delete')
                                <form action="{{ route('galleries.destroy', $row) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <x-input.confirm-button text="Data galery ini akan dihapus!"
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
    {!! $galery->withQueryString()->links() !!}
</div>    