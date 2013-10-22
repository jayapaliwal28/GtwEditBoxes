/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com

*/
require(['jquery', 'basepath', 'editbox/autosize'], function($, basepath){
    
    $('.editbox .closed').css('cursor', 'pointer');
    $('.editbox').find('textarea').focus().autosize({append: "\n"});
    
    $('.editbox .closed').click(function() {
        open($(this).closest('.editbox'));
    });
    
    $('.editbox .btn-default').click(function() {
        close($(this).closest('.editbox'));
    })
    
    function close(editbox){
        editbox.find('.opened').hide();
        editbox.find('.closed').show();
    }
    
    function open(editbox){
        editbox.find('.opened').show().focus();
        editbox.find('.closed').hide();
    }
    
    $('.editbox .btn-primary').click(function() {
        var editbox = $(this).closest('.editbox');
        $.ajax({
            type: "POST",
            url: basepath + "gtw_edit_boxes/edit_boxes/save",
            data: { 
                EditBox : {
                    name : editbox.attr('data-editbox'),
                    body : editbox.find('textarea').val()
                }
            },
            dataType: "json",
            success: function(response, status) {
                if (!response.success){
                    alert('Failed to save the EditBox');
                }
            },
            error: function(response, status) {
                alert('Failed to connect to the server, try reloading the page');
            }
        })
        editbox.find('span').text(editbox.find('textarea').val());
        close(editbox);
    })
    
});