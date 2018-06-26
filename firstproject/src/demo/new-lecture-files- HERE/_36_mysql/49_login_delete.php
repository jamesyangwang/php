<?php include "45_db.php"; ?>
<?php include "45_46_52_53_55_56_functions.php"; ?>

<?php deleteRows(); ?>

<?php include "_includes/header.php" ?>

<div class="container">

    <div class="col-sm-6">
        <h2 class="text-center">Delete</h2>
        <form action="49_login_delete.php" method="post">
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

            <div class="form-group">
                <label for="">User ID:
                    <select name="id" id="">
                        <?php
                        showAllData();
                        ?>
                    </select>
                </label>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="DELETE">
        </form>
    </div>

    <?php include "_includes/footer.php" ?>
