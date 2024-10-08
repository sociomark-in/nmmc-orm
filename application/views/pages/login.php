<div class="page-content overflow-hidden">
    <main class="full-page">
        <div class="row w-100 mx-0 auth-page">
            <div class="col-md-8 col-xl-12 p-0">
                <div class="card">
                    <div class="row">
                        <div class="col-md-8 pe-md-0">
                            <div class="auth-side-wrapper">
    
                            </div>
                        </div>
                        <div class="col-md-4 ps-md-0 justify-content-center d-flex align-items-center">
                            <div class="auth-form-wrapper px-4 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-3">
                                    <img src="<?php echo base_url('assets/nmmc logo.png')?>">
                                </a>
                                <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>
                                <?= form_open('api/v2/auth/login') ?>
                                    <div class="mb-3">
                                        <label for="userEmail" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="userEmail" name="useremail" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="userPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input type="checkbox" class="form-check-input" id="authCheck">
                                        <label class="form-check-label" for="authCheck">
                                            Remember me
                                        </label>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Login</button>
                                    </div>
                                    <!-- <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<style>
    .auth-page .auth-side-wrapper {
    height: 100vh !important;
}
.auth-page .auth-side-wrapper {
    background-image: url(./assets/images/nmmc.jpg);
    background-size: cover;
}
</style>