$(function(){
    
    //ug-leave credits
    $('#uglId').click(function(){
        $('#ugId').modal('show')
        .find('#contentUg')
        .load($(this).attr('value'));
    });

    //gs-leave credits
     $('#gslId').click(function(){
        $('#gsId').modal('show')
        .find('#contentGs')
        .load($(this).attr('value'));
    });

     //nt-leave credits
     $('#ntId').click(function(){
        $('#ntLId').modal('show')
        .find('#contentNt')
        .load($(this).attr('value'));
    });


    $('#activity-view-link').click(function() {
    $.get(
        'view',
        {
            id: $(this).closest('tr').data('key')
        },
        function (data) {
            $("#activity-modal").find(".modal-body").html(data);
            $("#activity-modal").modal("show");
        }
    );
    });
});

function ajaxmodal(modal, url) {
    //update utility
    $.get(
        url,
        {
            id: $(this).closest('tr').data('key')
        },
        function (data) {
            $(modal).find(".modal-body").html(data);
            $(modal).modal("show");

        }
    );
}
