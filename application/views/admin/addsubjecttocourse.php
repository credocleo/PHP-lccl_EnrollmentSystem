 <body>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>PROPECTUS DETAILS</h3>
          <ol class="breadcrumb">
            <li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/prospectus_display>Add Prospectus</a></i>
            <li><i class="icon_document_alt"></i><a href=<?php echo base_url();?>admin/subject>Add Subjects</a></i>
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
                             <table class="table table-striped table-bordered">
                                <tbody>

      
                                <tr>
                                    <td>
                                       

                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <select class="form-control" name="year" aria-required="true" required="required" >
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                 <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</optiom>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                          </select>
                                        </label>
                                      </div>
                                    </td>
                                 

                                    <td>
                                    <div class="form-group">
                                        <label for="year">Year</label>
                                        <select class="form-control" name="year" aria-required="true" required="required" >
                                                <option value="1">First Semester</option>
                                                <option value="2">Second Semester</option>
                                                <option value="Summer">Summer</option>
                                                 
                                          </select>
                                        </label>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <td colspan="3">
                                                  <?php echo form_open('admin/chooseSubjectstoOffer'); ?>

                                                  
                                                
                                                  <input type="hidden" name="os_semester" class="form-control" value="<?php echo set_value('os_semester'); ?>" size="5" aria-required="true" placeholder="Semester">
                                                    <input type="hidden" name="os_year" class="form-control" value="<?php echo set_value('os_year'); ?>" size="5" aria-required="true" placeholder="Semester">
                              

                                      <button type="submit" name = "submit" class="btn btn-primary">Add Subjects</button>
                                    </td>
                                  </tr>
</table>
 <table class="table table-striped table-bordered">
                                <tbody>
                                   <tr>

                                              <td> <strong> Course Number </strong> </td>
                                              <td> <strong> Year </strong> </td>
                                               <td> <strong> Semester</strong> </td>
                                               <td> <strong> Room</strong> </td>
                                               <td> <strong> Schedule</strong> </td>
                                                <td> <strong> Instructor</strong> </td>

                                             
                                          </tr>

                                              
                                       </thead>

                                       <tbody>
                                           <?php foreach ($offer_info->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->os_subject_id;?></td>
                                               <td><?php echo $row->os_year;?></td>
                                                <td><?php echo $row->os_semester;?></td>
                                                <td><?php echo $row->os_room_id;?></td>
                                                <td><?php echo $row->os_schedule_id;?></td>
                                                 <td><?php echo $row->os_instructor_account_id;?></td>
                                                 <?php  $url = "admin/view_offersubjects/".$subject_id; 
                                                    echo form_open($url);?>
                                          

                                          <td>
                                             <button type="submit" name = "submit" class="btn btn-primary">View schedule</button>
                                            </td>
                                          
                                          <?php }?>    
                                          </tr>



                                                


                                             
                                            </select>
                                    </div>
                                    </td>
                                </tr>
                                

                                             
                                        </tr>
                                         
                                     <tbody>
                                  </table>    
            </div>
   </div> 
  </div> 

      <!--main content end-->
  </section>
  <!-- container section end -->
  
  </body>
</html>
