<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Scan Barcode HU</title>
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
 
</head>

<body style="background-color:#0c4da2;">

  <!--Section: Live preview-->
  <audio id="myAudio">
    <source src="true.mp3" type="audio/ogg">
  </audio>
  <section class="form-gradient">

    <!--Form with header-->
    <div class="card">

      <!--Header-->
      <div class="header pt-1 lighten-1" style="background-color:#00a1e4;">
        <div class="row mt-1 mb-1 d-flex justify-content-center">
          <!--Facebook-->
         
        </div>
        <div class="row d-flex justify-content-center">
          <h5 class="white-text mb-3 pt-3 font-weight-bold">Scan Barcode</h5>
        </div>


      </div>
 
      <div class="col-md-12 mb-4">
        <!--Header-->
        <div class="card-body mx-4 mt-4">
          <div class="text-center mb-3">
            <button class="btn btn-green z-depth-1a font-weight-bold" data-toggle="collapse" href="#collapseExample" aria-expanded="false"
              aria-controls="collapseExample">
              Edit Data
              <i class="fa fa-pencil" aria-hidden="true"></i>
            </button>
           
          </div>

          <div class="collapse" id="collapseExample">


            <!-- plant -->
            <div class="col-md-11 mb-4">
              <div class="md-form form-sm">
                <h5><strong><b>1. Plant<font size="3" color="red">*</font></b></strong></h5>

                <select id="plant" class="colorful-select dropdown-primary">
                  <option value="" disabled selected>Pilih Salah Satu</option>
                  <option value="1100">1100</option>
                  <option value="1200">1200</option>

                </select>
              </div>
            </div>
            <!-- scanned by -->
            <div class="col-md-11 mb-4">
              <div class="md-form form-sm">
                <h5><strong><b>2. Scanned By<font size="3" color="red">*</font></b></strong></h5>

                <select id="scanby" class="colorful-select dropdown-primary">
                  <option value="" disabled selected>Pilih Salah Satu</option>
                  <option value="KhazProdKhir">KhazProdKhir</option>
                  <option value="Tasil">Tasil</option>

                </select>
              </div>
            </div>


            <div class="col-md-11 mb-4">
              <div class="md-form form-sm">
                <input type="text" name="TA" id="ta" class="form-control form-control-sm">
                <label for="ta" class="font-weight-bold">3. TA <font size="2" color="red">*</font></label>

              </div>
            </div>

            <!-- Tanggal kirim -->
            <div class="col-md-11 mb-4">
              <div class="md-form form-sm">
                <input id="tglkirim" name="Tanggal kirim" type="text" class="datepicker">
                <label for="tglkirim" class="font-weight-bold">4. Tanggal Kirim <font size="2" color="red">*</font></label>
              </div>
            </div>


          </div>

          <!-- Pecahan -->
          <div class="col-md-11 mb-4">
            <div class="md-form form-sm">
              <h5><strong><b>5. Pecahan <font size="3" color="red">*</font></b></strong></h5>

              <select id="pecahan" class="colorful-select dropdown-primary">
                <option value="" disabled selected>Pilih Salah Satu</option>
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




          <!-- no HU -->
          <div class="col-md-11 mb-4">
            <div class="md-form form-sm">
              <input type="text" name="Nama Depan" id="nohu" class="form-control form-control-sm" autofocus>
              <label for="nohu" class="font-weight-bold">6. No HU <font size="2" color="red">*</font></label>
              <div class="col-md-12 mb-4">
                <small id="passwordHelpBlockMD" class="form-text text-muted">
                  <span><label id="labelhu">
                      <font size="2" color="red"></font>
                    </label></span>
                </small>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mb-3">
          <button id="btn-double" class="btn blue-gradient btn-rounded z-depth-1a font-weight-bold">Double Barcode
                        <i class="fa fa-files-o"></i>
                    </button> 
          <button type="button" id="cekdata" class="btn purple-gradient btn-rounded mr-md-3 z-depth-1a font-weight-bold">
            Hasil Scan <i class="fa fa-check-square-o "></i></button>

        </div>

        <!--/Form with header-->

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
  <script>
    $(document).ready(function () {
      var d = new Date();
      d.setFullYear(d.getFullYear() - 80);
      $('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        autoClose: true,
        yearRange: 70
      });
    });

    window.onload = function () {
      var input = document.getElementById("nohu").focus();
    }

    document.getElementById("cekdata").onclick = function () {
      location.href = "v_listhuscan.php";
    };
    document.getElementById("btn-double").onclick = function () {
      location.href = "v_doublebarcode.php";
    };
    $(document).ready(function () {
      $('select').formSelect();

    });
  </script>

</body>

</html>