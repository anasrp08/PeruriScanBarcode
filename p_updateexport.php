<?php
// Include / load file koneksi.php
include "koneksi.php";
$plant = $_POST['plant'];
$scanby = $_POST['scanby'];
  
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
 
    $sql = $pdo->prepare("SELECT IF( EXISTS(SELECT NoHU FROM scan WHERE NoHU =  :nohu and Pecahan= :pecahan and Scannedby=:scanby ), 1, 0) as Result");
        
    $sql->bindParam(':nohu', $noscan);
    $sql->bindParam(':pecahan', $pecahan);
    $sql->bindParam(':scanby', $scanby);
     
    $sql->execute(); //Eksekusi query insert
    $rowresult = $sql->fetch();
    $result=$rowresult["Result"];
      
    if ($result == '0') {
        $exec = $pdo->prepare("INSERT INTO scan (NoHU,  Pecahan,   TglKirim,Tahun,Plant, Status1, Status2,Scannedby) VALUES(:nohu,  :pecahan,  :tglkirim,:tahun,:plant,:status1,:status2,:scanby)");
        
        
        $exec->bindParam(':nohu', $noscan);
        $exec->bindParam(':pecahan', $pecahan);
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
        //response kembalian
        $response = array(
            
            'status'=>'0', // Set status
            'pesan'=>'True' // Set pesan
            // 'html'=>$html // Set html
        );
    } else {
        $response = array(
            'status'=>'1', // Set status
            'pesan'=>'Double Scan No HU' // Set pesan
            // 'html'=>$html // Set html
        );
    }
     
 

$jsonencode=json_encode($response);
echo  $jsonencode;// konversi variabel response menjadi JSON
