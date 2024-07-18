<?php //Script Created Date :- 16-07-2024
      
                                    $Vtiger_Utils_Log = true;
                                    include_once("vtlib/Vtiger/Menu.php");
                                    include_once("vtlib/Vtiger/Module.php");

                                    $module = Vtiger_Module::getInstance("Receivables");
                                    $block = Vtiger_Block::getInstance("LBL_BASIC_INFORMATION", $module);

                                    $sequence_no = new Vtiger_Field();
                                    $sequence_no->name = "receivables_no";
                                    $sequence_no->label = "LBL_Receivables_NUMBER";
                                    $sequence_no->table = $module->basetable;
                                    $sequence_no->column = "receivables_no";
                                    $sequence_no->columntype = "varchar(255)";
                                    $sequence_no->uitype = 4;
                                    $sequence_no->presence = 0;
                                    $sequence_no->typeofdata = "V~O";
                                    $sequence_no->summaryfield = 1;
                                    $block->addField($sequence_no); ?>