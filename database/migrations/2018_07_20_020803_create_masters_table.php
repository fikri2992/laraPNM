<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->integer('NO_REKENING');
            $table->integer('NoRekSebelumnya');
            $table->integer('Nasabah_ID');
            $table->integer('No_HP');
            $table->integer('StatusPaymantCenter');
            $table->integer('NoID_KTP');
            $table->integer('KodeProduk');
            $table->integer('NamaProduk');
            $table->integer('Jenis_Program');
            $table->integer('TglRealisasi');
            $table->integer('TglJatuhTempo');
            $table->integer('TGL_ANGSURAN');
            $table->integer('Tgl_Terakhir_Transasksi');
            $table->integer('No_PK_Baru');
            $table->integer('No_MPPM');
            $table->integer('No_Scoring');
            $table->integer('NoLKKU');
            $table->integer('StatusAktif');
            $table->integer('TipeKredit');
            $table->integer('Restruktur_Ke');
            $table->integer('StatusWO');
            $table->integer('TglWO');
            $table->integer('Jml_Pinjaman');
            $table->integer('TotalBunga_Maargin');
            $table->integer('JW');
            $table->integer('BI_SUKU_BUNGA');
            $table->integer('SUKU_BUNGA_PER_TAHUN');
            $table->integer('OS_POKOK');
            $table->integer('OS_BUNGA');
            $table->integer('No_MemoAdjust');
            $table->integer('Angsuran_Pokok');
            $table->integer('Angsuran_Bunga');
            $table->integer('Angsuran_Total');
            $table->integer('Tunggakan_Pokok');
            $table->integer('Tunggakan_Bunga');
            $table->integer('Tunggakan_Denda');
            $table->integer('Tanggal_Tg_Pokok');
            $table->integer('FT_Pokok');
            $table->integer('Tgl_Tg_Bunga');
            $table->integer('FT_Bunga');
            $table->integer('Tgk_Angs_Ke');
            $table->integer('Denda_bln_ini');
            $table->integer('Status_sup');
            $table->integer('kode_penjaminan');
            $table->integer('IJP');
            $table->integer('Nominal_IJP');
            $table->integer('Titipan_Asuransi_Kerugian');
            $table->integer('Nilai_Likuidasi');
            $table->integer('Provisi');
            $table->integer('Premi');
            $table->integer('Adm');
            $table->integer('Notariel');
            $table->integer('Amortisasi');
            $table->integer('DCA');
            $table->integer('RekDCA');
            $table->integer('SaldoDCA');
            $table->integer('Accurual');
            $table->integer('PPAP');
            $table->integer('SID_SEKTOR_EKONOMI');
            $table->integer('Deskripsi_Bidang_Usaha');
            $table->integer('id_Account_management');
            $table->integer('KodeUnit');
            $table->integer('NamaUnit');
            $table->integer('InisialCab');
            $table->integer('NamaCabang');
            $table->integer('KOTA_ID');
            $table->integer('angsuran_ke');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masters');
    }
}
