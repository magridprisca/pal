
<div class="row">
  <div class="col-lg-12">
        <h3 class="page-header"><i class="icon_house_alt"></i>DIREKTORAT REKAYASA UMUM & HARKAN</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="<?php echo base_url($_SESSION['level']) ?>">Home</a></li>
          <li><i class="icon_document_alt"></i><?php echo ucwords($divi->divisionName); ?></li>
        </ol>

<<<<<<< HEAD
        <section class="panel">
          <div class="collapse navbar-collapse navbar-form1">
              <ul><form class="form-validate" method="post" action="<?php echo base_url('C_knowledge/read/'.$divi->divisionID)?>" >
                    <!--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>-->
                    <li><div class="">
                    <select class="form-control1 m-bot5" name="kateg">
=======
          <div class="row collapse navbar-collapse navbar-form1">
              <form class="form-inline" method="post" action="<?php echo base_url('C_knowledge/read/'.$divi->divisionID)?>">
                    <!--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>-->
                    <div class="form-group">
                    <select class="form-control" name="kateg">
>>>>>>> ceb986857300e2db31bac6498eb6c2a982e62d2b
                      <option>Kategori pencarian</option>
                      <option value="title">Title</option>
                      <option value="category">Category</option>
                      <option value="fileType">File Type</option>
                      <option value="description">Description</option>
                      <option value="dateOfUpload">Date</option>
                      <option value="userID">Upload by</option>
                    </select>
<<<<<<< HEAD
                  </div></li>
                    <li><div><input class="av navbar-form1 form-control1 search" placeholder="     Search" name="isi"></div></li>
                    <li><div><button class="btn btn-primary" type="submit">Search</button></div></li>
              </form></ul>
=======
                    </div>
                    <div class="form-group">
                    <input class="form-control m-input" placeholder="Search" name="isi">
                    </div>
                    <div class="form-group">
                    <button class="btn-sm btn-primary" type="submit">Cari</button>
                  </div>
              </form>
>>>>>>> ceb986857300e2db31bac6498eb6c2a982e62d2b
          </div>
</br>
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
    </section>
  </div>
</div>
