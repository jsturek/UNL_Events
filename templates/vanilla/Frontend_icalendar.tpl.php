<?php
/**
 * This template file is for the icalendar and ics output formats.
 */
UNL_UCBCN::outputTemplate('UNL_UCBCN_Frontend_Day','Frontend_Day_icalendar');
UNL_UCBCN::outputTemplate('UNL_UCBCN_Frontend_Search','Frontend_Day_icalendar');
UNL_UCBCN::outputTemplate('UNL_UCBCN_Frontend_Upcoming','Frontend_Day_icalendar');
UNL_UCBCN::outputTemplate('UNL_UCBCN_EventListing','EventListing_icalendar');
UNL_UCBCN::outputTemplate('UNL_UCBCN_EventInstance','EventInstance_icalendar');
UNL_UCBCN::outputTemplate('UNL_UCBCN_EventInstance','EventInstance_icalendar');
UNL_UCBCN::outputTemplate('UNL_UCBCN_Frontend_NoEvents','Frontend_NoEvents_icalendar');
ob_start(); ?>
BEGIN:VCALENDAR
VERSION:2.0
PRODID:UNL_UCBCN//UNL Event Publisher
X-WR-CALNAME:<?php echo $this->calendar->name."\n"; ?>
CALSCALE:GREGORIAN
X-WR-TIMEZONE:<?php echo date_default_timezone_get(); ?>
METHOD:PUBLISH
BEGIN:VTIMEZONE
VERSION:2.0
TZID:<?php echo date_default_timezone_get(); ?>
LAST-MODIFIED:<?php echo date('Ymd\THis\Z')."\n"; ?>
BEGIN:STANDARD
DTSTART:20051030T070000
TZOFFSETTO:-0600
TZOFFSETFROM:+0000
TZNAME:CST
END:STANDARD
BEGIN:DAYLIGHT
DTSTART:20060402T010000
TZOFFSETTO:-0500
TZOFFSETFROM:-0600
TZNAME:CDT
END:DAYLIGHT
BEGIN:STANDARD
DTSTART:20061029T020000
TZOFFSETTO:-0600
TZOFFSETFROM:-0500
TZNAME:CST
END:STANDARD
END:VTIMEZONE
<?php UNL_UCBCN::displayRegion($this->output); ?>
END:VCALENDAR
<?php
// Convert all line endings: line endings are windows-style, carriage-return, followed by a line feed
$out = ob_get_contents();
ob_clean();
echo str_replace("\n","\r\n",$out);
?>