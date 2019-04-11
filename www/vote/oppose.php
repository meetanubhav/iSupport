 while ($arr1 = $lr->fetch_assoc())
                                  {

                                     <a name="" id="" class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModalCenter" role="button"><i class="fa fa-thumbs-up fa-sm"> Support    </i></a>
                                <input type="number" id="phpvalv" value="<?php echo $campaign['petid']; ?>" readonly="" style="visibility: hidden;" />







<!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Support Campaign</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <div class="modal-body">
                               <div class="container">
                                   <form action="www/vote/support.php" method="POST">
                                     <div class="form-group">
                                       <input type="text"
                                         class="form-control" name="fname" id="fname" aria-describedby="helpId" placeholder="First Name"> 
                                    </div>
                                    <div class="form-group">   
                                         <input type="text"
                                         class="form-control" name="lname" id="lname" aria-describedby="helpId" placeholder="Last Name">          
                                     </div>
                                    <div class="form-group">   
                                        <input type="email"
                                         class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="E-mail">                                             
                                     </div>         
                                      <input type="number" name="petid" id="phpvalv" value="<?php echo $campaign['petid']; ?>" readonly="" style="visibility: hidden;" />                            
                               </div>
                               
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                <button type="submit" name="submit" class="btn btn-danger"><i class="fa fa-lock"> Sign this petition</i></button>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>