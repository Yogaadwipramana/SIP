<div class="page-content padding-30 container-fluid">

  <div class="page-header">
    <h1 class="page-title">Review Pemasukan / Penerimaan Barang</h1>

    <div class="page-header-actions">
      <a href="<?php echo base_url(); ?>" class="btn btn-sm btn-danger  btn-round">
        <i aria-hidden="true" class="icon wb-chevron-left-mini"></i>
        <span class="hidden-xs">Kembali</span>
      </a>
    </div>
  </div>

  <div class="panel">
    <div class="panel-body container-fluid">
      <div class="row row-lg">
        <div class="clearfix hidden-xs"></div>

        <div class="col-sm-12 col-md-12">
          <!-- Example Horizontal Form -->
          <div class="example-wrap">
            <h4 class="example-title">Tambah Data Pemasukan / Penerimaan Barang</h4>
            <p>
              **Isi kolom di bawah dengan benar.
            </p>
            <div class="example">
              <form class="form-horizontal" action="<?php echo base_url(); ?>PemasukanRBB/add_action_realisasi" method="post" enctype="multipart/form-data">




                <div class="form-group">
                  <label class="col-sm-2 control-label">No PO : </label>
                  <div class="col-sm-4">
                    <!-- <input type="text" autocomplete="off" placeholder="No PO"  name="po_number" class="form-control"> -->
                    <input type="text" autocomplete="off" placeholder="No PO" name="po_number" class="form-control" value="<?= $data_estimasi->po_number ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No/Tgl. Transaksi : </label>
                  <div class="col-sm-2">
                    <input type="text" autocomplete="off" placeholder="No Transaksi" name="no_transaksi" class="form-control" value="<?= $data_estimasi->no_transaksi ?>" readonly>
                  </div>
                  <div class="col-sm-2">
                    <input type="date" name="tgl_transaksi" class="form-control" placeholder="Tanggal Transaksi" value="<?= date('Y-m-d', strtotime($data_estimasi->tgl_transaksi)); ?>">
                  </div>
                  <label class="col-sm-2 control-label">Jenis Dokumen Pabean : </label>
                  <div class="col-sm-4">
                    <select data-plugin="select2" name='jenis_doc' id="jenis_doc" class="form-control">
                      <!-- <option value=''>None</option>-->
                      <option value="0">-- Pilih Jenis Dokumen --</option>
                      <?php

                      foreach ($dokumen as $value) {   ?>
                        <option value="<?= $value->id_dokumen ?>" <?= ($data_estimasi->jenis_doc == $value->id_dokumen) ? 'selected' : ''; ?>><?= $value->dokumen  ?></option>
                      <?php }
                      ?>

                    </select>
                    <span style="color: red;font-size: 10px;">* pilih Jenis Dokumen wajib di isi</span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Penerimaan : </label>
                  <div class="col-sm-4">
                    <select data-plugin="select2" name='jenis_pemasukan' id="jenis_pemasukan" class="form-control">
                      <option value="0">-- Pilih Jenis Penerimaan --</option>
                      <?php

                      foreach ($jenis as $value) {   ?>
                        <option value="<?= $value->id_jenis ?>" <?= ($data_estimasi->jenis_pemasukan == $value->id_jenis) ? 'selected' : ''; ?>><?= $value->jenis  ?></option>
                      <?php }
                      ?>

                    </select>
                    <span style="color: red;font-size: 10px;">* pilih Jenis Pemasukan wajib di isi</span>
                  </div>
                  <label class="col-sm-2 control-label">No Dokumen : </label>
                  <div class="col-sm-4">
                    <input type="text" autocomplete="off" placeholder="No Dokumen Pabean" name="no_dokumen_pabean" class="form-control" value="<?= $dataGet->no_dokumen_pabean ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">No. Bukti Penerimaan / Delivery Order (DO) : </label>
                  <div class="col-sm-4">
                    <input type="text" autocomplete="off" placeholder="No. Bukti Penerimaan / Delivery Order (DO)" name="no_bukti_penerimaan" class="form-control" value="<?= $dataGet->no_bukti_penerimaan ?>">
                  </div>
                  <label class="col-sm-2 control-label">Tanggal Dokumen : </label>
                  <div class="col-sm-4">
                    <input type="date" name="tgl_dokumen_pabean" class="form-control" placeholder="Tanggal lahir" value="<?= $dataGet->tgl_dokumen_pabean ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Pengirim Barang : </label>
                  <div class="col-sm-4">
                    <input type="text" autocomplete="off" placeholder="Nama Pengirim Barang" name="pengirim_barang" class="form-control" value="<?= $dataGet->id_client ?>">
                    <!-- <select data-plugin="select2" name='pengirim_barang' id="pengirim_barang" class="form-control">
                      <option value="0">-- Pilih pengirim --</option>
                      <?php

                      foreach ($client as $value) {   ?>
                        <option value="<?= $value->id_client ?>"><?= $value->company_name  ?></option>
                      <?php }
                      ?>

                    </select> -->
                    <span style="color: red;font-size: 10px;">* pilih Pengirim Barang wajib di isi</span>
                  </div>
                  <label class="col-sm-2 control-label">Negara Asal Barang : </label>
                  <div class="col-sm-4">
                    <select data-plugin="select2" name='countries' id="" class="form-control">
                      <option value="0">-- Pilih Negara Asal Barang --</option>
                      <?php
                      foreach ($bendera  as $value) {   ?>
                        <option value="<?= $value->id_negara_asal ?>" <?= ($data_estimasi->negara_asal == $value->id_negara_asal) ? 'selected' : ''; ?>><?= $value->nama_negara  ?></option>
                      <?php }
                      ?>
                    </select>
                  </div>

                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">File Estimasi : </label>
                  <div class="col-sm-4">
                    <a href="https://app.asinusa.co.id/sip/uploads/<?= $dataGet->file ?>" class="btn btn-sm btn-primary" style="align:center;" target="_blank"><i class="fa fa-folder-open-o"></i> Cek File</a>
                  </div>
                  <label class="col-sm-2 control-label">Nama Kapal : </label>
                  <div class="col-sm-4">
                    <input type="text" autocomplete="off" placeholder="Nama Kapal" name="nama_kapal" class="form-control" value="<?= $dataGet->nama_kapal ?>" readonly>
                  </div>
                </div>
                <div class="form-group">

                </div>
                <br>
                <div class="form-group">
                  <label class="col-sm-12 control-label" style="color: red;text-align: left;">HS Code : <?= $dataGet->id_barang; ?> - <?= $dataGet->nama_brg; ?></label>
                </div>
                <br>
                <h2>Data Estimasi</h2>
                <table width="100%" style="margin-top: 10px;" class="table table-hover table-bordered dataTable table-striped width-full overf">
                  <thead>
                    <tr>
                      <!-- <td style="width: 1%; border-bottom: 1px solid black;">
                      <a  class="btn btn-primary addRowPK" onclick="addPK()"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </td> -->

                      <!-- <p>Qty Tidak Boleh Lebih Dari 50000</p> -->

                      <!-- <td class="JudulHeadr" style="padding-left: 5px; width: 19%; border-bottom: 1px solid black;">HS Code</td> -->
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Qty</td>
                      <!-- <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Satuan</td> -->
                      <!-- <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">Lokasi Tujuan Terminal</td> -->
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Tank Penerimaan</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Mata Uang</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Harga Satuan Barang</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Total Nilai Barang</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Biaya Kurs</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Calculate Biaya Kurs (covertion price)</td>

                    </tr>

                  </thead>
                  <tbody id="myTablePK">
                    <?php
                    $no = 1;
                    $sumTotalLoopQty = 0;
                    $sumTotalLoopHarga = 0;
                    $sumTotalLoopTH = 0;
                    $sumTotalLoopBK = 0;
                    $sumTotalLoopCBK = 0;

                    foreach ($data_estimasi_result as $value_result) :
                      $sumTotalLoopQty += $value_result->jumlah;
                      $sumTotalLoopHarga += $value_result->harga;
                      $sumTotalLoopTH += $value_result->nilai_barang;
                      $sumTotalLoopBK += $value_result->biaya_kurs;
                      $sumTotalLoopCBK += $value_result->total_calculate;
                    ?>
                      <tr>
                        <td><input type="text" readonly="readonly" onkeyup="myFunctionKeyup(<?= $no ?>)" autocomplete="off" id="qty_get<?= $no ?>" name="qty_get<?= $no ?>" class="form-control" value="<?= number_format($value_result->jumlah, 0, ".", ""); ?>"></td>
                        <td>
                          <select id="tank_real<?= $no ?>" name="tank_real<?= $no ?>" class="form-control" style="width:100%;" disabled="disabled">
                            <option value="">Pilih</option>
                            <?php foreach ($tank2 as $value) : ?>
                              <option value="<?php echo $value->tank; ?>" <?= ($value_result->terminal_tank == $value->tank) ? 'selected' : ''; ?>><?php echo $value->nama_tangki_alias; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </td>
                        <td>
                          <select id="kurs_real<?= $no ?>" name="kurs_real<?= $no ?>" class="form-control classCur" style="width:100%;" disabled="disabled">
                            <option value="">Pilih</option>
                            <?php foreach ($kurs as $value) : ?>
                              <option value="<?php echo $value->id_kurs; ?>" <?= ($value_result->id_mata_uang == $value->id_kurs) ? 'selected' : ''; ?>><?php echo $value->mata_uang; ?></option>
                            <?php endforeach; ?>
                          </select>
                        </td>
                        <td><input type="text" id="harga_satuan_real<?= $no ?>" name="harga_satuan_real<?= $no ?>" class="form-control" onkeyup="myFunctionKeyup(<?= $no ?>)" value="<?= number_format($value_result->harga, 0, ".", ""); ?>" readonly="readonly"></td>
                        <td><input type="text" autocomplete="off" id="hasil_real_show<?= $no ?>" value="<?= number_format($value_result->nilai_barang, 2, ",", "."); ?>" name="hasil_real_show<?= $no ?>" class="form-control" readonly="readonly"></td>
                        <td><input type="text" id="harga_satuan_real<?= $no ?>" name="harga_satuan_real<?= $no ?>" class="form-control" onkeyup="myFunctionKeyup(<?= $no ?>)" value="<?= number_format($value_result->biaya_kurs, 2, ".", ""); ?>" readonly="readonly"></td>
                        <td><input type="text" autocomplete="off" id="total_calculate<?= $no ?>" value="<?= number_format($value_result->total_calculate, 2, ",", "."); ?>" name="total_calculate<?= $no ?>" class="form-control classTotalBiayaKurs" readonly="readonly"></td>
                      </tr>
                      <input style="display: none;" type="text" value="<?= $no++ ?>">
                    <?php endforeach; ?>


                  </tbody>


                  <p id="demo"></p>
                  <!-- <div id="dataLimitPK"></div> -->
                  <!-- <tfoot>
                    <td></td>
                    <td></td>
                    <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">
                    <input type="text" placeholder="Total Qty" id="totalhasil3" class="form-control" value="0" readonly>
                  </td>
                  </tfoot> -->
                  <tfoot>
                    <tr style="text-align: center;">
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input disabled="disabled" type="text" id="totalshowqty" class="form-control" value="<?= $sumTotalLoopQty ?>"></td>
                      <!-- <td class="JudulHeadr" style="padding-left: 5px; width: 14%;">Total</td> -->
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input type="text" id="totalshowharga" class="form-control" value="<?= number_format($sumTotalLoopHarga, 2, ",", "."); ?>" style="display:none;"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input disabled="disabled" type="text" id="totalshowTH" class="form-control" value="<?= number_format($sumTotalLoopTH, 2, ",", "."); ?>"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input type="text" id="totalshowBK" class="form-control" value="<?= number_format($sumTotalLoopBK, 2, ",", "."); ?>" style="display:none;"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input disabled="disabled" type="text" id="totalshowCBK" class="form-control" value="<?= number_format($sumTotalLoopCBK, 2, ",", "."); ?>"></td>
                      <!--  <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">Bulan</td>
                        <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">Tahun</td> -->
                    </tr>
                  </tfoot>
                </table>
                <br>

                <h2>Data Relisasi</h2>
                <table width="100%" style="margin-top: 10px;" class="table table-hover table-bordered dataTable table-striped width-full overf">
                  <thead>
                    <tr>
                      <!-- <td style="width: 1%; border-bottom: 1px solid black;">
                      <a  class="btn btn-primary addRowPK" onclick="addPK()"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </td> -->

                      <!-- <p>Qty Tidak Boleh Lebih Dari 50000</p> -->

                      <!-- <td class="JudulHeadr" style="padding-left: 5px; width: 19%; border-bottom: 1px solid black;">HS Code</td> -->
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Qty</td>
                      <!-- <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Satuan</td> -->
                      <!-- <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">Lokasi Tujuan Terminal</td> -->
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Tank Penerimaan</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Mata Uang</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Harga Satuan Barang</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Total Nilai Barang</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Biaya Kurs</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Calculate Biaya Kurs (covertion price)</td>
                    </tr>

                  </thead>
                  <tbody id="myTablePK">

                    <?php
                    $no = 1;
                    $sumTotalLoopQty = 0;
                    $sumTotalLoopHarga = 0;
                    $sumTotalLoopTH = 0;
                    $sumTotalLoopBK = 0;
                    $sumTotalLoopCBK = 0;

                    foreach ($data_estimasi_result as $value_result) :

                      $get_estimasi = $this->db->query("SELECT jumlah FROM barang_masuk_estimasi WHERE no_transaksi = '$value_result->no_transaksi' AND terminal_tank = '$value_result->terminal_tank'")->row();
                      $get_realisasi = $this->db->query("SELECT jumlah FROM barang_masuk_realisasi WHERE no_transaksi = '$value_result->no_transaksi' AND terminal_tank = '$value_result->terminal_tank'")->row();

                      $hasil_hitung = 0; // Default jika data tidak ditemukan

                      if ($get_estimasi && $get_realisasi) {
                        $hasil_hitung = $get_estimasi->jumlah - $get_realisasi->jumlah;
                      }


                      // Accumulate totals for calculations
                      $sumTotalLoopQty += $value_result->jumlah;
                      $sumTotalLoopHarga += $value_result->harga;
                      $sumTotalLoopTH += $value_result->nilai_barang;
                      $sumTotalLoopBK += $value_result->biaya_kurs;
                      $sumTotalLoopCBK += $value_result->total_calculate;
                    ?>
                      <tr>
                        <td>
                          <input type="text" autocomplete="off" id="qty_real<?= $no ?>" name="qty_real<?= $no ?>" readonly="readonly" class="form-control classQty" value="<?= number_format($value_result->jumlah, 0, ".", ""); ?>" onkeyup="myFunctionKeyup(<?= $no ?>)">
                          <span style="color:red;">
                            Selisih qty : <p id="selisihqty<?= $no ?>"><?= number_format($hasil_hitung, 0, ".", ""); ?></p>
                          </span>
                        </td>

                        <td>
                          <select id="tank_real<?= $no ?>" name="tank_real<?= $no ?>" class="form-control" style="width:100%;" disabled="disabled">
                            <option value="">Pilih</option>
                            <?php
                            foreach ($tank2 as $value) {
                            ?>
                              <option value="<?php echo $value->tank; ?>" <?= ($value_result->terminal_tank == $value->tank) ? 'selected' : ''; ?>><?php echo $value->nama_tangki_alias; ?></option>
                            <?php } ?>
                          </select>
                        </td>
                        <td>
                          <select id="kurs_real<?= $no ?>" name="kurs_real<?= $no ?>" class="form-control classCur" style="width:100%;" disabled="disabled">
                            <option value="">Pilih</option>
                            <?php
                            foreach ($kurs as $value) {
                            ?>
                              <option value="<?php echo $value->id_kurs; ?>" <?= ($ccc->id_mata_uang == $value->id_kurs) ? 'selected' : ''; ?>><?php echo $value->mata_uang; ?></option>
                            <?php } ?>
                          </select>
                        </td>
                        <td><input type="text" id="harga_satuan_real<?= $no ?>" name="harga_satuan_real<?= $no ?>" class="form-control" onkeyup="myFunctionKeyup(<?= $no ?>)" value="<?= number_format($value_result->harga, 0, ".", ""); ?>" readonly></td>
                        <td><input type="text" autocomplete="off" id="hasil_real_show<?= $no ?>" value="<?= number_format($value_result->nilai_barang, 2, ",", "."); ?>" name="hasil_real_show<?= $no ?>" class="form-control" readonly="readonly"><input type="text" autocomplete="off" id="hasil_real<?= $no ?>" name="hasil_real<?= $no ?>" value="<?= $value_result->nilai_barang ?>" class="form-control" style="display: none;"></td>
                        <td><input type="text" id="biaya_kurs_real<?= $no ?>" name="biaya_kurs_real<?= $no ?>" class="form-control" onkeyup="myFunctionKeyup(<?= $no ?>)" value="<?= number_format($value_result->biaya_kurs, 2, ".", ""); ?>" readonly><a href="https://www.bi.go.id/id/statistik/informasi-kurs/transaksi-bi/default.aspx" target="_blank" readonly> Cek Nilai Biaya Kurs</a></td>
                        <td><input type="text" autocomplete="off" id="total_calculate<?= $no ?>" value="<?= number_format($value_result->total_calculate, 2, ",", "."); ?>" name="total_calculate<?= $no ?>" class="form-control classTotalBiayaKurs" readonly="readonly"><input type="text" autocomplete="off" id="hasil_get<?= $no ?>" name="hasil_get<?= $no ?>" value="<?= $value_result->nilai_barang ?>" class="form-control" style="display: none;"></td>
                      </tr>
                      <input style="display: none;" type="text" value="<?= $no++ ?>">
                    <?php endforeach; ?>

                  </tbody>


                  <p id="demo"></p>
                  <!-- <div id="dataLimitPK"></div> -->
                  <!-- <tfoot>
                    <td></td>
                    <td></td>
                    <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">
                    <input type="text" placeholder="Total Qty" id="totalhasil3" class="form-control" value="0" readonly>
                  </td>
                  </tfoot> -->
                  <tfoot>
                    <tr style="text-align: center;">
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input type="text" id="totalshowqty" class="form-control" value="<?= $sumTotalLoopQty ?>" readonly="readonly"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input type="text" id="totalshowharga" class="form-control" value="<?= number_format($sumTotalLoopHarga, 2, ",", "."); ?>" style="display:none;"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input type="text" id="totalshowTH" class="form-control" value="<?= number_format($sumTotalLoopTH, 2, ",", "."); ?>" readonly="readonly"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input type="text" id="totalshowBK" class="form-control" value="<?= number_format($sumTotalLoopBK, 2, ",", "."); ?>" style="display:none;"></td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input type="text" id="totalshowCBK" class="form-control" value="<?= number_format($sumTotalLoopCBK, 2, ",", "."); ?>" readonly="readonly"></td>
                      <!--  <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">Bulan</td>
                        <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">Tahun</td> -->
                    </tr>
                  </tfoot>
                </table>
                <br>

                <!-- <div class="form-group">
                  <div class="col-sm-8">
                    <input class="btn btn-primary" type="submit" value="Simpan">
                    <button class="btn btn-default btn-outline" type="reset">Reset</button>
                  </div>
                </div> -->
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 mb-2">
                      <a style="text-decoration:none;" class="btn btn-success mb-2" onclick="approveAlert('<?php echo base_url('Approve/approve_barang_masuk/' . $data_estimasi->no_transaksi); ?>')">
                        <i class="icon wb-check" aria-hidden="true"></i> Approve
                      </a>
                    </div>
                    <div class="col-md-4 mb-2">
                      <a style="text-decoration:none;" class="btn btn-warning mb-2" onclick="revisiAlert('<?php echo base_url('Approve/revisi_barang_masuk/' . $data_estimasi->no_transaksi); ?>')">
                        <i class="fa fa-pencil" aria-hidden="true"></i> Revisi
                      </a>
                    </div>
                    <div class="col-md-4 mb-2">
                      <a style="text-decoration:none;" class="btn btn-danger" onclick="rejectAlert('<?php echo base_url('Approve/reject_barang_masuk/' . $data_estimasi->no_transaksi); ?>')">
                        <i class="icon wb-close" aria-hidden="true"></i> Not Ok
                      </a>
                    </div>
                  </div>
                </div>


              </form>
            </div>
          </div>
          <!-- End Example Horizontal Form -->

        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_URL() ?>jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  function approveAlert(url) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You want to approve this transaction!",
      icon: 'success',
      showCancelButton: true,
      confirmButtonColor: '#28a745',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, approve it!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  }

  function revisiAlert(url) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You want to revise this transaction!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#ffc107',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, revise it!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  }

  function rejectAlert(url) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You want to reject this transaction!",
      icon: 'error',
      showCancelButton: true,
      confirmButtonColor: '#dc3545',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, reject it!'
    }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = url;
      }
    });
  }
</script>