<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>Cetak PDF</title>

    <style>
        .content {
            width: auto;
            height: auto;
            position: absolute;

        }

        .bismillah {
            font-family: DejaVu Sans, sans-serif;
        }

        .korp {
            margin-top: -50px;
            width: 100%;


        }

        .korp-surat {
            text-align: center;
        }

        .bismillah {
            width: 160px;
            height: 50px;

        }

        .salam{
            text-align: center;
        }

        .salam p{
            font-size: 20px;
            font-weight: bold;
        }

        .tbtitle {
            width: 100%;
            margin-left: 9em;
        }

        .title p {
            line-height: 3%;
        }

        table {
            width: 100%;
        }

        .tgl-surat {
            float: right;
        }

        .ttg-surat {
            font-size: 14px;
        }

    </style>
</head>

<body>


    <!--Content Start-->

    <div class="content">

        <!-- Korp surat -->
        <div class="korp-surat">
            <div class="korp">
                <img src="<?= base_url() ?>assets/images/surat/korp_yayasan.png" alt="logo">
            </div>
        </div>
        <!-- end Korp surat -->

        <!-- head surat -->
        <div class="head-surat">
            <?php $date = strtotime($skguru[0]['tgl_surat']);
            $newdate = date_indo(date('Y-m-d', $date));
            ?>
            <!-- <div class="row">
                    <div class="col-8">
                        <p class="ttg_surat">Nomor  : <?= $skguru[0]['no_surat'] ?><span class="tgl-surat">Bandung, <?= $newdate ?></span> </p>
                        <p class="ttg_surat">Hal    : <?= $skguru[0]['perihal'] ?></p>
                    </div>
                </div> -->

            <table>
                <tr>
                    <td style="width: 20%;">Nomor</td>
                    <td style="width: 2%;">:</td>
                    <td style="width: 60%;">
                        <?= $skguru[0]['no_surat'] ?>
                    </td>
                    <td style="width: 30%; float:right;"><span class="tgl-surat">Bandung, <?= $newdate ?></span>
                    </td>
                </tr>
                <tr>
                    <td style="width: 20%;">Lampiran</td>
                    <td style="width: 2%;">:</td>
                    <td style="width: 20%;">
                        <?= $skguru[0]['lampiran'] ?>
                    </td>
                </tr>


            </table>
            <table>
                <tr>
                    <td style="width: 12%; vertical-align: top;">Hal</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 1%; vertical-align: top;">Kutipan </td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 50%; vertical-align: top; padding-right:8em;">Dari Draft Keputusan Pusat Pimpinan
                        Yayasan Pendidikan Islam Nurul Huda (YAPINDA) tentang
                        Pengangkatan Dewan Pengurus atas nama<br>
                        <span style="font-weight: bold;"> Sdri. <?= $skguru[0]['nama_guru'] ?></span><br>
                        Sebagai Bagian Guru Tetap MA Nurul Huda
                        Tahun Pelajaran <span
                            style="font-weight: bold; width:100%;"><?= $skguru[0]['thn_ajaran'] ?></span>

                    </td>
                </tr>
            </table>
            <div class="salam">
                <p> SURAT KEPUTUSAN </p>
                <img class="bismillah" src="<?= base_url() ?>assets/images/surat/bismillah.png" alt="bismillah">
            </div>

        </div>
        <!-- end head surat -->
        <!-- end row -->
    </div>
    <!--/.container-fluid-->

    <!--/.content-->

</body>

</html>
