<?php
$comp_model = new SharedController;
$page_element_id = "edit-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id;
$show_header = $this->show_header;
$view_title = $this->view_title;
$redirect_to = $this->redirect_to;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="edit"  data-display-type="" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">Edit  Users</h4>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>
    <div  class="">
        <div class="container">
            <div class="row ">
                <div class="col-md-7 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="bg-light p-3 animated fadeIn page-content">
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("users/edit/$page_id/?csrf_token=$csrf_token"); ?>" method="post">
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="name">Company Name or Name <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="">
                                                <input id="ctrl-name"  value="<?php  echo $data['name']; ?>" type="text" placeholder="Enter Company Name or Name"  required="" name="name"  class="form-control " />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label class="control-label" for="email">Email <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="">
                                                    <input id="ctrl-email"  value="<?php  echo $data['email']; ?>" type="email" placeholder="Enter Email"  required="" name="email"  class="form-control " />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="gender">Gender <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <select required=""  id="ctrl-gender" name="gender"  placeholder="Select a value ..."    class="custom-select" >
                                                            <option value="">Select a value ...</option>
                                                            <?php
                                                            $gender_options = Menu :: $gender;
                                                            $field_value = $data['gender'];
                                                            if(!empty($gender_options)){
                                                            foreach($gender_options as $option){
                                                            $value = $option['value'];
                                                            $label = $option['label'];
                                                            $selected = ( $value == $field_value ? 'selected' : null );
                                                            ?>
                                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                <?php echo $label ?>
                                                            </option>                                   
                                                            <?php
                                                            }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label class="control-label" for="age">Age <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="">
                                                        <input id="ctrl-age"  value="<?php  echo $data['age']; ?>" type="text" placeholder="Enter Age"  required="" name="age"  class="form-control " />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="language_level_id">Language Level <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <select required=""  id="ctrl-language_level_id" name="language_level_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                <option value="">Select a value ...</option>
                                                                <?php
                                                                $rec = $data['language_level_id'];
                                                                $language_level_id_options = $comp_model -> users_language_level_id_option_list();
                                                                if(!empty($language_level_id_options)){
                                                                foreach($language_level_id_options as $option){
                                                                $value = (!empty($option['value']) ? $option['value'] : null);
                                                                $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                $selected = ( $value == $rec ? 'selected' : null );
                                                                ?>
                                                                <option 
                                                                    <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                </option>
                                                                <?php
                                                                }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <label class="control-label" for="height">Height <span class="text-danger">*</span></label>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="">
                                                            <input id="ctrl-height"  value="<?php  echo $data['height']; ?>" type="text" placeholder="Enter Height"  required="" name="height"  class="form-control " />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <label class="control-label" for="weight">Weight <span class="text-danger">*</span></label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="">
                                                                <input id="ctrl-weight"  value="<?php  echo $data['weight']; ?>" type="text" placeholder="Enter Weight"  required="" name="weight"  class="form-control " />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <label class="control-label" for="date_of_birth">Date Of Birth <span class="text-danger">*</span></label>
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <div class="input-group">
                                                                    <input id="ctrl-date_of_birth" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['date_of_birth']; ?>" type="datetime" name="date_of_birth" placeholder="Enter Date Of Birth" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                        <div class="input-group-append">
                                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <label class="control-label" for="address">Address <span class="text-danger">*</span></label>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="">
                                                                        <input id="ctrl-address"  value="<?php  echo $data['address']; ?>" type="text" placeholder="Enter Address"  required="" name="address"  class="form-control " />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <div class="row">
                                                                    <div class="col-sm-4">
                                                                        <label class="control-label" for="education">Education <span class="text-danger">*</span></label>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="">
                                                                            <input id="ctrl-education"  value="<?php  echo $data['education']; ?>" type="text" placeholder="Enter Education"  required="" name="education"  class="form-control " />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <label class="control-label" for="foreign_experience">Foreign Experience <span class="text-danger">*</span></label>
                                                                        </div>
                                                                        <div class="col-sm-8">
                                                                            <div class="">
                                                                                <input id="ctrl-foreign_experience"  value="<?php  echo $data['foreign_experience']; ?>" type="text" placeholder="Enter Foreign Experience"  required="" name="foreign_experience"  class="form-control " />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <label class="control-label" for="other_qualification">Other Qualification <span class="text-danger">*</span></label>
                                                                            </div>
                                                                            <div class="col-sm-8">
                                                                                <div class="">
                                                                                    <input id="ctrl-other_qualification"  value="<?php  echo $data['other_qualification']; ?>" type="text" placeholder="Enter Other Qualification"  required="" name="other_qualification"  class="form-control " />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <div class="row">
                                                                                <div class="col-sm-4">
                                                                                    <label class="control-label" for="marital_status">Marital Status <span class="text-danger">*</span></label>
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <div class="">
                                                                                        <input id="ctrl-marital_status"  value="<?php  echo $data['marital_status']; ?>" type="text" placeholder="Enter Marital Status"  required="" name="marital_status"  class="form-control " />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <div class="row">
                                                                                    <div class="col-sm-4">
                                                                                        <label class="control-label" for="blood_type">Blood Type <span class="text-danger">*</span></label>
                                                                                    </div>
                                                                                    <div class="col-sm-8">
                                                                                        <div class="">
                                                                                            <input id="ctrl-blood_type"  value="<?php  echo $data['blood_type']; ?>" type="text" placeholder="Enter Blood Type"  required="" name="blood_type"  class="form-control " />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group ">
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4">
                                                                                            <label class="control-label" for="wearing_glasses_or_not">Wearing Glasses Or Not <span class="text-danger">*</span></label>
                                                                                        </div>
                                                                                        <div class="col-sm-8">
                                                                                            <div class="">
                                                                                                <input id="ctrl-wearing_glasses_or_not"  value="<?php  echo $data['wearing_glasses_or_not']; ?>" type="text" placeholder="Enter Wearing Glasses Or Not"  required="" name="wearing_glasses_or_not"  class="form-control " />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group ">
                                                                                        <div class="row">
                                                                                            <div class="col-sm-4">
                                                                                                <label class="control-label" for="birth_place">Birth Place <span class="text-danger">*</span></label>
                                                                                            </div>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="">
                                                                                                    <input id="ctrl-birth_place"  value="<?php  echo $data['birth_place']; ?>" type="text" placeholder="Enter Birth Place"  required="" name="birth_place"  class="form-control " />
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group ">
                                                                                            <div class="row">
                                                                                                <div class="col-sm-4">
                                                                                                    <label class="control-label" for="nationality">Nationality <span class="text-danger">*</span></label>
                                                                                                </div>
                                                                                                <div class="col-sm-8">
                                                                                                    <div class="">
                                                                                                        <input id="ctrl-nationality"  value="<?php  echo $data['nationality']; ?>" type="text" placeholder="Enter Nationality"  required="" name="nationality"  class="form-control " />
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group ">
                                                                                                <div class="row">
                                                                                                    <div class="col-sm-4">
                                                                                                        <label class="control-label" for="religion">Religion <span class="text-danger">*</span></label>
                                                                                                    </div>
                                                                                                    <div class="col-sm-8">
                                                                                                        <div class="">
                                                                                                            <input id="ctrl-religion"  value="<?php  echo $data['religion']; ?>" type="text" placeholder="Enter Religion"  required="" name="religion"  class="form-control " />
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group ">
                                                                                                    <div class="row">
                                                                                                        <div class="col-sm-4">
                                                                                                            <label class="control-label" for="phone_no">Phone No <span class="text-danger">*</span></label>
                                                                                                        </div>
                                                                                                        <div class="col-sm-8">
                                                                                                            <div class="">
                                                                                                                <input id="ctrl-phone_no"  value="<?php  echo $data['phone_no']; ?>" type="text" placeholder="Enter Phone No"  required="" name="phone_no"  class="form-control " />
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="form-group ">
                                                                                                        <div class="row">
                                                                                                            <div class="col-sm-4">
                                                                                                                <label class="control-label" for="nrc_photo_back">Nrc Photo Back </label>
                                                                                                            </div>
                                                                                                            <div class="col-sm-8">
                                                                                                                <div class="">
                                                                                                                    <div class="dropzone " input="#ctrl-nrc_photo_back" fieldname="nrc_photo_back"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3000" maximum="1">
                                                                                                                        <input name="nrc_photo_back" id="ctrl-nrc_photo_back" class="dropzone-input form-control" value="<?php  echo $data['nrc_photo_back']; ?>" type="text"  />
                                                                                                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                            <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <?php Html :: uploaded_files_list($data['nrc_photo_back'], '#ctrl-nrc_photo_back'); ?>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="form-group ">
                                                                                                            <div class="row">
                                                                                                                <div class="col-sm-4">
                                                                                                                    <label class="control-label" for="nrc_photo_front">Nrc Photo Front </label>
                                                                                                                </div>
                                                                                                                <div class="col-sm-8">
                                                                                                                    <div class="">
                                                                                                                        <div class="dropzone " input="#ctrl-nrc_photo_front" fieldname="nrc_photo_front"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3000" maximum="1">
                                                                                                                            <input name="nrc_photo_front" id="ctrl-nrc_photo_front" class="dropzone-input form-control" value="<?php  echo $data['nrc_photo_front']; ?>" type="text"  />
                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <?php Html :: uploaded_files_list($data['nrc_photo_front'], '#ctrl-nrc_photo_front'); ?>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form-group ">
                                                                                                                <div class="row">
                                                                                                                    <div class="col-sm-4">
                                                                                                                        <label class="control-label" for="household_members">Household Members </label>
                                                                                                                    </div>
                                                                                                                    <div class="col-sm-8">
                                                                                                                        <div class="">
                                                                                                                            <div class="dropzone " input="#ctrl-household_members" fieldname="household_members"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3000" maximum="1">
                                                                                                                                <input name="household_members" id="ctrl-household_members" class="dropzone-input form-control" value="<?php  echo $data['household_members']; ?>" type="text"  />
                                                                                                                                    <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                    <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <?php Html :: uploaded_files_list($data['household_members'], '#ctrl-household_members'); ?>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="form-group ">
                                                                                                                    <div class="row">
                                                                                                                        <div class="col-sm-4">
                                                                                                                            <label class="control-label" for="japan_certificate">Japan Certificate </label>
                                                                                                                        </div>
                                                                                                                        <div class="col-sm-8">
                                                                                                                            <div class="">
                                                                                                                                <div class="dropzone " input="#ctrl-japan_certificate" fieldname="japan_certificate"    data-multiple="false" dropmsg="Choose files or drag and drop files to upload"    btntext="Browse" extensions=".jpg,.png,.gif,.jpeg" filesize="3000" maximum="1">
                                                                                                                                    <input name="japan_certificate" id="ctrl-japan_certificate" class="dropzone-input form-control" value="<?php  echo $data['japan_certificate']; ?>" type="text"  />
                                                                                                                                        <!--<div class="invalid-feedback animated bounceIn text-center">Please a choose file</div>-->
                                                                                                                                        <div class="dz-file-limit animated bounceIn text-center text-danger"></div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <?php Html :: uploaded_files_list($data['japan_certificate'], '#ctrl-japan_certificate'); ?>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-4">
                                                                                                                                <label class="control-label" for="companie_id">Companie Id </label>
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-8">
                                                                                                                                <div class="">
                                                                                                                                    <select  id="ctrl-companie_id" name="companie_id"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                        <?php
                                                                                                                                        $rec = $data['companie_id'];
                                                                                                                                        $companie_id_options = $comp_model -> users_companie_id_option_list();
                                                                                                                                        if(!empty($companie_id_options)){
                                                                                                                                        foreach($companie_id_options as $option){
                                                                                                                                        $value = (!empty($option['value']) ? $option['value'] : null);
                                                                                                                                        $label = (!empty($option['label']) ? $option['label'] : $value);
                                                                                                                                        $selected = ( $value == $rec ? 'selected' : null );
                                                                                                                                        ?>
                                                                                                                                        <option 
                                                                                                                                            <?php echo $selected; ?> value="<?php echo $value; ?>"><?php echo $label; ?>
                                                                                                                                        </option>
                                                                                                                                        <?php
                                                                                                                                        }
                                                                                                                                        }
                                                                                                                                        ?>
                                                                                                                                    </select>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-4">
                                                                                                                                <label class="control-label" for="first_status">First Status </label>
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-8">
                                                                                                                                <div class="">
                                                                                                                                    <select  id="ctrl-first_status" name="first_status"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                        <option value="">Select a value ...</option>
                                                                                                                                        <?php
                                                                                                                                        $first_status_options = Menu :: $first_status;
                                                                                                                                        $field_value = $data['first_status'];
                                                                                                                                        if(!empty($first_status_options)){
                                                                                                                                        foreach($first_status_options as $option){
                                                                                                                                        $value = $option['value'];
                                                                                                                                        $label = $option['label'];
                                                                                                                                        $selected = ( $value == $field_value ? 'selected' : null );
                                                                                                                                        ?>
                                                                                                                                        <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                                                            <?php echo $label ?>
                                                                                                                                        </option>                                   
                                                                                                                                        <?php
                                                                                                                                        }
                                                                                                                                        }
                                                                                                                                        ?>
                                                                                                                                    </select>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="form-group ">
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-sm-4">
                                                                                                                                <label class="control-label" for="first_select_date">First Select Date </label>
                                                                                                                            </div>
                                                                                                                            <div class="col-sm-8">
                                                                                                                                <div class="input-group">
                                                                                                                                    <input id="ctrl-first_select_date" class="form-control datepicker  datepicker"  value="<?php  echo $data['first_select_date']; ?>" type="datetime" name="first_select_date" placeholder="Enter First Select Date" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                                                                        <div class="input-group-append">
                                                                                                                                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-sm-4">
                                                                                                                                    <label class="control-label" for="second_status">Second Status </label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="">
                                                                                                                                        <select  id="ctrl-second_status" name="second_status"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                            <option value="">Select a value ...</option>
                                                                                                                                            <?php
                                                                                                                                            $second_status_options = Menu :: $first_status;
                                                                                                                                            $field_value = $data['second_status'];
                                                                                                                                            if(!empty($second_status_options)){
                                                                                                                                            foreach($second_status_options as $option){
                                                                                                                                            $value = $option['value'];
                                                                                                                                            $label = $option['label'];
                                                                                                                                            $selected = ( $value == $field_value ? 'selected' : null );
                                                                                                                                            ?>
                                                                                                                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                                                                <?php echo $label ?>
                                                                                                                                            </option>                                   
                                                                                                                                            <?php
                                                                                                                                            }
                                                                                                                                            }
                                                                                                                                            ?>
                                                                                                                                        </select>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="form-group ">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-sm-4">
                                                                                                                                    <label class="control-label" for="second_select_date">Second Select Date </label>
                                                                                                                                </div>
                                                                                                                                <div class="col-sm-8">
                                                                                                                                    <div class="input-group">
                                                                                                                                        <input id="ctrl-second_select_date" class="form-control datepicker  datepicker"  value="<?php  echo $data['second_select_date']; ?>" type="datetime" name="second_select_date" placeholder="Enter Second Select Date" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                                                                            <div class="input-group-append">
                                                                                                                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-sm-4">
                                                                                                                                        <label class="control-label" for="third_status">Third Status </label>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-sm-8">
                                                                                                                                        <div class="">
                                                                                                                                            <select  id="ctrl-third_status" name="third_status"  placeholder="Select a value ..."    class="custom-select" >
                                                                                                                                                <option value="">Select a value ...</option>
                                                                                                                                                <?php
                                                                                                                                                $third_status_options = Menu :: $first_status;
                                                                                                                                                $field_value = $data['third_status'];
                                                                                                                                                if(!empty($third_status_options)){
                                                                                                                                                foreach($third_status_options as $option){
                                                                                                                                                $value = $option['value'];
                                                                                                                                                $label = $option['label'];
                                                                                                                                                $selected = ( $value == $field_value ? 'selected' : null );
                                                                                                                                                ?>
                                                                                                                                                <option <?php echo $selected ?> value="<?php echo $value ?>">
                                                                                                                                                    <?php echo $label ?>
                                                                                                                                                </option>                                   
                                                                                                                                                <?php
                                                                                                                                                }
                                                                                                                                                }
                                                                                                                                                ?>
                                                                                                                                            </select>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-group ">
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-sm-4">
                                                                                                                                        <label class="control-label" for="third_select_date">Third Select Date </label>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-sm-8">
                                                                                                                                        <div class="input-group">
                                                                                                                                            <input id="ctrl-third_select_date" class="form-control datepicker  datepicker"  value="<?php  echo $data['third_select_date']; ?>" type="datetime" name="third_select_date" placeholder="Enter Third Select Date" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                                                                                                                <div class="input-group-append">
                                                                                                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-sm-4">
                                                                                                                                            <label class="control-label" for="last_login_at">Last Login At <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <textarea placeholder="Enter Last Login At" id="ctrl-last_login_at"  required="" rows="5" name="last_login_at" class=" form-control"><?php  echo $data['last_login_at']; ?></textarea>
                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-sm-4">
                                                                                                                                            <label class="control-label" for="last_login_ip">Last Login Ip <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <textarea placeholder="Enter Last Login Ip" id="ctrl-last_login_ip"  required="" rows="5" name="last_login_ip" class=" form-control"><?php  echo $data['last_login_ip']; ?></textarea>
                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="form-group ">
                                                                                                                                    <div class="row">
                                                                                                                                        <div class="col-sm-4">
                                                                                                                                            <label class="control-label" for="device">Device <span class="text-danger">*</span></label>
                                                                                                                                        </div>
                                                                                                                                        <div class="col-sm-8">
                                                                                                                                            <div class="">
                                                                                                                                                <textarea placeholder="Enter Device" id="ctrl-device"  required="" rows="5" name="device" class=" form-control"><?php  echo $data['device']; ?></textarea>
                                                                                                                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="form-ajax-status"></div>
                                                                                                                            <div class="form-group text-center">
                                                                                                                                <button class="btn btn-primary" type="submit">
                                                                                                                                    Update
                                                                                                                                    <i class="fa fa-send"></i>
                                                                                                                                </button>
                                                                                                                            </div>
                                                                                                                        </form>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </section>
