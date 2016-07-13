 <body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>SUBJECT FORM</h3>
					<ol class="breadcrumb">
						<li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/prospectus_dis>Prospectus</a></li>
						<li><i class="icon_document_alt"></i>Add Subject</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Subjects
                          </header>
                          
                          <div class="panel-body">
                              <?php echo form_open('admin/new_subject'); ?>

					<?php if($this->session->flashdata('flashSuccess')){ ?>
					<p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
					   <?php } ?>
					
					<table border ="0" cellpadding="">
						<tr>
							<td>
								<?php echo form_error('subject_id'); ?>
								<div class="form-group">
									<label for="subject_id">Course Number</label>
									<input class="form-control" id="subject_id" name="subject_id" type="text" value="<?php echo set_value('subject_id'); ?>" size="30" aria-required="true" required="required" placeholder ="Course Number">
								</div>
							</td> 
						</tr>
							
						<tr>
							<td colspan ="3">
								<?php echo form_error('subject_description'); ?>
								<div class="form-group">
									<label for="subject_description">Descriptive Title</label>
									<input class="form-control" id="subject_description" name="subject_description" type="text" value="<?php echo set_value('subject_description'); ?>" size="30" aria-required="true" required="required" placeholder="Description">
								</div>
							</td>
						</tr>

						<tr>	
							<td>
								<?php echo form_error('subject_units'); ?>
								<div class="form-group">
									<label for="subject_units">Units</label>
									<input class="form-control" id="subject_units" name="subject_units" type="text" value="<?php echo set_value('subject_units'); ?>" size="30" aria-required="true" required="required" placeholder="Units">
								</div>
							</td>
							
							
							<td>
								<?php echo form_error('subject_lec_hours'); ?>
								<div class="form-group">
									<label for="subject_lec_hours">Lecture Hours</label>
									<input class="form-control" id="subject_lec_hours" name="subject_lec_hours" type="text" value="<?php echo set_value('subject_lec_hours'); ?>" size="30" aria-required="true" required="required" placeholder="Lecture">
								</div>
							</td>

							<td>
								<?php echo form_error('subject_lab_hours'); ?>
								<div class="form-group">
									<label for="subject_lab_hours">Lab Hours</label>
									<input class="form-control" id="subject_lab_hours" name="subject_lab_hours" type="text" value="<?php echo set_value('subject_lab_hours'); ?>" size="30" aria-required="true" required="required" placeholder="Laboratory">
								</div> 
							</td>
						</tr>
								
						
							
						<tr>	
							<td colspan = "2">
								<?php echo form_error('subject_pre_req'); ?>
								<div class="form-group">
									<label for="subject_pre_req">Pre Requisite</label>
									<input class="form-control" id="subject_pre_req" name="subject_pre_req" type="text" value="<?php echo set_value('subject_pre_req'); ?>" size="30" aria-required="true" required="required" placeholder="Pre Requisite">
								</div>
							</td>
						</tr>

						<tr>
								<td>
									<button type="submit" name = "submit" class="btn btn-primary">Submit</button>
								</td>
								
								<td colspan="2">
									<button type="reset" class="btn btn-primary" value="reset">Clear</button>
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
