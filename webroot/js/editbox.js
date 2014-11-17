/*
    Gintonic Web
    Author:    Philippe Lafrance
    Link:      http://gintonicweb.com

*/
require(['jquery', 'basepath', 'editbox/autosize'], function($, basepath){
	
	
    
    $('.editbox .closed').css('cursor', 'pointer');
    
    $('.editbox .closed').click(function() {
        open($(this).closest('.editbox'));
    });
    
    $('.editbox button.close_box').click(function() {
        close($(this).closest('.editbox'));
    });
    
    function close(editbox){
        editbox.find('.opened').hide();
        editbox.find('.closed').show();
    }
    
    function open(editbox){
        editbox.find('.opened').show().find('textarea').autosize({append: "\n"}).focus();
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
        editbox.find('div.closed').html(editbox.find('textarea').val());
        close(editbox);
    });
    
});