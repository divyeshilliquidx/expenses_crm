<?php //Script Created Date :-16-07-2024
                        
                        $Vtiger_Utils_Log = true;
                        include_once("vtlib/Vtiger/Menu.php");
                        include_once("vtlib/Vtiger/Module.php");

                        $module = Vtiger_Module::getInstance("Contacts");
                        $block = Vtiger_Block::getInstance("LBL_CONTACT_INFORMATION", $module);

                        $expensesid = new Vtiger_Field();
                        $expensesid->name =  "expensesid";
                        $expensesid->label = "Expenses Name";
                        $expensesid->table =  $module->basetable ;
                        $expensesid->column = "expensesid";
                        $expensesid->columntype = "varchar(255)";
                        $expensesid->uitype = 10;
                        $expensesid->typeofdata = "V~O";$block->addField($expensesid);$expensesid->setRelatedModules(Array("Expenses"));?>