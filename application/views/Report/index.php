<?php if($this->session->userdata('id') != null){?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <?php $this->load->view('assets')?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php $this->load->view('navbar')?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
             <a id="addShipper" class="btn btn-primary">Add Shipper</a>
              <a id="addConsignee" class="btn btn-primary">Add Consignee</a>
                          <a id="addSurvey" class="btn btn-primary">Add Shipment</a>
          </div>
          <br>
          <br>
          <div class="col-xs-12">
           <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Survey</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Shipper</th>
                    <th>Consignee</th>
                    <th>Vessel</th>
                    <th>CARRIER</th>
                    <th>VOL</th>
                    <th>POL</th>
                    <th>DEST</th>
                    <th>ETD</th>
                    <th>ETA</th>
                    <th>HBL</th>
                    <th>MBL</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($reportdb as $dt){?>
                  <tr>
                    <td><?=$dt->load_id?></td>
                    <td><?=$dt->shipper_name?></td>
                    <td><?=$dt->cons_name?></td>
                    <td><?=$dt->load_vessel?></td>
                    <td><?=$dt->load_carrier?></td>
                    <td><?=$dt->load_vol?></td>
                    <td><?=$dt->load_pol?></td>
                    <td><?=$dt->load_dest?></td>
                    <td><?=date("d/M/Y",strtotime($dt->load_etd))?></td>
                    <td><?=date("d/M/Y",strtotime($dt->load_eta))?></td>
                    <td><?=$dt->load_hbl?></td>
                    <td><?=$dt->load_mbl?></td>
                    <td>
                      <a href="<?=base_url()?>LoadReport/generate/<?=$dt->load_id?>" class="btn btn-danger"><i class="fa fa-eye"></i></a>
                      <a href="#" class="btn btn-danger"><i class="fa fa-edit"></i></a>
                      <a href="<?=Base_url()?>LoadReport/deleteReport/<?=$dt->load_id?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
<div class="modal fade" id="modalShipper">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Shipper Form</h4>
          </div>
                    <div class="modal-body">
                      <form role="form" method="POST" action="<?=Base_url()?>LoadReport/postShipper">
             <div class="form-group">
                      <label for="exampleInputEmail1">Shipper Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Shipper Address</label>
                      <input type="text" class="form-control" id="name" name="address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Shipper Contact</label>
                      <input type="text" class="form-control" id="name" name="contact">
                    </div>
            </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalConsignee">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Consignee Form</h4>
          </div>
          <div class="modal-body">
            <form role="form" method="POST" action="<?=Base_url()?>LoadReport/postConsignee">
            <div class="form-group">
                      <label for="exampleInputEmail1">Consignee Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Consignee Address</label>
                      <input type="text" class="form-control" id="name" name="address">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Consignee Contact</label>
                      <input type="text" class="form-control" id="name" name="contact">
                    </div></div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>

  <div class="modal fade" id="modalSurvey">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add Shipment Form</h4>
          </div>
          <div class="modal-body">
            <form role="form" method="POST" action="<?=Base_url()?>LoadReport/postReport">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Shipper</label>
                      <select class="form-control" name="shipper">
                        <?php foreach($shipper as $dt){?>
                        <option value="<?=$dt->shipper_id;?>"><?=$dt->shipper_name;?></option>
                        <?php }?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Vessel</label>
                      <input type="text" class="form-control" id="name" name="vessel">
                    </div>

                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Consignee</label>
                      <select class="form-control" name="cons">
                         <?php foreach($consignee as $dt){?>
                        <option value="<?=$dt->cons_id;?>"><?=$dt->cons_name;?></option>
                        <?php }?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Carrier</label>
                      <input type="text" class="form-control" id="name" name="carrier">
                    </div>
                    


                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Vol.</label>
                      <input type="text" class="form-control" id="name" name="vol">
                    </div>
                  </div>
                </div>
                <div class="row">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">POL</label>
                    <input type="text" class="form-control" id="name" name="pol">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">HBL</label>
                    <input type="text" class="form-control" id="name" name="hbl">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ETD</label>
                    <input type="text" class="form-control pull-right" id="datepicker" name="etd">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">DEST</label>
                    <input type="text" class="form-control" id="name" name="dest">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">MBL</label>
                    <input type="text" class="form-control" id="name" name="mbl">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ETA</label>
                    <input type="text" class="form-control pull-right" id="datepickers" name="eta"></div>

                  </div>
                </div>
                









              </div>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- Control Sidebar -->
<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
   <div class="control-sidebar-bg"></div>
 </div>
 <!-- ./wrapper -->

 <!-- jQuery 3 -->
 <script src="<?=Base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?=Base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- DataTables -->
 <script src="<?=Base_url()?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="<?=Base_url()?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
 <!-- SlimScroll -->
 <script src="<?=Base_url()?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
 <script src="<?=Base_url()?>assets/bower_components/fastclick/lib/fastclick.js"></script>
 <!-- AdminLTE App -->
 <script src="<?=Base_url()?>assets/dist/js/adminlte.min.js"></script>
 <script src="<?=Base_url()?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?=Base_url()?>assets/dist/js/demo.js"></script>
 <!-- page script -->
 <script>
  $(function () {
    $('#example1').DataTable()
  })
</script>
<script>
  $(function () {
    $('#addSurvey').click(function(){
      $('#modalSurvey').modal('show');
    });
    $('#addShipper').click(function(){
      $('#modalShipper').modal('show');
    });
    $('#addConsignee').click(function(){
      $('#modalConsignee').modal('show');
    });
    $('#datepicker,#datepickers').datepicker({
      autoclose: true,

    });
  })
</script>
</body>
</html>
<?php } else{
  redirect('Welcome');
}?>