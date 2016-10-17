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
              <p>Tugas AI</p>
              <p>Fuzzy Logic</p>
            </div>
          </div>
    </div>

                <div class="container" id="container">
                  <form  method="post" action="fuzzy.php">
                    <div class="col-md-12" >
                      <h2 style="text-align:center;">Dengan Metode Fuzzy Logic</h2>
                      <h1 style="text-align:center;">Ciri-ciri gejala</h1>
                      <div class="form-horizontal form-group">
                        <label class="control-label col-md-6"> Gejala Delusi dalam Hari : </label>
                        <div class="col-md-6 ">
                          <input type="text" class="form-control" name="delusi" placeholder="isi dalam jumlah hari misal 21"><br>
                        </div>

                        <label class="control-label col-md-6"> Gejala Halusinasi dalam Hari : </label>
                        <div class="col-md-6 ">
                          <input type="text" class="form-control" name="halusinasi" placeholder="isi dalam jumlah hari misal 21"><br>
                        </div>

                        <label class="control-label col-md-6"> Gejala Perilaku Tidak Terorganisir dalam Hari : </label>
                        <div class="col-md-6 ">
                          <input type="text" class="form-control" name="to" placeholder="isi dalam jumlah hari misal 21"><br>
                        </div>

                        <label class="control-label col-md-6"> Gejala Gangguan Pemikiran dalam Hari : </label>
                        <div class="col-md-6 ">
                          <input type="text" class="form-control" name="gp" placeholder="isi dalam jumlah hari misal 21"><br>
                        </div>

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
        <?php include 'fuzzyProccess.php'; ?>
      </div>
    </div>
      </div>


    <script src='js/jquery.js'></script>
    <script src='js/algoritma.js'></script>
    <script src='js/bootstrap-combobox.js'></script>
    <script>
function resetisi(){
  document.getElemenbyId('container').reset(0);

}

    </script>



  </body>
</html>
