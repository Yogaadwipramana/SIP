<div class="page-content padding-30 container-fluid">

  <div class="page-header">
    <h1 class="page-title">Review Pengeluaran Barang</h1>
    
    <div class="page-header-actions">
      <a href="<?php echo base_url();?>" class="btn btn-sm btn-danger  btn-round">
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
              <h4 class="example-title">Tambah Data Pengeluaran Barang</h4>
              <p>
                **Isi kolom di bawah dengan benar.
              </p>
              <div class="example">
                <form class="form-horizontal" action="<?php echo base_url();?>PengeluaranRBB/add_action_realisasi" method="post" enctype="multipart/form-data">

                

                <div class="form-group">
                    <label class="col-sm-2 control-label">No PO : </label>
                    <div class="col-sm-4">
                      <input type="text" autocomplete="off" placeholder="No PO"  name="po_number" class="form-control" value="<?= $data_estimasi->po_number ?>">
                    </div>
                    <label class="col-sm-2 control-label">Pengeluaran Kargo : </label>
                      <div class="col-sm-2">
                        <input type="date" autocomplete="off" placeholder="" name="pengeluaran_kargo_tgl" class="form-control"  value="<?= $data_estimasi->pengeluaran_kargo_tgl ?>">
                      </div>
                      <div class="col-sm-2">
                        <input type="time" name="pengeluaran_kargo_time" class="form-control" placeholder="" value="<?= $data_estimasi->pengeluaran_kargo_time ?>">
                      </div>  
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Jenis Keluar : </label>
                    <div class="col-sm-4">
                      <select data-plugin="select2" name='jenis_keluar' id="jenis_keluar" class="form-control">
                        <option> Pilih Jenis Keluar </option>
                                    <?php

                                    foreach($jenis as $value)
                                        {   ?>
                                         <option value="<?= $value->id_jenis ?>" <?= ($data_estimasi->jenis_keluar == $value->id_jenis) ? 'selected' : '';?> ><?= $value->jenis  ?></option>
                                     <?php }
                                     ?>

                      </select>
                    </div>
                    <label class="col-sm-2 control-label">Jenis Dokumen : </label>
                    <div class="col-sm-4">
                      <select data-plugin="select2" name='jenis_doc' id="jenis_doc" class="form-control">
                         <!-- <option value=''>None</option>-->
                         <option> Pilih Jenis Dokumen </option>
                                    <?php

                                    foreach($dokumen as $value)
                                        {   ?>
                                         <option value="<?= $value->id_dokumen ?>" <?= ($data_estimasi->jenis_doc == $value->id_dokumen) ? 'selected' : '';?> ><?= $value->dokumen  ?></option>
                                     <?php }
                                     ?>

                      </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Bukti Pengeluaran : </label>
                    <div class="col-sm-4">
                      <input type="text" autocomplete="off" placeholder="Bukti Penerimaan"  name="no_bukti_penerimaan" class="form-control" value="<?= $data_estimasi->no_bukti_pengeluaran ?>">
                    </div>
                    <label class="col-sm-2 control-label">No Dokumen : </label>
                    <div class="col-sm-4">
                      <input type="text" autocomplete="off" placeholder="No Dokumen"  name="no_dokumen_pabean" class="form-control" value="<?= $data_estimasi->no_dokumen_pabean ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Penerima Barang : </label>
                    <div class="col-sm-4">
                      <input type="text" autocomplete="off" placeholder="Nama Pengirim Barang"  name="pengirim_barang" class="form-control" value="<?= $data_estimasi->pembeli_penerima ?>">
                      <!-- <select data-plugin="select2" name='pengirim_barang' id="pengirim_barang" class="form-control">
                        <option> Pilih pengirim </option>
                                    <?php

                                    foreach($client as $value)
                                        {   ?>
                                         <option value="<?= $value->id_client ?>-<?= $value->company_name  ?>" <?= ($data_estimasi->pembeli_penerima == $value->company_name) ? 'selected' : '';?> ><?= $value->company_name  ?></option>
                                     <?php }
                                     ?>

                      </select> -->
                    </div>
                    <label class="col-sm-2 control-label">Tanggal Dokumen : </label>
                    <div class="col-sm-4">
                      <input type="date" name="tgl_dokumen_pabean" class="form-control" placeholder="Tanggal lahir" value="<?= $data_estimasi->tgl_dokumen_pabean ?>">
                    </div>
                </div>
                
                <div class="form-group">
                    <?php if($data_estimasi->file != ""){ ?>
                    <label class="col-sm-2 control-label">File Estimasi : </label>
                          <div class="col-sm-4">
                              <a href="https://app.asinusa.co.id/sip/uploads/<?= $data_estimasi->file ?>" class="btn btn-sm btn-primary" style="align:center;" target="_blank"><i class="fa fa-folder-open-o"></i>  Cek File</a>
                          </div>
                    <?php } ?>      
                    <label class="col-sm-2 control-label">Negara Tujuan : </label>
                    <div class="col-sm-4">
                      <input type="text" autocomplete="off" placeholder="Negara Asal"  name="negara_asal" class="form-control" value="<?= $data_estimasi->negara_tujuan ?>">
                    </div>
                  </div>
                  
                        <div class="form-group">
                          
                      </div>
                  
                   <br>
                <h2>Data Estimasi</h2>
                <table width="100%" style="margin-top: 10px;" class="table table-hover table-bordered dataTable table-striped width-full overf">
                <thead>
                  <tr style="text-align: center;">
                    <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Tank</td>
                    <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Qty</td>
                    <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Mata Uang</td>
                    <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Harga</td>
                    <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Total</td>
                    <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Biaya Kurs</td>
                    <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Calculate Biaya Kurs (covertion price)</td>
                   <!--  <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">Bulan</td>
                    <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">Tahun</td> -->
                  </tr>
                </thead>
                <tbody id="myTablePK" >
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
                  <!-- <input type="text" name="keterangan" style="display: none;" value="<?= $notif->id_barang; ?>">
                          <input type="text" name="qty" style="display: none;" value="<?= $notif->id_satuan; ?>">
                          <input type="text" name="terminal" style="display: none;" value="<?= $terminal2->id_terminal; ?>"> -->
                    <tr style="text-align: center;">
                      <td>
                        <select data-plugin="select2" id="tank_get<?= $no ?>" name="tank_get<?= $no ?>" class="form-control" disabled="disabled">
                          <option value="">Pilih</option>
                          <?php
                            foreach ($tank2 as $value) {
                          ?>
                            <option value="<?php echo $value->tank; ?>" <?= ($value_result->terminal_tank == $value->tank) ? 'selected' : '';?> ><?php echo $value->nama_tangki_alias; ?></option>
                          <?php } ?>

                        </select>
                      </td>
                      <td><input type="text" autocomplete="off" id="qty_get<?= $no ?>" name="qty_get<?= $no ?>" class="form-control" value="<?= number_format($value_result->jumlah, 0, ".", ""); ?>" readonly="readonly"></td>
                      <td>
                        <select data-plugin="select2" id="kurs_get<?= $no ?>" name="kurs_get<?= $no ?>" class="form-control classCur" disabled="disabled">
                          <option value="">Pilih</option>
                          <?php
                            foreach ($kurs as $value) {
                          ?>
                            <option value="<?php echo $value->id_kurs; ?>" <?= ($value_result->id_mata_uang == $value->id_kurs) ? 'selected' : '';?> ><?php echo $value->mata_uang; ?></option>
                          <?php } ?>
                        </select>
                      </td>
                      <td><input type="text" id="harga_satuan_get<?= $no ?>" name="harga_satuan_get<?= $no ?>" class="form-control" value="<?= number_format($value_result->harga, 0, ".", ""); ?>" disabled="disabled"></td>
                      <td><input type="text" autocomplete="off" id="hasil_get_show<?= $no ?>" value="<?= number_format($value_result->nilai_barang, 2, ",", "."); ?>" name="hasil_get_show<?= $no ?>" class="form-control" readonly="readonly" disabled="disabled"><input type="text" autocomplete="off" id="hasil_get<?= $no ?>" name="hasil_get<?= $no ?>" value="<?= $value_result->nilai_barang ?>" class="form-control" style="display: none;" value="" ></td>
                      <td><input type="text" autocomplete="off" id="hasil_get_show<?= $no ?>" value="<?= number_format($value_result->biaya_kurs, 2, ",", "."); ?>" name="hasil_get_show<?= $no ?>" class="form-control" readonly="readonly" disabled="disabled"><input type="text" autocomplete="off" id="hasil_get<?= $no ?>" name="hasil_get<?= $no ?>" value="<?= $value_result->nilai_barang ?>" class="form-control" style="display: none;" value="" ></td>
                      <td><input type="text" autocomplete="off" id="hasil_get_show<?= $no ?>" value="<?= number_format($value_result->total_calculate, 2, ",", "."); ?>" name="hasil_get_show<?= $no ?>" class="form-control" readonly="readonly" disabled="disabled"><input type="text" autocomplete="off" id="hasil_get<?= $no ?>" name="hasil_get<?= $no ?>" value="<?= $value_result->nilai_barang ?>" class="form-control" style="display: none;" value="" ></td>
                   </tr>
                   <input style="display: none;" type="text" value="<?= $no++ ?>">
                   <?php

                      endforeach;
                      ?>
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
                        <td class="JudulHeadr" style="padding-left: 5px; width: 14%;">Total</td>
                        <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input disabled="disabled" type="text" id="totalshowqty" class="form-control" value="<?= $sumTotalLoopQty ?>"></td>
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
                 <h2>Data Realisasi</h2>
                 <table width="100%" style="margin-top: 10px;" class="table table-striped">
                  <thead>
                    <tr style="text-align: center;">
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Tank</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Qty</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Mata Uang</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Harga</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Total</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Biaya Kurs</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 14%; border-bottom: 1px solid black;">Calculate Biaya Kurs (covertion price)</td>
                     <!--  <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">Bulan</td>
                      <td class="JudulHeadr" style="padding-left: 5px; width: 10%; border-bottom: 1px solid black;">Tahun</td> -->
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
                        foreach ($data_realisasi_result as $value_result) :
                              $sumTotalLoopQty += $value_result->jumlah;
                              $sumTotalLoopHarga += $value_result->harga;
                              $sumTotalLoopTH += $value_result->nilai_barang;
                              $sumTotalLoopBK += $value_result->biaya_kurs;
                              $sumTotalLoopCBK += $value_result->total_calculate;
                          ?>
                    <!-- <input type="text" name="keterangan" style="display: none;" value="<?= $notif->id_barang; ?>">
                            <input type="text" name="qty" style="display: none;" value="<?= $notif->id_satuan; ?>">
                            <input type="text" name="terminal" style="display: none;" value="<?= $terminal2->id_terminal; ?>"> -->
                      <tr style="text-align: center;">
                        <td>
                          <select data-plugin="select2" id="tank_real<?= $no ?>" name="tank_real<?= $no ?>" class="form-control" disabled="disabled">
                            <option value="">Pilih</option>
                            <?php
                              foreach ($tank2 as $value) {
                            ?>
                              <option value="<?php echo $value->tank; ?>" <?= ($value_result->terminal_tank == $value->tank) ? 'selected' : '';?> ><?php echo $value->nama_tangki_alias; ?></option>
                            <?php } ?>

                          </select>
                        </td>
                        <td><input type="text" autocomplete="off" id="qty_real<?= $no ?>" name="qty_real<?= $no ?>" readonly="readonly" class="form-control classQty" value="<?= number_format($value_result->jumlah, 0, ".", ""); ?>" onkeyup="myFunctionKeyup(<?= $no ?>)"><span style="color:red;">Selisih qty :<p id="selisihqty<?= $no ?>">0</p> </span></td>
                        <td>
                          <select data-plugin="select2" id="kurs_real<?= $no ?>" name="kurs_real<?= $no ?>" class="form-control classCur" disabled="disabled">
                            <option value="">Pilih</option>
                            <?php
                              foreach ($kurs as $value) {
                                
                            ?>
                              <option value="<?php echo $value->id_kurs; ?>" <?= ($value_result->id_mata_uang == $value->id_kurs) ? 'selected' : '';?> ><?php echo $value->mata_uang; ?></option>
                            <?php } ?>
                          </select>
                        </td>
                        <td><input type="text" id="harga_satuan_real<?= $no ?>" name="harga_satuan_real<?= $no ?>" class="form-control classHarga" value="<?= number_format($value_result->harga, 0, ".", "."); ?>" onkeyup="myFunctionKeyup(<?= $no ?>)" readonly="readonly"></td>
                        <td><input type="text" autocomplete="off" id="hasil_real_show<?= $no ?>" value="<?= number_format($value_result->nilai_barang, 2, ",", "."); ?>" name="hasil_real_show<?= $no ?>" class="form-control classTotalHarga" readonly="readonly" ><input type="text" autocomplete="off" id="hasil_real<?= $no ?>" name="hasil_real<?= $no ?>" value="<?= $value_result->nilai_barang ?>" style="display: none;"></td>
                        <td><input type="text" autocomplete="off" id="biaya_kurs_real<?= $no ?>" value="<?= number_format($value_result->biaya_kurs, 2, ",", "."); ?>" readonly="readonly" name="biaya_kurs_real<?= $no ?>" class="form-control classBiayaKurs" onkeyup="myFunctionKeyupKurs(<?= $no ?>)"><a href="https://www.bi.go.id/id/statistik/informasi-kurs/transaksi-bi/default.aspx" target="_blank"> Cek Nilai Biaya Kurs</a></td>
                        <td><input type="text" autocomplete="off" id="total_calculate<?= $no ?>" value="<?= number_format($value_result->total_calculate, 2, ",", "."); ?>" name="total_calculate<?= $no ?>" class="form-control classTotalBiayaKurs" readonly="readonly" ><input type="text" autocomplete="off" id="hasil_get<?= $no ?>" name="hasil_get<?= $no ?>" value="<?= $value_result->nilai_barang ?>" class="form-control" style="display: none;" value="" ></td>
                     </tr>
                     <input style="display: none;" type="text" value="<?= $no++ ?>">
                     <?php

                        endforeach;
                        ?>
                  </tbody>
                  <tfoot>
                       <tr style="text-align: center;">
                        <td class="JudulHeadr" style="padding-left: 5px; width: 14%;">Total</td>
                        <td class="JudulHeadr" style="padding-left: 5px; width: 14%;"><input type="text" id="totalshowqty" class="form-control" value="<?= $sumTotalLoopQty ?>" readonly="readonly"></td>
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
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 mb-2">
                      <a style="text-decoration:none;" class="btn btn-success w-100" onclick="approveAlert('<?php echo base_url('Approve/approve_barang_keluar/' . $data_estimasi->no_transaksi . '/' . $data_estimasi->jenis_keluar); ?>')">
                        <i class="icon wb-check" aria-hidden="true"></i> Approve
                      </a>
                    </div>
                    <div class="col-md-4 mb-2">
                      <a style="text-decoration:none;" class="btn btn-warning w-100" onclick="revisiAlert('<?php echo base_url('Approve/revisi_barang_keluar/' . $data_estimasi->no_transaksi); ?>')">
                        <i class="fa fa-pencil" aria-hidden="true"></i> Revisi
                      </a>
                    </div>
                    <div class="col-md-4 mb-2">
                      <a style="text-decoration:none;" class="btn btn-danger w-100" onclick="rejectAlert('<?php echo base_url('Approve/reject_barang_keluar/' . $data_estimasi->no_transaksi); ?>')">
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
<script src="<?php echo base_URL()?>jquery.js"></script>
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