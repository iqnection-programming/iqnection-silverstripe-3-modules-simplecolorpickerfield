(function($){
	"use strict";
	$.entwine('ss',function($){
		$("input.simplecolorpicker").spectrum({
			preferredFormat: "hex",
			showInput: true,
			allowEmpty:true,
			showAlpha: true
		});
	});
}(jQuery));