<?php //Script Created Date :-23-07-2024
                        
                        $Vtiger_Utils_Log = true;
                        include_once("vtlib/Vtiger/Menu.php");
                        include_once("vtlib/Vtiger/Module.php");

                        $module = Vtiger_Module::getInstance("SharedPerson");
                        $block = Vtiger_Block::getInstance("LBL_BASIC_INFORMATION", $module);

                        $trip_person_list = new Vtiger_Field();
                        $trip_person_list->name =  "trip_person_list";
                        $trip_person_list->label = "Trip Person List";
                        $trip_person_list->table =  $module->basetable ;
                        $trip_person_list->column = "trip_person_list";
                        $trip_person_list->columntype = "varchar(255)";
                        $trip_person_list->uitype = 10;
                        $trip_person_list->typeofdata = "V~O";$block->addField($trip_person_list);$trip_person_list->setRelatedModules(Array("Contacts"));?>