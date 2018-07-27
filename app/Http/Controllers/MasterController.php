<?php

namespace App\Http\Controllers;

use App\master;
use File;
use Excel;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\master  $master
     * @return \Illuminate\Http\Response
     */
    public function show(master $master)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(master $master)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, master $master)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(master $master)
    {
        //
    }

    public function import(Request $request)
    {
        ini_set('max_execution_time', 580);
        $dateinit = \Carbon\Carbon::parse($request->dateini);
        $datefim = \Carbon\Carbon::parse($request->datefim);
        $this->validate($request, array(
            'file' => 'required'
        ));
        if ($request->hasFile('file')) {
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
                $path = $request->file->getRealPath();
                $data = Excel::filter('chunk')->load($path)->chunk(250, function ($data) {
                    if (!empty($data) && $data->count()) {
                        foreach ($data as $key => $value) {
                            $insert[] = [
                                'NO_REKENING' => $value->no_rekening,
                                'NoRekSebelumnya' => $value->noreksebelumnya,
                                'Nasabah_ID' => $value->nasabah_id,
                                'NamaNasabah' => $value->namanasabah,
                                'No_HP' => $value->no_hp,
                                'StatusPaymentCenter' => $value->statuspaymentcenter,
                                'NoID_KTP' => $value->noid_ktp,
                                'KodeProduk' => $value->kodeproduk,
                                'NamaProduk' => $value->namaproduk,
                                'Jenis_Program' => $value->jenis_program,
                                'TglRealisasi' => date('Y-m-d', strtotime(str_replace('/', '-', $value->tglrealisasi))),
                                'TglJatuhTempo' => date('Y-m-d', strtotime(str_replace('/', '-', $value->tgljatuhtempo))),
                                'Tgl_ANSURAN' => date('Y-m-d', strtotime(str_replace('/', '-', $value->tgl_ansuran))),
                                'Tgl_Terakhir_Transaksi' => date('Y-m-d', strtotime(str_replace('/', '-', $value->tgl_terakhir_transaksi))),
                                'No_PK_Baru' => $value->no_pk_baru,
                                'No_MPPM' => $value->no_mppm,
                                'No_Scoring' => $value->no_scoring,
                                'NoLKKU' => $value->nolkku,
                                'StatusAktif' => $value->statusaktif,
                                'TipeKredit' => $value->tipekredit,
                                'Restuktur_Ke' => $value->restuktur_ke,
                                'StatusWO' => $value->statuswo,
                                'TglWO' => date('Y-m-d', strtotime(str_replace('/', '-', $value->tglwo))),
                                'Jml_Pinjaman' => $value->jml_pinjaman,
                                'TotalBunga_Maargin' => $value->totalbunga_maargin,
                                'JW' => $value->jw,
                                'BI_SUKU_BUNGA' => $value->bi_suku_bunga,
                                'SUKU_BUNGA_PER_TAHUN' => $value->suku_bunga_per_tahun,
                                'OS_Pokok' => $value->os_pokok,
                                'OS_Bunga' => $value->os_bunga,
                                'kolektibilitas' => $value->kolektibilitas,
                                'No_MemoAdjust' => $value->no_memoadjust,
                                'Angsuran_Pokok' => $value->angsuran_pokok,
                                'Angsuran_Bunga' => $value->angsuran_bunga,
                                'Angsuran_Total' => $value->angsuran_total,
                                'Tunggakan_Pokok' => $value->tunggakan_pokok,
                                'Tunggakan_Bunga' => $value->tunggakan_bunga,
                                'Tunggakan_Denda' => $value->tunggakan_denda,
                                'Tgl_Tg_Pokok' => date('Y-m-d', strtotime(str_replace('/', '-', $value->tgl_tg_pokok))),
                                'FT_Pokok' => $value->ft_pokok,
                                'Tgl_Tg_Bunga' => date('Y-m-d', strtotime(str_replace('/', '-', $value->tgl_tg_bunga))),
                                'FT_Bunga' => $value->ft_bunga,
                                'Tgk_Angs_Ke' => $value->tgk_angs_ke,
                                'Denda_bln_ini' => $value->denda_bln_ini,
                                'Status_Sup' => $value->status_sup,
                                'Kode_Pinjaman' => $value->kode_penjaminan,
                                'IJP' => $value->ijp,
                                'Nominal_IJP' => $value->nominal_ijp,
                                'Titipan_Asuransi_Kerugian' => $value->titipan_asuransi_kerugian,
                                'Nilai_Likuidasi' => $value->nilai_likuidasi,
                                'Provisi' => $value->provisi,
                                'Premi' => $value->premi,
                                'Adm' => $value->adm,
                                'Notariel' => $value->notariel,
                                'Amortisasi' => $value->amortisasi,
                                'DCA' => $value->dca,
                                'RekDCA' => $value->rekdca,
                                'SaldoDCA' => $value->saldodca,
                                'Accrual' => $value->accrual,
                                'PPAP' => $value->ppap,
                                'SID_SEKTOR_EKONOMI' => $value->sid_sektor_ekonomi,
                                'Deskripsi_Bidang_Usaha' => $value->deskripsi_bidang_usaha,
                                'Id_Account_Management' => $value->id_account_management,
                                'KodeUnit' => $value->kodeunit,
                                'NamaUnit' => $value->namaunit,
                                'InisialCab' => $value->inisialcab,
                                'NamaCabang' => $value->namacabang,
                                'Kota_ID' => $value->kota_id,
                                'Angsuran_Ke' => $value->angsuran_ke,
                            ];
                        }
                        if (!empty($insert)) {
                            $insertData = DB::table('lists')->insert($insert);
                            if ($insertData) {
                                Session::flash('success', 'Your Data has successfully imported');
                            } else {
                                Session::flash('error', 'Error inserting the data..');
                                return back();
                            }
                        }
                    }
                    return back();
                });
            } else {
                Session::flash('error', 'File is a ' . $extension . ' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }
}
