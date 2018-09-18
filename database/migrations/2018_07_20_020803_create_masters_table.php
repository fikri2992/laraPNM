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
            $table->string('NO_REKENING', 256)->nullable(true);
            $table->string('NoRekSebelumnya', 256)->nullable(true);
            $table->string('Nasabah_ID', 256)->nullable(true);
            $table->string('NamaNasabah', 50)->nullable(true);
            $table->string('No_HP', 13)->nullable(true);
            $table->string('StatusPaymentCenter', 11)->nullable(true);
            $table->string('NoID_KTP', 25)->nullable(true);
            $table->string('KodeProduk', 25)->nullable(true);
            $table->string('NamaProduk', 30)->nullable(true);
            $table->string('Jenis_Program', 17)->nullable(true);
            $table->date('TglRealisasi');
            $table->date('TglJatuhTempo');
            $table->date('Tgl_ANSURAN');
            $table->date('Tgl_Terakhir_Transaksi');
            $table->string('No_PK_Baru', 256)->nullable(true);
            $table->string('No_MPPM', 256)->nullable(true);
            $table->string('No_Scoring', 15)->nullable(true);
            $table->string('NoLKKU', 256)->nullable(true);
            $table->string('StatusAktif', 12)->nullable(true);
            $table->string('TipeKredit', 10)->nullable(true);
            $table->string('Restuktur_Ke', 3)->nullable(true);
            $table->string('StatusWO', 10)->nullable(true);
            $table->date('TglWO');
            $table->string('Jml_Pinjaman', 30)->nullable(true);
            $table->string('TotalBunga_Maargin', 25)->nullable(true);
            $table->string('JW', 5)->nullable(true);
            $table->string('BI_SUKU_BUNGA', 20)->nullable(true);
            $table->string('SUKU_BUNGA_PER_TAHUN', 20)->nullable(true);
            $table->string('OS_Pokok', 20)->nullable(true);
            $table->string('OS_Bunga', 20)->nullable(true);
            $table->string('kolektibilitas', 2)->nullable(true);
            $table->string('No_MemoAdjust', 25)->nullable(true);
            $table->string('Angsuran_Pokok', 25)->nullable(true);
            $table->string('Angsuran_Bunga', 12)->nullable(true);
            $table->string('Angsuran_Total', 12)->nullable(true);
            $table->string('Tunggakan_Pokok', 15)->nullable(true);
            $table->string('Tunggakan_Bunga', 15)->nullable(true);
            $table->string('Tunggakan_Denda', 15)->nullable(true);
            $table->string('Tgl_Tg_Pokok');
            $table->string('FT_Pokok', 5)->nullable(true);
            $table->string('Tgl_Tg_Bunga');
            $table->string('FT_Bunga', 5)->nullable(true);
            $table->string('Tgk_Angs_Ke', 4)->nullable(true);
            $table->string('Denda_bln_ini', 7)->nullable(true);
            $table->string('Status_Sup', 3)->nullable(true);
            $table->string('Kode_Pinjaman', 10)->nullable(true);
            $table->string('IJP', 5)->nullable(true);
            $table->string('Nominal_IJP', 8)->nullable(true);
            $table->string('Titipan_Asuransi_Kerugian', 10)->nullable(true);
            $table->string('Nilai_Likuidasi', 20)->nullable(true);
            $table->string('Provisi', 10)->nullable(true);
            $table->string('Premi', 10)->nullable(true);
            $table->string('Adm', 10)->nullable(true);
            $table->string('Notariel', 10)->nullable(true);
            $table->string('Amortisasi', 10)->nullable(true);
            $table->string('DCA', 10)->nullable(true);
            $table->string('RekDCA', 13)->nullable(true);
            $table->string('SaldoDCA', 10)->nullable(true);
            $table->string('Accrual', 15)->nullable(true);
            $table->string('PPAP', 10)->nullable(true);
            $table->string('SID_SEKTOR_EKONOMI', 5)->nullable(true);
            $table->string('Deskripsi_Bidang_Usaha', 100)->nullable(true);
<<<<<<< HEAD
            $table->string('Id_Account_Management', 10)->nullable(true);
            $table->string('kodeunit', 10)->nullable(true);
            $table->string('NamaUnit', 256)->nullable(true);
            $table->string('InisialCab', 10)->nullable(true);
            $table->string('NamaCabang', 256)->nullable(true);
            $table->string('Kota_ID', 10)->nullable(true);
            $table->string('Angsuran_Ke', 10)->nullable(true);
=======
            $table->string('Id_Account_Management', 9)->nullable(true);
            $table->string('kodeunit', 2)->nullable(true);
            $table->string('NamaUnit', 50)->nullable(true);
            $table->string('InisialCab', 3)->nullable(true);
            $table->string('NamaCabang', 10)->nullable(true);
            $table->string('Kota_ID', 4)->nullable(true);
            $table->string('Angsuran_Ke', 3)->nullable(true);
>>>>>>> grafik
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
