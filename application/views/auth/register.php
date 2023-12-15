<div class="container">

    <div class="row mt-3 justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-header">
                    <h4 class="text-center">Create an Account</h4>
                </div>
                <div class="card-body">

                    <form action="<?= base_url()?>auth/registration" method="post">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= set_value('name'); ?>">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                <small class="form-text text-danger"><?= form_error('password1'); ?></small>
                            </div>
                            <div class="col">
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Repeat Password">
                            </div>
                        </div>
                        <button type="submit" class="bt btn btn-primary btn-lg btn-block mt-3">Register</button>


                    </form>
                    <hr>
                    <p class="text-center"><a href="">Forgot Password?</a></p>
                    <p class="text-center"><a href="<?= base_url(); ?>auth">Already have an account? Login!</a></p>
                </div>

            </div>
        </div>
    </div>
</div>