<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<script src="<?= base_url('assets/jq/jquery-3.6.0'); ?>"></script>

<div class="container">
    <?php echo form_open_multipart('registration/user_registration', ['class' => 'form-horizontal']); ?>

    <div class="row">
        <legend>User Registaration</legend>
        <div class="row col-lg-6 border shadow mb-5 bg-black">
            <div class=row>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="uname" class="form-label mt-4">Full Name<span style="color:red">*</span></label>
                        <?php echo form_input(['name' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter your name', 'value' => set_value('name')]); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="uemail" class="form-label mt-4">Email address<span
                                style="color:red">*</span></label>
                        <?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter your email', 'value' => set_value('email')]); ?>

                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small> -->
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="uassword" class="form-label mt-4">Password<span style="color:red">*</span></label>
                        <?php echo form_password(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Enter Password']); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="upassword1" class="form-label mt-4">Conform Password<span
                                style="color:red">*</span></label>
                        <?php echo form_password(['name' => 'password1', 'class' => 'form-control', 'placeholder' => 'Re-Enter Password']); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="country-list" class="form-label mt-4">Select Country<span
                                style="color:red">*</span></label>
                        <!-- <select class="form-select" id="country-list">
                            <option value="null">Select Country</option> -->
                        <?php
                        // echo form_dropdown('Select Country', $country_list['countryname']);
                        // if (!empty($country_list)) {
                        // foreach ($country_list as $country) :
                        //     echo "<option value=" . $country->id . ">" . $country->countryname . "</option>";
                        // endforeach;
                        // }
                        ?>
                        <?php echo form_dropdown('country', $countries, '', 'class="form-control" id="country-list"'); ?>

                        <!-- </select> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="state-list" class="form-label mt-4">Select State<span
                                style="color:red">*</span></label>
                        <!-- <select class="form-select" id="state-list"> -->
                        <!-- <label for="exampleSelect2" class="form-label mt-4">Select State</label>
                            <select multiple="" class="form-select" id="exampleSelect2"> -->
                        <!-- <option>Select State</option> -->
                        <!-- <option>Madhya Pradesh</option>
                            <option>Montana</option>
                            <option>Carlisle</option>
                            <option>Sidney</option> -->
                        <!-- </select> -->
                        <?php echo form_dropdown('state', 'Select State', 'Select State', 'class="form-control" id="state-list"'); ?>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="city-list" class="form-label mt-4">Select City<span
                                style="color:red">*</span></label>
                        <?php echo form_dropdown('city', 'Select City', 'Select City', 'class="form-control" id="city-list"'); ?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="zip" class="form-label mt-4">Zip Code<span style="color:red">*</span></label>
                        <?php echo form_input(['name' => 'zip', 'class' => 'form-control', 'value' => set_value('zip')]); ?>
                        <!-- <input type="name" class="form-control" id="exampleInputName" placeholder="Enter Zip Code"> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <fieldset class="form-group">
                        <label for="gender" class="form-label mt-4">Gender<span style="color:red">*</span></label>
                        <div class="d-flex justify-content-around">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <!-- <input type="radio" class="form-check-input" name="optionsRadios"
                                            id="optionsRadios1" value="option1" checked=""> -->
                                    <?php echo form_radio(['name' => 'radio', 'value' => 'option1', 'id' => 'optionsRadios1']); ?>
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <!-- <input type="radio" class="form-check-input" name="optionsRadios"
                                            id="optionsRadios2" value="option2"> -->
                                    <?php echo form_radio(['name' => 'radio', 'value' => 'option2', 'id' => 'optionsRadios2']); ?>
                                    Female
                                </label>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="formFile" class="form-label mt-4">Uplaod Profile Photo</label>
                        <?php echo form_upload(['name' => 'file', 'class' => 'form-control', 'id' => 'formFile']); ?>
                        <!-- <input class="form-control" type="file" id="formFile"> -->
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center my-4">
                <!-- <button type="reset" class="btn btn-primary">Reset</button> -->
                <?php echo form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-primary']); ?>
                &nbsp;&nbsp;&nbsp;
                <!-- <button type="submit" class="btn btn-primary">Register</button> -->
                <?php echo form_submit(['name' => 'sumbit', 'value' => 'Register', 'class' => 'btn btn-primary']); ?>
            </div>
        </div>
    </div>

    </form>
</div>



<!-- This is jquery code to select dynamic Country State and City -->

<script>
$(document).ready(function() {

    // Function to load states depends on Country
    $("#country-list").change(function() {
        var id = $("#country-list").val()
        $.ajax({
            type: "POST",
            url: "./registration/getState",
            data: {
                country_id: id
            },
            dataType: "json",
            cache: false,
            success: function(data) {
                console.log("Response==> ", data);
                if (data.length === 0) {
                    $('.state-opt').remove();
                } else {
                    $.each(data, function(key, value) {
                        $("#state-list").append("<option class='state-opt' value=" +
                            value.id + ">" +
                            value.statename + "</option>");
                    });
                }
            }
        }); // you have missed this bracket
        return false;
    });
    // ==================================================

    // Function to load cities depends on state
    $('#state-list').change(function() {
        var id = $("#state-list").val()
        $.ajax({
            type: "POST",
            url: "./registration/getCity",
            data: {
                state_id: id
            },
            dataType: "json",
            success: function(data) {
                console.log("Response==>", data);
                if (data.lenght == 0) {
                    $('.city-opt').remove();
                } else {
                    $.each(data, function(key, value) {
                        $("#city-list").append("<option class='city-opt' value=" +
                            value.id + ">" +
                            value.cityname + "</option>");
                    });
                }
            }
        });
    });
});
</script>

</html>