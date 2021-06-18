<body>
    <!-- toggle for light and dark mode -->
    <section class="light_mode_section">
        <label class="light_mode_switch" for="colorMode">
            <span id="lightMode">
                Light Mode
            </span>
            <span id="darkMode" style="display:none;">
                Dark Mode
            </span>
        </label>
        <label class="switch_modes">
            <input id="colorMode" type="checkbox" checked onchange="toggleColorMode()">
            <span class="slider round"></span>
        </label>
    </section>
    <!-- form for profile data -->
    <form method="post" id="profileForm" enctype="multipart/form-data" name="profileForm">
        <h2 class="profile_form_title animate__animated animate__fadeIn">Profile Form</h2>
        <div class="entire_form_container animate__animated animate__fadeIn">
            <section>
                <!-- flexing row with columns for desktop -->
                <div class="flex_form_row">
                    <p class="each_form_container">
                        <label for="firstName">
                            <span class="label_title">First Name</span>
                            <strong><span class="required_asterisk" title="required">*</span></strong>
                        </label>
                        <input placeholder="First Name" type="text" class="each_input_form" id="firstName" required name="firstname">
                    </p>
                    <p class="each_form_container">
                        <label for="lastName">
                            <span class="label_title">Last Name</span>
                            <strong><span class="required_asterisk" title="required">*</span></strong>
                        </label>
                        <input type="text" placeholder="Last Name" class="each_input_form" id="lastName" required name="lastname">
                    </p>
                </div>
                <div class="flex_form_row">
                    <p class="each_form_container">
                        <label for="phoneNumber">
                            <span class="label_title">Phone Number</span>
                            <strong><span class="required_asterisk" title="required">*</span></strong>
                        </label>
                        <input required type="tel" maxlength="10" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="xxx-xxx-xxxx" class="each_input_form" id="phoneNumber" name="phonenumber">
                    </p>
                    <p class="each_form_container">
                        <label for="emailAddress">
                            <span class="label_title">E-mail Address</span>
                        </label>
                        <input required type="email" class="each_input_form disabled_form_element" value="email@email.com" id="emailAddress" name="emailaddress">
                    </p>
                </div>
                <p class="each_form_container">
                    <label for="physicalAddress">
                        <span class="label_title">Address</span>
                        <strong><span class="required_asterisk" title="required">*</span></strong>
                    </label>
                    <input required placeholder="Address" class="each_input_form" type="text" id="physicalAddress" name="physicaladdress">
                </p>
                <div class="flex_form_row">
                    <p class="each_form_container">
                        <label for="city">
                            <span class="label_title">City</span>
                            <strong><span class="required_asterisk" title="required">*</span></strong>
                        </label>
                        <input required placeholder="City" class="each_input_form" type="text" id="city" name="city">
                    </p>
                    <p class="each_form_container">
                        <label for="state">
                            <span class="label_title">State</span>
                            <strong><span class="required_asterisk" title="required">*</span></strong>
                        </label>
                        <select required class="each_input_form more_select_height" id="state" name="state">
                            <option value="" disabled selected>Select State</option>
                            <option value="CA">CA</option>
                        </select>
                    </p>
                    <p class="each_form_container">
                        <label for="zipCode">
                            <span class="label_title">Zip Code</span>
                            <strong><span class="required_asterisk" title="required">*</span></strong>
                        </label>
                        <input required placeholder="Zip Code" class="each_input_form" type="text" id="zipCode" name="zipcode">
                    </p>
                </div>
            </section>
            <section>
                <fieldset class="each_fieldset">
                    <legend class="gender_title">Gender
                        <strong><span class="required_asterisk" title="required">*</span></strong>
                    </legend>
                    <div class="gender_form_radios">
                        <p class="gender_input_p">
                            <input required class="gender_input" type="radio" id="genderSelect1" name="gender" value="male">
                            <label class="gender_radio_label" for="genderSelect1">Male</label>
                        </p>
                        <p class="gender_input_p">
                            <input required class="gender_input" type="radio" id="genderSelect2" name="gender" value="female">
                            <label class="gender_radio_label" for="genderSelect2">Female</label>
                        </p>
                        <p class="gender_input_p">
                            <input required class="gender_input" type="radio" id="genderSelect3" name="gender" value="other">
                            <label class="gender_radio_label" for="genderSelect3">Other</label>
                        </p>
                    </div>
                </fieldset>
            </section>
            <section class="profile_photo_section">
                <fieldset class="each_fieldset">
                    <legend class="gender_title">Profile Photo
                        <strong><span class="required_asterisk" title="required">*</span></strong>
                    </legend>
                    <p class="each_form_container upload_form_continer">
                        <label for="fileUpload" class="form_upload_label">
                            <img alt="upload profile photo" src="assets/images/upload.png" class="upload_image_icon" />Upload Profile Photo
                        </label>
                        <input class="hidden_file_upload" id="fileUpload" type="file" name="fileupload" accept="image/png, image/gif, image/jpeg" onchange="loadFile(event)" required />
                        <img class="profile_image_preview" id="profilePhotoPreview" alt="profile photo" src="assets/images/user.png" />
                    </p>
                </fieldset>
            </section>
            <section>
                <p class="consent_marketing_section">
                    <input class="margin_right_checkbox" type="checkbox" id="marketingConsent" name="marketingconsent" required>
                    <label class="checkbox_label" for="marketingConsent">
                        <strong><span class="required_asterisk" title="required">*</span></strong>
                        <span class="label_title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores aliquid earum porro deleniti explicabo ex voluptatibus dolorum, odio suscipit, eius in unde. Consequuntur quo, tempora sint delectus facere animi provident.</span>
                    </label>
                </p>
            </section>

            <section>
                <p class="each_form_container">
                    <button class="sign_up_button" type="submit">Sign Up</button>
                </p>
            </section>
        </div>
    </form>

    <!-- thank you screen to show when form is complete -->
    <section id="thankYouMessage" style="display:none;">
        <h2 class="profile_form_title animate__animated animate__fadeIn">Profile Form</h2>
        <div class="thank_you_section animate__animated animate__fadeIn">
            <h3>
                Thank you for creating your profile.
            </h3>
            <p class="thank_you_p">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta optio corporis cumque pariatur minus alias vero dolorem quos similique ducimus ad quia a soluta ipsa provident consectetur, earum cupiditate fugit?
            </p>
        </div>
    </section>
    <section id="thankYouMessageDetails" style="display:none;">
        <div class="thank_you_section thank_you_section_dets animate__animated animate__fadeIn">
            <h4>
                Here are your details
            </h4>
            <p class="each_form_details">
                <span class="form_detail_title">Name</span>
                <span id="appendName"></span>
            </p>
            <p class="each_form_details">
                <span class="form_detail_title">Phone</span>
                <span id="appendPhone"></span>
            </p>
            <p class="each_form_details">
                <span class="form_detail_title">Email</span>
                <span id="appendEmail"></span>
            </p>
            <p class="each_form_details">
                <span class="form_detail_title">Address</span>
                <span id="appendAddress"></span>
            </p>
            <p class="each_form_details">
                <span class="form_detail_title">Gender</span>
                <span id="appendGender"></span>
            </p>
            <p class="each_form_details">
                <span class="form_detail_title">Profile Photo</span>
                <span id="appendPhoto">
                    <img class="profile_image_preview" id="profilePhotoPreviewDets" alt="profile photo" src="assets/images/user.png" />
                </span>
            </p>
        </div>
    </section>
    
</body>