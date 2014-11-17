define(['require', 'jquery', 'ui/bootstrap-wysihtml'],function(require, $, test){
	$('.editbox-html').one('focus', function(){
		$(this).wysihtml5({
	        "stylesheets": false ,
	        "events": {
	            "load": function() { 
	                console.log("Loaded!");
	            }
	        }
	    });
	});
	
});