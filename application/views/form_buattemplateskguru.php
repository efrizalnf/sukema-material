<!--Content Start-->

<div class="content">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('sukema/dashboard')?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Buat Template Surat</span></li>
            </ol>
        </nav>
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
        <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-primary">
                        <h3 class="card-title">Template Surat</h3>
                        <!-- <p class="card-category">(Silahkan pilih template untuk membuat surat keluar)</p> -->
                    </div>

                    <div class="card-body">

                        <div class="card">
                            <div class="card-body">
                                <!-- Korp surat -->
                                <div class="korp-surat">
                                    <div class="row justify-content-md-center m-2">
                                        <div class="col-lg-2 m-3">
                                            <img src="<?=base_url()?>assets/images/logo-enha.png" width="150"
                                                height="150" alt="logo">
                                        </div>
                                        <div class="col-md-auto text-center" style="line-height:8px;">
                                            <p style="font-size:26px; margin-top:30px;">YAYASAN PENDIDIKAN ISLAM NURUL
                                                HUDA (YAPINDA)</p>
                                            <p style="font-size:34px; font-weight:bold; margin-top:30px;">MADRASAH
                                                ALIYAH
                                                NURUL HUDA
                                            </p>
                                            <p style="font-size:30px; font-weight:bold; margin-top:32px;">"TERAKREDITASI
                                                A"
                                            </p>
                                            <p class="col-md-12"
                                                style="font-size:18px; font-weight:bold; margin-top:32px;">
                                                NPSN : 20277078 | NSM : 131232730013</p>
                                        </div>
                                    </div>
                                    <div class="row linebar">
                                        <div class="line m-auto bg-success text-white rounded text-center">
                                            <p class="address m-auto p-2 text-uppercase font-weight-bold"
                                                style="font-size:12px;"> Alamat : Jl.KH.Wahid Hasyim Gg.Parasdi Dalam I
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