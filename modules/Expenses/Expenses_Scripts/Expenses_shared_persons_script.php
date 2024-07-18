<?php //Script Created Date :-16-07-2024
                        
                        $Vtiger_Utils_Log = true;
                        include_once("vtlib/Vtiger/Menu.php");
                        include_once("vtlib/Vtiger/Module.php");

                        $module = Vtiger_Module::getInstance("Expenses");
                        $block = Vtiger_Block::getInstance("LBL_BASIC_INFORMATION", $module);

                        $shared_persons = new Vtiger_Field();
                        $shared_persons->name =  "shared_persons";
                        $shared_persons->label = "Shared Person List";
                        $shared_persons->table =  $module->basetable ;
                        $shared_persons->column = "shared_persons";
                        $shared_persons->columntype = "text";
                        $shared_persons->uitype = 33;
                        $shared_persons->typeofdata = "V~O";$block->addField($shared_persons);$shared_persons->setPicklistValues(Array('Rahul','Chirag','Gopi','Krupali','Chandra','Hetal','Divyesh'));?>