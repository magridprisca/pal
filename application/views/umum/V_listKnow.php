<div class="row">
  <div class="col-lg-12">
        <section class="panel">
        <table class="table table-advance table-bordered">
                <tbody>
                  <tr style="background-color: #2A3542">
                    <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Title</th>
                    <th style="color: #FFFFFF"><i class="icon_calendar"></i> Date of upload</th>
                    <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Descrption</th>
                    <th style="color: #FFFFFF"><i class="icon_profile"></i> Upload by</th>
                    <th style="color: #FFFFFF"><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <?php foreach ($knowledge as $key){?>
                    <tr>
                      <td><?= $key->title ?></td>
                      <td><?= $key->dateOfUpload ?></td>
                      <td><?= $key->description ?></td>
                      <td><?= $key->name ?></td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-success" href="<?= base_url('C_knowledge/detail/'.$key->knowledgeID.'/'.$key->divisionID )?>"><i class="fa fa-eye"> See Details</i></a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
    <section>
  </div>
</div>
