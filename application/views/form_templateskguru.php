<!--Content Start-->

<div class="content">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('sukema/dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Surat Keluar</span></li>
            </ol>
        </nav>
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message') ?>"></div>
        <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error') ?>"></div>
        <div class="row">
            <div class="col-12">
                <a type="button" class="btn btn-sm btn-primary m-3 float-right" href="<?= site_url('sukema/suratkeluar') ?>"><i class="fa fa-chevron-left"></i>&nbsp; Kembali</a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-info">
                        <h3 class="card-title font-weight-bold">Surat Keputusan Guru</h3>
                        <p class="card-category">(Silahkan pilih template untuk membuat surat keputusan guru)</p>
                    </div>
                    <div class="col-12">
                        <a type="button" class="btn-sm btn-info m-3 text-center" href="<?= base_url('sukema/tambahskguru') ?>"><i class="fa fa-plus"></i>&nbsp; Buat SK
                            Guru</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-responsive-sm table-bordered table-striped tabel-surat mt-3">
                                <thead>
                                    <tr class="text-center text-primary">
                                        <th class="text-primary">No.</th>
                                        <th class="text-primary">Nomor Surat</th>
                                        <th class="text-primary">Tanggal Surat</th>
                                        <th class="text-primary">Nama Guru</th>
                                        <th class="text-primary">Tanggal Pengangkatan</th>
                                        <th class="text-primary">Tahun ajaran</th>
                                        <th class="text-primary">Cetak|Edit|Hapus</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle" style="height: 100px;">
                                    <?php $no = 1; ?>
                                    <?php foreach ($skguru as $sk) : ?>
                                        <tr valign="middle">
                                            <td class="align-middle text-center"><?= $no++ ?></td>
                                            <td class="align-middle text-center"><?= $sk['no_surat'] ?></td>
                                            <td class="align-middle text-center"><?= $sk['tgl_surat'] ?></td>
                                            <td class="align-middle text-center"><?= $sk['nama_guru'] ?></td>
                                            <td class="align-middle text-center"><?= $sk['tgl_pengangkatan'] ?></td>
                                            <td class="align-middle text-center"><?= $sk['thn_ajaran'] ?></td>
                                            <td class="td-actions text-center align-middle">
                                                <a href="<?php base_url() ?>cetakskguru/<?= $sk['id_skguru']; ?>" class="btn btn-primary btn-simple" type="button"><i class="material-icons">print</i></a>
                                                <a href="javascript:;" data-id="" data-tgl="" data-no="" data-perihal="" data-asal="" data-foto="" class="btn btn-info btn-simple" type="button" data-toggle="modal" data-target="#edit-modal"><i class="material-icons">edit</i></a>
                                                <button href="" class="btn btn-danger btn-simple btn-hapus"><i class="material-icons">delete</i>
                                                </button>
                                                <!-- <a href="javascript:;" data-id="<?= $item['id_suratmasuk'] ?>" data-tgl="<?= $item['tgl_suratmasuk'] ?>" data-no="<?= $item['no_suratmasuk'] ?>" data-perihal="<?= $item['perihal'] ?>" data-asal="<?= $item['asal_surat'] ?>" data-foto="<?= $item['img_surat'] ?>" class="btn btn-info btn-simple" type="button" data-toggle="modal" data-target="#edit-modal"><i class="material-icons">edit</i></a>
                                                <button href="<?php base_url() ?>deletesuratmasuk/<?= $item['id_suratmasuk']; ?>" class="btn btn-danger btn-simple btn-hapus"><i class="material-icons">delete</i>
                                                </button> -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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