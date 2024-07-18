 

 INSERT INTO `vtiger_relatedlists`(`relation_id`, `tabid`, `related_tabid`, `name`, `sequence`, `label`, `presence`, `actions`, `relationfieldid`, `source`, `relationtype`) SELECT 173, 50, `related_tabid`, `name`, 1, `label`, `presence`, `actions`, `relationfieldid`, `source`, `relationtype` FROM `vtiger_relatedlists` WHERE `name` = 'get_comments' and label = 'ModComments' LIMIT 1;  

UPDATE  `vtiger_relatedlists_seq` SET  `id` =173 WHERE 1; 

INSERT INTO  `vtiger_modtracker_tabs` (`tabid` ,`visible`)VALUES ('50',  '1'); 

 INSERT INTO vtiger_modentity_num (num_id ,semodule ,prefix ,start_id ,cur_id ,active)VALUES ('22', 'Expenses', 'Expe', '1', '1', '1'); 

 UPDATE vtiger_modentity_num_seq SET id=22 WHERE 1; 

