# OpenAPIClient-php

<div lang=\"ja\">Yahoo!広告 ディスプレイ広告 APIのWebサービスについて説明します。</div>
<div lang=\"en\">Display Ads API Web Services supported in Yahoo! JAPAN Ads API.</div>
<div><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/design/v4/Route.yaml\">OpenAPI Specification</a></div>
<div lang=\"ja\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/bestpractice/ja\">Best Practice</a></div>
<div lang=\"en\"><a target=\"_blank\" href=\"https://github.com/yahoojp-marketing/ads-display-api-documents/blob/master/bestpractice/en\">Best Practice</a></div>



## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AccountAdProductServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_ad_product_service_selector = new \OpenAPI\Client\Model\AccountAdProductServiceSelector(); // \OpenAPI\Client\Model\AccountAdProductServiceSelector

try {
    $result = $apiInstance->accountAdProductServiceGetPost($account_ad_product_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountAdProductServiceApi->accountAdProductServiceGetPost: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://ads-display.yahooapis.jp/api/v4*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountAdProductServiceApi* | [**accountAdProductServiceGetPost**](docs/Api/AccountAdProductServiceApi.md#accountadproductservicegetpost) | **POST** /AccountAdProductService/get | 
*AccountAuthorityServiceApi* | [**accountAuthorityServiceGetPost**](docs/Api/AccountAuthorityServiceApi.md#accountauthorityservicegetpost) | **POST** /AccountAuthorityService/get | 
*AccountLinkServiceApi* | [**accountLinkServiceGetPost**](docs/Api/AccountLinkServiceApi.md#accountlinkservicegetpost) | **POST** /AccountLinkService/get | 
*AccountManagementServiceApi* | [**accountManagementServiceAddPost**](docs/Api/AccountManagementServiceApi.md#accountmanagementserviceaddpost) | **POST** /AccountManagementService/add | 
*AccountManagementServiceApi* | [**accountManagementServiceGetPost**](docs/Api/AccountManagementServiceApi.md#accountmanagementservicegetpost) | **POST** /AccountManagementService/get | 
*AccountManagementServiceApi* | [**accountManagementServiceSetPost**](docs/Api/AccountManagementServiceApi.md#accountmanagementservicesetpost) | **POST** /AccountManagementService/set | 
*AccountServiceApi* | [**accountServiceGetPost**](docs/Api/AccountServiceApi.md#accountservicegetpost) | **POST** /AccountService/get | 
*AccountServiceApi* | [**accountServiceSetPost**](docs/Api/AccountServiceApi.md#accountservicesetpost) | **POST** /AccountService/set | 
*AdGroupAdLabelServiceApi* | [**adGroupAdLabelServiceAddPost**](docs/Api/AdGroupAdLabelServiceApi.md#adgroupadlabelserviceaddpost) | **POST** /AdGroupAdLabelService/add | 
*AdGroupAdLabelServiceApi* | [**adGroupAdLabelServiceRemovePost**](docs/Api/AdGroupAdLabelServiceApi.md#adgroupadlabelserviceremovepost) | **POST** /AdGroupAdLabelService/remove | 
*AdGroupAdServiceApi* | [**adGroupAdServiceAddPost**](docs/Api/AdGroupAdServiceApi.md#adgroupadserviceaddpost) | **POST** /AdGroupAdService/add | 
*AdGroupAdServiceApi* | [**adGroupAdServiceGetPost**](docs/Api/AdGroupAdServiceApi.md#adgroupadservicegetpost) | **POST** /AdGroupAdService/get | 
*AdGroupAdServiceApi* | [**adGroupAdServiceRemovePost**](docs/Api/AdGroupAdServiceApi.md#adgroupadserviceremovepost) | **POST** /AdGroupAdService/remove | 
*AdGroupAdServiceApi* | [**adGroupAdServiceSetPost**](docs/Api/AdGroupAdServiceApi.md#adgroupadservicesetpost) | **POST** /AdGroupAdService/set | 
*AdGroupLabelServiceApi* | [**adGroupLabelServiceAddPost**](docs/Api/AdGroupLabelServiceApi.md#adgrouplabelserviceaddpost) | **POST** /AdGroupLabelService/add | 
*AdGroupLabelServiceApi* | [**adGroupLabelServiceRemovePost**](docs/Api/AdGroupLabelServiceApi.md#adgrouplabelserviceremovepost) | **POST** /AdGroupLabelService/remove | 
*AdGroupServiceApi* | [**adGroupServiceAddPost**](docs/Api/AdGroupServiceApi.md#adgroupserviceaddpost) | **POST** /AdGroupService/add | 
*AdGroupServiceApi* | [**adGroupServiceGetPost**](docs/Api/AdGroupServiceApi.md#adgroupservicegetpost) | **POST** /AdGroupService/get | 
*AdGroupServiceApi* | [**adGroupServiceRemovePost**](docs/Api/AdGroupServiceApi.md#adgroupserviceremovepost) | **POST** /AdGroupService/remove | 
*AdGroupServiceApi* | [**adGroupServiceSetPost**](docs/Api/AdGroupServiceApi.md#adgroupservicesetpost) | **POST** /AdGroupService/set | 
*AdGroupTargetServiceApi* | [**adGroupTargetServiceAddPost**](docs/Api/AdGroupTargetServiceApi.md#adgrouptargetserviceaddpost) | **POST** /AdGroupTargetService/add | 
*AdGroupTargetServiceApi* | [**adGroupTargetServiceGetPost**](docs/Api/AdGroupTargetServiceApi.md#adgrouptargetservicegetpost) | **POST** /AdGroupTargetService/get | 
*AdGroupTargetServiceApi* | [**adGroupTargetServiceRemovePost**](docs/Api/AdGroupTargetServiceApi.md#adgrouptargetserviceremovepost) | **POST** /AdGroupTargetService/remove | 
*AdGroupTargetServiceApi* | [**adGroupTargetServiceReplacePost**](docs/Api/AdGroupTargetServiceApi.md#adgrouptargetservicereplacepost) | **POST** /AdGroupTargetService/replace | 
*AdGroupTargetServiceApi* | [**adGroupTargetServiceSetPost**](docs/Api/AdGroupTargetServiceApi.md#adgrouptargetservicesetpost) | **POST** /AdGroupTargetService/set | 
*AuditLogServiceApi* | [**auditLogServiceAddPost**](docs/Api/AuditLogServiceApi.md#auditlogserviceaddpost) | **POST** /AuditLogService/add | 
*AuditLogServiceApi* | [**auditLogServiceDownloadPost**](docs/Api/AuditLogServiceApi.md#auditlogservicedownloadpost) | **POST** /AuditLogService/download | 
*AuditLogServiceApi* | [**auditLogServiceGetPost**](docs/Api/AuditLogServiceApi.md#auditlogservicegetpost) | **POST** /AuditLogService/get | 
*BalanceServiceApi* | [**balanceServiceGetPost**](docs/Api/BalanceServiceApi.md#balanceservicegetpost) | **POST** /BalanceService/get | 
*BrandLiftServiceApi* | [**brandLiftServiceGetPost**](docs/Api/BrandLiftServiceApi.md#brandliftservicegetpost) | **POST** /BrandLiftService/get | 
*BudgetOrderServiceApi* | [**budgetOrderServiceGetPost**](docs/Api/BudgetOrderServiceApi.md#budgetorderservicegetpost) | **POST** /BudgetOrderService/get | 
*BudgetOrderServiceApi* | [**budgetOrderServiceSetPost**](docs/Api/BudgetOrderServiceApi.md#budgetorderservicesetpost) | **POST** /BudgetOrderService/set | 
*CampaignLabelServiceApi* | [**campaignLabelServiceAddPost**](docs/Api/CampaignLabelServiceApi.md#campaignlabelserviceaddpost) | **POST** /CampaignLabelService/add | 
*CampaignLabelServiceApi* | [**campaignLabelServiceRemovePost**](docs/Api/CampaignLabelServiceApi.md#campaignlabelserviceremovepost) | **POST** /CampaignLabelService/remove | 
*CampaignMigrationServiceApi* | [**campaignMigrationServiceDownloadErrorFilePost**](docs/Api/CampaignMigrationServiceApi.md#campaignmigrationservicedownloaderrorfilepost) | **POST** /CampaignMigrationService/downloadErrorFile | 
*CampaignMigrationServiceApi* | [**campaignMigrationServiceDownloadOriginalFilePost**](docs/Api/CampaignMigrationServiceApi.md#campaignmigrationservicedownloadoriginalfilepost) | **POST** /CampaignMigrationService/downloadOriginalFile | 
*CampaignMigrationServiceApi* | [**campaignMigrationServiceDownloadPost**](docs/Api/CampaignMigrationServiceApi.md#campaignmigrationservicedownloadpost) | **POST** /CampaignMigrationService/download | 
*CampaignMigrationServiceApi* | [**campaignMigrationServiceGetPost**](docs/Api/CampaignMigrationServiceApi.md#campaignmigrationservicegetpost) | **POST** /CampaignMigrationService/get | 
*CampaignMigrationServiceApi* | [**campaignMigrationServiceUploadPost**](docs/Api/CampaignMigrationServiceApi.md#campaignmigrationserviceuploadpost) | **POST** /CampaignMigrationService/upload | 
*CampaignServiceApi* | [**campaignServiceAddPost**](docs/Api/CampaignServiceApi.md#campaignserviceaddpost) | **POST** /CampaignService/add | 
*CampaignServiceApi* | [**campaignServiceGetPost**](docs/Api/CampaignServiceApi.md#campaignservicegetpost) | **POST** /CampaignService/get | 
*CampaignServiceApi* | [**campaignServiceRemovePost**](docs/Api/CampaignServiceApi.md#campaignserviceremovepost) | **POST** /CampaignService/remove | 
*CampaignServiceApi* | [**campaignServiceSetPost**](docs/Api/CampaignServiceApi.md#campaignservicesetpost) | **POST** /CampaignService/set | 
*ConversionTrackerServiceApi* | [**conversionTrackerServiceAddPost**](docs/Api/ConversionTrackerServiceApi.md#conversiontrackerserviceaddpost) | **POST** /ConversionTrackerService/add | 
*ConversionTrackerServiceApi* | [**conversionTrackerServiceGetPost**](docs/Api/ConversionTrackerServiceApi.md#conversiontrackerservicegetpost) | **POST** /ConversionTrackerService/get | 
*ConversionTrackerServiceApi* | [**conversionTrackerServiceSetPost**](docs/Api/ConversionTrackerServiceApi.md#conversiontrackerservicesetpost) | **POST** /ConversionTrackerService/set | 
*DictionaryServiceApi* | [**dictionaryServiceGetAudienceCategoryPost**](docs/Api/DictionaryServiceApi.md#dictionaryservicegetaudiencecategorypost) | **POST** /DictionaryService/getAudienceCategory | 
*DictionaryServiceApi* | [**dictionaryServiceGetBusinessCategoryPost**](docs/Api/DictionaryServiceApi.md#dictionaryservicegetbusinesscategorypost) | **POST** /DictionaryService/getBusinessCategory | 
*DictionaryServiceApi* | [**dictionaryServiceGetDisapprovalReasonPost**](docs/Api/DictionaryServiceApi.md#dictionaryservicegetdisapprovalreasonpost) | **POST** /DictionaryService/getDisapprovalReason | 
*DictionaryServiceApi* | [**dictionaryServiceGetFeedItemGoogleProductCategoryPost**](docs/Api/DictionaryServiceApi.md#dictionaryservicegetfeeditemgoogleproductcategorypost) | **POST** /DictionaryService/getFeedItemGoogleProductCategory | 
*DictionaryServiceApi* | [**dictionaryServiceGetGeographicLocationPost**](docs/Api/DictionaryServiceApi.md#dictionaryservicegetgeographiclocationpost) | **POST** /DictionaryService/getGeographicLocation | 
*DictionaryServiceApi* | [**dictionaryServiceGetInterestCategoryPost**](docs/Api/DictionaryServiceApi.md#dictionaryservicegetinterestcategorypost) | **POST** /DictionaryService/getInterestCategory | 
*DictionaryServiceApi* | [**dictionaryServiceGetMediaAdFormatPost**](docs/Api/DictionaryServiceApi.md#dictionaryservicegetmediaadformatpost) | **POST** /DictionaryService/getMediaAdFormat | 
*DictionaryServiceApi* | [**dictionaryServiceGetOsVersionPost**](docs/Api/DictionaryServiceApi.md#dictionaryservicegetosversionpost) | **POST** /DictionaryService/getOsVersion | 
*DictionaryServiceApi* | [**dictionaryServiceGetSiteCategoryPost**](docs/Api/DictionaryServiceApi.md#dictionaryservicegetsitecategorypost) | **POST** /DictionaryService/getSiteCategory | 
*DictionaryServiceApi* | [**dictionaryServiceGetThirdPartyTrackingDomainPost**](docs/Api/DictionaryServiceApi.md#dictionaryservicegetthirdpartytrackingdomainpost) | **POST** /DictionaryService/getThirdPartyTrackingDomain | 
*FeedDataServiceApi* | [**feedDataServiceDownloadErrorFilePost**](docs/Api/FeedDataServiceApi.md#feeddataservicedownloaderrorfilepost) | **POST** /FeedDataService/downloadErrorFile | 
*FeedDataServiceApi* | [**feedDataServiceGetPost**](docs/Api/FeedDataServiceApi.md#feeddataservicegetpost) | **POST** /FeedDataService/get | 
*FeedDataServiceApi* | [**feedDataServiceUploadPost**](docs/Api/FeedDataServiceApi.md#feeddataserviceuploadpost) | **POST** /FeedDataService/upload | 
*FeedFtpRequestServiceApi* | [**feedFtpRequestServiceAddPost**](docs/Api/FeedFtpRequestServiceApi.md#feedftprequestserviceaddpost) | **POST** /FeedFtpRequestService/add | 
*FeedFtpServiceApi* | [**feedFtpServiceAddPost**](docs/Api/FeedFtpServiceApi.md#feedftpserviceaddpost) | **POST** /FeedFtpService/add | 
*FeedFtpServiceApi* | [**feedFtpServiceGetPost**](docs/Api/FeedFtpServiceApi.md#feedftpservicegetpost) | **POST** /FeedFtpService/get | 
*FeedFtpServiceApi* | [**feedFtpServiceSetPost**](docs/Api/FeedFtpServiceApi.md#feedftpservicesetpost) | **POST** /FeedFtpService/set | 
*FeedItemServiceApi* | [**feedItemServiceSetPost**](docs/Api/FeedItemServiceApi.md#feeditemservicesetpost) | **POST** /FeedItemService/set | 
*FeedServiceApi* | [**feedServiceAddPost**](docs/Api/FeedServiceApi.md#feedserviceaddpost) | **POST** /FeedService/add | 
*FeedServiceApi* | [**feedServiceDownloadDisApprovalReasonListPost**](docs/Api/FeedServiceApi.md#feedservicedownloaddisapprovalreasonlistpost) | **POST** /FeedService/downloadDisApprovalReasonList | 
*FeedServiceApi* | [**feedServiceGetPost**](docs/Api/FeedServiceApi.md#feedservicegetpost) | **POST** /FeedService/get | 
*FeedServiceApi* | [**feedServiceRemovePost**](docs/Api/FeedServiceApi.md#feedserviceremovepost) | **POST** /FeedService/remove | 
*FeedServiceApi* | [**feedServiceSetPost**](docs/Api/FeedServiceApi.md#feedservicesetpost) | **POST** /FeedService/set | 
*FeedSetServiceApi* | [**feedSetServiceAddPost**](docs/Api/FeedSetServiceApi.md#feedsetserviceaddpost) | **POST** /FeedSetService/add | 
*FeedSetServiceApi* | [**feedSetServiceGetPost**](docs/Api/FeedSetServiceApi.md#feedsetservicegetpost) | **POST** /FeedSetService/get | 
*FeedSetServiceApi* | [**feedSetServiceRemovePost**](docs/Api/FeedSetServiceApi.md#feedsetserviceremovepost) | **POST** /FeedSetService/remove | 
*GuaranteedAdGroupAdServiceApi* | [**guaranteedAdGroupAdServiceAddPost**](docs/Api/GuaranteedAdGroupAdServiceApi.md#guaranteedadgroupadserviceaddpost) | **POST** /GuaranteedAdGroupAdService/add | 
*GuaranteedAdGroupAdServiceApi* | [**guaranteedAdGroupAdServiceGetPost**](docs/Api/GuaranteedAdGroupAdServiceApi.md#guaranteedadgroupadservicegetpost) | **POST** /GuaranteedAdGroupAdService/get | 
*GuaranteedAdGroupAdServiceApi* | [**guaranteedAdGroupAdServiceSetPost**](docs/Api/GuaranteedAdGroupAdServiceApi.md#guaranteedadgroupadservicesetpost) | **POST** /GuaranteedAdGroupAdService/set | 
*GuaranteedAdGroupServiceApi* | [**guaranteedAdGroupServiceAddPost**](docs/Api/GuaranteedAdGroupServiceApi.md#guaranteedadgroupserviceaddpost) | **POST** /GuaranteedAdGroupService/add | 
*GuaranteedAdGroupServiceApi* | [**guaranteedAdGroupServiceGetPost**](docs/Api/GuaranteedAdGroupServiceApi.md#guaranteedadgroupservicegetpost) | **POST** /GuaranteedAdGroupService/get | 
*GuaranteedAdGroupServiceApi* | [**guaranteedAdGroupServiceSetPost**](docs/Api/GuaranteedAdGroupServiceApi.md#guaranteedadgroupservicesetpost) | **POST** /GuaranteedAdGroupService/set | 
*GuaranteedCampaignServiceApi* | [**guaranteedCampaignServiceGetPost**](docs/Api/GuaranteedCampaignServiceApi.md#guaranteedcampaignservicegetpost) | **POST** /GuaranteedCampaignService/get | 
*GuaranteedCampaignServiceApi* | [**guaranteedCampaignServiceSetPost**](docs/Api/GuaranteedCampaignServiceApi.md#guaranteedcampaignservicesetpost) | **POST** /GuaranteedCampaignService/set | 
*GuaranteedPreviewServiceApi* | [**guaranteedPreviewServiceGetPost**](docs/Api/GuaranteedPreviewServiceApi.md#guaranteedpreviewservicegetpost) | **POST** /GuaranteedPreviewService/get | 
*GuaranteedReservationServiceApi* | [**guaranteedReservationServiceAddPost**](docs/Api/GuaranteedReservationServiceApi.md#guaranteedreservationserviceaddpost) | **POST** /GuaranteedReservationService/add | 
*GuaranteedSimulationServiceApi* | [**guaranteedSimulationServiceAddPost**](docs/Api/GuaranteedSimulationServiceApi.md#guaranteedsimulationserviceaddpost) | **POST** /GuaranteedSimulationService/add | 
*GuaranteedSimulationServiceApi* | [**guaranteedSimulationServiceGetAdCategoryPost**](docs/Api/GuaranteedSimulationServiceApi.md#guaranteedsimulationservicegetadcategorypost) | **POST** /GuaranteedSimulationService/getAdCategory | 
*GuaranteedSimulationServiceApi* | [**guaranteedSimulationServiceGetPackagePost**](docs/Api/GuaranteedSimulationServiceApi.md#guaranteedsimulationservicegetpackagepost) | **POST** /GuaranteedSimulationService/getPackage | 
*GuaranteedSimulationServiceApi* | [**guaranteedSimulationServiceGetPost**](docs/Api/GuaranteedSimulationServiceApi.md#guaranteedsimulationservicegetpost) | **POST** /GuaranteedSimulationService/get | 
*LabelServiceApi* | [**labelServiceAddPost**](docs/Api/LabelServiceApi.md#labelserviceaddpost) | **POST** /LabelService/add | 
*LabelServiceApi* | [**labelServiceGetPost**](docs/Api/LabelServiceApi.md#labelservicegetpost) | **POST** /LabelService/get | 
*LabelServiceApi* | [**labelServiceRemovePost**](docs/Api/LabelServiceApi.md#labelserviceremovepost) | **POST** /LabelService/remove | 
*LabelServiceApi* | [**labelServiceSetPost**](docs/Api/LabelServiceApi.md#labelservicesetpost) | **POST** /LabelService/set | 
*MediaServiceApi* | [**mediaServiceAddPost**](docs/Api/MediaServiceApi.md#mediaserviceaddpost) | **POST** /MediaService/add | 
*MediaServiceApi* | [**mediaServiceDownloadPost**](docs/Api/MediaServiceApi.md#mediaservicedownloadpost) | **POST** /MediaService/download | 
*MediaServiceApi* | [**mediaServiceGetPost**](docs/Api/MediaServiceApi.md#mediaservicegetpost) | **POST** /MediaService/get | 
*MediaServiceApi* | [**mediaServiceRemovePost**](docs/Api/MediaServiceApi.md#mediaserviceremovepost) | **POST** /MediaService/remove | 
*MediaServiceApi* | [**mediaServiceSetPost**](docs/Api/MediaServiceApi.md#mediaservicesetpost) | **POST** /MediaService/set | 
*PlacementUrlIdeaServiceApi* | [**placementUrlIdeaServiceGetPost**](docs/Api/PlacementUrlIdeaServiceApi.md#placementurlideaservicegetpost) | **POST** /PlacementUrlIdeaService/get | 
*PlacementUrlListServiceApi* | [**placementUrlListServiceAddPost**](docs/Api/PlacementUrlListServiceApi.md#placementurllistserviceaddpost) | **POST** /PlacementUrlListService/add | 
*PlacementUrlListServiceApi* | [**placementUrlListServiceGetPost**](docs/Api/PlacementUrlListServiceApi.md#placementurllistservicegetpost) | **POST** /PlacementUrlListService/get | 
*PlacementUrlListServiceApi* | [**placementUrlListServiceRemovePost**](docs/Api/PlacementUrlListServiceApi.md#placementurllistserviceremovepost) | **POST** /PlacementUrlListService/remove | 
*PlacementUrlListServiceApi* | [**placementUrlListServiceSetPost**](docs/Api/PlacementUrlListServiceApi.md#placementurllistservicesetpost) | **POST** /PlacementUrlListService/set | 
*RecommendationServiceApi* | [**recommendationServiceGetPost**](docs/Api/RecommendationServiceApi.md#recommendationservicegetpost) | **POST** /RecommendationService/get | 
*ReportDefinitionServiceApi* | [**reportDefinitionServiceAddPost**](docs/Api/ReportDefinitionServiceApi.md#reportdefinitionserviceaddpost) | **POST** /ReportDefinitionService/add | 
*ReportDefinitionServiceApi* | [**reportDefinitionServiceDownloadPost**](docs/Api/ReportDefinitionServiceApi.md#reportdefinitionservicedownloadpost) | **POST** /ReportDefinitionService/download | 
*ReportDefinitionServiceApi* | [**reportDefinitionServiceGetPost**](docs/Api/ReportDefinitionServiceApi.md#reportdefinitionservicegetpost) | **POST** /ReportDefinitionService/get | 
*ReportDefinitionServiceApi* | [**reportDefinitionServiceGetReportFieldsPost**](docs/Api/ReportDefinitionServiceApi.md#reportdefinitionservicegetreportfieldspost) | **POST** /ReportDefinitionService/getReportFields | 
*ReportDefinitionServiceApi* | [**reportDefinitionServiceRemovePost**](docs/Api/ReportDefinitionServiceApi.md#reportdefinitionserviceremovepost) | **POST** /ReportDefinitionService/remove | 
*RetargetingListServiceApi* | [**retargetingListServiceAddPost**](docs/Api/RetargetingListServiceApi.md#retargetinglistserviceaddpost) | **POST** /RetargetingListService/add | 
*RetargetingListServiceApi* | [**retargetingListServiceGetPost**](docs/Api/RetargetingListServiceApi.md#retargetinglistservicegetpost) | **POST** /RetargetingListService/get | 
*RetargetingListServiceApi* | [**retargetingListServiceGetUploadUserListStatusPost**](docs/Api/RetargetingListServiceApi.md#retargetinglistservicegetuploaduserliststatuspost) | **POST** /RetargetingListService/getUploadUserListStatus | 
*RetargetingListServiceApi* | [**retargetingListServiceRemovePost**](docs/Api/RetargetingListServiceApi.md#retargetinglistserviceremovepost) | **POST** /RetargetingListService/remove | 
*RetargetingListServiceApi* | [**retargetingListServiceSetPost**](docs/Api/RetargetingListServiceApi.md#retargetinglistservicesetpost) | **POST** /RetargetingListService/set | 
*RetargetingListServiceApi* | [**retargetingListServiceUploadUserListPost**](docs/Api/RetargetingListServiceApi.md#retargetinglistserviceuploaduserlistpost) | **POST** /RetargetingListService/uploadUserList | 
*RetargetingTagServiceApi* | [**retargetingTagServiceAddPost**](docs/Api/RetargetingTagServiceApi.md#retargetingtagserviceaddpost) | **POST** /RetargetingTagService/add | 
*RetargetingTagServiceApi* | [**retargetingTagServiceGetPost**](docs/Api/RetargetingTagServiceApi.md#retargetingtagservicegetpost) | **POST** /RetargetingTagService/get | 
*SearchKeywordIdeaServiceApi* | [**searchKeywordIdeaServiceGetPost**](docs/Api/SearchKeywordIdeaServiceApi.md#searchkeywordideaservicegetpost) | **POST** /SearchKeywordIdeaService/get | 
*SearchKeywordListServiceApi* | [**searchKeywordListServiceAddPost**](docs/Api/SearchKeywordListServiceApi.md#searchkeywordlistserviceaddpost) | **POST** /SearchKeywordListService/add | 
*SearchKeywordListServiceApi* | [**searchKeywordListServiceGetPost**](docs/Api/SearchKeywordListServiceApi.md#searchkeywordlistservicegetpost) | **POST** /SearchKeywordListService/get | 
*SearchKeywordListServiceApi* | [**searchKeywordListServiceRemovePost**](docs/Api/SearchKeywordListServiceApi.md#searchkeywordlistserviceremovepost) | **POST** /SearchKeywordListService/remove | 
*SearchKeywordListServiceApi* | [**searchKeywordListServiceSetPost**](docs/Api/SearchKeywordListServiceApi.md#searchkeywordlistservicesetpost) | **POST** /SearchKeywordListService/set | 
*SearchLiftServiceApi* | [**searchLiftServiceGetPost**](docs/Api/SearchLiftServiceApi.md#searchliftservicegetpost) | **POST** /SearchLiftService/get | 
*StatsServiceApi* | [**statsServiceGetPost**](docs/Api/StatsServiceApi.md#statsservicegetpost) | **POST** /StatsService/get | 
*VideoServiceApi* | [**videoServiceDownloadPost**](docs/Api/VideoServiceApi.md#videoservicedownloadpost) | **POST** /VideoService/download | 
*VideoServiceApi* | [**videoServiceGetPost**](docs/Api/VideoServiceApi.md#videoservicegetpost) | **POST** /VideoService/get | 
*VideoServiceApi* | [**videoServiceRemovePost**](docs/Api/VideoServiceApi.md#videoserviceremovepost) | **POST** /VideoService/remove | 
*VideoServiceApi* | [**videoServiceSetPost**](docs/Api/VideoServiceApi.md#videoservicesetpost) | **POST** /VideoService/set | 
*VideoServiceApi* | [**videoServiceUploadPost**](docs/Api/VideoServiceApi.md#videoserviceuploadpost) | **POST** /VideoService/upload | 

## Models

- [Account](docs/Model/Account.md)
- [AccountAdProduct](docs/Model/AccountAdProduct.md)
- [AccountAdProductServiceAdProduct](docs/Model/AccountAdProductServiceAdProduct.md)
- [AccountAdProductServiceGetResponse](docs/Model/AccountAdProductServiceGetResponse.md)
- [AccountAdProductServicePage](docs/Model/AccountAdProductServicePage.md)
- [AccountAdProductServiceSelector](docs/Model/AccountAdProductServiceSelector.md)
- [AccountAdProductServiceValue](docs/Model/AccountAdProductServiceValue.md)
- [AccountAuthority](docs/Model/AccountAuthority.md)
- [AccountAuthorityServiceGetResponse](docs/Model/AccountAuthorityServiceGetResponse.md)
- [AccountAuthorityServicePage](docs/Model/AccountAuthorityServicePage.md)
- [AccountAuthorityServiceSelector](docs/Model/AccountAuthorityServiceSelector.md)
- [AccountAuthorityServiceValue](docs/Model/AccountAuthorityServiceValue.md)
- [AccountLink](docs/Model/AccountLink.md)
- [AccountLinkServiceAccountStatus](docs/Model/AccountLinkServiceAccountStatus.md)
- [AccountLinkServiceGetResponse](docs/Model/AccountLinkServiceGetResponse.md)
- [AccountLinkServiceLinkAccessPermission](docs/Model/AccountLinkServiceLinkAccessPermission.md)
- [AccountLinkServiceOwnerShipType](docs/Model/AccountLinkServiceOwnerShipType.md)
- [AccountLinkServicePage](docs/Model/AccountLinkServicePage.md)
- [AccountLinkServiceRetargetingListSharingEnabled](docs/Model/AccountLinkServiceRetargetingListSharingEnabled.md)
- [AccountLinkServiceSelector](docs/Model/AccountLinkServiceSelector.md)
- [AccountLinkServiceValue](docs/Model/AccountLinkServiceValue.md)
- [AccountManagement](docs/Model/AccountManagement.md)
- [AccountManagementServiceAuthType](docs/Model/AccountManagementServiceAuthType.md)
- [AccountManagementServiceAutoTaggingEnabled](docs/Model/AccountManagementServiceAutoTaggingEnabled.md)
- [AccountManagementServiceClient](docs/Model/AccountManagementServiceClient.md)
- [AccountManagementServiceClientType](docs/Model/AccountManagementServiceClientType.md)
- [AccountManagementServiceDeliveryStatus](docs/Model/AccountManagementServiceDeliveryStatus.md)
- [AccountManagementServiceEnterpriseType](docs/Model/AccountManagementServiceEnterpriseType.md)
- [AccountManagementServiceEnterpriseTypePosition](docs/Model/AccountManagementServiceEnterpriseTypePosition.md)
- [AccountManagementServiceGetResponse](docs/Model/AccountManagementServiceGetResponse.md)
- [AccountManagementServiceIncludeTestAccount](docs/Model/AccountManagementServiceIncludeTestAccount.md)
- [AccountManagementServiceInvoice](docs/Model/AccountManagementServiceInvoice.md)
- [AccountManagementServiceIsTestAccount](docs/Model/AccountManagementServiceIsTestAccount.md)
- [AccountManagementServiceMutateResponse](docs/Model/AccountManagementServiceMutateResponse.md)
- [AccountManagementServiceOperation](docs/Model/AccountManagementServiceOperation.md)
- [AccountManagementServicePage](docs/Model/AccountManagementServicePage.md)
- [AccountManagementServicePayment](docs/Model/AccountManagementServicePayment.md)
- [AccountManagementServicePaymentType](docs/Model/AccountManagementServicePaymentType.md)
- [AccountManagementServicePrefectureCode](docs/Model/AccountManagementServicePrefectureCode.md)
- [AccountManagementServiceReturnValue](docs/Model/AccountManagementServiceReturnValue.md)
- [AccountManagementServiceSelector](docs/Model/AccountManagementServiceSelector.md)
- [AccountManagementServiceStatus](docs/Model/AccountManagementServiceStatus.md)
- [AccountManagementServiceUrlType](docs/Model/AccountManagementServiceUrlType.md)
- [AccountManagementServiceValue](docs/Model/AccountManagementServiceValue.md)
- [AccountServiceAuthType](docs/Model/AccountServiceAuthType.md)
- [AccountServiceAutoTaggingEnabled](docs/Model/AccountServiceAutoTaggingEnabled.md)
- [AccountServiceDeliveryStatus](docs/Model/AccountServiceDeliveryStatus.md)
- [AccountServiceGetResponse](docs/Model/AccountServiceGetResponse.md)
- [AccountServiceIncludeManagerAccount](docs/Model/AccountServiceIncludeManagerAccount.md)
- [AccountServiceIncludeTestAccount](docs/Model/AccountServiceIncludeTestAccount.md)
- [AccountServiceIsManagerAccount](docs/Model/AccountServiceIsManagerAccount.md)
- [AccountServiceIsTestAccount](docs/Model/AccountServiceIsTestAccount.md)
- [AccountServiceMutateResponse](docs/Model/AccountServiceMutateResponse.md)
- [AccountServiceOperation](docs/Model/AccountServiceOperation.md)
- [AccountServicePage](docs/Model/AccountServicePage.md)
- [AccountServiceReturnValue](docs/Model/AccountServiceReturnValue.md)
- [AccountServiceSelector](docs/Model/AccountServiceSelector.md)
- [AccountServiceStatus](docs/Model/AccountServiceStatus.md)
- [AccountServiceType](docs/Model/AccountServiceType.md)
- [AccountServiceValue](docs/Model/AccountServiceValue.md)
- [AdGroup](docs/Model/AdGroup.md)
- [AdGroupAd](docs/Model/AdGroupAd.md)
- [AdGroupAdLabel](docs/Model/AdGroupAdLabel.md)
- [AdGroupAdLabelServiceMutateResponse](docs/Model/AdGroupAdLabelServiceMutateResponse.md)
- [AdGroupAdLabelServiceOperation](docs/Model/AdGroupAdLabelServiceOperation.md)
- [AdGroupAdLabelServiceReturnValue](docs/Model/AdGroupAdLabelServiceReturnValue.md)
- [AdGroupAdLabelServiceValue](docs/Model/AdGroupAdLabelServiceValue.md)
- [AdGroupAdServiceAd](docs/Model/AdGroupAdServiceAd.md)
- [AdGroupAdServiceAdStyle](docs/Model/AdGroupAdServiceAdStyle.md)
- [AdGroupAdServiceAdType](docs/Model/AdGroupAdServiceAdType.md)
- [AdGroupAdServiceApprovalStatus](docs/Model/AdGroupAdServiceApprovalStatus.md)
- [AdGroupAdServiceBannerImageAd](docs/Model/AdGroupAdServiceBannerImageAd.md)
- [AdGroupAdServiceBannerVideoAd](docs/Model/AdGroupAdServiceBannerVideoAd.md)
- [AdGroupAdServiceBid](docs/Model/AdGroupAdServiceBid.md)
- [AdGroupAdServiceBiddingStrategyType](docs/Model/AdGroupAdServiceBiddingStrategyType.md)
- [AdGroupAdServiceButtonText](docs/Model/AdGroupAdServiceButtonText.md)
- [AdGroupAdServiceCampaignGoalFilterType](docs/Model/AdGroupAdServiceCampaignGoalFilterType.md)
- [AdGroupAdServiceCarrierName](docs/Model/AdGroupAdServiceCarrierName.md)
- [AdGroupAdServiceCreatedDateRange](docs/Model/AdGroupAdServiceCreatedDateRange.md)
- [AdGroupAdServiceDynamicAd](docs/Model/AdGroupAdServiceDynamicAd.md)
- [AdGroupAdServiceGetResponse](docs/Model/AdGroupAdServiceGetResponse.md)
- [AdGroupAdServiceIsRemoveFlg](docs/Model/AdGroupAdServiceIsRemoveFlg.md)
- [AdGroupAdServiceLabel](docs/Model/AdGroupAdServiceLabel.md)
- [AdGroupAdServiceManualCPCAdGroupAdBid](docs/Model/AdGroupAdServiceManualCPCAdGroupAdBid.md)
- [AdGroupAdServiceManualCPVAdGroupAdBid](docs/Model/AdGroupAdServiceManualCPVAdGroupAdBid.md)
- [AdGroupAdServiceMobileAd](docs/Model/AdGroupAdServiceMobileAd.md)
- [AdGroupAdServiceMutateResponse](docs/Model/AdGroupAdServiceMutateResponse.md)
- [AdGroupAdServiceOperation](docs/Model/AdGroupAdServiceOperation.md)
- [AdGroupAdServicePage](docs/Model/AdGroupAdServicePage.md)
- [AdGroupAdServicePosAd](docs/Model/AdGroupAdServicePosAd.md)
- [AdGroupAdServiceResponsiveImageAd](docs/Model/AdGroupAdServiceResponsiveImageAd.md)
- [AdGroupAdServiceResponsiveVideoAd](docs/Model/AdGroupAdServiceResponsiveVideoAd.md)
- [AdGroupAdServiceReturnValue](docs/Model/AdGroupAdServiceReturnValue.md)
- [AdGroupAdServiceSelector](docs/Model/AdGroupAdServiceSelector.md)
- [AdGroupAdServiceStaticFrameAd](docs/Model/AdGroupAdServiceStaticFrameAd.md)
- [AdGroupAdServiceTextAd](docs/Model/AdGroupAdServiceTextAd.md)
- [AdGroupAdServiceUserStatus](docs/Model/AdGroupAdServiceUserStatus.md)
- [AdGroupAdServiceValue](docs/Model/AdGroupAdServiceValue.md)
- [AdGroupLabel](docs/Model/AdGroupLabel.md)
- [AdGroupLabelServiceMutateResponse](docs/Model/AdGroupLabelServiceMutateResponse.md)
- [AdGroupLabelServiceOperation](docs/Model/AdGroupLabelServiceOperation.md)
- [AdGroupLabelServiceReturnValue](docs/Model/AdGroupLabelServiceReturnValue.md)
- [AdGroupLabelServiceValue](docs/Model/AdGroupLabelServiceValue.md)
- [AdGroupServiceAutoConversionOptimizer](docs/Model/AdGroupServiceAutoConversionOptimizer.md)
- [AdGroupServiceBid](docs/Model/AdGroupServiceBid.md)
- [AdGroupServiceBidType](docs/Model/AdGroupServiceBidType.md)
- [AdGroupServiceBiddingStrategy](docs/Model/AdGroupServiceBiddingStrategy.md)
- [AdGroupServiceCampaignBiddingStrategyType](docs/Model/AdGroupServiceCampaignBiddingStrategyType.md)
- [AdGroupServiceCampaignGoalFilterType](docs/Model/AdGroupServiceCampaignGoalFilterType.md)
- [AdGroupServiceConversionOptimizer](docs/Model/AdGroupServiceConversionOptimizer.md)
- [AdGroupServiceCreatedDateRange](docs/Model/AdGroupServiceCreatedDateRange.md)
- [AdGroupServiceDeviceAppType](docs/Model/AdGroupServiceDeviceAppType.md)
- [AdGroupServiceDeviceOsType](docs/Model/AdGroupServiceDeviceOsType.md)
- [AdGroupServiceDeviceType](docs/Model/AdGroupServiceDeviceType.md)
- [AdGroupServiceDynamicImageExtensions](docs/Model/AdGroupServiceDynamicImageExtensions.md)
- [AdGroupServiceEligibilityFlg](docs/Model/AdGroupServiceEligibilityFlg.md)
- [AdGroupServiceGetResponse](docs/Model/AdGroupServiceGetResponse.md)
- [AdGroupServiceLabel](docs/Model/AdGroupServiceLabel.md)
- [AdGroupServiceManualCPCBid](docs/Model/AdGroupServiceManualCPCBid.md)
- [AdGroupServiceManualCPVBid](docs/Model/AdGroupServiceManualCPVBid.md)
- [AdGroupServiceManualConversionOptimizer](docs/Model/AdGroupServiceManualConversionOptimizer.md)
- [AdGroupServiceMutateResponse](docs/Model/AdGroupServiceMutateResponse.md)
- [AdGroupServiceNoneConversionOptimizer](docs/Model/AdGroupServiceNoneConversionOptimizer.md)
- [AdGroupServiceOperation](docs/Model/AdGroupServiceOperation.md)
- [AdGroupServiceOptimizerType](docs/Model/AdGroupServiceOptimizerType.md)
- [AdGroupServicePage](docs/Model/AdGroupServicePage.md)
- [AdGroupServiceReturnValue](docs/Model/AdGroupServiceReturnValue.md)
- [AdGroupServiceSelector](docs/Model/AdGroupServiceSelector.md)
- [AdGroupServiceSmartDeviceCarrier](docs/Model/AdGroupServiceSmartDeviceCarrier.md)
- [AdGroupServiceUserStatus](docs/Model/AdGroupServiceUserStatus.md)
- [AdGroupServiceValue](docs/Model/AdGroupServiceValue.md)
- [AdGroupTarget](docs/Model/AdGroupTarget.md)
- [AdGroupTargetReturnValue](docs/Model/AdGroupTargetReturnValue.md)
- [AdGroupTargetServiceAdScheduleTarget](docs/Model/AdGroupTargetServiceAdScheduleTarget.md)
- [AdGroupTargetServiceAge](docs/Model/AdGroupTargetServiceAge.md)
- [AdGroupTargetServiceAgeTarget](docs/Model/AdGroupTargetServiceAgeTarget.md)
- [AdGroupTargetServiceAppTarget](docs/Model/AdGroupTargetServiceAppTarget.md)
- [AdGroupTargetServiceAudienceCategoryTarget](docs/Model/AdGroupTargetServiceAudienceCategoryTarget.md)
- [AdGroupTargetServiceCarrierTarget](docs/Model/AdGroupTargetServiceCarrierTarget.md)
- [AdGroupTargetServiceCarrierType](docs/Model/AdGroupTargetServiceCarrierType.md)
- [AdGroupTargetServiceDayOfWeek](docs/Model/AdGroupTargetServiceDayOfWeek.md)
- [AdGroupTargetServiceDeviceAppType](docs/Model/AdGroupTargetServiceDeviceAppType.md)
- [AdGroupTargetServiceDeviceOsType](docs/Model/AdGroupTargetServiceDeviceOsType.md)
- [AdGroupTargetServiceDeviceTarget](docs/Model/AdGroupTargetServiceDeviceTarget.md)
- [AdGroupTargetServiceDeviceType](docs/Model/AdGroupTargetServiceDeviceType.md)
- [AdGroupTargetServiceEstimateFlg](docs/Model/AdGroupTargetServiceEstimateFlg.md)
- [AdGroupTargetServiceGender](docs/Model/AdGroupTargetServiceGender.md)
- [AdGroupTargetServiceGenderTarget](docs/Model/AdGroupTargetServiceGenderTarget.md)
- [AdGroupTargetServiceGeoTarget](docs/Model/AdGroupTargetServiceGeoTarget.md)
- [AdGroupTargetServiceGetResponse](docs/Model/AdGroupTargetServiceGetResponse.md)
- [AdGroupTargetServiceInterestCategoryTarget](docs/Model/AdGroupTargetServiceInterestCategoryTarget.md)
- [AdGroupTargetServiceMutateResponse](docs/Model/AdGroupTargetServiceMutateResponse.md)
- [AdGroupTargetServiceOperation](docs/Model/AdGroupTargetServiceOperation.md)
- [AdGroupTargetServiceOsTarget](docs/Model/AdGroupTargetServiceOsTarget.md)
- [AdGroupTargetServiceOsVersionTarget](docs/Model/AdGroupTargetServiceOsVersionTarget.md)
- [AdGroupTargetServicePage](docs/Model/AdGroupTargetServicePage.md)
- [AdGroupTargetServicePlacementCategoryTarget](docs/Model/AdGroupTargetServicePlacementCategoryTarget.md)
- [AdGroupTargetServicePlacementTarget](docs/Model/AdGroupTargetServicePlacementTarget.md)
- [AdGroupTargetServicePlacementUrlListType](docs/Model/AdGroupTargetServicePlacementUrlListType.md)
- [AdGroupTargetServicePositionTarget](docs/Model/AdGroupTargetServicePositionTarget.md)
- [AdGroupTargetServicePositionType](docs/Model/AdGroupTargetServicePositionType.md)
- [AdGroupTargetServiceSearchTarget](docs/Model/AdGroupTargetServiceSearchTarget.md)
- [AdGroupTargetServiceSelector](docs/Model/AdGroupTargetServiceSelector.md)
- [AdGroupTargetServiceSiteCategoryTarget](docs/Model/AdGroupTargetServiceSiteCategoryTarget.md)
- [AdGroupTargetServiceSiteRetargetingTarget](docs/Model/AdGroupTargetServiceSiteRetargetingTarget.md)
- [AdGroupTargetServiceTarget](docs/Model/AdGroupTargetServiceTarget.md)
- [AdGroupTargetServiceTargetListDeliverType](docs/Model/AdGroupTargetServiceTargetListDeliverType.md)
- [AdGroupTargetServiceTargetType](docs/Model/AdGroupTargetServiceTargetType.md)
- [AdGroupTargetServiceValue](docs/Model/AdGroupTargetServiceValue.md)
- [AuditLogServiceDateRange](docs/Model/AuditLogServiceDateRange.md)
- [AuditLogServiceDownloadSelector](docs/Model/AuditLogServiceDownloadSelector.md)
- [AuditLogServiceGetResponse](docs/Model/AuditLogServiceGetResponse.md)
- [AuditLogServiceJob](docs/Model/AuditLogServiceJob.md)
- [AuditLogServiceJobStatus](docs/Model/AuditLogServiceJobStatus.md)
- [AuditLogServiceLang](docs/Model/AuditLogServiceLang.md)
- [AuditLogServiceMutateResponse](docs/Model/AuditLogServiceMutateResponse.md)
- [AuditLogServiceOperation](docs/Model/AuditLogServiceOperation.md)
- [AuditLogServicePage](docs/Model/AuditLogServicePage.md)
- [AuditLogServiceReturnValue](docs/Model/AuditLogServiceReturnValue.md)
- [AuditLogServiceSelector](docs/Model/AuditLogServiceSelector.md)
- [AuditLogServiceUpdateSource](docs/Model/AuditLogServiceUpdateSource.md)
- [AuditLogServiceValue](docs/Model/AuditLogServiceValue.md)
- [Balance](docs/Model/Balance.md)
- [BalanceServiceGetResponse](docs/Model/BalanceServiceGetResponse.md)
- [BalanceServicePage](docs/Model/BalanceServicePage.md)
- [BalanceServiceSelector](docs/Model/BalanceServiceSelector.md)
- [BalanceServiceValue](docs/Model/BalanceServiceValue.md)
- [BrandLift](docs/Model/BrandLift.md)
- [BrandLiftServiceApprovalStatus](docs/Model/BrandLiftServiceApprovalStatus.md)
- [BrandLiftServiceGetResponse](docs/Model/BrandLiftServiceGetResponse.md)
- [BrandLiftServiceGoal](docs/Model/BrandLiftServiceGoal.md)
- [BrandLiftServicePage](docs/Model/BrandLiftServicePage.md)
- [BrandLiftServiceQuestion](docs/Model/BrandLiftServiceQuestion.md)
- [BrandLiftServiceSelector](docs/Model/BrandLiftServiceSelector.md)
- [BrandLiftServiceValue](docs/Model/BrandLiftServiceValue.md)
- [BudgetOrder](docs/Model/BudgetOrder.md)
- [BudgetOrderServiceAccountType](docs/Model/BudgetOrderServiceAccountType.md)
- [BudgetOrderServiceGetResponse](docs/Model/BudgetOrderServiceGetResponse.md)
- [BudgetOrderServiceLimitChargeType](docs/Model/BudgetOrderServiceLimitChargeType.md)
- [BudgetOrderServiceMutateResponse](docs/Model/BudgetOrderServiceMutateResponse.md)
- [BudgetOrderServiceOperation](docs/Model/BudgetOrderServiceOperation.md)
- [BudgetOrderServicePage](docs/Model/BudgetOrderServicePage.md)
- [BudgetOrderServiceReturnValue](docs/Model/BudgetOrderServiceReturnValue.md)
- [BudgetOrderServiceSelector](docs/Model/BudgetOrderServiceSelector.md)
- [BudgetOrderServiceValue](docs/Model/BudgetOrderServiceValue.md)
- [Campaign](docs/Model/Campaign.md)
- [CampaignLabel](docs/Model/CampaignLabel.md)
- [CampaignLabelServiceMutateResponse](docs/Model/CampaignLabelServiceMutateResponse.md)
- [CampaignLabelServiceOperation](docs/Model/CampaignLabelServiceOperation.md)
- [CampaignLabelServiceReturnValue](docs/Model/CampaignLabelServiceReturnValue.md)
- [CampaignLabelServiceValue](docs/Model/CampaignLabelServiceValue.md)
- [CampaignMigrationServiceDownloadFileSelector](docs/Model/CampaignMigrationServiceDownloadFileSelector.md)
- [CampaignMigrationServiceDownloadSelector](docs/Model/CampaignMigrationServiceDownloadSelector.md)
- [CampaignMigrationServiceGetResponse](docs/Model/CampaignMigrationServiceGetResponse.md)
- [CampaignMigrationServiceJob](docs/Model/CampaignMigrationServiceJob.md)
- [CampaignMigrationServiceJobStatus](docs/Model/CampaignMigrationServiceJobStatus.md)
- [CampaignMigrationServiceJobValue](docs/Model/CampaignMigrationServiceJobValue.md)
- [CampaignMigrationServiceLang](docs/Model/CampaignMigrationServiceLang.md)
- [CampaignMigrationServicePage](docs/Model/CampaignMigrationServicePage.md)
- [CampaignMigrationServiceScope](docs/Model/CampaignMigrationServiceScope.md)
- [CampaignMigrationServiceSelector](docs/Model/CampaignMigrationServiceSelector.md)
- [CampaignMigrationServiceUploadResponse](docs/Model/CampaignMigrationServiceUploadResponse.md)
- [CampaignMigrationServiceUploadReturnValue](docs/Model/CampaignMigrationServiceUploadReturnValue.md)
- [CampaignServiceAutoCampaignConversionOptimizer](docs/Model/CampaignServiceAutoCampaignConversionOptimizer.md)
- [CampaignServiceBiddingStrategy](docs/Model/CampaignServiceBiddingStrategy.md)
- [CampaignServiceBiddingStrategyType](docs/Model/CampaignServiceBiddingStrategyType.md)
- [CampaignServiceBudget](docs/Model/CampaignServiceBudget.md)
- [CampaignServiceBudgetDeliveryMethod](docs/Model/CampaignServiceBudgetDeliveryMethod.md)
- [CampaignServiceCampaignBiddingStrategy](docs/Model/CampaignServiceCampaignBiddingStrategy.md)
- [CampaignServiceCampaignBiddingStrategyType](docs/Model/CampaignServiceCampaignBiddingStrategyType.md)
- [CampaignServiceConversionOptimizer](docs/Model/CampaignServiceConversionOptimizer.md)
- [CampaignServiceConversionOptimizerEligibilityFlg](docs/Model/CampaignServiceConversionOptimizerEligibilityFlg.md)
- [CampaignServiceConversionOptimizerTrainingStatus](docs/Model/CampaignServiceConversionOptimizerTrainingStatus.md)
- [CampaignServiceConversionOptimizerType](docs/Model/CampaignServiceConversionOptimizerType.md)
- [CampaignServiceCreatedDateRange](docs/Model/CampaignServiceCreatedDateRange.md)
- [CampaignServiceDeviceOsType](docs/Model/CampaignServiceDeviceOsType.md)
- [CampaignServiceFrequencyCap](docs/Model/CampaignServiceFrequencyCap.md)
- [CampaignServiceFrequencyLevel](docs/Model/CampaignServiceFrequencyLevel.md)
- [CampaignServiceFrequencyTimeUnit](docs/Model/CampaignServiceFrequencyTimeUnit.md)
- [CampaignServiceGetResponse](docs/Model/CampaignServiceGetResponse.md)
- [CampaignServiceGoalFilterType](docs/Model/CampaignServiceGoalFilterType.md)
- [CampaignServiceLabel](docs/Model/CampaignServiceLabel.md)
- [CampaignServiceManualCampaignConversionOptimizer](docs/Model/CampaignServiceManualCampaignConversionOptimizer.md)
- [CampaignServiceMutateResponse](docs/Model/CampaignServiceMutateResponse.md)
- [CampaignServiceOperation](docs/Model/CampaignServiceOperation.md)
- [CampaignServicePage](docs/Model/CampaignServicePage.md)
- [CampaignServiceReturnValue](docs/Model/CampaignServiceReturnValue.md)
- [CampaignServiceSelector](docs/Model/CampaignServiceSelector.md)
- [CampaignServiceServingStatus](docs/Model/CampaignServiceServingStatus.md)
- [CampaignServiceType](docs/Model/CampaignServiceType.md)
- [CampaignServiceUserStatus](docs/Model/CampaignServiceUserStatus.md)
- [CampaignServiceValue](docs/Model/CampaignServiceValue.md)
- [CampaignServiceViewableFrequencyCap](docs/Model/CampaignServiceViewableFrequencyCap.md)
- [ConversionTracker](docs/Model/ConversionTracker.md)
- [ConversionTrackerServiceAppConversion](docs/Model/ConversionTrackerServiceAppConversion.md)
- [ConversionTrackerServiceAppConversionPlatform](docs/Model/ConversionTrackerServiceAppConversionPlatform.md)
- [ConversionTrackerServiceAppConversionType](docs/Model/ConversionTrackerServiceAppConversionType.md)
- [ConversionTrackerServiceCategory](docs/Model/ConversionTrackerServiceCategory.md)
- [ConversionTrackerServiceCountingType](docs/Model/ConversionTrackerServiceCountingType.md)
- [ConversionTrackerServiceExcludeFromBidding](docs/Model/ConversionTrackerServiceExcludeFromBidding.md)
- [ConversionTrackerServiceGetResponse](docs/Model/ConversionTrackerServiceGetResponse.md)
- [ConversionTrackerServiceMutateResponse](docs/Model/ConversionTrackerServiceMutateResponse.md)
- [ConversionTrackerServiceOperation](docs/Model/ConversionTrackerServiceOperation.md)
- [ConversionTrackerServicePage](docs/Model/ConversionTrackerServicePage.md)
- [ConversionTrackerServicePeriod](docs/Model/ConversionTrackerServicePeriod.md)
- [ConversionTrackerServicePeriodDatetime](docs/Model/ConversionTrackerServicePeriodDatetime.md)
- [ConversionTrackerServiceReturnValue](docs/Model/ConversionTrackerServiceReturnValue.md)
- [ConversionTrackerServiceSelector](docs/Model/ConversionTrackerServiceSelector.md)
- [ConversionTrackerServiceStatsPeriod](docs/Model/ConversionTrackerServiceStatsPeriod.md)
- [ConversionTrackerServiceStatsPeriodCustomDate](docs/Model/ConversionTrackerServiceStatsPeriodCustomDate.md)
- [ConversionTrackerServiceStatus](docs/Model/ConversionTrackerServiceStatus.md)
- [ConversionTrackerServiceType](docs/Model/ConversionTrackerServiceType.md)
- [ConversionTrackerServiceValue](docs/Model/ConversionTrackerServiceValue.md)
- [ConversionTrackerServiceWebConversion](docs/Model/ConversionTrackerServiceWebConversion.md)
- [ConversionTrackerServiceWebConversionSnippet](docs/Model/ConversionTrackerServiceWebConversionSnippet.md)
- [ConversionTrackerServiceWebConversionSnippetType](docs/Model/ConversionTrackerServiceWebConversionSnippetType.md)
- [DictionaryServiceAudienceCategory](docs/Model/DictionaryServiceAudienceCategory.md)
- [DictionaryServiceAudienceCategoryPage](docs/Model/DictionaryServiceAudienceCategoryPage.md)
- [DictionaryServiceAudienceCategoryValue](docs/Model/DictionaryServiceAudienceCategoryValue.md)
- [DictionaryServiceBusinessCategory](docs/Model/DictionaryServiceBusinessCategory.md)
- [DictionaryServiceBusinessCategoryPage](docs/Model/DictionaryServiceBusinessCategoryPage.md)
- [DictionaryServiceBusinessCategoryValue](docs/Model/DictionaryServiceBusinessCategoryValue.md)
- [DictionaryServiceCategory](docs/Model/DictionaryServiceCategory.md)
- [DictionaryServiceCategoryChild](docs/Model/DictionaryServiceCategoryChild.md)
- [DictionaryServiceCategoryPage](docs/Model/DictionaryServiceCategoryPage.md)
- [DictionaryServiceCategorySelector](docs/Model/DictionaryServiceCategorySelector.md)
- [DictionaryServiceCategoryValue](docs/Model/DictionaryServiceCategoryValue.md)
- [DictionaryServiceDeviceOsType](docs/Model/DictionaryServiceDeviceOsType.md)
- [DictionaryServiceDisapprovalReason](docs/Model/DictionaryServiceDisapprovalReason.md)
- [DictionaryServiceDisapprovalReasonPage](docs/Model/DictionaryServiceDisapprovalReasonPage.md)
- [DictionaryServiceDisapprovalReasonSelector](docs/Model/DictionaryServiceDisapprovalReasonSelector.md)
- [DictionaryServiceDisapprovalReasonValue](docs/Model/DictionaryServiceDisapprovalReasonValue.md)
- [DictionaryServiceFeedItemGoogleProductCategory](docs/Model/DictionaryServiceFeedItemGoogleProductCategory.md)
- [DictionaryServiceFeedItemGoogleProductCategoryPage](docs/Model/DictionaryServiceFeedItemGoogleProductCategoryPage.md)
- [DictionaryServiceFeedItemGoogleProductCategorySelector](docs/Model/DictionaryServiceFeedItemGoogleProductCategorySelector.md)
- [DictionaryServiceFeedItemGoogleProductCategoryValue](docs/Model/DictionaryServiceFeedItemGoogleProductCategoryValue.md)
- [DictionaryServiceGeographicLocation](docs/Model/DictionaryServiceGeographicLocation.md)
- [DictionaryServiceGeographicLocationPage](docs/Model/DictionaryServiceGeographicLocationPage.md)
- [DictionaryServiceGeographicLocationSelector](docs/Model/DictionaryServiceGeographicLocationSelector.md)
- [DictionaryServiceGeographicLocationType](docs/Model/DictionaryServiceGeographicLocationType.md)
- [DictionaryServiceGeographicLocationValue](docs/Model/DictionaryServiceGeographicLocationValue.md)
- [DictionaryServiceGetAudienceCategoryResponse](docs/Model/DictionaryServiceGetAudienceCategoryResponse.md)
- [DictionaryServiceGetBusinessCategoryResponse](docs/Model/DictionaryServiceGetBusinessCategoryResponse.md)
- [DictionaryServiceGetDisapprovalReasonResponse](docs/Model/DictionaryServiceGetDisapprovalReasonResponse.md)
- [DictionaryServiceGetFeedItemGoogleProductCategoryResponse](docs/Model/DictionaryServiceGetFeedItemGoogleProductCategoryResponse.md)
- [DictionaryServiceGetGeographicLocationResponse](docs/Model/DictionaryServiceGetGeographicLocationResponse.md)
- [DictionaryServiceGetInterestCategoryResponse](docs/Model/DictionaryServiceGetInterestCategoryResponse.md)
- [DictionaryServiceGetMediaAdFormatResponse](docs/Model/DictionaryServiceGetMediaAdFormatResponse.md)
- [DictionaryServiceGetOsVersionResponse](docs/Model/DictionaryServiceGetOsVersionResponse.md)
- [DictionaryServiceGetSiteCategoryResponse](docs/Model/DictionaryServiceGetSiteCategoryResponse.md)
- [DictionaryServiceGetThirdPartyTrackingDomainResponse](docs/Model/DictionaryServiceGetThirdPartyTrackingDomainResponse.md)
- [DictionaryServiceLang](docs/Model/DictionaryServiceLang.md)
- [DictionaryServiceMediaAdFormat](docs/Model/DictionaryServiceMediaAdFormat.md)
- [DictionaryServiceMediaAdFormatPage](docs/Model/DictionaryServiceMediaAdFormatPage.md)
- [DictionaryServiceMediaAdFormatValue](docs/Model/DictionaryServiceMediaAdFormatValue.md)
- [DictionaryServiceOsVersion](docs/Model/DictionaryServiceOsVersion.md)
- [DictionaryServiceOsVersionPage](docs/Model/DictionaryServiceOsVersionPage.md)
- [DictionaryServiceOsVersionSelector](docs/Model/DictionaryServiceOsVersionSelector.md)
- [DictionaryServiceOsVersionValue](docs/Model/DictionaryServiceOsVersionValue.md)
- [DictionaryServiceThirdPartyTrackingDomain](docs/Model/DictionaryServiceThirdPartyTrackingDomain.md)
- [DictionaryServiceThirdPartyTrackingDomainPage](docs/Model/DictionaryServiceThirdPartyTrackingDomainPage.md)
- [DictionaryServiceThirdPartyTrackingDomainValue](docs/Model/DictionaryServiceThirdPartyTrackingDomainValue.md)
- [Error](docs/Model/Error.md)
- [ErrorDetail](docs/Model/ErrorDetail.md)
- [Feed](docs/Model/Feed.md)
- [FeedDataServiceDownloadErrorFileSelector](docs/Model/FeedDataServiceDownloadErrorFileSelector.md)
- [FeedDataServiceFileUploadDateRange](docs/Model/FeedDataServiceFileUploadDateRange.md)
- [FeedDataServiceFileUploadSrc](docs/Model/FeedDataServiceFileUploadSrc.md)
- [FeedDataServiceFileUploadStatus](docs/Model/FeedDataServiceFileUploadStatus.md)
- [FeedDataServiceGetResponse](docs/Model/FeedDataServiceGetResponse.md)
- [FeedDataServiceItemListUploadType](docs/Model/FeedDataServiceItemListUploadType.md)
- [FeedDataServicePage](docs/Model/FeedDataServicePage.md)
- [FeedDataServiceRecord](docs/Model/FeedDataServiceRecord.md)
- [FeedDataServiceSelector](docs/Model/FeedDataServiceSelector.md)
- [FeedDataServiceUploadResponse](docs/Model/FeedDataServiceUploadResponse.md)
- [FeedDataServiceUploadReturnValue](docs/Model/FeedDataServiceUploadReturnValue.md)
- [FeedDataServiceValue](docs/Model/FeedDataServiceValue.md)
- [FeedFtp](docs/Model/FeedFtp.md)
- [FeedFtpRequest](docs/Model/FeedFtpRequest.md)
- [FeedFtpRequestServiceMutateResponse](docs/Model/FeedFtpRequestServiceMutateResponse.md)
- [FeedFtpRequestServiceOperation](docs/Model/FeedFtpRequestServiceOperation.md)
- [FeedFtpRequestServiceReturnValue](docs/Model/FeedFtpRequestServiceReturnValue.md)
- [FeedFtpRequestServiceValue](docs/Model/FeedFtpRequestServiceValue.md)
- [FeedFtpServiceActiveStatus](docs/Model/FeedFtpServiceActiveStatus.md)
- [FeedFtpServiceGetResponse](docs/Model/FeedFtpServiceGetResponse.md)
- [FeedFtpServiceItemListUploadType](docs/Model/FeedFtpServiceItemListUploadType.md)
- [FeedFtpServiceMutateResponse](docs/Model/FeedFtpServiceMutateResponse.md)
- [FeedFtpServiceOperation](docs/Model/FeedFtpServiceOperation.md)
- [FeedFtpServicePage](docs/Model/FeedFtpServicePage.md)
- [FeedFtpServiceReturnValue](docs/Model/FeedFtpServiceReturnValue.md)
- [FeedFtpServiceSchedule](docs/Model/FeedFtpServiceSchedule.md)
- [FeedFtpServiceScheduleDaily](docs/Model/FeedFtpServiceScheduleDaily.md)
- [FeedFtpServiceScheduleHourly](docs/Model/FeedFtpServiceScheduleHourly.md)
- [FeedFtpServiceScheduleType](docs/Model/FeedFtpServiceScheduleType.md)
- [FeedFtpServiceScheduleWeek](docs/Model/FeedFtpServiceScheduleWeek.md)
- [FeedFtpServiceScheduleWeekly](docs/Model/FeedFtpServiceScheduleWeekly.md)
- [FeedFtpServiceSelector](docs/Model/FeedFtpServiceSelector.md)
- [FeedFtpServiceValue](docs/Model/FeedFtpServiceValue.md)
- [FeedItem](docs/Model/FeedItem.md)
- [FeedItemServiceAvailability](docs/Model/FeedItemServiceAvailability.md)
- [FeedItemServiceIsRemoveFlg](docs/Model/FeedItemServiceIsRemoveFlg.md)
- [FeedItemServiceMutateResponse](docs/Model/FeedItemServiceMutateResponse.md)
- [FeedItemServiceOperation](docs/Model/FeedItemServiceOperation.md)
- [FeedItemServiceReturnValue](docs/Model/FeedItemServiceReturnValue.md)
- [FeedItemServiceValue](docs/Model/FeedItemServiceValue.md)
- [FeedServiceControlType](docs/Model/FeedServiceControlType.md)
- [FeedServiceDownloadDisApprovalReasonListSelector](docs/Model/FeedServiceDownloadDisApprovalReasonListSelector.md)
- [FeedServiceGetResponse](docs/Model/FeedServiceGetResponse.md)
- [FeedServiceMutateResponse](docs/Model/FeedServiceMutateResponse.md)
- [FeedServiceOperation](docs/Model/FeedServiceOperation.md)
- [FeedServicePage](docs/Model/FeedServicePage.md)
- [FeedServiceReturnValue](docs/Model/FeedServiceReturnValue.md)
- [FeedServiceSelector](docs/Model/FeedServiceSelector.md)
- [FeedServiceSourceType](docs/Model/FeedServiceSourceType.md)
- [FeedServiceUploadLimit](docs/Model/FeedServiceUploadLimit.md)
- [FeedServiceValue](docs/Model/FeedServiceValue.md)
- [FeedSet](docs/Model/FeedSet.md)
- [FeedSetServiceCompareOperator](docs/Model/FeedSetServiceCompareOperator.md)
- [FeedSetServiceCondition](docs/Model/FeedSetServiceCondition.md)
- [FeedSetServiceConditionSet](docs/Model/FeedSetServiceConditionSet.md)
- [FeedSetServiceConditionType](docs/Model/FeedSetServiceConditionType.md)
- [FeedSetServiceGetResponse](docs/Model/FeedSetServiceGetResponse.md)
- [FeedSetServiceMutateResponse](docs/Model/FeedSetServiceMutateResponse.md)
- [FeedSetServiceOperation](docs/Model/FeedSetServiceOperation.md)
- [FeedSetServicePage](docs/Model/FeedSetServicePage.md)
- [FeedSetServiceReturnValue](docs/Model/FeedSetServiceReturnValue.md)
- [FeedSetServiceSelector](docs/Model/FeedSetServiceSelector.md)
- [FeedSetServiceValue](docs/Model/FeedSetServiceValue.md)
- [GuaranteedAdGroup](docs/Model/GuaranteedAdGroup.md)
- [GuaranteedAdGroupAd](docs/Model/GuaranteedAdGroupAd.md)
- [GuaranteedAdGroupAdLandingPageStatus](docs/Model/GuaranteedAdGroupAdLandingPageStatus.md)
- [GuaranteedAdGroupAdServiceAd](docs/Model/GuaranteedAdGroupAdServiceAd.md)
- [GuaranteedAdGroupAdServiceAdStyle](docs/Model/GuaranteedAdGroupAdServiceAdStyle.md)
- [GuaranteedAdGroupAdServiceAdType](docs/Model/GuaranteedAdGroupAdServiceAdType.md)
- [GuaranteedAdGroupAdServiceApprovalStatus](docs/Model/GuaranteedAdGroupAdServiceApprovalStatus.md)
- [GuaranteedAdGroupAdServiceBannerImageAd](docs/Model/GuaranteedAdGroupAdServiceBannerImageAd.md)
- [GuaranteedAdGroupAdServiceBannerVideoAd](docs/Model/GuaranteedAdGroupAdServiceBannerVideoAd.md)
- [GuaranteedAdGroupAdServiceBrandPanelPanorama](docs/Model/GuaranteedAdGroupAdServiceBrandPanelPanorama.md)
- [GuaranteedAdGroupAdServiceBrandPanelPanoramaVideo](docs/Model/GuaranteedAdGroupAdServiceBrandPanelPanoramaVideo.md)
- [GuaranteedAdGroupAdServiceBrandPanelQuintie](docs/Model/GuaranteedAdGroupAdServiceBrandPanelQuintie.md)
- [GuaranteedAdGroupAdServiceBrandPanelQuintieVideo](docs/Model/GuaranteedAdGroupAdServiceBrandPanelQuintieVideo.md)
- [GuaranteedAdGroupAdServiceGetResponse](docs/Model/GuaranteedAdGroupAdServiceGetResponse.md)
- [GuaranteedAdGroupAdServiceInstreamVideoAd](docs/Model/GuaranteedAdGroupAdServiceInstreamVideoAd.md)
- [GuaranteedAdGroupAdServiceIsRemoveFlg](docs/Model/GuaranteedAdGroupAdServiceIsRemoveFlg.md)
- [GuaranteedAdGroupAdServiceLabel](docs/Model/GuaranteedAdGroupAdServiceLabel.md)
- [GuaranteedAdGroupAdServiceMutateResponse](docs/Model/GuaranteedAdGroupAdServiceMutateResponse.md)
- [GuaranteedAdGroupAdServiceOperation](docs/Model/GuaranteedAdGroupAdServiceOperation.md)
- [GuaranteedAdGroupAdServicePage](docs/Model/GuaranteedAdGroupAdServicePage.md)
- [GuaranteedAdGroupAdServiceReturnValue](docs/Model/GuaranteedAdGroupAdServiceReturnValue.md)
- [GuaranteedAdGroupAdServiceSelector](docs/Model/GuaranteedAdGroupAdServiceSelector.md)
- [GuaranteedAdGroupAdServiceTopImpactPanorama](docs/Model/GuaranteedAdGroupAdServiceTopImpactPanorama.md)
- [GuaranteedAdGroupAdServiceTopImpactPanoramaSideSwitchVideo](docs/Model/GuaranteedAdGroupAdServiceTopImpactPanoramaSideSwitchVideo.md)
- [GuaranteedAdGroupAdServiceTopImpactPanoramaSideVisionVideo](docs/Model/GuaranteedAdGroupAdServiceTopImpactPanoramaSideVisionVideo.md)
- [GuaranteedAdGroupAdServiceTopImpactPanoramaVideo](docs/Model/GuaranteedAdGroupAdServiceTopImpactPanoramaVideo.md)
- [GuaranteedAdGroupAdServiceTopImpactPrimeDisplayDouble](docs/Model/GuaranteedAdGroupAdServiceTopImpactPrimeDisplayDouble.md)
- [GuaranteedAdGroupAdServiceTopImpactPrimeDisplayDoubleVideo](docs/Model/GuaranteedAdGroupAdServiceTopImpactPrimeDisplayDoubleVideo.md)
- [GuaranteedAdGroupAdServiceTopImpactQuintie](docs/Model/GuaranteedAdGroupAdServiceTopImpactQuintie.md)
- [GuaranteedAdGroupAdServiceTopImpactQuintieVideo](docs/Model/GuaranteedAdGroupAdServiceTopImpactQuintieVideo.md)
- [GuaranteedAdGroupAdServiceTopImpactSquare](docs/Model/GuaranteedAdGroupAdServiceTopImpactSquare.md)
- [GuaranteedAdGroupAdServiceTopImpactSquareSpecial](docs/Model/GuaranteedAdGroupAdServiceTopImpactSquareSpecial.md)
- [GuaranteedAdGroupAdServiceTopImpactSquareSpecialVideo](docs/Model/GuaranteedAdGroupAdServiceTopImpactSquareSpecialVideo.md)
- [GuaranteedAdGroupAdServiceTopImpactSquareVideo](docs/Model/GuaranteedAdGroupAdServiceTopImpactSquareVideo.md)
- [GuaranteedAdGroupAdServiceTopImpactTheaterVideo](docs/Model/GuaranteedAdGroupAdServiceTopImpactTheaterVideo.md)
- [GuaranteedAdGroupAdServiceUserStatus](docs/Model/GuaranteedAdGroupAdServiceUserStatus.md)
- [GuaranteedAdGroupAdServiceValue](docs/Model/GuaranteedAdGroupAdServiceValue.md)
- [GuaranteedAdGroupServiceDeviceAppType](docs/Model/GuaranteedAdGroupServiceDeviceAppType.md)
- [GuaranteedAdGroupServiceDeviceOsType](docs/Model/GuaranteedAdGroupServiceDeviceOsType.md)
- [GuaranteedAdGroupServiceDeviceType](docs/Model/GuaranteedAdGroupServiceDeviceType.md)
- [GuaranteedAdGroupServiceGetResponse](docs/Model/GuaranteedAdGroupServiceGetResponse.md)
- [GuaranteedAdGroupServiceLabel](docs/Model/GuaranteedAdGroupServiceLabel.md)
- [GuaranteedAdGroupServiceMutateResponse](docs/Model/GuaranteedAdGroupServiceMutateResponse.md)
- [GuaranteedAdGroupServiceOperation](docs/Model/GuaranteedAdGroupServiceOperation.md)
- [GuaranteedAdGroupServicePage](docs/Model/GuaranteedAdGroupServicePage.md)
- [GuaranteedAdGroupServiceReturnValue](docs/Model/GuaranteedAdGroupServiceReturnValue.md)
- [GuaranteedAdGroupServiceSelector](docs/Model/GuaranteedAdGroupServiceSelector.md)
- [GuaranteedAdGroupServiceUserStatus](docs/Model/GuaranteedAdGroupServiceUserStatus.md)
- [GuaranteedAdGroupServiceValue](docs/Model/GuaranteedAdGroupServiceValue.md)
- [GuaranteedCampaign](docs/Model/GuaranteedCampaign.md)
- [GuaranteedCampaignServiceAdCategoryStatus](docs/Model/GuaranteedCampaignServiceAdCategoryStatus.md)
- [GuaranteedCampaignServiceBrandTracking](docs/Model/GuaranteedCampaignServiceBrandTracking.md)
- [GuaranteedCampaignServiceCampaignBiddingStrategy](docs/Model/GuaranteedCampaignServiceCampaignBiddingStrategy.md)
- [GuaranteedCampaignServiceCampaignBiddingStrategyType](docs/Model/GuaranteedCampaignServiceCampaignBiddingStrategyType.md)
- [GuaranteedCampaignServiceFrequencyLevel](docs/Model/GuaranteedCampaignServiceFrequencyLevel.md)
- [GuaranteedCampaignServiceFrequencyTimeUnit](docs/Model/GuaranteedCampaignServiceFrequencyTimeUnit.md)
- [GuaranteedCampaignServiceGetResponse](docs/Model/GuaranteedCampaignServiceGetResponse.md)
- [GuaranteedCampaignServiceLabel](docs/Model/GuaranteedCampaignServiceLabel.md)
- [GuaranteedCampaignServiceLifetimeBudget](docs/Model/GuaranteedCampaignServiceLifetimeBudget.md)
- [GuaranteedCampaignServiceMutateResponse](docs/Model/GuaranteedCampaignServiceMutateResponse.md)
- [GuaranteedCampaignServiceOperation](docs/Model/GuaranteedCampaignServiceOperation.md)
- [GuaranteedCampaignServicePackage](docs/Model/GuaranteedCampaignServicePackage.md)
- [GuaranteedCampaignServicePage](docs/Model/GuaranteedCampaignServicePage.md)
- [GuaranteedCampaignServiceReturnValue](docs/Model/GuaranteedCampaignServiceReturnValue.md)
- [GuaranteedCampaignServiceSelector](docs/Model/GuaranteedCampaignServiceSelector.md)
- [GuaranteedCampaignServiceServingStatus](docs/Model/GuaranteedCampaignServiceServingStatus.md)
- [GuaranteedCampaignServiceUserStatus](docs/Model/GuaranteedCampaignServiceUserStatus.md)
- [GuaranteedCampaignServiceValue](docs/Model/GuaranteedCampaignServiceValue.md)
- [GuaranteedCampaignServiceViewableFrequencyCap](docs/Model/GuaranteedCampaignServiceViewableFrequencyCap.md)
- [GuaranteedPreview](docs/Model/GuaranteedPreview.md)
- [GuaranteedPreviewServiceAdType](docs/Model/GuaranteedPreviewServiceAdType.md)
- [GuaranteedPreviewServiceGetResponse](docs/Model/GuaranteedPreviewServiceGetResponse.md)
- [GuaranteedPreviewServiceMaterial](docs/Model/GuaranteedPreviewServiceMaterial.md)
- [GuaranteedPreviewServiceMaterialAd](docs/Model/GuaranteedPreviewServiceMaterialAd.md)
- [GuaranteedPreviewServiceMaterialMedia](docs/Model/GuaranteedPreviewServiceMaterialMedia.md)
- [GuaranteedPreviewServiceMaterialType](docs/Model/GuaranteedPreviewServiceMaterialType.md)
- [GuaranteedPreviewServicePage](docs/Model/GuaranteedPreviewServicePage.md)
- [GuaranteedPreviewServiceSelector](docs/Model/GuaranteedPreviewServiceSelector.md)
- [GuaranteedPreviewServiceValue](docs/Model/GuaranteedPreviewServiceValue.md)
- [GuaranteedReservation](docs/Model/GuaranteedReservation.md)
- [GuaranteedReservationServiceMutateResponse](docs/Model/GuaranteedReservationServiceMutateResponse.md)
- [GuaranteedReservationServiceOperation](docs/Model/GuaranteedReservationServiceOperation.md)
- [GuaranteedReservationServiceReturnValue](docs/Model/GuaranteedReservationServiceReturnValue.md)
- [GuaranteedReservationServiceValue](docs/Model/GuaranteedReservationServiceValue.md)
- [GuaranteedSimulation](docs/Model/GuaranteedSimulation.md)
- [GuaranteedSimulationServiceActionAfterVideoAdTap](docs/Model/GuaranteedSimulationServiceActionAfterVideoAdTap.md)
- [GuaranteedSimulationServiceAdCategory](docs/Model/GuaranteedSimulationServiceAdCategory.md)
- [GuaranteedSimulationServiceAdCategoryPage](docs/Model/GuaranteedSimulationServiceAdCategoryPage.md)
- [GuaranteedSimulationServiceAdCategoryValue](docs/Model/GuaranteedSimulationServiceAdCategoryValue.md)
- [GuaranteedSimulationServiceAdGroupTarget](docs/Model/GuaranteedSimulationServiceAdGroupTarget.md)
- [GuaranteedSimulationServiceAdPlaceType](docs/Model/GuaranteedSimulationServiceAdPlaceType.md)
- [GuaranteedSimulationServiceAdRequirement](docs/Model/GuaranteedSimulationServiceAdRequirement.md)
- [GuaranteedSimulationServiceAdScheduleTarget](docs/Model/GuaranteedSimulationServiceAdScheduleTarget.md)
- [GuaranteedSimulationServiceAdType](docs/Model/GuaranteedSimulationServiceAdType.md)
- [GuaranteedSimulationServiceAge](docs/Model/GuaranteedSimulationServiceAge.md)
- [GuaranteedSimulationServiceAgeTarget](docs/Model/GuaranteedSimulationServiceAgeTarget.md)
- [GuaranteedSimulationServiceAppTarget](docs/Model/GuaranteedSimulationServiceAppTarget.md)
- [GuaranteedSimulationServiceAudienceCategoryTarget](docs/Model/GuaranteedSimulationServiceAudienceCategoryTarget.md)
- [GuaranteedSimulationServiceBuyingTerm](docs/Model/GuaranteedSimulationServiceBuyingTerm.md)
- [GuaranteedSimulationServiceBuyingTermType](docs/Model/GuaranteedSimulationServiceBuyingTermType.md)
- [GuaranteedSimulationServiceCustomRangeBuyingTerm](docs/Model/GuaranteedSimulationServiceCustomRangeBuyingTerm.md)
- [GuaranteedSimulationServiceDayOfWeek](docs/Model/GuaranteedSimulationServiceDayOfWeek.md)
- [GuaranteedSimulationServiceDeliverType](docs/Model/GuaranteedSimulationServiceDeliverType.md)
- [GuaranteedSimulationServiceDeviceAppType](docs/Model/GuaranteedSimulationServiceDeviceAppType.md)
- [GuaranteedSimulationServiceDeviceOsType](docs/Model/GuaranteedSimulationServiceDeviceOsType.md)
- [GuaranteedSimulationServiceDeviceTarget](docs/Model/GuaranteedSimulationServiceDeviceTarget.md)
- [GuaranteedSimulationServiceDeviceType](docs/Model/GuaranteedSimulationServiceDeviceType.md)
- [GuaranteedSimulationServiceDocumentFile](docs/Model/GuaranteedSimulationServiceDocumentFile.md)
- [GuaranteedSimulationServiceFixedBudgetApplyTermType](docs/Model/GuaranteedSimulationServiceFixedBudgetApplyTermType.md)
- [GuaranteedSimulationServiceFrequencyLevel](docs/Model/GuaranteedSimulationServiceFrequencyLevel.md)
- [GuaranteedSimulationServiceFrequencyTimeUnit](docs/Model/GuaranteedSimulationServiceFrequencyTimeUnit.md)
- [GuaranteedSimulationServiceGender](docs/Model/GuaranteedSimulationServiceGender.md)
- [GuaranteedSimulationServiceGenderTarget](docs/Model/GuaranteedSimulationServiceGenderTarget.md)
- [GuaranteedSimulationServiceGeoTarget](docs/Model/GuaranteedSimulationServiceGeoTarget.md)
- [GuaranteedSimulationServiceGetAdCategoryResponse](docs/Model/GuaranteedSimulationServiceGetAdCategoryResponse.md)
- [GuaranteedSimulationServiceGetPackageResponse](docs/Model/GuaranteedSimulationServiceGetPackageResponse.md)
- [GuaranteedSimulationServiceGetResponse](docs/Model/GuaranteedSimulationServiceGetResponse.md)
- [GuaranteedSimulationServiceInstreamDurationType](docs/Model/GuaranteedSimulationServiceInstreamDurationType.md)
- [GuaranteedSimulationServiceMutateResponse](docs/Model/GuaranteedSimulationServiceMutateResponse.md)
- [GuaranteedSimulationServiceOperation](docs/Model/GuaranteedSimulationServiceOperation.md)
- [GuaranteedSimulationServiceOsTarget](docs/Model/GuaranteedSimulationServiceOsTarget.md)
- [GuaranteedSimulationServicePackage](docs/Model/GuaranteedSimulationServicePackage.md)
- [GuaranteedSimulationServicePackagePage](docs/Model/GuaranteedSimulationServicePackagePage.md)
- [GuaranteedSimulationServicePackagePermissionType](docs/Model/GuaranteedSimulationServicePackagePermissionType.md)
- [GuaranteedSimulationServicePackagePermittedAdPlaceTypes](docs/Model/GuaranteedSimulationServicePackagePermittedAdPlaceTypes.md)
- [GuaranteedSimulationServicePackagePermittedAdScheduleTarget](docs/Model/GuaranteedSimulationServicePackagePermittedAdScheduleTarget.md)
- [GuaranteedSimulationServicePackagePermittedAgeTarget](docs/Model/GuaranteedSimulationServicePackagePermittedAgeTarget.md)
- [GuaranteedSimulationServicePackagePermittedAppTarget](docs/Model/GuaranteedSimulationServicePackagePermittedAppTarget.md)
- [GuaranteedSimulationServicePackagePermittedAudienceCategoryTarget](docs/Model/GuaranteedSimulationServicePackagePermittedAudienceCategoryTarget.md)
- [GuaranteedSimulationServicePackagePermittedDeviceTarget](docs/Model/GuaranteedSimulationServicePackagePermittedDeviceTarget.md)
- [GuaranteedSimulationServicePackagePermittedGenderTarget](docs/Model/GuaranteedSimulationServicePackagePermittedGenderTarget.md)
- [GuaranteedSimulationServicePackagePermittedGeoTarget](docs/Model/GuaranteedSimulationServicePackagePermittedGeoTarget.md)
- [GuaranteedSimulationServicePackagePermittedOsTarget](docs/Model/GuaranteedSimulationServicePackagePermittedOsTarget.md)
- [GuaranteedSimulationServicePackagePermittedPlacementCategoryTarget](docs/Model/GuaranteedSimulationServicePackagePermittedPlacementCategoryTarget.md)
- [GuaranteedSimulationServicePackagePermittedPositionTarget](docs/Model/GuaranteedSimulationServicePackagePermittedPositionTarget.md)
- [GuaranteedSimulationServicePackagePermittedSiteRetargetingTarget](docs/Model/GuaranteedSimulationServicePackagePermittedSiteRetargetingTarget.md)
- [GuaranteedSimulationServicePackagePermittedViewableFrequencyCap](docs/Model/GuaranteedSimulationServicePackagePermittedViewableFrequencyCap.md)
- [GuaranteedSimulationServicePackagePublicLevel](docs/Model/GuaranteedSimulationServicePackagePublicLevel.md)
- [GuaranteedSimulationServicePackageSelector](docs/Model/GuaranteedSimulationServicePackageSelector.md)
- [GuaranteedSimulationServicePackageValue](docs/Model/GuaranteedSimulationServicePackageValue.md)
- [GuaranteedSimulationServicePage](docs/Model/GuaranteedSimulationServicePage.md)
- [GuaranteedSimulationServicePermittedAdScheduleTarget](docs/Model/GuaranteedSimulationServicePermittedAdScheduleTarget.md)
- [GuaranteedSimulationServicePermittedAgeTarget](docs/Model/GuaranteedSimulationServicePermittedAgeTarget.md)
- [GuaranteedSimulationServicePermittedAppTarget](docs/Model/GuaranteedSimulationServicePermittedAppTarget.md)
- [GuaranteedSimulationServicePermittedAudienceCategoryTarget](docs/Model/GuaranteedSimulationServicePermittedAudienceCategoryTarget.md)
- [GuaranteedSimulationServicePermittedDeviceTarget](docs/Model/GuaranteedSimulationServicePermittedDeviceTarget.md)
- [GuaranteedSimulationServicePermittedGenderTarget](docs/Model/GuaranteedSimulationServicePermittedGenderTarget.md)
- [GuaranteedSimulationServicePermittedGeoTarget](docs/Model/GuaranteedSimulationServicePermittedGeoTarget.md)
- [GuaranteedSimulationServicePermittedOsTarget](docs/Model/GuaranteedSimulationServicePermittedOsTarget.md)
- [GuaranteedSimulationServicePermittedPlacementCategoryTarget](docs/Model/GuaranteedSimulationServicePermittedPlacementCategoryTarget.md)
- [GuaranteedSimulationServicePermittedPositionTarget](docs/Model/GuaranteedSimulationServicePermittedPositionTarget.md)
- [GuaranteedSimulationServicePermittedSiteRetargetingTarget](docs/Model/GuaranteedSimulationServicePermittedSiteRetargetingTarget.md)
- [GuaranteedSimulationServicePlacementCategoryTarget](docs/Model/GuaranteedSimulationServicePlacementCategoryTarget.md)
- [GuaranteedSimulationServicePlacementMonopolyFlg](docs/Model/GuaranteedSimulationServicePlacementMonopolyFlg.md)
- [GuaranteedSimulationServicePositionTarget](docs/Model/GuaranteedSimulationServicePositionTarget.md)
- [GuaranteedSimulationServicePositionType](docs/Model/GuaranteedSimulationServicePositionType.md)
- [GuaranteedSimulationServicePrediction](docs/Model/GuaranteedSimulationServicePrediction.md)
- [GuaranteedSimulationServicePredictionResult](docs/Model/GuaranteedSimulationServicePredictionResult.md)
- [GuaranteedSimulationServicePriceType](docs/Model/GuaranteedSimulationServicePriceType.md)
- [GuaranteedSimulationServicePricingPackage](docs/Model/GuaranteedSimulationServicePricingPackage.md)
- [GuaranteedSimulationServicePromotionalDocument](docs/Model/GuaranteedSimulationServicePromotionalDocument.md)
- [GuaranteedSimulationServiceRelatedDocument](docs/Model/GuaranteedSimulationServiceRelatedDocument.md)
- [GuaranteedSimulationServiceReservationStatus](docs/Model/GuaranteedSimulationServiceReservationStatus.md)
- [GuaranteedSimulationServiceReturnValue](docs/Model/GuaranteedSimulationServiceReturnValue.md)
- [GuaranteedSimulationServiceSalesDocument](docs/Model/GuaranteedSimulationServiceSalesDocument.md)
- [GuaranteedSimulationServiceSelector](docs/Model/GuaranteedSimulationServiceSelector.md)
- [GuaranteedSimulationServiceSingleDayBuyingTerm](docs/Model/GuaranteedSimulationServiceSingleDayBuyingTerm.md)
- [GuaranteedSimulationServiceSingleTermBuyingTerm](docs/Model/GuaranteedSimulationServiceSingleTermBuyingTerm.md)
- [GuaranteedSimulationServiceSiteRetargetingTarget](docs/Model/GuaranteedSimulationServiceSiteRetargetingTarget.md)
- [GuaranteedSimulationServiceSlotsPricingPackage](docs/Model/GuaranteedSimulationServiceSlotsPricingPackage.md)
- [GuaranteedSimulationServiceTarget](docs/Model/GuaranteedSimulationServiceTarget.md)
- [GuaranteedSimulationServiceTargetListDeliverType](docs/Model/GuaranteedSimulationServiceTargetListDeliverType.md)
- [GuaranteedSimulationServiceTargetType](docs/Model/GuaranteedSimulationServiceTargetType.md)
- [GuaranteedSimulationServiceUnreservableReason](docs/Model/GuaranteedSimulationServiceUnreservableReason.md)
- [GuaranteedSimulationServiceValue](docs/Model/GuaranteedSimulationServiceValue.md)
- [GuaranteedSimulationServiceViewableFrequencyCap](docs/Model/GuaranteedSimulationServiceViewableFrequencyCap.md)
- [GuaranteedSimulationServiceVimpsCustomPricingPackage](docs/Model/GuaranteedSimulationServiceVimpsCustomPricingPackage.md)
- [GuaranteedSimulationServiceVimpsReachPricingPackage](docs/Model/GuaranteedSimulationServiceVimpsReachPricingPackage.md)
- [GuaranteedSimulationServiceVimpsSOVPricingPackage](docs/Model/GuaranteedSimulationServiceVimpsSOVPricingPackage.md)
- [Label](docs/Model/Label.md)
- [LabelServiceGetResponse](docs/Model/LabelServiceGetResponse.md)
- [LabelServiceMutateResponse](docs/Model/LabelServiceMutateResponse.md)
- [LabelServiceOperation](docs/Model/LabelServiceOperation.md)
- [LabelServicePage](docs/Model/LabelServicePage.md)
- [LabelServiceReturnValue](docs/Model/LabelServiceReturnValue.md)
- [LabelServiceSelector](docs/Model/LabelServiceSelector.md)
- [LabelServiceValue](docs/Model/LabelServiceValue.md)
- [MediaServiceApprovalStatus](docs/Model/MediaServiceApprovalStatus.md)
- [MediaServiceCampaignBannerFlg](docs/Model/MediaServiceCampaignBannerFlg.md)
- [MediaServiceCreatedDateRange](docs/Model/MediaServiceCreatedDateRange.md)
- [MediaServiceDownloadSelector](docs/Model/MediaServiceDownloadSelector.md)
- [MediaServiceFileType](docs/Model/MediaServiceFileType.md)
- [MediaServiceGetResponse](docs/Model/MediaServiceGetResponse.md)
- [MediaServiceImageMedia](docs/Model/MediaServiceImageMedia.md)
- [MediaServiceLogoFlg](docs/Model/MediaServiceLogoFlg.md)
- [MediaServiceMutateResponse](docs/Model/MediaServiceMutateResponse.md)
- [MediaServiceOperation](docs/Model/MediaServiceOperation.md)
- [MediaServicePage](docs/Model/MediaServicePage.md)
- [MediaServiceRecord](docs/Model/MediaServiceRecord.md)
- [MediaServiceReturnValue](docs/Model/MediaServiceReturnValue.md)
- [MediaServiceRichFormatFlg](docs/Model/MediaServiceRichFormatFlg.md)
- [MediaServiceSelector](docs/Model/MediaServiceSelector.md)
- [MediaServiceThumbnailFlg](docs/Model/MediaServiceThumbnailFlg.md)
- [MediaServiceType](docs/Model/MediaServiceType.md)
- [MediaServiceUserStatus](docs/Model/MediaServiceUserStatus.md)
- [MediaServiceValue](docs/Model/MediaServiceValue.md)
- [PlacementUrlIdea](docs/Model/PlacementUrlIdea.md)
- [PlacementUrlIdeaServiceAdFormat](docs/Model/PlacementUrlIdeaServiceAdFormat.md)
- [PlacementUrlIdeaServiceAdFormatConditions](docs/Model/PlacementUrlIdeaServiceAdFormatConditions.md)
- [PlacementUrlIdeaServiceGetResponse](docs/Model/PlacementUrlIdeaServiceGetResponse.md)
- [PlacementUrlIdeaServicePage](docs/Model/PlacementUrlIdeaServicePage.md)
- [PlacementUrlIdeaServiceSelector](docs/Model/PlacementUrlIdeaServiceSelector.md)
- [PlacementUrlIdeaServiceValue](docs/Model/PlacementUrlIdeaServiceValue.md)
- [PlacementUrlList](docs/Model/PlacementUrlList.md)
- [PlacementUrlListServiceGetResponse](docs/Model/PlacementUrlListServiceGetResponse.md)
- [PlacementUrlListServiceIsRemoveFlg](docs/Model/PlacementUrlListServiceIsRemoveFlg.md)
- [PlacementUrlListServiceMutateResponse](docs/Model/PlacementUrlListServiceMutateResponse.md)
- [PlacementUrlListServiceOperation](docs/Model/PlacementUrlListServiceOperation.md)
- [PlacementUrlListServicePage](docs/Model/PlacementUrlListServicePage.md)
- [PlacementUrlListServiceReturnValue](docs/Model/PlacementUrlListServiceReturnValue.md)
- [PlacementUrlListServiceSelector](docs/Model/PlacementUrlListServiceSelector.md)
- [PlacementUrlListServiceUnknownDomainFlg](docs/Model/PlacementUrlListServiceUnknownDomainFlg.md)
- [PlacementUrlListServiceUrlActiveFlg](docs/Model/PlacementUrlListServiceUrlActiveFlg.md)
- [PlacementUrlListServiceUrlList](docs/Model/PlacementUrlListServiceUrlList.md)
- [PlacementUrlListServiceValue](docs/Model/PlacementUrlListServiceValue.md)
- [Recommendation](docs/Model/Recommendation.md)
- [RecommendationServiceCampaignBiddingStrategyToTargetCpa](docs/Model/RecommendationServiceCampaignBiddingStrategyToTargetCpa.md)
- [RecommendationServiceCampaignBiddingStrategyToTargetCpaCampaign](docs/Model/RecommendationServiceCampaignBiddingStrategyToTargetCpaCampaign.md)
- [RecommendationServiceDailyBudgetOver](docs/Model/RecommendationServiceDailyBudgetOver.md)
- [RecommendationServiceDailyBudgetOverCampaign](docs/Model/RecommendationServiceDailyBudgetOverCampaign.md)
- [RecommendationServiceGetResponse](docs/Model/RecommendationServiceGetResponse.md)
- [RecommendationServiceImpsShareBudgetLossOver](docs/Model/RecommendationServiceImpsShareBudgetLossOver.md)
- [RecommendationServiceImpsShareBudgetLossOverCampaign](docs/Model/RecommendationServiceImpsShareBudgetLossOverCampaign.md)
- [RecommendationServiceMigrateToYda](docs/Model/RecommendationServiceMigrateToYda.md)
- [RecommendationServiceMigrateToYdaCampaign](docs/Model/RecommendationServiceMigrateToYdaCampaign.md)
- [RecommendationServicePage](docs/Model/RecommendationServicePage.md)
- [RecommendationServiceSearchKeywordIdea](docs/Model/RecommendationServiceSearchKeywordIdea.md)
- [RecommendationServiceSearchKeywordIdeaSearchKeywordList](docs/Model/RecommendationServiceSearchKeywordIdeaSearchKeywordList.md)
- [RecommendationServiceSelector](docs/Model/RecommendationServiceSelector.md)
- [RecommendationServiceType](docs/Model/RecommendationServiceType.md)
- [RecommendationServiceValue](docs/Model/RecommendationServiceValue.md)
- [ReportDefinition](docs/Model/ReportDefinition.md)
- [ReportDefinitionServiceAccount](docs/Model/ReportDefinitionServiceAccount.md)
- [ReportDefinitionServiceConversionPathAccountSetting](docs/Model/ReportDefinitionServiceConversionPathAccountSetting.md)
- [ReportDefinitionServiceConversionPathFilter](docs/Model/ReportDefinitionServiceConversionPathFilter.md)
- [ReportDefinitionServiceConversionPathFilterOperator](docs/Model/ReportDefinitionServiceConversionPathFilterOperator.md)
- [ReportDefinitionServiceConversionPathFilterType](docs/Model/ReportDefinitionServiceConversionPathFilterType.md)
- [ReportDefinitionServiceConversionPathReportCondition](docs/Model/ReportDefinitionServiceConversionPathReportCondition.md)
- [ReportDefinitionServiceCrossCampaignBuying](docs/Model/ReportDefinitionServiceCrossCampaignBuying.md)
- [ReportDefinitionServiceCrossCampaignBuyingType](docs/Model/ReportDefinitionServiceCrossCampaignBuyingType.md)
- [ReportDefinitionServiceCrossCampaignGoal](docs/Model/ReportDefinitionServiceCrossCampaignGoal.md)
- [ReportDefinitionServiceCrossCampaignId](docs/Model/ReportDefinitionServiceCrossCampaignId.md)
- [ReportDefinitionServiceCrossCampaignReachesReportCondition](docs/Model/ReportDefinitionServiceCrossCampaignReachesReportCondition.md)
- [ReportDefinitionServiceCrossCampaignType](docs/Model/ReportDefinitionServiceCrossCampaignType.md)
- [ReportDefinitionServiceDateRange](docs/Model/ReportDefinitionServiceDateRange.md)
- [ReportDefinitionServiceDownloadSelector](docs/Model/ReportDefinitionServiceDownloadSelector.md)
- [ReportDefinitionServiceFieldAttribute](docs/Model/ReportDefinitionServiceFieldAttribute.md)
- [ReportDefinitionServiceFieldValue](docs/Model/ReportDefinitionServiceFieldValue.md)
- [ReportDefinitionServiceFilter](docs/Model/ReportDefinitionServiceFilter.md)
- [ReportDefinitionServiceFilterOperator](docs/Model/ReportDefinitionServiceFilterOperator.md)
- [ReportDefinitionServiceFrequencyRange](docs/Model/ReportDefinitionServiceFrequencyRange.md)
- [ReportDefinitionServiceFrequencyReportCondition](docs/Model/ReportDefinitionServiceFrequencyReportCondition.md)
- [ReportDefinitionServiceGetReportFields](docs/Model/ReportDefinitionServiceGetReportFields.md)
- [ReportDefinitionServiceGetReportFieldsResponse](docs/Model/ReportDefinitionServiceGetReportFieldsResponse.md)
- [ReportDefinitionServiceGetResponse](docs/Model/ReportDefinitionServiceGetResponse.md)
- [ReportDefinitionServiceIncludeViewInteractionFlg](docs/Model/ReportDefinitionServiceIncludeViewInteractionFlg.md)
- [ReportDefinitionServiceMutateResponse](docs/Model/ReportDefinitionServiceMutateResponse.md)
- [ReportDefinitionServiceOperation](docs/Model/ReportDefinitionServiceOperation.md)
- [ReportDefinitionServicePage](docs/Model/ReportDefinitionServicePage.md)
- [ReportDefinitionServiceProductType](docs/Model/ReportDefinitionServiceProductType.md)
- [ReportDefinitionServiceReachReportCondition](docs/Model/ReportDefinitionServiceReachReportCondition.md)
- [ReportDefinitionServiceReportCompressType](docs/Model/ReportDefinitionServiceReportCompressType.md)
- [ReportDefinitionServiceReportDateRangeType](docs/Model/ReportDefinitionServiceReportDateRangeType.md)
- [ReportDefinitionServiceReportDecimalPartDisplayType](docs/Model/ReportDefinitionServiceReportDecimalPartDisplayType.md)
- [ReportDefinitionServiceReportDownloadEncode](docs/Model/ReportDefinitionServiceReportDownloadEncode.md)
- [ReportDefinitionServiceReportDownloadFormat](docs/Model/ReportDefinitionServiceReportDownloadFormat.md)
- [ReportDefinitionServiceReportJobStatus](docs/Model/ReportDefinitionServiceReportJobStatus.md)
- [ReportDefinitionServiceReportLanguage](docs/Model/ReportDefinitionServiceReportLanguage.md)
- [ReportDefinitionServiceReportSkipColumnHeader](docs/Model/ReportDefinitionServiceReportSkipColumnHeader.md)
- [ReportDefinitionServiceReportSkipReportSummary](docs/Model/ReportDefinitionServiceReportSkipReportSummary.md)
- [ReportDefinitionServiceReportSortField](docs/Model/ReportDefinitionServiceReportSortField.md)
- [ReportDefinitionServiceReportSortType](docs/Model/ReportDefinitionServiceReportSortType.md)
- [ReportDefinitionServiceReportTypeCondition](docs/Model/ReportDefinitionServiceReportTypeCondition.md)
- [ReportDefinitionServiceReturnValue](docs/Model/ReportDefinitionServiceReturnValue.md)
- [ReportDefinitionServiceSelector](docs/Model/ReportDefinitionServiceSelector.md)
- [ReportDefinitionServiceType](docs/Model/ReportDefinitionServiceType.md)
- [ReportDefinitionServiceValue](docs/Model/ReportDefinitionServiceValue.md)
- [RetargetingList](docs/Model/RetargetingList.md)
- [RetargetingListServiceCombination](docs/Model/RetargetingListServiceCombination.md)
- [RetargetingListServiceCombinationTargetList](docs/Model/RetargetingListServiceCombinationTargetList.md)
- [RetargetingListServiceCompareOperator](docs/Model/RetargetingListServiceCompareOperator.md)
- [RetargetingListServiceCustomAudienceTargetList](docs/Model/RetargetingListServiceCustomAudienceTargetList.md)
- [RetargetingListServiceDeliveryStatus](docs/Model/RetargetingListServiceDeliveryStatus.md)
- [RetargetingListServiceGetResponse](docs/Model/RetargetingListServiceGetResponse.md)
- [RetargetingListServiceGetUploadUserListResponse](docs/Model/RetargetingListServiceGetUploadUserListResponse.md)
- [RetargetingListServiceIsOpen](docs/Model/RetargetingListServiceIsOpen.md)
- [RetargetingListServiceIsPreset](docs/Model/RetargetingListServiceIsPreset.md)
- [RetargetingListServiceIsRemoveFlg](docs/Model/RetargetingListServiceIsRemoveFlg.md)
- [RetargetingListServiceJobStatus](docs/Model/RetargetingListServiceJobStatus.md)
- [RetargetingListServiceLogicalOperator](docs/Model/RetargetingListServiceLogicalOperator.md)
- [RetargetingListServiceMutateResponse](docs/Model/RetargetingListServiceMutateResponse.md)
- [RetargetingListServiceOperation](docs/Model/RetargetingListServiceOperation.md)
- [RetargetingListServicePage](docs/Model/RetargetingListServicePage.md)
- [RetargetingListServiceReturnValue](docs/Model/RetargetingListServiceReturnValue.md)
- [RetargetingListServiceRule](docs/Model/RetargetingListServiceRule.md)
- [RetargetingListServiceRuleCondition](docs/Model/RetargetingListServiceRuleCondition.md)
- [RetargetingListServiceRuleTargetList](docs/Model/RetargetingListServiceRuleTargetList.md)
- [RetargetingListServiceRuleType](docs/Model/RetargetingListServiceRuleType.md)
- [RetargetingListServiceSelector](docs/Model/RetargetingListServiceSelector.md)
- [RetargetingListServiceSharingStatusFilterType](docs/Model/RetargetingListServiceSharingStatusFilterType.md)
- [RetargetingListServiceSimilarityTargetList](docs/Model/RetargetingListServiceSimilarityTargetList.md)
- [RetargetingListServiceTargetList](docs/Model/RetargetingListServiceTargetList.md)
- [RetargetingListServiceTargetListData](docs/Model/RetargetingListServiceTargetListData.md)
- [RetargetingListServiceTargetListSize](docs/Model/RetargetingListServiceTargetListSize.md)
- [RetargetingListServiceTargetListSizeReaches](docs/Model/RetargetingListServiceTargetListSizeReaches.md)
- [RetargetingListServiceTargetListType](docs/Model/RetargetingListServiceTargetListType.md)
- [RetargetingListServiceUploadUserListCompressType](docs/Model/RetargetingListServiceUploadUserListCompressType.md)
- [RetargetingListServiceUploadUserListJob](docs/Model/RetargetingListServiceUploadUserListJob.md)
- [RetargetingListServiceUploadUserListPage](docs/Model/RetargetingListServiceUploadUserListPage.md)
- [RetargetingListServiceUploadUserListResponse](docs/Model/RetargetingListServiceUploadUserListResponse.md)
- [RetargetingListServiceUploadUserListReturnValue](docs/Model/RetargetingListServiceUploadUserListReturnValue.md)
- [RetargetingListServiceUploadUserListStatusSelector](docs/Model/RetargetingListServiceUploadUserListStatusSelector.md)
- [RetargetingListServiceUploadUserListUploadType](docs/Model/RetargetingListServiceUploadUserListUploadType.md)
- [RetargetingListServiceUploadUserListValue](docs/Model/RetargetingListServiceUploadUserListValue.md)
- [RetargetingListServiceValue](docs/Model/RetargetingListServiceValue.md)
- [RetargetingTag](docs/Model/RetargetingTag.md)
- [RetargetingTagServiceApprovalStatus](docs/Model/RetargetingTagServiceApprovalStatus.md)
- [RetargetingTagServiceGetResponse](docs/Model/RetargetingTagServiceGetResponse.md)
- [RetargetingTagServiceMutateResponse](docs/Model/RetargetingTagServiceMutateResponse.md)
- [RetargetingTagServiceOperation](docs/Model/RetargetingTagServiceOperation.md)
- [RetargetingTagServicePage](docs/Model/RetargetingTagServicePage.md)
- [RetargetingTagServiceReturnValue](docs/Model/RetargetingTagServiceReturnValue.md)
- [RetargetingTagServiceSelector](docs/Model/RetargetingTagServiceSelector.md)
- [RetargetingTagServiceValue](docs/Model/RetargetingTagServiceValue.md)
- [SearchKeywordIdea](docs/Model/SearchKeywordIdea.md)
- [SearchKeywordIdeaServiceAvailabilityStatus](docs/Model/SearchKeywordIdeaServiceAvailabilityStatus.md)
- [SearchKeywordIdeaServiceGetResponse](docs/Model/SearchKeywordIdeaServiceGetResponse.md)
- [SearchKeywordIdeaServiceKeywordFrequency](docs/Model/SearchKeywordIdeaServiceKeywordFrequency.md)
- [SearchKeywordIdeaServiceKeywordRecency](docs/Model/SearchKeywordIdeaServiceKeywordRecency.md)
- [SearchKeywordIdeaServiceMatchType](docs/Model/SearchKeywordIdeaServiceMatchType.md)
- [SearchKeywordIdeaServicePage](docs/Model/SearchKeywordIdeaServicePage.md)
- [SearchKeywordIdeaServiceSelector](docs/Model/SearchKeywordIdeaServiceSelector.md)
- [SearchKeywordIdeaServiceSortField](docs/Model/SearchKeywordIdeaServiceSortField.md)
- [SearchKeywordIdeaServiceSortType](docs/Model/SearchKeywordIdeaServiceSortType.md)
- [SearchKeywordIdeaServiceValue](docs/Model/SearchKeywordIdeaServiceValue.md)
- [SearchKeywordList](docs/Model/SearchKeywordList.md)
- [SearchKeywordListServiceDeliveryStatus](docs/Model/SearchKeywordListServiceDeliveryStatus.md)
- [SearchKeywordListServiceGetResponse](docs/Model/SearchKeywordListServiceGetResponse.md)
- [SearchKeywordListServiceIsRemoveFlg](docs/Model/SearchKeywordListServiceIsRemoveFlg.md)
- [SearchKeywordListServiceKeywordFrequency](docs/Model/SearchKeywordListServiceKeywordFrequency.md)
- [SearchKeywordListServiceKeywordRecency](docs/Model/SearchKeywordListServiceKeywordRecency.md)
- [SearchKeywordListServiceMutateResponse](docs/Model/SearchKeywordListServiceMutateResponse.md)
- [SearchKeywordListServiceOperation](docs/Model/SearchKeywordListServiceOperation.md)
- [SearchKeywordListServicePage](docs/Model/SearchKeywordListServicePage.md)
- [SearchKeywordListServiceReturnValue](docs/Model/SearchKeywordListServiceReturnValue.md)
- [SearchKeywordListServiceSearchKeyword](docs/Model/SearchKeywordListServiceSearchKeyword.md)
- [SearchKeywordListServiceSelector](docs/Model/SearchKeywordListServiceSelector.md)
- [SearchKeywordListServiceValue](docs/Model/SearchKeywordListServiceValue.md)
- [SearchLift](docs/Model/SearchLift.md)
- [SearchLiftServiceGetResponse](docs/Model/SearchLiftServiceGetResponse.md)
- [SearchLiftServiceKeyword](docs/Model/SearchLiftServiceKeyword.md)
- [SearchLiftServiceKeywordCategory](docs/Model/SearchLiftServiceKeywordCategory.md)
- [SearchLiftServicePage](docs/Model/SearchLiftServicePage.md)
- [SearchLiftServiceSelector](docs/Model/SearchLiftServiceSelector.md)
- [SearchLiftServiceValue](docs/Model/SearchLiftServiceValue.md)
- [Stats](docs/Model/Stats.md)
- [StatsServiceAdGroupStatsValue](docs/Model/StatsServiceAdGroupStatsValue.md)
- [StatsServiceAdScheduleTarget](docs/Model/StatsServiceAdScheduleTarget.md)
- [StatsServiceAdStatsValue](docs/Model/StatsServiceAdStatsValue.md)
- [StatsServiceAge](docs/Model/StatsServiceAge.md)
- [StatsServiceAgeTarget](docs/Model/StatsServiceAgeTarget.md)
- [StatsServiceAppTarget](docs/Model/StatsServiceAppTarget.md)
- [StatsServiceAudienceCategoryTarget](docs/Model/StatsServiceAudienceCategoryTarget.md)
- [StatsServiceCampaignStatsValue](docs/Model/StatsServiceCampaignStatsValue.md)
- [StatsServiceCarrierTarget](docs/Model/StatsServiceCarrierTarget.md)
- [StatsServiceCarrierType](docs/Model/StatsServiceCarrierType.md)
- [StatsServiceDayOfWeek](docs/Model/StatsServiceDayOfWeek.md)
- [StatsServiceDeviceAppType](docs/Model/StatsServiceDeviceAppType.md)
- [StatsServiceDeviceOsType](docs/Model/StatsServiceDeviceOsType.md)
- [StatsServiceDeviceTarget](docs/Model/StatsServiceDeviceTarget.md)
- [StatsServiceDeviceType](docs/Model/StatsServiceDeviceType.md)
- [StatsServiceEstimateFlg](docs/Model/StatsServiceEstimateFlg.md)
- [StatsServiceGender](docs/Model/StatsServiceGender.md)
- [StatsServiceGenderTarget](docs/Model/StatsServiceGenderTarget.md)
- [StatsServiceGeoTarget](docs/Model/StatsServiceGeoTarget.md)
- [StatsServiceGetResponse](docs/Model/StatsServiceGetResponse.md)
- [StatsServiceImageStatsValue](docs/Model/StatsServiceImageStatsValue.md)
- [StatsServiceInterestCategoryTarget](docs/Model/StatsServiceInterestCategoryTarget.md)
- [StatsServiceOsTarget](docs/Model/StatsServiceOsTarget.md)
- [StatsServiceOsVersionTarget](docs/Model/StatsServiceOsVersionTarget.md)
- [StatsServicePage](docs/Model/StatsServicePage.md)
- [StatsServicePeriod](docs/Model/StatsServicePeriod.md)
- [StatsServicePeriodCustomDate](docs/Model/StatsServicePeriodCustomDate.md)
- [StatsServicePeriodDatetime](docs/Model/StatsServicePeriodDatetime.md)
- [StatsServicePlacementTarget](docs/Model/StatsServicePlacementTarget.md)
- [StatsServicePlacementUrlListType](docs/Model/StatsServicePlacementUrlListType.md)
- [StatsServiceSearchTarget](docs/Model/StatsServiceSearchTarget.md)
- [StatsServiceSelector](docs/Model/StatsServiceSelector.md)
- [StatsServiceSiteCategoryTarget](docs/Model/StatsServiceSiteCategoryTarget.md)
- [StatsServiceSiteRetargetingTarget](docs/Model/StatsServiceSiteRetargetingTarget.md)
- [StatsServiceStatsPeriod](docs/Model/StatsServiceStatsPeriod.md)
- [StatsServiceTarget](docs/Model/StatsServiceTarget.md)
- [StatsServiceTargetListDeliverType](docs/Model/StatsServiceTargetListDeliverType.md)
- [StatsServiceTargetSetting](docs/Model/StatsServiceTargetSetting.md)
- [StatsServiceTargetStatsValue](docs/Model/StatsServiceTargetStatsValue.md)
- [StatsServiceTargetType](docs/Model/StatsServiceTargetType.md)
- [StatsServiceType](docs/Model/StatsServiceType.md)
- [StatsServiceValue](docs/Model/StatsServiceValue.md)
- [StatsServiceVideoStatsValue](docs/Model/StatsServiceVideoStatsValue.md)
- [Video](docs/Model/Video.md)
- [VideoServiceApprovalStatus](docs/Model/VideoServiceApprovalStatus.md)
- [VideoServiceCreatedDateRange](docs/Model/VideoServiceCreatedDateRange.md)
- [VideoServiceDownloadSelector](docs/Model/VideoServiceDownloadSelector.md)
- [VideoServiceFileType](docs/Model/VideoServiceFileType.md)
- [VideoServiceGetResponse](docs/Model/VideoServiceGetResponse.md)
- [VideoServiceMutateResponse](docs/Model/VideoServiceMutateResponse.md)
- [VideoServiceOperation](docs/Model/VideoServiceOperation.md)
- [VideoServicePage](docs/Model/VideoServicePage.md)
- [VideoServiceProcessStatus](docs/Model/VideoServiceProcessStatus.md)
- [VideoServiceQualityType](docs/Model/VideoServiceQualityType.md)
- [VideoServiceReturnValue](docs/Model/VideoServiceReturnValue.md)
- [VideoServiceSelector](docs/Model/VideoServiceSelector.md)
- [VideoServiceSetting](docs/Model/VideoServiceSetting.md)
- [VideoServiceUploadData](docs/Model/VideoServiceUploadData.md)
- [VideoServiceUploadResponse](docs/Model/VideoServiceUploadResponse.md)
- [VideoServiceUploadReturnValue](docs/Model/VideoServiceUploadReturnValue.md)
- [VideoServiceUploadValue](docs/Model/VideoServiceUploadValue.md)
- [VideoServiceUserStatus](docs/Model/VideoServiceUserStatus.md)
- [VideoServiceValue](docs/Model/VideoServiceValue.md)

## Authorization

### oAuth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://biz-oauth.yahoo.co.jp/oauth/v1/authorize`
- **Scopes**: 
    - **yahooads**: アプリケーションを経由したYahoo!広告の各機能の操作/Operation by each function of Yahoo! JAPAN Ads via applications.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v4`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
