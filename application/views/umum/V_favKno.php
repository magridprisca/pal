<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="icon_document_alt"></i>knowledge</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="<?php echo base_url($_SESSION['level']) ?>">Home</a></li>
    </ol>
        <section class="panel">
        <table class="table table-advance table-bordered">
                <tbody>
                  <tr style="background-color: #2A3542">
                    <th width="150px" style="color: #FFFFFF"><i class="icon_calendar"></i> Date of upload</th>
                    <th width="150px" style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Title</th>
                    <th width="400px" style="color: #FFFFFF"><i class="icon_mail_alt"></i> Descrption</th>
                    <th width="100px" style="color: #FFFFFF"><i class="icon_cogs"></i> Comment</th>
                    <th width="100px" style="color: #FFFFFF"><i class="icon_profile"></i> Upload by</th>
                  </tr>
                  <?php foreach ($knowledge as $key){?>
                    <tr>
                      <td><?= $key->dateOfUpload ?></td>
                      <td><?= $key->title ?></td>
                      <td><?= $key->description ?></td>
                      <td><?= $key->com ?></td>
                      <td><?= $key->name ?></td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
    <section>
  </div>
</div>
