<div class="table-responsive" >
    <table class="table table-striped" id="data-table" style="height: 100px;">
        <thead>
            <tr>
                <th>No</th>
                
                    <th class="align-middle">Name</th>
                    <th class="align-middle">Description</th>
                    <th class="align-middle">Destination Id</th>
                    <th class="align-middle">Duration</th>
                    <th class="align-middle">Price</th>
                    <th class="align-middle">Image</th>
                    <th class="align-middle">Facilities</th>
                    <th class="align-middle">Itinerary</th>
                    <th class="align-middle">Quota</th>
                    <th class="align-middle">Departure Date</th>
                    <th class="align-middle">Is Active</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($package as $row)
                <tr>
                    <td>{{ $loop->iteration + ($package->currentPage() - 1) * $package->perPage() }}</td>
                    
                    <td>{{ $row?->name }}</td>
                    <td>{{ $row?->description }}</td>
                    <td>{{ $row?->destination_id }}</td>
                    <td>{{ $row?->duration }}</td>
                    <td>{{ $row?->price }}</td>
                    <td>{{ $row?->image }}</td>
                    <td>{{ $row?->facilities }}</td>
                    <td>{{ $row?->itinerary }}</td>
                    <td>{{ $row?->quota }}</td>
                    <td>{{ $row?->departure_date }}</td>
                    <td>{{ $row?->is_active }}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group">
                            @can('package view')
                                <div class="me-1">
                                    <a href="{{ route('package.show', $row) }}"
                                        class="btn btn-icon btn-outline-info btn-sm"
                                        data-bs-toggle="tooltip"
                                        data-bs-title="Detail"
                                        data-bs-placement="top">
                                        <span class="bx bx-show"></span>
                                    </a>
                                </div>
                            @endcan
                            @can('package edit')
                                <div class="me-1">
                                    <a href="{{ route('package.edit', $row) }}"
                                        class="btn btn-icon btn-outline-primary btn-sm"
                                        data-bs-toggle="tooltip" data-bs-title="Edit"
                                        data-bs-placement="top">
                                        <span class="bx bx-pencil"></span>
                                    </a>
                                </div>
                            @endcan
                            @can('package delete')
                                <form action="{{ route('package.destroy', $row) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <x-input.confirm-button text="Data package ini akan dihapus!"
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
    {!! $package->withQueryString()->links() !!}
</div>    