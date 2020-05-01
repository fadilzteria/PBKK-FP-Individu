<div class="container">
    <h2>Edit Profil</h2>

    <p><?php echo $this->flashSession->output() ?></p>

    <?php echo $this->tag->form("user/edit/submit"); ?>

        <div class="form-group">
            <label for="name">Full Name</label>
            <?php echo $form->render('name'); ?>
        </div>

        <div class="form-group">
            <label for="email">E-Mail</label>
            <?php echo $form->render('email'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->render('submit'); ?>
        </div>

    </form>
</div>