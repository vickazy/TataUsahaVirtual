
<?php
include "koneksi.php";
?>

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Request
            <small>pengajuan proposal</small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Log TU</li>
            <li>Request Pengajuan Proposal</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- SELECT2 EXAMPLE -->
          <div class="box box-default">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <div class="col-md-12"></div>
                    <div class="col-md-12"><h4>Today : <?php echo date('d-m-Y');?></h4></div>
                    
                </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="nama" type="text" class="form-control" value="Rio Ramadhan Dharmawan" disabled>
                  </div>
                  <div class="form-group">
                    <label>Nim</label>
                    <input name="nim" type="text" class="form-control" value="081311633027" disabled>
                  </div>  
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Telepon</label>
                    <input name="telp" type="text" class="form-control" value="089678482575" disabled>
                  </div>                  
                </div><!-- /.col -->
              </div><!-- /.row -->
              
              <div class="row">
                  <div class="col-md-6">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Judul Proposal</label>
                      <textarea class="form-control" rows="3" placeholder="Text here ..."></textarea>
                    </div> 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Topik Proposal</label>
                      <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <option>Data Mining</option>
                      <option>Penelitian Dosen</option>
                      <option>Rekayasan Sistem Informasi</option>
                      <option>Sistem Pendukung Keputusan</option>
                    </select>
                    </div> 
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                        <div class="form-group">
                    <label>Dosen Wali</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <option>DIC</option>
                      <option>RRD</option>
                    </select>
                  </div><!-- /.form-group --> 
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                    <label>Dosen Pembimbing 1</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">--Pilih--</option>
                      <option>DIC</option>
                      <option>RRD</option>
                    </select>
                  </div><!-- /.form-group --> 
                    <p>
<form>
Dosen Pembimbing 2 
<select name="dosenpembimbing2">
    <option>---- Pilih ----</option>
    <?php
    
    $sql = mysql_query("SELECT * FROM pengajuan_proposal");
    if(mysql_num_rows($sql) != 0){
        while($data = mysql_fetch_assoc($sql)){
            echo '<option>'.$data['dosenpembimbing2'].'</option>';
        }
    }
    ?>
</select>
<input type="submit" name="submit" value="OK" />
</form>
</p>
                    <div class="form-group">
                  
                  <button type="submit" class="btn btn-info pull-right">Submit</button>
                  </div>
                  </div>
              </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about the plugin.
            </div>
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

Status API Training Shop Blog About
© 2016 GitHub, Inc. Terms Privacy Security Contact Help