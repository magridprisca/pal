<div class="row">
  <div class="col-lg-12">
      <h3 class="page-header"><i class="icon_house_alt"></i>DIREKTORAT REKAYASA UMUM & HARKAN</h3>
        <ol class="breadcrumb">
          <li><i class="fa fa-home"></i><a href="<?php echo base_url($_SESSION['level']) ?>">Home</a></li>
          <li><i class="icon_document_alt"></i><?php echo ucwords($divi->divisionName); ?></li>
        </ol>
        <div class="row collapse navbar-collapse navbar-form1">
          <form class="form-inline" method="post" action="<?php echo base_url('C_knowledge/read/'.$divi->divisionID)?>">
                <!--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>-->
                <div class="form-group">
                <select class="form-control" name="kateg">
                  <option>Kategori pencarian</option>
                  <option value="title">Title</option>
                  <option value="category">Category</option>
                  <option value="fileType">File Type</option>
                  <option value="description">Description</option>
                  <option value="dateOfUpload">Date</option>
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
      <br>
<!--List client-->
<div class="box-body">
  <div class="row">
    <div class="col-md-12">
      <table id="example" class="table table-striped table-bordered" style="width:100%; order: 0.5px solid grey">
        <thead>
          <tr style="background-color: #2A3542">
            <th style="color: #FFFFFF"><i class="icon_pin_alt"> </i> Title</th>
            <th style="color: #FFFFFF"><i class="icon_calendar"></i> Date of upload</th>
            <th style="color: #FFFFFF"><i class="icon_mail_alt"></i> Descrption</th>
            <th style="color: #FFFFFF"><i class="icon_profile"></i> Upload by</th>
            <th style="color: #FFFFFF"><i class="icon_cogs"></i> Action</th>
          </tr>
        </thead>
        <tbody>
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
<!--box body-->
        </div>
      </div>
    </div>

    <?php $this->load->view('umum/js_main')?>
    <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });

    </script>
    <?php $this->load->view('umum/js_main')?>
