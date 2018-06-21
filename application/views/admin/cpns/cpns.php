<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Usul CPNS Menjadi PNS
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">CPNS to PNS</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

        	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">
                  	<a href="<?php echo base_url(); ?>index.php/admin/tambah_cpns" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
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
                        <th>Golongan</th>
                        <th>Satuan Kerja</th>
                        <th>No Surat</th>
                        <th>Tanggal Surat</th>
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
                      <td><?php echo ucwords($lihat->golongan) ?></td>
                      <td><?php echo ucwords($lihat->satuan_kerja) ?></td>
                      <td><?php echo $lihat->no_surat ?></td>
                      <td><?php echo tgl_indo($lihat->tanggal_surat) ?></td>
                      <td><?php echo ucwords($lihat->keterangan) ?></td>  
                        <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>index.php/admin/edit_cpns/<?php echo $lihat->id_cpns ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url(); ?>index.php/admin/hapus_cpns/<?php echo $lihat->id_cpns ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i></a>
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
