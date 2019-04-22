
     <section class="probootstrap-cover">
      <div class="container">
        <div class="row probootstrap-vh-75 align-items-center text-left">
          <div class="col-sm">
            <div class="probootstrap-text pt-5">
              <h1 class="probootstrap-heading text-white mb-4">Contact</h1>
              <div class="probootstrap-subheading mb-5">
                <p class="h4 font-weight-normal">Free Bootstrap 4 Under Creative Common License by <u>uicookies.com</u></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
    <?= $this->Form->create() ?>
    <div class="row">
    <div class="col-md-6">
           <div class="form-group">
           <?php echo $this->Form->input('First_Name',['type'=>'text','class'=>'form-control']);?>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
            <?php echo $this->Form->input('Last_Name',['type'=>'text','class'=>'form-control']);?>
            </div>
            </div>
            </div>
            <div class="form-group">
           <?php echo $this->Form->input('email',['type'=>'email','class'=>'form-control']);?>
           </div>
           <div class="form-group">
         <?php   echo $this->Form->textarea('Message',['rows' => '5','class'=>'form-control']);?>
         </div>
    <?= $this->Form->button(_('Send Message'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
    </div>
          <div class="col-md-6 pl-md-5 pl-3">
            <h4 class="mb-5">Contact Details</h4>
            <div class="media mb-5">
              <div class="probootstrap-icon"><span class="icon-location display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">198 West 21th Street, Suite 721 New York NY 10016</h5>
              </div>
            </div>

            <div class="media mb-5">
              <div class="probootstrap-icon"><span class="icon-mail display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">info@domain.com</h5>
              </div>
            </div>

            <div class="media mb-5">
              <div class="probootstrap-icon"><span class="icon-phone display-4"></span></div>
              <div class="media-body">
                <h5 class="mt-0">123 456 7890</h5>
              </div>
            </div>
           
          </div>
        </div>

      </div>
    </section>
