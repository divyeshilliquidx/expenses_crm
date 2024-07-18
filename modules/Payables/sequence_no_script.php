<?php //Script Created Date :- 16-07-2024
      
                                    $Vtiger_Utils_Log = true;
                                    include_once("vtlib/Vtiger/Menu.php");
                                    include_once("vtlib/Vtiger/Module.php");

                                    $module = Vtiger_Module::getInstance("Payables");
                                    $block = Vtiger_Block::getInstance("LBL_BASIC_INFORMATION", $module);

                                    $sequence_no = new Vtiger_Field();
                                    $sequence_no->name = "payables_no";
                                    $sequence_no->label = "LBL_Payables_NUMBER";
                                    $sequence_no->table = $module->basetable;
                                    $sequence_no->column = "payables_no";
                                    $sequence_no->columntype = "varchar(255)";
                                    $sequence_no->uitype = 4;
                                    $sequence_no->presence = 0;
                                    $sequence_no->typeofdata = "V~O";
                                    $sequence_no->summaryfield = 1;
                                    $block->addField($sequence_no); ?>