            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Data Merek
                        <small>(Brand)</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <!-- <li><a href="#">Tables</a></li> -->
                        <li class="active">Data Merek</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="box">
                                <!-- <div class="box-header">
                                    <h3 class="box-title">Data Merek</h3>                                    
                                </div> -->
                                <!-- /.box-header --> 
                                <div class="box-body table-responsive">
                                    <a href="<?php echo site_url();?>/Brand_controller/add" class="btn btn-info">Tambah</a> 
                                    <p></p>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No</th>
                                                <th class="text-center">Kode Merek</th>
                                                <th class="text-center">Nama Merek</th>
                                                <th class="text-center">Keterangan</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>CARTER</td>
                                                <td>JOHN CARTER</td>
                                                <td>Barang Oke</td>
                                                <td class="text-center">
                                                    <a href="<?php echo site_url();?>/Brand_controller/edit" class="btn bg-purple margin" type='button'><i class='fa fa-edit'></i></a> 
                                                    <a href="" onclick="return confirm('Apakah anda yakin data akan di hapus?');" class="btn bg-orange margin" type='button'><i class='fa fa-eraser' ></i></a> 
                                                </td>
                                            </tr>  
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side --> 


        <!-- jQuery 2.0.2 -->
        <!-- // <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> -->
        <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
        
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>

     