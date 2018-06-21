<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Usul Kenaikan Pangkat Mahkamah Agung
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">UKP MA</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a href="<?php echo base_url(); ?>index.php/admin/tambah_ukpma" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
                  </h3>
                  <div class="box-tools">
                  	<!--
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    -->
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding" >
                
                  <table id="example1" class="table table-bordered table-hover dataTable  ">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>No. Surat Asal</th>
                        <th>No. Surat Tujuan</th>
                        <th>Tanggal</th>
                        <th>Pangkat Asal</th>
                        <th>Pangkat Usul</th>
                        <th>Jabatan</th>
                        <th>Satuan Kerja</th>
                        <th>keterangan</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                      	<?php  
                      	$no = 1;
                      	foreach ($data as $lihat):
                      	?>
                    	<tr>
                      <td><?php echo $no++ ?></td>
                    	<td><?php echo ucwords($lihat->nama) ?></td>
                    	<td><?php echo ucwords($lihat->nip) ?></td> 
                      <td><?php echo ucwords($lihat->no_surat_asal) ?></td>
                      <td><?php echo ucwords($lihat->no_surat_tujuan) ?></td> 
                      <td><?php echo tgl_indo($lihat->tanggal) ?></td> 
                      <td><?php echo $lihat->pangkat_asal ?></td>
                      <td><?php echo $lihat->pangkat_usul ?></td>
                      <td><?php echo $lihat->jabatan ?></td>
                      <td><?php echo $lihat->satuan_kerja ?></td>
                      <td><?php echo ucwords($lihat->keterangan) ?></td>  
                        <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>index.php/admin/edit_ukpma/<?php echo $lihat->id_ukpma ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url(); ?>index.php/admin/hapus_ukpma/<?php echo $lihat->id_ukpma ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i></a>
                          </div>
                        </td>                  		
                    	</tr>
                    	<?php endforeach ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->
                </div>
             </div>
          </div>
          
         

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
