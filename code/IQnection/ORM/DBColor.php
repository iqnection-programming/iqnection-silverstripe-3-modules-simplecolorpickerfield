<?php

namespace IQnection\ORM\FieldType;

use SilverStripe\ORM\FieldType\DBVarchar;
use IQnection\Forms\SimpleColorPickerField;

class DBColor extends DBVarchar
{	
	public function formField($title = null, $name = null, $value = null, $form = null)
	{
		if (!$title) $title = $this->name;
		if (!$name) $name = $this->name;
		
		$field = SimpleColorPickerField::create($name,$title,$value,$form);
		return $field;
	}
	
//	public function forTemplate()
//	{
//		return $this->URL();
//	}

}