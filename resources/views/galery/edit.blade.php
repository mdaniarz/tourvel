<x-layout.app title="Perbarui Galery" activeMenu="galery.edit" :withError="false">
    <div class="container my-5">
        <x-breadcrumb title="Perbarui Galery" :breadcrumbs="[
            ['label' => 'Dashboard', 'url' => url('/')],
            ['label' => 'Galeri', 'url' => route('galeries.index')],
            ['label' => 'Perbarui Galery'],
        ]" />

        <div class="card">
            <div class="card-body">
                <x-error-list />

                <form action="{{ route('galleries.update', $galery) }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('galery.includes.form')

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary me-2">Perbarui</button>
                        <a href="{{ route('galeries.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout.app>