<?php
# uncomment for upgrading
#$wgReadOnly = 'This wiki is currently being updated to a newer software version';

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgSitename      = "LibreOffice Help";
$wgMetaNamespace = "Project";

$wgScriptPath       = "";
$wgScriptExtension  = ".php";

## The protocol and server name to use in fully-qualified URLs
$wgServer           = "//help.libreoffice.org";

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
require_once "./LocalSettings/secrets/HELPWIKI_secrets.php";

# MySQL table options to use during installation or update
$wgDBTableOptions   = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

## Shared memory settings
$wgMainCacheType    = CACHE_ACCEL;
$wgMemCachedServers = array();

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads  = true;
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

$IP2="/var/www/sites/help.libreoffice.org";
$wgRightsText = "the GNU Lesser General Public License (LGPLv3), unless otherwise specified, originally based on OpenOffice.org help. \"LibreOffice\" and \"The Document Foundation\" are registered trademarks of their corresponding registered owners or are in actual use as trademarks in one or more countries. Their respective logos and icons are also subject to international copyright laws. Use thereof is explained in our <a href=\"http://wiki.documentfoundation.org/TradeMark_Policy\">trademark policy</a>";
$wgRightsUrl = "";
$wgArticlePath = "/$1";
$wgAppleTouchIcon = $wgLogo;
$wgUploadSizeWarning = 1024 * 1024 * 5;
$wgMaxUploadSize = 1024 * 1024 * 25;
$wgEnableMWSuggest = true;
$wgVectorUseIconWatch = true;
$wgCookieExpiration = 0;
$wgMinimalPasswordLength = 8;
$wgExportAllowListContributors = true;
$wgExportFromNamespaces = true;
$wgTiffThumbnailType = array('png', 'image/png');
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

ini_set('pcre.backtrack_limit', '8M');
$wgSpamRegex = "/".                        # The "/" is the opening wrapper
                "s-e-x|zoofilia|sexyongpin|grusskarte|geburtstagskarten|animalsex|".
                "sex-with|dogsex|adultchat|adultlive|camsex|sexcam|livesex|sexchat|".
                "chatsex|onlinesex|adultporn|adultvideo|adultweb.|hardcoresex|hardcoreporn|".
                "teenporn|xxxporn|lesbiansex|livegirl|livenude|livesex|livevideo|camgirl|".
                "spycam|voyeursex|casino-online|online-casino|kontaktlinsen|cheapest-phone|".
                "laser-eye|eye-laser|fuelcellmarket|lasikclinic|cragrats|parishilton|".
                "paris-hilton|paris-tape|2large|fuel-dispenser|fueling-dispenser|huojia|".
                "jinxinghj|telematicsone|telematiksone|a-mortgage|diamondabrasives|".
                "reuterbrook|sex-plugin|sex-zone|lazy-stars|eblja|liuhecai|".
                "buy-viagra|-cialis|-levitra|boy-and-girl-kissing|". # These match spammy words
                "dirare\.com|".           # This matches dirare.com a spammer's domain name
                "overflow\s*:\s*auto|".   # This matches against overflow:auto (regardless of whitespace on either side of the colon)
                "height\s*:\s*[0-4]px|".  # This matches against height:0px (most CSS hidden spam) (regardless of whitespace on either side of the colon)
                "==<center>\[|".           # This matches some recent spam related to starsearchtool.com and friends
                "\<\s*a\s*href|".         # This blocks all href links entirely, forcing wiki syntax
                "display\s*:\s*none".     # This matches against display:none (regardless of whitespace on either side of the colon)
		"\<.*style.*(display|position|overflow|visibility|height)\s*:.*>".
		"(http:(.|\n)*?){26}".
                "/i";                     # The "/" ends the regular expression and the "i" switch which follows makes the test case-insensitive
                                          # The "\s" matches whitespace
                                          # The "*" is a repeater (zero or more times)
                                          # The "\s*" means to look for 0 or more amount of whitespace
$wgSummarySpamRegex = $wgSpamRegex;

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

$wgRateLimits['edit']['user'] = array(3, 60);
$wgRateLimits['edit']['newbie'] = array(2, 60);
$wgRateLimits['move']['user'] = array(3, 60);
$wgRateLimits['move']['newbie'] = array(2, 60);
$wgRateLimits['mailpassword']['anon'] = array(3, 60);
$wgRateLimits['emailuser']['user'] = array(3, 60);
$wgRateLimits['emailuser']['newbie'] = array(2, 60);

$wgNoFollowDomainExceptions[] = 'talkyoo.net';
$wgGroupPermissions['sysop']['deleterevision']  = true;
$wgGroupPermissions['sysop']['checkuser'] = true;
$wgGroupPermissions['bureaucrat']['checkuser'] = true;
$wgNamespacesWithSubpages[NS_MAIN] = true;

$actions = array( 'view', 'edit', 'watch', 'unwatch', 'delete','revert', 'rollback', 'protect', 'unprotect', 'markpatrolled', 'render', 'submit', 'history', 'purge', 'credits' );
foreach ( $actions as $action ) { $wgActionPaths[$action] = "$wgScriptPath/WikiAction/$action/$1"; }

$wgDefaultUserOptions['useeditwarning'] = true;
$wgVectorFeatures['editwarning']['user'] = true;
$wgVectorFeatures['collapsibletabs']['user'] = true;
$wgVectorFeatures['collapsiblenav']['user'] = true;
$wgVectorUseSimpleSearch = true;

require_once("$IP2/extensions/LanguageSelector/LanguageSelector.php");
$wgLanguageSelectorDetectLanguage = LANGUAGE_SELECTOR_PREFER_CLIENT_LANG;
$wgLanguageSelectorLocation = LANGUAGE_SELECTOR_MANUAL;

require_once("$IP2/extensions/WikiEditor/WikiEditor.php");
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;

require_once("$IP2/extensions/ParserFunctions/ParserFunctions.php");
$wgPFEnableStringFunctions = true;

# For internal wikis enable:
$wgGroupPermissions['*']['createaccount'] = false;

$wgMaxShellMemory = 102400;
$wgMaxShellTime = 120;
$wgUploadDirectory = "/var/www/sites/help.libreoffice.org/core/images";

require_once "$IP2/extensions/WikihelpRedirect/WikihelpRedirect.php";

$wgHitcounterUpdateFreq = 1000;
$wgEdititis = false;
$wgAntiLockFlags = ALF_NO_LINK_LOCK | ALF_NO_BLOCK_LOCK;
$wgJobRunRate = 0.01;
$wgMainCacheType = CACHE_ACCEL;

$wgFileCacheDirectory = "$IP/cache";
$wgUseFileCache = false;
$wgCacheDirectory = "$IP/cache";
$wgDisableCounters = true;

require_once "$IP2/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php";
require_once "$IP2/skins/Vector/Vector.php";
require_once("$IP2/extensions/PCRInserts/pcr_guii.php");
$wgPCRguii_Inserts['SkinAfterBottomScripts']['on'] = true;
$wgPCRguii_Inserts['SkinAfterBottomScripts']['content'] = '<script type="text/javascript"> var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.documentfoundation.org/" : "http://piwik.documentfoundation.org/"); document.write(unescape("%3Cscript src=\'" + pkBaseURL + "piwik.js\' type=\'text/javascript\'%3E%3C/script%3E")); </script><script type="text/javascript"> try { var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 63); piwikTracker.trackPageView(); piwikTracker.enableLinkTracking(); } catch( err ) {} </script><noscript><p><img src="https://piwik.documentfoundation.org/piwik.php?idsite=63" style="border:0" alt="" /></p></noscript>';
