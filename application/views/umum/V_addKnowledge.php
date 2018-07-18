<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="<?= base_url($_SESSION['level']);?>">Home</a></li>
      <li><i class="icon_document_alt"></i>Knowledge</li>
    </ol>
  </div>
</div>
<!-- Form validations -->
<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        Form validations
      </header>
      <div class="panel-body">
        <div class="form">
          <form class="form-validate form-horizontal" id="feedback_form" method="post" action="<?= base_url('C_knowledge/add')?>"  enctype="multipart/form-data">
            <div class="form-group ">
              <label for="title" class="control-label col-lg-2">Title <span class="required">*</span></label>
              <div class="col-lg-10">
                <input class="form-control" id="title" name="title" minlength="5" type="text" required />
              </div>
            </div>
            <div class="form-group ">
              <label for="cemail" class="control-label col-lg-2">Category <span class="required">*</span></label>
              <div class="col-lg-10">
                <div class="radio">
                  <label><input type="radio" name="category" value="0">Engginering</label>
                </div>
                <div class="radio">
                  <label><input type="radio" name="category" value="1">Non-Engginering</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="divi" class="control-label col-lg-2">Division<span class="required">*</span></label>
              <div class="col-lg-10">
              <select class="form-control m-bot15" name="divisi">
                  <option>Choose Your Division</option>
                  <?php foreach($divisi as $div) { ?>
                    <option value="<?= $div->divisionID ?>"><?= $div->divisionName ?></option>
                  <?php } ?>
              </select>
            </div>
            </div>
            <div class="form-group ">
              <label for="cemail" class="control-label col-lg-2">File Type <span class="required">*</span></label>
              <div class="col-lg-10">
                <div class="radio">
                  <label><input type="radio" name="tipe" id="tipe">PDF File</label>
                </div>
                <div class="radio">
                  <label><input type="radio" name="tipe" id="tipe">Video</label>
                </div>
                <div class="radio">
                  <label><input type="radio" name="tipe" id="tipe">Foto</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="cname" class="control-label col-lg-2">File knowledge <span class="required">*</span></label>
              <div class="col-lg-10">
                <input class="form-control" type="file" id="InputFile" name="data" accept="">
              </div>
            </div>
            <div class="form-group ">
              <label for="description" class="control-label col-lg-2">Description</label>
              <div class="col-lg-10">
                <textarea class="form-control " id="description" name="description" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button class="btn btn-primary" type="submit">Save</button>
                <button class="btn btn-default" type="button">Cancel</button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </section>
  </div>
</div>
