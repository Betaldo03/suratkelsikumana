<?php include '../konek.php';?>
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<script src="js/jquery-2.1.3.min.js"></script>
<script src="js/sweetalert.min.js"></script> 

<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<?php
if(isset($_GET['id_request_skp'])){
    $id=$_GET['id_request_skp'];
    $sql = "SELECT * FROM data_request_skp natural join data_user WHERE id_request_skp='$id'";
    $query = mysqli_query($konek,$sql);
    $data = mysqli_fetch_array($query,MYSQLI_BOTH);
    $id=$data['id_request_skp'];
    $redirect = 'view_skp&id_request_skp=' . $id;
    $publicKey = $data['publicKey'];
}

if(isset($_GET['id_request_sktm'])){
    
    $id=$_GET['id_request_sktm'];
    $redirect = 'view_sktm&id_request_sktm' . $id;
    $sql = "SELECT * FROM data_request_sktm natural join data_user WHERE id_request_sktm='$id'";
    $query = mysqli_query($konek,$sql);
    $data = mysqli_fetch_array($query,MYSQLI_BOTH);
    $id=$data['id_request_sktm'];
    $publicKey = $data['publicKey'];
}

if(isset($_GET['id_request_skd'])){
    $id=$_GET['id_request_skd'];
    $redirect = 'view_skd&id_request_skd' . $id;
    $sql = "SELECT * FROM data_request_skd natural join data_user WHERE id_request_skd='$id'";
    $query = mysqli_query($konek,$sql);
    $data = mysqli_fetch_array($query,MYSQLI_BOTH);
    $id=$data['id_request_skd'];
    $publicKey = $data['publicKey'];
}

?>
 <div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold"></h2>
							</div>
						</div>
                        <div>
                            <div>
                                <label for="" class='form-label text-white'>Public Key</label>
                                <input id='publicKey' type="text" placeholder='Public Key' class='form-control' required value='<?php echo $publicKey?>'>
                            </div>
                            <div class='mt-2'>
                                <label for="" class='form-label text-white'>Private Key</label>
                                <input id='privateKey' type="text" placeholder='Private Key' class='form-control' required>
                            </div>
                            <button id='verify' class='btn btn-success mt-3'>Verifikasi</button>
                        </div>
					</div>
                </div>
			</div>

            <script type="text/javascript">
                
                const v = document.getElementById('verify')
                const _privateKey = document.getElementById('privateKey')
                const _publicKey = document.getElementById('publicKey')
                v.addEventListener('click', async (e)=>{
                    e.preventDefault()
                    try {
                        const data = await fetch('http://localhost:8000/decrypt',{
                        method: 'POST',
                        body: JSON.stringify({
                            privateKey: _privateKey.value,
                            token: _publicKey.value,
                        }),
                        headers:{
                            'Content-Type': 'application/json'
                        }
                    })
                    const res = await data.json()
                    console.log(res.verify)
                    if(res.verify === true){
                        swal('Verifikasi Berhasil', `, No surat: ${res.decryptedText}`, 'success');
                        // window.location.replace('/surat/demo1/main.php?halaman=<?php echo $redirect?>')
                    }else{
                        swal('Gagal...', 'Verifikasi Gagal', 'error')
                    }
                    } catch (error) {
                    console.log(error)
                    swal('Gagal...', 'Verifikasi Gagal', 'error')
                    }
                    
                })

            </script>
            