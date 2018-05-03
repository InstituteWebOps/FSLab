<section>
    <div class="container-fluid">
        <div class="row">
        <?php 
        // print_r($_SESSION);
            include_once('include/booking/'.(isset($_SESSION['user'])?'_index.php':'_login.php'))
        ?>
        </div>
    </div>
</section>
