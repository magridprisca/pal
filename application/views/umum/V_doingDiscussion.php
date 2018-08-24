<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="icon_chat_alt"></i>Discussion</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="<?php echo base_url($_SESSION['level']) ?>">Home</a></li>
    </ol>
    <section>
      <div class="row">
        <div class="col-md-12 portlets">
          <!-- Widget -->
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="pull-left">Topic: <?= $discuss->topic?></div>
              <div class="widget-icons pull-right">
                <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a>
                <a href="#" class="wclose"><i class="fa fa-times"></i></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <!-- Widget content -->
              <div class="padd sscroll">
                <ul class="chats">
                  <!-- Chat by us. Use the class "by-me". -->
                  <li class="by-me">
                    <!-- Use the class "pull-left" in avatar -->
                    <div class="avatar pull-left">
                      <img src="<?php echo base_url() ?>assets/admin/img/user.jpg" alt="" />
                    </div>
                    <div class="chat-content">
                      <!-- In meta area, first include "name" and then "time" -->
                      <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                      Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                      <div class="clearfix"></div>
                    </div>
                  </li>
                  <!-- Chat by other. Use the class "by-other". -->
                  <li class="by-other">
                    <!-- Use the class "pull-right" in avatar -->
                    <div class="avatar pull-right">
                      <img src="<?php echo base_url() ?>assets/admin/img/user22.png" alt="" />
                    </div>
                    <div class="chat-content">
                      <!-- In the chat meta, first include "time" then "name" -->
                      <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                      Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                      <div class="clearfix"></div>
                    </div>
                  </li>
                  <li class="by-me">
                    <div class="avatar pull-left">
                      <img src="<?php echo base_url() ?>assets/admin/img/user.jpg" alt="" />
                    </div>
                    <div class="chat-content">
                      <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                      Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                      <div class="clearfix"></div>
                    </div>
                  </li>
                  <li class="by-other">
                    <!-- Use the class "pull-right" in avatar -->
                    <div class="avatar pull-right">
                      <img src="<?php echo base_url() ?>assets/admin/img/user22.png" alt="" />
                    </div>
                    <div class="chat-content">
                      <!-- In the chat meta, first include "time" then "name" -->
                      <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                      Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                      <div class="clearfix"></div>
                    </div>
                  </li>
                </ul>

              </div>
              <!-- Widget footer -->
              <div class="widget-foot">
                <form class="form-inline">
                  <div class="form-group col-md-11">
                    <input type="text" class="form-control" placeholder="Type your message here...">
                  </div>
                  <button type="submit" class="btn btn-info">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--template-->
  </div>
</div>
