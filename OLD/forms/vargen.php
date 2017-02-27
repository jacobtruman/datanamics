<?php
if(!empty($_REQUEST)) {
	foreach($_REQUEST as $reqkey=>$reqval) {
		$$reqkey = $reqval;
	}
}