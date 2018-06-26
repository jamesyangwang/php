<?php include "45_46_52_53_55_56_functions.php" ?>
<?php createRows(); ?>

<?php include "_includes/header.php" ?>

    <div class="container">

        <div class="col-sm-6">
            <h1 class="text-center">Create</h1>
            <form action="43_50_51_53_54_login_create.php" method="post">
                <div class="form-group">
                    <label for="username">Username
                        <input type="text" name="username" class="form-control">
                    </label>
                </div>

                <div class="form-group">
                    <label for="password">Password
                        <input type="password" name="password" class="form-control">
                    </label>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="CREATE">

            </form>
        </div>

<?php include "_includes/footer.php" ?>