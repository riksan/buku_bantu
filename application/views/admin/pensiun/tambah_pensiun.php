<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Pengajuan Pensiun</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/admin/pensiun">Pengajuan </a></li>
              <li class="active">Tambah</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Data Tambah Pensiun</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('index.php/admin/insert_pensiun'); ?>
                <div class="col-lg-6">
                  <div class="form-group">
                      <label for="nama">Nama Pegawai</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Pegawai">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">NIP</label>
                      <input type="text" class="form-control" name="nip" placeholder="NIP"/>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">No Surat</label>
                      <input type="text" class="form-control" name="no_surat" placeholder="No Surat"/>
                  </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Surat</label>
                        <input type="date" class="form-control" name="tanggal_surat" id="tanggal_surat" data-date-format="yyyy-mm-dd" placeholder="Tanggal Surat"/>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Kirim</label>
                        <input type="date" class="form-control" name="tanggal_kirim" id="tanggal_kirim" data-date-format="yyyy-mm-dd" placeholder="Tanggal Kirim"/>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Unit Kerja</label>
                        <input type="text" class="form-control" name="unit_kerja" placeholder="Unit Kerja"/>
                    </div> 
                </div>                
                  <a href="<?php echo base_url(); ?>index.php/admin/pensiun" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>