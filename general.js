$(document).ready(function(){
    // alert("hi");

    $('.admin-table-checkbox').click(function() {

        // alert($(this).attr('id'));

        var idstr = $(this).attr('id');
        var facultyId=parseInt(idstr.match(/\d+$/)[0], 10);

        document.getElementById('update'+facultyId).disabled = false;
        $('#update'+facultyId).addClass('btn-primary');
    });

});

$(document).ready(function(){

    // $(".setupPayPalInfo").submit(function(e){ 
    //     e.preventDefault();        
    //     //document.getElementById("setupPayPalInfoButton").disabled = true;
    //     //$(".setupPayPalInfoButton").addClass('disabled');
    //     var formData = new FormData(this);  

    //     $.ajax
    //     ({
    //         type: 'POST',
    //         url: 'setupchannelsystem.php',
    //         data:formData,
    //         //dataType: 'text',  // what to expect back from the PHP script, if anything
    //         cache: false,
    //         contentType: false,
    //         processData: false,                
    //         success: function (response) 
    //         {
    //             //alert("ikde ala re!");
    //             //alert(response);   
                
    //             //var data=JSON.parse(response);
    //             //console.log(data.transactions[0].amount.total);
    //             //alert("Payment of $"+data.transactions[0].amount.total+" is successful");
    //             //alert(data['amount']['total']);
    //             //$(".setupPayPalInfoButton").removeClass('disabled');
    //             if(response.trim()=="success")
    //             {           
    //                 window.location.href="creatorstudio.php";
    //             }                    
                
    //         },                
    //         error: function(xhr, status, error) {
    //             alert(xhr.responseText);
    //         }              
    //     });
        
    //     return false;
    // })
});