<!--Content Start-->

<div class="content">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('sukema/dashboard')?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Surat Keluar</span></li>
            </ol>
        </nav>
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
        <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
        <div class="row">
            <div class="col-12">
                <a type="button" class="btn btn-sm btn-primary m-3 float-right"
                    href="<?= site_url('sukema/suratkeluar')?>"><i
                        class="fa fa-chevron-left"></i>&nbsp; Kembali</a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-info">
                        <h3 class="card-title font-weight-bold">Surat Keputusan Guru</h3>
                        <p class="card-category">(Silahkan pilih template untuk membuat surat keputusan guru)</p>
                    </div>
                    <div class="col-12">
                        <a type="button" class="btn-sm btn-info m-3 text-center"
                            href="<?= base_url('sukema/tambahskguru')?>"><i class="fa fa-plus"></i>&nbsp; Buat SK
                            Guru</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="table table-hover table-responsive-sm table-bordered table-striped tabel-surat mt-3">
                                <thead>
                                    <tr class="text-center text-primary">
                                        <th class="text-primary">No.</th>
                                        <th class="text-primary">Tanggal Surat</th>
                                        <th class="text-primary">No. Surat</th>
                                        <th class="text-primary">Perihal</th>
                                        <th class="text-primary">Edit/Delete/Cetak</th>
                                    </tr>

                                </thead>
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