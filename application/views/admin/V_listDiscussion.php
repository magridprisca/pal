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
      </br>
<!--Project Activity start-->
<section class="panel">
  <div class="panel-body progress-panel">
    <div class="row">
      <div class="col-md-12">
      <div class="task-progress col-lg-10">
        <h1>To Do Everyday</h1>
      </div>
      <div class="col-md-2">
        <span class="profile-ava">
          <img alt="" class="simple" src="<?php echo base_url() ?>assets/admin/img/avatar1_small.jpg">Jenifer smith
        </span>
      </div>
    </div>
    </div>
  </div>
  <table class="table table-hover personal-task" style="border-collapse: collapse;">
    <tbody>
      <tr>
        <td class="btn btn-primary btn-sm fa fa-plus col-lg-12" colspan="4" data-toggle="modal" href="#myModal"> Add</td>
      </tr>
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
    <!-- modal -->
      </div>
    </div>
