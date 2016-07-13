 <body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Courses Offered</h3>
					<ol class="breadcrumb">
						<li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/courses>Courses</a></li>
						<li><i class="icon_document_alt"></i>Add new course</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Courses
                          </header>
                          
                          <div class="panel-body">
                              <?php echo form_open('admin/add_course'); ?>

					<?php if($this->session->flashdata('flashSuccess')){ ?>
                    <p class='flashMsg flashSuccess'> <?=$this->session->flashdata('flashSuccess')?> </p>
                       <?php } ?>
					
					<table border ="0" cellpadding="">
							
						<tr>
							<td>
								<?php echo form_error('co_courses'); ?>
								<div class="form-group">
									<label for="co_courses">Course</label>
									<input class="form-control" name="co_courses" type="text" value="<?php echo set_value('co_courses'); ?>" size="30" aria-required="true" required="required" placeholder="Course">
								</div>
							</td>
						</tr>

						<tr>	
							<td colspan ="3">
								<?php echo form_error('co_course_description'); ?>
								<div class="form-group">
									<label for="co_course_description">Course Description</label>
									<input class="form-control" name="co_course_description" type="text" value="<?php echo set_value('co_course_description'); ?>" size="30" aria-required="true" required="required" placeholder="Description">
								</div>
							</td>
							

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
