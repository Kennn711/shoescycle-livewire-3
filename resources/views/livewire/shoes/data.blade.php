<div>
    @section('page-header', 'Shoes')
    @push('breadcumb-backend')
        <li class="breadcrumb-item">Tabel</li>
        <li class="breadcrumb-item">Sepatu</li>
    @endpush
    <div>

        <section class="section">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-end align-items-center">
                        <a href="{{ route('shoes.create') }}" wire:navigate class="btn btn-success btn-md">Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Sepatu</th>
                                <th>Ukuran</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shoes as $see)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $see->name }}</td>
                                    <td>{{ $see->size }}</td>
                                    <td>{{ $see->price }}</td>
                                    <td>{{ $see->stock }}</td>
                                    <td>{{ $see->description }}</td>
                                    <td></td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-md">Edit</a>
                                        <button wire:click="destroy({{ $see->id }})" class="btn btn-danger btn-md">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
