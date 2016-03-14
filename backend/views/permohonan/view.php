<?php
use yii\helpers\Html;
use kartik\detail\DetailView;

$this->title = $model->permohonan_id;
$this->params['breadcrumbs'][] = ['label' => 'Permohonan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row" align="center">
    <div class="col-lg-15" align="center">
        <h4>BUTIRAN PERMOHONAN PEMBELIAN PERALATAN</h4><br>
            <div class="table-responsive" align="center">
                <table class="table table-bordered table-hover table-striped" align="center">
                    <thead>
                        <tr class="success" align="center">
                            <th>ID Pemohon</th>
                            <th>Tarikh Permohonan</th>
                            <th>Kelulusan Jawatankuasa Teknikal Berkaitan</th>
                            <th>Tujuan Pembelian</th>
                            <th>Kategori Permohonan Peralatan</th>
                            <th>Jenis Peruntukan</th>                            
                            <th>Sesi Pengajian / Tahun Peralatan Wajib Disediakan</th>                            
                            <th>Cadangan Lokasi Peralatan Ditempatkan Sekiranya Lulus</th>                            
                            <th>Status Permohonan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $model->user_id ?></td>
                            <td><?= $model->permohonan_tarikh ?></td>
                            <td><?= $model->kelulusanJK_id ?></td>
                            <td><?= $model->permohonan_tujuanBeli ?></td>
                            <td><?= $model->katPermohonan_id ?></td>
                            <td><?= $model->permohonan_jenisPeruntukan ?></td>
                            <td><?= $model->tahunSedia_id ?></td>
                            <td><?= $model->permohonan_lokasiCadangan ?></td>
                            <td><?= $model->statusPermohonan_id ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>
<div class="row" align="center">
    <div class="col-lg-15" align="center">
        <br><br><h4>JADUAL PERALATAN</h4><br>
            <div class="table-responsive" align="center">
                <table class="table table-bordered table-hover table-striped" align="center">
                    <thead>
                        <tr class="success" align="center">
                            <th>Peralatan Yang Diperlukan</th>
                            <th>Kuantiti</th>
                            <th>Harga Seunit</th>
                            <th>Jumlah Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $modelPeralatan->peralatan_nama ?></td>
                            <td><?= $modelPeralatan->peralatan_kuantiti ?></td>
                            <td><?= $modelPeralatan->peralatan_hargaSeunit ?></td>
                            <td><?= $modelPeralatan->peralatan_hargaSeunit ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>