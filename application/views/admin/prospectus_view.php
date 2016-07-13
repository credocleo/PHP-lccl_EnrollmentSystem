 <body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>PROSPECTUS FORM</h3>
					<ol class="breadcrumb">
						<li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/prospectus_dis>Prospectus</a></li>
						<li><i class="icon_document_alt"></i>Add new Prospectus</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Prospectus
                          </header>
                          
                          <div class="panel-body">
                             <?php echo form_open('admin/prospectus_validation'); ?>
            
                         <?php if($this->session->flashdata('flashSuccess')){ ?>
                        <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
                           <?php } ?>
                                
            
                        <table border ="0" cellpadding="">
                         <tr>
                                <td colspan = "2">
                                <?php echo form_error('prospectus_course'); ?>
                                    <div class="form-group">
                                        <label for="prospectus_course">Prospectus Course</label>
                                        <input class="form-control" id="prospectus_course" name="prospectus_course" type="text" value="<?php echo set_value('prospectus_course');?>" size="30" aria-required="true" required="required" placeholder="Prospectus Course">
                                    </div>
                                </td>
                        </tr>

                         <tr>
                                <td colspan = "2">
                                <?php echo form_error('major_in'); ?>
                                    <div class="form-group">
                                        <label for="major_in">Major In</label>
                                        <input class="form-control" id="major_in" name="major_in" type="text" value="<?php echo set_value('major_in');?>" size="30" aria-required="true" required="required" placeholder="Major In">
                                    </div>
                                </td>
                        </tr>

                            <tr>
                                <td colspan = "2">
                                <?php echo form_error('per_cmo'); ?>
                                    <div class="form-group">
                                        <label for="per_cmo">Per C.M.O.</label> 
                                        <input class="form-control" id="per_cmo" name="per_cmo" type="text" value="<?php echo set_value('per_cmo'); ?>" size="30" aria-required="true" required="required">
                                    </div>
                                </td>                               
                            </tr>
                            
                            <tr>
                                <td>
                                <?php echo form_error('prospectus_sy'); ?>
                                    <div class="form-group">
                                        <label for="prospectus_sy">Prospectus School Year</label>
                                        <input class="form-control" id="prospectus_sy" name="prospectus_sy" type="text" value="<?php echo set_value('prospectus_sy');?>" size="30" aria-required="true" required="required" placeholder="Prospectus School Year">
                                    </div>
                                </td>
                            </tr>
                            
                                                
                            <tr>
                                <td>
                                    <button type="submit" name = "submit" class="btn btn-primary" id="submit">Submit</button>

                                </td>
                                
                                <td colspan="2">
                                    <button type="reset" class="btn btn-primary" id="clear" value="reset">Clear</button>
                                </td>
                            </tr>
                        </table>
					<?php echo form_close();?>
            </div>
   </div> 
  </div> 

      <!--main content end-->
  </section>
  <!-- container section end -->
   
  </body>
</html>
