<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="icon_chat_alt"></i>Discussion</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="<?php echo base_url($_SESSION['level']) ?>">Home</a></li>
    </ol>
    <div class="row collapse navbar-collapse navbar-form1">
      <form class="form-inline" method="post" action="<?php echo base_url()?>">
            <!--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>-->
            <div class="form-group">
            <select class="form-control" name="kateg">
              <option>Kategori pencarian</option>
              <option value="title">Topick</option>
              <option value="category">Activity</option>
              <option value="userID">Upload by</option>
            </select>

            </div>
            <div class="form-group">
              <input class="form-control m-input" placeholder="Search" name="isi">
            </div>
            <div class="form-group">
              <button class="btn-sm btn-primary" type="submit">Cari</button>
            </div>
        </form>
    </div>
  </div>
</div>
</br>
<!--Project Activity start-->
<section class="panel">
  <div class="panel-body progress-panel">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-hover personal-task" style="border-collapse: collapse;">
          <div class="task-progress col-lg-10">
            <h1>To Do Everyday</h1>
          </div>
          <div class="col-md-2">
            <span class="profile-ava">
              <img alt="" class="simple" src="<?php echo base_url() ?>assets/admin/img/avatar1_small.jpg">Jenifer smith
            </span>
          </div>
            <tr>
              <td class="btn btn-primary fa fa-plus col-lg-12" colspan="5" style="text-align: center" data-toggle="modal" href="#myModal"> Create New Discussion</td>
            </tr>
            <thead>
              <tr style="background-color: #2A3542">
                <th width="250px" style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Topic</th>
                <th width="150px" style="color: #FFFFFF"><i class="icon_calendar"></i> Discussion initiation</th>
                <th width="200px" style="color: #FFFFFF; text-align: center"><i class="icon_profile"></i> Total reply</th>
                <th width="150px" style="color: #FFFFFF"><i class="icon_cogs"></i> Initiate by</th>
                <th width="150px" style="color: #FFFFFF; text-align: center"><i class="icon_cogs"></i> Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($discussion as $dis){?>
                <tr>
                  <td><?= $dis->topic ?></td>
                  <td><?= $dis->dateOfDiscuss ?></td>
                  <td style="text-align: center;">
                    <?php $a=$this->M_discussion->getcountDiscussion($dis->discussID);
                        ECHO $a->total;
                     ?>
                    <?php //$discussionTopic->total ?></td>
                  <td><?= $dis->name ?></td>
                  <td>
                    <div class="btn-group">
                      <a class="btn btn-success" href="<?= base_url('C_discussion/getDiscuss/'.$dis->discussID)?>"><i class="fa fa-eye"> Reply discussion</i></a>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            <tr>
              <td>Today</td>
              <td>web design</td>
              <td><span class="badge bg-important">Upload</span></td>
              <td>
                <span class="profile-ava">
                <img alt="" class="simple" src="<?php echo base_url() ?>assets/admin/img/avatar1_small.jpg">
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!--Project Activity end-->

<!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Discussion form</h4>
          </div>
          <div class="modal-body">
            <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?= base_url('C_discussion/add') ?>">
              <div class="form-group ">
                <label for="topick">Topick<span class="required">*</span></label>
                  <input class="form-control" style="width:549px;"  id="topick" name="topick" placeholder="New topick will you discuss">
              </div></br>
              <div class="form-group ">
                <label for="content">Content<span class="required">*</span></label>
                <textarea class="form-control" cols="70" id="content" name="content" placeholder="What do you think... ."></textarea>
              </div>
          </div>
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
            <button class="btn btn-success" type="submit" >Save discussion</button>
          </div>
        </form>
        </div>
      </div>
    </div>
