<!--Content Start-->
<div class="content transition">
    <div class="container-fluid">
        <!-- <h3>Tanda Tangan Digital</h3> -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('sukema/dashboard')?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Tanda Tangan Digital</span></li>
            </ol>
        </nav>
        <p>*Silahkan Inputkan dan upload data tandatangan untuk surat keluar</p>
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
        <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card border-left border-top border-right border-bottom mb-3">
                    <div class="card-header">
                        <h3>Kepala Madrasah</h3>
                    </div>
                    <div class="card-body text-primary">
                        <?= form_open_multipart('sukema/editttdkamad'); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="hidden" name="idkamad" value="<?= $kamad->id_kamad?>">
                                <div class="form-group">
                                    <label>Nama Kepala Madrasah<sup>
                                            <font color="red" size="4">*</font>
                                        </sup></label>
                                    <input type="text" class="form-control" name="namakamad" placeholder="Nama Kamad"
                                        value="<?= $kamad->nama_kamad  ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>NIP Kepala Madrasah<sup>
                                            <font color="red" size="4">*</font>
                                        </sup></label>
                                    <input type="text" class="form-control" name="nipkamad" placeholder="NIP Kamad"
                                        value="<?= $kamad->nip_kamad  ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <label for="uploadttdkamad">Tandatangan Kepala Madrasah</label>
                                        <div class="fileinput-new thumbnail img-raised text-center"
                                            style="border:#d2d6de 1px solid; border-radius:10px; padding:15px;">
                                            <?php
                                            $image_kosong = array(
                                                            'src'   => 'assets/images/kosong.svg',
                                                            'alt'   => 'ttd-tu',
                                                            'width' => '60%',
                                                            'height'=> '220'
                                                            );
                                            $image_isi = array(
                                                            'src'   => "/assets/images/signature/$kamad->ttd_kamad",
                                                            'alt'   => 'ttd-tu',
                                                            'width' => '60%',
                                                            'height'=> '220'
                                                            );
                                        ?>
                                            <?= ($kamad->ttd_kamad === '') ? img($image_kosong) : img($image_isi); ?>
                                        </div>
                                        <div>
                                            <span class="btn btn-raised btn-round btn-default btn-file mt-3">
                                                <input type="file" name="uploadttdkamad" id="uploadttdkamad"></input>
                                                <label class="fileinput-new text-black-50 m-auto">Pilih File</label>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-md btn-primary" id="btn-simpan-kamad">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                        <?= form_close();?>
                       
                    </div>
                </div>
            </div>
            <!--/.col-->
            <div class="col-lg-12">
                <div class="card border-left border-top border-right border-bottom mb-3">
                    <div class="card-header">
                        <h3>Tata usaha</h3>
                    </div>
                    <div class="card-body text-primary">
                        <?= form_open_multipart('sukema/editttdtatausaha'); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="hidden" name="idtu" value="<?= $tatausaha->id_tatausaha?>">
                                <div class="form-group">
                                    <label>Nama Tata Usaha<sup>
                                            <font color="red" size="4">*</font>
                                        </sup></label>
                                    <input type="text" class="form-control" name="namatatausaha"
                                        placeholder="Nama tatausaha" value="<?= $tatausaha->nama_tatausaha ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>NIP Tata usaha<sup>
                                            <font color="red" size="4">*</font>
                                        </sup></label>
                                    <input type="text" class="form-control" name="niptatausaha"
                                        placeholder="NIP Tatausaha" value="<?= $tatausaha->nip_tatausaha  ?>" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <label for="uploadttdtatausaha">Tandatangan Tata Usaha</label>
                                        <div class="fileinput-new thumbnail img-raised text-center"
                                            style="border:#d2d6de 1px solid; border-radius:10px; padding:15px;">
                                            <?php
                                            $image_kosong = array(
                                                            'src'   => 'assets/images/kosong.svg',
                                                            'alt'   => 'ttd-tu',
                                                            'width' => '60%',
                                                            'height'=> '220'
                                                            );
                                            $image_isi = array(
                                                            'src'   => "/assets/images/signature/$tatausaha->ttd_tatausaha",
                                                            'alt'   => 'ttd-tu',
                                                            'width' => '60%',
                                                            'height'=> '220'
                                                            );
                                        ?>
                                            <?= ($tatausaha->ttd_tatausaha === '') ? img($image_kosong) : img($image_isi); ?>
                                        </div>
                                        <div>
                                            <span class="btn btn-raised btn-round btn-default btn-file mt-3">
                                                <input type="file" name="uploadttdtatausaha"
                                                    id="uploadttdtatausaha"></input>
                                                <label class="fileinput-new text-black-50 m-auto">Pilih File</label>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-md btn-primary" id="btn-simpan-tatausaha">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= form_close();?>
                    </>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class="col-lg-12">
            <div class="card border-left border-top border-right border-bottom mb-3">
                <div class="card-header">
                    <h3>Bendahara</h3>
                </div>
                <div class="card-body text-primary">
                    <?= form_open_multipart('sukema/editttdbendahara'); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="hidden" name="idbendahara" value="<?= $bendahara->id_bendahara?>">
                            <div class="form-group">
                                <label>Nama Tata Usaha<sup>
                                        <font color="red" size="4">*</font>
                                    </sup></label>
                                <input type="text" class="form-control" name="namabendahara"
                                    placeholder="Nama bendahara" value="<?= $bendahara->nama_bendahara ?>" required>
                            </div>
                            <div class="form-group">
                                <label>NIP Tata usaha<sup>
                                        <font color="red" size="4">*</font>
                                    </sup></label>
                                <input type="text" class="form-control" name="nipbendahara" placeholder="NIP bendahara"
                                    value="<?= $bendahara->nip_bendahara  ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <label for="uploadttdtatausaha">Tandatangan Bendahara</label>
                                    <div class="fileinput-new thumbnail img-raised text-center"
                                        style="border:#d2d6de 1px solid; border-radius:10px; padding:15px;">
                                        <?php
                                            $image_kosong = array(
                                                            'src'   => 'assets/images/kosong.svg',
                                                            'alt'   => 'ttd-digital',
                                                            'width' => '60%',
                                                            'height'=> '220'
                                                            );
                                            $image_isi = array(
                                                            'src'   => "/assets/images/signature/$bendahara->ttd_bendahara",
                                                            'alt'   => 'ttd-digital',
                                                            'width' => '60%',
                                                            'height'=> '220'
                                                            );
                                        ?>
                                        <?= ($bendahara->ttd_bendahara === '') ? img($image_kosong) : img($image_isi); ?>
                                    </div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file mt-3">
                                            <input type="file" name="uploadttdbendahara"
                                                id="uploadttdbendahara"></input>
                                            <label class="fileinput-new text-black-50 m-auto">Pilih File</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-md btn-primary" id="btn-simpan-bendahara">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                    <?= form_close();?>
                    </>
                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-lg-12">
            <div class="card border-left border-top border-right border-bottom mb-3">
                <div class="card-header">
                    <h3>Komite Sekolah</h3>
                </div>
                <div class="card-body text-primary">
                    <?= form_open_multipart('sukema/editttdkomite'); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="hidden" name="idkomite" value="<?= $komite->id_komite?>">
                            <div class="form-group">
                                <label>Nama Komite Sekolah<sup>
                                        <font color="red" size="4">*</font>
                                    </sup></label>
                                <input type="text" class="form-control" name="namakomite" placeholder="Nama komite"
                                    value="<?= $komite->nama_komite ?>" required>
                            </div>
                            <div class="form-group">
                                <label>NIP Komite Sekolah<sup>
                                        <font color="red" size="4">*</font>
                                    </sup></label>
                                <input type="text" class="form-control" name="nipkomite" placeholder="NIP komite"
                                    value="<?= $komite->nip_komite  ?>" required>
                            </div>
                        </div>
                       <div class="col-lg-6">
                            <div class="form-group">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <label for="uploadttdtatausaha">Tandatangan Komite Sekolah</label>
                                    <div class="fileinput-new thumbnail img-raised text-center"
                                        style="border:#d2d6de 1px solid; border-radius:10px; padding:15px;">
                                        <?php
                                            $image_kosong = array(
                                                            'src'   => 'assets/images/kosong.svg',
                                                            'alt'   => 'ttd-digital',
                                                            'width' => '60%',
                                                            'height'=> '220'
                                                            );
                                            $image_isi = array(
                                                            'src'   => "/assets/images/signature/$komite->ttd_komite",
                                                            'alt'   => 'ttd-digital',
                                                            'width' => '60%',
                                                            'height'=> '220'
                                                            );
                                        ?>
                                        <?= ($komite->ttd_komite === '') ? img($image_kosong) : img($image_isi); ?>
                                    </div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file mt-3">
                                            <input type="file" name="uploadttdkomite"
                                                id="uploadttdkomite"></input>
                                            <label class="fileinput-new text-black-50 m-auto">Pilih File</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-md btn-primary" id="btn-simpan-komite">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                    <?= form_close();?>
                    </>
                </div>
            </div>
        </div>
        <!--/.col-->

        <div class="col-lg-12">
            <div class="card border-left border-top border-right border-bottom mb-3">
                <div class="card-header">
                    <h3>Ketua Yayasan</h3>
                </div>
                <div class="card-body text-primary">
                    <?= form_open_multipart('sukema/editttdyayasan'); ?>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="hidden" name="idyayasan" value="<?= $yayasan->id_yayasan?>">
                            <div class="form-group">
                                <label>Nama Ketua Yayasan<sup>
                                        <font color="red" size="4">*</font>
                                    </sup></label>
                                <input type="text" class="form-control" name="namayayasan" placeholder="Nama yayasan"
                                    value="<?= $yayasan->nama_yayasan ?>" required>
                            </div>
                            <div class="form-group">
                                <label>NIP Ketua Yayasan<sup>
                                        <font color="red" size="4">*</font>
                                    </sup></label>
                                <input type="text" class="form-control" name="nipkomite" placeholder="NIP yayasan"
                                    value="<?= $yayasan->nip_yayasan  ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <label for="uploadttdtatausaha">Tandatangan Ketua Yayasan</label>
                                    <div class="fileinput-new thumbnail img-raised text-center"
                                        style="border:#d2d6de 1px solid; border-radius:10px; padding:15px;">
                                        <?php
                                            $image_kosong = array(
                                                            'src'   => 'assets/images/kosong.svg',
                                                            'alt'   => 'ttd-digital',
                                                            'width' => '60%',
                                                            'height'=> '220'
                                                            );
                                            $image_isi = array(
                                                            'src'   => "/assets/images/signature/$yayasan->ttd_yayasan",
                                                            'alt'   => 'ttd-digital',
                                                            'width' => '60%',
                                                            'height'=> '220'
                                                            );
                                        ?>
                                        <?= ($yayasan->ttd_yayasan === '') ? img($image_kosong) : img($image_isi); ?>
                                    </div>
                                    <div>
                                        <span class="btn btn-raised btn-round btn-default btn-file mt-3">
                                            <input type="file" name="uploadttdyayasan"
                                                id="uploadttdyayasan"></input>
                                            <label class="fileinput-new text-black-50 m-auto">Pilih File</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-md btn-primary" id="btn-simpan-yayasan">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                    <?= form_close();?>
                    </>
                </div>
            </div>
        </div>
        <!--/.col-->
    </div>
    <!--/.row-->
</div>
</div>