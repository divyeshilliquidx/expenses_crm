<?php //Script Created Date :-22-07-2024
                        
                        $Vtiger_Utils_Log = true;
                        include_once("vtlib/Vtiger/Menu.php");
                        include_once("vtlib/Vtiger/Module.php");

                        $module = Vtiger_Module::getInstance("SharedPerson");
                        $block = Vtiger_Block::getInstance("LBL_BASIC_INFORMATION", $module);

                        $trip_status = new Vtiger_Field();
                        $trip_status->name =  "trip_status";
                        $trip_status->label = "Trip Status";
                        $trip_status->table =  $module->basetable ;
                        $trip_status->column = "trip_status";
                        $trip_status->columntype = "varchar(255)";
                        $trip_status->uitype = 15;
                        $trip_status->typeofdata = "V~O";$block->addField($trip_status);$trip_status->setPicklistValues(Array('InProgress','Completed'));?>