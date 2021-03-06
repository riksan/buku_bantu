<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Usul CPNS Menjadi PNS</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/admin/cpns">CPNS to PNS </a></li>
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
                <h3 class="box-title">Form Data Tambah CPNS</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('index.php/admin/insert_cpns'); ?>
                <div class="col-lg-4">
                  <div class="form-group">
                      <label for="nama">Nama Pegawai</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Pegawai">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">NIP</label>
                      <input type="text" class="form-control" name="nip" placeholder="NIP"/>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Golongan</label>
                      <input type="text" class="form-control" name="golongan" placeholder="Golongan"/>
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Satuan Kerja</label>
                      <input type="text" class="form-control" name="satuan_kerja" placeholder="Satuan Kerja"/>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">No Surat / SK</label>
                      <input type="text" class="form-control" name="no_surat" placeholder="No Surat"/>
                   </div>
                   <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Surat</label>
                      <input type="date" class="form-control" name="tanggal_surat" data-date-format="yyyy-mm-dd" placeholder="Tanggal Surat"/>
                  </div>
                </div>

                <div class="col-lg-4">                     
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea type="text" name="keterangan" class="form-control" cols="30" rows="10"></textarea>
                  </div>
                </div>                
                  <a href="<?php echo base_url(); ?>index.php/admin/cpns" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>