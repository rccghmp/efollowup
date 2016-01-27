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
                <div class="row">
                    <div class="col-md-6">
                        <div class="x_panel">
                            <div class="page-title my-page-title">
                                <div class="title_left">
                                    <i class="fa fa-asterisk icon"></i>
                                    <i><h3>Daily Declarations [Custom]</h3></i>
                                </div>
                            </div>

                            <div class="x_content">

                                <form action="sendDeclaration" id="sendDeclaration" role="form" name="basicSmsConfig" method="post">
                                    <div class="upper-form reg-form">

                                        <?php if(isset($declareSuccessfull)): ?>
                                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                <strong><?php echo $declareSuccessfull; ?></strong>
                                            </div>
                                        <?php endif; ?>

                                        <?php if(isset($declareError)): ?>
                                            <div class="alert alert-error alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                                </button>
                                                <strong><?php echo $declareError; ?></strong>
                                            </div>
                                        <?php endif; ?>

                                        <div class="col-xs-12">
                                            <label>Sender: <span class="alert">*</span></label>
                                            <input type="text" name="sender" placeholder="Name of Sender" required>
                                        </div>

                                        <div class="col-xs-12">
                                            <label>Recipient(s) Phone No.: <span class="alert">*</span></label>
                                            <textarea id="_recipientPhoneNo" required name="recipient" onkeyup="insertComma();"></textarea>
                                        </div>

                                        <div class="col-xs-12">
                                            <label>SMS Text: <span class="alert">*</span></label>
                                            <label class="my-gapper">
                                                <div class="col-xs-6 revealTextCount"></div>
                                                <div class="col-xs-6 smsPageCount"></div>
                                            </label>
                                            <textarea class="form-control getTextCount" required rows="3" placeholder="Enter the SMS here" name="message"></textarea>
                                        </div>

                                        <input type="hidden" value="" class="code_text_value" name="code_text_value">

                                    </div>

                                    <div class="ln_solid"></div>

                                    <div class="my-btns">
                                        <span>
                                            <button type="reset" class="btn btn-warning">
                                                <i class="glyphicon glyphicon-remove-sign"></i> Cancel
                                            </button>
                                        </span>

                                        <span>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="glyphicon glyphicon-send"></i> Send
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
                                <h2>Latest Declarations <small> | Top 5  |</small> <small> [<a href="#">::View All::</a>]</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <ul class="list-unstyled msg_list _my-cude">
                                    <?php if(isset($displayEntries)): ?>
                                    <?php foreach($displayEntries as $key => $value): ?>

                                    <li class="<?php echo $value->d_code; ?>">
                                        <div><?php $res = substr($value->d_msg, 0,2); echo strtoupper($res); ?></div>
                                        <div>
                                            <span class="time"><?php echo $value->created_at; ?></span>
                                            <span class="message">
                                               <?php echo $value->d_msg; ?>
                                            </span>
                                        </div>
                                    </li>

                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Bank of Declarations <small> | Add New Declarations</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <form id="demo-form2" action="insertDeclaration" method="post" class="form-horizontal form-label-left">

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="col-xs-6 revealTextCount2"></div>
                                                <div class="col-xs-6 smsPageCount2"></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Message <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea class="form-control getTextCount2" required rows="3" placeholder="Enter declaration" name="declaration_msg"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Set Active <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <ul class="to_do">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" class="flat" name="declaration_status" checked="checked"> Make this available
                                                        </label>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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