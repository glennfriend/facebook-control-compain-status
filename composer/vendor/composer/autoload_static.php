<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcd6272b39b05132f5a2c1a2768782229
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        '7e702cccdb9dd904f2ccf22e5f37abae' => __DIR__ . '/..' . '/facebook/php-sdk-v4/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\DependencyInjection\\' => 38,
            'Symfony\\Component\\Console\\' => 26,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Piwik\\Ini\\' => 10,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
            'Facebook\\' => 9,
            'FacebookAds\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\DependencyInjection\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/dependency-injection',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Piwik\\Ini\\' => 
        array (
            0 => __DIR__ . '/..' . '/piwik/ini/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/php-sdk-v4/src/Facebook',
        ),
        'FacebookAds\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/php-ads-sdk/src/FacebookAds',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $classMap = array (
        'CliManager' => __DIR__ . '/../..' . '/../app/components/manager/CliManager.php',
        'CommandLine' => __DIR__ . '/..' . '/pwfisher/command-line-php/CommandLine.php',
        'ConfigManager' => __DIR__ . '/../..' . '/../app/components/manager/ConfigManager.php',
        'ConsoleHelper' => __DIR__ . '/../..' . '/../app/components/helper/ConsoleHelper.php',
        'ErrorSupportHelper' => __DIR__ . '/../..' . '/../app/components/helper/ErrorSupportHelper.php',
        'MailHelper' => __DIR__ . '/../..' . '/../app/components/helper/MailHelper.php',
        'Nette\\ArgumentOutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\DeprecatedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\DirectoryNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\FileNotFoundException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\IOException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidArgumentException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\InvalidStateException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Iterators\\CachingIterator' => __DIR__ . '/..' . '/nette/utils/src/Iterators/CachingIterator.php',
        'Nette\\Iterators\\Filter' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Filter.php',
        'Nette\\Iterators\\Mapper' => __DIR__ . '/..' . '/nette/utils/src/Iterators/Mapper.php',
        'Nette\\Iterators\\RecursiveFilter' => __DIR__ . '/..' . '/nette/utils/src/Iterators/RecursiveFilter.php',
        'Nette\\Localization\\ITranslator' => __DIR__ . '/..' . '/nette/utils/src/Utils/ITranslator.php',
        'Nette\\Mail\\IMailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/IMailer.php',
        'Nette\\Mail\\Message' => __DIR__ . '/..' . '/nette/mail/src/Mail/Message.php',
        'Nette\\Mail\\MimePart' => __DIR__ . '/..' . '/nette/mail/src/Mail/MimePart.php',
        'Nette\\Mail\\SendmailMailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/SendmailMailer.php',
        'Nette\\Mail\\SmtpException' => __DIR__ . '/..' . '/nette/mail/src/Mail/SmtpMailer.php',
        'Nette\\Mail\\SmtpMailer' => __DIR__ . '/..' . '/nette/mail/src/Mail/SmtpMailer.php',
        'Nette\\MemberAccessException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotImplementedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\NotSupportedException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Object' => __DIR__ . '/..' . '/nette/utils/src/Utils/Object.php',
        'Nette\\OutOfRangeException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\SmartObject' => __DIR__ . '/..' . '/nette/utils/src/Utils/SmartObject.php',
        'Nette\\StaticClass' => __DIR__ . '/..' . '/nette/utils/src/Utils/StaticClass.php',
        'Nette\\StaticClassException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\UnexpectedValueException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ArrayHash' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayHash.php',
        'Nette\\Utils\\ArrayList' => __DIR__ . '/..' . '/nette/utils/src/Utils/ArrayList.php',
        'Nette\\Utils\\Arrays' => __DIR__ . '/..' . '/nette/utils/src/Utils/Arrays.php',
        'Nette\\Utils\\AssertionException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Callback' => __DIR__ . '/..' . '/nette/utils/src/Utils/Callback.php',
        'Nette\\Utils\\DateTime' => __DIR__ . '/..' . '/nette/utils/src/Utils/DateTime.php',
        'Nette\\Utils\\FileSystem' => __DIR__ . '/..' . '/nette/utils/src/Utils/FileSystem.php',
        'Nette\\Utils\\Html' => __DIR__ . '/..' . '/nette/utils/src/Utils/Html.php',
        'Nette\\Utils\\IHtmlString' => __DIR__ . '/..' . '/nette/utils/src/Utils/IHtmlString.php',
        'Nette\\Utils\\Image' => __DIR__ . '/..' . '/nette/utils/src/Utils/Image.php',
        'Nette\\Utils\\ImageException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Json' => __DIR__ . '/..' . '/nette/utils/src/Utils/Json.php',
        'Nette\\Utils\\JsonException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\ObjectMixin' => __DIR__ . '/..' . '/nette/utils/src/Utils/ObjectMixin.php',
        'Nette\\Utils\\Paginator' => __DIR__ . '/..' . '/nette/utils/src/Utils/Paginator.php',
        'Nette\\Utils\\Random' => __DIR__ . '/..' . '/nette/utils/src/Utils/Random.php',
        'Nette\\Utils\\RegexpException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Strings' => __DIR__ . '/..' . '/nette/utils/src/Utils/Strings.php',
        'Nette\\Utils\\UnknownImageFileException' => __DIR__ . '/..' . '/nette/utils/src/Utils/exceptions.php',
        'Nette\\Utils\\Validators' => __DIR__ . '/..' . '/nette/utils/src/Utils/Validators.php',
        'PackageSettingBase' => __DIR__ . '/../..' . '/../app/components/base/PackageSettingBase.php',
        'SlimConfigHelper' => __DIR__ . '/../..' . '/../app/components/helper/SlimConfigHelper.php',
        'SlimManager' => __DIR__ . '/../..' . '/../app/components/manager/SlimManager.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcd6272b39b05132f5a2c1a2768782229::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcd6272b39b05132f5a2c1a2768782229::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitcd6272b39b05132f5a2c1a2768782229::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitcd6272b39b05132f5a2c1a2768782229::$classMap;

        }, null, ClassLoader::class);
    }
}