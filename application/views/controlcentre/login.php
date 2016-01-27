<?php
/**
 * Created by PhpStorm.
 * User: phemmy
 * Date: 15/12/15
 * Time: 10:54 PM
 */
?>

<?php $this->load->view('sections/blank_header'); ?>
<?php $data['title'] = "Security Check Point"; ?>

<div class="login_form radius10">
    <form action="<?php echo base_url(); ?>" method="post">
        <div class="login_logo">
            <i class="icon"></i>
        </div>
        <div>
            <span class="medium-thick">Email</span>
            <span>
                <input type="email" name="username" placeholder="Enter E-mail Address" class="form-control">
            </span>
        </div>
        <div>
            <span class="medium-thick">Password</span>
            <span>
                <input type="password" name="password" placeholder="Enter Password" class="form-control">
            </span>
            <span class="center-me"><a href="dashboard">Forgot Password? <i class="bold-me">Retreive Here</i></a>.</a> </span>
        </div>
        <div>
            <button type="button" class="btn btn-info btn-custom">Submit</button>
        </div>
    </form>

    <div class="login_bottom">
        <div class="center-me">
            <span class="medium-thick">Don't have an eFollowUp account?</span>
            <span>
                <button type="button" class="btn btn-info btn-custom">Create a New Account</button>
            </span>
        </div>
    </div>
</div>
