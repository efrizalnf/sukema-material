<!--Content Start-->

<div class="content">
    <div class="container-fluid">
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('sukema/dashboard')?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><span>Surat Masuk</span></li>
            </ol>
        </nav>
        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('message')?>"></div>
        <div class="flash-data-err" data-flashdata="<?php echo $this->session->flashdata('error')?>"></div>
        <div class="row">
            <!-- <p>*Silahkan Inputkan surat masuk</p> -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header-primary">
                        <h3 class="card-title">Surat Masuk</h3>
                        <p class="card-category">(Surat masuk yang ditujukan ke madrasah)</p>
                    </div>

                    <div class="col-12">
                        <button type="button" class="btn btn-primary mt-3 float-left" data-toggle="modal"
                            data-target="#inputEnhasModal"><i class="fa fa-plus"></i>&nbsp; Input
                            Surat Masuk</button>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table
                                class="table table-hover table-responsive-sm table-bordered table-striped tabel-surat mt-3">
                                <thead>
                                    <tr class="text-center text-secondary">
                                        <th class="text-primary">No.</th>
                                        <th class="text-primary">Tanggal Surat</th>
                                        <th class="text-primary">Nomor Surat</th>
                                        <th class="text-primary">Asal Surat</th>
                                        <th class="text-primary">Perihal</th>
                                        <th class="text-primary">Dokumen</th>
                                        <th class="text-primary">Edit/Hapus Data</th>
                                    </tr>
                                </thead>

                                <tbody class="align-middle" style="height: 100px;">
                                    <?php $no=1; ?>
                                    <?php foreach ($suratmasuk as $item) :?>
                                    <tr valign="middle">
                                        <td class="align-middle text-center"><?= $no++?></td>
                                        <td class="align-middle text-center"><?= $item['tgl_suratmasuk']?></td>
                                        <td class="align-middle text-center"><?= $item['no_suratmasuk']?></td>
                                        <td class="align-middle"><?= $item['asal_surat']?></td>
                                        <td class="align-middle"><?= $item['perihal']?></td>
                                        <td>
                                            <!-- <?= var_dump(base_url('assets/images/surat/').$item['img_surat'])?> -->
                                            <img class="rounded border border-light mx-auto d-block m-3"
                                                src="<?= base_url()?>assets/images/surat/<?= $item['img_surat']?>"
                                                width="60" height="60" id="previmg" name="previmg"
                                                value="<?= $item['img_surat']?>">
                                        </td>
                                        <td class="td-actions text-center align-middle">
                                            <a href="javascript:;" data-id="<?= $item['id_suratmasuk'] ?>"
                                                data-tgl="<?= $item['tgl_suratmasuk'] ?>"
                                                data-no="<?= $item['no_suratmasuk'] ?>"
                                                data-perihal="<?= $item['perihal'] ?>" 
                                                data-asal="<?= $item['asal_surat'] ?>"
                                                data-foto="<?=$item['img_surat'] ?>"
                                                class="btn btn-info btn-simple" type="button" data-toggle="modal"
                                                data-target="#edit-modal"><i class="material-icons">edit</i></a>
                                            <button
                                                href="<?php base_url()?>deletesuratmasuk/<?= $item['id_suratmasuk'];?>"
                                                class="btn btn-danger btn-simple btn-hapus"><i
                                                    class="material-icons">delete</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- input ModalSurat Masuk -->
                <div class="modal fade" id="inputEnhasModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">Input Surat Masuk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <?= form_open_multipart('sukema/inputsuratmasuk');?>
                                <div class="form-group">
                                    <label for="tglinfo">Tanggal Surat Masuk</label>
                                    <input type="date" class="form-control datetimepicker w-50" id="tglsuratmasuk"
                                        name="tglsuratmasuk" required>
                                    <div class="invalid-feedback">
                                        Inputkan Tanggal Surat!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="judulinfo">Nomor Surat Masuk</label>
                                    <input type="text" class="form-control" id="nosuratmasuk" name="nosuratmasuk"
                                        placeholder="Inputkan Nomor Surat Masuk" required>
                                    <div class="invalid-feedback">
                                        Inputkan Nomor Surat Masuk!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="perihal">Perihal</label>
                                    <input type="text" class="form-control" id="perihal" name="perihal"
                                        placeholder="Inputkan Perihal Surat" required>
                                    <div class="invalid-feedback">
                                        Inputkan Perihal Surat!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="perihal">Asal Surat</label>
                                    <input type="text" class="form-control" id="asalsurat" name="asalsurat"
                                        placeholder="Inputkan Asal Surat" required>
                                    <div class="invalid-feedback">
                                        Inputkan Asal Surat!
                                    </div>
                                </div>
                                <label for="imgsurat">Upload Scan/Foto Surat</label>

                                <div class="custom-file"
                                    style="border:#d2d6de 1px solid; border-radius:10px; padding:15px;">
                                    <input id="imgsurat" name="imgsurat" type="file" class="custom-file-input">
                                    <label for="imgsurat" class="custom-file-label text-truncate">Pilih file...</label>
                                </div>
                                <div class="modal-footer w-100">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" id="inputsurat">Simpan</button>
                                </div>
                                <!-- </form> -->
                                <?= form_close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Surat Masuk -->

                <!-- input ModalSurat Masuk -->
                <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalLabel">Edit Surat Masuk</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <?= form_open_multipart('sukema/editsuratmasuk');?>
                                <input type="hidden" class="form-control" id="edit_id" name="edit_id"
                                    value="<?= $item['id_suratmasuk']?>">
                                <div class="form-group">
                                    <label for="tglinfo">Tanggal Surat Masuk</label>
                                    <input type="date" class="form-control datetimepicker w-50" id="edttglsuratmasuk"
                                        name="edttglsuratmasuk" required>
                                    <div class="invalid-feedback">
                                        Inputkan Tanggal Surat!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="edtnosuratmasuk">Nomor Surat Masuk</label>
                                    <input type="text" class="form-control" id="edtnosuratmasuk" name="edtnosuratmasuk"
                                        placeholder="Inputkan Nomor Surat Masuk" required>
                                    <div class="invalid-feedback">
                                        Inputkan Nomor Surat Masuk!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="edtperihal">Perihal</label>
                                    <input type="text" class="form-control" id="edtperihal" name="edtperihal"
                                        placeholder="Inputkan Perihal Surat" required>
                                    <div class="invalid-feedback">
                                        Inputkan Perihal Surat!
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="edtasalsurat">Asal Surat</label>
                                    <input type="text" class="form-control" id="edtasalsurat" name="edtasalsurat"
                                        placeholder="Inputkan Asal Surat" required>
                                    <div class="invalid-feedback">
                                        Inputkan Asal Surat!
                                    </div>
                                </div>
                                <label for="edtimgsurat">Upload Scan/Foto Surat</label>

                                <div class="custom-file"
                                    style="border:#d2d6de 1px solid; border-radius:10px; padding:15px;">
                                    <input id="edtimgsurat" name="edtimgsurat" type="file" class="custom-file-input">
                                    <label for="imgsurat" class="custom-file-label text-truncate">Pilih file...</label>
                                </div>
                                <div class="modal-footer w-100">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" id="editsurat">Edit</button>
                                </div>
                                <!-- </form> -->
                                <?= form_close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal Surat Masuk -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!--/.container-fluid-->
</div>
<!--/.content-->