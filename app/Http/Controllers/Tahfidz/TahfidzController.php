<?php

namespace App\Http\Controllers\Tahfidz;

use App\Models\Santri;
use App\Models\Tabungan;
use Illuminate\Http\Request;
use App\Models\TransaksiTabungan;
use App\Http\Controllers\Controller;

class TahfidzController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if (request()->ajax()) {
            $noinduk = request()->get('no_induk');
            $santri = Santri::with(['user'])->where('no_induk', $noinduk)->first();
            // // $santri = Tabungan::with('santri', 'santri.user')->whereHas('santri', function ($query) use ($noinduk) {
            // //     $query->where('no_induk', $noinduk);
            // // })->first();
            // $santri = Santri::whereHas('santri', function ($query) use ($noinduk) {
            //     $query->where('no_induk', $noinduk);
            //     })->first();
            if ($santri) {
            //     $saldo = Tabungan::whereHas('santri', function ($query) use ($noinduk) {
            //         $query->where('no_induk', $noinduk);
            //     })->sum('saldo');
            //     if (request()->get('jenis') == 'Penarikan') {
            //         $tr = TransaksiTabungan::where('santri_id', $santri->santri->id)->whereDate('tanggal_transaksi', now()->toDateString())->where('jenis_transaksi', 'Penarikan')->get();
            //         if (!$tr->isEmpty()) {
            //             return response()->json(['message' => "Santri dengan nomor induk <strong> $noinduk </strong> telah melakukan penarikan"], 200);
            //         } else {
                        $data = [
                            'santri_id' => $santri->id,
                            'no_induk' => $santri->no_induk,
                            'name' => $santri->user->name,
                            // 'kelas' => $santri->kelas_santri->name,
                            'foto' => $santri->foto,
                        ];
                        return response()->json(['data' => $data], 200);
                    }
                // } else {
                //     $data = [
                //         'santri_id' => $santri->id,
                //         'no_induk' => $santri->no_induk,
                //         'name' => $santri->user->name,
                //         'foto' => $santri->foto,
                //     ];
                //     return response()->json(['data' => $data], 200);
                // }
            // }

            return response()->json(['message' => 'Tidak ada data santri dengan nomor induk <strong>' . $noinduk . '</strong>'], 200);
        }
        $santri = Santri::with('user')->get(['no_induk as id', 'user_id']);
        return view('pages.tahfidz.index', compact('santri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
