<div class="page-content padding-30 container-fluid">
  <div class="page-header">
    <h1 class="page-title">Pengeluaran Produksi</h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>">Beranda</a></li>
      <li><a href="<?php echo base_url('PengeluaranProduksi');?>">Pengeluaran Produksi</a></li>
      <li class="active">Edit Data</li>
    </ol>
    <div class="page-header-actions">
      <a href="<?php echo base_url('PengeluaranProduksi');?>" class="btn btn-sm btn-danger  btn-round">
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
              <h4 class="example-title">Edit Data Pengeluaran Produksi</h4>
              <p>
                **Isi kolom di bawah dengan benar.
              </p>
              <div class="example">
                <form class="form-horizontal" action="<?php echo base_url();?>PengeluaranProduksi/update/<?= $data->id_export?>" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Po Number : </label>
                    <div class="col-sm-2">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="Po Number" value="<?= $data->po_number;?>" required name="po_number" class="form-control">
                    </div>                  
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">PEB NO : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="PEB NO" value="<?= $data->peb_number;?>" required name="peb_number" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">PEB Date : </label>
                    <div class="col-sm-2">
                      <input type="hidden" name="id_group">
                      <input type="date" autocomplete="off" placeholder="PEB Date" value="<?= $data->peb_date;?>" required name="peb_date" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Invoice No : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="Invoice No" value="<?= $data->invoice_no;?>" required name="invoice_no" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">No Bukti Pengeluaran Barang : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="No Bukti Pengeluaran Barang" value="<?= $data->no_bukti_pengeluaran_barang;?>" required name="no_bukti_pb" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Bukti Pengeluaran Barang : </label>
                    <div class="col-sm-2">
                      <input type="hidden" name="id_group">
                      <input type="date" autocomplete="off" placeholder="Tanggal Bukti Pengeluaran Barang" value="<?= $data->tanggal_bukti_pengeluaran_barang;?>" required name="tgl_bukti_pb" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Pembeli/Penerima : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="Pembeli/Penerima" value="<?= $data->pembeli_penerima;?>" required name="pembeli_penerima" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Negara Tujuan : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="Negara Tujuan" value="<?= $data->negara_tujuan;?>" required name="negara_tujuan" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Kode Barang : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="Kode Barang" value="<?= $data->kode_barang;?>" required name="kode_barang" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nama Barang : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="Nama Barang" value="<?= $data->nama_barang;?>" required name="nama_barang" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Satuan : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="Satuan" value="<?= $data->satuan;?>" required name="satuan" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Jumlah : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="Jumlah" value="<?= $data->jumlah;?>" required name="jumlah" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Mata Uang : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="Mata Uang" value="<?= $data->mata_uang;?>" required name="mata_uang" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nilai Barang : </label>
                    <div class="col-sm-10">
                      <input type="hidden" name="id_group">
                      <input type="text" autocomplete="off" placeholder="Nilai Barang" value="<?= $data->nilai_barang;?>" required name="nilai_barang" class="form-control">
                    </div>                   
                  </div>
                  <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-4">
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
</div>