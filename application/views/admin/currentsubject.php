<body>
                       
                          <div id="display_nav">

                          <div class="panel-body">
                           
                             <table class="table table-striped table-bordered">
                               
                                     <thead>


                                       <tr><td colspan=4><center><font color=green>Subject Added</font></center>
                                        <?php foreach ($posts->result() as $row)
                                             {?>

                                        <tr><td>Subject: </td><td><font color=blue> <td><?php echo $row->ps_subject_id;?></td>
                                      
                                      <tr>
                                           
                                            <td> <strong> Year Level</strong> </td>
                                            <td><?php echo $row->ps_year_level;?></td>
                                             <td> <strong> Semester</strong> </td>
                                             <td><?php echo $row->ps_sem;?></td>
                                            
                                        </tr>

                                     
                                  </table>    

            </div>

  </div> 

      <!--main content end-->
  <?php }?>
  </body>
</html>
