<!DOCTYPE html>
<html>
  <head>
    <title> Ai-CF </title>
    <link rel="icon" type="image/png" href="assets/img/icons/login-w-icon.png" />
    <meta charset="utf-8">
    <meta content="width=device-width, inital-scale=1, maximum-scale=1, user-scalable=no" name="viewport" >
    <!--load css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap-combobox.css">
    <style type="text/css">
    /* Adjust feedback icon position */
    #productForm .selectContainer .form-control-feedback,
    #productForm .inputGroupContainer .form-control-feedback {
        right: -15px;

    }
    </style>
  </head>
    <body style="background-color:#c790fb;">
      <div class="container" style="border-radius:20px;background-color:#8e23d9">
          <div class="scroller slideCol ">
            <div class="inner" style="color:#fff;">
              <p>Sistem Pakar</p>
              <p>untuk Menentukan</p>
              <p>Penyakit</p>
              <p>Skizofrenia</p>
            </div>
          </div>
    </div>

    <div class="container">
      <form name="pilih1" method="post" action="cf.php">
        <div class="col-md-12" >
          <h2 style="text-align:center;">Dengan Metode Certainty Factor</h2>
          <h1 style="text-align:center;">Ciri-ciri gejala</h1>
          <div class="form-horizontal form-group">
              <label class="control-label col-md-5" style="margin-top: 20px;text-align:center;">Apakah pasien mengalami delusi</label>
              <div class="col-md-7  ">
                  <select class="form-control" name="delusi" id="delusi" style="margin-top: 20px;">
                            <option value=99>Choose a answer</option>
                            <option value=1>iya, lebih dari 21 hari</option>
                            <option value=0.5>mungkin iya, lebih dari 21 hari</option>
                            <option value=-0.5>mungkin kurang dari 21 hari</option>
                            <option value=-1>tidak sama sekali</option>
                          </select>
              </div>

              <label class="control-label col-md-5" style="margin-top: 20px;text-align:center;">Apakah pasien mengalami halusinasi</label>
              <div class="col-md-7  ">

                <select class="form-control" name="halusinasi" id="halus"style="margin-top: 20px;">
                                <option value="99">Choose a answer</option>
                                <option value="1">iya, lebih dari 21 hari</option>
                                <option value="0.5">mungkin iya, lebih dari 21 hari</option>
                                <option value="-0.5">mungkin kurang dari 21 hari</option>
                                <option value="-1">tidak sama sekali</option>
                            </select>
              </div>



              <label class="control-label col-md-5" style="margin-top: 20px;text-align:center;">Apakah perilaku pasien tidak terorganisir</label>
                <div class="col-md-7 ">
                  <select class="form-control" name="to" id="to" style="margin-top: 20px;">
                                <option value="99">Choose a answer</option>
                                <option value="1">iya, lebih dari 21 hari</option>
                                <option value="0.5">mungkin iya, lebih dari 21 hari</option>
                                <option value="-0.5">mungkin kurang dari 21 hari</option>
                                <option value="-1">tidak sama sekali</option>
                              </select>
                </div>



              <label class="control-label col-md-5" style="margin-top: 20px;text-align:center;">Apakah pasien mengalami gangguan pemikiran</label>
              <div class="col-md-7  ">

                <select class="form-control" name="gp" id="gp"style="margin-top: 20px;">
                              <option value="99">Choose a answer</option>
                              <option value="1">iya, lebih dari 21 hari</option>
                              <option value="0.5">mungkin iya, lebih dari 21 hari</option>
                              <option value="-0.5">mungkin kurang dari 21 hari</option>
                              <option value="-1">tidak sama sekali</option>
                            </select>
              </div>
            </div>
          </div>
<input type="submit" name="submit" id="submit" value="Submit">
<input type="submit" name="resetisi" id="reset" value="reset" onclick="resetisi()">
</form>


    <div class="panel panel-danger" style="margin-top:15px;">
      <div class="panel-heading">
        RESULT
      </div>
      <div class="panel-body">
          <?php include 'cfproses.php'; ?>
      </div>
    </div>
      </div>


    <script src='js/jquery.js'></script>
    <script src='js/algoritma.js'></script>
    <script src='js/bootstrap-combobox.js'></script>
    <script>
function resetisi(){
  document.getElemenbyId('panel-body').reset();
}

    </script>



  </body>
</html>
