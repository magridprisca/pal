<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="icon_chat_alt"></i>Discussion</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="<?php echo base_url($_SESSION['level']) ?>">Home</a></li>
    </ol>
    <section>
      <div class="row">
        <div class="col-md-12 portlets">
          <!-- Widget -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="pull-left">Topic: <?= $discuss->topic ?></div>
              <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <!-- Widget content -->
              <div class="padd sscroll">
                <section class="panel">
                  <div class="bio-graph-heading"><?= $discuss->discContent ?></div>
                </section>
                <ul class="chats">
                  <?php foreach ($detailReply as $rep){?>
                  <li class="<?php if($rep->UserID==$_SESSION['user']){echo "by-other";}else {echo "by-me";} ?>">
                    <!-- Use the class "pull-left" in avatar -->
                    <div class="avatar <?php if($rep->UserID==$_SESSION['user']){echo "pull-right";}else {echo "pull-left";} ?>">
                      <img src="<?php echo base_url() ?>assets/admin/img/user.jpg" alt="" />
                    </div>
                    <div class="chat-content">
                      <!-- In meta area, first include "name" and then "time" -->
                      <div class="chat-meta"><?php if($rep->UserID==$_SESSION['user']){ ?>
                        <?= $rep->dateOfReply ?> <span class="pull-right"><?= $rep->name ?></span>
                      <?php }else { ?>
                        <?= $rep->name ?> <span class="pull-right"><?= $rep->dateOfReply ?></span>
                      <?php } ?>
                      </div>
                      <?= $rep->replyContent ?>
                      <div class="clearfix"></div>
                    </div>
                  </li>
                  <?php } ?>
                </ul>

              </div>
              <!-- Widget footer -->
              <div class="widget-foot">
                <form class="form-inline" method="post" action="<?= base_url('C_discussion/addReply') ?>">
                  <div class="form-group col-md-11">
                    <input type="text" name="isi" class="form-control" placeholder="Type your answer here...">
                    <input type="text" name="discus" value="<?= $discuss->discussID ?>" hidden>
                  </div>
                  <button type="submit" class="btn btn-info">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--template-->
  </div>
</div>
