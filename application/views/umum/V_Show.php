<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="icon_document_alt"></i>knowledge</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="<?php echo base_url($_SESSION['level']) ?>">Home</a></li>
      <li><i class="icon_document_alt"></i><a href="<?php echo base_url('C_knowledge/read/'.$knowledge->divisionID) ?>"><?php echo ucwords($knowledge->divisionName); ?></a></li>
      <li><i class="fa fa-paperclip"></i>Details</li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Details Knowledge
      </header>
      <div class="panel-body">
        <h2 align="center"><?= $knowledge->title ?></h2>
          <div align="center">
        <?php if($knowledge->fileType=='foto'){?>
          <img width="900" src="<?= base_url($knowledge->file) ?>">
        <?php } elseif ($knowledge->fileType=='video') {?>
          <div class="embed-responsive embed-responsive-4by3-" align="center">
            <iframe width="1000" height="600" class="embed-responsive-item" src="<?= base_url($knowledge->file) ?>" allowfullscreen></iframe>
          </div>
        <?php } else {?>
          <embed src="<?= base_url($knowledge->file) ?>" width="1100" height="600" type='application/pdf'>
        <?php } ?>
          </div>
          <div>
            <address><?= $knowledge->description ?></address>
          </div>
          <br/>
          <div>
              <ul class="chats">
                <?php foreach ($comment as $rep){?>
                <li class="<?php if($rep->userID==$_SESSION['user']){echo "by-other";}else {echo "by-me";} ?>">
                  <!-- Use the class "pull-left" in avatar -->
                  <div class="avatar <?php if($rep->userID==$_SESSION['user']){echo "pull-right";}else {echo "pull-left";} ?>">
                    <?php if($rep->userPhoto==null){
                      echo "<img src=".base_url('assets/upload/users/user.jpg')." width=40px />";
                    }else {
                      echo "<img src=".base_url($rep->userPhoto)." width=40px />";
                    }?>
                  </div>
                  <div class="chat-content">
                    <!-- In meta area, first include "name" and then "time" -->
                    <div class="chat-meta"><?php if($rep->userID==$_SESSION['user']){ ?>
                      <?= $rep->dateOfComment ?> <span class="pull-right"><?= $rep->name ?></span>
                    <?php }else { ?>
                      <?= $rep->name ?> <span class="pull-right"><?= $rep->dateOfComment ?></span>
                    <?php } ?>
                    </div>
                    <?= $rep->content ?>
                    <?php if($rep->userID==$_SESSION['user']){ ?>
                      <div class="chat-meta">
                        <span class="pull-right"><a href="<?= base_url('C_comment/del/'.$rep->commentID.'/'.$rep->knowledgeID.'/'.$knowledge->divisionID)?>"><i class="fa fa-trash-o"></i></a></span>
                      </div>
                    <?php } ?>
                    <div class="clearfix"></div>
                  </div>
                </li>
                <?php } ?>
              </ul>
          </div>
              <!-- Widget footer -->
              <div class="widget-foot">
                <form class="form-inline" method="post" action="<?= base_url('C_comment/add/'.$knowledge->divisionID) ?>">
                  <div class="form-group col-md-11">
                    <input type="text" name="isi" class="form-control" placeholder="Type your answer here...">
                    <input type="text" name="kno" value="<?= $knowledge->knowledgeID ?>" hidden>
                  </div>
                  <button type="submit" class="btn btn-info">Send</button>
                </form>
              </div>
      </div>
    </section>
  </div>
</div>
