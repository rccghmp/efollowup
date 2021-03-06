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
                                    <i class="fa fa-group icon"></i>
                                    <i><h3>Add New Member</h3></i>
                                </div>
                            </div>

                            <div class="x_content">

                                <form action="#" role="form" name="contactForm">
                                   <div class="upper-form reg-form">
                                       <div class="col-md-6 col-xs-12">
                                           <label>Surname <span class="alert">*</span></label>
                                           <input type="text" name="surname" required>
                                       </div>
                                       <div class="col-md-6 col-xs-12">
                                           <label>Firstname <span class="alert">*</span></label>
                                           <input type="text" name="firstname" required>
                                       </div>
                                       <div class="col-md-6 col-xs-12">
                                           <label>Othernames</label>
                                           <input type="text" name="othernames">
                                       </div>
                                       <div class="col-md-6 col-xs-12">
                                           <label>Gender <span class="alert">*</span></label>
                                           <div class="my-gender">
                                               <div id="gender" class="btn-group" data-toggle="buttons">
                                                   <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                       <input type="radio" name="gender" value="male" data-parsley-multiple="gender" data-parsley-id="8120"> &nbsp; Male &nbsp;
                                                   </label><ul class="parsley-errors-list" id="parsley-id-multiple-gender"></ul>
                                                   <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                       <input type="radio" name="gender" value="female" checked="" data-parsley-multiple="gender" data-parsley-id="8120"> Female
                                                   </label>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="clearfix"></div>
                                       <div class="col-md-6 col-xs-12">
                                           <label>Email Address(es) <span class="alert">*</span></label>
                                           <div class="my-division">
                                               <div class="col-md-6 col-xs-12">
                                                   <label class="little-fade">Main:</label>
                                                   <input type="text" name="firstname" required>
                                               </div>
                                               <div class="col-md-6 col-xs-12">
                                                   <label class="little-fade">Others:</label>
                                                   <input type="text" name="firstname" required>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-md-6 col-xs-12">
                                           <label>Phone Number(s) <span class="alert">*</span></label>
                                           <div class="my-division">
                                               <div class="col-md-6 col-xs-12">
                                                   <label class="little-fade">Main Line:</label>
                                                   <input type="text" name="firstname" required>
                                               </div>
                                               <div class="col-md-6 col-xs-12">
                                                   <label class="little-fade">Others:</label>
                                                   <input type="text" name="firstname" required>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="clearfix"></div>

                                       <div class="col-md-6 col-xs-12">
                                           <label>Date of Birth</label>
                                           <div class="my-dob">
                                               <span>
                                                   <select class="form-control" name="dob_dd">
                                                       <option>Days</option>
                                                       <?php
                                                       foreach($dob_days as $key=>$values) {
                                                           echo "<option value='$key'>$values</option>";
                                                       }
                                                       ?>
                                                   </select>
                                               </span>
                                               <span>
                                                   <select class="form-control" name="dob_mm">
                                                       <option>Month</option>
                                                       <?php
                                                       foreach($dob_months as $key=>$values) {
                                                           echo "<option value='$key'>$values</option>";
                                                       }
                                                       ?>
                                                   </select>
                                               </span>
                                               <span>
                                                   <select class="form-control" name="dob_yy">
                                                       <option>Year</option>
                                                       <option>Option one</option>
                                                       <option>Option two</option>
                                                       <option>Option three</option>
                                                       <option>Option four</option>
                                                   </select>
                                               </span>
                                           </div>
                                       </div>

                                       <div class="col-md-6 col-xs-12">
                                           <label>Age Group <span class="alert">*</span></label>
                                           <select class="form-control">
                                               <option>Choose option</option>
                                               <?php
                                                foreach($age_group as $key=>$values) {
                                                    echo "<option value='$key'>$values</option>";
                                                }
                                               ?>
                                           </select>
                                       </div>

                                       <div class="clearfix"></div>

                                       <div class="col-md-6 col-xs-12">
                                           <label>Marital Status <span class="alert">*</span></label>
                                           <select class="form-control">
                                               <option>Choose option</option>
                                               <?php
                                               foreach($marital_status as $key=>$values) {
                                                   echo "<option value='$key'>$values</option>";
                                               }
                                               ?>
                                           </select>
                                       </div>
                                       <div class="col-md-6 col-xs-12">
                                           <label>Wedding Date <span class="alert">*</span></label>
                                           <input type="text" name="firstname" required>
                                       </div>
                                       <div class="col-md-6 col-xs-12">
                                           <label>Occupation</label>
                                           <input type="text" name="othernames">
                                       </div>


                                       <div class="clearfix"></div>

                                       <div class="col-md-6 col-xs-12">
                                           <label>Home Address <span class="alert">*</span></label>
                                           <input type="text" name="surname" required>
                                       </div>
                                       <div class="col-md-6 col-xs-12">
                                           <label>Nearest Bus-Stop</label>
                                           <input type="text" name="nearest_bustsop" required>
                                       </div>
                                   </div>

                                    <div class="clearfix"></div>
                                    <!-- /additions -->
                                    <div class="block-inner">
                                        <h6 class="heading-hr text-danger"><i class="fa fa-ellipsis-v"></i>Additonal Information: <small class="display-block">ADDONS</small></h6>
                                    </div>
                                    <div class="tabbable my-tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" data-target="#iconified-tab2"><i class="icon-library"></i>House Fellowship Centre</a></li>
                                            <li><a data-toggle="tab" data-target="#iconified-tab1"><i class="icon-accessibility"></i>Assign Unit / Depts</a></li>
                                            <li><a data-toggle="tab" data-target="#iconified-tab3"><i class="icon-books"></i> Prayer Request</a></li>
                                        </ul>

                                        <div class="tab-content with-padding marging-up">
                                            <div id="iconified-tab1" class="tab-pane fade in active">
                                                <button data-toggle="modal" data-target="#Group_modal" style="margin-bottom:5px" class="btn btn-right-icon btn-info" ng-click="loadGroups()" type="button"><i class="icon-users"></i> Add To Group</button>

                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Group Name</th>
                                                            <th>Position</th>
                                                            <th>Date</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <!-- ngRepeat: g in groups -->



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="iconified-tab2" class="tab-pane fade">
                                                <button data-toggle="modal" data-target="#HouseFellowship_modal" style="margin-bottom:5px" class="btn btn-right-icon btn-info" type="button"><i class="icon-users"></i> Add To House Fellowship</button>

                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>House Fellowship</th>
                                                            <th>Position</th>
                                                            <th>Date</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <!-- ngRepeat: g in houseFellowships -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="iconified-tab3" class="tab-pane fade">
                                                <button data-toggle="modal" data-target="#Note_modal" style="margin-bottom:5px" class="btn btn-right-icon btn-info" type="button"><i class="icon-users"></i> New Note</button>

                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Notes</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <!-- ngRepeat: g in person.notes track by $index -->



                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div id="iconified-tab4" class="tab-pane fade">
                                            </div>
                                            <div id="iconified-tab5" class="tab-pane fade">
                                            </div>
                                        </div>
                                    </div>

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
                                <h2>Recently Added Members <small>[Top 10]</small> <small>[<a href="#">View All</a>]</small></h2>
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