<!DOCTYPE html>
<html lang="en">

<head>

    <title>Cetak PDF</title>

    <style>
        .logo img {
            position: absolute;
            width: 125px;
            margin-top: 8px;
            margin-left:14px;
            height: auto;
        }

        .tbtitle {
            width: 100%;
            margin-left: 9em;
        }
        
        .title p{
            line-height: 3%;
        }

        .korp-surat{
            /* display: none; */
        }
    </style>
</head>

<body>


    <!--Content Start-->

    <div class="row">
        <div class="col-md-12">

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
                                <p style="font-size:24px;  text-transform: uppercase;">
                                        <?= $korpsurat->nama_yayasan ?></p>
                                    <p style="font-size:32px; font-weight:bold;  text-transform: uppercase;">
                                        <?= $korpsurat->nama_madrasah ?>
                                    </p>
                                    <p style="font-size:26px; font-weight:bold; ">"TERAKREDITASI
                                        <?= $korpsurat->nilai_akreditasi ?>"
                                    </p>
                                    <p class="col-md-12" style="font-size:16px; font-weight:bold; ">
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
        <!-- end row -->
    </div>
    <!--/.container-fluid-->

    <!--/.content-->

</body>

</html>