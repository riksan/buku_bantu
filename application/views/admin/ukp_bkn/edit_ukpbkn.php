<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Usul Kenaikan Pangkat Dirgen BKN</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>index.php/admin/ukpbkn">UKPBKN</a></li>
              <li class="active">Edit</li>
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
                <h3 class="box-title">Form Data Edit UKP BKN</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('index.php/admin/update_ukpbkn'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                <div class="col-lg-4"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $data->nama ?>" />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                      <input type="text" class="form-control" name="nip" value="<?php echo $data->nip ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. Surat Asal</label>
                      <input type="text" class="form-control" name="no_surat_asal" value="<?php echo $data->no_surat_asal ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No. Surat Tujuan</label>
                      <input type="text" class="form-control" name="no_surat_tujuan" value="<?php echo $data->no_surat_tujuan ?>"/>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                      <input type="date" class="form-control" name="tanggal" data-date-format="yyyy-mm-dd" value="<?php echo $data->tanggal ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pangkat Asal</label>
                    <input type="text" class="form-control" name="pangkat_asal" value="<?php echo $data->pangkat_asal ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Pangkat Usul</label>
                    <input type="text" class="form-control" name="pangkat_usul" value="<?php echo $data->pangkat_usul ?>"/>
                  </div>
                  <div class="form-group">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="<?php echo $data->jabatan ?>"/>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Satuan Kerja</label>
                    <input type="text" class="form-control" name="satuan_kerja" value="<?php echo $data->satuan_kerja ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Keterangan</label>
                    <textarea name="keterangan" class="form-control" cols="30" rows="10">
                      <?php echo $data->keterangan ?>
                    </textarea>
                  </div>
                </div>
                  <input type="hidden" name="id" value="<?php echo $data->id_ukpbkn ?>">
                  <a href="<?php echo base_url(); ?>index.php/admin/ukpbkn" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>

                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>