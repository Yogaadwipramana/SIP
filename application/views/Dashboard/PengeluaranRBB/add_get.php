<style>
    .table-container {
      width: 100%;
      overflow-x: auto;
    }
  
    .modal-content {
      width: 1200px !important;
      max-width: 100%;
      margin: auto;
    }
  
    table {
      width: 100%;
      border-collapse: collapse;
    }
  
    th, th {
      padding: 8px;
      text-align: center;
    }
  </style>
<div class="page-content padding-30 container-fluid">

<div class="page-header">
  <h1 class="page-title">Pengeluaran Barang (PLAN)</h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url();?>">Beranda</a></li>
    <li><a href="<?php echo base_url('PengeluaranRBB');?>">Pengeluaran Barang (PLAN) </a></li>
    <li class="active">Tambah Data</li>
  </ol>
  <div class="page-header-actions">
    <a href="<?php echo base_url('PengeluaranRBB');?>" class="btn btn-sm btn-danger  btn-round">
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
              <form class="form-horizontal" action="<?php echo base_url();?>PengeluaranRBB/add_action_get" method="post" enctype="multipart/form-data" onsubmit="return approveAlert();" id="myForm">

              <input type="text" autocomplete="off" name="get_jml" id="get_jml" class="form-control" value="<?= $dataGet->jumlah; ?>" style="display: none;">
              <input type="text" autocomplete="off" name="id_barang_real" id="id_barang_real" class="form-control" value="<?= $notif->id_barang; ?>" style="display: none;">
              <input type="text" autocomplete="off" name="keterangan2" id="keterangan2" class="form-control" value="<?= $dataGet->id_barang; ?> - <?= $dataGet->nama_brg; ?>" style="display: none;">
              <input type="text" autocomplete="off" name="terminal_real" id="terminal_real" class="form-control" value="<?= $terminal->id_terminal; ?>" style="display: none;">
              <input type="text" autocomplete="off" name="sat_real" id="sat_real" class="form-control" value="<?= $dataGet->id_satuan; ?>" style="display: none;">
              <input type="text" autocomplete="off" name="id_bm" id="id_bm" class="form-control" value="<?= $dataGet->id_bm ?>" style="display: none;">
              <input type="text" autocomplete="off" name="totalhasil2" id="totalhasil2" class="form-control" value="" style="display: none;">
              <input type="text" autocomplete="off" name="totalhasil" id="totalhasil" class="form-control" value="" style="display: none;">

              <div class="form-group">
                  <label class="col-sm-2 control-label">No PO : </label>
                  <div class="col-sm-4">
                    <input type="text" autocomplete="off" placeholder="No PO"  name="po_number" class="form-control" required="required">
                  </div>
                  <label class="col-sm-2 control-label">Pengeluaran Kargo : </label>
                  <div class="col-sm-2">
                    <input type="date" autocomplete="off" placeholder="" name="pengeluaran_kargo_tgl" class="form-control"  required="required">
                  </div>
                  <div class="col-sm-2">
                    <input type="time" name="pengeluaran_kargo_time" class="form-control" placeholder="" required="required">
                  </div>
              </div>
              <div class="form-group">
                  
                  <label class="col-sm-2 control-label">Jenis Keluar : </label>
                  <div class="col-sm-4">
                    <select data-plugin="select2" name='jenis_keluar' id="jenis_keluar" class="form-control" required="required">
                      <option> Pilih Jenis Keluar </option>
                                  <?php

                                  foreach($jenis as $value)
                                      {   ?>
                                       <option value="<?= $value->id_jenis ?>" ><?= $value->jenis  ?></option>
                                   <?php }
                                   ?>

                    </select>
                  </div>
                  <label class="col-sm-2 control-label">Jenis Dokumen : </label>
                  <div class="col-sm-4">
                    <select data-plugin="select2" name='jenis_doc' id="jenis_doc" class="form-control" required="required">
                       <!-- <option value=''>None</option>-->
                       <!-- <option> Pilih Jenis Dokumen </option> -->
                                  <?php

                                  foreach($dokumen as $value)
                                      {   ?>
                                       <option value="<?= $value->id_dokumen ?>" ><?= $value->dokumen  ?></option>
                                   <?php }
                                   ?>

                    </select>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-2 control-label">Bukti Pengeluaran : </label>
                  <div class="col-sm-4">
                    <input type="text" autocomplete="off" placeholder="Bukti Penerimaan"  name="no_bukti_penerimaan" class="form-control" required="required">
                  </div>
                  <label class="col-sm-2 control-label">No Dokumen : </label>
                  <div class="col-sm-4">
                    <input type="text" autocomplete="off" placeholder="No Dokumen"  name="no_dokumen_pabean" class="form-control" value="<?= $dataGet->no_dokumen_pabean ?>" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penerima Barang : </label>
                  <div class="col-sm-4">
                    <input type="text" autocomplete="off" placeholder="Nama Pengirim Barang"  name="pengirim_barang" class="form-control" required="required">
                    <!-- <select data-plugin="select2" name='pengirim_barang' id="pengirim_barang" class="form-control">
                      <option> Pilih pengirim </option>
                                  <?php

                                  foreach($client as $value)
                                      {   ?>
                                       <option value="<?= $value->id_client ?>-<?= $value->company_name  ?>" ><?= $value->company_name  ?></option>
                                   <?php }
                                   ?>

                    </select> -->
                  </div>
                  <label class="col-sm-2 control-label">Tanggal Dokumen : </label>
                  <div class="col-sm-4">
                    <input type="date" name="tgl_dokumen_pabean" class="form-control" placeholder="Tanggal lahir" value="<?= $dataGet->tgl_dokumen_pabean ?>" required="required">
                  </div>
              </div>
              
              <div class="form-group">
                  <label class="col-sm-2 control-label">File : </label>
                  <div class="col-sm-4">
                    <input class="form-control" id="file" name="file" type="file" required="required">
                    <span style="color: red;font-size: 10px;">* Masukan Dokumen & lampirannya dalam Bentuk Format pdf / image.</span>
                  </div>
                  <label class="col-sm-2 control-label">Negara Tujuan : </label>
                  <div class="col-sm-4">
                    <input type="text" autocomplete="off" placeholder="Negara Asal"  name="negara_asal" class="form-control" value="<?= $dataGet->tujuan ?>" required="required">
                  </div>
                </div>
                
                 <br>
              <div class="form-group">
                <label class="col-sm-6 control-label" style="color: red;text-align: left;">HS Code : <?= $dataGet->id_barang; ?> - <?= $dataGet->nama_brg; ?></label>
                <label class="col-sm-6 control-label" style="color: red;text-align: left;">Qty : <?= number_format($dataGet->jumlah, 2, ",", "."); ?> - <?= $dataGet->id_satuan; ?></label>
              </div>
              <div class="col-md-12 mb-3 table-container">
              <input type="text" id="idTotalPpn" name="totalPN" style="display: none;">
              <table id="show_table_ap" class="table table-hover table-bordered dataTable table-striped width-full overf">
                <thead>
                  <tr>
                    

                    <th style="width: 1%; border-bottom: 1px solid black;">
                          <a  class="btn btn-primary addRowPK" onclick="addPK()"><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </th>

                        <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px; border-bottom: 1px solid black;">Tank</th>
                        <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px; border-bottom: 1px solid black;">Qty</th>
                        <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px; border-bottom: 1px solid black;">Mata Uang</th>
                        <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px; border-bottom: 1px solid black;">Harga Satuan Barang (origin price)</th>
                        <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px; border-bottom: 1px solid black;">Total Nilai Barang (origin price)</th>
                        <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px; border-bottom: 1px solid black;">Biaya Kurs</th>
                        <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px; border-bottom: 1px solid black;">Calculate Biaya Kurs (covertion price)</th>
                  </tr>
                </thead>
                <tbody id="myTablePK">
                   
                   </tbody>
                   <tfoot>
                       <tr style="text-align: center;">
                         <th class="JudulHeadr" style="padding-left: 5px;"></th>
                         <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px;">Total</th>
                         <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px;"><input type="text" id="totalshowqty" class="form-control"></th>
                         <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px;"></th>
                         <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px; "><input type="text" id="totalshowharga" class="form-control" style="display:none;"></th>
                         <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px;"><input type="text" id="totalshowTH" class="form-control" ></th>
                         <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px; "><input type="text" id="totalshowBK" class="form-control" style="display:none;"></th>
                         <th class="JudulHeadr" style="padding-left: 5px; min-width: 150px;"><input type="text" id="totalshowCBK" class="form-control" ></th>
                       
                     </tr>
                   </tfoot>
                   <div id="dataLimitPK"></div>
                   <input type="text" placeholder="Total Qty" id="totalhasil3" class="form-control" value="0" readonly style="display: none;">
                   
                 </table>
                    </div>         
                <div class="form-group">
                  <div class="col-sm-8">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Simpan">
                    <button class="btn btn-default btn-outline" type="reset">Reset</button>
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
<script type="text/javascript">
  function approveAlert(event) {
    // Mencegah form langsung disubmit
    event.preventDefault();

    Swal.fire({
      title: 'Are you sure?',
      text: "Apakah Anda yakin ingin menyimpan data ini?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#28a745',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, simpan!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {
        // Submit form secara manual setelah konfirmasi
        document.getElementById("myForm").submit();
      }
    });
  }

  // Menambahkan event listener untuk form submit
  document.getElementById("myForm").addEventListener("submit", approveAlert);

    function addPK() {
  var table         = document.getElementById("myTablePK");
  var row = table.insertRow(0);
  var getJml = document.getElementById("get_jml").value;

  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  var cell5 = row.insertCell(4);
  var cell6 = row.insertCell(5);
  var cell7 = row.insertCell(6);
  var cell8 = row.insertCell(7);


  for(var a=0; a<=table.rows.length; a++) {
    $('#dataLimitPK').empty();
    $('<input type="hidden" name="limit_pk" value="'+ a +'" >').appendTo('#dataLimitPK');
  }

  
  j = a - 1;
  cell1.innerHTML = '<a href="javascript:void(0);" class="btn btn-sm btn-default" style="align:center;" onclick="deleteRowPK(this)"><i class="fa fa-remove"></i></a>';
  // cell1.innerHTML = '<input type="text" class="form-control classKeteranganBarang" style="width:100%;" class="form-control" value="<?= $notif->id_barang; ?> - <?= $notif->nama_brg; ?>" id="classKeteranganBarang"  readonly>';
  cell2.innerHTML = '<select id="tank'+ a +'" name="" class="form-control classTank" style="width:100%;" required="required">'+
                    
                    <?php
                      foreach ($tank2 as $value) {
                    ?>
                      '<option value="<?php echo $value->tank; ?>"><?php echo $value->nama_tangki_alias; ?></option>'+
                    <?php } ?>

                    '</select>';
  cell3.innerHTML = '<input type="text" class="form-control classQty" id="qty'+ a +'" value="0" name="">';
  
  cell4.innerHTML = '<select id="cur'+ a +'" class="form-control classCur selectX2" style="width:100%;">'+
                    
                    <?php
                      foreach ($kurs as $value) {
                    ?>
                      '<option value="<?php echo $value->id_kurs; ?>"><?php echo $value->mata_uang; ?></option>'+
                    <?php } ?>
                    '</select>';
  cell5.innerHTML = '<input type="text" class="form-control classHarga" style="width:100%;" class="form-control" id="harga'+ a +'" oninput="this.value = formatNumber(this.value)">';
  cell6.innerHTML = '<input type="text" class="form-control classTotalShow" style="width:100%;" class="form-control" id="total_show'+ a +'" readonly><input type="text" class="form-control classTotal" style="width:100%;display:none" class="form-control" id="total'+ a +'" >';
  cell7.innerHTML = '<input type="text" value="0" class="form-control classBiayaKurs" id="biayakurs'+ a +'" ><a href="https://www.bi.go.id/id/statistik/informasi-kurs/transaksi-bi/default.aspx" target="_blank"> Cek Nilai Biaya Kurs</a> ';
  cell8.innerHTML = '<input type="text" class="form-control classCalculateBiayaKursShow" id="calculatebiayakursshow'+ a +'" ><input type="text" class="form-control classCalculateBiayaKurs" id="calculatebiayakurs'+ a +'" style="width:100%;display:none">';

    var calculated_total_sum = 0;

    $("#myTablePK .classQty").each(function (){
      var get_textbox_value = $(this).val();
        if($.isNumeric(get_textbox_value)) {
        calculated_total_sum += parseFloat(get_textbox_value);
        document.getElementById("totalhasil3").value = calculated_total_sum;

      }                  
    });
  
      String.prototype.number_format = function(d) {
          var n = this;
          var c = isNaN(d = Math.abs(d)) ? 2 : d;
          var s = n < 0 ? "-" : "";
          var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
          return s + (j ? i.substr(0, j) + ',' : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + ',') + (c ? '.' + Math.abs(n - i).toFixed(c).slice(2) : "");
      }
      String.prototype.number_format2 = function(d) {
        var n = this;
        var c = isNaN(d = Math.abs(d)) ? 2 : d;
        var s = n < 0 ? "-" : "";
        var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
        return s + (j ? i.substr(0, j) + '.' : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + '.') + (c ? ',' + Math.abs(n - i).toFixed(c).slice(2) : "");
      }
    

      $("tank" + a).change(function () { //GET CHANGE CALL
        alert("a");

        

      })

    $("#qty"+ a).keyup(function(){

            // var a = Number(document.getElementById("totalhasil").value);
            // var urutan_diem = document.getElementById("urutan_diem").value;
            var qty_show = Number(document.getElementById("qty" + a).value);
            var harga_show = document.getElementById("harga" + a).value;
            var harga_show = harga_show.replace(".", "");
            var getqty = Number(document.getElementById("totalhasil3").value);
            var calculate = qty_show + getqty;


            // if(calculate > <?= $dataGet->jumlah ?>){
            //     alert("Data tidak boleh melebihi Quantity");
            //     document.getElementById("qty" + a).value = "";
            // }else{
              var result_real   = qty_show * harga_show;
              let text          = result_real.toString();
              document.getElementById("total_show" + a).value = text.number_format2();
              document.getElementById("total" + a).value = result_real;

              var total       = result_real;
              var biayakurs   = document.getElementById("biayakurs" + a).value;
              console.log(biayakurs);
              var text3        = biayakurs.replace('.', '');
              var text4       = text3.replace(',', '.');
              var calculatebiayakurs = total * text4;
              let textstring         = calculatebiayakurs.toString();
              document.getElementById("calculatebiayakursshow" + a).value = textstring.number_format2();
              document.getElementById("calculatebiayakurs" + a).value = calculatebiayakurs;

              var calculated_total_sum_qty = 0;
              $("#myTablePK .classQty").each(function (){
                  var get_textbox_value = $(this).val().replace(",", "");
                  calculated_total_sum_qty += parseFloat(get_textbox_value);    
              });

              var calculated_total_sum_total_harga = 0;
              $("#myTablePK .classTotal").each(function (){
                  var get_textbox_value = $(this).val().replace(".", "");
                  var get_textbox_value = get_textbox_value.replace(".", "");
                  var get_textbox_value = get_textbox_value.replace(".", "");
                  var get_textbox_value = get_textbox_value.replace(",", ".");
                  calculated_total_sum_total_harga += parseFloat(get_textbox_value);    
              });
              
              var calculated_total_sum_total_biaya_kurs = 0;
              $("#myTablePK .classCalculateBiayaKursShow").each(function (){
                  var get_textbox_value = $(this).val().replace(".", "");
                  var get_textbox_value = get_textbox_value.replace(".", "");
                  var get_textbox_value = get_textbox_value.replace(".", "");
                  var get_textbox_value = get_textbox_value.replace(",", ".");
                  calculated_total_sum_total_biaya_kurs += parseFloat(get_textbox_value);    
              });

              document.getElementById("totalshowqty").value = calculated_total_sum_qty;
              document.getElementById("totalshowTH").value = calculated_total_sum_total_harga.toString().number_format2();
              document.getElementById("totalshowCBK").value = calculated_total_sum_total_biaya_kurs.toString().number_format2();
            // }
           
            
    });          

      $("#harga" + a).keyup(function(){
        var qty   = Number(document.getElementById("qty" + a).value);
        var harga = document.getElementById("harga" + a).value;
        var harga = harga.replace(".", "");

        var result_real   = qty * harga;
        let text          = result_real.toString();
        document.getElementById("total_show" + a).value = text.number_format2();
        document.getElementById("total" + a).value = result_real;

        var total       = result_real;
        var biayakurs   = document.getElementById("biayakurs" + a).value;
        console.log(biayakurs);
        var text3        = biayakurs.replace('.', '');
        var text4       = text3.replace(',', '.');
        var calculatebiayakurs = total * text4;
        let textstring         = calculatebiayakurs.toString();
        document.getElementById("calculatebiayakursshow" + a).value = textstring.number_format2();
        document.getElementById("calculatebiayakurs" + a).value = calculatebiayakurs;

        var calculated_total_sum_harga = 0;
          $("#myTablePK .classHarga").each(function (){
              var get_textbox_value = $(this).val().replace(".", "");
              var get_textbox_value = get_textbox_value.replace(",", ".");
              calculated_total_sum_harga += parseFloat(get_textbox_value);    
        });

        var calculated_total_sum_total_harga = 0;
              $("#myTablePK .classTotal").each(function (){
                  var get_textbox_value = $(this).val().replace(".", "");
                  var get_textbox_value = get_textbox_value.replace(".", "");
                  var get_textbox_value = get_textbox_value.replace(".", "");
                  var get_textbox_value = get_textbox_value.replace(",", ".");
                  calculated_total_sum_total_harga += parseFloat(get_textbox_value);    
        });

        var calculated_total_sum_total_biaya_kurs = 0;
          $("#myTablePK .classCalculateBiayaKursShow").each(function (){
              var get_textbox_value = $(this).val().replace(".", "");
              var get_textbox_value = get_textbox_value.replace(".", "");
              var get_textbox_value = get_textbox_value.replace(".", "");
              var get_textbox_value = get_textbox_value.replace(",", ".");
              calculated_total_sum_total_biaya_kurs += parseFloat(get_textbox_value);    
          });

        document.getElementById("totalshowTH").value = calculated_total_sum_total_harga.toString().number_format2();
        document.getElementById("totalshowharga").value = calculated_total_sum_harga.toString().number_format2();
        document.getElementById("totalshowCBK").value = calculated_total_sum_total_biaya_kurs.toString().number_format2();
        
      });

      $("#biayakurs" + a).keyup(function(){

          var total       = Number(document.getElementById("total" + a).value);
          var biayakurs   = document.getElementById("biayakurs" + a).value;
          var text        = biayakurs.replace('.', '');
          var text2       = text.replace(',', '.');
          var calculatebiayakurs = total * text2;
          let textstring         = calculatebiayakurs.toString();
          document.getElementById("calculatebiayakursshow" + a).value = textstring.number_format2();
          document.getElementById("calculatebiayakurs" + a).value = calculatebiayakurs;

          var calculated_total_sum_biaya_kurs = 0;
          $("#myTablePK .classBiayaKurs").each(function (){
              var get_textbox_value = $(this).val().replace(".", "");
              var get_textbox_value = get_textbox_value.replace(".", "");
              var get_textbox_value = get_textbox_value.replace(".", "");
              var get_textbox_value = get_textbox_value.replace(",", ".");
              calculated_total_sum_biaya_kurs += parseFloat(get_textbox_value);    
          });

          var calculated_total_sum_total_biaya_kurs = 0;
          $("#myTablePK .classCalculateBiayaKursShow").each(function (){
              var get_textbox_value = $(this).val().replace(".", "");
              var get_textbox_value = get_textbox_value.replace(".", "");
              var get_textbox_value = get_textbox_value.replace(".", "");
              var get_textbox_value = get_textbox_value.replace(",", ".");
              calculated_total_sum_total_biaya_kurs += parseFloat(get_textbox_value);    
          });

          document.getElementById("totalshowBK").value = calculated_total_sum_biaya_kurs.toString().number_format2();
          document.getElementById("totalshowCBK").value = calculated_total_sum_total_biaya_kurs.toString().number_format2();

      });



    
    for(var i=0;  i<=table.rows.length; i++) {
      document.getElementsByClassName("classQty")[i].name = "qty"+i;
      document.getElementsByClassName("classTank")[i].name = "tank"+i;
      document.getElementsByClassName("classHarga")[i].name = "harga"+i;
      document.getElementsByClassName("classCur")[i].name = "cur"+i;
      document.getElementsByClassName("classTotal")[i].name = "total"+i;
      document.getElementsByClassName("classBiayaKurs")[i].name = "biayakurs"+i;
      document.getElementsByClassName("classCalculateBiayaKurs")[i].name = "calculatebiayakurs"+i;
    }



}



function deleteRowPK(btn) {
  var row = btn.parentNode.parentNode;
  var table = document.getElementById("myTablePK");
  var result = confirm("Are you sure to delete ?");

  $("#myTablePK .classQty").each(function (){
      var get_textbox_value = $(this).val();
        if($.isNumeric(get_textbox_value)) {
        var getqty = Number(document.getElementById("totalhasil3").value);
        var calculate = getqty - parseFloat(get_textbox_value);
        document.getElementById("totalhasil3").value = calculate;

      }                  
    });

  if(row.parentNode.removeChild(row)){
    for(var a=0; a<=table.rows.length; a++) {
      $('#dataLimitPK').empty();
      $('<input type="hidden" name="limit_pk" value="'+ a +'" >').appendTo('#dataLimitPK');
    }
  
  }
}

    String.prototype.number_format = function(d) {
          var n = this;
          var c = isNaN(d = Math.abs(d)) ? 2 : d;
          var s = n < 0 ? "-" : "";
          var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
          return s + (j ? i.substr(0, j) + ',' : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + ',') + (c ? '.' + Math.abs(n - i).toFixed(c).slice(2) : "");
      }

      var qty_real            = document.getElementById('qty_real').value;
      var harga_satuan_real   = document.getElementById('harga_satuan_real');
      var hasil_real          = document.getElementById('hasil_real');
      var hasil_real_show     = document.getElementById('hasil_real_show');
      harga_satuan_real.addEventListener('keyup', function(e)
      {
        
          var result_real      = qty_real * this.value;
          let text = result_real.toString();
          hasil_real.value = result_real;
          hasil_real_show.value = text.number_format();
          // hasil_real.value = formatRupiah(result_real);
      });

      function formatNumber(num) {
        var number_string = num.replace(/[^,\d]/g, "").toString();
        var split  = number_string.split(",");
        var sisa   = split[0].length % 3;
        var rupiah = split[0].substr(0, sisa);
        var ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            rupiah += (sisa ? "." : "") + ribuan.join(".");
        }

        rupiah = split[1] !== undefined ? rupiah + "," + split[1] : rupiah;
        return rupiah;
      }

</script>