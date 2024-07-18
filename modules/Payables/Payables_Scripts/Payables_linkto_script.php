<?php //Script Created Date :-17-07-2024
                        
                        $Vtiger_Utils_Log = true;
                        include_once("vtlib/Vtiger/Menu.php");
                        include_once("vtlib/Vtiger/Module.php");

                        $module = Vtiger_Module::getInstance("Payables");
                        $block = Vtiger_Block::getInstance("LBL_BASIC_INFORMATION", $module);

                        $linkto = new Vtiger_Field();
                        $linkto->name =  "linkto";
                        $linkto->label = "Link To";
                        $linkto->table =  $module->basetable ;
                        $linkto->column = "linkto";
                        $linkto->columntype = "varchar(255)";
                        $linkto->uitype = 10;
                        $linkto->typeofdata = "V~O";$block->addField($linkto);$linkto->setRelatedModules(Array("Contacts"));?>