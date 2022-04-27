<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit024f0a84246706a5ce089d47fa9fe20c
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebpConverter\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebpConverter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Exception\\DuplicatedFormOptionKeyException' => __DIR__ . '/../..' . '/vendor_prefixed/src/Exception/DuplicatedFormOptionKeyException.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Exception\\DuplicatedFormValueKeyException' => __DIR__ . '/../..' . '/vendor_prefixed/src/Exception/DuplicatedFormValueKeyException.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Exception\\UnknownFormOptionKeyException' => __DIR__ . '/../..' . '/vendor_prefixed/src/Exception/UnknownFormOptionKeyException.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Hookable' => __DIR__ . '/../..' . '/vendor_prefixed/src/Hookable.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Modal' => __DIR__ . '/../..' . '/vendor_prefixed/src/Modal.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormOption' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/FormOption.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormOptions' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/FormOptions.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormTemplate' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/FormTemplate.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormValue' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/FormValue.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormValues' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/FormValues.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\RequestData' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/RequestData.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Service\\AssetsPrinterService' => __DIR__ . '/../..' . '/vendor_prefixed/src/Service/AssetsPrinterService.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Service\\TemplateGeneratorService' => __DIR__ . '/../..' . '/vendor_prefixed/src/Service/TemplateGeneratorService.php',
        'WebpConverter\\Action\\ConvertAttachment' => __DIR__ . '/../..' . '/src/Action/ConvertAttachment.php',
        'WebpConverter\\Action\\ConvertDir' => __DIR__ . '/../..' . '/src/Action/ConvertDir.php',
        'WebpConverter\\Action\\ConvertPaths' => __DIR__ . '/../..' . '/src/Action/ConvertPaths.php',
        'WebpConverter\\Action\\DeletePaths' => __DIR__ . '/../..' . '/src/Action/DeletePaths.php',
        'WebpConverter\\Conversion\\Cron\\CronEventGenerator' => __DIR__ . '/../..' . '/src/Conversion/Cron/CronEventGenerator.php',
        'WebpConverter\\Conversion\\Cron\\CronInitiator' => __DIR__ . '/../..' . '/src/Conversion/Cron/CronInitiator.php',
        'WebpConverter\\Conversion\\Cron\\CronSchedulesGenerator' => __DIR__ . '/../..' . '/src/Conversion/Cron/CronSchedulesGenerator.php',
        'WebpConverter\\Conversion\\Cron\\CronStatusManager' => __DIR__ . '/../..' . '/src/Conversion/Cron/CronStatusManager.php',
        'WebpConverter\\Conversion\\Cron\\CronStatusViewer' => __DIR__ . '/../..' . '/src/Conversion/Cron/CronStatusViewer.php',
        'WebpConverter\\Conversion\\DirectoryFiles' => __DIR__ . '/../..' . '/src/Conversion/DirectoryFiles.php',
        'WebpConverter\\Conversion\\Directory\\DirectoryAbstract' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoryAbstract.php',
        'WebpConverter\\Conversion\\Directory\\DirectoryFactory' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoryFactory.php',
        'WebpConverter\\Conversion\\Directory\\DirectoryIntegration' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoryIntegration.php',
        'WebpConverter\\Conversion\\Directory\\DirectoryInterface' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoryInterface.php',
        'WebpConverter\\Conversion\\Directory\\GalleryDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/GalleryDirectory.php',
        'WebpConverter\\Conversion\\Directory\\PluginsDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/PluginsDirectory.php',
        'WebpConverter\\Conversion\\Directory\\ThemesDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/ThemesDirectory.php',
        'WebpConverter\\Conversion\\Directory\\UploadsDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/UploadsDirectory.php',
        'WebpConverter\\Conversion\\Directory\\UploadsWebpcDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/UploadsWebpcDirectory.php',
        'WebpConverter\\Conversion\\Endpoint\\CronConversionEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/CronConversionEndpoint.php',
        'WebpConverter\\Conversion\\Endpoint\\EndpointAbstract' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/EndpointAbstract.php',
        'WebpConverter\\Conversion\\Endpoint\\EndpointIntegration' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/EndpointIntegration.php',
        'WebpConverter\\Conversion\\Endpoint\\EndpointInterface' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/EndpointInterface.php',
        'WebpConverter\\Conversion\\Endpoint\\ImagesCounterEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/ImagesCounterEndpoint.php',
        'WebpConverter\\Conversion\\Endpoint\\PathsEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/PathsEndpoint.php',
        'WebpConverter\\Conversion\\Endpoint\\RegenerateEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/RegenerateEndpoint.php',
        'WebpConverter\\Conversion\\Format\\AvifFormat' => __DIR__ . '/../..' . '/src/Conversion/Format/AvifFormat.php',
        'WebpConverter\\Conversion\\Format\\FormatAbstract' => __DIR__ . '/../..' . '/src/Conversion/Format/FormatAbstract.php',
        'WebpConverter\\Conversion\\Format\\FormatFactory' => __DIR__ . '/../..' . '/src/Conversion/Format/FormatFactory.php',
        'WebpConverter\\Conversion\\Format\\FormatInterface' => __DIR__ . '/../..' . '/src/Conversion/Format/FormatInterface.php',
        'WebpConverter\\Conversion\\Format\\WebpFormat' => __DIR__ . '/../..' . '/src/Conversion/Format/WebpFormat.php',
        'WebpConverter\\Conversion\\Media\\Attachment' => __DIR__ . '/../..' . '/src/Conversion/Media/Attachment.php',
        'WebpConverter\\Conversion\\Media\\Delete' => __DIR__ . '/../..' . '/src/Conversion/Media/Delete.php',
        'WebpConverter\\Conversion\\Media\\Upload' => __DIR__ . '/../..' . '/src/Conversion/Media/Upload.php',
        'WebpConverter\\Conversion\\Method\\GdMethod' => __DIR__ . '/../..' . '/src/Conversion/Method/GdMethod.php',
        'WebpConverter\\Conversion\\Method\\ImagickMethod' => __DIR__ . '/../..' . '/src/Conversion/Method/ImagickMethod.php',
        'WebpConverter\\Conversion\\Method\\LibraryMethodAbstract' => __DIR__ . '/../..' . '/src/Conversion/Method/LibraryMethodAbstract.php',
        'WebpConverter\\Conversion\\Method\\LibraryMethodInterface' => __DIR__ . '/../..' . '/src/Conversion/Method/LibraryMethodInterface.php',
        'WebpConverter\\Conversion\\Method\\MethodAbstract' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodAbstract.php',
        'WebpConverter\\Conversion\\Method\\MethodFactory' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodFactory.php',
        'WebpConverter\\Conversion\\Method\\MethodIntegrator' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodIntegrator.php',
        'WebpConverter\\Conversion\\Method\\MethodInterface' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodInterface.php',
        'WebpConverter\\Conversion\\Method\\RemoteMethod' => __DIR__ . '/../..' . '/src/Conversion/Method/RemoteMethod.php',
        'WebpConverter\\Conversion\\OutputPath' => __DIR__ . '/../..' . '/src/Conversion/OutputPath.php',
        'WebpConverter\\Conversion\\PathsFinder' => __DIR__ . '/../..' . '/src/Conversion/PathsFinder.php',
        'WebpConverter\\Conversion\\PathsValidator' => __DIR__ . '/../..' . '/src/Conversion/PathsValidator.php',
        'WebpConverter\\Conversion\\SkipConvertedPaths' => __DIR__ . '/../..' . '/src/Conversion/SkipConvertedPaths.php',
        'WebpConverter\\Conversion\\SkipCrashed' => __DIR__ . '/../..' . '/src/Conversion/SkipCrashed.php',
        'WebpConverter\\Conversion\\SkipExcludedPaths' => __DIR__ . '/../..' . '/src/Conversion/SkipExcludedPaths.php',
        'WebpConverter\\Conversion\\SkipLarger' => __DIR__ . '/../..' . '/src/Conversion/SkipLarger.php',
        'WebpConverter\\Error\\Detector\\ErrorDetector' => __DIR__ . '/../..' . '/src/Error/Detector/ErrorDetector.php',
        'WebpConverter\\Error\\Detector\\LibsNotInstalledDetector' => __DIR__ . '/../..' . '/src/Error/Detector/LibsNotInstalledDetector.php',
        'WebpConverter\\Error\\Detector\\LibsWithoutWebpSupportDetector' => __DIR__ . '/../..' . '/src/Error/Detector/LibsWithoutWebpSupportDetector.php',
        'WebpConverter\\Error\\Detector\\PassthruExecutionDetector' => __DIR__ . '/../..' . '/src/Error/Detector/PassthruExecutionDetector.php',
        'WebpConverter\\Error\\Detector\\PathsErrorsDetector' => __DIR__ . '/../..' . '/src/Error/Detector/PathsErrorsDetector.php',
        'WebpConverter\\Error\\Detector\\RestApiDisabledDetector' => __DIR__ . '/../..' . '/src/Error/Detector/RestApiDisabledDetector.php',
        'WebpConverter\\Error\\Detector\\RewritesErrorsDetector' => __DIR__ . '/../..' . '/src/Error/Detector/RewritesErrorsDetector.php',
        'WebpConverter\\Error\\Detector\\SettingsIncorrectDetector' => __DIR__ . '/../..' . '/src/Error/Detector/SettingsIncorrectDetector.php',
        'WebpConverter\\Error\\Detector\\TokenStatusDetector' => __DIR__ . '/../..' . '/src/Error/Detector/TokenStatusDetector.php',
        'WebpConverter\\Error\\Detector\\WebpFormatActivatedDetector' => __DIR__ . '/../..' . '/src/Error/Detector/WebpFormatActivatedDetector.php',
        'WebpConverter\\Error\\ErrorDetectorAggregator' => __DIR__ . '/../..' . '/src/Error/ErrorDetectorAggregator.php',
        'WebpConverter\\Error\\Notice\\AccessTokenInvalidNotice' => __DIR__ . '/../..' . '/src/Error/Notice/AccessTokenInvalidNotice.php',
        'WebpConverter\\Error\\Notice\\ApiLimitExceededNotice' => __DIR__ . '/../..' . '/src/Error/Notice/ApiLimitExceededNotice.php',
        'WebpConverter\\Error\\Notice\\BypassingApacheNotice' => __DIR__ . '/../..' . '/src/Error/Notice/BypassingApacheNotice.php',
        'WebpConverter\\Error\\Notice\\ErrorNotice' => __DIR__ . '/../..' . '/src/Error/Notice/ErrorNotice.php',
        'WebpConverter\\Error\\Notice\\LibsNotInstalledNotice' => __DIR__ . '/../..' . '/src/Error/Notice/LibsNotInstalledNotice.php',
        'WebpConverter\\Error\\Notice\\LibsWithoutWebpSupportNotice' => __DIR__ . '/../..' . '/src/Error/Notice/LibsWithoutWebpSupportNotice.php',
        'WebpConverter\\Error\\Notice\\PassthruExecutionNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PassthruExecutionNotice.php',
        'WebpConverter\\Error\\Notice\\PassthruNotWorkingNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PassthruNotWorkingNotice.php',
        'WebpConverter\\Error\\Notice\\PathHtaccessNotWritableNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PathHtaccessNotWritableNotice.php',
        'WebpConverter\\Error\\Notice\\PathUploadsUnavailableNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PathUploadsUnavailableNotice.php',
        'WebpConverter\\Error\\Notice\\PathWebpDuplicatedNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PathWebpDuplicatedNotice.php',
        'WebpConverter\\Error\\Notice\\PathWebpNotWritableNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PathWebpNotWritableNotice.php',
        'WebpConverter\\Error\\Notice\\RestApiDisabledNotice' => __DIR__ . '/../..' . '/src/Error/Notice/RestApiDisabledNotice.php',
        'WebpConverter\\Error\\Notice\\RewritesCachedNotice' => __DIR__ . '/../..' . '/src/Error/Notice/RewritesCachedNotice.php',
        'WebpConverter\\Error\\Notice\\RewritesNotExecutedNotice' => __DIR__ . '/../..' . '/src/Error/Notice/RewritesNotExecutedNotice.php',
        'WebpConverter\\Error\\Notice\\RewritesNotWorkingNotice' => __DIR__ . '/../..' . '/src/Error/Notice/RewritesNotWorkingNotice.php',
        'WebpConverter\\Error\\Notice\\SettingsIncorrectNotice' => __DIR__ . '/../..' . '/src/Error/Notice/SettingsIncorrectNotice.php',
        'WebpConverter\\Error\\Notice\\WebpRequiredNotice' => __DIR__ . '/../..' . '/src/Error/Notice/WebpRequiredNotice.php',
        'WebpConverter\\Exception\\ConversionErrorException' => __DIR__ . '/../..' . '/src/Exception/ConversionErrorException.php',
        'WebpConverter\\Exception\\ExceptionAbstract' => __DIR__ . '/../..' . '/src/Exception/ExceptionAbstract.php',
        'WebpConverter\\Exception\\ExceptionInterface' => __DIR__ . '/../..' . '/src/Exception/ExceptionInterface.php',
        'WebpConverter\\Exception\\ExtensionUnsupportedException' => __DIR__ . '/../..' . '/src/Exception/ExtensionUnsupportedException.php',
        'WebpConverter\\Exception\\FilesizeOversizeException' => __DIR__ . '/../..' . '/src/Exception/FilesizeOversizeException.php',
        'WebpConverter\\Exception\\FunctionUnavailableException' => __DIR__ . '/../..' . '/src/Exception/FunctionUnavailableException.php',
        'WebpConverter\\Exception\\ImageAnimatedException' => __DIR__ . '/../..' . '/src/Exception/ImageAnimatedException.php',
        'WebpConverter\\Exception\\ImageInvalidException' => __DIR__ . '/../..' . '/src/Exception/ImageInvalidException.php',
        'WebpConverter\\Exception\\ImagickNotSupportWebpException' => __DIR__ . '/../..' . '/src/Exception/ImagickNotSupportWebpException.php',
        'WebpConverter\\Exception\\ImagickUnavailableException' => __DIR__ . '/../..' . '/src/Exception/ImagickUnavailableException.php',
        'WebpConverter\\Exception\\LargerThanOriginalException' => __DIR__ . '/../..' . '/src/Exception/LargerThanOriginalException.php',
        'WebpConverter\\Exception\\OutputPathException' => __DIR__ . '/../..' . '/src/Exception/OutputPathException.php',
        'WebpConverter\\Exception\\RemoteErrorResponseException' => __DIR__ . '/../..' . '/src/Exception/RemoteErrorResponseException.php',
        'WebpConverter\\Exception\\RemoteRequestException' => __DIR__ . '/../..' . '/src/Exception/RemoteRequestException.php',
        'WebpConverter\\Exception\\ResolutionOversizeException' => __DIR__ . '/../..' . '/src/Exception/ResolutionOversizeException.php',
        'WebpConverter\\Exception\\ServerConfigurationException' => __DIR__ . '/../..' . '/src/Exception/ServerConfigurationException.php',
        'WebpConverter\\Exception\\SourcePathException' => __DIR__ . '/../..' . '/src/Exception/SourcePathException.php',
        'WebpConverter\\HookableInterface' => __DIR__ . '/../..' . '/src/HookableInterface.php',
        'WebpConverter\\Loader\\HtaccessLoader' => __DIR__ . '/../..' . '/src/Loader/HtaccessLoader.php',
        'WebpConverter\\Loader\\LoaderAbstract' => __DIR__ . '/../..' . '/src/Loader/LoaderAbstract.php',
        'WebpConverter\\Loader\\LoaderIntegration' => __DIR__ . '/../..' . '/src/Loader/LoaderIntegration.php',
        'WebpConverter\\Loader\\LoaderInterface' => __DIR__ . '/../..' . '/src/Loader/LoaderInterface.php',
        'WebpConverter\\Loader\\PassthruLoader' => __DIR__ . '/../..' . '/src/Loader/PassthruLoader.php',
        'WebpConverter\\Model\\Token' => __DIR__ . '/../..' . '/src/Model/Token.php',
        'WebpConverter\\Notice\\CloudflareNotice' => __DIR__ . '/../..' . '/src/Notice/CloudflareNotice.php',
        'WebpConverter\\Notice\\NoticeAbstract' => __DIR__ . '/../..' . '/src/Notice/NoticeAbstract.php',
        'WebpConverter\\Notice\\NoticeFactory' => __DIR__ . '/../..' . '/src/Notice/NoticeFactory.php',
        'WebpConverter\\Notice\\NoticeIntegration' => __DIR__ . '/../..' . '/src/Notice/NoticeIntegration.php',
        'WebpConverter\\Notice\\NoticeInterface' => __DIR__ . '/../..' . '/src/Notice/NoticeInterface.php',
        'WebpConverter\\Notice\\ThanksNotice' => __DIR__ . '/../..' . '/src/Notice/ThanksNotice.php',
        'WebpConverter\\Notice\\WelcomeNotice' => __DIR__ . '/../..' . '/src/Notice/WelcomeNotice.php',
        'WebpConverter\\PluginData' => __DIR__ . '/../..' . '/src/PluginData.php',
        'WebpConverter\\PluginInfo' => __DIR__ . '/../..' . '/src/PluginInfo.php',
        'WebpConverter\\Plugin\\Activation' => __DIR__ . '/../..' . '/src/Plugin/Activation.php',
        'WebpConverter\\Plugin\\Activation\\DefaultSettings' => __DIR__ . '/../..' . '/src/Plugin/Activation/DefaultSettings.php',
        'WebpConverter\\Plugin\\Activation\\RefreshLoader' => __DIR__ . '/../..' . '/src/Plugin/Activation/RefreshLoader.php',
        'WebpConverter\\Plugin\\Activation\\WebpDirectory' => __DIR__ . '/../..' . '/src/Plugin/Activation/WebpDirectory.php',
        'WebpConverter\\Plugin\\Deactivation' => __DIR__ . '/../..' . '/src/Plugin/Deactivation.php',
        'WebpConverter\\Plugin\\Deactivation\\CronReset' => __DIR__ . '/../..' . '/src/Plugin/Deactivation/CronReset.php',
        'WebpConverter\\Plugin\\Deactivation\\PluginSettings' => __DIR__ . '/../..' . '/src/Plugin/Deactivation/PluginSettings.php',
        'WebpConverter\\Plugin\\Deactivation\\RefreshLoader' => __DIR__ . '/../..' . '/src/Plugin/Deactivation/RefreshLoader.php',
        'WebpConverter\\Plugin\\Links' => __DIR__ . '/../..' . '/src/Plugin/Links.php',
        'WebpConverter\\Plugin\\Uninstall' => __DIR__ . '/../..' . '/src/Plugin/Uninstall.php',
        'WebpConverter\\Plugin\\Uninstall\\DebugFiles' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/DebugFiles.php',
        'WebpConverter\\Plugin\\Uninstall\\HtaccessFile' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/HtaccessFile.php',
        'WebpConverter\\Plugin\\Uninstall\\PluginSettings' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/PluginSettings.php',
        'WebpConverter\\Plugin\\Uninstall\\WebpFiles' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/WebpFiles.php',
        'WebpConverter\\Plugin\\Update' => __DIR__ . '/../..' . '/src/Plugin/Update.php',
        'WebpConverter\\Repository\\TokenRepository' => __DIR__ . '/../..' . '/src/Repository/TokenRepository.php',
        'WebpConverter\\Service\\DeactivationModalGenerator' => __DIR__ . '/../..' . '/src/Service/DeactivationModalGenerator.php',
        'WebpConverter\\Service\\FileLoader' => __DIR__ . '/../..' . '/src/Service/FileLoader.php',
        'WebpConverter\\Service\\NonceManager' => __DIR__ . '/../..' . '/src/Service/NonceManager.php',
        'WebpConverter\\Service\\OptionsAccessManager' => __DIR__ . '/../..' . '/src/Service/OptionsAccessManager.php',
        'WebpConverter\\Service\\PathsGenerator' => __DIR__ . '/../..' . '/src/Service/PathsGenerator.php',
        'WebpConverter\\Service\\ServerConfigurator' => __DIR__ . '/../..' . '/src/Service/ServerConfigurator.php',
        'WebpConverter\\Service\\StatsManager' => __DIR__ . '/../..' . '/src/Service/StatsManager.php',
        'WebpConverter\\Service\\TokenValidator' => __DIR__ . '/../..' . '/src/Service/TokenValidator.php',
        'WebpConverter\\Service\\ViewLoader' => __DIR__ . '/../..' . '/src/Service/ViewLoader.php',
        'WebpConverter\\Service\\WpCliManager' => __DIR__ . '/../..' . '/src/Service/WpCliManager.php',
        'WebpConverter\\Settings\\AdminAssets' => __DIR__ . '/../..' . '/src/Settings/AdminAssets.php',
        'WebpConverter\\Settings\\Option\\AccessTokenOption' => __DIR__ . '/../..' . '/src/Settings/Option/AccessTokenOption.php',
        'WebpConverter\\Settings\\Option\\ConversionMethodOption' => __DIR__ . '/../..' . '/src/Settings/Option/ConversionMethodOption.php',
        'WebpConverter\\Settings\\Option\\ExtraFeaturesOption' => __DIR__ . '/../..' . '/src/Settings/Option/ExtraFeaturesOption.php',
        'WebpConverter\\Settings\\Option\\ImagesQualityOption' => __DIR__ . '/../..' . '/src/Settings/Option/ImagesQualityOption.php',
        'WebpConverter\\Settings\\Option\\LoaderTypeOption' => __DIR__ . '/../..' . '/src/Settings/Option/LoaderTypeOption.php',
        'WebpConverter\\Settings\\Option\\OptionAbstract' => __DIR__ . '/../..' . '/src/Settings/Option/OptionAbstract.php',
        'WebpConverter\\Settings\\Option\\OptionIntegration' => __DIR__ . '/../..' . '/src/Settings/Option/OptionIntegration.php',
        'WebpConverter\\Settings\\Option\\OptionInterface' => __DIR__ . '/../..' . '/src/Settings/Option/OptionInterface.php',
        'WebpConverter\\Settings\\Option\\OptionsAggregator' => __DIR__ . '/../..' . '/src/Settings/Option/OptionsAggregator.php',
        'WebpConverter\\Settings\\Option\\OutputFormatsOption' => __DIR__ . '/../..' . '/src/Settings/Option/OutputFormatsOption.php',
        'WebpConverter\\Settings\\Option\\SupportedDirectoriesOption' => __DIR__ . '/../..' . '/src/Settings/Option/SupportedDirectoriesOption.php',
        'WebpConverter\\Settings\\Option\\SupportedExtensionsOption' => __DIR__ . '/../..' . '/src/Settings/Option/SupportedExtensionsOption.php',
        'WebpConverter\\Settings\\Page\\DebugPage' => __DIR__ . '/../..' . '/src/Settings/Page/DebugPage.php',
        'WebpConverter\\Settings\\Page\\PageAbstract' => __DIR__ . '/../..' . '/src/Settings/Page/PageAbstract.php',
        'WebpConverter\\Settings\\Page\\PageIntegration' => __DIR__ . '/../..' . '/src/Settings/Page/PageIntegration.php',
        'WebpConverter\\Settings\\Page\\PageInterface' => __DIR__ . '/../..' . '/src/Settings/Page/PageInterface.php',
        'WebpConverter\\Settings\\Page\\SettingsPage' => __DIR__ . '/../..' . '/src/Settings/Page/SettingsPage.php',
        'WebpConverter\\Settings\\PluginOptions' => __DIR__ . '/../..' . '/src/Settings/PluginOptions.php',
        'WebpConverter\\Settings\\SettingsSave' => __DIR__ . '/../..' . '/src/Settings/SettingsSave.php',
        'WebpConverter\\WebpConverter' => __DIR__ . '/../..' . '/src/WebpConverter.php',
        'WebpConverter\\WebpConverterConstants' => __DIR__ . '/../..' . '/src/WebpConverterConstants.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit024f0a84246706a5ce089d47fa9fe20c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit024f0a84246706a5ce089d47fa9fe20c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit024f0a84246706a5ce089d47fa9fe20c::$classMap;

        }, null, ClassLoader::class);
    }
}
