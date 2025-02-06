<div class="btn-group pull-right">
    <button data-bs-toggle="modal" data-bs-target="#editModal-{{ $model->id }}" class="btn btn-sm btn-primary">
        <span class="bx bx-edit"> </span>
    </button>

    <x-edit-modal title="Edit Data Tahun Ajar" id="{{ $model->id }}" fn="{{ route('tahun_ajar.update', $model->id) }}"
        method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <x-input type='text' name='nama' id="nama" label='Nama' placeholder='Nama Kelas'
                value="{{ $model->nama }}"></x-input>
        </div>
        <div class="mb-3">
            <x-input type='text' name='keterangan' id="keterangan" label='Status' placeholder='Keterangan'
                value="{{ $model->keterangan }}"></x-input>
        </div>
    </x-edit-modal>

    <button data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $model->id }}" class="btn btn-sm btn-danger">
        <span class="bx bx-trash"> </span>
    </button>

    <x-delete-modal title='Hapus data' id="{{ $model->id }}" fn="{{ route('tahun_ajar.destroy', $model->id) }}"
        method="POST">
        @csrf
        @method('DELETE')
    </x-delete-modal>
</div>
