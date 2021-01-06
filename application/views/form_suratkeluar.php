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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-primary">
                        <h3 class="card-title">Surat Keluar</h3>
                        <p class="card-category">(Silahkan pilih template untuk membuat surat keluar)</p>
                    </div>

                    <!-- <div class="col-12"> -->
                        <a type="button" class="btn btn-success m-3 text-center" href="<?= base_url('sukema/templatesurat')?>"><i class="fa fa-plus"></i>&nbsp; Buat Template Surat</a>
                    <!-- </div> -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="card text-center">
                                    <div class="card-header-primary">
                                        <p clas="m-auto">Template1</p>
                                    </div>
                                    <div class="card-body">
                                        <p clas="m-auto">Template1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                 <div class="card text-center">
                                    <div class="card-header-primary">
                                        <p clas="m-auto">Template1</p>
                                    </div>
                                    <div class="card-body">
                                        <p clas="m-auto">Template1</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                 <div class="card text-center">
                                    <div class="card-header-primary">
                                        <p clas="m-auto">Template1</p>
                                    </div>
                                    <div class="card-body">
                                        <p clas="m-auto">Template1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

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