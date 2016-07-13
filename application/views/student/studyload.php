
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LCC - L</a>
    </div>
	
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href=<?php echo base_url();?>student/studentsInformation>HOME</a></li>
		<li><a href=<?php echo base_url();?>student/class_subject_enrolled>CLASS SCHEDULE</a></li>
        <li><a href=<?php echo base_url();?>student/studentGrade>GRADES</a></li>
        <li><a href=<?php echo base_url();?>student/studyload>STUDY LOAD</a></li>
        
		
     </ul>
     </div> 

	  
	  <div>
			<ul class="nav navbar-nav navbar-right">
      			<li><a href="/logout">Log out</a></li>
      </ul>

    </div>
 
</nav>

<form>
			<div class="col-md-6 col-md-offset-3">
				<?php $info = $info->row();?>
			
				<fieldset class="scheduler-border">
				    <legend class ="scheduler-border">User Information:</legend>
				    Student ID NO.: <?php echo $info->student_id_number;?><br>
				    Last Name: <?php echo $info->student_last_name;?><br>
				    First Name: <?php echo $info->student_first_name;?><br>
					Middle Name: <?php echo $info->middle_name;?><br>
					Course: <?php echo $info->co_course_description;?><br>
					
					Status: <?php echo $info->civil_status;?><br>
					Gender: <?php echo $info->gender;?><br>
				
					
				</fieldset>
					
</br></br>
		<table class="table table-bordered">
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
                                        <label for="year">Semester</label>
                                        <select class="form-control" name="year" aria-required="true" required="required" >
                                                <option value="1">First Semester</option>
                                                <option value="2">Second Semester</option>
                                                <option value="Summer">Summer</option>
                                                 
                                          </select>
                                        </label>
                                      </div>
                                    </td>
                                 

                          
                                  	<td>

                                      <button type="submit" name = "submit" class="btn btn-primary">Search</button>
</td>
</tr>

                                 </table>


	<table class="table table-striped table-bordered">
                                <tbody>
                                   <tr>

                                              <td> <strong> Course Number </strong> </td>
                                                 <td> <strong> Description</strong> </td>
                                                    <td> <strong> Units</strong> </td>
                                                <td> <strong>Days </strong> </td>
                                                   <td> <strong> Time </strong> </td>
                                                    <td> <strong> Room </strong> </td>
                                            
                                     
                                           

                                             
                                          </tr>

                                              
                                       </thead>

                                       <tbody>
                                           <?php foreach ($offer_info->result() as $row)
                                               {?>
                                          <tr>
                                               <td><?php echo $row->sched_subject_id;?></td>
                                               
                                                <td><?php echo $row->s_subject_description;?></td>
                                                <td><?php echo $row->sched_units;?></td>
                                                  <td><?php echo $row->sched_day;?></td>
                                                    <td><?php echo $row->sched_time;?></td>
                                                    <td><?php echo $row->sched_room;?></td>

                                      </tr>

                                       
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
