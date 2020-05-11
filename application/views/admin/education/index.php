<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">


    <div class="box add_area" style="display: <?php if($page_title == "Edit"){echo "block";}else{echo "none";} ?>">
      
      <div class="box-header with-border">
        <?php if (isset($page_title) && $page_title == "Edit"): ?>
          <h3 class="box-title">Edit Education</h3>
        <?php else: ?>
          <h3 class="box-title">Add Education </h3>
        <?php endif; ?>

        <div class="box-tools pull-right">
          <?php if (isset($page_title) && $page_title == "Edit"): ?>
            <?php $required = ''; ?>
            <a href="<?php echo base_url('admin/education') ?>" class="pull-right btn btn-primary btn-sm"><i class="fa fa-angle-left"></i> Back</a>
          <?php else: ?>
            <?php $required = 'required'; ?>
            <a href="#" class="text-right btn btn-primary btn-sm cancel_btn"><i class="fa fa-list"></i> All education</a>
          <?php endif; ?>
        </div>
      </div>

      <div class="box-body">
        <form id="cat-form" method="post" enctype="multipart/form-data" class="validate-form" action="<?php echo base_url('admin/education/add')?>" role="form" novalidate>

          <div class="form-group">
              <label>Tiers</label>
              <input type="text" class="form-control" name="position" value="<?php echo html_escape($page[0]['position']); ?>" <?php echo html_escape($required); ?>>
          </div>

          <div class="form-group">
              <label>School Name</label>
              <input type="text" class="form-control" name="school_name" value="<?php echo html_escape($page[0]['school_name']); ?>" <?php echo html_escape($required); ?>>
          </div>
          <div class="form-group">
              <label>Year</label>
              <input type="number" class="form-control" name="year" value="<?php echo html_escape($page[0]['year']); ?>" <?php echo html_escape($required); ?>>
          </div>
         
          <div class="form-group">
              <label>Description</label>
              <textarea id="ckEditor" class="form-control" name="description"><?php echo $page[0]['description']; ?></textarea>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="tidak" value="0" name="is_last_education" <?php if ($page[0]['is_last_education'] == 0) {
              echo "checked";
            } ?>>
            <label class="form-check-label" for="tidak" >Tidak</label>
          </div>      
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ya" value="1" name="is_last_education" <?php if ($page[0]['is_last_education'] == 1) {
              echo "checked";
            } ?>>
            <label class="form-check-label" for="ya" >Ya</label>
          </div>
              
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
          <h3 class="box-title">Edit Education <a href="<?php echo base_url('admin/education') ?>" class="pull-right btn btn-primary btn-sm"><i class="fa fa-angle-left"></i> Back</a></h3>
        <?php else: ?>
          <h3 class="box-title">All Education </h3>
        <?php endif; ?>

        <div class="box-tools pull-right">
         <a href="#" class="pull-right btn btn-info btn-sm add_btn"><i class="fa fa-plus"></i> Add New Education</a>
        </div>
      </div>

      <div class="box-body">
        
        <div class="col-md-12 col-sm-12 col-xs-12 scroll table-responsive">
            <table class="table table-bordered datatable" id="dg_table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tiers</th>
                        <th>School Name</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($pages as $row): ?>
                    <tr id="row_<?php echo ($row->id); ?>">
                        
                        <td width="5%"><?php echo $i; ?></td>
                        <td><?php echo $row->position; ?></td>
                        <td><?php echo $row->school_name; ?></td>
                        <td><?php echo $row->year; ?></td>

                        <td class="actions" width="12%">
                          <a href="<?php echo base_url('admin/education/edit/'.html_escape($row->id));?>" class="on-default edit-row" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a> &nbsp; 

                          <a data-val="page" data-id="<?php echo html_escape($row->id); ?>" href="<?php echo base_url('admin/education/delete/'.html_escape($row->id));?>" class="on-default remove-row delete_item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash-o"></i></a> &nbsp;

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
