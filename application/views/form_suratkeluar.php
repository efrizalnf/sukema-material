<!--Content Start-->

<div class="content">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('sukema/dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Surat Keluar</span></li>
            </ol>
        </nav>
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message'); ?>"></div>
        <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error'); ?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-primary">
                        <h3 class="card-title">Surat Keluar</h3>
                        <p class="card-category">(Silahkan pilih template untuk membuat surat keluar)</p>
                    </div>

                    <!-- <div class="col-12"> -->
                    <!-- <a type="button" class="btn btn-success m-3 text-center"
                        href="<?= base_url('sukema/templatesurat') ?>"><i class="fa fa-plus"></i>&nbsp; Buat Template
                        Surat</a> -->
                    <!-- </div> -->


                    <div class="card-body">
                        <div class="panel panel-default padding-md mt-4">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li class="w-50 text-center">
                                    <a class="nav-link active font-weight-bold" data-toggle="tab"
                                        href="#rekap_suratkeluar" role="tab">Rekap
                                        Surat Keluar</a>
                                </li>
                                <li class="w-50 text-center">
                                    <a class="nav-link m-auto font-weight-bold" data-toggle="tab"
                                        href="#template_suratkeluar">Pilih
                                        Template
                                        Surat</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt-4">
                            <div class="tab-pane active" id="rekap_suratkeluar">
                                <div class="padding-x-md">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="table-responsive">
                                                <table
                                                    class="table table-hover table-responsive-sm table-bordered table-striped tabel-surat mt-3">
                                                    <thead>
                                                        <tr class="text-center text-primary">
                                                            <th class="text-primary">No.</th>
                                                            <th class="text-primary">Tanggal Surat</th>
                                                            <th class="text-primary">No. Surat</th>
                                                            <th class="text-primary">Perihal</th>
                                                            <th class="text-primary">Cetak</th>
                                                        </tr>

                                                    </thead>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="template_suratkeluar">
                                <div class="padding-x-md">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card text-center">
                                                <div class="card-header-success">
                                                    <p class="m-auto font-weight-bold">Surat Keputusan Guru</p>
                                                </div>
                                                <div class="card-body">
                                                    <a type="button" class="btn btn-success rounded"
                                                        href="<?= base_url('sukema/skguru') ?>">Pilih Template</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card text-center">
                                                <div class="card-header-success">
                                                    <p class="m-auto font-weight-bold">Surat Keputusan Guru</p>
                                                </div>
                                                <div class="card-body">
                                                    <a type="button" class="btn btn-success rounded"
                                                        href="<?= base_url('sukema/templatesurat') ?>">Pilih
                                                        Template</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="card text-center">
                                                <div class="card-header-success">
                                                    <p class="m-auto font-weight-bold">Surat Keputusan Guru</p>
                                                </div>
                                                <div class="card-body">
                                                    <a type="button" class="btn btn-success rounded"
                                                        href="<?= base_url('sukema/templatesurat') ?>">Pilih
                                                        Template</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
