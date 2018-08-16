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
          <div class="embed-responsive embed-responsive-4by3" align="center">
            <iframe width="1000" height="600" class="embed-responsive-item" src="<?= base_url($knowledge->file) ?>" allowfullscreen></iframe>
          </div>
        <?php } else {?>
          <embed src="<?= base_url($knowledge->file) ?>" width="1100" height="600" type='application/pdf'>
        <?php } ?>
          </div>
      </div>
    </section>
  </div>
</div>
