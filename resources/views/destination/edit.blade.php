<x-layout.app title="Perbarui Destination" activeMenu="destination.edit" :withError="false">
    <div class="container my-5">
        <x-breadcrumb title="Perbarui Destination" :breadcrumbs="[
            ['label' => 'Dashboard', 'url' => url('/')],
            ['label' => 'Destinasi', 'url' => route('destinations.index')],
            ['label' => 'Perbarui Destination'],
        ]" />

        <div class="card">
            <div class="card-body">
                <x-error-list />

                <form action="{{ route('destinations.update', $destination) }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('destination.includes.form')

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary me-2">Perbarui</button>
                        <a href="{{ route('destinations.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>