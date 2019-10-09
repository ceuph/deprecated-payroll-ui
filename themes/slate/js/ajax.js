function approve(gridId, url,pjaxId)
{
    var keys = $(gridId).yiiGridView('getSelectedRows');
    $.ajax({
        type: "POST",
        url: url, 
        data: {ids: keys},
        success: function(result){
            if(result == 1)
              {
                $.pjax.reload({container: pjaxId, async: false}); 

              }
        },

        error: function(){
        alert("ERROR at PHP side!!");
         },

      });
}