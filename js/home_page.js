function clearText(field) {
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
$(document).ready(function() {
    $("#step2").click(function(event) {
        alert("Please upload the file first");
    });
    $("#step3").click(function(event) {
        alert("Please upload the file first");
    });
	
    $("#upload_id").click(function(event) {
        event.preventDefault();
        $('#upload_id').click(false);

        //$(this).fadeOut();
        console.log("sdsdsdsss");
        $('html,body').animate({
                scrollTop: $(".style_upload").offset().top
            },
            'slow');

        document.getElementById("style1").style.display = "none";
        document.getElementById("style2").style.display = "none";
        document.getElementById("style3").style.display = "none";
        document.getElementById("style_upload").style.display = "block";
    });

    $('#submit').attr('disabled', 'disabled');
    var a = 0;
    //binds to onchange event of your input field
    $('#file').bind('change', function() {
        if ($('input:submit').attr('disabled', false)) {
            $('input:submit').attr('disabled', true);
        }
        var ext = $('#file').val().split('.').pop().toLowerCase();
        if ($.inArray(ext, ['xlsx']) == -1) {
            $('#error1').slideDown("slow");
            $('#error2').slideUp("slow");
            $('#submit').attr('disabled', 'disabled');

            a = 0;
        } else {
            var picsize = (this.files[0].size);
            if (picsize > 40000000) {
                $('#error2').slideDown("slow");
                //this is to disable the button to prevent the user to upload any file
                $('#submit').attr('disabled', 'disabled');

                a = 0;
            } else {
                a = 1;
                $('#submit').removeAttr('disabled');
                $('#error2').slideUp("slow");
            }
            $('#error1').slideUp("slow");

            if (a == 1) {
                $('input:submit').attr('disabled', false);
            }
        }
    });

    $(".upload-image").click(function() {
        document.getElementById("uploadmessage").style.display = "block";
        document.getElementById("dropme").style.display = "none";
        $('#uploadmessage').text("Please Wait until Upload process is complete");
        document.getElementById("loadbar").style.display = "block";
        $(".form-horizontal").submit();
    });
});