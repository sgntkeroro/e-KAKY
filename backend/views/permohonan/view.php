<?php
use yii\helpers\Html;
use kartik\detail\DetailView;

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
                            <th>Kategori Permohonan</th>
                            <th>Tujuan Pembelian</th>
                            <th>Jenis Peruntukan</th>
                            <th>Tahun Peralatan Disediakan</th>
                            <th>Lokasi Cadangan</th>
                            <th>Status Permohonan</th>
                        </tr>
                    </thead>
                    <tbody>                        
                            <?php 
                                foreach ($view as $row){
                                    echo "<tr>";
                                    echo "<td>".$row['userID']."</td>";
                                    echo "<td>".$row['tarikhPermohonan']."</td>";
                                    echo "<td>".$row['kelulusanJK']."</td>";
                                    echo "<td>".$row['katPermohonan']."</td>";
                                    echo "<td>".$row['tujuanPembelian']."</td>";
                                    echo "<td>".$row['jenisPeruntukan']."</td>";
                                    echo "<td>".$row['tahunSedia']."</td>";
                                    echo "<td>".$row['lokasiCadangan']."</td>";
                                    echo "<td>".$row['statusPermohonan']."</td>";
                                    echo "</tr>";
                                }
                            ?>                        
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
                        <tr class="warning" align="center">
                            <th>Peralatan Yang Diperlukan</th>
                            <th>Kuantiti</th>
                            <th>Harga Seunit</th>
                        </tr>
                    </thead>
                    <tbody>                        
                            <?php 
                                foreach ($view as $row){
                                    echo "<tr>";
                                    echo "<td>".$row['peralatanNama']."</td>";
                                    echo "<td>".$row['peralatanKuantiti']."</td>";
                                    echo "<td>".$row['peralatanHarga']."</td>";
                                    echo "</tr>";
                                }
                            ?>                        
                    </tbody>
                </table>
            </div>
    </div>
</div>