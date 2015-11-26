<?php
# Uncomment when upgrading
#$wgReadOnly = 'This wiki is currently in being upgraded to a newer software version';

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename      = "The Document Foundation Wiki";
$wgMetaNamespace = "Project";

$wgScriptPath       = "";
$wgScriptExtension  = ".php";

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "//wiki.documentfoundation.org";
$wgCanonicalServer = "https://wiki.documentfoundation.org";

## The relative URL path to the skins directory
$wgStylePath        = "$wgScriptPath/skins";

## The relative URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo             = "$wgStylePath/common/images/logo.png";

## UPO means: this is also a user preference option

$wgEnableEmail      = true;
$wgEnableUserEmail  = true; # UPO

$wgEmergencyContact = "webmaster@documentfoundation.org";
$wgPasswordSender   = "webmaster@documentfoundation.org";

$wgEnotifUserTalk      = true; # UPO
$wgEnotifWatchlist     = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype           = "mysql";
require_once "./LocalSettings/secrets/secrets.php";

# MySQL specific settings
$wgDBprefix         = "";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory and caching settings
$wgMainCacheType    = CACHE_ACCEL;
$wgMemCachedServers = array();     #TODO
$wgMessageCacheType = CACHE_ACCEL;
$wgUseLocalMessageCache = true;
$wgCacheDirectory = "$IP/cache";
$wgDisableCounters = true;
$wgParserCacheType = CACHE_ACCEL;
$wgUseGzip = true;
$wgEnableSidebarCache = true;
$wgRevisionCacheExpiry = 5*24*36000;
$wgParserCacheExpireTime = 14*24*36000;
$wgSessionsInObjectCache = true;

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
$wgGenerateThumbnailOnParse = false;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons  = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

# Site language code, should be one of the list in ./languages/Names.php
$wgLanguageCode = "en";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook', 'vector':
$wgDefaultSkin = "vector";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsIcon = "{$wgStylePath}/common/images/cc-by-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# Query string length limit for ResourceLoader. You should only set this if
# your web server has a query string length limit (then set it to that limit),
# or if you have suhosin.get.max_value_length set in php.ini (then set it to
# that value)
$wgResourceLoaderMaxQueryLength = -1;

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['edit'] = false;


# End of automatically generated settings.
# Add more configuration options below.

$wgRightsText = 'the <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>, unless otherwise specified. This does not include the source code of LibreOffice, which is licensed under the <a href="http://www.libreoffice.org/download/license/">Mozilla Public License v2.0</a>. "LibreOffice" and "The Document Foundation" are registered trademarks of their corresponding registered owners or are in actual use as trademarks in one or more countries. Their respective logos and icons are also subject to international copyright laws. Use thereof is explained in our <a href="/TradeMark Policy">trademark policy</a> (see <a href="/Project:Copyrights">Project:Copyrights</a> for details). If you do not want your writing to be edited mercilessly and redistributed at will, then do not submit it here.';

$IP2="/var/www/sites/wiki.documentfoundation.org";
#$wgRightsText = '[http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution-ShareAlike 3.0 Unported License], unless otherwise specified. This does not include the source code of LibreOffice, which is licensed under the [http://www.libreoffice.org/download/license/ Mozilla Public License v2.0]. "LibreOffice" and "The Document Foundation" are registered trademarks of their corresponding registered owners or are in actual use as trademarks in one or more countries. Their respective logos and icons are also subject to international copyright laws. Use thereof is explained in our [[TradeMark Policy|trademark policy]] (see [[Project:Copyrights]] for details). If you do not want your writing to be edited mercilessly and redistributed at will, then do not submit it here.';
$wgRightsUrl = "";
$wgArticlePath = "/$1";
$wgAppleTouchIcon = $wgLogo;
$wgUploadSizeWarning = 1024 * 1024 * 10;
$wgMaxUploadSize = 1024 * 1024 * 25;
$wgEnableMWSuggest = true;
$wgVectorUseIconWatch = true;
$wgCookieExpiration = 0;
$wgMinimalPasswordLength = 8;
$wgExportAllowListContributors = true;
$wgExportFromNamespaces = true;
$wgTiffThumbnailType = array('png', 'image/png');
$wgShowArchiveThumbnails = false;
$wgAllowTitlesInSVG = true;
$wgMimeDetectorCommand = "file --brief --mime";
$wgVerifyMimeType = false;
$wgUseETag = true;
$wgEnotifMaxRecips = 150;
$wgEnotifUseRealName = true;
$wgNoReplyAddress = $wgEmergencyContact;
$wgPasswordSenderName = $wgSitename;
$wgRestrictDisplayTitle = false;
$wgAdvancedSearchHighlighting = true;
$wgShowIPinHeader = false;
$wgBlockDisablesLogin = true;
$wgEnableDnsBlacklist = true;
$wgDnsBlacklistUrls = array('http.dnsbl.sorbs.net', 'opm.tornevall.org', 'xbl.spamhaus.org');
$wgUseCategoryBrowser = true;
$wgEmailConfirmToEdit = true;
$wgEdititis = true;
$wgDefaultLanguageVariant = "en-us";
$wgPasswordAttemptThrottle = array('count' => 20, 'seconds' => 300);
$wgShowHostnames = true;
$wgFetchCommonsDescriptions = true;
$wgIgnoreImageErrors = true;
$wgUpdateCompatibleMetadata = true;
$wgDjvuDump = "/usr/bin/djvudump";
$wgDjvuRenderer = "/usr/bin/ddjvu";
$wgDjvuToXML = "/usr/bin/djvutoxml";
$wgDjvuTxt = "/usr/bin/djvutxt";
$wgCustomConvertCommand = "gm convert %s -resize %wx%h %d";
$wgAntivirusSetup = array(
    'clamavD' => array (
        'command' => "/usr/bin/clamdscan --no-summary --fdpass %f",
        'codemap' => array (
            "0"   =>  AV_NO_VIRUS,     #no virus
            "1"   =>  AV_VIRUS_FOUND,  #virus found
            "52"  =>  AV_SCAN_ABORTED, #unsupported file format (probably immune)
            "*"   =>  AV_SCAN_FAILED,  #else scan failed
        ),
        'messagepattern' => '/.*?:(.*)/sim',
    ),
);
$wgAntivirus = "clamavD";
$wgAllowSlowParserFunctions = true;
$wgUseTidy = true;
$wgSpecialVersionShowHooks = true;
$wgExportAllowAll = true;
$wgAllowCategorizedRecentChanges = true;
$wgAdvertisedFeedTypes = array("rss", "atom");
$wgUseCopyrightUpload = true;
$wgMaxCredits = 3;

$wgWhitelistRead = array("Special:UserLogin", "Special:UserLogout", "Special:PasswordReset", "Special:ChangePassword", "MediaWiki:Common.css");
$wgAddGroups['bureaucrat'] = true;
$wgRemoveGroups['bureaucrat'] = true;
$wgGroupsAddToSelf['sysop'][] = 'bot';
#Redmine#1141
$wgGroupPermissions['confirmed']['skipcaptcha'] = true;
$wgGroupPermissions['confirmed']['editsemiprotected'] = true;
$wgGroupPermissions['confirmed']['autoconfirmed'] = true;

$wgLocaltimezone = "UTC";
$oldtz = getenv("TZ");
putenv("TZ=$wgLocaltimezone");
$wgLocalTZoffset = date("Z") / 60;
putenv("TZ=$oldtz");

$wgUrlProtocols[] = "callto:";
$wgUrlProtocols[] = "webcal:";
$wgUrlProtocols[] = "ssh:";

$wgFileExtensions[] = 'odt';
$wgFileExtensions[] = 'ods';
$wgFileExtensions[] = 'odp';
$wgFileExtensions[] = 'odg';
$wgFileExtensions[] = 'odc';
$wgFileExtensions[] = 'odf';
$wgFileExtensions[] = 'odi';
$wgFileExtensions[] = 'odm';
$wgFileExtensions[] = 'ott';
$wgFileExtensions[] = 'ots';
$wgFileExtensions[] = 'otp';
$wgFileExtensions[] = 'otg';
$wgFileExtensions[] = 'odb';
$wgFileExtensions[] = 'oxt';
$wgFileExtensions[] = 'pdf';
$wgFileExtensions[] = 'mp3';
$wgFileExtensions[] = 'svg';
$wgFileExtensions[] = 'svgz';
$wgFileExtensions[] = 'eps';
$wgFileExtensions[] = 'zip';
$wgFileExtensions[] = '7z';
$wgFileExtensions[] = 'bz2';
$wgFileExtensions[] = 'xcf';
$wgFileExtensions[] = 'fodt';
$wgFileExtensions[] = 'fods';
$wgFileExtensions[] = 'fodg';
$wgFileExtensions[] = 'fodp';
$wgFileExtensions[] = 'epub';
$wgFileExtensions[] = 'jpg2';

$wgDefaultUserOptions['ccmeonemails'] = true;
$wgDefaultUserOptions['enotifwatchlistpages'] = true;
$wgDefaultUserOptions['enotifminoredits'] = true;
$wgDefaultUserOptions['vector-collapsiblenav'] = true;
$wgDefaultUserOptions['vector-noexperiments'] = true;
$wgDefaultUserOptions['date'] = 'ISO 8601';
$wgDefaultUserOptions['editfont'] = 'monospace';
$wgDefaultUserOptions['editsectiononrightclick'] = true;
$wgDefaultUserOptions['editondblclick'] = true;
$wgDefaultUserOptions['forceeditsummary'] = true;
$wgDefaultUserOptions['usenewrc'] = true;
$wgDefaultUserOptions['extendwatchlist'] = true;
$wgDefaultUserOptions['watchmoves'] = true;
$wgDefaultUserOptions['watchdeletion'] = true;
$wgDefaultUserOptions['watchcreations'] = true;
$wgDefaultUserOptions['diffonly	'] = true;

$wgHiddenPrefs[] = 'rememberpassword';
$wgHiddenPrefs[] = 'skin';

# cloph - temporary - seems like caching turned the limits to effect
$wgRateLimits['edit']['user'] = null;
$wgRateLimits['edit']['newbie'] = array(5,60);
$wgRateLimitLog = '/tmp/tdf-wiki-ratelimit.log';
$wgRateLimits['move']['user'] = array(3, 60);
$wgRateLimits['move']['newbie'] = array(2, 60);
$wgRateLimits['mailpassword']['anon'] = array(3, 60);
$wgRateLimits['emailuser']['user'] = array(3, 60);
$wgRateLimits['emailuser']['newbie'] = array(2, 60);

$wgNoFollowDomainExceptions = array('libreoffice.org', 'documentfoundation.org');
$wgGroupPermissions['sysop']['deleterevision']  = true;
$wgGroupPermissions['sysop']['checkuser'] = true;
$wgGroupPermissions['bureaucrat']['checkuser'] = true;
$wgNamespacesWithSubpages[NS_MAIN] = true;
$wgNamespacesWithSubpages[NS_TEMPLATE] = true;
$wgNamespacesWithSubpages[NS_TEMPLATE_TALK] = true;
$wgNamespacesWithSubpages[NS_CATEGORY] = true;
$wgNamespacesWithSubpages[NS_CATEGORY_TALK] = true;

$actions = array( 'view', 'edit', 'watch', 'unwatch', 'delete','revert', 'rollback', 'protect', 'unprotect', 'markpatrolled', 'render', 'submit', 'history', 'purge', 'credits' );
foreach ( $actions as $action ) { $wgActionPaths[$action] = "$wgScriptPath/WikiAction/$action/$1"; }

$wgDefaultUserOptions['useeditwarning'] = true;
$wgVectorFeatures['editwarning']['user'] = true;
$wgVectorFeatures['collapsibletabs']['user'] = true;
$wgVectorFeatures['collapsiblenav']['user'] = true;
$wgVectorUseSimpleSearch = true;

## Visual Editor
#require_once "$IP2/extensions/UniversalLanguageSelector/UniversalLanguageSelector.php";
#$wgVisualEditorParsoidPrefix = 'tdfwiki';
#require_once "$IP2/extensions/VisualEditor/VisualEditor.php";
# OPTIONAL: Enable experimental code features
#$wgVisualEditorExperimentalCode = true;
#$wgVisualEditorParsoidURL = 'http://localhost:8142';
#$wgSessionInObjectCache = true;

#$wgVirtualRestConfig['modules']['parsoid'] = array(
  // URL to the Parsoid instance
  // Use port 8142 if you use the Debian package
#  'url' => 'http://localhost:8142',
  // Parsoid "domain", see below (optional)
#  'domain' => 'tdfwiki',
  // Parsoid "prefix", see below (optional)
#  'prefix' => 'tdfwiki'
#);

require_once "$IP2/extensions/LanguageSelector/LanguageSelector.php";
$wgLanguageSelectorDetectLanguage = LANGUAGE_SELECTOR_PREFER_CLIENT_LANG;
$wgLanguageSelectorLocation = LANGUAGE_SELECTOR_MANUAL;

require_once "$IP2/extensions/WikiEditor/WikiEditor.php";
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;

require_once "$IP2/extensions/OggHandler/OggHandler.php";
$wgFFmpegLocation = '/usr/bin/ffmpeg';
$wgOggThumbLocation = '/usr/bin/oggThumb';

require_once "$IP2/extensions/ParserFunctions/ParserFunctions.php";
$wgPFEnableStringFunctions = true;

require_once "$IP2/extensions/OpenSearchXml/OpenSearchXml.php";

require_once "$IP2/extensions/GraphViz/GraphViz.php";
$wgGraphVizSettings->execPath = "/usr/bin/";
$wgGraphVizSettings->mscgenPath = "/usr/bin/";

require_once "$IP2/extensions/ConfirmEdit/ConfirmEdit.php";
require_once "$IP2/extensions/ConfirmEdit/ReCaptcha.php"; 
$wgCaptchaClass = 'ReCaptcha';
require_once "./LocalSettings/secrets/recaptcha.php";

$wgAutoConfirmCount = 4;
$wgAutoConfirmAge = 86400*2;
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;

require_once "$IP2/extensions/TitleBlacklist/TitleBlacklist.php";
$wgTitleBlacklistSources = array(
    array(
         'type' => TBLSRC_LOCALPAGE,
         'src'  => 'MediaWiki:Titleblacklist',
    ),
    array(
         'type' => TBLSRC_URL,
         'src'  => 'http://meta.wikimedia.org/w/index.php?title=Title_blacklist&action=raw',
    ),
);
$wgGroupPermissions['sysop']['tboverride'] = false;

require_once "$IP2/extensions/Widgets/Widgets.php";
$wgGroupPermissions['sysop']['editwidgets'] = true;

require_once "$IP2/extensions/CategoryTree/CategoryTree.php";
require_once "$IP2/extensions/Cite/Cite.php";
require_once "$IP2/extensions/Gadgets/Gadgets.php";
require_once "$IP2/extensions/ImageMap/ImageMap.php";
require_once "$IP2/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php";

require_once "$IP2/extensions/Math/Math.php";
$wgTexvc="/var/www/sites/wiki.documentfoundation.org/extensions/Math/math/texvc";

require_once("$IP2/extensions/CheckUser/CheckUser.php");

require_once "$IP2/extensions/SpamBlacklist/SpamBlacklist.php";
$wgSpamBlacklistFiles = array(
   "$IP/blacklist-wikimedia"
);

require_once "$IP2/extensions/RSS/RSS.php";
$wgRSSUrlWhitelist = array("*");


#$wgMaxShellMemory = 102400;
# even 307200 (300MB) are not enough for svg → png conversion, so use 500MB limit
$wgMaxShellMemory = 512000;
$wgMaxShellTime = 120;
require_once("$IP2/extensions/PCRInserts/pcr_guii.php");
$wgPCRguii_Inserts['SkinAfterBottomScripts']['on'] = true;
$wgPCRguii_Inserts['SkinAfterBottomScripts']['content'] = '<script type="text/javascript"> var pkBaseURL = "https://piwik.documentfoundation.org/"; document.write(unescape("%3Cscript src=\'" + pkBaseURL + "piwik.js\' type=\'text/javascript\'%3E%3C/script%3E")); </script><script type="text/javascript"> try { var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 44); piwikTracker.trackPageView(); piwikTracker.enableLinkTracking(); } catch( err ) {} </script><noscript><p><img src="https://piwik.documentfoundation.org/piwik.php?idsite=44" style="border:0" alt="" /></p></noscript>';
$wgAllowExternalImages = true;
$wgSVGConverterPath = "/usr/bin";
#$wgSVGConverters = array( 'rsvg' => '$path/rsvg-convert -w $width -h $height -o $output $input' );
#$wgSVGConverter = 'rsvg' ;
$wgSVGConverter = 'ImageMagick';
require_once "$IP2/extensions/AntiBot/AntiBot.php";

require_once "$IP2/extensions/AntiSpoof/AntiSpoof.php";
require_once "$IP2/extensions/AbuseFilter/AbuseFilter.php";
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['sysop']['abusefilter-log-detail'] = true;
$wgGroupPermissions['sysop']['abusefilter-view'] = true;
$wgGroupPermissions['sysop']['abusefilter-log'] = true;
$wgGroupPermissions['sysop']['abusefilter-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;

/* disabling for now, We have no spam problem any more and i believe it slows our wiki!
dennis - 2015-11-24
require_once "$IP2/extensions/TorBlock/TorBlock.php";
$wgGroupPermissions['user']['torunblocked'] = false;
$wgTorDisableAdminBlocks = false; 
$wgTorAutoConfirmCount = 10;
$wgTorAutoConfirmAge = 86400*5;
*/


require_once "$IP/extensions/mediawiki-bugzilla-master/Bugzilla.php";

#require_once "$IP/extensions/Bugzilla-dennis/Bugzilla.php";
$wgBugzillaRESTURL     = 'https://bugs.documentfoundation.org/xmlrpc.cgi'; // The URL for your Bugzilla API installation
$wgBugzillaURL         = 'https://bugs.documentfoundation.org'; // The URL for your Bugzilla installation
$wgBugzillaTagName     = 'bugzilla'; // The tag name for your Bugzilla installation (default: 'bugzilla')
$wgBugzillaMethod      = 'XML-RPC'; // XML-RPC and JSON-RPC may be supported later

# added by floeff 2013-11-19
$wgHitcounterUpdateFreq = 1000;
$wgEdititis = false;
$wgAntiLockFlags = ALF_NO_LINK_LOCK | ALF_NO_BLOCK_LOCK;
$wgJobRunRate = 0.01;

require_once "$IP2/extensions/Interwiki/Interwiki.php";
$wgGroupPermissions['sysop']['interwiki'] = true;
$wgUseRCPatrol=false;

#todo when upgrading
require_once "$IP2/extensions/AddHTMLMetaAndTitle/Add_HTML_Meta_and_Title.php";

require_once "$IP2/skins/Vector/Vector.php";

putenv("GDFONTPATH=/usr/share/fonts/truetype/ttf-dejavu");
require_once "$IP2/extensions/timeline/Timeline.php";
#$wgTimelineSettings->fontFile('ttf-dejavu');
#$fontfile = 'ascii';
#$fontfile = 'ttf-freefont';
$fontFile = 'ttf-dejavu';
$wgTimelineSettings->ploticusCommand = "/usr/bin/pl";

require_once "$IP2/extensions/BounceHandler/BounceHandler.php";

require_once "$IP2/extensions/MapSources/MapSources.php";

require_once "$IP2/extensions/CodeMirror/CodeMirror.php";
$wgDefaultUserOptions['usecodemirror'] = 1;

#error_reporting( -1 );
#ini_set( 'display_errors', 1 );
#$wgShowExceptionDetails = true;
#$wgDevelopmentWarnings = true;
#$wgDebugLogFile = "/var/log/apache2/wiki.documentfoundation.org/debug-{$wgDBname}.log";
