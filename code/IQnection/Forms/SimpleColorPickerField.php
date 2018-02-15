<?php


namespace IQnection\Forms;

use SilverStripe\Forms\TextField;
use SilverStripe\View\Requirements;

class SimpleColorPickerField extends TextField
{
	public function __construct($name, $title = null, $value = '', $form = null)
	{
		parent::__construct($name, $title, $value, null, $form);
		$this->addExtraClass('simplecolorpicker');
	}
	
	public function Field($properties=array())
	{
		Requirements::css(SIMPLECOLORPICKERFIELD_DIR."/css/spectrum.css");
		Requirements::javascript(SIMPLECOLORPICKERFIELD_DIR."/javascript/spectrum.js");
		Requirements::javascript(SIMPLECOLORPICKERFIELD_DIR."/javascript/SimpleColorPickerField.js");
		return parent::Field($properties);
	}
}