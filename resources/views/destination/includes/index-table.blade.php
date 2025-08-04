<div class="table-responsive" >
    <table class="table table-striped" id="data-table" style="height: 100px;">
        <thead>
            <tr>
                <th>No</th>
                
                    <th class="align-middle">Name</th>
                    <th class="align-middle">Description</th>
                    <th class="align-middle">Location</th>
                    <th class="align-middle">Address</th>
                    <th class="align-middle">City</th>
                    <th class="align-middle">Province</th>
                    <th class="align-middle">Country</th>
                    <th class="align-middle">Image</th>
                    <th class="align-middle">Price</th>
                    <th class="align-middle">Contact Person</th>
                    <th class="align-middle">Phone</th>
                    <th class="align-middle">Is Active</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destination as $row)
                <tr>
                    <td>{{ $loop->iteration + ($destination->currentPage() - 1) * $destination->perPage() }}</td>
                    
                    <td>{{ $row?->name }}</td>
                    <td>{{ $row?->description }}</td>
                    <td>{{ $row?->location }}</td>
                    <td>{{ $row?->address }}</td>
                    <td>{{ $row?->city }}</td>
                    <td>{{ $row?->province }}</td>
                    <td>{{ $row?->country }}</td>
                    <td>{{ $row?->image }}</td>
                    <td>{{ $row?->price }}</td>
                    <td>{{ $row?->contact_person }}</td>
                    <td>{{ $row?->phone }}</td>
                    <td>{{ $row?->is_active }}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            @can('destination view')
                                <div class="me-1">
                                    <a href="{{ route('destinations.show', $row) }}"
                                        class="btn btn-icon btn-outline-info btn-sm"
                                        data-bs-toggle="tooltip"
                                        data-bs-title="Detail"
                                        data-bs-placement="top">
                                        <span class="bx bx-show"></span>
                                    </a>
                                </div>
                            @endcan
                            @can('destination edit')
                                <div class="me-1">
                                    <a href="{{ route('destinations.edit', $row) }}"
                                        class="btn btn-icon btn-outline-primary btn-sm"
                                        data-bs-toggle="tooltip" data-bs-title="Edit"
                                        data-bs-placement="top">
                                        <span class="bx bx-pencil"></span>
                                    </a>
                                </div>
                            @endcan
                            @can('destination delete')
                                <form action="{{ route('destinations.destroy', $row) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <x-input.confirm-button text="Data destination ini akan dihapus!"
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
    {!! $destination->withQueryString()->links() !!}
</div>    