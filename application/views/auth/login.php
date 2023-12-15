<div class="container">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-header">
                    <h4 class="text-center">Login</h4>
                </div>

                <?= $this->session->flashdata('flash'); ?>

                <div class="card-body">

                    <form action="<?= base_url()?>auth" method="post">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address...">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group mb-6">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            <small class="form-text text-danger"><?= form_error('password'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="bt btn btn-primary btn-lg btn-block">Login</button>

                        
                    </form>
                    <hr>
                    <p class="text-center"><a href="">Forgot Password?</a></p>
                        <p class="text-center"><a href="<?= base_url(); ?>auth/registration">Create an Account</a></p>
                </div>

            </div>
        </div>
    </div>
</div>