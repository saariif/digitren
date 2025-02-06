<!--sidebar-wrapper-->
@props(['setting'])
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="">
            <img src="{{ $setting != null ? url('storage/uploads/setting/', $setting->logo) : url('assets/images/logo-icon.png') }}"
                class="logo-icon-2" alt="logo" />
        </div>
        <div>
            <h4 class="logo-text">IBS PKMKK</h4>
        </div>
        <a href="javascript:;" class="toggle-btn ms-auto"> <i class="bx bx-menu"></i>
        </a>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="{{ request()->routeIs('dashboard.*') ? 'mm-active' : '' }}">
            <a href="{{ route('dashboard') }}">
                <div class="parent-icon icon-color-1"><i class="bx bx-home-alt"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        @role('Administrator|Pengurus')
            <!-- master data -->
            <li class="menu-label">Master Data</li>

            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon icon-color-4"><i class="bx bx-user"></i>
                    </div>
                    <div class="menu-title">Kesantrian</div>
                </a>
                <ul>
                    <li class="{{ request()->routeIs('kamar.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('kamar.index') }}"><i class="bx bx-right-arrow-alt"></i>Kamar
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('kelas.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('kelas.index') }}"><i class="bx bx-right-arrow-alt"></i>Kelas
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('santri.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('santri.index') }}"><i class="bx bx-right-arrow-alt"></i>Santri
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('tahfidz.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('tahfidz.index') }}"><i class="bx bx-right-arrow-alt"></i>Tahfidz
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('nadhoman.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('nadhoman.index') }}"><i class="bx bx-right-arrow-alt"></i>Nadhoman
                        </a>
                    </li>
                    @role('Administrator')
                        <li class="{{ request()->routeIs('users.*') ? 'mm-active' : '' }}">
                            <a href="{{ route('users.index') }}"><i class="bx bx-right-arrow-alt"></i>Pengguna
                            </a>
                        </li>
                    @endrole
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon icon-color-2"><i class="bx bx-archive"></i>
                    </div>
                    <div class="menu-title">Akademik</div>
                </a>
                <ul>
                    <li class="{{ request()->routeIs('tahun_ajar.*') ? 'mm-active' : '' }}">
                        <a href="{{ route('tahun_ajar.index') }}"><i class="bx bx-right-arrow-alt"></i>Tahun Ajar
                        </a>
                    </li>
                    {{-- <li class="">
                        <a href=""><i class="bx bx-right-arrow-alt"></i>Semester
                        </a>
                    </li>
                    <li class="">
                        <a href=""><i class="bx bx-right-arrow-alt"></i>Pindah-Naik Kelas
                        </a>
                    </li>
                    <li class="">
                        <a href=""><i class="bx bx-right-arrow-alt"></i>Pindah Kamar
                        </a>
                    </li>
                    <li class="">
                        <a href=""><i class="bx bx-right-arrow-alt"></i>Nadhoman
                        </a>
                    </li> --}}
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon icon-color-5"><i class="bx bx-cast"></i>
                    </div>
                    <div class="menu-title">Kepengasuhan</div>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon icon-color-3"><i class="bx bx-notepad"></i>
                    </div>
                    <div class="menu-title">Laporan</div>
                </a>
            </li>
            {{-- <li class="{{ request()->routeIs('mapel.*') ? 'mm-active' : '' }}">
                <a href="{{ route('mapel.index') }}">
                    <div class="parent-icon icon-color-11"><i class="bx bx-book"></i>
                    </div>
                    <div class="menu-title">Mata Pelajaran</div>
                </a>
            </li>
            <li class="{{ request()->routeIs('rapor.*') ? 'mm-active' : '' }}">
                <a href="{{ route('rapor.index') }}">
                    <div class="parent-icon icon-color-6"><i class="bx bx-task"></i>
                    </div>
                    <div class="menu-title">Rapor Santri</div>
                </a>
            </li> --}}
            <!-- master data -->

            <!-- surat menyurat -->
            {{-- <li class="menu-label">Surat Menyurat</li>
            <li class="{{ request()->routeIs('jenis_surat.*') ? 'mm-active' : '' }}">
                <a href="{{ route('jenis_surat.index') }}">
                    <div class="parent-icon icon-color-7"><i class="bx bx-abacus"></i>
                    </div>
                    <div class="menu-title">Data Surat</div>
                </a>
            </li>
            <li class="{{ request()->routeIs('surat.*') ? 'mm-active' : '' }}">
                <a href="{{ route('surat.index') }}">
                    <div class="parent-icon icon-color-4"><i class="bx bx-file"></i>
                    </div>
                    <div class="menu-title">Surat Izin Santri</div>
                </a>
            </li> --}}
            <!-- surat menyurat -->
        @endrole

        @hasanyrole('Administrator|Keuangan')
            <!-- tabungan -->
            <li class="menu-label">Tabungan</li>
            <li class="{{ request()->routeIs('saldo_debit.*') ? 'mm-active' : '' }}">
                <a href="{{ route('saldo_debit.index') }}">
                    <div class="parent-icon icon-color-5"><i class='bx bx-wallet-alt'></i>
                    </div>
                    <div class="menu-title">Tabungan</div>
                </a>
            </li>
            <li class="{{ request()->routeIs('transfer.*') ? 'mm-active' : '' }}">
                <a href="{{ route('transfer.index') }}">
                    <div class="parent-icon icon-color-1"><i class="bx bx-transfer-alt"></i>
                    </div>
                    <div class="menu-title">Transfer</div>
                </a>
            </li>
            <!-- transfer -->
            <li class="{{ request()->routeIs('transaksi.*') ? 'mm-active' : '' }}">
                <a href="{{ route('transaksi.index') }}">
                    <div class="parent-icon icon-color-7"><i class='bx bx-money'></i>
                    </div>
                    <div class="menu-title">Transaksi</div>
                </a>
            </li>
            <!-- tabungan -->
        @endrole

        <!-- utilities -->
        @role('Administrator')
            <li class="menu-label">Utilitis</li>
            {{-- <li class="{{ request()->routeIs('roles.*') ? 'mm-active' : '' }}">
                <a href="{{ route('roles.index') }}">
                    <div class="parent-icon text-warning"><i class="bx bx-shield"></i>
                    </div>
                    <div class="menu-title">Jabatan</div>
                </a>
            </li> --}}
            <li class="{{ request()->routeIs('riwayat.*') ? 'mm-active' : '' }}">
                <a href="{{ route('riwayat.index') }}">
                    <div class="parent-icon icon-color-8"><i class="bx bx-history"></i>
                    </div>
                    <div class="menu-title">Riwayat</div>
                </a>
            </li>
            <li class="{{ request()->routeIs('sinkronisasi.*') ? 'mm-active' : '' }}">
                <a href="{{ route('sync.index') }}">
                    <div class="parent-icon icon-color-9"><i class="bx bx-sync"></i>
                    </div>
                    <div class="menu-title">Sinkronisasi</div>
                </a>
            </li>
        @endrole
        <!-- utilities -->
        <!--end navigation-->
</div>
<!--end sidebar-wrapper-->
