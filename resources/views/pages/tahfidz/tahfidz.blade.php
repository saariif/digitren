{{-- <div class="row mt-5">
    <div class="col">
        <ul>
            <li>Minimal Setoran Rp. 50.000</li>
        </ul>
    </div>
</div> --}}
<div class="user-profile-page" style="display: none" id="foto_santri">
    <div class="card radius-15">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-4 border-right">
                    <div class="d-md-flex align-items-center">
                        <div class="mb-md-0 mb-3">
                            <div>
                                <img src="" alt="santri" class="img-fluid rounded-circle" id="santri_profile"
                                    width="175">
                            </div>
                            {{-- <img class="rounded-circle shadow" alt="santri" id="santri_profile" width="130" height="130"> --}}
                        </div>
                        <div class="ms-md-4 flex-grow-1">
                            <div class="d-flex align-items-center mb-1">
                                <h5 class="mb-0" id="santri_nama"></h5>
                            </div>
                            <p class="mb-0 text-muted" id="santri_noinduk"></p>
                            {{-- <p class="text-primary"><i class="bx bx-buildings"></i> Epic Coders</p> --}}
                            {{-- <button type="button" class="btn btn-primary">Connect</button>
                            <button type="button" class="btn btn-outline-secondary ml-2">Resume</button> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <ul class="nav nav-pills">
                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#Edit-Profile"><span class="p-tab-name">Tambah Hafalan</span><i class="bx bx-message-edit font-24 d-sm-none"></i></a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#Experience"><span class="p-tab-name">Laporan Tahfidz</span><i class="bx bx-donate-blood font-24 d-sm-none"></i></a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#Biography"><span class="p-tab-name">Rekap Laporan Tahfidz</span><i class="bx bxs-user-rectangle font-24 d-sm-none"></i></a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane fade active show" id="Edit-Profile">
                    <div class="card shadow-none border mb-0 radius-15">
                        <div class="card-body">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12 col-lg-12 border-right">
                                        <form class="row g-2" action="{{ route('transaksi.store') }}" method="POST">
                                            <div class="col-6">
                                                <label for="inputFirstName" class="form-label">Tanggal</label>
                                                <input type="date" class="form-control " id="tanggal_boyong" name="tanggal_boyong" placeholder="Tanggal Boyong" value="" min="" max="">
                                            </div>
                                            <div class="col-6">
                                                <label for="inputFirstName" class="form-label">Jumlah Hafalan Baru</label>
                                                <input type="text" class="form-control" id="santri_nama" name="santri_nama" placeholder="Jumlah Surat" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputAddress" class="form-label">Keterangan Hafalan</label>
                                                <textarea class="form-control" id="inputAddress" placeholder="Keterangan Hafalan Baru" rows="3" required></textarea>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputFirstName" class="form-label">Muroja'ah</label>
                                                <input type="text" class="form-control" id="santri_nama" name="santri_nama" placeholder="Muroja'ah Hafalan yang sudah dihafal" required>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputFirstName" class="form-label">Muroja'ah</label>
                                                <input type="text" class="form-control" id="santri_nama" name="santri_nama" placeholder="Muroja'ah Hafalan Baru (Sebelum Hafalan Hari ini)" required>
                                            </div>
                                            {{-- <div class="row mt-2"> --}}
                                                <div class="col-12 text-end">
                                                    <button type="submit" class="btn btn-warning">Simpan</button>
                                                {{-- </div> --}}
                                            </div>
                                        </form>														
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Experience">
                    <div class="card shadow-none border mb-0 radius-15">
                        <div class="card-body">
                            <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Jumlah Hafalan Baru</th>
                                                <th scope="col">Keterangan Hafalan Baru</th>
                                                <th scope="col">Muroja'ah</th>
                                                <th scope="col">Muroja'ah Hafalan Baru</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                                <td>@mdo</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <div class="d-sm-flex align-items-center mb-3">
                                <a href="javascript:;" class="btn btn-primary ms-auto radius-10"><i class="bx bx-plus"></i> Add More</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="Biography">
                    <div class="card shadow-none border mb-0 radius-15">
                        <div class="card-body">
                            <div class="d-sm-flex align-items-center mb-3">
                                <h4 class="mb-0">Job Experience</h4>
                                <p class="mb-0 ms-sm-3 text-muted">3 Job History</p> <a href="javascript:;" class="btn btn-primary ms-auto radius-10"><i class="bx bx-plus"></i> Add More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
                </div>
            </div>
            <!--end row-->
            
            
        </div>
    </div>
</div>
@push('js')
    <script>
        $(document).ready(function() {
            $('#debit').on('input', function() {
                // Hanya membiarkan angka (0-9) dan tombol khusus lainnya seperti Enter dan Backspace
                this.value = this.value.replace(/[^0-9]/g, '');
            });
        });
        $('#name').on('change', function() {
            $('#spinner').show()
            setTimeout(() => {
                $.ajax({
                    url: "{{ route('tahfidz.index') }}",
                    method: "GET",
                    data: {
                        no_induk: $(this).val(),
                    },
                    success: (res) => {
                        if (res.data) {
                            var data = res.data
                            $('#santri_noinduk').html(data.no_induk)
                            $('#santri_nama').html(data.name)
                            $('#foto_santri').show()
                            if (data.foto === 'santri.png') {
                                $('#santri_profile').attr('src',
                                    '/img/' + data
                                    .foto)
                            } else {
                                $('#santri_profile').attr('src',
                                    '/storage/uploads/santri/' + data
                                    .foto)
                            }
                            $('#santri_id').val(data.id)
                            $('#debit').focus()
                            $('#saldo').text(data.saldo)
                            $('#spinner').hide()
                        } else {
                            $('#spinner').hide()
                            $('#santri_noinduk').html("")
                            $('#santri_nama').html("")
                            $('#foto_santri').hide()
                            $('#saldo').text("000000")
                            Lobibox.notify('error', {
                                pauseDelayOnHover: true,
                                icon: 'bx bx-error',
                                continueDelayOnInactiveTab: false,
                                position: 'top right',
                                size: 'mini',
                                msg: res.message
                            });
                        }
                    }
                })
            }, 1000);
        })
        $(document).ready(function() {
            $('#no_induk').on('input', function() {
                if ($(this).val() !== '') {
                    this.value = this.value.replace(/[^0-9]/g, '');
                    if (this.value.length == 8) {
                        $('#spinner').show()
                        setTimeout(() => {
                            $.ajax({
                                url: "{{ route('tahfidz.index') }}",
                                method: "GET",
                                data: {
                                    no_induk: $(this).val(),
                                    jenis: "Setoran"
                                },
                                success: (res) => {
                                    if (res.data) {
                                        var data = res.data
                                        $('#santri_noinduk').val(data.no_induk)
                                        $('#santri_nama').html(data.name)
                                        $('#foto_santri').show()
                                        if (data.foto === 'santri.png') {
                                            $('#santri_profile').attr('src',
                                                '/img/' + data
                                                .foto)
                                        } else {
                                            $('#santri_profile').attr('src',
                                                '/storage/uploads/santri/' + data
                                                .foto)
                                        }
                                        $('#santri_id').val(data.id)
                                        $('#debit').focus()
                                        $('#saldo').text(data.saldo)
                                        $('#spinner').hide()
                                    } else {
                                        $('#spinner').hide()
                                        $('#santri_noinduk').html("")
                                        $('#santri_nama').html("")
                                        $('#foto_santri').hide()
                                        $('#saldo').text("000000")
                                        Lobibox.notify('error', {
                                            pauseDelayOnHover: true,
                                            icon: 'bx bx-error',
                                            continueDelayOnInactiveTab: false,
                                            position: 'top right',
                                            size: 'mini',
                                            msg: res.message
                                        });
                                    }
                                }
                            })
                        }, 1000);
                    }
                } else {
                    $('#spinner').show()
                    setTimeout(() => {
                        $('#spinner').hide()
                        $('#santri_noinduk').val("")
                        $('#santri_nama').val("")
                        $('#foto_santri').hide()
                        $('#saldo').text("000000")
                    }, 500);
                }
            })
        })
    </script>
@endpush
