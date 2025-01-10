<?php include '../konek.php';?>
<?php
	if(isset($_GET['id_request_skp'])){
		$id=$_GET['id_request_skp'];
		$sql = "SELECT * FROM data_request_skp natural join data_user WHERE id_request_skp='$id'";
		$query = mysqli_query($konek,$sql);
        $data = mysqli_fetch_array($query,MYSQLI_BOTH);
        $nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat_lahir'];
        $tgl = $data['tanggal_lahir'];
        $tgl2 = $data['tanggal_request'];
        $format1 = date('Y', strtotime($tgl2));
        $format2 = date('d-m-Y', strtotime($tgl));
        $format3 = date('d F Y', strtotime($tgl2));
		$agama = $data['agama'];
		$jekel = $data['jekel'];
		$alamat = $data['alamat'];
		$status_warga = $data['status_warga'];
        $request = $data['request'];
        $acc = $data['acc'];
        $publicKey = $data['publicKey'];
        $keperluan = $data['keperluan'];
        $format4 = date('d F Y', strtotime($acc));
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK SURAT KETERANGAN PINDAH</title>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
</head>
<body>

    <table border="0" align="center">
        <tr>
        <td><img src="img/kel.png" style="width: 75px;height: 75px; alt=""></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
            <td>
                <center>
                    <font size="4">PEMERINTAH KOTA KUPANG</font><br>
                    <font size="4">KECAMATAN MAULAFA</font><br>
                    <font size="5"><b>KELURAHAN SIKUMANA</b></font><br>
                    <font size="2"><i>Jl. H. R. Koroh No. 146 Telp. (0380) 820447</i></font><br>
                </center>
            </td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <tr>
            <td colspan="45"><hr color="black"></td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                <center>
                    <font size="4"><b>SURAT KETERANGAN PINDAH</b></font><br>
                    <hr style="margin:0px" color="black">
                    <span>Nomor : Kel.SKM. 474.3 / <?php echo $id;?> / IV / 2023</span>
                </center>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Lurah Sikumana <br>, Menerangkan bahwa :
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama;?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>:</td>
            <td><?php echo $tempat.", ".$format2;?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jekel;?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $agama;?></td>
        </tr>
        <tr>
            <td>No. NIK</td>
            <td>:</td>
            <td><?php echo $nik;?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat;?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?php echo $status_warga;?></td>
        </tr>
        <tr>
            <td>Keperluan</td>
            <td>:</td>
            <td><?php echo $keperluan;?></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <?php
                if($request=="LAINNYA"){
                    $request="Surat Keterangan / Pengantar Lainnya";
                }
            ?>
            <td><?php echo $request;?></td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat ini diberikan kepada yang bersangkutan agar dapat dipergunakan<br>&nbsp;&nbsp;&nbsp;&nbsp;untuk sebagaimana mestinya.
            </td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <th></th>
            <th width="100px"></th>
            <th>Kupang, <?php echo date('d-m-Y');?></th>
        </tr>
        <tr>
            <td>Tanda tangan <br> Yang bersangkutan </td>
            <td></td>
            <td>Lurah Sikumana</td>
        </tr>
        <tr>
            <td rowspan="15"></td>
            <td></td>
            <td rowspan="15">
                <div id="qrcode"></div>
            </td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr><tr>
            <td></td>
        </tr><tr>
            <td></td>
        </tr><tr>
            <td></td>
        </tr>
        <tr>
            <td><b style="text-transform:uppercase"><u>(<?php echo $nama;?>)</u></b></td>
            <td></td>
            <td><b><u>(Allmendo Pratama)</u></b></td>
        </tr>
    </table>



    
</body>
</html>
<script>
                    new QRCode(document.getElementById("qrcode"), {
                        text: `<?= $publicKey?>`,
                        width: 150,
                        height: 150,
                        correctLevel : QRCode.CorrectLevel.H
                    });

            setTimeout(()=>{

                window.print();
            }, 3000)
        </script>