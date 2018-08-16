<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="icon_document_alt"></i>knowledge</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="<?php echo base_url($_SESSION['level']) ?>">Home</a></li>
      <li><i class="icon_document_alt"></i><a href="<?php echo base_url('C_knowledge/read/'.$divi->divisionID) ?>"><?php echo ucwords($divi->divisionName); ?></a></li>
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
        <?php if($knowledge->fileType=='foto'){?>
          <img src="<?= base_url($knowledge->file) ?>">
        <?php } elseif ($knowledge->fileType=='video') {?>
          <video width="320" height="240" controls>
            <source src="<?= base_url($knowledge->file) ?>" type="video/mp4">
          </video>
        <?php } else {?>
          <embed src="<?= base_url($knowledge->file) ?>" width="500" height="375" type='application/pdf'>
        <?php } ?>

      </div>
    </section>
  </div>
</div>
