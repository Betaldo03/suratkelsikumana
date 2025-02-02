<?php 

include '../konek.php';
date_default_timezone_set('Asia/Jakarta');
?>
<?php
	if(!isset($_POST['tampilkan'])){
		$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';
		
		$sql = "SELECT
		data_user.nik,
		data_user.nama,
		data_request_sktm.acc,
		data_request_sktm.keperluan,
		data_request_sktm.request
	FROM
		data_user
	INNER JOIN data_request_sktm ON data_request_sktm.nik = data_user.nik
	WHERE data_request_sktm.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_skd.acc,
		data_request_skd.keperluan,
		data_request_skd.request
	FROM
		data_user
	INNER JOIN data_request_skd ON data_request_skd.nik = data_user.nik
	WHERE data_request_skd.status = 3
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_skp.acc,
		data_request_skp.keperluan,
		data_request_skp.request
	FROM
		data_user
	INNER JOIN data_request_skp ON data_request_skp.nik = data_user.nik
	WHERE data_request_skp.status = 3";
	$query = mysqli_query($konek,$sql);

	}elseif(isset($_POST['tampilkan'])){
		$bulan = isset($_POST['bulan']) ? $_POST['bulan'] : '';
		$sql = "SELECT
		data_user.nik,
		data_user.nama,
		data_request_skp.acc,
		data_request_skp.keperluan,
		data_request_skp.request
	FROM
		data_user
	INNER JOIN data_request_skp ON data_request_skp.nik = data_user.nik
	WHERE month(data_request_skp.acc) = '$bulan'
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_skd.acc,
		data_request_skd.keperluan,
		data_request_skd.request
	FROM
		data_user
	INNER JOIN data_request_skd ON data_request_skd.nik = data_user.nik
	WHERE month(data_request_skd.acc) = '$bulan'
	UNION
	SELECT
		data_user.nik,
		data_user.nama,
		data_request_sktm.acc,
		data_request_sktm.keperluan,
		data_request_sktm.request
	FROM
		data_user
	INNER JOIN data_request_sktm ON data_request_sktm.nik = data_user.nik
	WHERE month(data_request_sktm.acc) = '$bulan'";
	$query = mysqli_query($konek,$sql);
	}
	
	$res = mysqli_fetch_all($query);

?>
			    <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">LAPORAN PERBULAN SURAT KETERANGAN KELURAHAN SIKUMANA</h2>
							</div>
						</div>
					</div>
                </div>
                <div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-tools">
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <select name="bulan" id="bulan" class="form-control">
													<option value="">Pilih</option>
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">Nopember</option>
                                                    <option value="12">Desember</option>
												</select>
                                                <div class="form-group">
                                                    <input type="submit" name="tampilkan" value="Tampilkan" class="btn btn-primary btn-sm">
													<a href="?halaman=laporan_perbulan">
													<input type="submit" value="Reload" class="btn btn-primary btn-sm">
													</a>
                                                </div>
                                            </div>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-tools">
											<a href="cetak_bulan.php?bulan=<?php echo $bulan;?>" target="_blank" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Print
											</a>
										</div>
								</div>
								<div class="card-body">
									<table class="table mt-3">
										<thead>
											<tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Tanggal ACC</th>
                                                <th scope="col">Nik</th>
												<th scope="col">Nama</th>
												<th scope="col">Keperluan</th>
												<th scope="col">Request</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach($res as $key=>$row):?>
												<tr>
													<td><?=  $key+1?></td>
													<td><?= $row[2]?></td>
													<td><?=  $row[0]?></td>
													<td><?=  $row[1]?></td>
													<td><?=  $row[3]?></td>
													<td><?=  $row[4]?></td>
												</tr>
											<?php endforeach?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>

