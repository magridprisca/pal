        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="<?php echo base_url($_SESSION['level']) ?>">Home</a></li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4><?= $user->name ?></h4>
                  <div class="follow-ava" data-toggle="modal" href="#myModal">
                    <?php if($user->userPhoto==null){
                      echo '<img class="image" src='.base_url('assets/upload/users/user.jpg').'>
                            <div class="middle">
                              <div><i class="fa fa-camera" style="color: 	#696969"></i></div>
                            </div>';
                    }else {
                      echo '<img class="image" src='.base_url($user->userPhoto).' >
                            <div class="middle">
                              <div><i class="fa fa-camera" style="color: 	#696969"></i></div>
                            </div>';
                    }?>
                    </div>
                  <h6><?= $user->divisionName ?></h6>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category pull-right">
                  <ul>
                    <li class="active">

                      <i class="fa fa-comments fa-2x"> </i><br> Contrary to popular belief, Lorem Ipsum is not simply
                    </li>

                  </ul>
                </div>
                <div class="col-lg-2 col-sm-6 follow-info weather-category pull-right">
                  <ul>
                    <li class="active">

                      <i class="fa fa-tachometer fa-2x"> </i><br> Contrary to popular belief, Lorem Ipsum is not simply
                    </li>

                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" role="form" action="<?= base_url('C_profile/edit') ?>" method="post">
                          <?php echo form_open('form'); ?>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">User ID</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" name="userid" value="<?= $user->userID?>" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-6">
                              <input type="text" class="form-control" name="name" value="<?= $user->name ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-6">
                              <input type="password" class="form-control" id="password" name="password" value="<?= $user->password ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Division</label>
                            <div class="col-lg-6">
                              <select class="form-control m-bot15" name="divisi">
                                  <option>Choose Your Division</option>
                                  <?php foreach($divisi as $div) { ?>
                                    <option value="<?= $div->divisionID ?>" <?php if($div->divisionID==$user->divisionID){echo"selected";}?>>
                                      <?= $div->divisionName ?></option>
                                  <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-6">
                              <input type="email" class="form-control" name="email" value="<?= $user->userEmail ?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary">Save</button>
                              <button type="button" class="btn btn-danger">Cancel</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Change your photo's</h4>
                  </div>
                  <div class="modal-body">
                    <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?= base_url('C_profile/photo') ?>">
                      <div class="form-group ">

                      </div>
                  <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-success" type="submit" >Save change</button>
                  </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>
