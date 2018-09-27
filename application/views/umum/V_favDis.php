<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="icon_chat_alt"></i>Favorite Discussion</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="<?php echo base_url($_SESSION['level']) ?>">Home</a></li>
    </ol>
<section class="panel">
        <table class="table table-hover personal-task" style="border-collapse: collapse;">
            <thead>
              <tr style="background-color: #2A3542">
                <th width="150px" style="color: #FFFFFF"><i class="icon_calendar"></i> Discussion initiation</th>
                <th width="250px" style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Topic</th>
                <th width="150px" style="color: #FFFFFF; text-align: center"><i class="icon_cogs"></i> Content</th>
                <th width="200px" style="color: #FFFFFF; text-align: center"><i class="icon_profile"></i> Total reply</th>
                <th width="150px" style="color: #FFFFFF"><i class="icon_cogs"></i> Initiate by</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($discussion as $dis){?>
                <tr>
                  <td><?= $dis->dateOfDiscuss ?></td>
                  <td><?= $dis->topic ?></td>
                  <td><?= $dis->discContent ?></td>
                  <td style="text-align: center;"><?= $dis->tot ?></td>
                  <td><?= $dis->name ?></td>
                </tr>
              <?php } ?>
          </tbody>
        </table>
      </section>
    </div>
  </div>
