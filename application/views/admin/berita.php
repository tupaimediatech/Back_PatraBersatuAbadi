<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card">
                <div class="card-header d-block">
                    <h3>Data Berita <button type="button" class="btn btn-primary tambah" style="float: right;" data-toggle="modal" data-target="#TambahBerita"><i class="ik ik-plus-square ml-0"></i>Tambah Berita</button></h3>
                </div>
                <div class="card-body" style="overflow: auto;">
                    <div class="dt-responsive">
                        <table id="simpletable"
                               class="table table-striped table-bordered nowrap">
                            <thead>
                            <tr>
                                <th width="5%">No.</th>
                                <th width="20%">Judul</th>
                                <th>Isi</th>
                                <th>Tanggal</th>
                                <th width="10%">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $a = 1; foreach ($berita as $news): ?>
                                <tr>
                                    <td><?= $a++ ?>.</td>
                                    <td><?= $news['judul_berita'] ?></td>
                                    <td><?= substr($news['isi'] , 0, 70) . ' ...'; ?></td>
                                    <td><?= format_indo($news['tanggal'])  ?></td>
                                    <td><div class="table-actions">
	                                        <a href="#"><i class="ik ik-eye text-blue"></i></a>
	                                        <a href="" class="ubah" data-toggle="modal" data-target="#UbahBerita" data-judul="<?= $news['judul_berita'] ?>" data-id="<?= $news['id_berita'] ?>" data-img="<?= $news['img'] ?>" data-isi="<?= $news['isi'] ?>" data-tgl="<?= date('m/d/Y', strtotime($news['tanggal'])) ?>" ><i class="ik ik-edit-2 text-green"></i></a>
	                                        <a class="hapus" href="<?= base_url('admin/berita_del/').$news['id_berita'] ?>" data-toggle="modal" data-target="#Hapus"><i class="ik ik-trash-2 text-red"></i></a>
	                                    </div>
	                                </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Tanggal</th>
                                <th width="10%">Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="TambahBerita" tabindex="-1" role="dialog" aria-labelledby="TambahBerita" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="demoModalLabel">Tambah Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
	            <div class="card card-content border-left-0 border-bottom-0 border-right-0 border-success rounded-0 shadow-sm">
	                <div class="card-body pt-0">  
	                    <form id="cek1" action="<?= base_url('admin/berita') ?>" method="POST" enctype="multipart/form-data" >
	                        <div class="form-group">
	                            <label for="judul"><b>Judul Berita *</b></label>
                                <input type="hidden" name="id" value="">
	                            <input type="text" class="form-control" id="judul" name="judul" autofocus autocomplete="off">
	                            <span id="judul_error" class="text-danger"></span>
	                        </div>
                            <div class="gambar">
                                <div class="form-group">
                                    <label for="img"><b>Cover Berita *</b></label>
                                    <div class="custom-file ">
                                        <input type="file" class="custom-file-input" name="img" id="img" autofocus autocomplete="off" value="<?= set_value('img') ?>">
                                        <label class="custom-file-label" for="img" id="custumfile1">Choose file</label><small class="form-text text-muted">Hanya dapat mengupload gambar</small>
                                        <span id="img_error" class="text-danger" ></span>
                                    </div>
                                </div>
                            </div>
	                        
	                        <div class="form-group">
	                            <label for="isi"><b>Isi</b></label>
	                            <textarea class="form-control ck_editor_editable" id="isi" name="isi" rows="10"><?= set_value('isi') ?></textarea>
	                        </div>
	                        <div class="form-group">
	                            <label for="tanggal"><b>Tanggal</b></label>
	                            <input type="text" class="form-control datetimepicker-input" class="tbh" id="datepicker" name="tanggal" data-toggle="datetimepicker" data-target="#datepicker">
	                            <span id="judul_error" class="text-danger" value="<?= set_value('tanggal') ?>"></span>
	                        </div>
	                       
	                </div>
            	</div>
            </div>
	        <div class="modal-footer">
	          <button class="btn btn-primary" type="button" data-dismiss="modal">Close</button>
	          <button type="reset" class="btn btn-danger btn-ripple">Reset</button>
	          <button type="submit" name="tambahberita" id="btn-tambah" class="btn btn-outline-success btn-ripple"><i class="far fa-save"></i> Simpan</button>
	        </div>
	        </form>
        </div>
    </div>
</div>

<div class="modal fade" id="Hapus" tabindex="-1" role="dialog" aria-labelledby="Hapus" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header"  style="background-color: red">
                <h5 class="modal-title" id="demoModalLabel">Hapus Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p align="center">Apakah anda yakin ingin menghapus <br> data?</p>
                <div class="row">
                    <div class="col">
                        <a href="" class="hps"><button class="btn btn-danger center">ya</button></a>
                    </div>
                    <div class="col">
                        <button class="btn btn-ripple" style="float: right;" data-dismiss="modal">tidak</button>
                    </div>
                </div>
                            
            </div>
        </div>
    </div>
</div>

<script>
    
$(document).ready(function() {
    CKEDITOR.replace('isi');


    $('.ubah').on('click', function(e){
        e.preventDefault();
        var judul = $(this).data('judul');
        var id = $(this).data('id');
        var img = '<?= base_url('assets/images/berita/') ?>' + $(this).data('img');
        var isi = $(this).data('isi');
        var tgl = $(this).data('tgl');
        var gambar = "<div class='row mb-4 mt-2'><div class='col-md-4'><img src='"+img+"' width='200px' height='200px' class='img'></div><div class='col-md-8'> <div class='form-group'><label for='img'>Cover Berita *</label><div class='custom-file '><input type='file' class='custom-file-input' name='img' id='img' autofocus autocomplete='off' value=''><label class='custom-file-label' for='img' id='custumfile1'>Choose file</label><small class='form-text text-muted'>Hanya dapat mengupload gambar</small><span id='img_error' class='text-danger' ></span></div></div></div></div>";

        $('.modal-title').text('Ubah Berita');
        $('.gambar').html(gambar);
        $('#btn-tambah').html('<i class="far fa-save"></i> Ubah');
        $('#btn-tambah').attr('name', 'UbahBerita');
        $('[name="id"]').val(id);
        $('[name="judul"]').val(judul);
        CKEDITOR.instances.isi.setData(isi);
        $('[name="tanggal"]').val(tgl);
        $('#TambahBerita').modal('show');
        $('input[name="img"]').change(function(e){
            var fileName1 = e.target.files[0].name;
            console.log(fileName1);
            $('#custumfile1').text(fileName1);
        });

    });
    $('.tambah').on('click', function(e){
        var gambar = "<div class='form-group'><label for='img'><b>Cover Berita *</b></label><div class='custom-file '><input type='file' class='custom-file-input' name='img' id='img' autofocus autocomplete='off' value='<?= set_value('img') ?>'><label class='custom-file-label' for='img' id='custumfile1'>Choose file</label><small class='form-text text-muted'>Hanya dapat mengupload gambar</small><span id='img_error' class='text-danger' ></span></div></div>";
        $('.modal-title').text('Tambah Berita');
        $('.gambar').html(gambar);
        $('#btn-tambah').html('<i class="far fa-save"></i> Simpan');
        $('#btn-tambah').attr('name', 'tambahberita');
        $('#cek1')[0].reset();
        $('input[name="img"]').change(function(e){
            var fileName1 = e.target.files[0].name;
            console.log(fileName1);
            $('#custumfile1').text(fileName1);
        });
    });

    $('.hapus').on('click', function(e){
        e.preventDefault();
        var hps = $(this).attr('href');
        $('.hps').attr('href', hps);
        
    });

    
});
</script>