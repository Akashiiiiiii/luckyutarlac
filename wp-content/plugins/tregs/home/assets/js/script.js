/*This is JS File*/

jQuery(function(){
    jQuery(document).on("click",".btnClick",function(){
        
        var post_data="action=tregs_plugin_library&param=get_message";
        $.post(ajaxurl,post_data,function(response){
            console.log(response);
        });
    });

    $("#frmpost").validate({
        submitHandler:function(){
            var post_data= $("#frmpost").serialize() +"&action=tregs_plugin_library&param=post_form_data";
            
            $.post(ajaxurl,post_data,function(response){
                var data = $.parseJSON(response);
                console.log(data);
                console.log("title"+data.title+"paragraph"+data.paragraph+"column"+data.column);
            });
        }
    });
});

