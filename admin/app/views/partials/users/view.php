<?php
$comp_model = new SharedController;
$page_element_id = "view-page-" . random_str();
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
//Page Data Information from Controller
$data = $this->view_data;
//$rec_id = $data['__tableprimarykey'];
$page_id = $this->route->page_id; //Page id from url
$view_title = $this->view_title;
$show_header = $this->show_header;
$show_edit_btn = $this->show_edit_btn;
$show_delete_btn = $this->show_delete_btn;
$show_export_btn = $this->show_export_btn;
?>
<section class="page" id="<?php echo $page_element_id; ?>" data-page-type="view"  data-display-type="table" data-page-url="<?php print_link($current_page); ?>">
    <?php
    if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col ">
                    <h4 class="record-title">View  Users</h4>
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
                <div class="col-md-12 comp-grid">
                    <?php $this :: display_page_errors(); ?>
                    <div  class="card animated fadeIn page-content">
                        <?php
                        $counter = 0;
                        if(!empty($data)){
                        $rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
                        $counter++;
                        ?>
                        <div id="page-report-body" class="">
                            <table class="table table-hover table-borderless table-striped">
                                <!-- Table Body Start -->
                                <tbody class="page-data" id="page-data-<?php echo $page_element_id; ?>">
                                    <tr  class="td-name">
                                        <th class="title"> Name: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['name']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="name" 
                                                data-title="Enter Company Name or Name" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['name']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-email">
                                        <th class="title"> Email: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['email']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="email" 
                                                data-title="Enter Email" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="email" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['email']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-gender">
                                        <th class="title"> Gender: </th>
                                        <td class="value">
                                            <span  data-source='<?php echo json_encode_quote(Menu :: $gender); ?>' 
                                                data-value="<?php echo $data['gender']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="gender" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['gender']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-age">
                                        <th class="title"> Age: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['age']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="age" 
                                                data-title="Enter Age" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['age']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-language_level_id">
                                        <th class="title"> Language Level: </th>
                                        <td class="value">
                                            <div class="inline-page">
                                                <a class="btn btn-sm btn-primary open-page-inline" href="<?php print_link("language_levels/view/" . urlencode($data['language_level_id'])); ?>">
                                                    <i class="fa fa-eye"></i> <?php echo $data['language_levels_title'] ?>
                                                </a>
                                                <div class="page-content reset-grids d-none animated fadeIn"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr  class="td-height">
                                        <th class="title"> Height: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['height']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="height" 
                                                data-title="Enter Height" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['height']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-weight">
                                        <th class="title"> Weight: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['weight']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="weight" 
                                                data-title="Enter Weight" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['weight']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-date_of_birth">
                                        <th class="title"> Date Of Birth: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['date_of_birth']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="date_of_birth" 
                                                data-title="Enter Date Of Birth" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['date_of_birth']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-address">
                                        <th class="title"> Address: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['address']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="address" 
                                                data-title="Enter Address" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['address']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-photo">
                                        <th class="title"> Photo: </th>
                                        <td class="value"><?php Html :: page_img($data['photo'],400,400,1); ?></td>
                                    </tr>
                                    <tr  class="td-education">
                                        <th class="title"> Education: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['education']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="education" 
                                                data-title="Enter Education" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['education']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-foreign_experience">
                                        <th class="title"> Foreign Experience: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['foreign_experience']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="foreign_experience" 
                                                data-title="Enter Foreign Experience" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['foreign_experience']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-other_qualification">
                                        <th class="title"> Other Qualification: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['other_qualification']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="other_qualification" 
                                                data-title="Enter Other Qualification" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['other_qualification']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-marital_status">
                                        <th class="title"> Marital Status: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['marital_status']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="marital_status" 
                                                data-title="Enter Marital Status" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['marital_status']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-blood_type">
                                        <th class="title"> Blood Type: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['blood_type']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="blood_type" 
                                                data-title="Enter Blood Type" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['blood_type']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-wearing_glasses_or_not">
                                        <th class="title"> Wearing Glasses Or Not: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['wearing_glasses_or_not']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="wearing_glasses_or_not" 
                                                data-title="Enter Wearing Glasses Or Not" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['wearing_glasses_or_not']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-birth_place">
                                        <th class="title"> Birth Place: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['birth_place']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="birth_place" 
                                                data-title="Enter Birth Place" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['birth_place']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nationality">
                                        <th class="title"> Nationality: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['nationality']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="nationality" 
                                                data-title="Enter Nationality" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['nationality']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-religion">
                                        <th class="title"> Religion: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['religion']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="religion" 
                                                data-title="Enter Religion" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['religion']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-phone_no">
                                        <th class="title"> Phone No: </th>
                                        <td class="value">
                                            <span  data-value="<?php echo $data['phone_no']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="phone_no" 
                                                data-title="Enter Phone No" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="text" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['phone_no']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-nrc_photo_back">
                                        <th class="title"> Nrc Photo Back: </th>
                                        <td class="value"><?php Html :: page_img($data['nrc_photo_back'],400,400,1); ?></td>
                                    </tr>
                                    <tr  class="td-nrc_photo_front">
                                        <th class="title"> Nrc Photo Front: </th>
                                        <td class="value"><?php Html :: page_img($data['nrc_photo_front'],400,400,1); ?></td>
                                    </tr>
                                    <tr  class="td-household_members">
                                        <th class="title"> Household Members: </th>
                                        <td class="value"><?php Html :: page_img($data['household_members'],400,400,1); ?></td>
                                    </tr>
                                    <tr  class="td-japan_certificate">
                                        <th class="title"> Japan Certificate: </th>
                                        <td class="value"><?php Html :: page_img($data['japan_certificate'],400,400,1); ?></td>
                                    </tr>
                                    <tr  class="td-companie_id">
                                        <th class="title"> Company ID: </th>
                                        <td class="value">
                                            <a class="btn btn-sm btn-primary open-page-popover" href="<?php print_link("companies/view/" . urlencode($data['companie_id'])); ?>">
                                                <i class="fa fa-eye"></i> <?php echo $data['companie_id'] ?>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr  class="td-first_status">
                                        <th class="title"> First Status: </th>
                                        <td class="value">
                                            <span  data-source='<?php echo json_encode_quote(Menu :: $first_status); ?>' 
                                                data-value="<?php echo $data['first_status']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="first_status" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['first_status']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-first_select_date">
                                        <th class="title"> First Select Date: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['first_select_date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="first_select_date" 
                                                data-title="Enter First Select Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['first_select_date']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-second_status">
                                        <th class="title"> Second Status: </th>
                                        <td class="value">
                                            <span  data-source='<?php echo json_encode_quote(Menu :: $first_status); ?>' 
                                                data-value="<?php echo $data['second_status']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="second_status" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['second_status']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-second_select_date">
                                        <th class="title"> Second Select Date: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['second_select_date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="second_select_date" 
                                                data-title="Enter Second Select Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['second_select_date']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-third_status">
                                        <th class="title"> Third Status: </th>
                                        <td class="value">
                                            <span  data-source='<?php echo json_encode_quote(Menu :: $first_status); ?>' 
                                                data-value="<?php echo $data['third_status']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="third_status" 
                                                data-title="Select a value ..." 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="select" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['third_status']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-third_select_date">
                                        <th class="title"> Third Select Date: </th>
                                        <td class="value">
                                            <span  data-flatpickr="{ enableTime: false, minDate: '', maxDate: ''}" 
                                                data-value="<?php echo $data['third_select_date']; ?>" 
                                                data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="third_select_date" 
                                                data-title="Enter Third Select Date" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="flatdatetimepicker" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['third_select_date']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-last_login_at">
                                        <th class="title"> Last Login At: </th>
                                        <td class="value">
                                            <span  data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="last_login_at" 
                                                data-title="Enter Last Login At" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['last_login_at']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-last_login_ip">
                                        <th class="title"> Last Login Ip: </th>
                                        <td class="value">
                                            <span  data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="last_login_ip" 
                                                data-title="Enter Last Login Ip" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['last_login_ip']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                    <tr  class="td-device">
                                        <th class="title"> Device: </th>
                                        <td class="value">
                                            <span  data-pk="<?php echo $data['id'] ?>" 
                                                data-url="<?php print_link("users/editfield/" . urlencode($data['id'])); ?>" 
                                                data-name="device" 
                                                data-title="Enter Device" 
                                                data-placement="left" 
                                                data-toggle="click" 
                                                data-type="textarea" 
                                                data-mode="popover" 
                                                data-showbuttons="left" 
                                                class="is-editable" >
                                                <?php echo $data['device']; ?> 
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Table Body End -->
                            </table>
                        </div>
                        <div class="p-3 d-flex">
                            <div class="dropup export-btn-holder mx-1">
                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-save"></i> Export
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php $export_print_link = $this->set_current_page_link(array('format' => 'print')); ?>
                                    <a class="dropdown-item export-link-btn" data-format="print" href="<?php print_link($export_print_link); ?>" target="_blank">
                                        <img src="<?php print_link('assets/images/print.png') ?>" class="mr-2" /> PRINT
                                        </a>
                                        <?php $export_pdf_link = $this->set_current_page_link(array('format' => 'pdf')); ?>
                                        <a class="dropdown-item export-link-btn" data-format="pdf" href="<?php print_link($export_pdf_link); ?>" target="_blank">
                                            <img src="<?php print_link('assets/images/pdf.png') ?>" class="mr-2" /> PDF
                                            </a>
                                            <?php $export_word_link = $this->set_current_page_link(array('format' => 'word')); ?>
                                            <a class="dropdown-item export-link-btn" data-format="word" href="<?php print_link($export_word_link); ?>" target="_blank">
                                                <img src="<?php print_link('assets/images/doc.png') ?>" class="mr-2" /> WORD
                                                </a>
                                                <?php $export_csv_link = $this->set_current_page_link(array('format' => 'csv')); ?>
                                                <a class="dropdown-item export-link-btn" data-format="csv" href="<?php print_link($export_csv_link); ?>" target="_blank">
                                                    <img src="<?php print_link('assets/images/csv.png') ?>" class="mr-2" /> CSV
                                                    </a>
                                                    <?php $export_excel_link = $this->set_current_page_link(array('format' => 'excel')); ?>
                                                    <a class="dropdown-item export-link-btn" data-format="excel" href="<?php print_link($export_excel_link); ?>" target="_blank">
                                                        <img src="<?php print_link('assets/images/xsl.png') ?>" class="mr-2" /> EXCEL
                                                        </a>
                                                    </div>
                                                </div>
                                                <a class="btn btn-sm btn-info"  href="<?php print_link("users/edit/$rec_id"); ?>">
                                                    <i class="fa fa-edit"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-danger record-delete-btn mx-1"  href="<?php print_link("users/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                                                    <i class="fa fa-times"></i> Delete
                                                </a>
                                            </div>
                                            <?php
                                            }
                                            else{
                                            ?>
                                            <!-- Empty Record Message -->
                                            <div class="text-muted p-3">
                                                <i class="fa fa-ban"></i> No Record Found
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
