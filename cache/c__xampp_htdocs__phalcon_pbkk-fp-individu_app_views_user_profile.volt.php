<div class="container">
    <h2>User Profile</h2>
    <hr>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Hello, <?= $this->session->get('AUTH_NAME') ?></h5>
            <p class="card-text"><?= $this->session->get('AUTH_EMAIL') ?></p>
            <p class="card-text"><small class="text-muted">Created at <?=  date('d-m-Y H:m:s', $this->session->get('AUTH_CREATED')) ?></small></p>
            <?= $this->tag->linkTo(["user/edit", '<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit', "class" => "btn btn-primary"]); ?>
            <?= $this->tag->linkTo(["user/logout", '<i class="fa fa-sign-out" aria-hidden="true"></i> Logout', "class" => "btn btn-danger"]); ?>
        </div>
    </div>
</div>