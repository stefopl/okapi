<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f5a6b1d49350f3ecad525cb482af313
{
    public static $prefixLengthsPsr4 = array (
        'o' => 
        array (
            'okapi\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'okapi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'okapi\\BadRequest' => __DIR__ . '/../..' . '/core.php',
        'okapi\\Cache' => __DIR__ . '/../..' . '/core.php',
        'okapi\\Db' => __DIR__ . '/../..' . '/core.php',
        'okapi\\DbException' => __DIR__ . '/../..' . '/core.php',
        'okapi\\DbInitException' => __DIR__ . '/../..' . '/core.php',
        'okapi\\DbLockWaitTimeoutException' => __DIR__ . '/../..' . '/core.php',
        'okapi\\DbTooManyRowsException' => __DIR__ . '/../..' . '/core.php',
        'okapi\\Facade' => __DIR__ . '/../..' . '/facade.php',
        'okapi\\FatalError' => __DIR__ . '/../..' . '/core.php',
        'okapi\\FileCache' => __DIR__ . '/../..' . '/core.php',
        'okapi\\Http404' => __DIR__ . '/../..' . '/core.php',
        'okapi\\InvalidParam' => __DIR__ . '/../..' . '/core.php',
        'okapi\\Okapi' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiAccessToken' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiConsumer' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiDataStore' => __DIR__ . '/../..' . '/datastore.php',
        'okapi\\OkapiDebugAccessToken' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiDebugConsumer' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiErrorHandler' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiExceptionHandler' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiFacadeAccessToken' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiFacadeConsumer' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiHttpRequest' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiHttpResponse' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiInternalAccessToken' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiInternalConsumer' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiInternalRequest' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiLock' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiOAuthServer' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiRedirectResponse' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiRequest' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiRequestToken' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiScriptEntryPointController' => __DIR__ . '/../..' . '/OkapiScriptEntryPointController.php',
        'okapi\\OkapiServiceRunner' => __DIR__ . '/../..' . '/OkapiServiceRunner.php',
        'okapi\\OkapiToken' => __DIR__ . '/../..' . '/core.php',
        'okapi\\OkapiUrls' => __DIR__ . '/../..' . '/OkapiUrls.php',
        'okapi\\OkapiZIPHttpResponse' => __DIR__ . '/../..' . '/core.php',
        'okapi\\ParamMissing' => __DIR__ . '/../..' . '/core.php',
        'okapi\\Settings' => __DIR__ . '/../..' . '/settings.php',
        'okapi\\cronjobs\\AdminStatsSender' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\CacheCleanupCronJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\ChangeLogCheckerJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\ChangeLogCleanerJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\ChangeLogWriterJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\CheckCronTab1' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\CheckCronTab2' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\Cron24Job' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\Cron5Job' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\CronJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\CronJobController' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\FulldumpGeneratorJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\JobsAlreadyInProgress' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\LocaleChecker' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\OAuthCleanupCronJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\PrerequestCronJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\SearchSetsCleanerJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\StatsCompressorCronJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\StatsWriterCronJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\TableOptimizerJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\TileTreeUpdater' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\cronjobs\\TokenRevokerJob' => __DIR__ . '/../..' . '/cronjobs.php',
        'okapi\\lib\\ClsTbsZip' => __DIR__ . '/../..' . '/lib/ClsTbsZip.php',
        'okapi\\lib\\OCPLAccessLogs' => __DIR__ . '/../..' . '/lib/OCPLAccessLogs.php',
        'okapi\\lib\\OCSession' => __DIR__ . '/../..' . '/lib/OCSession.php',
        'okapi\\locale\\Locales' => __DIR__ . '/../..' . '/locale/Locales.php',
        'okapi\\oauth\\OAuthClientException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthConsumer' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthDataStore' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthExpiredTimestampException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthInvalidConsumerException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthInvalidSignatureException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthInvalidTokenException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthMissingParameterException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthNonceAlreadyUsedException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthRequest' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthServer' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthServer400Exception' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthServer401Exception' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthServerException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthSignatureMethod' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthSignatureMethod_HMAC_SHA1' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthSignatureMethod_PLAINTEXT' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthSignatureMethod_RSA_SHA1' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthToken' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthUnsupportedSignatureMethodException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthUtil' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\oauth\\OAuthVersionNotSupportedException' => __DIR__ . '/../..' . '/oauth.php',
        'okapi\\services\\apiref\\issue\\WebService' => __DIR__ . '/../..' . '/services/apiref/issue/WebService.php',
        'okapi\\services\\apiref\\method\\WebService' => __DIR__ . '/../..' . '/services/apiref/method/WebService.php',
        'okapi\\services\\apiref\\method_index\\WebService' => __DIR__ . '/../..' . '/services/apiref/method_index/WebService.php',
        'okapi\\services\\apisrv\\installation\\WebService' => __DIR__ . '/../..' . '/services/apisrv/installation/WebService.php',
        'okapi\\services\\apisrv\\installations\\WebService' => __DIR__ . '/../..' . '/services/apisrv/installations/WebService.php',
        'okapi\\services\\apisrv\\stats\\WebService' => __DIR__ . '/../..' . '/services/apisrv/stats/WebService.php',
        'okapi\\services\\attrs\\AttrHelper' => __DIR__ . '/../..' . '/services/attrs/AttrHelper.php',
        'okapi\\services\\attrs\\attribute\\WebService' => __DIR__ . '/../..' . '/services/attrs/attribute/WebService.php',
        'okapi\\services\\attrs\\attribute_index\\WebService' => __DIR__ . '/../..' . '/services/attrs/attribute_index/WebService.php',
        'okapi\\services\\attrs\\attributes\\WebService' => __DIR__ . '/../..' . '/services/attrs/attributes/WebService.php',
        'okapi\\services\\caches\\formatters\\garmin\\WebService' => __DIR__ . '/../..' . '/services/caches/formatters/garmin/WebService.php',
        'okapi\\services\\caches\\formatters\\ggz\\WebService' => __DIR__ . '/../..' . '/services/caches/formatters/ggz/WebService.php',
        'okapi\\services\\caches\\formatters\\gpx\\WebService' => __DIR__ . '/../..' . '/services/caches/formatters/gpx/WebService.php',
        'okapi\\services\\caches\\geocache\\WebService' => __DIR__ . '/../..' . '/services/caches/geocache/WebService.php',
        'okapi\\services\\caches\\geocaches\\WebService' => __DIR__ . '/../..' . '/services/caches/geocaches/WebService.php',
        'okapi\\services\\caches\\map\\ReplicateListener' => __DIR__ . '/../..' . '/services/caches/map/ReplicateListener.php',
        'okapi\\services\\caches\\map\\TileRenderer' => __DIR__ . '/../..' . '/services/caches/map/TileRenderer.php',
        'okapi\\services\\caches\\map\\TileTree' => __DIR__ . '/../..' . '/services/caches/map/TileTree.php',
        'okapi\\services\\caches\\map\\tile\\WebService' => __DIR__ . '/../..' . '/services/caches/map/tile/WebService.php',
        'okapi\\services\\caches\\mark\\WebService' => __DIR__ . '/../..' . '/services/caches/mark/WebService.php',
        'okapi\\services\\caches\\save_personal_notes\\WebService' => __DIR__ . '/../..' . '/services/caches/save_personal_notes/WebService.php',
        'okapi\\services\\caches\\search\\SearchAssistant' => __DIR__ . '/../..' . '/services/caches/search/SearchAssistant.php',
        'okapi\\services\\caches\\search\\all\\WebService' => __DIR__ . '/../..' . '/services/caches/search/all/WebService.php',
        'okapi\\services\\caches\\search\\bbox\\WebService' => __DIR__ . '/../..' . '/services/caches/search/bbox/WebService.php',
        'okapi\\services\\caches\\search\\by_urls\\WebService' => __DIR__ . '/../..' . '/services/caches/search/by_urls/WebService.php',
        'okapi\\services\\caches\\search\\nearest\\WebService' => __DIR__ . '/../..' . '/services/caches/search/nearest/WebService.php',
        'okapi\\services\\caches\\search\\save\\WebService' => __DIR__ . '/../..' . '/services/caches/search/save/WebService.php',
        'okapi\\services\\caches\\shortcuts\\search_and_retrieve\\WebService' => __DIR__ . '/../..' . '/services/caches/shortcuts/search_and_retrieve/WebService.php',
        'okapi\\services\\logs\\entries\\WebService' => __DIR__ . '/../..' . '/services/logs/entries/WebService.php',
        'okapi\\services\\logs\\entry\\WebService' => __DIR__ . '/../..' . '/services/logs/entry/WebService.php',
        'okapi\\services\\logs\\images\\LogImagesCommon' => __DIR__ . '/../..' . '/services/logs/images/LogImagesCommon.php',
        'okapi\\services\\logs\\images\\add\\CannotPublishException' => __DIR__ . '/../..' . '/services/logs/images/add/WebService.php',
        'okapi\\services\\logs\\images\\add\\WebService' => __DIR__ . '/../..' . '/services/logs/images/add/WebService.php',
        'okapi\\services\\logs\\images\\delete\\WebService' => __DIR__ . '/../..' . '/services/logs/images/delete/WebService.php',
        'okapi\\services\\logs\\images\\edit\\CannotPublishException' => __DIR__ . '/../..' . '/services/logs/images/edit/WebService.php',
        'okapi\\services\\logs\\images\\edit\\WebService' => __DIR__ . '/../..' . '/services/logs/images/edit/WebService.php',
        'okapi\\services\\logs\\logs\\WebService' => __DIR__ . '/../..' . '/services/logs/logs/WebService.php',
        'okapi\\services\\logs\\submit\\CannotPublishException' => __DIR__ . '/../..' . '/services/logs/submit/WebService.php',
        'okapi\\services\\logs\\submit\\WebService' => __DIR__ . '/../..' . '/services/logs/submit/WebService.php',
        'okapi\\services\\logs\\userlogs\\WebService' => __DIR__ . '/../..' . '/services/logs/userlogs/WebService.php',
        'okapi\\services\\oauth\\access_token\\WebService' => __DIR__ . '/../..' . '/services/oauth/access_token/WebService.php',
        'okapi\\services\\oauth\\authorize\\WebService' => __DIR__ . '/../..' . '/services/oauth/authorize/WebService.php',
        'okapi\\services\\oauth\\request_token\\WebService' => __DIR__ . '/../..' . '/services/oauth/request_token/WebService.php',
        'okapi\\services\\replicate\\ReplicateCommon' => __DIR__ . '/../..' . '/services/replicate/ReplicateCommon.php',
        'okapi\\services\\replicate\\changelog\\WebService' => __DIR__ . '/../..' . '/services/replicate/changelog/WebService.php',
        'okapi\\services\\replicate\\fulldump\\WebService' => __DIR__ . '/../..' . '/services/replicate/fulldump/WebService.php',
        'okapi\\services\\replicate\\info\\WebService' => __DIR__ . '/../..' . '/services/replicate/info/WebService.php',
        'okapi\\services\\users\\by_internal_id\\WebService' => __DIR__ . '/../..' . '/services/users/by_internal_id/WebService.php',
        'okapi\\services\\users\\by_internal_ids\\WebService' => __DIR__ . '/../..' . '/services/users/by_internal_ids/WebService.php',
        'okapi\\services\\users\\by_username\\WebService' => __DIR__ . '/../..' . '/services/users/by_username/WebService.php',
        'okapi\\services\\users\\by_usernames\\WebService' => __DIR__ . '/../..' . '/services/users/by_usernames/WebService.php',
        'okapi\\services\\users\\user\\WebService' => __DIR__ . '/../..' . '/services/users/user/WebService.php',
        'okapi\\services\\users\\users\\WebService' => __DIR__ . '/../..' . '/services/users/users/WebService.php',
        'okapi\\views\\apps\\authorize\\View' => __DIR__ . '/../..' . '/views/apps/authorize.php',
        'okapi\\views\\apps\\authorized\\View' => __DIR__ . '/../..' . '/views/apps/authorized.php',
        'okapi\\views\\apps\\index\\View' => __DIR__ . '/../..' . '/views/apps/index.php',
        'okapi\\views\\apps\\revoke_access\\View' => __DIR__ . '/../..' . '/views/apps/revoke_access.php',
        'okapi\\views\\changelog\\Changelog' => __DIR__ . '/../..' . '/views/changelog_helper.inc.php',
        'okapi\\views\\changelog\\View' => __DIR__ . '/../..' . '/views/changelog.php',
        'okapi\\views\\changelog_feed\\View' => __DIR__ . '/../..' . '/views/changelog_feed.php',
        'okapi\\views\\cron5\\View' => __DIR__ . '/../..' . '/views/cron5.php',
        'okapi\\views\\devel\\attrlist\\View' => __DIR__ . '/../..' . '/views/devel/attrlist.php',
        'okapi\\views\\devel\\clogentry\\View' => __DIR__ . '/../..' . '/views/devel/clogentry.php',
        'okapi\\views\\devel\\cronreport\\View' => __DIR__ . '/../..' . '/views/devel/cronreport.php',
        'okapi\\views\\devel\\dbstruct\\View' => __DIR__ . '/../..' . '/views/devel/dbstruct.php',
        'okapi\\views\\devel\\sysinfo\\View' => __DIR__ . '/../..' . '/views/devel/sysinfo.php',
        'okapi\\views\\devel\\tilereport\\View' => __DIR__ . '/../..' . '/views/devel/tilereport.php',
        'okapi\\views\\examples\\View' => __DIR__ . '/../..' . '/views/examples.php',
        'okapi\\views\\http404\\View' => __DIR__ . '/../..' . '/views/http404.php',
        'okapi\\views\\index\\View' => __DIR__ . '/../..' . '/views/index.php',
        'okapi\\views\\introduction\\View' => __DIR__ . '/../..' . '/views/introduction.php',
        'okapi\\views\\menu\\OkapiMenu' => __DIR__ . '/../..' . '/views/menu.inc.php',
        'okapi\\views\\method_call\\View' => __DIR__ . '/../..' . '/views/method_call.php',
        'okapi\\views\\method_doc\\View' => __DIR__ . '/../..' . '/views/method_doc.php',
        'okapi\\views\\signup\\View' => __DIR__ . '/../..' . '/views/signup.php',
        'okapi\\views\\tilestress\\View' => __DIR__ . '/../..' . '/views/tilestress.php',
        'okapi\\views\\update\\View' => __DIR__ . '/../..' . '/views/update.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f5a6b1d49350f3ecad525cb482af313::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f5a6b1d49350f3ecad525cb482af313::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f5a6b1d49350f3ecad525cb482af313::$classMap;

        }, null, ClassLoader::class);
    }
}
