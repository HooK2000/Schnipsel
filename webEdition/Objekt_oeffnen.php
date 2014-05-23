<?php

/**
 * webEdition Objekt öffnen
 */
 

// Neues Objekt öffnen
include_once($_SERVER["DOCUMENT_ROOT"] . "/webEdition/we/include/we.inc.php");
include_once($_SERVER["DOCUMENT_ROOT"] . "/webEdition/we/include/we_modules/object/we_objectFile.inc.php");
$objpath = '/classdir';
$obj = new we_objectFile();
$obj->we_new();
$obj->TableID = 10; //ID der Klasse
$obj->setRootDirID(true);
$obj>restoreDefaults();
//$obj->add_workspace($wsid);
$obj->Text = 'Objektname';
$obj->Path = $objpath.'/'.$obj->Text;
$obj->getElement('NameObjektFeld');
$obj->setElement('NameObjektFeld', 'Wert');
$obj->setElement('ObjektFelder', serialize(array(
	'class'   => 9, // Klassen-ID / SQL-Tabellen-Nummer
	'max'     => 0,
	'objects' => array(1,2,3) // Alle IDs auf die verwiesen werden soll
)));
$obj->we_save();
$obj->we_publish();
$createdID = $obj->ID;
//$obj->Workspaces
//$obj->Templates
//$obj->Published // 0 oder time()




// Vorhandenes Objekt öffnen
$id = 123;
include_once($_SERVER["DOCUMENT_ROOT"] . "/webEdition/we/include/we.inc.php");
include_once($_SERVER["DOCUMENT_ROOT"] . "/webEdition/we/include/we_modules/object/we_objectFile.inc.php");
$obj = new we_objectFile();
$obj->initByID($id);
$obj->getElement('NameObjektFeld');
$obj->setElement('NameObjektFeld', 'Wert');
$obj->we_save();
$obj->we_publish(); 

?>
