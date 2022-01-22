<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>Cetak PDF</title>

    <style>
        .content {
            width: 100%;
            height: auto;
            position: absolute;
          padding-left: 21px;
          padding-right: 21px;

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

        .salam {
            text-align: center;
        }

        .salam p {
            font-size: 20px;
            font-weight: bold;
        }

        .p1,
        .p2 {
            padding-left: 82px;
            text-indent: -77px;
            text-align: justify;
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
                <img src="<?= base_url('assets/images/surat/korp_yayasan.png') ?>" alt="logo">
            </div>
        </div>
        <!-- end Korp surat -->

        <!-- head surat -->
        <div class="head-surat">
            <?php $date = strtotime($skguru[0]['tgl_surat']);
            $newdate = date_indo(date('Y-m-d', $date));
            ?>
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
                        Yayasan Pendidikan Islam Nurul Huda )YAPINDA( tentang
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
            <table class="paragraf1">
                <tr>
                    <td style="width: 10%; vertical-align: text-top;">Membaca</td>
                    <td style="width: 2%; vertical-align: text-top;">:</td>
                    <td style="width: 70%; align-items: center; ">
                        Surat Pernyataan kesediaan Sdri. Desy Sri Asih tanggal 20 Juni 2018 tentang kesanggupan menjadi
                        Guru Tetap MA Nurul Huda.
                    </td>
                </tr>
            </table>
            <table class="paragraf2">
                <tr>
                    <td style="width: 10%; vertical-align: text-top;">Menimbang</td>
                    <td style="width: 2%; vertical-align: text-top;">:</td>
                    <td style="width: 70%; align-items: center; ">
                        Bahwa yang bersangkutan ternyata mampu menjadi Guru MA Nurul Huda sesuai dengan kariernya.
                    </td>
                </tr>
            </table>
            <table class="paragraf3">
                <tr>
                    <td style="width: 10%; vertical-align: text-top;">Mengingat </td>
                    <td style="width: 2%; vertical-align: text-top;">:</td>
                    <td style="width: 70%; text-align:justify;">
                        Kewenangan Dewan Pembina yang termaktub pada Bab II Anggaran Rumah Tangga )ART( Yayasan
                        Pendidikan Islam Nurul Huda )YAPINDA( dan Rapat Anggota Dewan Pembina.
                    </td>
                </tr>
            </table>
            <div class="penutup" style="text-align: justify;">
                <p class="memutuskan" style="text-align: center; font-weight: bold; margin: 35px 35px;">Memutuskan
                </p>
                <p class="ptutup" style="text-align: justify; ">
                    Terhitung tanggal 1 Juli 2018, Yayasan Pendidikan Islam Nurul Huda )YAPINDA( mengangkat, menetapkan
                    Sdri. Desy Sri Asih sebagai Guru Tetap MA Nurul Huda, dengan catatan apabila terdapat kekeliruan
                    dalam pengangkatan ini, akan dibetulkan sebagaimana mestinya.
                </p>
            </div>

        </div>
        <!-- end head surat -->
        <!-- end row -->
    </div>
    <!--/.container-fluid-->

    <!--/.content-->

</body>

</html>
