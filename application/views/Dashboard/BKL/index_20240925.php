<style>
	div.container {
		overflow: auto;
		width: 100%;
	}
</style>
<div class="page-content padding-30 container-fluid">

	<div class="page-header">
		<h1 class="page-title" style="text-transform: capitalize;">Laporan Data Pengeluaran Barang</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>">Beranda</a></li>
			<li class="active">Pengeluaran Barang</li>
		</ol>
		<!-- <div class="page-header-actions">
		  <a href="<?php echo base_url('PengeluaranRBB/add/'); ?>" class="btn btn-sm btn-default btn-block btn-primary btn-round">
		      <i aria-hidden="true" class="icon wb-plus"></i>
		      <span class="hidden-xs">Tambah Data</span>
		    </a>
	  </div> -->
	</div>

	<?php
	if (!empty($this->session->flashdata('succeed'))) {
		$succeed = '<div class="alert dark alert-alt alert-success alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true"><i class="icon wb-close-mini" aria-hidden="true"></i></span>
						  </button>
						  ' . $this->session->flashdata('succeed') . '
						</div>';
		echo $succeed;
	}
	?>

	<?php
	if (!empty($this->session->flashdata('failed'))) {
		$failed = '<div class="alert dark alert-alt alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true"><i class="icon wb-close-mini" aria-hidden="true"></i></span>
					  </button>
					  ' . $this->session->flashdata('failed') . '
					</div>';

		echo $failed;
	}
	?>


	<div class="panel panel-bordered">
		<form class="form-horizontal" id="IdForm" method="post">
					<div class="panel-heading">
						<div class="row">
							<h3 class="panel-title"></h3>
						</div>
					</div>


		<div class="panel-body">

			<?php
			$current_date = date("m/d/Y");
			?>

			<!-- <div class="form-group">
	                  <label class="col-sm-1 control-label">Tanggal : </label>
	                  <div class="col-sm-4">
	                    <div class="input-daterange" data-plugin="datepicker">
		                    <div class="input-group">
		                      <span class="input-group-addon">
		                        <i class="icon wb-calendar" aria-hidden="true"></i>
		                      </span>
		                      <input type="text" class="form-control" name="tgl_awal" placeholder="Tanggal Awal" >
		                    </div>
		                    <div class="input-group">
		                      <span class="input-group-addon"><i class="fa fa-arrows-h" aria-hidden="true"></i></span>
		                      <input type="text" class="form-control" name="tgl_akhir" placeholder="Tanggal Akhir" >
		                    </div>
	                  	</div>
	                  </div>
	                </div> -->

			<div class="form-group">
				<label class="col-sm-1 control-label">Tanggal : </label>
				<div class="col-sm-6">
					<div class="input-daterange">
						<div class="input-group">
							<input type="date" class="form-control" name="tgl_awal" placeholder="Tanggal Awal">
						</div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-arrows-h" aria-hidden="true"></i></span>
							<input type="date" class="form-control" name="tgl_akhir" placeholder="Tanggal Akhir">
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-11 col-sm-offset-1">
					<button type="button" class="btn btn-labeled btn-warning" onclick="subFilter();">
						<span class="btn-label"><i class="icon fa-filter" aria-hidden="true"></i></span>Filter
					</button>
				</div>
			</div>


			<div class="container">
				<table id="example" class="table table-bordered table-hover nowrap" style="width:100%">
					<thead>
						<tr>
						<tr>
							<th rowspan="2" style="vertical-align:middle;">No.</th>
							<th rowspan="2" style="vertical-align:middle;">PO. Number</th>
							<th colspan="3" style="text-align: center;">Pabean</th>
							<th colspan="3" style="text-align: center;">Bukti Pengeluaran</th>
							<th colspan="6" style="text-align: center;">Barang</th>
							<th rowspan="2" style="vertical-align:middle;">Gudang</th>
							<th rowspan="2" style="vertical-align:middle;">Negara Tujuan</th>


						</tr>
						<tr>
							<th style="vertical-align:top" ;>Jenis</th>
							<th style="vertical-align:top" ;>Nomor</th>
							<th style="vertical-align:top" ;>Tanggal</th>


							<th style="vertical-align:top" ;>Nomor</th>
							<th style="vertical-align:top" ;>Tanggal</th>
							<th style="vertical-align:top" ;>Pemasok</th>

							<th style="vertical-align:top" ;>HS Code</th>
							<th style="vertical-align:top" ;>Uraian</th>
							<th style="vertical-align:top" ;>Jumlah</th>
							<th style="vertical-align:top" ;>Satuan</th>

							<th style="vertical-align:top" ;>Mata Uang</th>
							<th style="vertical-align:top" ;>Nilai Barang</th>


						</tr>

						</tr>
					</thead>

					<tbody>
						<?php
						$no = 1;
						foreach ($data as $value) :
							$data_uang = $this->db->query("select mata_uang from ref_kurs where id_kurs = '$value->id_mata_uang' ")->row();

							$data_dokumen = $this->db->query("select dokumen from ref_dokumen where id_dokumen = '$value->jenis_doc' ")->row();
							$purchase       = $this->db->query("select po_number from purchase where id_purchase = '$value->po_number' ")->row();
							$count_gudang = $this->db->query("select count(terminal_tank) as total from barang_keluar where no_transaksi = '$value->no_transaksi' ")->row();

							if($value->terminal_tank == "Tank 1.A"){
								$nama_tank = "FSU I 1.p";
							}elseif($value->terminal_tank == "Tank 1.B"){
								$nama_tank = "FSU I 1.s";
							}elseif($value->terminal_tank == "Tank 2.A"){
								$nama_tank = "FSU I 2.p";
							}elseif($value->terminal_tank == "Tank 2.B"){
								$nama_tank = "FSU I 2.s";
							}elseif($value->terminal_tank == "Tank 3.A"){
								$nama_tank = "FSU I 3.p";
							}elseif($value->terminal_tank == "Tank 3.B"){
								$nama_tank = "FSU I 3.s";
							}elseif($value->terminal_tank == "Tank 4.A"){
								$nama_tank = "FSU I 4.p";
							}elseif($value->terminal_tank == "Tank 4.B"){
								$nama_tank = "FSU I 4.s";
							}elseif($value->terminal_tank == "Tank 5.A"){
								$nama_tank = "Tanki BBM ME 1";
							}elseif($value->terminal_tank == "Tank 5.B"){
								$nama_tank = "Tanki BBM ME 2";
							}

						?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $value->po_number; ?></td>
								<td><?= $data_dokumen->dokumen; ?></td>
								<td><?= $value->no_dokumen_pabean; ?></td>
								<td><?= date('d-m-Y', strtotime($value->tgl_dokumen_pabean)); ?></td>

								<td><?= $value->no_bukti_pengeluaran; ?></td>
								<td><?= date('d-m-Y', strtotime($value->pengeluaran_kargo_tgl)); ?> <?= date('h:i:s', strtotime($value->pengeluaran_kargo_time)); ?></td>
								<td><?= $value->pembeli_penerima ?></td>
								<td><?= $value->id_barang; ?></td>
								<td><?= $value->nama_brg; ?></td>
								<td><?= number_format($value->jumlah, 2, ',', '.'); ?></td>
								<td><?= $value->id_satuan; ?></td>

								<td><?= $data_uang->mata_uang; ?></td>
								<td><?= number_format($value->nilai_barang, 2, ',', '.'); ?></td>
								<?php if($count_gudang->total > 1){ 
									$loop_gudang = $this->db->query("select terminal_tank from barang_keluar where no_transaksi = '$value->no_transaksi' ")->result();
								?>
									<td><?php
										// Loop data di dalam <td>
										foreach ($loop_gudang as $gudang) {
										if($gudang->terminal_tank == "Tank 1.A"){
											$nama_tank = "FSU I 1.p";
										}elseif($gudang->terminal_tank == "Tank 1.B"){
											$nama_tank = "FSU I 1.s";
										}elseif($gudang->terminal_tank == "Tank 2.A"){
											$nama_tank = "FSU I 2.p";
										}elseif($gudang->terminal_tank == "Tank 2.B"){
											$nama_tank = "FSU I 2.s";
										}elseif($gudang->terminal_tank == "Tank 3.A"){
											$nama_tank = "FSU I 3.p";
										}elseif($gudang->terminal_tank == "Tank 3.B"){
											$nama_tank = "FSU I 3.s";
										}elseif($gudang->terminal_tank == "Tank 4.A"){
											$nama_tank = "FSU I 4.p";
										}elseif($gudang->terminal_tank == "Tank 4.B"){
											$nama_tank = "FSU I 4.s";
										}elseif($gudang->terminal_tank == "Tank 5.A"){
											$nama_tank = "Tanki BBM ME 1";
										}elseif($gudang->terminal_tank == "Tank 5.B"){
											$nama_tank = "Tanki BBM ME 2";
										}
										echo htmlspecialchars($nama_tank) . '<br>';
										}
										?>
									</td>      
								<?php }else{?>
									<td><?= $nama_tank; ?></td>
								<?php } ?>

								<td><?= $value->negara_tujuan; ?></td>


							</tr>
						<?php
						endforeach;
						?>
					</tbody>
				</table>
			</div>
		</div>
		</form>
	</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
	function subFilter() {
		document.getElementById("IdForm").action = "<?php echo base_url(); ?>BKL";
		document.getElementById("IdForm").submit();

		return true;
	}

	$(document).ready(function() {
        $('#example').DataTable( {
            "dom": 'Bfrtip',
        "searching": true,
        "paging": true,
        "info": true,
        buttons: [{
            extend: 'excelHtml5',
            className: 'btn btn-primary btn-sm icon fa-file-excel-o',
            text: ' Export Excel',
            autoFilter: true,
            attr: {id: 'exportButton'},
            sheetName: 'data',
            title: '',
            filename: function ( ) {
                return $('#exportButton').data('filename');
            }
        }]
        } );
    } );

</script>