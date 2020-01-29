<?php include "db.php"; ?>
<?php include "functions.php"; ?>
<!-- // CRUD update -->

<?php deleteRows(); ?>

<?php include "includes/header.php"; ?>

<div class="container">
    <div class="col-sm-12">
        <h1>delete</h1>
        <form action="login_delete.php" method="POST">
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" name="username" class="form-control"></div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control"></div>

            <div class="form-group">
                <select name="id" id="">
                    <?php showAllData(); ?>
                </select>
            </div>

            <input type="submit" value="delete" name="submit" class="btn btn-primary">
        </form>
    </div>
    <?php include "includes/footer.php";
