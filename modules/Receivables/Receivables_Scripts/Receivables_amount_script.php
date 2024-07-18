<?php //Script Created Date :-16-07-2024
                        
                        $Vtiger_Utils_Log = true;
                        include_once("vtlib/Vtiger/Menu.php");
                        include_once("vtlib/Vtiger/Module.php");

                        $module = Vtiger_Module::getInstance("Receivables");
                        $block = Vtiger_Block::getInstance("LBL_BASIC_INFORMATION", $module);

                        $amount = new Vtiger_Field();
                        $amount->name =  "amount";
                        $amount->label = "Amount";
                        $amount->table =  $module->basetable ;
                        $amount->column = "amount";
                        $amount->columntype = "decimal(25,8)";
                        $amount->uitype = 71;
                        $amount->typeofdata = "N~O";$block->addField($amount);?>