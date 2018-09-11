<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?php echo $title_page; ?></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Sample</a></li>
        <li class="active">Page</li>
      </ol>
    </section>


   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

           <?php $this->load->view('v_message'); ?>
          <!-- mode view -->
          <?php if( $mode=='view'){ ?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title pull-left">Data Table With Full Features</h3>
              <a href="<?php echo base_url('sample/add_page'); ?>" class="btn btn-primary pull-right"><i class="fa fa-"></i>Add Data</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-hover dt-responsive" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>
                    <a class="btn btn-warning btn-xs" href="<?php echo base_url('sample/page_edit') ?>" >Ubah</a>
                    <a class="btn btn-danger btn-xs" href="#" onclick="sample_funtion('data')">Hapus</a></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                  <td>C</td>
                  <td>
                    <a class="btn btn-warning btn-xs" href="<?php echo base_url('sample/page_edit') ?>" >Ubah</a>
                    <a class="btn btn-danger btn-xs" href="#" onclick="sample_funtion('data')">Hapus</a></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                  <td>A</td>
                  <td>
                    <a class="btn btn-warning btn-xs" href="<?php echo base_url('sample/page_edit') ?>" >Ubah</a>
                    <a class="btn btn-danger btn-xs" href="#" onclick="sample_funtion('data')">Hapus</a></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                  <td>A</td>
                  <td>
                    <a class="btn btn-warning btn-xs" href="<?php echo base_url('sample/page_edit') ?>" >Ubah</a>
                    <a class="btn btn-danger btn-xs" href="#" onclick="sample_funtion('data')">Hapus</a></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td>7</td>
                  <td>A</td>
                  <td>
                    <a class="btn btn-warning btn-xs" href="<?php echo base_url('sample/page_edit') ?>" >Ubah</a>
                    <a class="btn btn-danger btn-xs" href="#" onclick="sample_funtion('data')">Hapus</a></td>
                </tr>
                <tr>
                  <td>Trident</td>
                  <td>AOL browser (AOL desktop)</td>
                  <td>Win XP</td>
                  <td>6</td>
                  <td>A</td>
                  <td>
                    <a class="btn btn-warning btn-xs" href="<?php echo base_url('sample/page_edit') ?>" >Ubah</a>
                    <a class="btn btn-danger btn-xs" href="#" onclick="sample_funtion('data')">Hapus</a></td>
                </tr>
                <tr>
                  <td>Gecko</td>
                  <td>Firefox 1.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.7</td>
                  <td>A</td>
                  <td>
                    <a class="btn btn-warning btn-xs" href="<?php echo base_url('sample/page_edit') ?>" >Ubah</a>
                    <a class="btn btn-danger btn-xs" href="#" onclick="sample_funtion('data')">Hapus</a></td>
                </tr>

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- end mode view -->

          <!-- mode add or edit -->
          <?php }else if( $mode=='edit' || $mode=='add'){?>

          <div class="box">
            <div class="box-header">
              <center>
              <h3 class="box-title"><?php echo $mode=='add' ? 'SAMPLE FORM ADD DATA':'SAMPLE FORM EDIT DATA';?></h3>
              </center>
              <br>

              <!-- SAMPLE FORM -->
              <form role="form" name="sampleForm" class="form-horizontal" id="sampleForm" method="post" action="<?php echo base_url('sample/save_page');?>">
              <input type="hidden" id="id" name="id" value="<?php echo !empty($edit_data) ? $edit_data["id"]:''; ?>"/>
              <div class="form-group">
                <label for="_name_txt" class="col-sm-3 control-label"> Name <span class="asterisk">*</span></label>

                <div class="col-sm-9">
                  <input type="text" class="form-control" id="_name_txt" name="_name_txt" maxlength="100" placeholder="" value="<?php echo !empty($edit_data) ? $edit_data["name"]:''; ?>">
                </div>
              </div>

               <div class="form-group">
                <label for="description_txt" class="col-sm-3 control-label">Description<span class="asterisk">*</span></label>

                <div class="col-sm-9">
                  <textarea name="description_txt" id="description_txt" class="form-control" rows="2"><?php echo !empty($edit_data) ? $edit_data['description']:''; ?></textarea>
                </div>
              </div>

              <center style="padding-top: 5px">
              <div class="row">
                <a href="<?php echo base_url('sample/page');?>" class="btn btn-warning btn-lg"><i class="fa fa-arrow-left"></i> Back</a>
                <a class="btn btn-primary btn-lg" onclick="simpan();"><i class="fa fa-save"></i> Save</a>
              </div>
              </center>
            </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            </div>
            <!-- /.box-body -->
          </div>
           
          <?php } ?>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>