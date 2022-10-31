$(document).ready( function () {

    $("form").submit(function( event) {
        event.preventDefault(); 

        const firstname = $("#firstname").val();
        const lastname  = $("#lastname").val();
        const sex      = $("[name='sex']").val();
        const city     = $("#city").val();
        const birth     = $("#birth").val();
        const address   = $("#address").val(); 

        const body = {
            firstname: firstname,
            lastname: lastname,
            sex: sex,
            birth: birth,
            address: address,
            city: city
        };

        $.ajax({
            type: "POST",
            url: "process.php",
            data: body,
            dataType:"text",
            success: function(){
                $("#firstNameLabel").text(firstname);
                $("#lastNameLabel").text(lastname);
                $("#sexLabel").text(sex);
                $("#cityLabel").text(city);
                $("#addressLabel").text(address);
                $("#birthLabel").text(birth);

                $("#registration").addClass("d-none");
                $("#postRegistration").removeClass("d-none");
            },           
        });
    });
});
