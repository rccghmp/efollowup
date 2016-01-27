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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="page-title my-page-title">
                                <div class="title_left">
                                    <i class="fa fa-bullseye icon"></i>
                                    <i><h3>Create Unit/Dept.</h3></i>
                                </div>
                            </div>

                            <div class="x_content">

                                <?php //echo validation_errors(); ?>

                                <form action="insertNewEvent" role="form" name="contactForm" method="post">
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

                                       <div class="col-md-6 col-xs-12">
                                           <label>Name of Unit/Dept. <span class="alert">*</span></label>
                                           <input type="text" name="dept_name" required>
                                       </div>

                                       <div class="col-md-6 col-xs-12">
                                           <label>Brief Description <span class="alert">*</span></label>
                                           <input type="text" name="dept_desc" required>
                                       </div>

                                       <div class="col-md-6 col-xs-12">
                                           <label>Dept. E-Mail <span class="alert">*</span></label>
                                           <input type="text" name="dept_email" required>
                                       </div>

                                       <div class="col-md-6 col-xs-12">
                                           <label>Dept. Phone No. <span class="alert">*</span></label>
                                           <input type="text" name="dept_phone" required>
                                           <label class="sub-info">Multiple Phone Numbers should be separated by comma (,)</label>
                                       </div>

                                   </div>

                                    <div class="clearfix "></div>
                                    <!-- /additions -->


                                    <div class="my-gap"></div>

                                    <div class="my-btns">
                                        <span>
                                            <button class="btn btn-success">
                                                <i class="fa fa-caret-left"></i> Back
                                            </button>
                                        </span>

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
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <div class="page-title my-page-title">
                                    <div class="title_left">
                                        <i class="fa fa-circle-o-notch icon"></i>
                                        <i><h2>Recently Added Dept <small>[<a href="#">View All</a>]</small></h2></i>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <ul class="list-unstyled msg_list _my-cude">
                                    here
                                    <?php if(isset($displayEntries)): ?>
                                        <?php foreach($displayEntries as $key => $value): ?>

                                            <li class="<?php echo $value->d_code; ?>">
                                                <div></div>
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

                    <div class="col-md-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <div class="page-title my-page-title">
                                    <div class="title_left">
                                        <i class="fa fa-list-ul icon"></i>
                                        <i><h2>Department Members <small>[Top 10]</small> <small>[<a href="#">View All</a>]</small></h2></i>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br>

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