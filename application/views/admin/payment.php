<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">

  <div class="row">
    <!-- Skill area -->
    <div class="col-md-8">
      <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Silahkan melakukan pembayaran </h3>
        </div>

        <div class="box-body">
        	<div class="col-md-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <address>
                       <strong><?php echo $user->name ?></strong>
                        <br>
                       <?php echo $user->address ?>
                        <br>
                        <?php echo $user->provinsi ?>,<?php echo $user->kabupaten ?>, <?php echo $user->kecamatan ?> <?php echo $user->kelurahan ?> - <?php echo $user->kodepos ?>
                        <br>
                        <abbr title="Phone"><i class="fa fa-phone"></i> : </abbr> <?php echo $user->phone ?>
                    </address>
                </div>
            </div>
            <div class="row">
                </span>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Akun</th>
                            <th>#</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-9"><em>Aktivasi Akun Inisaya.me (1 Tahun) <label class="label label-success">PRO</label></em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 1 </td>
                            <td class="col-md-1 text-center">Rp10.000</td>
                            <td class="col-md-1 text-center">Rp10.000</td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right">
                            <p>
                                <strong>Subtotal: </strong>
                            </p>
                            <p>
                                <strong>Tax: </strong>
                            </p></td>
                            <td class="text-center">
                            <p>
                                <strong>Rp10.000</strong>
                            </p>
                            <p>
                                <strong>Rp10.000</strong>
                            </p></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td class="text-right"><h4><strong>Total: </strong></h4></td>
                            <td class="text-center text-danger"><h4><strong>Rp10.000</strong></h4></td>
                        </tr>
                    </tbody>
                </table>
                <form id="payment-form" method="post" action="<?=site_url()?>admin/pay/finish">
      <input type="hidden" name="result_type" id="result-type" value=""></div>
      <input type="hidden" name="result_data" id="result-data" value=""></div>
    </form>
    <button id="pay-button" class="btn btn-success">Bayar Sekarang</button>
                </td>
            </div>
        </div>
          
		    
        </div>

      </div>
    </div>
</div>
</section>
</div>



