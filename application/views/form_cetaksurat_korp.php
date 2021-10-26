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
            /* border: 1px solid; */
            /* padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px; */
            /* padding-bottom: 80px; */
        }

        .bismillah {
            font-family: DejaVu Sans, sans-serif;
        }

        .logo img {
            position: absolute;
            width: 125px;
            margin-top: 8px;
            margin-left: 14px;
            height: auto;
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
                                    NPSN : <?= $korpsurat->npsn ?> | NSM : <?= $korpsurat->nsm ?></p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="row linebar">
                <div class="line m-auto bg-success text-white rounded text-center" style="text-align:center; width:100%; background-color:green; border-radius: 5px;">
                    <p class="address m-auto p-2 text-uppercase font-weight-bold" style="font-size:12px; padding:6px"> Alamat :
                        <?= $korpsurat->alamat_madrasah ?> | <?= $korpsurat->phone ?> |
                        <?= $korpsurat->website ?></p>
                </div>
            </div>
        </div>
        <!-- end Korp surat -->

        <!-- head surat -->
        <div class="head-surat">
            <?php $date = strtotime($skguru[0]['tgl_surat']);
            $newdate = date_indo(date("Y-m-d", $date));
            ?>
            <!-- <div class="row">
                    <div class="col-8">
                        <p class="ttg_surat">Nomor  : <?= $skguru[0]["no_surat"] ?><span class="tgl-surat">Bandung, <?= $newdate ?></span> </p>
                        <p class="ttg_surat">Hal    : <?= $skguru[0]["perihal"] ?></p>
                    </div>
                </div> -->

            <table>
                <tr>
                    <td style="width: 20%;">Nomor</td>
                    <td style="width: 2%;">:</td>
                    <td style="width: 60%;">
                        <?= $skguru[0]["no_surat"] ?>
                    </td>
                    <td style="width: 30%; float:right;"><span class="tgl-surat">Bandung, <?= $newdate ?></span> </td>
                </tr>
                <tr>
                    <td style="width: 20%;">Lampiran</td>
                    <td style="width: 2%;">:</td>
                    <td style="width: 20%;">
                        <?= $skguru[0]["lampiran"] ?>
                    </td>
                </tr>


            </table>
            <table>
                <tr>
                    <td style="width: 12%; vertical-align: top;">Hal</td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 1%; vertical-align: top;">Kutipan </td>
                    <td style="width: 2%; vertical-align: top;">:</td>
                    <td style="width: 50%; vertical-align: top; padding-right:8em;">Dari Draft Keputusan Pusat Pimpinan Yayasan Pendidikan Islam Nurul Huda (YAPINDA) tentang
                        Pengangkatan Dewan Pengurus atas nama<br>
                        <span style="font-weight: bold;"> Sdri. <?= $skguru[0]["nama_guru"] ?></span><br>
                        Sebagai Bagian Guru Tetap MA Nurul Huda
                        Tahun Pelajaran <span style="font-weight: bold;"><?= $skguru[0]["thn_ajaran"] ?></span>

                    </td>
                </tr>
            </table>
            {{-- <p class="bismillah" style="font-size:20px; text-align: center;">بِسْــــــــــــــــــمِ اللهِ الرَّحْمَنِ الرَّحِيْمِ</p> --}}

        </div>
        <!-- end head surat -->
        <!-- end row -->
    </div>
    <!--/.container-fluid-->

    <!--/.content-->

</body>

</html>