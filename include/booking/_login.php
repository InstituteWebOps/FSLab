<div class="col-sm-8 col-sm-push-2 col-md-8 col-md-push-2 bookings">
    <div class="col-sm-6">
        <h2>Log In</h2>
        <form action="action.php" class="contact-form" name="contact-form" method="post">
        <input type="hidden" name="type" value="login" />
            <div class="row">
                <div class="col-sm-12">
                    <input type="email" name="email" required="required" placeholder="Email*">
                </div>
                <div class="col-sm-12">
                    <input type="password" name="password" required="required" placeholder="Password*">
                </div>
                <div class="col-sm-12">
                    <input type="submit" name="submit" value="Log In" class="btn btn-send">
                </div>
                <div class="col-sm-12">
                    <h4 class="text-danger"><?php 
                    if(isset($_SESSION['err']) && !($_SESSION['err']==''))
                    {
                        echo ($_SESSION['err']);
                        $_SESSION['err'] = null;
                    }
                    ?></h4>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-6">
        <h2>Sign Up</h2>
        <form action="action.php" class="contact-form" name="contact-form" method="post">
            <input type="hidden" name="type" value="register" />
            <div class="row">
                <div class="col-sm-12">
                    <input type="text" name="name" required="required" placeholder="Name*">
                </div>
                <div class="col-sm-12">
                    <input type="email" name="email" required="required" placeholder="Email*">
                </div>
                <div class="col-sm-12">
                    <input type="password" name="password" required="required" placeholder="Password*">
                </div>
                <div class="col-sm-12">
                    <input type="text" name="facname" required="required" placeholder="Faculty Name*">
                </div>
                <!-- <div class="col-sm-12">
                    <input type="checkbox" name="is"> Is a Student of IIT Madras
                </div> -->

                <div class="col-sm-12">
                    <input type="submit" name="submit" value="Sign Up" class="btn btn-send">
                </div>
            </div>
        </form>
    </div>
</div>
<!-- <div class="col-sm-6 our-office">
    <div id="office-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/office/04.jpg" alt="">
            </div>
            <div class="item">
                <img src="images/office/02.jpg" alt="">
            </div>
            <div class="item">
                <img src="images/office/03.jpg" alt="">
            </div>

            <a class="office-carousel-left" href="#office-carousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="office-carousel-right" href="#office-carousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
</div> -->
