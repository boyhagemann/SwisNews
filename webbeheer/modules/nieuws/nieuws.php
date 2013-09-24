<?php

require str_repeat('../', 6) . 'webbeheer/config/init.php';

$oModule = new Webbeheer_Module();

// Formulier
$oModule->addForm($oForm = new Webbeheer_Form());

$oDecorator = new Webbeheer_Decorator($oForm);

$oForm->addElement(new Webbeheer_Form_Text('Titel', 'titel', FH_NOT_EMPTY));
$oForm->addElement(new Webbeheer_Form_Key('titel', 'titel_key'));

//spacing
$oDecorator->addRow();
$oForm->addElement(new Webbeheer_Form_TextArea('Introductie', 'intro', FH_NOT_EMPTY));

//spacing
$oDecorator->addRow();
$oForm->setHelpText('intro', '(Korte) tekst die als intro op o.a. de homepage gebruikt wordt.');
$oForm->addElement(new Webbeheer_Form_TinyMce('Tekst', 'tekst', FH_NOT_EMPTY));

$oDecorator->label('Afbeelding');
$oForm->addElement(new Webbeheer_Form_Upload('Afbeelding', 'afbeelding', true));
$oForm->setHelpText('afbeelding', 'Deze afbeelding wordt op de homepage uitgesneden naar 370 x 120 pixels. In het nieuwsbericht zelf wordt de afbeelding geschaald naar XxX');

$oDecorator->label('Modaliteit');
$oForm->addElement(new Webbeheer_Form_DatabaseCheckbox('Modaliteit', 'modaliteit', 'modaliteit', 'titel', null));
$oForm->setHelpText('modaliteit', 'Op welke modaliteiten heeft dit nieuwsbericht betrekking.');

$oDecorator->label('Eigenschappen');
$oForm->addElement(new Webbeheer_Form_Datepicker('Publicatiedatum', 'datum', FH_NOT_EMPTY));
$oForm->setInitalValue('datum', date('Y-m-d'));
$oForm->setHelpText('datum', 'Het nieuwsbericht is pas zichtbaar <strong>op of na</strong> deze datum.');

//spacing
$oDecorator->addRow();
$oDecorator->addLine();
$oDecorator->addRow();
$oForm->addElement(new Webbeheer_Form_Online('Status', 'online'));
$oForm->setHelpText('online', 'Zet het nieuwsbericht online of offline op de website. Een offline nieuwsbericht komt nooit op de website terug.');


$oModule->addOverview($oOverview = new Webbeheer_Overview($oForm));
$oOverview->setColumns(array('titel', 'datum', 'online'));
$oOverview->sortOrder('datum', 'DESC');




$oPortlet = new Webbeheer_Portlet();
$oPortlet->addElement(new Webbeheer_Form_Text('Maximaal aantal per pagina', 'max_per_pagina', null));
$oPortlet->setValue('max_per_pagina', 5);
$oPortlet->addViewDependency('full-list', array('max_per_pagina'));

$oModule->addPortlet($oPortlet);

//$oModule->addChildpage($oChildpage = new Webbeheer_Childpage());
//$oChildpage->setLayoutByName('standaard');
//$oChildpage->setName('item');
//$oChildpage->setTitle('Item');
//$oChildpage->addContent('middleColumn', 'item');


$oModule->output();


