 

 INSERT INTO `vtiger_relatedlists`(`relation_id`, `tabid`, `related_tabid`, `name`, `sequence`, `label`, `presence`, `actions`, `relationfieldid`, `source`, `relationtype`) SELECT 174, 51, `related_tabid`, `name`, 1, `label`, `presence`, `actions`, `relationfieldid`, `source`, `relationtype` FROM `vtiger_relatedlists` WHERE `name` = 'get_comments' and label = 'ModComments' LIMIT 1;  

UPDATE  `vtiger_relatedlists_seq` SET  `id` =174 WHERE 1; 

INSERT INTO  `vtiger_modtracker_tabs` (`tabid` ,`visible`)VALUES ('51',  '1'); 

 INSERT INTO vtiger_modentity_num (num_id ,semodule ,prefix ,start_id ,cur_id ,active)VALUES ('23', 'SharedPerson', 'Shar', '1', '1', '1'); 

 UPDATE vtiger_modentity_num_seq SET id=23 WHERE 1; 

