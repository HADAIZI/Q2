<?= $this->extend('mdashboard/public_layout') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col-sm-5 mx-auto">
            <div class="card mt-5">
                <h2 class="ms-3">Login to account</h2>
                <?php $session=session(); ?>
                <?php if(!is_null($session->getFlashdata('failed_message'))): ?>
                <div class="alert alert-danger">
                    <?=$session->getFlashdata('failed_message');?>
                </div>
                <?php endif ?>
                <?php $validation = \Config\Services::validation(); ?>
                <div class="card-body">
                    <form action="<?=base_url('login')?>" method="post">
                        <div class="mb-2">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="<?=old('email')?>"/>
                            <div class="text-danger">
                                <?=$validation->getError('email')?>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password" value="<?=old('password')?>"/>
                            <div class="text-danger">
                                <?=$validation->getError('password')?>
                            </div>
                        </div>
                        <div class="mb-2 text-center">
                            <input type="submit" class="btn btn-primary" name="login" value="Login"/>
                        </div>
                    </form>
                    <a href="<?=base_url('mdashboard/')?>register">Do not have an account?</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>