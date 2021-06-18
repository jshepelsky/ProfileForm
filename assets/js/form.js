// making email readyonly
$(function() {
    $('#emailAddress').prop('readonly', true);
})

// adding dashes to phone number
$('#phoneNumber').keyup(function(){
    $(this).val($(this).val().replace(/(\d{3})\-?(\d{3})\-?(\d{4})/,'$1-$2-$3'))
});

// showing image preview for form and thank you screen
function loadFile (event){
    var output = document.getElementById('profilePhotoPreview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function () {
        URL.revokeObjectURL(output.src)
    }

    var outputDetail = document.getElementById('profilePhotoPreviewDets');
    outputDetail.src = URL.createObjectURL(event.target.files[0]);
    outputDetail.onload = function () {
        URL.revokeObjectURL(output.src)
    }
}

// submitting form after html validation
$("#profileForm").submit(function(e) {
    //prevent form from refreshing page
    e.preventDefault();

    //creating an array with form data
    let serializedArray = $(this).serializeArray();

    //adding image upload to form data
    serializedArray.push({ name: "image", value: $("#fileUpload").val() });

    //creating easier to use keyed array
    let formData = serializedArray.reduce(function(obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {});

    //show/hide form and thank you message
    $("#profileForm").hide();
    $("#thankYouMessage").show();
    $("#thankYouMessageDetails").show();

    //scroll to top
    window.scrollTo(0, 0);

    // append form data to thank you screen
    $("#appendName").html(formData['firstname'] + " " + formData['lastname']);
    $("#appendPhone").html(formData['phonenumber']);
    $("#appendEmail").html(formData['emailaddress']);
    $("#appendAddress").html(formData['physicaladdress'] + ", " + formData['city'] + ", " + formData['state'] + " " + formData['zipcode']);
    $("#appendGender").html(formData['gender']);


    // see form data in console log
    // would send with ajax to controller here 
    console.log(formData)
});

//toggle light and dark mode classes
function toggleColorMode(){
    if ($("#colorMode").is(":checked")){
        $("#lightMode").show();
        $("#darkMode").hide();
        $("body").removeClass('black_bg');
        $(".profile_form_title").removeClass('white_text');
        $(".entire_form_container").removeClass('grey_bg');
        $(".label_title").removeClass('white_text');
        $(".each_fieldset").removeClass('white_text');
        $(".thank_you_section").removeClass('white_text');
    }
    else{  
        $("#lightMode").hide();
        $("#darkMode").show();
        $("body").addClass('black_bg');
        $(".profile_form_title").addClass('white_text');
        $(".entire_form_container").addClass('grey_bg');
        $(".label_title").addClass('white_text')
        $(".each_fieldset").addClass('white_text');
        $(".thank_you_section").addClass('white_text');
    }
}