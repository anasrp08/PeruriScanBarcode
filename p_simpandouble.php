<?php
// Include / load file koneksi.php
include "koneksi.php";
$plant = $_POST['plant'];
$scanby = $_POST['scanby'];
$nopallet = $_POST['nopallete'];
$nodos = $_POST['nodoos'];
$ta = $_POST['ta'];
$tglkirim = $_POST['tglkirim'];
$pecahan = $_POST['pecahan'];
$noscan = $_POST['nohu'];
$scanned1 = "1";
$scanned2 = "1";
$notscaned1 = "";
$date = strtotime($tglkirim);
$yearcvt = strtotime($ta);
$tgl=date('Y-m-d', $date);
$year=date('Y', $yearcvt);

        $exec = $pdo->prepare("INSERT INTO doublehu (NoHU, Nodoos,Pecahan, Pallet, TglKirim,Tahun,Plant, Status1, Status2,Scannedby) VALUES(:nohu,:nodoos, :pecahan, :pallet, :tglkirim,:tahun,:plant,:status1,:status2,:scanby)");
        
        
        $exec->bindParam(':nohu', $noscan);
        $exec->bindParam(':nodoos', $nodos);
        $exec->bindParam(':pecahan', $pecahan);
        $exec->bindParam(':pallet', $nopallet);
        $exec->bindParam(':tglkirim', $tgl);
        $exec->bindParam(':tahun', $year);
        $exec->bindParam(':plant', $plant);
        
        if ($scanby=='KhazProdKhir') {
            $exec->bindParam(':status1', $scanned1);
            $exec->bindParam(':status2', $notscaned1);
        } else {
            $exec->bindParam(':status1', $notscaned1);
            $exec->bindParam(':status2', $scanned2);
        }
        $exec->bindParam(':scanby', $scanby);
        
        $exec->execute();
        $response = array(
            'status'=>'0', // Set status
            'pesan'=>'sukses' // Set pesan
            // 'html'=>$html // Set html
        );
    

$jsonencode=json_encode($response);
echo  $jsonencode;// konversi variabel response menjadi JSON
