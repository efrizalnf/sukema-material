<!DOCTYPE html>
<html lang="en">

<head>

    <title>Cetak PDF</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<body>


    <!--Content Start-->

    <div class="row">
        <div class="col-md-12">

            <!-- Korp surat -->
            <div class="korp-surat">
                <div class="row justify-content-md-center m-2">
                    <div class="col-lg-2 m-3">
                        <img src="<?= base_url() ?>assets/images/<?= $korpsurat->img_logo ?>" width="150" height="150" alt="logo">
                    </div>
                    <div class="col-md-auto text-center" style="line-height:8px;">
                        <p style="font-size:26px; margin-top:30px; text-transform: uppercase;">
                            <?= $korpsurat->nama_yayasan ?></p>
                        <p style="font-size:34px; font-weight:bold; margin-top:30px; text-transform: uppercase;">
                            <?= $korpsurat->nama_madrasah ?>
                        </p>
                        <p style="font-size:30px; font-weight:bold; margin-top:32px;">"TERAKREDITASI
                            <?= $korpsurat->nilai_akreditasi ?>"
                        </p>
                        <p class="col-md-12" style="font-size:18px; font-weight:bold; margin-top:32px;">
                            NPSN : 20277078 | NSM : 131232730013</p>
                    </div>
                </div>
                <div class="row linebar">
                    <div class="line m-auto bg-success text-white rounded text-center">
                        <p class="address m-auto p-2 text-uppercase font-weight-bold" style="font-size:12px;"> Alamat :
                            Jl.KH.Wahid Hasyim Gg.Parasdi Dalam I
                            No.
                            7 Kel.Situsaeur Kec. Bojongloa Kidul Bandung 40234 | 022-5207636 |
                            https://masnurulhuda.sch.id</p>
                    </div>
                </div>
            </div>
            <!-- end Korp surat -->
        </div>
        <!-- end row -->
    </div>
    <!--/.container-fluid-->

    <!--/.content-->

</body>

</html>