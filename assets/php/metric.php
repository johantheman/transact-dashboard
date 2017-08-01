<?php
/**
 * Chart 1 (pie chart)
 */
$open = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Open';";
$bounce = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE '%bounce';";
$unsubscribe = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Opt Out';";
/**
 * Chart 2 (line graph)
 */
$click = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%';";
$uclick = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%';";
$Open_9AM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 09%'";
$Click_9AM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 09%'";
$Uclick_9AM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 09%'";
$Open_10AM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 10%'";
$Click_10AM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 10%'";
$Uclick_10AM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 10%'";
$Open_11AM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 11%'";
$Click_11AM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 11%'";
$Uclick_11AM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 11%'";
$Open_12PM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 12%'";
$Click_12PM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 12%'";
$Uclick_12PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 12%'";
$Open_1PM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 13%'";
$Click_1PM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 13%'";
$Uclick_1PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 13%'";
$Open_2PM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 14%'";
$Click_2PM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 14%'";
$Uclick_2PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 14%'";
$Open_3PM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 15%'";
$Click_3PM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 15%'";
$Uclick_3PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 15%'";
$Open_4PM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Open' AND `Event Timestamp` LIKE '%2017 16%'";
$Click_4PM = "SELECT COUNT(`Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 16%'";
$Uclick_4PM = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` LIKE 'Click%' AND `Event Timestamp` LIKE '%2017 16%'";
/**
 * Chart 3 (bar chart)
 */
$jan_sent_password = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '1%' AND `Mailing Name` LIKE '%Password%';";
$jan_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '1%' AND `Mailing Name` LIKE '%Changes%';";
$jan_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '1%' AND `Mailing Name` LIKE '%Smartcard%';";
$jan_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '1%' AND `Mailing Name` LIKE '%Verify%';";
$jan_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '1%' AND `Mailing Name` LIKE '%Welcome%';";



$feb_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '2%' AND `Mailing Name` LIKE '%Password%';";
$feb_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '2%' AND `Mailing Name` LIKE '%Changes%';";
$feb_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '2%' AND `Mailing Name` LIKE '%Smartcard%';";
$feb_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '2%' AND `Mailing Name` LIKE '%Verify%';";
$feb_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '2%' AND `Mailing Name` LIKE '%Welcome%';";



$march_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '3%' AND `Mailing Name` LIKE '%Password%';";
$march_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '3%' AND `Mailing Name` LIKE '%Changes%';";
$march_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '3%' AND `Mailing Name` LIKE '%Smartcard%';";
$march_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '3%' AND `Mailing Name` LIKE '%Verify%';";
$march_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '3%' AND `Mailing Name` LIKE '%Welcome%';";



$april_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '4%' AND `Mailing Name` LIKE '%Password%';";
$april_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '4%' AND `Mailing Name` LIKE '%Changes%';";
$april_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '4%' AND `Mailing Name` LIKE '%Smartcard%';";
$april_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '4%' AND `Mailing Name` LIKE '%Verify%';";
$april_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '4%' AND `Mailing Name` LIKE '%Welcome%';";



$may_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '5%' AND `Mailing Name` LIKE '%Password%';";
$may_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '5%' AND `Mailing Name` LIKE '%Changes%';";
$may_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '5%' AND `Mailing Name` LIKE '%Smartcard%';";
$may_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '5%' AND `Mailing Name` LIKE '%Verify%';";
$may_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '5%' AND `Mailing Name` LIKE '%Welcome%';";



$june_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '6%' AND `Mailing Name` LIKE '%Password%';";
$june_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '6%' AND `Mailing Name` LIKE '%Changes%';";
$june_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '6%' AND `Mailing Name` LIKE '%Smartcard%';";
$june_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '6%' AND `Mailing Name` LIKE '%Verify%';";
$june_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '6%' AND `Mailing Name` LIKE '%Welcome%';";



$july_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '7%' AND `Mailing Name` LIKE '%Password%';";
$july_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '7%' AND `Mailing Name` LIKE '%Changes%';";
$july_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '7%' AND `Mailing Name` LIKE '%Smartcard%';";
$july_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '7%' AND `Mailing Name` LIKE '%Verify%';";
$july_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '7%' AND `Mailing Name` LIKE '%Welcome%';";



$august_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '8%' AND `Mailing Name` LIKE '%Password%';";
$august_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '8%' AND `Mailing Name` LIKE '%Changes%';";
$august_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '8%' AND `Mailing Name` LIKE '%Smartcard%';";
$august_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '8%' AND `Mailing Name` LIKE '%Verify%';";
$august_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '8%' AND `Mailing Name` LIKE '%Welcome%';";



$september_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '9%' AND `Mailing Name` LIKE '%Password%';";
$september_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '9%' AND `Mailing Name` LIKE '%Changes%';";
$september_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '9%' AND `Mailing Name` LIKE '%Smartcard%';";
$september_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '9%' AND `Mailing Name` LIKE '%Verify%';";
$september_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '9%' AND `Mailing Name` LIKE '%Welcome%';";



$october_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '10%' AND `Mailing Name` LIKE '%Premium%';";
$october_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '10%' AND `Mailing Name` LIKE '%Changes%';";
$october_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '10%' AND `Mailing Name` LIKE '%Smartcard%';";
$october_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '10%' AND `Mailing Name` LIKE '%Verify%';";
$october_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '10%' AND `Mailing Name` LIKE '%Welcome%';";



$november_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '11%' AND `Mailing Name` LIKE '%Premium%';";
$november_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '11%' AND `Mailing Name` LIKE '%Changes%';";
$november_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '11%' AND `Mailing Name` LIKE '%Smartcard%';";
$november_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '11%' AND `Mailing Name` LIKE '%Verify%';";
$november_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '11%' AND `Mailing Name` LIKE '%Welcome%';";



$december_sent_password  = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '12%' AND `Mailing Name` LIKE '%Premium%';";
$december_sent_changes = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '12%' AND `Mailing Name` LIKE '%Changes%';";
$december_sent_smartcard = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '12%' AND `Mailing Name` LIKE '%Changes%';";
$december_sent_registering = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '12%' AND `Mailing Name` LIKE '%Verify%';";
$december_sent_welcome = "SELECT COUNT(DISTINCT `Email`) AS Total FROM `transact_reports` WHERE `Event Type` = 'Sent' AND `Event Timestamp` LIKE '12%' AND `Mailing Name` LIKE '%Welcome%';";
/**
 * table.php summary total
 */
$premium_total = "";