<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 
                <div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
									<h4 class="fw-bold text-uppercase">Arsip Surat</h4>
									</div>
								</div>
								<form action="" method="POST">
									<div class="card-body">
										<div class="table-responsive">
											<table id="add1" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>NIK</th>
														<th>Nama Lengkap</th>
														<th>Keperluan</th>
														<th>Request</th>
														<th style="width: 10%">Action</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$sql = "SELECT
														data_request_sktm.id_request_sktm,
														data_user.nik,
														data_user.nama,
														data_request_sktm.keperluan,
														data_request_sktm.request
													FROM
														data_user
													INNER JOIN data_request_sktm ON data_request_sktm.nik = data_user.nik
													WHERE data_request_sktm.status = 3
													UNION
													SELECT
														data_request_skd.id_request_skd,
														data_user.nik,
														data_user.nama,
														data_request_skd.keperluan,
														data_request_skd.request
													FROM
														data_user
													INNER JOIN data_request_skd ON data_request_skd.nik = data_user.nik
													WHERE data_request_skd.status = 3
													UNION
													SELECT
														data_request_skp.id_request_skp,
														data_user.nik,
														data_user.nama,
														data_request_skp.keperluan,
														data_request_skp.request
													FROM
														data_user
													INNER JOIN data_request_skp ON data_request_skp.nik = data_user.nik
													WHERE data_request_skp.status = 3";
														$result = mysqli_query($konek,$sql);
														$data = mysqli_fetch_all($result);
													?>
													<?php foreach($data as $row):?>
														<tr>
															<td><?=  $row[1]?></td>
															<td><?=  $row[2]?></td>
															<td><?=  $row[3]?></td>
															<td class="fw-bold text-uppercase text-danger op-8"><?=  $row[4]?></td>
															<td>
																<div class="form-button-action">
																	<?php if($row[4] === 'TIDAK MAMPU'):?>
																		<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Surat" href="?halaman=view_sktm&id_request_sktm=<?= $row[0];?>">
																		<i class="fa fa-edit"></i></a>
																	<?php elseif($row[4] === 'DOMISILI'):?>
																		<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Surat" href="?halaman=view_skd&id_request_skd=<?= $row[0];?>">
																		<i class="fa fa-edit"></i></a>
																	<?php else:?>
																		<a type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="View Surat" href="?halaman=view_skp&id_request_skp=<?= $row[0];?>">
																		<i class="fa fa-edit"></i></a>
																	<?php endif?>
																</div>
															</td>
														</tr>
													<?php endforeach?>
													
												</tbody>
											</table>
										</div>
									</div>
								</form>
							</div>
                        </div>
                        
					</div>
				</div>

<?php
    if(isset($_POST['acc'])){
        if(isset($_POST['check']))
        {
                    foreach ($_POST['check'] as $value){
                        // echo $value;
                        $ubah = "UPDATE data_request_sku set status =2 where id_request_sku = $value"; 

                        $query = mysqli_query($konek,$ubah);

                        if($query) {
                            echo "<script language='javascript'>swal('Selamat...', 'ACC Berhasil!', 'success');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_sku">';
                        }else{
                            echo "<script language='javascript'>swal('Gagal...', 'ACC Gagal!', 'error');</script>" ;
                            echo '<meta http-equiv="refresh" content="3; url=?halaman=belum_acc_sku">';
                        }

                    }
        }
    }
?>