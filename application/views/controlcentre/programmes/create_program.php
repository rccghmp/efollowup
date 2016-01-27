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
                                    <i><h3>Create Programme</h3></i>
                                </div>
                            </div>

                            <div class="x_content">

                                <form action="#" role="form" name="contactForm">
                                   <div class="upper-form reg-form">
                                       <div class="col-md-6 col-xs-12">
                                           <label>Programme Title <span class="alert">*</span></label>
                                           <input type="text" name="surname" required>
                                       </div>
                                       <div class="col-md-6 col-xs-12">
                                           <label>Programme Short Description <span class="alert">*</span></label>
                                           <input type="text" name="firstname" required>
                                       </div>

                                       <div class="clearfix"></div>

                                       <div class="col-md-6 col-xs-12">
                                           <label>Programme Occurence <span class="alert">*</span></label>
                                           <select class="form-control">
                                               <option>Choose option</option>
                                               <?php
                                               foreach($event_occurence as $key=>$values) {
                                                   echo "<option value='$key'>$values</option>";
                                               }
                                               ?>
                                           </select>
                                       </div>

                                       <div class="col-md-6 col-xs-12">
                                           <div class="my-dob">
                                               <div class="row">
                                                   <div class="col-md-4">
                                                       <label>Event Time:</label>
                                                       <span class="ui-spinner ui-widget ui-widget-content ui-corner-all ng-pristine ng-valid"><input type="text" class="form-control ui-spinner-input" ng-model="event.eventTime" id="spinner-time" name="spinner-time" placeholder="05:30 PM" aria-valuenow="1420129680000" autocomplete="off" role="spinbutton"></span>
                                                   </div>
                                                   <div class="col-md-4">
                                                       <label>Start Date:</label>
                                                       <input type="text" placeholder="DD/MM/YYYY" class="form-control datepicker hasDatepicker ng-valid ng-animate ng-pristine-remove ng-pristine-remove-active ng-dirty" ng-model="event.startDate" placeholder="" id="dp1450805348685" style="">
                                                   </div>
                                                   <div class="col-md-4">
                                                       <label>End Date:</label>
                                                       <input type="text" placeholder="DD/MM/YYYY" class="form-control datepicker hasDatepicker ng-pristine ng-valid" ng-model="event.endDate" placeholder="" id="dp1450805348686">
                                                   </div>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="clearfix"></div>

                                       <div class="col-md-6 col-xs-12">
                                           <label>Days of Event <span class="alert">*</span></label>
                                           <select class="form-control">
                                               <option>Choose option</option>
                                               <option value="1">Monday</option>
                                               <option value="2">Tuesday</option>
                                               <option value="3">Wednessday</option>
                                               <option value="4">Thursday</option>
                                               <option value="5">Friday</option>
                                               <option value="6">Saturday</option>
                                               <option value="0">Sunday</option>
                                           </select>
                                       </div>

                                   </div>

                                    <div class="clearfix "></div>
                                    <!-- /additions -->

                                    <div class="my-gap"></div>

                                    <div class="tabbable my-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" data-target="#iconified-tab2"><i class="icon-library"></i>ADD REMINDER - SMS</a></li>
                                            <li><a data-toggle="tab" data-target="#iconified-tab1"><i class="icon-accessibility"></i>ADD REMINDER - E-MAIL</a></li>
                                        </ul>

                                        <div class="tab-content with-padding marging-up">
                                            <div id="iconified-tab1" class="tab-pane fade in active">

                                                sms form

                                            </div>
                                            <div id="iconified-tab2" class="tab-pane fade">

                                                e-mail form

                                            </div>

                                            <div id="iconified-tab4" class="tab-pane fade">
                                            </div>
                                            <div id="iconified-tab5" class="tab-pane fade">
                                            </div>
                                        </div>
                                    </div>

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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <div class="page-title my-page-title">
                                    <div class="title_left">
                                        <i class="fa fa-list-ul icon"></i>
                                        <i><h2>List of Programmes <small>[Top 10]</small> <small>[<a href="#">View All</a>]</small></h2></i>
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