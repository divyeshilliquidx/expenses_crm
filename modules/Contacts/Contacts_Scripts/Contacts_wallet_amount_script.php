<?php //Script Created Date :-16-07-2024
                        
                        $Vtiger_Utils_Log = true;
                        include_once("vtlib/Vtiger/Menu.php");
                        include_once("vtlib/Vtiger/Module.php");

                        $module = Vtiger_Module::getInstance("Contacts");
                        $block = Vtiger_Block::getInstance("LBL_CONTACT_INFORMATION", $module);

                        $wallet_amount = new Vtiger_Field();
                        $wallet_amount->name =  "wallet_amount";
                        $wallet_amount->label = "Wallet Amount";
                        $wallet_amount->table =  $module->basetable ;
                        $wallet_amount->column = "wallet_amount";
                        $wallet_amount->columntype = "decimal(25,8)";
                        $wallet_amount->uitype = 71;
                        $wallet_amount->typeofdata = "N~O";$block->addField($wallet_amount);?>