<?php //Script Created Date :-16-07-2024
                        
                        $Vtiger_Utils_Log = true;
                        include_once("vtlib/Vtiger/Menu.php");
                        include_once("vtlib/Vtiger/Module.php");

                        $module = Vtiger_Module::getInstance("Expenses");
                        $block = Vtiger_Block::getInstance("LBL_BASIC_INFORMATION", $module);

                        $location_name = new Vtiger_Field();
                        $location_name->name =  "location_name";
                        $location_name->label = "Location Name";
                        $location_name->table =  $module->basetable ;
                        $location_name->column = "location_name";
                        $location_name->columntype = "varchar(255)";
                        $location_name->uitype = 1;
                        $location_name->typeofdata = "V~O";$block->addField($location_name);?>