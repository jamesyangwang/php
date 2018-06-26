<?php include "45_db.php"; ?>
<?php include "45_46_52_53_55_56_functions.php"; ?>

<?php updateTable(); ?>

<?php include "_includes/header.php" ?>

    <div class="container">

    <div class="col-sm-6">
        <h1 class="text-center">Update</h1>
        <form action="45_46_47_48_login_update.php" method="post">
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

                <label for="id">User ID:
                    <select name="id" id="">
                        <?php
                        showAllData();
                        ?>
                    </select>
                </label>
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

        </form>


    </div>


<?php include "_includes/footer.php" ?>