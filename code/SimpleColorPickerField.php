<?php

class SimpleColorPickerField extends TextField
{	
	public function Field($properties=array())
	{
		Requirements::css(SIMPLECOLORPICKERFIELD_DIR."/css/spectrum.css");
		Requirements::javascript(SIMPLECOLORPICKERFIELD_DIR."/javascript/spectrum.js");
		Requirements::javascript(SIMPLECOLORPICKERFIELD_DIR."/javascript/SimpleColorPickerField.js");
		return parent::Field($properties);
	}
}