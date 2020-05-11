<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">


    <div class="box add_area" style="display: <?php if($page_title == "Edit"){echo "block";}else{echo "none";} ?>">
      
      <div class="box-header with-border">
        <?php if (isset($page_title) && $page_title == "Edit"): ?>
          <h3 class="box-title">Edit letter</h3>
        <?php else: ?>
          <h3 class="box-title">Add letter </h3>
        <?php endif; ?>

        <div class="box-tools pull-right">
          <?php if (isset($page_title) && $page_title == "Edit"): ?>
            <?php $required = ''; ?>
            <a href="<?php echo base_url('admin/letter') ?>" class="pull-right btn btn-primary btn-sm"><i class="fa fa-angle-left"></i> Back</a>
          <?php else: ?>
            <?php $required = 'required'; ?>
            <a href="#" class="text-right btn btn-primary btn-sm cancel_btn"><i class="fa fa-list"></i> All letter</a>
          <?php endif; ?>
        </div>
      </div>

      <div class="box-body">
        <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('admin/letter/add')?>" role="form" novalidate>
        	<div class="form-group">
	              <label>Company Name</label>
	              <input type="text" class="form-control" name="company_name" value="<?php echo html_escape($page[0]['company_name']); ?>" <?php echo html_escape($required); ?>>
	          </div>
	        <?php 
	        if ($this->uri->segment(3) == 'edit') {
	        	echo '
	        	<div class="form-group row">
		            <label>Requirements</label>
		              	';
	        	$req = explode(';', $page[0]['requirements']);
	        	for ($i=0; $i < count($req)-1 ; $i++) { 
	        		echo "<div id='baris' class='row col-md-12'>";
		        		echo '<div class="col-md-11">';
		        		echo '<input type="text" class="form-control" name="requirements[]" placeholder="Pas Photo;Izajah;dll" value="'.$req[$i].'">
		        		';
		        		echo '</div>';
		        		echo '<div class="col-md-1">';
				        echo '<button id="hapusRow" type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>';
				        echo '</div>';
			        echo '</div>';
	        	}
	        	echo '</div>';
	        }else{
	        	echo '
	        		<div class="form-group">
	              	<label>Requirements</label>
	              	<input type="text" class="form-control" name="requirements[]" '.html_escape($required).' placeholder="Pas Photo;Izajah;dll">
	          	</div>
	        	';
	        } ?>
	        
          	

          	<div id="newRow"></div>
            <button id="addRow" type="button" class="btn btn-info"><i class="fa fa-plus"></i></button>

          
              
          <input type="hidden" name="id" value="<?php echo html_escape($page['0']['id']); ?>">
          <!-- csrf token -->
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">

          <hr>

          <div class="row m-t-30">
            <div class="col-sm-12">
              <?php if (isset($page_title) && $page_title == "Edit"): ?>
                <button type="submit" class="btn btn-info pull-left">Save Changes</button>
              <?php else: ?>
                <button type="submit" class="btn btn-info pull-left"> Save page</button>
              <?php endif; ?>
            </div>
          </div>

        </form>

      </div>

      <div class="box-footer">

      </div>
    </div>


    <?php if (isset($page_title) && $page_title != "Edit"): ?>

    <div class="box list_area">
      <div class="box-header with-border">
        <?php if (isset($page_title) && $page_title == "Edit"): ?>
          <h3 class="box-title">Edit letter <a href="<?php echo base_url('admin/letter') ?>" class="pull-right btn btn-primary btn-sm"><i class="fa fa-angle-left"></i> Back</a></h3>
        <?php else: ?>
          <h3 class="box-title">All letter </h3>
        <?php endif; ?>

        <div class="box-tools pull-right">
         <a href="#" class="pull-right btn btn-info btn-sm add_btn"><i class="fa fa-plus"></i> Add New letter</a>
        </div>
      </div>

      <div class="box-body">
        
        <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
            <table class="table table-bordered datatable" id="dg_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Company Name</th>
                        <th>Reqruitments</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($pages as $row): ?>
                    <tr id="row_<?php echo ($row->id); ?>">
                        
                        <td width="5%"><?php echo $i; ?></td>
                        <td><?php echo $row->company_name; ?></td>
                        <td><?php echo $row->requirements; ?></td>

                        <td class="actions" width="12%">
                          <a href="<?php echo base_url('admin/letter/edit/'.html_escape($row->id));?>" class="on-default edit-row" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a> &nbsp; 

                          <a data-val="page" data-id="<?php echo html_escape($row->id); ?>" href="<?php echo base_url('admin/letter/delete/'.html_escape($row->id));?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></a>&nbsp;
                          <a data-val="page" target="_blank" data-id="<?php echo html_escape($row->id); ?>" href="<?php echo base_url('admin/letter/cetak/'.html_escape($row->id));?>" class="on-default remove-row print_item" data-toggle="tooltip" data-placement="top" title="Print"><i class="fa fa-print"></i></a> &nbsp;

                        </td>
                    </tr>
                  <?php $i++; endforeach; ?>
                </tbody>
            </table>
        </div>

      </div>

      <div class="box-footer">

      </div>
    </div>
    <?php endif; ?>



  </section>
</div>
