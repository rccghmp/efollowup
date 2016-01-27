<?php
/**
 * Created by PhpStorm.
 * User: phemmy
 * Date: 15/12/15
 * Time: 10:54 PM
 */
?>

<?php $this->load->view('sections/header'); ?>

<div class="container body">


    <div class="main_container">

        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">

                <!-- app logo and title -->
                <?php $this->load->view('sections/app_logo_title'); ?>
                <!-- app logo and title -->


                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <?php $this->load->view('sections/side_menu_profile'); ?>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <?php $this->load->view('sections/side_menu'); ?>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <?php $this->load->view('sections/menu_footer_buttons'); ?>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <?php $this->load->view('sections/top_navigation'); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">

            <br />
            <div class="">

                <!-- Infobip SMS Gateway settings -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="x_panel">
                            <div class="page-title my-page-title">
                                <div class="title_left">
                                    <i class="fa fa-dot-circle-o icon"></i>
                                    <i><h3>Funphem Lab SMS Setings.</h3></i>
                                </div>
                            </div>

                            <div class="x_content">

                                <form action="insertSmsConfig" role="form" name="basicSmsConfig" method="post">
                                    <div class="upper-form reg-form">

                                        <?php if(isset($insertSmsConfigMsg)): ?>
                                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                <strong><?php echo $insertSmsConfigMsg; ?></strong>
                                            </div>
                                        <?php endif; ?>
                                        <div class="col-xs-12">
                                            <label>Account Holder <span class="alert">*</span></label>
                                            <input type="text" name="account_holder" required>
                                        </div>

                                        <div class="col-xs-12">
                                            <label>Account Password <span class="alert">*</span></label>
                                            <input type="password" name="account_password" required>
                                        </div>

                                        <div class="col-xs-12">
                                            <label>API Base Url <span class="alert">*</span></label>
                                            <input type="text" name="api_base_url" value="https://api.infobip.com/" required>
                                            <label class="sub-info">tip: (https://api.infobip.com/)</label>
                                        </div>

                                        <div class="col-xs-12">
                                            <label>Account Balance<span class="alert">*</span></label>
                                            <input type="text" name="account_balance_url" value="account/1/balance" required>
                                            <label class="sub-info">tip: (account/1/balance)</label>
                                        </div>

                                        <div class="col-xs-12">
                                            <label>Single Textual SMS <span class="alert">*</span></label>
                                            <input type="text" name="single_sms_url" value="sms/1/text/single" required>
                                            <label class="sub-info">tip: (sms/1/text/single)</label>
                                        </div>

                                        <div class="col-xs-12">
                                            <label>Multiple Textual SMS <span class="alert">*</span></label>
                                            <input type="text" name="multi_sms_url" value="sms/1/text/multi" required>
                                            <label class="sub-info">tip: (sms/1/text/multi)</label>
                                        </div>

                                    </div>

                                    <div class="my-gap"></div>

                                    <div class="my-btns">
                                        <span>
                                            <button type="reset" class="btn btn-warning">
                                                <i class="fa fa-eraser"></i> Reset
                                            </button>
                                        </span>

                                        <span>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-save"></i> Submit
                                            </button>
                                        </span>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <div class="page-title my-page-title">
                                    <div class="title_left">
                                        <i class="fa fa-list-ul icon"></i>
                                        <i><h2>Listed Config Settings</h2></i>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php if(isset($config_settings)): ?>
                                    <div>
                                        <a class="btn btn-app">
                                            <span class="badge bg-blue">
                                                <?php if(isset($sms_balance)): ?>
                                                    <?php echo ($sms_balance->currency != "NGN" ) ? $sms_balance->currency .''. $sms_balance->balance : "₦".''. $sms_balance->balance ; ?>
                                                <?php endif; ?>
                                            </span>
                                            <i class="fa fa-heart-o"></i> SMS Worth
                                        </a>

                                        <span>
                                            <button type="reset" class="btn btn-warning">
                                                <i class="fa fa-eraser"></i>
                                                You Have An Active SMS
                                            </button>
                                        </span>
                                    </div>
                                    <div class="my-division">
                                        <span class="my-cube radius5">
                                            <i class="fa fa-user"></i>
                                            <label class="sub-info">Account Holder:</label><br>
                                            <?php echo $config_settings->account_holder; ?>
                                        </span>

                                        <span class="my-cube radius5">
                                            <i class="fa fa-paste"></i>
                                            <label class="sub-info">Coded Password:</label><br>
                                            <?php echo substr($config_settings->account_password, 0, 20); ?>
                                        </span>

                                        <span class="my-cube radius5">
                                            <i class="fa fa-thumbs-up"></i>
                                            <label class="sub-info">Account Bal. URL:</label><br>
                                            <?php echo $config_settings->account_balance_url; ?>
                                        </span>

                                        <span class="my-cube radius5">
                                            <i class="fa fa-wifi"></i>
                                            <label class="sub-info">Multiple Textual SMS URL:</label><br>
                                            <?php echo $config_settings->multi_sms_url; ?>
                                        </span>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="x_panel">
                            <div class="x_title">
                                <div class="page-title my-page-title">
                                    <div class="title_left">
                                        <i class="fa fa-check icon"></i>
                                        <i><h2>SMS Balance</h2></i>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php if(isset($sms_balance)): ?>
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-comments-o"></i>
                                        </div>
                                        <div class="count">
                                            <?php echo ($sms_balance->currency != "NGN" ) ? $sms_balance->currency .''. $sms_balance->balance : "₦".''. $sms_balance->balance ; ?>
                                        </div>

                                        <h3>SMS Balance</h3>
                                        <p>You have <?php echo $sms_balance->balance; ?> Units left</p>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Infobip SMS Gateway settings -->
            </div>

            <!-- footer content -->
            <?php $this->load->view('sections/footer'); ?>
            <!-- /footer content -->

        </div>
        <!-- /page content -->
    </div>

</div>

<!-- custom notifications -->
<?php $this->load->view('sections/custom_notifications'); ?>
<!-- /custom notifications -->

<!-- custom javascript files needed before footer -->
<?php $this->load->view('sections/js_before_footer'); ?>
<!-- custom javascript files needed before footer -->