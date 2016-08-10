(function($){
	"use strict";
	$.entwine('ss',function($){
		$("input.simplecolorpicker").entwine({
			onmatch: function(){
				$(this).spectrum({
					preferredFormat: "hex",
					showInput: true,
					allowEmpty:true,
					showAlpha: true
				});
			}
		});
	});
}(jQuery));