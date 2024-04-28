<?php include('header.php') ?>

<section>
    <div class="col-3 m-auto">
        <div class="card">
            <div class="card-body">
                <div class="text-center"><span class="border d-inline-block"><i class="fa fa-user fa-3x"></i></span></div>
                <form action="login.php" method="post">
                    <div class="md-form">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control">
                    </div>
                    <div class="md-form">
                        <label for="password">Your Password</label>
                        <input type="password" id="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php') ?>
