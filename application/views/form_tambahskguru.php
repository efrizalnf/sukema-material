<!--Content Start-->

<div class="content">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('sukema/dashboard')?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Cetak SK Guru</span></li>
            </ol>
        </nav>
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
        <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
        <div class="row">
         <div class="col-12">
                <a type="button" class="btn btn-sm btn-primary m-3 float-right"
                    href="<?= site_url('sukema/skguru')?>"><i
                        class="fa fa-chevron-left"></i>&nbsp; Kembali</a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-primary">
                        <h3 class="card-title">Cetak SK Guru</h3>
                        <!-- <p class="card-category">(Silahkan pilih template untuk membuat surat keluar)</p> -->
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