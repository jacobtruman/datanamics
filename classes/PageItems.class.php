<?php

class PageItems {

	protected $property = null;

	protected $field_type_map = array(
		"label"=>"getSimpleCells",
		"text"=>"getSimpleTextFieldCells",
		"textarea"=>"getSimpleTexareaFieldCells",
		"yesno"=>"getSimpleYesNoFieldCells",
		"dropdown"=>"getSimpleDropdownFieldCells",
		"date"=>"getSimpleDateFieldCells"
	);

	/**
	 * @param Property $property
	 */
	public function __construct($property = null) {
		$this->property = $property;
	}

	public function getHeaderOLD($title, $level) {
		return "<head>
<title>
    {$title}
</title>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body marginwidth='0' marginheight='0' scroll='yes' vlink='#0000FF' alink='#0000FF'>
	<table class='ms-main' cellpadding='0' cellspacing='0' border='0' width='100%' height='100%'>
		<tr>
			<td width='100%' height='29' colspan='3'>
				<table class='ms-bannerframe' border='0' cellspacing='0' cellpadding='3' width='100%'>
					<tr>
						<td nowrap valign='middle' align='left' height='30' width='100%'>
						</td>
					</tr>
				</table>
				<table border='0' cellspacing='0' cellpadding='0' width='100%'>
					<tr>
					   <td bgcolor='#D8D8D8' align='center' style='font-size: 14pt; font-family: Verdana, sans-serif; font-weight: bold;'>
							{$title}
						</td>
					</tr>
				</table>
			</td>
		 </tr>
		 <tr>
			<td width='100%' valign='top' colspan='2'>
				<table border='0' cellpadding='0' cellspacing='0' width='100%' valign='top'>
					{$this->getContactLinksOLD($title, $level)}
				</table>
				<table cellpadding='0' cellspacing='0' border='0' width='100%'>" . PHP_EOL;
	}

	public function getContactLinksOLD($title, $level) {
		$shomine = true;
		$ret_val = "";
		$ret_val .= "<tr><td width='33%'>";
		if(!empty($this->property)) {
			if(isset($img)) {
				if($title == "Contact Information") {
					$ret_val .= "<img border='0' src='images/logos/{$img}'>" . PHP_EOL;
				} else {
					$ret_val .= "<form name='overform' method='POST' action='ContactInformation.php' target='_blank'>
			<input type='hidden' name='prop' value='{$this->property->getPropCode()}'>
			<input type='image' src='images/logos/{$img}'>
			</form >" . PHP_EOL;
				}
			}
		}
		$ret_val .= "</td>";

		if(isset($shomine) && $shomine == 'true') {
			$ret_val .= "<td width='33%' align='center'>" . PHP_EOL;
			if($level == '2') {
				$ret_val .= "<iframe name='updown' src='changestatus.php?prop={$this->property->getPropCode()}&status={$this->property->getStatus()}&name={$this->property->getName()}&active={$this->property->getActive()}' width='100' height='100' border='0' frameborder='0' scrolling='no'></iframe>" . PHP_EOL;
			} else if($level == '1') {
				$ret_val .= "<img src='images/{$this->property->getUpDownImage()}' border='0'>" . PHP_EOL;
			}
			$ret_val .= "</td>";
		}

		if(isset($shomine) && $shomine == 'true') {
			$ret_val .= "<td width='33%' align='center'>" . PHP_EOL;
			if($level == '2') {
				$ret_val .= "<iframe name='updown' src='blockedmac.php?prop={$this->property->getPropCode()}&name={$this->property->getName()}&htype={$this->property->getPropertyType()}&gateway={$this->property->getGateways("ip")}' width='250' height='100' border='0' frameborder='0' scrolling='no'></iframe>" . PHP_EOL;
			}
			$ret_val .= "</td>";
		}

		$ret_val .= "<td width='33%' valign='top' align='right'>" . PHP_EOL;
		if(isset($prop)) {
			if(empty($inst)) {
				$inst = "Datanamics";
			}
			if(!empty($ptype)) {
				$ret_val .= "<img border='0' src='images/logos/{$inst}.png'>" . PHP_EOL;
			} elseif($title == "HSIA Main Page") {
				// do nothing
			}
		} else {
			$ret_val .= " <form name='overform' method='POST' action='{$this->property->getInstaller()}ContactInformation.php' target='_blank'>
							<input type='hidden' name='prop' value='{$this->property->getPropCode()}'>
							<input type='hidden' name='inst' value='{$this->property->getInstaller()}'>
							<input type='image' src='images/logos/{$this->property->getInstaller()}.png'>
						</form>" . PHP_EOL;
		}

		$ret_val .= "</td></tr>" . PHP_EOL;
		return $ret_val;
	}

	public function getHeader($title) {
		return "<head>
<title>
    {$title}
</title>
<link rel='stylesheet' type='text/css' href='style.css'>
</head>
<body marginwidth='0' marginheight='0' scroll='yes' vlink='#0000FF' alink='#0000FF'>" . PHP_EOL;
	}

	public function getHeaderDiv($title) {
		return "<div class='table' style='width: 100%; margin-top: 10px;'>
			<div class='row'>
				<div class='cell'>
					<div style='background-color: #D8D8D8;font-size: 14pt; font-family: Verdana, sans-serif; font-weight: bold; width: 100%; margin-top: 10px;'>
						{$title}
					</div>
				</div>
			</div>
		</div>" . PHP_EOL;
	}

	public function getContactHeaderDiv($title, $level) {
		return "<div style='background-color: #D8D8D8;font-size: 14pt; font-family: Verdana, sans-serif; font-weight: bold; width: 100%; margin-top: 10px;'>
			{$title}
		</div>
		<div>
			{$this->getContactLinks($title, $level)}
		</div>" . PHP_EOL;
	}

	public function getContactLinks($title, $level) {
		$shomine = true;
		$ret_val = "<div class='table' style='width: 100%; margin-top: 10px; margin-bottom: 10px;'>
<div class='row'>" . PHP_EOL;
		if(!empty($this->property)) {
			$ret_val .= "<div class='cell'>" . PHP_EOL;
			$logo = $this->property->getLogo();
			if($title == "Contact Information") {
				$ret_val .= "<img border='0' src='images/logos/{$logo}'>" . PHP_EOL;
			} else {
				$ret_val .= "<form name='overform' method='POST' action='ContactInformation.php' target='_blank'>
				<input type='hidden' name='prop' value='{$this->property->getPropCode()}'>
				<input type='image' src='{$logo}'>
				</form >" . PHP_EOL;
			}
			$ret_val .= "</div>" . PHP_EOL;
		}

		if(isset($shomine) && $shomine == 'true') {
			$ret_val .= "<div class='cell'>" . PHP_EOL;
			if($level == '2') {
				$ret_val .= "<iframe name='updown' src='changestatus.php?prop={$this->property->getPropCode()}&status={$this->property->getStatus()}&name={$this->property->getName()}&active={$this->property->getActive()}' width='100' height='100' border='0' frameborder='0' scrolling='no'></iframe>" . PHP_EOL;
			} else if($level == '1') {
				$ret_val .= "<img src='images/{$this->property->getUpDownImage()}' border='0'>" . PHP_EOL;
			}
			$ret_val .= "</div>" . PHP_EOL;
		}

		if(isset($shomine) && $shomine == 'true') {
			if($level == '2') {
				$ret_val .= "<div class='cell'>" . PHP_EOL;
				$ret_val .= "<iframe name='updown' src='blockedmac.php?prop={$this->property->getPropCode()}&name={$this->property->getName()}&htype={$this->property->getPropertyType()}&gateway={$this->property->getGateways("ip")}' width='250' height='100' border='0' frameborder='0' scrolling='no'></iframe>" . PHP_EOL;
				$ret_val .= "</div>" . PHP_EOL;
			}
		}

		$ret_val .= "<div class='cell'>" . PHP_EOL;
		$inst = $this->property->getInstaller();
		if(isset($prop)) {
			if(empty($inst)) {
				$inst = "Datanamics";
			}
			if(!empty($title)) {
				$ret_val .= "<img border='0' src='images/logos/{$inst}.png'>" . PHP_EOL;
			} elseif($title == "HSIA Main Page") {
				// do nothing
			}
		} else {
			$ret_val .= " <form name='overform' method='POST' action='{$inst}ContactInformation.php' target='_blank'>
							<input type='hidden' name='prop' value='{$this->property->getPropCode()}'>
							<input type='hidden' name='inst' value='{$inst}'>
							<input type='image' src='images/logos/{$inst}.png'>
						</form>" . PHP_EOL;
		}
		$ret_val .= "</div>
		</div>
		</div>" . PHP_EOL;
		return $ret_val;
	}

	public function getFooter() {
		$date = date("m/d/Y H:i", getlastmod());
		return "<div id='footer'>
	<span class='footer'>
		Page last modified:
		<span class='footer_date'>
				{$date}
		</span>
	</span>
</div>" . PHP_EOL;
	}

	public function getSimpleCell2($title, $value) {
		$ret_val = null;
		if(!empty($value)) {
			$ret_val = "<div class='row'>
				<div class='cell' style='font-size: 10px;'>
					<span style='font-weight: bold;'>{$title}: </span> {$value}
				</div>
			</div>" . PHP_EOL;
		}
		return $ret_val;
	}

	public function getDualRows($records) {
		$ret_val = null;
		if(count($records)) {
			$ret_val .= "<div class='row'>" . PHP_EOL;
			foreach($records as $record) {
				list($title, $value) = $record;
				$ret_val .= $this->getSimpleCell($title, $value);
			}
			$ret_val .= "</div>" . PHP_EOL;
		}
		return $ret_val;
	}

	protected function getSimpleCell($title, $value) {
		$ret_val = null;
		if(!empty($value)) {
			$ret_val = "<div class='cell' style='font-size: 10px;'>
				<span style='font-weight: bold;'>{$title}: </span> {$value}
			</div>" . PHP_EOL;
		}
		return $ret_val;
	}

	protected function getSimpleRows($records) {
		$ret_val = null;
		if(count($records)) {
			foreach($records as $record) {
				list($title, $value) = $record;
				$ret_val .= "<div class='row'>" . PHP_EOL;
				$ret_val .= $this->getSimpleCells($title, $value);
				$ret_val .= "</div>" . PHP_EOL;
			}
		}
		return $ret_val;
	}

	public function getSimpleFieldRows($records, $bgcolor = "#FFFFFF") {
		$ret_val = "";
		foreach($records as $record) {
			if(!isset($record['type'])) {
				$record['type'] = "text";
			}
			if(!isset($record['value'])) {
				$record['value'] = "";
			}
			if(isset($this->field_type_map[$record['type']])) {
				$method = $this->field_type_map[$record['type']];
				$ret_val .= "<div class='row' style='background-color: {$bgcolor};'>" . PHP_EOL;
				$ret_val .= $this->$method($record);
				$ret_val .= "</div>" . PHP_EOL;
			} else {
				throw new Exception("Field type '{$record['type']}' not defined");
			}
		}
		return $ret_val;
	}

	protected function getSimpleCells($record) {
		$ret_val = null;
		if(!empty($record['value'])) {
			$ret_val = "<div class='cell' style='font-size: 10px; font-weight: bold; text-align: right; padding-right: 5px;'>
				{$record['title']}:
			</div>
			<div class='cell' style='font-size: 10px; text-align: left;'>
				{$record['value']}
			</div>" . PHP_EOL;
		}
		return $ret_val;
	}

	protected function getSimpleTextFieldCells($record) {
		$ret_val = "<div class='cell' style='font-size: 10px; font-weight: bold; text-align: right; padding-right: 5px;'>
				{$record['title']}:
			</div>
			<div class='cell' style='font-size: 10px; text-align: left;'>
				<input type='text' name='{$record['field']}' size='25' value='{$record['value']}' class='formfield'>
			</div>" . PHP_EOL;
		return $ret_val;
	}

	protected function getSimpleYesNoFieldCells($record) {
		if(!empty($record['value'])) {
			$checked0 = "";
			$checked1 = "checked";
		} else {
			$checked0 = "checked";
			$checked1 = "";
		}
		if(!isset($record['labels'])) {
			$record['labels'] = array("Yes", "No");
		}
		list($label1, $label0) = $record['labels'];
		$ret_val = "<div class='cell' style='font-size: 10px; font-weight: bold; text-align: right; padding-right: 5px;'>
				{$record['title']}:
			</div>
			<div class='cell' style='font-size: 10px; text-align: left;'>
				<input type='radio' name='{$record['field']}' value='1' class='formfield' {$checked1}>{$label1}<br />
				<input type='radio' name='{$record['field']}' value='0' class='formfield' {$checked0}>{$label0}
			</div>" . PHP_EOL;
		return $ret_val;
	}

	protected function getSimpleDropdownFieldCells($record) {
		$options_string = "";
		$found = false;
		foreach($record['options'] as $key=>$option) {
			if(isset($record['value']) && $record['value'] == $option) {
				$found = true;
				$selected = "selected";
			} else {
				$selected = "";
			}
			$options_string .= "<option value='{$key}' {$selected}>{$option}</option>" . PHP_EOL;
		}
		if(!$found) {
			$options_string .= "<option value='' selected>Select one</option>" . PHP_EOL;
		}
		$ret_val = "<div class='cell' style='font-size: 10px; font-weight: bold; text-align: right; padding-right: 5px;'>
				{$record['title']}:
			</div>
			<div class='cell' style='font-size: 10px; text-align: left;'>
				<select size='1' name='{$record['field']}' class='formfield'>
					{$options_string}
				</select>
			</div>" . PHP_EOL;
		return $ret_val;
	}

	protected function getSimpleDateFieldCells($record) {
		$ret_val = "<div class='cell' style='font-size: 10px; font-weight: bold; text-align: right; padding-right: 5px;'>
				{$record['title']}:
			</div>
			<div class='cell' style='font-size: 10px; text-align: left;'>
				<script language='JavaScript' id='js'>
					var cal = new CalendarPopup('date_div');
					cal.setCssPrefix('date');
				</script>
				<input size='15' name='ddate' value='{$record['value']}' class='formfield'>
					<a id='anchor' title='cal.select(document.forms[0].{$record['field']},\"anchor1x\",\"MM/dd/yyyy\"); return false;' onclick='cal.select(document.forms[0].{$record['field']},\"anchor\",\"MM/dd/yyyy\"); return false;' href='#' name='anchor'>
					   <img src='calendar/cal.gif' border='0' alt='Click here to select a date'></a>
			</div>" . PHP_EOL;
		return $ret_val;
	}

	protected function getSimpleTexareaFieldCells($record) {
		$ret_val = "<div class='cell' style='font-size: 10px; font-weight: bold; text-align: right; padding-right: 5px;'>
				{$record['title']}:
			</div>
			<div class='cell' style='font-size: 10px; text-align: left;'>
				<textarea name='{$record['field']}' rows='10' cols='60' wrap='physical' class='formfield'>{$record['value']}</textarea>
			</div>" . PHP_EOL;
		return $ret_val;
	}
}
