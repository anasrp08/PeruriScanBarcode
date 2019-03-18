<?php

include('koneksibru.php');

$tahun = '';
$query = "SELECT DISTINCT Tahun FROM scan ORDER BY Tahun ASC";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
 $tahun .= '<option value="'.$row['Tahun'].'">'.$row['Tahun'].'</option>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Daftar Scan HU</title>
  <!-- Font Awesome -->

  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="scss/mdb.scss" rel="stylesheet">
  <link rel='stylesheet' id='compiled.css-css' href="css/compiled.min.css" type='text/css' media='all' />
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/buttons.dataTables.min.css" rel="stylesheet">
  
</head>

<body style="background-color:#0c4da2;">


  <section class="form-gradient">
    <!--Form with header-->
    <div class="card">

      <!--Header-->
      <div class="header pt-1  lighten-1" style="background-color:#00a1e4;">

        <div class="row d-flex justify-content-center">
          <h5 class="white-text mb-3 pt-3 font-weight-bold">Daftar Scan HU</h5>

        </div>
      </div>
      
      <div class="text-center mb-3">
        <button class="btn btn-green z-depth-1a font-weight-bold" data-toggle="collapse" href="#collapseExample"
          aria-expanded="false" aria-controls="collapseExample">
          Filter Data
          <i class="fa fa-pencil" aria-hidden="true"></i>
        </button>
        <button type="button" id="delfilter" class="waves-effect blue waves-light btn">Hapus Filter</button>
      </div>


      <!-- body -->

      <div class="container">

        <div class="card-body mx-1 mt-1" width="100%">
          <div class="collapse" id="collapseExample">
            <!--begin row-->
            <div class="row ">
              <!--Grid column plant-->
              <div class="col-lg-4 col-md-4">

                <div class="md-form form-sm">
                  <h5><strong><b>1. Plant<font size="3" color="red">*</font></b></strong></h5>

                  <select id="plant" class="colorful-select dropdown-primary">
                    <option value="">Pilih Salah Satu</option>
                    <option value="1100">1100</option>
                    <option value="1200">1200</option>

                  </select>
                </div>

              </div>
              <!--Grid column-->

              <!--Grid column scanned by-->
              <div class="col-md-4 mb-4">

                <div class="md-form form-sm">
                  <h5><strong><b>2. Scanned By<font size="3" color="red">*</font></b></strong></h5>

                  <select id="scanby" class="colorful-select dropdown-primary">
                    <option value="">Pilih Salah Satu</option>
                    <option value="KhazProdKhir">KhazProdKhir</option>
                    <option value="Tasil">Tasil</option>

                  </select>
                </div>

              </div>
              <!-- tanggal -->
              <div class="col-md-4 mb-4">

                <div class="md-form form-sm">
                  <h5><strong><b>3. Tanggal Kirim<font size="3" color="red">*</font></b></strong></h5>
                  <input id="tglkirim" name="Tanggal kirim" type="text" class="datepicker">
                  <!-- <label for="tglkirim" class="font-weight-bold">4. Tanggal Kirim <font size="2" color="red">*</font></label> -->
                </div>

              </div>
              <!--Grid column-->
              <!-- end row -->
            </div>
            <!-- row 2 -->
            <div class="row">

              <!--Grid column plant-->
              <div class="col-md-4 mb-4">

                <div class="md-form form-sm">
                  <h5><strong><b>4. Pecahan<font size="3" color="red">*</font></b></strong></h5>

                  <select id="pecahan" class="colorful-select dropdown-primary">
                    <option value="">Pilih Salah Satu</option>
                    <option value="S">S</option>
                    <option value="T">T</option>
                    <option value="U">U</option>
                    <option value="V">V</option>
                    <option value="W">W</option>
                    <option value="X">X</option>
                    <option value="Y">Y</option>
                  </select>
                </div>

              </div>
              <!--Grid column-->

              <!--Grid column scanned by-->
              <div class="col-md-4 mb-4">
                <!-- pake distinct -->
                <div class="md-form form-sm">
                  <h5><strong><b>5. TA<font size="3" color="red">*</font></b></strong></h5>

                  <select id="ta" class="colorful-select dropdown-primary">
                    <option value="">Pilih Salah Satu</option>
                    <?php echo $tahun; ?>

                  </select>
                </div>

              </div>
              <!-- tanggal -->
              <div class="col-md-4 mb-4">

                <div class="md-form form-sm">
                  <h5><strong><b>6. Tanggal Scan<font size="3" color="red">*</font></b></strong></h5>

                  <input id="tglscan" name="Tanggal Scan" type="text" class="datepicker">
                  <!-- <label for="tglkirim" class="font-weight-bold">4. Tanggal Kirim <font size="2" color="red">*</font></label> -->
                </div>
              </div>

            </div>

            <!-- </div> -->
            <!-- collapse -->
            <div class="card-body mx-1 mt-1" width="100%">
            <!-- end row2 -->
            <div class="text-center">
              <button type="button" id="filter" class="waves-effect waves-light btn">Filter</button>
              
            </div>
          </div>
          </div>

          <!-- end column col-md-12 -->
          
        </div>

        <div class="card-body mx-1 mt-1" width="100%">
          <!-- end row2 -->
          <div class="text-center">

           
            <button type="button" id="exportcsv" class="waves-effect brown waves-light btn">Download CSV</button>
            <button type="button" id="cpydata" class="waves-effect indigo waves-light btn">Copy Data</button>
          </div>

          <!-- tablereport -->
          <table id="tblscan" class="table table-bordered table-striped" style="width:100%">
            <thead>
              <tr>

                <th>No. HU</th>
                <th>Pecahan</th>
                <th>TA</th>
                <th>Plant</th>
                <th>Scanned By</th>
                <th>Tgl Kirim</th>
                <th>Tgl Scan</th>

              </tr>
            </thead>

            <tfoot>
              <tr>

                <th>No. HU</th>
                <th>Pecahan</th>
                <th>TA</th>
                <th>Plant</th>
                <th>Scanned By</th>
                <th>Tgl Kirim</th>
                <th>Tgl Scan</th>
              </tr>
            </tfoot>
          </table>
        </div>


        <!-- footer -->
        <div class="text-center mb-3">
          <!--Facebook-->
          <button id="scan" type="button" class="btn blue btn-rounded z-depth-1a">Scan Barcode</button>
          <!--Twitter-->
          <button type="button" id="cekdouble" class="btn purple-gradient btn-rounded mr-md-3 z-depth-1a font-weight-bold">
            Daftar Double Barcode <i class="fa fa-table white-text"></i></button>
          <!--Google +-->
          <!-- <button type="button" class="btn btn-white btn-rounded z-depth-1a">Detail Data<i class="fa fa-google-plus white-text"></i></button> -->

        </div>
        <!-- footer -->

        <!--Grid column-->

      </div>
    </div>
  </section>



  <!-- SCRIPTS -->

  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/sweetalert2.all.min.js"></script>
  <!-- <script type="text/javascript" src="js/sweetalert2.js"></script>  -->
  <script src="js/ajax.js"></script>
  <!-- tampilan data table -->
  <!-- <script type="text/javascript" src="js/jquery-3.3.1.js"></script> -->
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript" src="js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="js/buttons.html51.min.js"></script>


  <script type="text/javascript" language="javascript">
    $(document).ready(function () {
      $('.sidenav').sidenav();
      $('select').formSelect();
      var d = new Date();
      d.setFullYear(d.getFullYear() - 80);

      var datepicker = $('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        defaultDate: new Date(),
        setDefaultDate: true,
        autoClose: true,
        yearRange: 3
      });
      // var getCurrDate = new Date()
      // var formattedDate = ("0" + getCurrDate.getDate()).slice(-2) + "-" + ("0" + (getCurrDate.getMonth() + 1)).slice(
      //   -2) + "-" + getCurrDate.getFullYear()
      // datepicker.val(formattedDate)

    });


    document.getElementById("cekdouble").onclick = function () {
      location.href = "v_doublebarcode.php";
    };
    document.getElementById("scan").onclick = function () {
      location.href = "index.php";
    };
    $(document).ready(function () {

      fill_datatable();


      function fill_datatable(pf_plant = '', pf_scanby = '', pf_tglkirim = '', pf_pecahan = '', pf_ta = '',
        pf_tglscan = '') {
        console.log("tres")
        var dataTable = $('#tblscan').DataTable({
          "processing": true,
          "serverSide": true,
          "order": [],
          "searching": false,
          "ajax": {
            url: "p_listscan.php",
            type: "POST",
            data: {
              param_plant: pf_plant,
              param_scanby: pf_scanby,
              param_tglkirim: pf_tglkirim,
              param_pecahan: pf_pecahan,
              param_ta: pf_ta,
              param_tglscan: pf_tglscan
            }
          },
          "dom": 'Bfrtip',
          "buttons": [{
              extend: 'csv',
              //Name the CSV
              filename: 'Hasil Scan HU',
              // exportOptions: {
              //         columns: [0, 1, $("#name_column"), $("#test_column"), $("#height_column"), $("#area_column")]
              // },
              text: 'Download CSV',
            },
            {
              extend: 'copy',

              text: 'Copy Data',
            },
          ]
        });

        $("#exportcsv").on("click", function () {
          dataTable.button('.buttons-csv').trigger();

        });
        $("#cpydata").on("click", function () {
          dataTable.button('.buttons-copy').trigger();

        });
        $(".buttons-csv").hide();
        $(".buttons-copy").hide();
      }

      $('#filter').click(function () {
        $('#collapseExample').collapse('hide')
        var f_plant = $('#plant').val();
        var f_scanby = $('#scanby').val();
        var f_tglkirim = $('#tglkirim').val();
        var f_pecahan = $('#pecahan').val();
        var f_ta = $('#ta').val();
        var f_tglscan = $('#tglscan').val();
        if (f_plant != '' ||
          f_scanby != '' ||
          f_tglkirim != '' ||
          f_pecahan != '' ||
          f_ta != '' ||
          f_tglscan != '') {
          $('#tblscan').DataTable().destroy();
          fill_datatable(
            f_plant,
            f_scanby,
            f_tglkirim,
            f_pecahan,
            f_ta,
            f_tglscan,
          );
        } else {
          // alert('Select Both filter option');
          $('#tblscan').DataTable().destroy();
          fill_datatable();
        }

      })

      $('#delfilter').click(function (e) {
        $('#plant').val("");
        $('#plant').formSelect()
        $('#scanby').val("");
        $('#scanby').formSelect()
        $('#tglkirim').val("");
        $('#pecahan').val('')
        $('#pecahan').formSelect()
        $('#ta').val("");
        $('#ta').formSelect()
        $('#tglscan').val("");
        $('#tblscan').DataTable().destroy();
        fill_datatable();
      });




    });
  </script>

</body>

</html>