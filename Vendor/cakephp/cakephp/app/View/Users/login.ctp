<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
          <img src="assets/img/logo.png" alt=""/>
      </div>
      <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">                  
            <div class="panel-heading">
                <h3 class="panel-title">Please Sign In</h3>
            </div>
            <div class="panel-body">
                <?php echo $this->Form->create('User'); ?>
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->Session->flash('auth'); ?>
                    <fieldset>
                        <div class="form-group">
                            <?php echo $this->Form->input('email',array('class'=>'form-control','placeholder'=>'E-mail','autofocus')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $this->Form->input('password',array('class'=>'form-control','placeholder'=>'password')); ?>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <?php echo $this->Form->submit('Enviar',array('class'=>'btn btn-lg btn-success btn-block')); ?>
                    </fieldset>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>
</div>
