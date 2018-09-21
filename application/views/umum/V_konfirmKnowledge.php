<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="<?= base_url($_SESSION['level']);?>">Home</a></li>
      <li><i class="icon_document_alt"></i>Knowledge</li>
    </ol>
  </div>
</div>

<!-- page start-->
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading tab-bg-info">
        <ul class="nav nav-tabs">
          <li class="active">
            <a data-toggle="tab" href="<?= base_url('C_knowledge/confirm')?>">
                <i class="icon-home"></i>Taksit <?php foreach ($knowledge $kno){?> <?= $kno->tipe=1 ?>
            </a>
          </li>
          <li>
            <a data-toggle="tab" href="#profile">
                <i class="icon-user"></i>Eksplisit
            </a>
          </li>
        </ul>
      </header>
      <div class="panel-body">
        <div class="tab-content">
          <div id="recent-activity" class="tab-pane active">
            <div class="profile-activity">
              <div class="act-time">
                <div class="activity-body act-in">
                  <span class="arrow"></span>
                  <!--Project Activity start-->
                  <section class="panel">
                    <div class="panel-body progress-panel">
                      <div class="row">
                        <div class="col-md-12">
                          <table class="table table-hover personal-task" style="border-collapse: collapse;">
                              <tr>
                                <td class="btn btn-primary fa fa-plus col-lg-12" colspan="5" style="text-align: center" data-toggle="modal" href="#myModal"> Create New Discussion</td>
                              </tr>
                              <thead>
                                <tr style="background-color: #2A3542">
                                  <th width="250px" style="color: #FFFFFF"><i class=""> </i> Knowledge name</th>
                                  <th width="150px" style="color: #FFFFFF"><i class=""></i> Upload by</th>
                                  <th width="150px" style="color: #FFFFFF; text-align: center"><i class="icon_cogs"></i> Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($knowledge $kno){?>
                                  <tr>
                                    <td> </td>
                                    <td><?= $kno->name ?></td>
                                    <td style="text-align: center;">
                                      <div class="btn-group">
                                        <a class="btn btn-success" href="<?= base_url('C_knowledge/confirm')?>"><i class="fa fa-eye"> Change to eksplisit type</i></a>
                                      </div>
                                    </td>
                                  </tr>
                                <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </section>
                  <!--Project Activity end-->
              <div class="act-time">
                <div class="activity-body act-in">
                  <span class="arrow"></span>
                  <div class="text">
                    <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                    <p class="attribution"><a href="#">Sarah saw</a> at 5:25am, 30th Octmber 2014</p>
                    <p>Knowledge speaks, but wisdom listens.</p>
                  </div>
                </div>
              </div>
              <div class="act-time">
                <div class="activity-body act-in">
                  <span class="arrow"></span>
                  <div class="text">
                    <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                    <p class="attribution"><a href="#">Layla night</a> at 5:25am, 30th Octmber 2014</p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                  </div>
                </div>
              </div>
              <div class="act-time">
                <div class="activity-body act-in">
                  <span class="arrow"></span>
                  <div class="text">
                    <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                    <p class="attribution"><a href="#">Andriana lee</a> at 5:25am, 30th Octmber 2014</p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                      ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  </div>
                </div>
              </div>
              <div class="act-time">
                <div class="activity-body act-in">
                  <span class="arrow"></span>
                  <div class="text">
                    <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                    <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                      ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                      condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros
                      eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- profile -->
          <div id="profile" class="tab-pane">
            <section class="panel">
              <div class="bio-graph-heading">
                About Me
              </div>
              <div class="panel-body bio-graph-info">
                <h1>Bio Graph</h1>
                <div class="row">
                  <div class="bio-row">
                    <p><span>Name </span>: <?=$user->name?> </p>
                  </div>
                  <div class="bio-row">
                    <p><span>User ID </span>: <?=$user->userID?></p>
                  </div>
                  <div class="bio-row">
                    <p><span>Division</span>: <?=$user->divisionName?></p>
                  </div>
                  <div class="bio-row">
                    <p><span>email </span>: <?=$user->userEmail?></p>
                  </div>
                </div>
              </div>
            </section>
            <section>
              <div class="row">
              </div>
            </section>
          </div>
