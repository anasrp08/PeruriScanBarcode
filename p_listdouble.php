<?php

include('koneksibru.php');

$column = array('NoHU', 'Nodoos','TglScan', 'Pecahan','Pallet', 'TglKirim', 'Tahun', 'Plant', 'Scannedby');

$query = "
SELECT * FROM doublehu where 1
";

if(!empty($_POST['param_tglscan'])){
    $query .= " AND TglScan = '".trim($_POST['param_tglscan'])."'";
}
if(!empty($_POST['param_pecahan'])){
    $query .= " AND Pecahan = '".trim($_POST['param_pecahan'])."'";
}
if(!empty($_POST['param_tglkirim'])){
    $query .= " AND TglKirim = '".trim($_POST['param_tglkirim'])."'";
}

if(!empty($_POST['param_ta'])){
    $query .= " AND Tahun = '".trim($_POST['param_ta'])."'";
}
if(!empty($_POST['param_plant'])) {
    $query .= " AND Plant = '".trim($_POST['param_plant'])."'";
}

if(!empty($_POST['param_scanby'])){
    $query .= " AND Scannedby = '".trim($_POST['param_scanby'])."'";
}





if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();



$data = array();

foreach($result as $row)
{
 $sub_array = array(); 
 $sub_array[] = $row['NoHU'];
 $sub_array[] = $row['Nodoos']; 
 $sub_array[] = $row['Pallet'];
 $sub_array[] = $row['Pecahan']; 
 $sub_array[] = $row['Tahun']; 
 $sub_array[] = $row['Plant'];
 $sub_array[] = $row['Scannedby'];
 $sub_array[] = $row['TglKirim'];
 $sub_array[] = $row['TglScan'];
 
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM doublehu";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($connect),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);
 

echo json_encode($output);

?>
