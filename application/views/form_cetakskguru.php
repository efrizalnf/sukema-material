<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <!--Content Start-->
    <style>
        .logo img {
            position: absolute;
            width: 135px;
           
            margin-left: 64px;
            height: auto;
        }

        .tbtitle {
            width: 100%;
            margin-top: 25px;
            margin-left: 4em;
        }

        .title p {
            line-height: 65%;
        }

        .korp{
            margin-bottom: 25px;
        }
        .korp-surat {
            /* display: none; */
        }
    </style>
    <div class="content">
        <div class="container-fluid">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url('sukema/dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><span>Cetak SK Guru</span></li>
                </ol>
            </nav>
            <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message') ?>"></div>
            <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error') ?>"></div>
            <div class="row">
                <div class="col-12">
                    <a type="button" class="btn btn-sm btn-primary m-3 float-right" href="<?= site_url('sukema/skguru') ?>"><i class="fa fa-chevron-left"></i>&nbsp; Kembali</a>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <!-- <div class="card-header-primary">
                        <h3 class="card-title">Cetak SK Guru</h3>
                        <!-- <p class="card-category">(Silahkan pilih template untuk membuat surat keluar)</p> -->
                    </div> -->
                    <button onclick="myFunction()">Click Me</button>
                    <a class=" btn btn-dribbble" href="<?= site_url('sukema/cetakpdf') ?>" target="_BLANK">Print</a>
                    <div class="card-body">

                        <div class="card">
                            <div class="card-body">

                                <!-- Korp surat -->
                                <!-- <div id="korp-surat">
                                    <div class="row justify-content-md-center m-2">
                                        <div class="col-lg-2 m-3">
                                            <img src="<?= base_url() ?>assets/images/<?= $korpsurat->img_logo ?>" width="150" height="150" alt="logo">
                                        </div>
                                        <div class="col-md-auto text-center" style="line-height:8px;">
                                            <p style="font-size:26px; margin-top:30px; text-transform: uppercase;"><?= $korpsurat->nama_yayasan ?></p>
                                            <p style="font-size:34px; font-weight:bold; margin-top:30px; text-transform: uppercase;"><?= $korpsurat->nama_madrasah ?>
                                            </p>
                                            <p style="font-size:30px; font-weight:bold; margin-top:32px;">"TERAKREDITASI <?= $korpsurat->nilai_akreditasi ?>"
                                            </p>
                                            <p class="col-md-12" style="font-size:18px; font-weight:bold; margin-top:32px;">
                                                NPSN : 20277078 | NSM : 131232730013</p>
                                        </div>
                                    </div>
                                    <div class="row linebar">
                                        <div class="line m-auto bg-success text-white rounded text-center">
                                            <p class="address m-auto p-2 text-uppercase font-weight-bold" style="font-size:12px;"> Alamat : Jl.KH.Wahid Hasyim Gg.Parasdi Dalam I
                                                No.
                                                7 Kel.Situsaeur Kec. Bojongloa Kidul Bandung 40234 | 022-5207636 |
                                                https://masnurulhuda.sch.id</p>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- end Korp surat -->

                                <!-- Korp surat -->
                                <div class="korp-surat">
                                    <div class="korp">
                                        <div class="logo">
                                            <img src="<?= base_url() ?>assets/images/<?= $korpsurat->img_logo ?>" width="150" height="150" alt="logo">
                                        </div>
                                        <table class="tbtitle">
                                            <tr>
                                                <td align="center">
                                                    <div class="title">
                                                        <p style="font-size:28px;  text-transform: uppercase;">
                                                            <?= $korpsurat->nama_yayasan ?></p>
                                                        <p style="font-size:36px; font-weight:bold;  text-transform: uppercase;">
                                                            <?= $korpsurat->nama_madrasah ?>
                                                        </p>
                                                        <p style="font-size:30px; font-weight:bold; ">"TERAKREDITASI
                                                            <?= $korpsurat->nilai_akreditasi ?>"
                                                        </p>
                                                        <p class="col-md-12" style="font-size:20px; font-weight:bold; ">
                                                            NPSN : 20277078 | NSM : 131232730013</p>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row linebar">
                                        <div class="line m-auto bg-success text-white rounded text-center" style="text-align:center; width:100%; background-color:green; border-radius: 5px;">
                                            <p class="address m-auto p-2 text-uppercase font-weight-bold" style="font-size:12px; padding:6px"> Alamat :
                                                Jl.KH.Wahid Hasyim Gg.Parasdi Dalam I
                                                No.
                                                7 Kel.Situsaeur Kec. Bojongloa Kidul Bandung 40234 | 022-5207636 |
                                                https://masnurulhuda.sch.id</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Korp surat -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
    </div>
    <!--/.container-fluid-->
    </div>
    <!--/.content-->
</body>

</html>