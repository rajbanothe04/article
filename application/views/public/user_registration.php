<?php include_once('user_header.php'); ?>

<div class="container">
    <form>

        <div class="row">
            <legend>User Registaration</legend>
            <div class="row col-lg-6 border shadow mb-5 bg-black">
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputName" class="form-label mt-4">Full Name<spanwam style="color:red">
                                *</span></label>
                        <?php echo form_input(['name' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter your name', 'value' => set_value('name')]); ?>
                        <!-- <input type="name" class="form-control" id="exampleInputName" placeholder="Enter your name"> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label mt-4">Password<span
                                style="color:red">*</span></label>
                        <?php echo form_password(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Enter Password']); ?>
                    </div>
                    <div class="form-group">
                        <label for=" exampleSelect1" class="form-label mt-4">Select Country<span
                                style="color:red">*</span></label>

                        <?php $country_options = array("India", "USA", "Australia", "Sri Lanka", "South Africa");
                        echo form_dropdown('Country', $country_options, '', 'class="form-control"'); ?>

                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Select District<span
                                style="color:red">*</span></label>
                        <select class="form-select" id="exampleSelect1">

                            <option>Gondia</option>
                            <option>Nagpur</option>
                            <option>Bhandara</option>
                            <option>Utah</option>
                            <option>Wyoming</option>

                        </select>
                    </div>
                    <fieldset class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Gender<span
                                style="color:red">*</span></label>
                        <div class="d-flex justify-content-around">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios"
                                        id="optionsRadios1" value="option1" checked="">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios"
                                        id="optionsRadios2" value="option2">
                                    Female
                                </label>
                            </div>
                        </div>
                    </fieldset>

                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Email address<span
                                style="color:red">*</span></label>
                        <?php echo form_input(['name' => 'email', 'class' => 'form-control', 'placeholder' => 'Enter your email', 'value' => set_value('email')]); ?>
                        <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email"> -->
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label mt-4">Conform Password<span
                                style="color:red">*</span></label>
                        <?php echo form_password(['name' => 'password', 'class' => 'form-control', 'placeholder' => 'Re-Enter Password']); ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Select State<span
                                style="color:red">*</span></label>
                        <select class="form-select" id="exampleSelect1">
                            <!-- <label for="exampleSelect2" class="form-label mt-4">Select State</label>
                            <select multiple="" class="form-select" id="exampleSelect2"> -->
                            <option>Maharashtra</option>
                            <option>Madhya Pradesh</option>
                            <option>Montana</option>
                            <option>Carlisle</option>
                            <option>Sidney</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName" class="form-label mt-4">Zip Code<span
                                style="color:red">*</span></label>
                        <input type="name" class="form-control" id="exampleInputName" placeholder="Enter Zip Code">
                    </div>


                    <div class="form-group">
                        <label for="formFile" class="form-label mt-4">Uplaod Profile Photo</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                </div>

                <div class="d-flex justify-content-center my-4">
                    <button type="reset" class="btn btn-primary">Reset</button>
                    &nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>

    </form>
</div>

<?php include_once('user_footer.php'); ?>