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
    <section class="panel">
      <header class="panel-heading tab-bg-info">
        <ul class="nav nav-tabs">
          <li class="active">
            <a data-toggle="tab" href="#recent-activity">
                <i class="icon-home"></i>Taksit
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
                    <div class="panel-body progress-panel">
                      <div class="row">
                        <div class="col-md-12">
                          <table class="table table-hover personal-task" style="border-collapse: collapse;">
                              <thead>
                                <tr style="background-color: #2A3542">
                                  <th width="250px" style="color: #FFFFFF"><i class=""> </i> Knowledge name</th>
                                  <th width="150px" style="color: #FFFFFF"><i class=""></i> Upload by</th>
                                  <th width="150px" style="color: #FFFFFF; text-align: center"><i class="icon_cogs"></i> Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($kno0 as $knowledge){?>
                                  <tr>
                                    <td><?= $knowledge->title ?></td>
                                    <td><?= $knowledge->name ?></td>
                                    <td style="text-align: center;">
                                        <a class="btn btn-success" href="<?= base_url('C_knowledge/change/1/'.$knowledge->knowledgeID)?>"><i class="fa fa-eye"> Change to eksplisit type</i></a>
                                    </td>
                                  </tr>
                                <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </section>
