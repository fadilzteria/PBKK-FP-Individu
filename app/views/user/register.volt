<div class="container">
    <h2>Register form</h2>

    <p><?php echo $this->flashSession->output() ?></p>

    <?php echo $this->tag->form("user/register/submit"); ?>

        <div class="form-group">
            <label for="name">Full Name</label>
            <?php echo $form->render('name'); ?>
        </div>

        <div class="form-group">
            <label for="email">E-Mail</label>
            <?php echo $form->render('email'); ?>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <?php echo $form->render('password'); ?>
        </div>

        <div class="form-group">
            <label for="password_confirm">Confirm Password</label>
            <?php echo $form->render('password_confirm'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->render('submit'); ?>
        </div>

    </form>
</div>