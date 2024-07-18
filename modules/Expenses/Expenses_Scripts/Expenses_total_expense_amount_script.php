<?php //Script Created Date :-16-07-2024
                        
                        $Vtiger_Utils_Log = true;
                        include_once("vtlib/Vtiger/Menu.php");
                        include_once("vtlib/Vtiger/Module.php");

                        $module = Vtiger_Module::getInstance("Expenses");
                        $block = Vtiger_Block::getInstance("LBL_BASIC_INFORMATION", $module);

                        $total_expense_amount = new Vtiger_Field();
                        $total_expense_amount->name =  "total_expense_amount";
                        $total_expense_amount->label = "Total Expense Amount";
                        $total_expense_amount->table =  $module->basetable ;
                        $total_expense_amount->column = "total_expense_amount";
                        $total_expense_amount->columntype = "decimal(25,8)";
                        $total_expense_amount->uitype = 71;
                        $total_expense_amount->typeofdata = "N~O";$block->addField($total_expense_amount);?>