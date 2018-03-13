<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for reengagement.
 *
 * @package    mod_reengagement
 * @author     Peter Bulmer <peter.bulmer@catlayst.net.nz>
 * @copyright  2016 Catalyst IT {@link http://www.catalyst.net.nz}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Reengagement';
$string['reengagement'] = 'reengagement';
$string['pluginadministration'] = '';
$string['modulename'] = 'Reengagement';
$string['modulenameplural'] = 'Reengagements';

// Alphabetized.
$string['activitycompleted'] = 'This activity has been marked as complete';
$string['afterdelay'] = 'After delay';
$string['completion'] = 'Completion';
$string['completionwillturnon'] = 'Note that adding this activity to the course will enable activity completion.';
$string['completeattimex'] = 'This activity will complete at {$a}';
$string['completiontime'] = 'Completion time';
$string['crontask'] = 'Reengagement cron task';
$string['days'] = 'Days';
$string['duration'] = 'Duration';
$string['duration_help'] = '<p>The reengagement duration is the period of time between a user starting a reengagement, and being marked as finished.
The reengagement duration is specified as a period length (eg Weeks) and number of period (eg 7).</p>

<p>This example would mean that a user starting a reengagement period now would be marked as compete in 7 weeks time.</p>
';
$string['thirdpartyemails'] = 'Third-party recipients';
$string['thirdpartyemails_help'] = 'A comma-separated list of email addresses for third-parties that should be receiving a notification when the user does.';
$string['emailcontent'] = 'Notification content (User)';
$string['emailcontent_help'] = 'When the module notifies a user, it takes the notification content from this field.';
$string['emailcontentthirdparty'] = 'Notification content (Third-party)';
$string['emailcontentthirdparty_help'] = 'When the module notifies a third-party, it takes the notification content from this field.';
$string['emailcontentmanager'] = 'Notification content (Manager)';
$string['emailcontentmanager_help'] = 'When the module notifies a user\'s manager(s), it takes the notification content from this field.';
$string['emailcontentthirdpartydefaultvalue'] = 'This is a reminder notification from course %courseshortname%, regarding user %userfirstname% %userlastname%.';
$string['emailcontentdefaultvalue'] = 'This is a reminder notification from course %courseshortname%.';
$string['emailcontentmanagerdefaultvalue'] = 'This is a reminder notification from course %courseshortname%, regarding user %userfirstname% %userlastname%.';
$string['emaildelay'] = 'Notification delay';
$string['emaildelay_help'] = 'When module is set to notify users "after delay", this setting controls how long the delay is.';
$string['emailrecipient'] = 'Notify recipient(s)';
$string['emailrecipient_help'] = 'When a notification needs to be sent out to prompt a user\'s re-engagement with the course, this setting controls if a notification is sent to the user, their manager(s), or both.';
$string['emailsubject'] = 'Notification subject (User)';
$string['emailsubject_help'] = 'When the module notifies a user, it takes the notification subject from this field.';
$string['emailsubjectmanager'] = 'Notification subject (Manager(s))';
$string['emailsubjectmanager_help'] = 'When the module notifies a user\'s manager(s), it takes the notification subject from this field.';
$string['emailsubjectthirdparty'] = 'Notification subject (Third-party)';
$string['emailsubjectthirdparty_help'] = 'When the module notifies a third-party, it takes the notification subject from this field.';
$string['emailtime'] = 'Notify time';
$string['emailuser'] = 'Notify user';
$string['emailuser_help'] = 'When the activity should notify users: <ul>
<li>Never: Don\'t notify users.</li>
<li>On reengagement completion: Notify the user when the reengagement activity is completed.</li>
<li>After Delay: Notify the user a set time after they have started the module.</li>
</ul>';
$string['frequencytoohigh'] = 'The maximum reminder count with the delay period you have set is {$a}.';
$string['periodtoolow'] = 'The delay is too low - it must be at least 5 minutes.';
$string['hours'] = 'Hours';
$string['introdefaultvalue'] = 'This is a reengagement activity.  Its purpose is to enforce a time lapse between the activities which preceed it, and the activities which follow it.';
$string['minutes'] = 'Minutes';
$string['never'] = 'Never';
$string['noemailattimex'] = 'Message scheduled for {$a} will not be sent because you have completed the target activity';
$string['nosuppresstarget'] = 'No target activity selected';
$string['oncompletion'] = 'On reengagement completion';
$string['receiveemailattimex'] = 'Message will be sent on {$a}.';
$string['receiveemailattimexunless'] = 'Message will be sent on {$a} unless you complete target activity.';
$string['reengagement:addinstance'] = 'reengagement:addinstance';
$string['reengagement:startreengagement'] = 'Start Reengagement';
$string['reengagement:getnotifications'] = 'Receive notification of reengagement completions';
$string['reengagement:editreengagementduration'] = 'Edit Reengagement Duration';
$string['reengagementduration'] = 'Reengagement duration';
$string['reengagementfieldset'] = 'Reengagement details';
$string['reengagementintro'] = 'Reengagement intro';
$string['reengagementname'] = 'Reengagement name';
$string['reengagementsinprogress'] = 'Reengagements in progress';
$string['remindercount'] = 'Reminder count';
$string['remindercount_help'] = 'This is the number of times an e-mail is sent after each delay period. There are some limits to the values you can use<ul>
<li>less than 24 hrs - limit of 2 reminders.</li>
<li>less than 5 days - limit of 10 reminders.</li>
<li>less than 15 days - limit of 26 reminders.</li>
<li>over 15 days - maximum limit of 40 reminders.</li></ul>';
$string['search:activity'] = 'Reengagement - activity information';
$string['suppressemail'] = 'Suppress email if target activity complete';
$string['suppressemail_help'] = 'This option instructs the activity to suppress emails to users where a named activity is complete.';
$string['suppresstarget'] = 'Target activity.';
$string['suppresstarget_help'] = 'Use this dropdown to choose which activity should be checked for completion before sending the reminder notification.';
$string['userandmanager'] = 'User and Manager(s)';
$string['weeks'] = 'Weeks';

