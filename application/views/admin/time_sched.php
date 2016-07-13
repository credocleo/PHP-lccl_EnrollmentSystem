 <body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> SCHEDULE</h3>
					<ol class="breadcrumb">
						
            <li><a href=<?php echo base_url();?>admin/time_schedule><i class="icon_document_alt"></i>Add Schedule</a>
           <a href=<?php echo base_url();?>admin/courses><i class="icon_document_alt"></i>Show Schedule</a>
				
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             User
                          </header>
                          <div class="panel-body">
                              <?php echo form_open('admin/time_schedule'); ?>
                
                <?php if($this->session->flashdata('flashSuccess')){ ?>
                    <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
                       <?php } ?>
                
                                <table border ="0" cellpadding="">
                                
                                <tr>
                                    <td>
                                        <?php echo form_error('ts_days'); ?>
                                    <div class="form-group">
                                        <label for="ts_days">Days</label>
                                        <select class="form-control" name="ts_days" aria-required="true" required="required" >
                                                <option>Choose Days</option>  
                                                <option value="MWF">MWF</option>
                                                <option value="TTH">TTH</option>
                                                <option value="SATURDAY">SATURDAY</option>
                                            </select>
                                    </div>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <?php echo form_error('ts_time'); ?>
                                        <div class="form-group">
                                            <label for="ts_time">Time</label>
                                            <input class="form-control" name="ts_time"  type="text" value="<?php echo set_value('ts_time'); ?>" size="30" aria-required="true" required="required" placeholder="Time">
                                        </div>
                                    </td>
                                </tr>
                            
                                         
                         
                                <tr>
                                    <td>
                                        <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                                    </td>
                                
                                    <td>
                                        <button type="reset" class="btn btn-primary">Clear</button>
                                    </td>
                            </tr>
                        </table>
            <?php echo form_close();?>
            </div>
      <!--main content end-->
  </section>
  <!-- container section end -->
   
  </body>
</html>
