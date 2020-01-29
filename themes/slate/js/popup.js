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

     //tc dtr
     $('#tcdtrId').click(function(){
        $('#tcId').modal('show')
        .find('#contentTc')
        .load($(this).attr('value'));
    });

     //tc teaching load dtr
     $('#tctId').click(function(){
        $('#tclId').modal('show')
        .find('#contentTcl')
        .load($(this).attr('value'));
    });

     //nt dtr
     $('#ntdtrId').click(function(){
        $('#dtrId').modal('show')
        .find('#contentDtr')
        .load($(this).attr('value'));
    });
     //to faculty tother income
     $('#totherId').click(function(){
        $('#toId').modal('show')
        .find('#contentTo')
        .load($(this).attr('value'));
    });

     //to nt other income
     $('#ntotherId').click(function(){
        $('#otherId').modal('show')
        .find('#contentOther')
        .load($(this).attr('value'));
    });
     //loans
     $('#loansId').click(function(){
        $('#loanId').modal('show')
        .find('#contentLoan')
        .load($(this).attr('value'));
    });

     //other deductions
     $('#odeducId').click(function(){
        $('#deducId').modal('show')
        .find('#contentDeduc')
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
