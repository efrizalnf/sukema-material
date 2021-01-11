<!--Content Start-->
<div class="content transition">
    <div class="container-fluid dashboard">
        <!-- <h3>Profil Sekolah</h3> -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('sukema/dashboard')?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Profil Sekolah</span></li>
            </ol>
        </nav>
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
        <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <?= form_open_multipart('sukema/editprofil'); ?>
                        <div class="m-portlet__body">
                            <div class="row" style="padding: 20px">
                                <div class="col-md-4">
                                    <div style="border:1px #d2d6de solid;border-radius: 5px" align="center">
                                        <div class="" style="width: 90%">
                                            <input type="hidden" class="form-control" id="idskul" name="idskul"
                                                value="<?= $profile->id_profile?>">
                                            <label for="uploadlogo">Logo Madrasah</label>
                                            <div style="border:#d2d6de 1px solid; border-radius:10px; padding:10px;">
                                                <img class="img-responsive" width="100%"
                                                    src="<?= base_url('/assets/images/').$profile->img_logo?>"
                                                    alt="Logo Madrasah">
                                            </div>
                                            <br>
                                            <div>
                                                <div class="file-input file-input-new ">
                                                    <div class="file-preview ">
                                                        <!-- <button type="button" class="close fileinput-remove">×</button> -->
                                                        <div class="file-drop-disabled">
                                                            <div class="file-preview-thumbnails">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                            <div class="file-preview-status text-center text-success">
                                                            </div>
                                                            <div class="kv-fileinput-error file-error-message"
                                                                style="display: none;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="kv-upload-progress kv-hidden" style="display: none;">
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success progress-bar-success progress-bar-striped active"
                                                                role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                                aria-valuemax="100" style="width:0%;">
                                                                0%
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div
                                                        style="border:#d2d6de 1px solid; border-radius:10px; padding:10px;">
                                                        <input type="file" name="uploadlogo" id="uploadlogo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <text style="font-size:8pt;">
                                            * Format logo .JPG/.PNG/.BMP
                                        </text>
                                    </div>
                                </div>
                                <!-- batas col md4 -->
                                <div class="col-md-8"
                                    style="border: 1px #d2d6de solid; border-radius: 5px; padding: 25px 20px;">
                                    <div class="panel panel-default padding-md">
                                        <ul class="nav w-100 nav-tabs nav-fill font-weight-bold" role="tablist">
                                            <li class="m-auto" style="width:33%">
                                                <a class="nav-link text-center active" data-toggle="tab"
                                                    href="#school_identity">Identitas</a>
                                            </li>
                                            <li class="m-auto" style="width:33%">
                                                <a class="nav-link text-center" data-toggle="tab" href="#school_location">Lokasi</a>
                                            </li>
                                            <li class="m-auto" style="width:33%">
                                                <a class="nav-link text-center" data-toggle="tab" href="#school_headmaster">Kepala
                                                    Madrasah</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mt-4">
                                            <div class="tab-pane active" id="school_identity">
                                                <div class="padding-x-md">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label>Jenjang<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <select class="form-control" name="jenjang"
                                                                    value="<?php echo $profile->jenjang;?>" required>
                                                                    <?php if (!empty($profile->jenjang)) :?>
                                                                    <option><?php echo $profile->jenjang;?></option>
                                                                    <option value="">-- Jenjang --</option>
                                                                    <option>RA</option>
                                                                    <option>MI</option>
                                                                    <option>MTS</option>
                                                                    <option>MA</option>
                                                                    <?php endif;?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>NSM<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="nsm"
                                                                    placeholder="NSM"
                                                                    value="<?php echo $profile->nsm;?>" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>NPSN<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="npsn"
                                                                    value="<?php echo $profile->npsn;?>"
                                                                    placeholder="NPSN" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Nama Madrasah<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control"
                                                                    name="namamadrasah" placeholder="Nama Madrasah"
                                                                    value="<?php echo $profile->nama_madrasah;?>"
                                                                    required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Akreditasi<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <select class="form-control" name="akreditasi"
                                                                    value="<?php echo $profile->nilai_akreditasi;?>"
                                                                    required="">
                                                                    <?php if (!empty($profile->nilai_akreditasi)) :?>
                                                                    <option><?php echo $profile->nilai_akreditasi;?>
                                                                    </option>
                                                                    <option value="">-- Akreditasi --</option>
                                                                    <option>A</option>
                                                                    <option>B</option>
                                                                    <option>C</option>
                                                                    <option>TT</option>
                                                                    <?php endif;?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Status Sekolah</label>
                                                                <select class="form-control" name="statussekolah"
                                                                    value="<?php echo $profile->status_sekolah;?>"
                                                                    required>
                                                                    <?php if (!empty($profile->status_sekolah)) :?>
                                                                    <option><?php echo $profile->status_sekolah;?>
                                                                    </option>
                                                                    <option value="">-- Status --</option>
                                                                    <option value="negeri">Negeri</option>
                                                                    <option value="swasta">Swasta</option>
                                                                    <?php endif;?>
                                                                </select>
                                                            </div>
                                                             <div class="form-group">
                                                                <label>Nama Yayasan<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control"
                                                                    name="namayayasan" placeholder="Inputkan nama yayasan (apabila dibawah naungan yayasan)"
                                                                    value="<?php echo $profile->nama_yayasan;?>"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="school_location">
                                                <div class="padding-x-md">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Provinsi<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="provinsi"
                                                                    value="<?php echo $profile->provinsi;?>"
                                                                    placeholder="Provinsi" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kab/Kota<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="kabkota"
                                                                    value="<?php echo $profile->kab_kota;?>"
                                                                    placeholder="Kab/Kota" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kecamatan<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="kecamatan"
                                                                    value="<?php echo $profile->kecamatan;?>"
                                                                    placeholder="Kecamatan" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Kelurahan<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="kelurahan"
                                                                    value="<?php echo $profile->kelurahan;?>"
                                                                    placeholder="Kelurahan" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alamat<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <textarea class="form-control" name="alamat"
                                                                    placeholder="Alamat" rows="5"
                                                                    required><?php echo $profile->alamat_madrasah;?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <font color="red" size="4">*</font>
                                                                <label>Kodepos</label>
                                                                <input type="text" class="form-control" name="kodepos"
                                                                    value="<?php echo $profile->kodepos;?>"
                                                                    placeholder="Kodepos">
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Latitude</label>
                                                                <input type="text" class="form-control" name="lattitude"
                                                                    value="<?php echo $profile->lattitude;?>"
                                                                    placeholder="Latitude">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Longitude</label>
                                                                <input type="text" class="form-control" name="longitude"
                                                                    value="<?php echo $profile->longitude;?>"
                                                                    placeholder="Longitude">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Telepon<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="phone"
                                                                    value="<?php echo $profile->phone;?>"
                                                                    placeholder="Telepon" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Email<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="email" class="form-control" name="email"
                                                                    value="<?php echo $profile->email;?>"
                                                                    placeholder="Email" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Website<sup>
                                                                    </sup></label>
                                                                <input type="website" class="form-control"
                                                                    name="website"
                                                                    value="<?php echo $profile->website;?>"
                                                                    placeholder="Inputkan alamat website Sekolah"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="school_headmaster">
                                                <div class="padding-x-md">
                                                    <div class="row">
                                                        <div class="col-md-6 text-center">
                                                            <label for="uploadlogo">Foto Kepala Madrasah</label>
                                                            <div
                                                                style="border:#d2d6de 1px solid; border-radius:10px; padding:10px;">
                                                                <img class="img-responsive" width="100%" height="320px"
                                                                    src="<?= base_url('/assets/images/').$profile->img_kepsek?>"
                                                                    alt="kamad">
                                                            </div>
                                                            <div
                                                                style="border:#d2d6de 1px solid; border-radius:10px; padding:10px; margin-top:5px">
                                                                <input type="file" name="uploadfotokamad"
                                                                    id="uploadfotokamad">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nama Kepala Madrasah<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control"
                                                                    name="namakepsek"
                                                                    value="<?php echo $profile->nama_kepsek;?>"
                                                                    placeholder="Nama Kepala Madrasah" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>NIP Kepala Madrasah<sup>
                                                                        <font color="red" size="4">*</font>
                                                                    </sup></label>
                                                                <input type="text" class="form-control" name="nipkepsek"
                                                                    value="<?php echo $profile->nip_kepsek;?>"
                                                                    placeholder="NIP Kepala Madrasah" required>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-md btn-primary" id="btn-simpan">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                            </div>
                        </div>
                        <?= form_close();?>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>
</div>