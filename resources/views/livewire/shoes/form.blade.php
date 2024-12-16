<div>
    @section('page-header', 'Shoes')
    @push('breadcumb-backend')
        <li class="breadcrumb-item">Tabel</li>
        <li class="breadcrumb-item">Sepatu</li>
        <li class="breadcrumb-item">Tambah Sepatu</li>
    @endpush
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-title justify-content-center">
                    <h3>Tambah Sepatu</h3>
                </div>
                <div class="card shadow">
                    <div class="card-body">
                        <form wire:submit.prevent="store" method="POST" enctype="multipart/form-data">
                            <label>Nama Sepatu</label>
                            <input type="text" wire:model.live="name" class="form-control @error('name') is-invalid @enderror mb-2">

                            <div class="row justify-content-between">
                                <div class="col-md-6">
                                    <label>Ukuran</label>
                                    <input type="number" wire:model.live="size" class="form-control @error('size') is-invalid @enderror mb-2">
                                </div>

                                <div class="col-md-6">
                                    <label>Harga</label>
                                    <input type="number" wire:model.live="price" class="form-control @error('price') is-invalid @enderror mb-2">
                                </div>
                            </div>

                            <label>Stok</label>
                            <input type="text" wire:model.live="stock" class="form-control @error('stock') is-invalid @enderror mb-2">

                            <label>Deskripsi</label>
                            <textarea wire:model.live="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror mb-2"></textarea>

                            <label>Gambar</label>
                            <input type="file" wire:model.live="image" class="form-control @error('image') is-invalid @enderror mb-2" multiple>

                            @if (is_array($image))
                                <div class="row">
                                    @foreach ($image as $see)
                                        <div class="col-md-6">
                                            <img src="{{ $see->temporaryUrl() }}" alt="" class="img-fluid w-50">
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <button class="btn btn-success">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
