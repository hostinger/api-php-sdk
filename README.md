# Hostinger API PHP SDK

## About
This is a PHP SDK for the Hostinger API. For more information, please visit [https://developers.hostinger.com](https://developers.hostinger.com).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the package via [Composer](https://getcomposer.org/), run the following command:

```bash
composer require hostinger/api-php-sdk
```

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: apiToken
$config = Hostinger\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Hostinger\Api\AgencyHostingCacheApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    client: new GuzzleHttp\Client(),
    config: $config
);
$websiteUid = zpwlGlp19; // string | Agency Plan website UID

try {
    $result = $apiInstance->clearAgencyPlanWebsiteCacheV1($websiteUid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgencyHostingCacheApi->clearAgencyPlanWebsiteCacheV1: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://developers.hostinger.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AgencyHostingCacheApi* | [**clearAgencyPlanWebsiteCacheV1**](docs/Api/AgencyHostingCacheApi.md#clearagencyplanwebsitecachev1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/cache | Clear Agency Plan website cache
*AgencyHostingCronJobsApi* | [**createAgencyPlanWebsiteCronJobV1**](docs/Api/AgencyHostingCronJobsApi.md#createagencyplanwebsitecronjobv1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/cron-jobs | Create Agency Plan website cron job
*AgencyHostingCronJobsApi* | [**deleteAgencyPlanWebsiteCronJobV1**](docs/Api/AgencyHostingCronJobsApi.md#deleteagencyplanwebsitecronjobv1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/cron-jobs/{uuid} | Delete Agency Plan website cron job
*AgencyHostingCronJobsApi* | [**listAgencyPlanWebsiteCronJobsV1**](docs/Api/AgencyHostingCronJobsApi.md#listagencyplanwebsitecronjobsv1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/cron-jobs | List Agency Plan website cron jobs
*AgencyHostingDatabasesApi* | [**createAgencyPlanWebsiteDatabaseUserV1**](docs/Api/AgencyHostingDatabasesApi.md#createagencyplanwebsitedatabaseuserv1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/databases/{database_name}/users | Create Agency Plan website database user
*AgencyHostingDatabasesApi* | [**createAgencyPlanWebsiteDatabaseV1**](docs/Api/AgencyHostingDatabasesApi.md#createagencyplanwebsitedatabasev1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/databases | Create Agency Plan website database
*AgencyHostingDatabasesApi* | [**deleteAgencyPlanWebsiteDatabaseUserV1**](docs/Api/AgencyHostingDatabasesApi.md#deleteagencyplanwebsitedatabaseuserv1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/databases/{database_name}/users/{database_user_name} | Delete Agency Plan website database user
*AgencyHostingDatabasesApi* | [**deleteAgencyPlanWebsiteDatabaseV1**](docs/Api/AgencyHostingDatabasesApi.md#deleteagencyplanwebsitedatabasev1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/databases/{database_name} | Delete Agency Plan website database
*AgencyHostingDatabasesApi* | [**listAgencyPlanWebsiteDatabasesV1**](docs/Api/AgencyHostingDatabasesApi.md#listagencyplanwebsitedatabasesv1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/databases | List Agency Plan website databases
*AgencyHostingDatacentersApi* | [**listAvailableDatacentersForAnAgencyPlanOrderV1**](docs/Api/AgencyHostingDatacentersApi.md#listavailabledatacentersforanagencyplanorderv1) | **GET** /api/agency-hosting/v1/orders/{order_id}/datacenters | List available datacenters for an Agency Plan order
*AgencyHostingDomainsApi* | [**changeAgencyPlanWebsiteDomainV1**](docs/Api/AgencyHostingDomainsApi.md#changeagencyplanwebsitedomainv1) | **PUT** /api/agency-hosting/v1/websites/{website_uid}/domains/{from_domain} | Change Agency Plan website domain
*AgencyHostingDomainsApi* | [**linkDomainToAgencyPlanWebsiteV1**](docs/Api/AgencyHostingDomainsApi.md#linkdomaintoagencyplanwebsitev1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/domains | Link domain to Agency Plan website
*AgencyHostingDomainsApi* | [**listAgencyPlanDomainsV1**](docs/Api/AgencyHostingDomainsApi.md#listagencyplandomainsv1) | **GET** /api/agency-hosting/v1/domains | List Agency Plan domains
*AgencyHostingDomainsApi* | [**unlinkDomainFromAgencyPlanWebsiteV1**](docs/Api/AgencyHostingDomainsApi.md#unlinkdomainfromagencyplanwebsitev1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid}/domains/{domain} | Unlink domain from Agency Plan website
*AgencyHostingFilesApi* | [**importAgencyPlanWebsiteFromArchiveV1**](docs/Api/AgencyHostingFilesApi.md#importagencyplanwebsitefromarchivev1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/files/import-archive | Import Agency Plan website from archive
*AgencyHostingWebsiteSetupsApi* | [**getAgencyPlanWebsiteSetupStatusV1**](docs/Api/AgencyHostingWebsiteSetupsApi.md#getagencyplanwebsitesetupstatusv1) | **GET** /api/agency-hosting/v1/orders/{order_id}/websites/setups/{setup_uuid} | Get Agency Plan website setup status
*AgencyHostingWebsiteSetupsApi* | [**provisionANewAgencyPlanWebsiteV1**](docs/Api/AgencyHostingWebsiteSetupsApi.md#provisionanewagencyplanwebsitev1) | **POST** /api/agency-hosting/v1/orders/{order_id}/websites/setups | Provision a new Agency Plan website
*AgencyHostingWebsitesApi* | [**buildAgencyPlanWebsiteNodeJSAssetsV1**](docs/Api/AgencyHostingWebsitesApi.md#buildagencyplanwebsitenodejsassetsv1) | **POST** /api/agency-hosting/v1/websites/{website_uid}/build-assets | Build Agency Plan website NodeJS assets
*AgencyHostingWebsitesApi* | [**deleteAgencyPlanWebsiteV1**](docs/Api/AgencyHostingWebsitesApi.md#deleteagencyplanwebsitev1) | **DELETE** /api/agency-hosting/v1/websites/{website_uid} | Delete Agency Plan website
*AgencyHostingWebsitesApi* | [**getAgencyPlanWebsiteDetailsV1**](docs/Api/AgencyHostingWebsitesApi.md#getagencyplanwebsitedetailsv1) | **GET** /api/agency-hosting/v1/websites/{website_uid} | Get Agency Plan website details
*AgencyHostingWebsitesApi* | [**listRunningAgencyPlanWebsiteProcessesV1**](docs/Api/AgencyHostingWebsitesApi.md#listrunningagencyplanwebsiteprocessesv1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/processes | List running Agency Plan website processes
*AgencyHostingWordPressApi* | [**changeAgencyPlanWebsiteWordPressCoreVersionV1**](docs/Api/AgencyHostingWordPressApi.md#changeagencyplanwebsitewordpresscoreversionv1) | **PATCH** /api/agency-hosting/v1/websites/{website_uid}/wordpress/settings/version | Change Agency Plan website WordPress core version
*AgencyHostingWordPressApi* | [**getAgencyPlanWebsiteWordPressSettingsV1**](docs/Api/AgencyHostingWordPressApi.md#getagencyplanwebsitewordpresssettingsv1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/wordpress/settings | Get Agency Plan website WordPress settings
*AgencyHostingWordPressApi* | [**listAvailableWordPressVersionsForAnAgencyPlanWebsiteV1**](docs/Api/AgencyHostingWordPressApi.md#listavailablewordpressversionsforanagencyplanwebsitev1) | **GET** /api/agency-hosting/v1/websites/{website_uid}/wordpress/settings/versions | List available WordPress versions for an Agency Plan website
*BillingCatalogApi* | [**getCatalogItemListV1**](docs/Api/BillingCatalogApi.md#getcatalogitemlistv1) | **GET** /api/billing/v1/catalog | Get catalog item list
*BillingOrdersApi* | [**createPurchaseOrderV1**](docs/Api/BillingOrdersApi.md#createpurchaseorderv1) | **POST** /api/billing/v1/orders | Create purchase order
*BillingPaymentMethodsApi* | [**deletePaymentMethodV1**](docs/Api/BillingPaymentMethodsApi.md#deletepaymentmethodv1) | **DELETE** /api/billing/v1/payment-methods/{paymentMethodId} | Delete payment method
*BillingPaymentMethodsApi* | [**getPaymentMethodListV1**](docs/Api/BillingPaymentMethodsApi.md#getpaymentmethodlistv1) | **GET** /api/billing/v1/payment-methods | Get payment method list
*BillingPaymentMethodsApi* | [**setDefaultPaymentMethodV1**](docs/Api/BillingPaymentMethodsApi.md#setdefaultpaymentmethodv1) | **POST** /api/billing/v1/payment-methods/{paymentMethodId} | Set default payment method
*BillingSubscriptionsApi* | [**disableAutoRenewalV1**](docs/Api/BillingSubscriptionsApi.md#disableautorenewalv1) | **DELETE** /api/billing/v1/subscriptions/{subscriptionId}/auto-renewal/disable | Disable auto-renewal
*BillingSubscriptionsApi* | [**enableAutoRenewalV1**](docs/Api/BillingSubscriptionsApi.md#enableautorenewalv1) | **PATCH** /api/billing/v1/subscriptions/{subscriptionId}/auto-renewal/enable | Enable auto-renewal
*BillingSubscriptionsApi* | [**getSubscriptionListV1**](docs/Api/BillingSubscriptionsApi.md#getsubscriptionlistv1) | **GET** /api/billing/v1/subscriptions | Get subscription list
*DNSSnapshotApi* | [**getDNSSnapshotListV1**](docs/Api/DNSSnapshotApi.md#getdnssnapshotlistv1) | **GET** /api/dns/v1/snapshots/{domain} | Get DNS snapshot list
*DNSSnapshotApi* | [**getDNSSnapshotV1**](docs/Api/DNSSnapshotApi.md#getdnssnapshotv1) | **GET** /api/dns/v1/snapshots/{domain}/{snapshotId} | Get DNS snapshot
*DNSSnapshotApi* | [**restoreDNSSnapshotV1**](docs/Api/DNSSnapshotApi.md#restorednssnapshotv1) | **POST** /api/dns/v1/snapshots/{domain}/{snapshotId}/restore | Restore DNS snapshot
*DNSZoneApi* | [**deleteDNSRecordsV1**](docs/Api/DNSZoneApi.md#deletednsrecordsv1) | **DELETE** /api/dns/v1/zones/{domain} | Delete DNS records
*DNSZoneApi* | [**getDNSRecordsV1**](docs/Api/DNSZoneApi.md#getdnsrecordsv1) | **GET** /api/dns/v1/zones/{domain} | Get DNS records
*DNSZoneApi* | [**resetDNSRecordsV1**](docs/Api/DNSZoneApi.md#resetdnsrecordsv1) | **POST** /api/dns/v1/zones/{domain}/reset | Reset DNS records
*DNSZoneApi* | [**updateDNSRecordsV1**](docs/Api/DNSZoneApi.md#updatednsrecordsv1) | **PUT** /api/dns/v1/zones/{domain} | Update DNS records
*DNSZoneApi* | [**validateDNSRecordsV1**](docs/Api/DNSZoneApi.md#validatednsrecordsv1) | **POST** /api/dns/v1/zones/{domain}/validate | Validate DNS records
*DomainAccessVerifierVerificationsApi* | [**getDomainVerificationsDIRECT**](docs/Api/DomainAccessVerifierVerificationsApi.md#getdomainverificationsdirect) | **GET** /api/v2/direct/verifications/active | Get domain verifications
*DomainsAvailabilityApi* | [**checkDomainAvailabilityV1**](docs/Api/DomainsAvailabilityApi.md#checkdomainavailabilityv1) | **POST** /api/domains/v1/availability | Check domain availability
*DomainsForwardingApi* | [**createDomainForwardingV1**](docs/Api/DomainsForwardingApi.md#createdomainforwardingv1) | **POST** /api/domains/v1/forwarding | Create domain forwarding
*DomainsForwardingApi* | [**deleteDomainForwardingV1**](docs/Api/DomainsForwardingApi.md#deletedomainforwardingv1) | **DELETE** /api/domains/v1/forwarding/{domain} | Delete domain forwarding
*DomainsForwardingApi* | [**getDomainForwardingV1**](docs/Api/DomainsForwardingApi.md#getdomainforwardingv1) | **GET** /api/domains/v1/forwarding/{domain} | Get domain forwarding
*DomainsForwardingApi* | [**updateDomainForwardingV1**](docs/Api/DomainsForwardingApi.md#updatedomainforwardingv1) | **PUT** /api/domains/v1/forwarding/{domain} | Update domain forwarding
*DomainsPortfolioApi* | [**disableDomainLockV1**](docs/Api/DomainsPortfolioApi.md#disabledomainlockv1) | **DELETE** /api/domains/v1/portfolio/{domain}/domain-lock | Disable domain lock
*DomainsPortfolioApi* | [**disablePrivacyProtectionV1**](docs/Api/DomainsPortfolioApi.md#disableprivacyprotectionv1) | **DELETE** /api/domains/v1/portfolio/{domain}/privacy-protection | Disable privacy protection
*DomainsPortfolioApi* | [**enableDomainLockV1**](docs/Api/DomainsPortfolioApi.md#enabledomainlockv1) | **PUT** /api/domains/v1/portfolio/{domain}/domain-lock | Enable domain lock
*DomainsPortfolioApi* | [**enablePrivacyProtectionV1**](docs/Api/DomainsPortfolioApi.md#enableprivacyprotectionv1) | **PUT** /api/domains/v1/portfolio/{domain}/privacy-protection | Enable privacy protection
*DomainsPortfolioApi* | [**getDomainAuthorizationCodeV1**](docs/Api/DomainsPortfolioApi.md#getdomainauthorizationcodev1) | **GET** /api/domains/v1/portfolio/{domain}/auth-code | Get domain authorization code
*DomainsPortfolioApi* | [**getDomainDetailsV1**](docs/Api/DomainsPortfolioApi.md#getdomaindetailsv1) | **GET** /api/domains/v1/portfolio/{domain} | Get domain details
*DomainsPortfolioApi* | [**getDomainListV1**](docs/Api/DomainsPortfolioApi.md#getdomainlistv1) | **GET** /api/domains/v1/portfolio | Get domain list
*DomainsPortfolioApi* | [**getDomainRenewalInformationV1**](docs/Api/DomainsPortfolioApi.md#getdomainrenewalinformationv1) | **GET** /api/domains/v1/portfolio/{domain}/renewal | Get domain renewal information
*DomainsPortfolioApi* | [**purchaseNewDomainV1**](docs/Api/DomainsPortfolioApi.md#purchasenewdomainv1) | **POST** /api/domains/v1/portfolio | Purchase new domain
*DomainsPortfolioApi* | [**updateDomainNameserversV1**](docs/Api/DomainsPortfolioApi.md#updatedomainnameserversv1) | **PUT** /api/domains/v1/portfolio/{domain}/nameservers | Update domain nameservers
*DomainsTransferApi* | [**getTransferListV1**](docs/Api/DomainsTransferApi.md#gettransferlistv1) | **GET** /api/domains/v1/transfers | Get transfer list
*DomainsTransferApi* | [**getTransferV1**](docs/Api/DomainsTransferApi.md#gettransferv1) | **GET** /api/domains/v1/transfers/{domain} | Get transfer
*DomainsWHOISApi* | [**createWHOISProfileV1**](docs/Api/DomainsWHOISApi.md#createwhoisprofilev1) | **POST** /api/domains/v1/whois | Create WHOIS profile
*DomainsWHOISApi* | [**deleteWHOISProfileV1**](docs/Api/DomainsWHOISApi.md#deletewhoisprofilev1) | **DELETE** /api/domains/v1/whois/{whoisId} | Delete WHOIS profile
*DomainsWHOISApi* | [**getWHOISProfileListV1**](docs/Api/DomainsWHOISApi.md#getwhoisprofilelistv1) | **GET** /api/domains/v1/whois | Get WHOIS profile list
*DomainsWHOISApi* | [**getWHOISProfileUsageV1**](docs/Api/DomainsWHOISApi.md#getwhoisprofileusagev1) | **GET** /api/domains/v1/whois/{whoisId}/usage | Get WHOIS profile usage
*DomainsWHOISApi* | [**getWHOISProfileV1**](docs/Api/DomainsWHOISApi.md#getwhoisprofilev1) | **GET** /api/domains/v1/whois/{whoisId} | Get WHOIS profile
*EcommerceMiscellaneousApi* | [**getCustomStorefrontSetupInstructionsV1**](docs/Api/EcommerceMiscellaneousApi.md#getcustomstorefrontsetupinstructionsv1) | **GET** /api/ecommerce/v1/miscellaneous/custom-storefront-instructions | Get custom storefront setup instructions
*EcommercePaymentsApi* | [**enableManualPaymentMethodV1**](docs/Api/EcommercePaymentsApi.md#enablemanualpaymentmethodv1) | **POST** /api/ecommerce/v1/stores/{store_id}/payment-methods/manual | Enable manual payment method
*EcommerceProductsApi* | [**createDigitalProductV1**](docs/Api/EcommerceProductsApi.md#createdigitalproductv1) | **POST** /api/ecommerce/v1/stores/{store_id}/products/digital | Create digital product
*EcommerceProductsApi* | [**createPhysicalProductV1**](docs/Api/EcommerceProductsApi.md#createphysicalproductv1) | **POST** /api/ecommerce/v1/stores/{store_id}/products/physical | Create physical product
*EcommerceSalesChannelsApi* | [**createCustomSalesChannelV1**](docs/Api/EcommerceSalesChannelsApi.md#createcustomsaleschannelv1) | **POST** /api/ecommerce/v1/stores/{store_id}/sales-channels | Create custom sales channel
*EcommerceSalesChannelsApi* | [**listSalesChannelsV1**](docs/Api/EcommerceSalesChannelsApi.md#listsaleschannelsv1) | **GET** /api/ecommerce/v1/stores/{store_id}/sales-channels | List sales channels
*EcommerceSalesChannelsApi* | [**updateSalesChannelV1**](docs/Api/EcommerceSalesChannelsApi.md#updatesaleschannelv1) | **PATCH** /api/ecommerce/v1/stores/{store_id}/sales-channels/{sales_channel_id} | Update sales channel
*EcommerceShippingApi* | [**setStoreShippingV1**](docs/Api/EcommerceShippingApi.md#setstoreshippingv1) | **POST** /api/ecommerce/v1/stores/{store_id}/shipping | Set store shipping
*EcommerceStoresApi* | [**createStoreV1**](docs/Api/EcommerceStoresApi.md#createstorev1) | **POST** /api/ecommerce/v1/stores | Create store
*EcommerceStoresApi* | [**deleteStoreV1**](docs/Api/EcommerceStoresApi.md#deletestorev1) | **DELETE** /api/ecommerce/v1/stores/{store_id} | Delete store
*EcommerceStoresApi* | [**getStoreMetadataV1**](docs/Api/EcommerceStoresApi.md#getstoremetadatav1) | **GET** /api/ecommerce/v1/stores/{store_id}/metadata | Get store metadata
*EcommerceStoresApi* | [**getStoresV1**](docs/Api/EcommerceStoresApi.md#getstoresv1) | **GET** /api/ecommerce/v1/stores | Get stores
*HorizonsWebsitesApi* | [**createWebsiteV1**](docs/Api/HorizonsWebsitesApi.md#createwebsitev1) | **POST** /api/horizons/v1/websites | Create website
*HorizonsWebsitesApi* | [**getWebsiteV1**](docs/Api/HorizonsWebsitesApi.md#getwebsitev1) | **GET** /api/horizons/v1/websites/{websiteId} | Get website
*HostingCacheApi* | [**clearWebsiteCacheV1**](docs/Api/HostingCacheApi.md#clearwebsitecachev1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/cache/clear | Clear website cache
*HostingCacheApi* | [**toggleCachelessModeV1**](docs/Api/HostingCacheApi.md#togglecachelessmodev1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/cacheless-mode/toggle | Toggle cacheless mode
*HostingCacheApi* | [**toggleWebsiteCacheV1**](docs/Api/HostingCacheApi.md#togglewebsitecachev1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/cache/toggle | Toggle website cache
*HostingCronJobsApi* | [**createAccountCronJobV1**](docs/Api/HostingCronJobsApi.md#createaccountcronjobv1) | **POST** /api/hosting/v1/accounts/{username}/cron-jobs | Create account cron job
*HostingCronJobsApi* | [**deleteAccountCronJobV1**](docs/Api/HostingCronJobsApi.md#deleteaccountcronjobv1) | **DELETE** /api/hosting/v1/accounts/{username}/cron-jobs/{uid} | Delete account cron job
*HostingCronJobsApi* | [**getCronJobOutputV1**](docs/Api/HostingCronJobsApi.md#getcronjoboutputv1) | **GET** /api/hosting/v1/accounts/{username}/cron-jobs/{uid}/output | Get cron job output
*HostingCronJobsApi* | [**listAccountCronJobsV1**](docs/Api/HostingCronJobsApi.md#listaccountcronjobsv1) | **GET** /api/hosting/v1/accounts/{username}/cron-jobs | List account cron jobs
*HostingDatabasesApi* | [**changeDatabasePasswordV1**](docs/Api/HostingDatabasesApi.md#changedatabasepasswordv1) | **PATCH** /api/hosting/v1/accounts/{username}/databases/{name}/change-password | Change database password
*HostingDatabasesApi* | [**createAccountDatabaseRemoteConnectionV1**](docs/Api/HostingDatabasesApi.md#createaccountdatabaseremoteconnectionv1) | **POST** /api/hosting/v1/accounts/{username}/databases/{name}/remote-connections | Create account database remote connection
*HostingDatabasesApi* | [**createAccountDatabaseV1**](docs/Api/HostingDatabasesApi.md#createaccountdatabasev1) | **POST** /api/hosting/v1/accounts/{username}/databases | Create account database
*HostingDatabasesApi* | [**deleteAccountDatabaseRemoteConnectionV1**](docs/Api/HostingDatabasesApi.md#deleteaccountdatabaseremoteconnectionv1) | **DELETE** /api/hosting/v1/accounts/{username}/databases/{name}/remote-connections | Delete account database remote connection
*HostingDatabasesApi* | [**deleteAccountDatabaseV1**](docs/Api/HostingDatabasesApi.md#deleteaccountdatabasev1) | **DELETE** /api/hosting/v1/accounts/{username}/databases/{name} | Delete account database
*HostingDatabasesApi* | [**getPhpMyAdminLinkV1**](docs/Api/HostingDatabasesApi.md#getphpmyadminlinkv1) | **GET** /api/hosting/v1/accounts/{username}/databases/{name}/phpmyadmin-link | Get phpMyAdmin link
*HostingDatabasesApi* | [**listAccountDatabaseRemoteConnectionsV1**](docs/Api/HostingDatabasesApi.md#listaccountdatabaseremoteconnectionsv1) | **GET** /api/hosting/v1/accounts/{username}/databases/remote-connections | List account database remote connections
*HostingDatabasesApi* | [**listAccountDatabasesV1**](docs/Api/HostingDatabasesApi.md#listaccountdatabasesv1) | **GET** /api/hosting/v1/accounts/{username}/databases | List account databases
*HostingDatabasesApi* | [**repairDatabaseV1**](docs/Api/HostingDatabasesApi.md#repairdatabasev1) | **PATCH** /api/hosting/v1/accounts/{username}/databases/{name}/repair | Repair database
*HostingDatacentersApi* | [**listAvailableDatacentersV1**](docs/Api/HostingDatacentersApi.md#listavailabledatacentersv1) | **GET** /api/hosting/v1/datacenters | List available datacenters
*HostingDomainsApi* | [**createWebsiteParkedDomainV1**](docs/Api/HostingDomainsApi.md#createwebsiteparkeddomainv1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/parked-domains | Create website parked domain
*HostingDomainsApi* | [**createWebsiteSubdomainV1**](docs/Api/HostingDomainsApi.md#createwebsitesubdomainv1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/subdomains | Create website subdomain
*HostingDomainsApi* | [**deleteWebsiteParkedDomainV1**](docs/Api/HostingDomainsApi.md#deletewebsiteparkeddomainv1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/parked-domains/{parkedDomain} | Delete website parked domain
*HostingDomainsApi* | [**deleteWebsiteSubdomainV1**](docs/Api/HostingDomainsApi.md#deletewebsitesubdomainv1) | **DELETE** /api/hosting/v1/accounts/{username}/websites/{domain}/subdomains/{subdomain} | Delete website subdomain
*HostingDomainsApi* | [**generateAFreeSubdomainV1**](docs/Api/HostingDomainsApi.md#generateafreesubdomainv1) | **POST** /api/hosting/v1/domains/free-subdomains | Generate a free subdomain
*HostingDomainsApi* | [**listWebsiteParkedDomainsV1**](docs/Api/HostingDomainsApi.md#listwebsiteparkeddomainsv1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/parked-domains | List website parked domains
*HostingDomainsApi* | [**listWebsiteSubdomainsV1**](docs/Api/HostingDomainsApi.md#listwebsitesubdomainsv1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/subdomains | List website subdomains
*HostingDomainsApi* | [**verifyDomainOwnershipV1**](docs/Api/HostingDomainsApi.md#verifydomainownershipv1) | **POST** /api/hosting/v1/domains/verify-ownership | Verify domain ownership
*HostingNodeJSApi* | [**createNodeJSBuildFromArchiveV1**](docs/Api/HostingNodeJSApi.md#createnodejsbuildfromarchivev1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/from-archive | Create NodeJS build from archive
*HostingNodeJSApi* | [**getNodeJSBuildLogsV1**](docs/Api/HostingNodeJSApi.md#getnodejsbuildlogsv1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds/{uuid}/logs | Get NodeJS build logs
*HostingNodeJSApi* | [**listNodeJSBuildsV1**](docs/Api/HostingNodeJSApi.md#listnodejsbuildsv1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/builds | List NodeJS builds
*HostingNodeJSApi* | [**listNodeJsVulnerabilitiesV1**](docs/Api/HostingNodeJSApi.md#listnodejsvulnerabilitiesv1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/vulnerabilities | List Node.js vulnerabilities
*HostingNodeJSApi* | [**patchNodeJsVulnerabilitiesV1**](docs/Api/HostingNodeJSApi.md#patchnodejsvulnerabilitiesv1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/vulnerabilities/patch | Patch Node.js vulnerabilities
*HostingNodeJSApi* | [**restartNodeJsApplicationV1**](docs/Api/HostingNodeJSApi.md#restartnodejsapplicationv1) | **POST** /api/hosting/v1/accounts/{username}/websites/{domain}/nodejs/server/restart | Restart Node.js application
*HostingOrdersApi* | [**listOrdersV1**](docs/Api/HostingOrdersApi.md#listordersv1) | **GET** /api/hosting/v1/orders | List orders
*HostingPHPApi* | [**getPHPDetailsV1**](docs/Api/HostingPHPApi.md#getphpdetailsv1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/php/details | Get PHP details
*HostingPHPApi* | [**getPHPInfoV1**](docs/Api/HostingPHPApi.md#getphpinfov1) | **GET** /api/hosting/v1/accounts/{username}/websites/{domain}/php/php-info | Get PHP info
*HostingPHPApi* | [**resetPHPExtensionsV1**](docs/Api/HostingPHPApi.md#resetphpextensionsv1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/php/extensions/reset | Reset PHP extensions
*HostingPHPApi* | [**updatePHPExtensionsV1**](docs/Api/HostingPHPApi.md#updatephpextensionsv1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/php/extensions | Update PHP extensions
*HostingPHPApi* | [**updatePHPOptionsV1**](docs/Api/HostingPHPApi.md#updatephpoptionsv1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/php/options | Update PHP options
*HostingPHPApi* | [**updatePHPVersionV1**](docs/Api/HostingPHPApi.md#updatephpversionv1) | **PATCH** /api/hosting/v1/accounts/{username}/websites/{domain}/php/version | Update PHP version
*HostingWebsitesApi* | [**createWebsiteV1**](docs/Api/HostingWebsitesApi.md#createwebsitev1) | **POST** /api/hosting/v1/websites | Create website
*HostingWebsitesApi* | [**deleteWebsiteV1**](docs/Api/HostingWebsitesApi.md#deletewebsitev1) | **DELETE** /api/hosting/v1/websites/{domain} | Delete website
*HostingWebsitesApi* | [**listWebsitesV1**](docs/Api/HostingWebsitesApi.md#listwebsitesv1) | **GET** /api/hosting/v1/websites | List websites
*MailAPITokensApi* | [**createAPITokenV1**](docs/Api/MailAPITokensApi.md#createapitokenv1) | **POST** /api/mail/v1/orders/{orderId}/api-tokens | Create API token
*MailAPITokensApi* | [**listAPITokensV1**](docs/Api/MailAPITokensApi.md#listapitokensv1) | **GET** /api/mail/v1/api-tokens | List API tokens
*MailAPITokensApi* | [**revokeAPITokenV1**](docs/Api/MailAPITokensApi.md#revokeapitokenv1) | **DELETE** /api/mail/v1/api-tokens/{tokenId} | Revoke API token
*MailLogsApi* | [**listAccessLogsV1**](docs/Api/MailLogsApi.md#listaccesslogsv1) | **GET** /api/mail/v1/orders/{orderId}/logs/access | List access logs
*MailLogsApi* | [**listActionLogsV1**](docs/Api/MailLogsApi.md#listactionlogsv1) | **GET** /api/mail/v1/orders/{orderId}/logs/action | List action logs
*MailLogsApi* | [**listInboundLogsV1**](docs/Api/MailLogsApi.md#listinboundlogsv1) | **GET** /api/mail/v1/orders/{orderId}/logs/inbound | List inbound logs
*MailLogsApi* | [**listMailboxActionLogsV1**](docs/Api/MailLogsApi.md#listmailboxactionlogsv1) | **GET** /api/mail/v1/orders/{orderId}/logs/mailbox-actions | List mailbox action logs
*MailLogsApi* | [**listOutboundLogsV1**](docs/Api/MailLogsApi.md#listoutboundlogsv1) | **GET** /api/mail/v1/orders/{orderId}/logs/outbound | List outbound logs
*MailMailboxesApi* | [**changeMailboxPasswordV1**](docs/Api/MailMailboxesApi.md#changemailboxpasswordv1) | **PATCH** /api/mail/v1/mailboxes/{mailboxId}/password | Change mailbox password
*MailMailboxesApi* | [**createMailboxV1**](docs/Api/MailMailboxesApi.md#createmailboxv1) | **POST** /api/mail/v1/orders/{orderId}/mailboxes | Create mailbox
*MailMailboxesApi* | [**deleteMailboxV1**](docs/Api/MailMailboxesApi.md#deletemailboxv1) | **DELETE** /api/mail/v1/mailboxes/{mailboxId} | Delete mailbox
*MailMailboxesApi* | [**listMailboxesV1**](docs/Api/MailMailboxesApi.md#listmailboxesv1) | **GET** /api/mail/v1/orders/{orderId}/mailboxes | List mailboxes
*MailOrdersApi* | [**getOrderPlanV1**](docs/Api/MailOrdersApi.md#getorderplanv1) | **GET** /api/mail/v1/orders/{orderId}/plan | Get order plan
*MailOrdersApi* | [**listOrdersV1**](docs/Api/MailOrdersApi.md#listordersv1) | **GET** /api/mail/v1/orders | List orders
*MailWebhooksApi* | [**createWebhookV1**](docs/Api/MailWebhooksApi.md#createwebhookv1) | **POST** /api/mail/v1/mailboxes/{mailboxId}/webhooks | Create webhook
*MailWebhooksApi* | [**deleteWebhookV1**](docs/Api/MailWebhooksApi.md#deletewebhookv1) | **DELETE** /api/mail/v1/webhooks/{webhookId} | Delete webhook
*MailWebhooksApi* | [**getWebhookV1**](docs/Api/MailWebhooksApi.md#getwebhookv1) | **GET** /api/mail/v1/webhooks/{webhookId} | Get webhook
*MailWebhooksApi* | [**listWebhookDeliveryLogsV1**](docs/Api/MailWebhooksApi.md#listwebhookdeliverylogsv1) | **GET** /api/mail/v1/orders/{orderId}/webhooks/delivery-logs | List webhook delivery logs
*MailWebhooksApi* | [**listWebhooksV1**](docs/Api/MailWebhooksApi.md#listwebhooksv1) | **GET** /api/mail/v1/orders/{orderId}/webhooks | List webhooks
*MailWebhooksApi* | [**regenerateWebhookSecretV1**](docs/Api/MailWebhooksApi.md#regeneratewebhooksecretv1) | **POST** /api/mail/v1/webhooks/{webhookId}/regenerate-secret | Regenerate webhook secret
*MailWebhooksApi* | [**testWebhookV1**](docs/Api/MailWebhooksApi.md#testwebhookv1) | **POST** /api/mail/v1/webhooks/{webhookId}/test | Test webhook
*MailWebhooksApi* | [**updateWebhookV1**](docs/Api/MailWebhooksApi.md#updatewebhookv1) | **PATCH** /api/mail/v1/webhooks/{webhookId} | Update webhook
*ReachContactsApi* | [**createANewContactV1**](docs/Api/ReachContactsApi.md#createanewcontactv1) | **POST** /api/reach/v1/contacts | Create a new contact
*ReachContactsApi* | [**createNewContactsV1**](docs/Api/ReachContactsApi.md#createnewcontactsv1) | **POST** /api/reach/v1/profiles/{profileUuid}/contacts | Create new contacts
*ReachContactsApi* | [**deleteAContactV1**](docs/Api/ReachContactsApi.md#deleteacontactv1) | **DELETE** /api/reach/v1/contacts/{uuid} | Delete a contact
*ReachContactsApi* | [**listContactGroupsV1**](docs/Api/ReachContactsApi.md#listcontactgroupsv1) | **GET** /api/reach/v1/contacts/groups | List contact groups
*ReachContactsApi* | [**listContactsV1**](docs/Api/ReachContactsApi.md#listcontactsv1) | **GET** /api/reach/v1/contacts | List contacts
*ReachProfilesApi* | [**getProfileDomainDNSStatusV1**](docs/Api/ReachProfilesApi.md#getprofiledomaindnsstatusv1) | **GET** /api/reach/v1/profiles/{profileUuid}/domains/dns-status | Get profile domain DNS status
*ReachProfilesApi* | [**listProfilesV1**](docs/Api/ReachProfilesApi.md#listprofilesv1) | **GET** /api/reach/v1/profiles | List Profiles
*ReachSegmentsApi* | [**createANewContactSegmentV1**](docs/Api/ReachSegmentsApi.md#createanewcontactsegmentv1) | **POST** /api/reach/v1/segmentation/segments | Create a new contact segment
*ReachSegmentsApi* | [**getSegmentDetailsV1**](docs/Api/ReachSegmentsApi.md#getsegmentdetailsv1) | **GET** /api/reach/v1/segmentation/segments/{segmentUuid} | Get segment details
*ReachSegmentsApi* | [**listProfileSegmentContactsV1**](docs/Api/ReachSegmentsApi.md#listprofilesegmentcontactsv1) | **GET** /api/reach/v1/profiles/{profileUuid}/segmentation/segments/{segmentUuid}/contacts | List profile segment contacts
*ReachSegmentsApi* | [**listSegmentContactsV1**](docs/Api/ReachSegmentsApi.md#listsegmentcontactsv1) | **GET** /api/reach/v1/segmentation/segments/{segmentUuid}/contacts | List segment contacts
*ReachSegmentsApi* | [**listSegmentsV1**](docs/Api/ReachSegmentsApi.md#listsegmentsv1) | **GET** /api/reach/v1/segmentation/segments | List segments
*VPSActionsApi* | [**getActionDetailsV1**](docs/Api/VPSActionsApi.md#getactiondetailsv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/actions/{actionId} | Get action details
*VPSActionsApi* | [**getActionsV1**](docs/Api/VPSActionsApi.md#getactionsv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/actions | Get actions
*VPSBackupsApi* | [**getBackupsV1**](docs/Api/VPSBackupsApi.md#getbackupsv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/backups | Get backups
*VPSBackupsApi* | [**restoreBackupV1**](docs/Api/VPSBackupsApi.md#restorebackupv1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/backups/{backupId}/restore | Restore backup
*VPSDataCentersApi* | [**getDataCenterListV1**](docs/Api/VPSDataCentersApi.md#getdatacenterlistv1) | **GET** /api/vps/v1/data-centers | Get data center list
*VPSDockerManagerApi* | [**createNewProjectV1**](docs/Api/VPSDockerManagerApi.md#createnewprojectv1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/docker | Create new project
*VPSDockerManagerApi* | [**deleteProjectV1**](docs/Api/VPSDockerManagerApi.md#deleteprojectv1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/down | Delete project
*VPSDockerManagerApi* | [**getProjectContainersV1**](docs/Api/VPSDockerManagerApi.md#getprojectcontainersv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/containers | Get project containers
*VPSDockerManagerApi* | [**getProjectContentsV1**](docs/Api/VPSDockerManagerApi.md#getprojectcontentsv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName} | Get project contents
*VPSDockerManagerApi* | [**getProjectListV1**](docs/Api/VPSDockerManagerApi.md#getprojectlistv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/docker | Get project list
*VPSDockerManagerApi* | [**getProjectLogsV1**](docs/Api/VPSDockerManagerApi.md#getprojectlogsv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/logs | Get project logs
*VPSDockerManagerApi* | [**restartProjectV1**](docs/Api/VPSDockerManagerApi.md#restartprojectv1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/restart | Restart project
*VPSDockerManagerApi* | [**startProjectV1**](docs/Api/VPSDockerManagerApi.md#startprojectv1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/start | Start project
*VPSDockerManagerApi* | [**stopProjectV1**](docs/Api/VPSDockerManagerApi.md#stopprojectv1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/stop | Stop project
*VPSDockerManagerApi* | [**updateProjectV1**](docs/Api/VPSDockerManagerApi.md#updateprojectv1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/docker/{projectName}/update | Update project
*VPSFirewallApi* | [**activateFirewallV1**](docs/Api/VPSFirewallApi.md#activatefirewallv1) | **POST** /api/vps/v1/firewall/{firewallId}/activate/{virtualMachineId} | Activate firewall
*VPSFirewallApi* | [**createFirewallRuleV1**](docs/Api/VPSFirewallApi.md#createfirewallrulev1) | **POST** /api/vps/v1/firewall/{firewallId}/rules | Create firewall rule
*VPSFirewallApi* | [**createNewFirewallV1**](docs/Api/VPSFirewallApi.md#createnewfirewallv1) | **POST** /api/vps/v1/firewall | Create new firewall
*VPSFirewallApi* | [**deactivateFirewallV1**](docs/Api/VPSFirewallApi.md#deactivatefirewallv1) | **POST** /api/vps/v1/firewall/{firewallId}/deactivate/{virtualMachineId} | Deactivate firewall
*VPSFirewallApi* | [**deleteFirewallRuleV1**](docs/Api/VPSFirewallApi.md#deletefirewallrulev1) | **DELETE** /api/vps/v1/firewall/{firewallId}/rules/{ruleId} | Delete firewall rule
*VPSFirewallApi* | [**deleteFirewallV1**](docs/Api/VPSFirewallApi.md#deletefirewallv1) | **DELETE** /api/vps/v1/firewall/{firewallId} | Delete firewall
*VPSFirewallApi* | [**getFirewallDetailsV1**](docs/Api/VPSFirewallApi.md#getfirewalldetailsv1) | **GET** /api/vps/v1/firewall/{firewallId} | Get firewall details
*VPSFirewallApi* | [**getFirewallListV1**](docs/Api/VPSFirewallApi.md#getfirewalllistv1) | **GET** /api/vps/v1/firewall | Get firewall list
*VPSFirewallApi* | [**syncFirewallV1**](docs/Api/VPSFirewallApi.md#syncfirewallv1) | **POST** /api/vps/v1/firewall/{firewallId}/sync/{virtualMachineId} | Sync firewall
*VPSFirewallApi* | [**updateFirewallRuleV1**](docs/Api/VPSFirewallApi.md#updatefirewallrulev1) | **PUT** /api/vps/v1/firewall/{firewallId}/rules/{ruleId} | Update firewall rule
*VPSMalwareScannerApi* | [**getScanMetricsV1**](docs/Api/VPSMalwareScannerApi.md#getscanmetricsv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/monarx | Get scan metrics
*VPSMalwareScannerApi* | [**installMonarxV1**](docs/Api/VPSMalwareScannerApi.md#installmonarxv1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/monarx | Install Monarx
*VPSMalwareScannerApi* | [**uninstallMonarxV1**](docs/Api/VPSMalwareScannerApi.md#uninstallmonarxv1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/monarx | Uninstall Monarx
*VPSOSTemplatesApi* | [**getTemplateDetailsV1**](docs/Api/VPSOSTemplatesApi.md#gettemplatedetailsv1) | **GET** /api/vps/v1/templates/{templateId} | Get template details
*VPSOSTemplatesApi* | [**getTemplatesV1**](docs/Api/VPSOSTemplatesApi.md#gettemplatesv1) | **GET** /api/vps/v1/templates | Get templates
*VPSPTRRecordsApi* | [**createPTRRecordV1**](docs/Api/VPSPTRRecordsApi.md#createptrrecordv1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/ptr/{ipAddressId} | Create PTR record
*VPSPTRRecordsApi* | [**deletePTRRecordV1**](docs/Api/VPSPTRRecordsApi.md#deleteptrrecordv1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/ptr/{ipAddressId} | Delete PTR record
*VPSPostInstallScriptsApi* | [**createPostInstallScriptV1**](docs/Api/VPSPostInstallScriptsApi.md#createpostinstallscriptv1) | **POST** /api/vps/v1/post-install-scripts | Create post-install script
*VPSPostInstallScriptsApi* | [**deletePostInstallScriptV1**](docs/Api/VPSPostInstallScriptsApi.md#deletepostinstallscriptv1) | **DELETE** /api/vps/v1/post-install-scripts/{postInstallScriptId} | Delete post-install script
*VPSPostInstallScriptsApi* | [**getPostInstallScriptV1**](docs/Api/VPSPostInstallScriptsApi.md#getpostinstallscriptv1) | **GET** /api/vps/v1/post-install-scripts/{postInstallScriptId} | Get post-install script
*VPSPostInstallScriptsApi* | [**getPostInstallScriptsV1**](docs/Api/VPSPostInstallScriptsApi.md#getpostinstallscriptsv1) | **GET** /api/vps/v1/post-install-scripts | Get post-install scripts
*VPSPostInstallScriptsApi* | [**updatePostInstallScriptV1**](docs/Api/VPSPostInstallScriptsApi.md#updatepostinstallscriptv1) | **PUT** /api/vps/v1/post-install-scripts/{postInstallScriptId} | Update post-install script
*VPSPublicKeysApi* | [**attachPublicKeyV1**](docs/Api/VPSPublicKeysApi.md#attachpublickeyv1) | **POST** /api/vps/v1/public-keys/attach/{virtualMachineId} | Attach public key
*VPSPublicKeysApi* | [**createPublicKeyV1**](docs/Api/VPSPublicKeysApi.md#createpublickeyv1) | **POST** /api/vps/v1/public-keys | Create public key
*VPSPublicKeysApi* | [**deletePublicKeyV1**](docs/Api/VPSPublicKeysApi.md#deletepublickeyv1) | **DELETE** /api/vps/v1/public-keys/{publicKeyId} | Delete public key
*VPSPublicKeysApi* | [**getPublicKeysV1**](docs/Api/VPSPublicKeysApi.md#getpublickeysv1) | **GET** /api/vps/v1/public-keys | Get public keys
*VPSRecoveryApi* | [**startRecoveryModeV1**](docs/Api/VPSRecoveryApi.md#startrecoverymodev1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/recovery | Start recovery mode
*VPSRecoveryApi* | [**stopRecoveryModeV1**](docs/Api/VPSRecoveryApi.md#stoprecoverymodev1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/recovery | Stop recovery mode
*VPSSnapshotsApi* | [**createSnapshotV1**](docs/Api/VPSSnapshotsApi.md#createsnapshotv1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/snapshot | Create snapshot
*VPSSnapshotsApi* | [**deleteSnapshotV1**](docs/Api/VPSSnapshotsApi.md#deletesnapshotv1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/snapshot | Delete snapshot
*VPSSnapshotsApi* | [**getSnapshotV1**](docs/Api/VPSSnapshotsApi.md#getsnapshotv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/snapshot | Get snapshot
*VPSSnapshotsApi* | [**restoreSnapshotV1**](docs/Api/VPSSnapshotsApi.md#restoresnapshotv1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/snapshot/restore | Restore snapshot
*VPSVirtualMachineApi* | [**getAttachedPublicKeysV1**](docs/Api/VPSVirtualMachineApi.md#getattachedpublickeysv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/public-keys | Get attached public keys
*VPSVirtualMachineApi* | [**getMetricsV1**](docs/Api/VPSVirtualMachineApi.md#getmetricsv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId}/metrics | Get metrics
*VPSVirtualMachineApi* | [**getVirtualMachineDetailsV1**](docs/Api/VPSVirtualMachineApi.md#getvirtualmachinedetailsv1) | **GET** /api/vps/v1/virtual-machines/{virtualMachineId} | Get virtual machine details
*VPSVirtualMachineApi* | [**getVirtualMachinesV1**](docs/Api/VPSVirtualMachineApi.md#getvirtualmachinesv1) | **GET** /api/vps/v1/virtual-machines | Get virtual machines
*VPSVirtualMachineApi* | [**purchaseNewVirtualMachineV1**](docs/Api/VPSVirtualMachineApi.md#purchasenewvirtualmachinev1) | **POST** /api/vps/v1/virtual-machines | Purchase new virtual machine
*VPSVirtualMachineApi* | [**recreateVirtualMachineV1**](docs/Api/VPSVirtualMachineApi.md#recreatevirtualmachinev1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/recreate | Recreate virtual machine
*VPSVirtualMachineApi* | [**resetHostnameV1**](docs/Api/VPSVirtualMachineApi.md#resethostnamev1) | **DELETE** /api/vps/v1/virtual-machines/{virtualMachineId}/hostname | Reset hostname
*VPSVirtualMachineApi* | [**restartVirtualMachineV1**](docs/Api/VPSVirtualMachineApi.md#restartvirtualmachinev1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/restart | Restart virtual machine
*VPSVirtualMachineApi* | [**setHostnameV1**](docs/Api/VPSVirtualMachineApi.md#sethostnamev1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/hostname | Set hostname
*VPSVirtualMachineApi* | [**setNameserversV1**](docs/Api/VPSVirtualMachineApi.md#setnameserversv1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/nameservers | Set nameservers
*VPSVirtualMachineApi* | [**setPanelPasswordV1**](docs/Api/VPSVirtualMachineApi.md#setpanelpasswordv1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/panel-password | Set panel password
*VPSVirtualMachineApi* | [**setRootPasswordV1**](docs/Api/VPSVirtualMachineApi.md#setrootpasswordv1) | **PUT** /api/vps/v1/virtual-machines/{virtualMachineId}/root-password | Set root password
*VPSVirtualMachineApi* | [**setupPurchasedVirtualMachineV1**](docs/Api/VPSVirtualMachineApi.md#setuppurchasedvirtualmachinev1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/setup | Setup purchased virtual machine
*VPSVirtualMachineApi* | [**startVirtualMachineV1**](docs/Api/VPSVirtualMachineApi.md#startvirtualmachinev1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/start | Start virtual machine
*VPSVirtualMachineApi* | [**stopVirtualMachineV1**](docs/Api/VPSVirtualMachineApi.md#stopvirtualmachinev1) | **POST** /api/vps/v1/virtual-machines/{virtualMachineId}/stop | Stop virtual machine
*WordPressAIToolsApi* | [**setAIOptionStatusV1**](docs/Api/WordPressAIToolsApi.md#setaioptionstatusv1) | **PATCH** /api/hosting/v1/accounts/{username}/wordpress/{software}/hostinger-plugins/ai-option/status | Set AI option status
*WordPressAIToolsApi* | [**showAIOptionStatusV1**](docs/Api/WordPressAIToolsApi.md#showaioptionstatusv1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/hostinger-plugins/ai-option/status | Show AI option status
*WordPressInstallationsApi* | [**checkIfWordPressInstallationsAreValidV1**](docs/Api/WordPressInstallationsApi.md#checkifwordpressinstallationsarevalidv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/installations/check-is-valid | Check if WordPress installations are valid
*WordPressInstallationsApi* | [**deleteWordPressInstallationV1**](docs/Api/WordPressInstallationsApi.md#deletewordpressinstallationv1) | **DELETE** /api/hosting/v1/accounts/{username}/wordpress/{software} | Delete WordPress installation
*WordPressInstallationsApi* | [**detectWordPressInstallationsV1**](docs/Api/WordPressInstallationsApi.md#detectwordpressinstallationsv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/installations/detect | Detect WordPress installations
*WordPressInstallationsApi* | [**getInstallationJWTTokenV1**](docs/Api/WordPressInstallationsApi.md#getinstallationjwttokenv1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/jwt-token | Get installation JWT token
*WordPressInstallationsApi* | [**installWordPressV1**](docs/Api/WordPressInstallationsApi.md#installwordpressv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/installations | Install WordPress
*WordPressInstallationsApi* | [**listAvailableWordPressCoreUpdatesV1**](docs/Api/WordPressInstallationsApi.md#listavailablewordpresscoreupdatesv1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/updates | List available WordPress core updates
*WordPressInstallationsApi* | [**listWordPressInstallationsV1**](docs/Api/WordPressInstallationsApi.md#listwordpressinstallationsv1) | **GET** /api/hosting/v1/wordpress/installations | List WordPress installations
*WordPressInstallationsApi* | [**showWordPressCoreVersionV1**](docs/Api/WordPressInstallationsApi.md#showwordpresscoreversionv1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/version | Show WordPress core version
*WordPressInstallationsApi* | [**updateWordPressCoreV1**](docs/Api/WordPressInstallationsApi.md#updatewordpresscorev1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/update | Update WordPress core
*WordPressLiteSpeedCacheApi* | [**purgeLiteSpeedCacheV1**](docs/Api/WordPressLiteSpeedCacheApi.md#purgelitespeedcachev1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/litespeed-cache/purge | Purge LiteSpeed Cache
*WordPressLiteSpeedCacheApi* | [**showLiteSpeedCacheStatusV1**](docs/Api/WordPressLiteSpeedCacheApi.md#showlitespeedcachestatusv1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/litespeed-cache/status | Show LiteSpeed Cache status
*WordPressLoginApi* | [**createLoginLinksV1**](docs/Api/WordPressLoginApi.md#createloginlinksv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/login/links | Create login links
*WordPressMaintenanceApi* | [**showMaintenanceStatusV1**](docs/Api/WordPressMaintenanceApi.md#showmaintenancestatusv1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/maintenance/status | Show maintenance status
*WordPressMaintenanceApi* | [**toggleMaintenanceModeV1**](docs/Api/WordPressMaintenanceApi.md#togglemaintenancemodev1) | **PATCH** /api/hosting/v1/accounts/{username}/wordpress/{software}/maintenance/toggle | Toggle maintenance mode
*WordPressObjectCacheApi* | [**showMemcachedObjectCacheStatusV1**](docs/Api/WordPressObjectCacheApi.md#showmemcachedobjectcachestatusv1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/memcached/status | Show Memcached object cache status
*WordPressObjectCacheApi* | [**toggleMemcachedObjectCacheV1**](docs/Api/WordPressObjectCacheApi.md#togglememcachedobjectcachev1) | **PATCH** /api/hosting/v1/accounts/{username}/wordpress/{software}/memcached/toggle | Toggle Memcached object cache
*WordPressPluginsApi* | [**activateWordPressPluginV1**](docs/Api/WordPressPluginsApi.md#activatewordpresspluginv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/activate | Activate WordPress plugin
*WordPressPluginsApi* | [**checkIfWooCommerceIsInstalledV1**](docs/Api/WordPressPluginsApi.md#checkifwoocommerceisinstalledv1) | **GET** /api/hosting/v1/wordpress/plugins/is-woocommerce-installed | Check if WooCommerce is installed
*WordPressPluginsApi* | [**deactivateWordPressPluginV1**](docs/Api/WordPressPluginsApi.md#deactivatewordpresspluginv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/deactivate | Deactivate WordPress plugin
*WordPressPluginsApi* | [**installWordPressPluginsV1**](docs/Api/WordPressPluginsApi.md#installwordpresspluginsv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/install | Install WordPress plugins
*WordPressPluginsApi* | [**listAvailableWordPressPluginsV1**](docs/Api/WordPressPluginsApi.md#listavailablewordpresspluginsv1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/available | List available WordPress plugins
*WordPressPluginsApi* | [**listInstalledWordPressPluginsV1**](docs/Api/WordPressPluginsApi.md#listinstalledwordpresspluginsv1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins | List installed WordPress plugins
*WordPressPluginsApi* | [**listSuggestedWordPressPluginsV1**](docs/Api/WordPressPluginsApi.md#listsuggestedwordpresspluginsv1) | **GET** /api/hosting/v1/wordpress/plugins/suggested | List suggested WordPress plugins
*WordPressPluginsApi* | [**searchWordPressPluginsV1**](docs/Api/WordPressPluginsApi.md#searchwordpresspluginsv1) | **GET** /api/hosting/v1/wordpress/plugins | Search WordPress plugins
*WordPressPluginsApi* | [**uninstallWordPressPluginsV1**](docs/Api/WordPressPluginsApi.md#uninstallwordpresspluginsv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/uninstall | Uninstall WordPress plugins
*WordPressPluginsApi* | [**updateHostingerWordPressPluginV1**](docs/Api/WordPressPluginsApi.md#updatehostingerwordpresspluginv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/hostinger/update | Update Hostinger WordPress plugin
*WordPressPluginsApi* | [**updateWordPressPluginsV1**](docs/Api/WordPressPluginsApi.md#updatewordpresspluginsv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/plugins/update | Update WordPress plugins
*WordPressThemesApi* | [**activateWordPressThemeV1**](docs/Api/WordPressThemesApi.md#activatewordpressthemev1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes/activate | Activate WordPress theme
*WordPressThemesApi* | [**installWordPressThemeV1**](docs/Api/WordPressThemesApi.md#installwordpressthemev1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes/install | Install WordPress theme
*WordPressThemesApi* | [**listInstalledWordPressThemesV1**](docs/Api/WordPressThemesApi.md#listinstalledwordpressthemesv1) | **GET** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes | List installed WordPress themes
*WordPressThemesApi* | [**listWordPressThemesV1**](docs/Api/WordPressThemesApi.md#listwordpressthemesv1) | **GET** /api/hosting/v1/wordpress/themes | List WordPress themes
*WordPressThemesApi* | [**uninstallWordPressThemesV1**](docs/Api/WordPressThemesApi.md#uninstallwordpressthemesv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes/uninstall | Uninstall WordPress themes
*WordPressThemesApi* | [**updateWordPressThemesV1**](docs/Api/WordPressThemesApi.md#updatewordpressthemesv1) | **POST** /api/hosting/v1/accounts/{username}/wordpress/{software}/themes/update | Update WordPress themes

## Models

- [AgencyHostingListAgencyPlanDomainsV1200Response](docs/Model/AgencyHostingListAgencyPlanDomainsV1200Response.md)
- [AgencyHostingListAgencyPlanWebsiteCronJobsV1200Response](docs/Model/AgencyHostingListAgencyPlanWebsiteCronJobsV1200Response.md)
- [AgencyHostingListAgencyPlanWebsiteDatabasesV1200Response](docs/Model/AgencyHostingListAgencyPlanWebsiteDatabasesV1200Response.md)
- [AgencyHostingV1DatacentersCoordinatesResource](docs/Model/AgencyHostingV1DatacentersCoordinatesResource.md)
- [AgencyHostingV1DatacentersDatacenterResource](docs/Model/AgencyHostingV1DatacentersDatacenterResource.md)
- [AgencyHostingV1DomainsChangeDomainRequest](docs/Model/AgencyHostingV1DomainsChangeDomainRequest.md)
- [AgencyHostingV1DomainsDomainResource](docs/Model/AgencyHostingV1DomainsDomainResource.md)
- [AgencyHostingV1DomainsLinkDomainRequest](docs/Model/AgencyHostingV1DomainsLinkDomainRequest.md)
- [AgencyHostingV1FilesImportArchiveRequest](docs/Model/AgencyHostingV1FilesImportArchiveRequest.md)
- [AgencyHostingV1FilesUploadUrlResource](docs/Model/AgencyHostingV1FilesUploadUrlResource.md)
- [AgencyHostingV1SetupsCreateSetupRequest](docs/Model/AgencyHostingV1SetupsCreateSetupRequest.md)
- [AgencyHostingV1SetupsCreateSetupRequestClone](docs/Model/AgencyHostingV1SetupsCreateSetupRequestClone.md)
- [AgencyHostingV1SetupsCreateSetupRequestDeriveDomain](docs/Model/AgencyHostingV1SetupsCreateSetupRequestDeriveDomain.md)
- [AgencyHostingV1SetupsCreateSetupRequestDeriveDomainFromVhost](docs/Model/AgencyHostingV1SetupsCreateSetupRequestDeriveDomainFromVhost.md)
- [AgencyHostingV1SetupsCreateSetupRequestSettings](docs/Model/AgencyHostingV1SetupsCreateSetupRequestSettings.md)
- [AgencyHostingV1SetupsCreateSetupRequestSettingsPhp](docs/Model/AgencyHostingV1SetupsCreateSetupRequestSettingsPhp.md)
- [AgencyHostingV1SetupsCreateSetupRequestWordpress](docs/Model/AgencyHostingV1SetupsCreateSetupRequestWordpress.md)
- [AgencyHostingV1SetupsCreateSetupRequestWordpressAdmin](docs/Model/AgencyHostingV1SetupsCreateSetupRequestWordpressAdmin.md)
- [AgencyHostingV1SetupsWebsiteSetupResource](docs/Model/AgencyHostingV1SetupsWebsiteSetupResource.md)
- [AgencyHostingV1SetupsWebsiteSetupStatusResource](docs/Model/AgencyHostingV1SetupsWebsiteSetupStatusResource.md)
- [AgencyHostingV1WebsitesBuildAssetsRequest](docs/Model/AgencyHostingV1WebsitesBuildAssetsRequest.md)
- [AgencyHostingV1WebsitesCronJobsCreateCronJobRequest](docs/Model/AgencyHostingV1WebsitesCronJobsCreateCronJobRequest.md)
- [AgencyHostingV1WebsitesCronJobsCronJobResource](docs/Model/AgencyHostingV1WebsitesCronJobsCronJobResource.md)
- [AgencyHostingV1WebsitesCustomSslCertResource](docs/Model/AgencyHostingV1WebsitesCustomSslCertResource.md)
- [AgencyHostingV1WebsitesDatabasesCreateDatabaseRequest](docs/Model/AgencyHostingV1WebsitesDatabasesCreateDatabaseRequest.md)
- [AgencyHostingV1WebsitesDatabasesDatabaseResource](docs/Model/AgencyHostingV1WebsitesDatabasesDatabaseResource.md)
- [AgencyHostingV1WebsitesDatabasesDatabaseUserResource](docs/Model/AgencyHostingV1WebsitesDatabasesDatabaseUserResource.md)
- [AgencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest](docs/Model/AgencyHostingV1WebsitesDatabasesUsersCreateDatabaseUserRequest.md)
- [AgencyHostingV1WebsitesSslCertResource](docs/Model/AgencyHostingV1WebsitesSslCertResource.md)
- [AgencyHostingV1WebsitesWebsiteDeletionResource](docs/Model/AgencyHostingV1WebsitesWebsiteDeletionResource.md)
- [AgencyHostingV1WebsitesWebsiteDomainDetailsResource](docs/Model/AgencyHostingV1WebsitesWebsiteDomainDetailsResource.md)
- [AgencyHostingV1WebsitesWebsiteOrderPlanResource](docs/Model/AgencyHostingV1WebsitesWebsiteOrderPlanResource.md)
- [AgencyHostingV1WebsitesWebsiteOrderPlanResourceParameters](docs/Model/AgencyHostingV1WebsitesWebsiteOrderPlanResourceParameters.md)
- [AgencyHostingV1WebsitesWebsiteOrderResource](docs/Model/AgencyHostingV1WebsitesWebsiteOrderResource.md)
- [AgencyHostingV1WebsitesWebsitePhpSettingsResource](docs/Model/AgencyHostingV1WebsitesWebsitePhpSettingsResource.md)
- [AgencyHostingV1WebsitesWebsitePreviewDomainResource](docs/Model/AgencyHostingV1WebsitesWebsitePreviewDomainResource.md)
- [AgencyHostingV1WebsitesWebsiteProcessResource](docs/Model/AgencyHostingV1WebsitesWebsiteProcessResource.md)
- [AgencyHostingV1WebsitesWebsiteRemoteAccessResource](docs/Model/AgencyHostingV1WebsitesWebsiteRemoteAccessResource.md)
- [AgencyHostingV1WebsitesWebsiteResource](docs/Model/AgencyHostingV1WebsitesWebsiteResource.md)
- [AgencyHostingV1WebsitesWebsiteServerResource](docs/Model/AgencyHostingV1WebsitesWebsiteServerResource.md)
- [AgencyHostingV1WebsitesWebsiteSettingsResource](docs/Model/AgencyHostingV1WebsitesWebsiteSettingsResource.md)
- [AgencyHostingV1WebsitesWebsiteSftpDetailsResource](docs/Model/AgencyHostingV1WebsitesWebsiteSftpDetailsResource.md)
- [AgencyHostingV1WebsitesWebsiteSshDetailsResource](docs/Model/AgencyHostingV1WebsitesWebsiteSshDetailsResource.md)
- [AgencyHostingV1WebsitesWebsiteStagingRootResource](docs/Model/AgencyHostingV1WebsitesWebsiteStagingRootResource.md)
- [AgencyHostingV1WebsitesWebsiteUserResource](docs/Model/AgencyHostingV1WebsitesWebsiteUserResource.md)
- [AgencyHostingV1WebsitesWordPressInstallResource](docs/Model/AgencyHostingV1WebsitesWordPressInstallResource.md)
- [AgencyHostingV1WordPressChangeVersionRequest](docs/Model/AgencyHostingV1WordPressChangeVersionRequest.md)
- [AgencyHostingV1WordPressSettingsResource](docs/Model/AgencyHostingV1WordPressSettingsResource.md)
- [AgencyHostingV1WordPressVersionResource](docs/Model/AgencyHostingV1WordPressVersionResource.md)
- [BillingV1CatalogCatalogItemPriceResource](docs/Model/BillingV1CatalogCatalogItemPriceResource.md)
- [BillingV1CatalogCatalogItemResource](docs/Model/BillingV1CatalogCatalogItemResource.md)
- [BillingV1OrderOrderBillingAddressResource](docs/Model/BillingV1OrderOrderBillingAddressResource.md)
- [BillingV1OrderOrderResource](docs/Model/BillingV1OrderOrderResource.md)
- [BillingV1OrderPurchaseRequest](docs/Model/BillingV1OrderPurchaseRequest.md)
- [BillingV1OrderPurchaseRequestItemsInner](docs/Model/BillingV1OrderPurchaseRequestItemsInner.md)
- [BillingV1OrderVirtualMachineOrderResource](docs/Model/BillingV1OrderVirtualMachineOrderResource.md)
- [BillingV1PaymentMethodPaymentMethodResource](docs/Model/BillingV1PaymentMethodPaymentMethodResource.md)
- [BillingV1SubscriptionCancelRequest](docs/Model/BillingV1SubscriptionCancelRequest.md)
- [BillingV1SubscriptionSubscriptionResource](docs/Model/BillingV1SubscriptionSubscriptionResource.md)
- [CommonSchemaPaginationMetaSchema](docs/Model/CommonSchemaPaginationMetaSchema.md)
- [CommonSuccessEmptyResource](docs/Model/CommonSuccessEmptyResource.md)
- [DNSV1SnapshotSnapshotResource](docs/Model/DNSV1SnapshotSnapshotResource.md)
- [DNSV1SnapshotSnapshotWithContentResource](docs/Model/DNSV1SnapshotSnapshotWithContentResource.md)
- [DNSV1ZoneDestroyRequest](docs/Model/DNSV1ZoneDestroyRequest.md)
- [DNSV1ZoneDestroyRequestFiltersInner](docs/Model/DNSV1ZoneDestroyRequestFiltersInner.md)
- [DNSV1ZoneNameRecordResource](docs/Model/DNSV1ZoneNameRecordResource.md)
- [DNSV1ZoneRecordResource](docs/Model/DNSV1ZoneRecordResource.md)
- [DNSV1ZoneResetRequest](docs/Model/DNSV1ZoneResetRequest.md)
- [DNSV1ZoneUpdateRequest](docs/Model/DNSV1ZoneUpdateRequest.md)
- [DNSV1ZoneUpdateRequestZoneInner](docs/Model/DNSV1ZoneUpdateRequestZoneInner.md)
- [DNSV1ZoneUpdateRequestZoneInnerRecordsInner](docs/Model/DNSV1ZoneUpdateRequestZoneInnerRecordsInner.md)
- [DomainAccessVerifierV2VerificationsActiveVerificationsCollection](docs/Model/DomainAccessVerifierV2VerificationsActiveVerificationsCollection.md)
- [DomainAccessVerifierV2VerificationsActiveVerificationsCollectionData](docs/Model/DomainAccessVerifierV2VerificationsActiveVerificationsCollectionData.md)
- [DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataPENDING](docs/Model/DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataPENDING.md)
- [DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataPENDINGDOMAINTLD](docs/Model/DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataPENDINGDOMAINTLD.md)
- [DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataPENDINGDOMAINTLDVERIFICATIONTYPE](docs/Model/DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataPENDINGDOMAINTLDVERIFICATIONTYPE.md)
- [DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataVERIFIED](docs/Model/DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataVERIFIED.md)
- [DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataVERIFIEDDOMAINTLD](docs/Model/DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataVERIFIEDDOMAINTLD.md)
- [DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataVERIFIEDDOMAINTLDVERIFICATIONTYPE](docs/Model/DomainAccessVerifierV2VerificationsActiveVerificationsCollectionDataVERIFIEDDOMAINTLDVERIFICATIONTYPE.md)
- [DomainAccessVerifierV2VerificationsListRequest](docs/Model/DomainAccessVerifierV2VerificationsListRequest.md)
- [DomainsV1AvailabilityAvailabilityRequest](docs/Model/DomainsV1AvailabilityAvailabilityRequest.md)
- [DomainsV1AvailabilityAvailabilityResource](docs/Model/DomainsV1AvailabilityAvailabilityResource.md)
- [DomainsV1DomainDomainExtendedResource](docs/Model/DomainsV1DomainDomainExtendedResource.md)
- [DomainsV1DomainDomainExtendedResourceDomainContacts](docs/Model/DomainsV1DomainDomainExtendedResourceDomainContacts.md)
- [DomainsV1DomainDomainExtendedResourceNameServers](docs/Model/DomainsV1DomainDomainExtendedResourceNameServers.md)
- [DomainsV1DomainDomainResource](docs/Model/DomainsV1DomainDomainResource.md)
- [DomainsV1ForwardingForwardingResource](docs/Model/DomainsV1ForwardingForwardingResource.md)
- [DomainsV1ForwardingStoreRequest](docs/Model/DomainsV1ForwardingStoreRequest.md)
- [DomainsV1ForwardingUpdateRequest](docs/Model/DomainsV1ForwardingUpdateRequest.md)
- [DomainsV1PortfolioAuthCodeAuthCodeResource](docs/Model/DomainsV1PortfolioAuthCodeAuthCodeResource.md)
- [DomainsV1PortfolioPurchaseRequest](docs/Model/DomainsV1PortfolioPurchaseRequest.md)
- [DomainsV1PortfolioPurchaseRequestDomainContacts](docs/Model/DomainsV1PortfolioPurchaseRequestDomainContacts.md)
- [DomainsV1PortfolioRenewalRenewalInformationResource](docs/Model/DomainsV1PortfolioRenewalRenewalInformationResource.md)
- [DomainsV1PortfolioUpdateNameserversRequest](docs/Model/DomainsV1PortfolioUpdateNameserversRequest.md)
- [DomainsV1TransferTransferResource](docs/Model/DomainsV1TransferTransferResource.md)
- [DomainsV1WHOISProfileResource](docs/Model/DomainsV1WHOISProfileResource.md)
- [DomainsV1WHOISStoreRequest](docs/Model/DomainsV1WHOISStoreRequest.md)
- [EcommerceGetStoresV1200Response](docs/Model/EcommerceGetStoresV1200Response.md)
- [EcommerceV1MiscellaneousCustomStorefrontInstructionsResource](docs/Model/EcommerceV1MiscellaneousCustomStorefrontInstructionsResource.md)
- [EcommerceV1PaymentEnableManualPaymentRequest](docs/Model/EcommerceV1PaymentEnableManualPaymentRequest.md)
- [EcommerceV1PaymentManualPaymentResource](docs/Model/EcommerceV1PaymentManualPaymentResource.md)
- [EcommerceV1PaymentManualPaymentResourcePaymentMethod](docs/Model/EcommerceV1PaymentManualPaymentResourcePaymentMethod.md)
- [EcommerceV1ProductCreateDigitalProductRequest](docs/Model/EcommerceV1ProductCreateDigitalProductRequest.md)
- [EcommerceV1ProductCreatePhysicalProductRequest](docs/Model/EcommerceV1ProductCreatePhysicalProductRequest.md)
- [EcommerceV1ProductProductCreationResource](docs/Model/EcommerceV1ProductProductCreationResource.md)
- [EcommerceV1ProductProductCreationResourceProduct](docs/Model/EcommerceV1ProductProductCreationResourceProduct.md)
- [EcommerceV1SalesChannelSalesChannelCreationResource](docs/Model/EcommerceV1SalesChannelSalesChannelCreationResource.md)
- [EcommerceV1SalesChannelSalesChannelCreationResourceSalesChannel](docs/Model/EcommerceV1SalesChannelSalesChannelCreationResourceSalesChannel.md)
- [EcommerceV1SalesChannelSalesChannelListResource](docs/Model/EcommerceV1SalesChannelSalesChannelListResource.md)
- [EcommerceV1SalesChannelSalesChannelListResourceSalesChannelsInner](docs/Model/EcommerceV1SalesChannelSalesChannelListResourceSalesChannelsInner.md)
- [EcommerceV1SalesChannelSalesChannelUpdateResource](docs/Model/EcommerceV1SalesChannelSalesChannelUpdateResource.md)
- [EcommerceV1SalesChannelStoreRequest](docs/Model/EcommerceV1SalesChannelStoreRequest.md)
- [EcommerceV1SalesChannelUpdateRequest](docs/Model/EcommerceV1SalesChannelUpdateRequest.md)
- [EcommerceV1ShippingSetShippingRequest](docs/Model/EcommerceV1ShippingSetShippingRequest.md)
- [EcommerceV1ShippingShippingResource](docs/Model/EcommerceV1ShippingShippingResource.md)
- [EcommerceV1ShippingShippingResourceShippingOption](docs/Model/EcommerceV1ShippingShippingResourceShippingOption.md)
- [EcommerceV1StoreStoreCreationResource](docs/Model/EcommerceV1StoreStoreCreationResource.md)
- [EcommerceV1StoreStoreCreationResourceSalesChannel](docs/Model/EcommerceV1StoreStoreCreationResourceSalesChannel.md)
- [EcommerceV1StoreStoreCreationResourceStore](docs/Model/EcommerceV1StoreStoreCreationResourceStore.md)
- [EcommerceV1StoreStoreDeleteResource](docs/Model/EcommerceV1StoreStoreDeleteResource.md)
- [EcommerceV1StoreStoreMetadataResource](docs/Model/EcommerceV1StoreStoreMetadataResource.md)
- [EcommerceV1StoreStoreMetadataResourceMetadata](docs/Model/EcommerceV1StoreStoreMetadataResourceMetadata.md)
- [EcommerceV1StoreStoreMetadataResourceMetadataDefaultCurrency](docs/Model/EcommerceV1StoreStoreMetadataResourceMetadataDefaultCurrency.md)
- [EcommerceV1StoreStoreRequest](docs/Model/EcommerceV1StoreStoreRequest.md)
- [EcommerceV1StoreStoreRequestSalesChannel](docs/Model/EcommerceV1StoreStoreRequestSalesChannel.md)
- [EcommerceV1StoreStoreResource](docs/Model/EcommerceV1StoreStoreResource.md)
- [HorizonsV1WebsitesCreateWebsiteRequest](docs/Model/HorizonsV1WebsitesCreateWebsiteRequest.md)
- [HorizonsV1WebsitesCreateWebsiteRequestMessageInner](docs/Model/HorizonsV1WebsitesCreateWebsiteRequestMessageInner.md)
- [HorizonsV1WebsitesCreatedWebsiteResource](docs/Model/HorizonsV1WebsitesCreatedWebsiteResource.md)
- [HorizonsV1WebsitesWebsiteUrlResource](docs/Model/HorizonsV1WebsitesWebsiteUrlResource.md)
- [HostingListAccountDatabasesV1200Response](docs/Model/HostingListAccountDatabasesV1200Response.md)
- [HostingListNodeJSBuildsV1200Response](docs/Model/HostingListNodeJSBuildsV1200Response.md)
- [HostingListOrdersV1200Response](docs/Model/HostingListOrdersV1200Response.md)
- [HostingListWebsitesV1200Response](docs/Model/HostingListWebsitesV1200Response.md)
- [HostingV1CacheToggleCacheRequest](docs/Model/HostingV1CacheToggleCacheRequest.md)
- [HostingV1CacheToggleCachelessModeRequest](docs/Model/HostingV1CacheToggleCachelessModeRequest.md)
- [HostingV1CronJobsCreateCronJobRequest](docs/Model/HostingV1CronJobsCreateCronJobRequest.md)
- [HostingV1CronJobsCronJobOutputResource](docs/Model/HostingV1CronJobsCronJobOutputResource.md)
- [HostingV1CronJobsCronJobResource](docs/Model/HostingV1CronJobsCronJobResource.md)
- [HostingV1DatabasesChangeDatabasePasswordRequest](docs/Model/HostingV1DatabasesChangeDatabasePasswordRequest.md)
- [HostingV1DatabasesCreateDatabaseRequest](docs/Model/HostingV1DatabasesCreateDatabaseRequest.md)
- [HostingV1DatabasesDatabaseResource](docs/Model/HostingV1DatabasesDatabaseResource.md)
- [HostingV1DatabasesPhpMyAdminLinkResource](docs/Model/HostingV1DatabasesPhpMyAdminLinkResource.md)
- [HostingV1DatabasesRemoteConnectionsCreateRemoteConnectionRequest](docs/Model/HostingV1DatabasesRemoteConnectionsCreateRemoteConnectionRequest.md)
- [HostingV1DatabasesRemoteConnectionsRemoteConnectionResource](docs/Model/HostingV1DatabasesRemoteConnectionsRemoteConnectionResource.md)
- [HostingV1DatacenterCoordinatesResource](docs/Model/HostingV1DatacenterCoordinatesResource.md)
- [HostingV1DatacenterDatacenterResource](docs/Model/HostingV1DatacenterDatacenterResource.md)
- [HostingV1DatacentersListRequest](docs/Model/HostingV1DatacentersListRequest.md)
- [HostingV1DomainsCreateParkedDomainRequest](docs/Model/HostingV1DomainsCreateParkedDomainRequest.md)
- [HostingV1DomainsCreateSubdomainRequest](docs/Model/HostingV1DomainsCreateSubdomainRequest.md)
- [HostingV1DomainsDomainAccessResource](docs/Model/HostingV1DomainsDomainAccessResource.md)
- [HostingV1DomainsFreeSubdomainResource](docs/Model/HostingV1DomainsFreeSubdomainResource.md)
- [HostingV1DomainsParkedDomainResource](docs/Model/HostingV1DomainsParkedDomainResource.md)
- [HostingV1DomainsSubdomainResource](docs/Model/HostingV1DomainsSubdomainResource.md)
- [HostingV1DomainsVerifyOwnershipRequest](docs/Model/HostingV1DomainsVerifyOwnershipRequest.md)
- [HostingV1NodeJsBuildLogsResource](docs/Model/HostingV1NodeJsBuildLogsResource.md)
- [HostingV1NodeJsBuildOptionsResource](docs/Model/HostingV1NodeJsBuildOptionsResource.md)
- [HostingV1NodeJsBuildResource](docs/Model/HostingV1NodeJsBuildResource.md)
- [HostingV1NodeJsCreateFromArchiveRequest](docs/Model/HostingV1NodeJsCreateFromArchiveRequest.md)
- [HostingV1NodeJsPatchResultResource](docs/Model/HostingV1NodeJsPatchResultResource.md)
- [HostingV1NodeJsPatchVulnerabilitiesRequest](docs/Model/HostingV1NodeJsPatchVulnerabilitiesRequest.md)
- [HostingV1NodeJsSourceOptionsResource](docs/Model/HostingV1NodeJsSourceOptionsResource.md)
- [HostingV1NodeJsVulnerabilityResource](docs/Model/HostingV1NodeJsVulnerabilityResource.md)
- [HostingV1OrdersOrderResource](docs/Model/HostingV1OrdersOrderResource.md)
- [HostingV1OrdersPlanResource](docs/Model/HostingV1OrdersPlanResource.md)
- [HostingV1PhpPhpDetailsResource](docs/Model/HostingV1PhpPhpDetailsResource.md)
- [HostingV1PhpPhpInfoResource](docs/Model/HostingV1PhpPhpInfoResource.md)
- [HostingV1PhpPhpOptionResource](docs/Model/HostingV1PhpPhpOptionResource.md)
- [HostingV1PhpPhpVersionsResource](docs/Model/HostingV1PhpPhpVersionsResource.md)
- [HostingV1PhpUpdatePhpExtensionsRequest](docs/Model/HostingV1PhpUpdatePhpExtensionsRequest.md)
- [HostingV1PhpUpdatePhpOptionsRequest](docs/Model/HostingV1PhpUpdatePhpOptionsRequest.md)
- [HostingV1PhpUpdatePhpOptionsRequestOptionsValue](docs/Model/HostingV1PhpUpdatePhpOptionsRequestOptionsValue.md)
- [HostingV1PhpUpdatePhpVersionRequest](docs/Model/HostingV1PhpUpdatePhpVersionRequest.md)
- [HostingV1WebsitesCreateWebsiteRequest](docs/Model/HostingV1WebsitesCreateWebsiteRequest.md)
- [HostingV1WebsitesDeleteWebsiteRequest](docs/Model/HostingV1WebsitesDeleteWebsiteRequest.md)
- [HostingV1WebsitesWebsiteResource](docs/Model/HostingV1WebsitesWebsiteResource.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject2Errors](docs/Model/InlineObject2Errors.md)
- [MailListAPITokensV1200Response](docs/Model/MailListAPITokensV1200Response.md)
- [MailListAccessLogsV1200Response](docs/Model/MailListAccessLogsV1200Response.md)
- [MailListActionLogsV1200Response](docs/Model/MailListActionLogsV1200Response.md)
- [MailListInboundLogsV1200Response](docs/Model/MailListInboundLogsV1200Response.md)
- [MailListMailboxActionLogsV1200Response](docs/Model/MailListMailboxActionLogsV1200Response.md)
- [MailListMailboxesV1200Response](docs/Model/MailListMailboxesV1200Response.md)
- [MailListOrdersV1200Response](docs/Model/MailListOrdersV1200Response.md)
- [MailListWebhookDeliveryLogsV1200Response](docs/Model/MailListWebhookDeliveryLogsV1200Response.md)
- [MailListWebhooksV1200Response](docs/Model/MailListWebhooksV1200Response.md)
- [MailV1ApiTokensApiTokenCreatedResource](docs/Model/MailV1ApiTokensApiTokenCreatedResource.md)
- [MailV1ApiTokensApiTokenMailboxResource](docs/Model/MailV1ApiTokensApiTokenMailboxResource.md)
- [MailV1ApiTokensApiTokenResource](docs/Model/MailV1ApiTokensApiTokenResource.md)
- [MailV1ApiTokensApiTokenScopeResource](docs/Model/MailV1ApiTokensApiTokenScopeResource.md)
- [MailV1LogsAccessAccessLogResource](docs/Model/MailV1LogsAccessAccessLogResource.md)
- [MailV1LogsActionActionLogResource](docs/Model/MailV1LogsActionActionLogResource.md)
- [MailV1LogsCommonDeliveryLogRelayEventResource](docs/Model/MailV1LogsCommonDeliveryLogRelayEventResource.md)
- [MailV1LogsCommonDeliveryLogResource](docs/Model/MailV1LogsCommonDeliveryLogResource.md)
- [MailV1LogsMailboxActionsMailboxActionLogResource](docs/Model/MailV1LogsMailboxActionsMailboxActionLogResource.md)
- [MailV1MailboxesMailboxCountsResource](docs/Model/MailV1MailboxesMailboxCountsResource.md)
- [MailV1MailboxesMailboxProtocolsResource](docs/Model/MailV1MailboxesMailboxProtocolsResource.md)
- [MailV1MailboxesMailboxResource](docs/Model/MailV1MailboxesMailboxResource.md)
- [MailV1MailboxesMailboxUsageResource](docs/Model/MailV1MailboxesMailboxUsageResource.md)
- [MailV1OrdersOrderDomainResource](docs/Model/MailV1OrdersOrderDomainResource.md)
- [MailV1OrdersOrderPlanResource](docs/Model/MailV1OrdersOrderPlanResource.md)
- [MailV1OrdersOrderResource](docs/Model/MailV1OrdersOrderResource.md)
- [MailV1OrdersPlanDomainResource](docs/Model/MailV1OrdersPlanDomainResource.md)
- [MailV1OrdersPlanMailboxResource](docs/Model/MailV1OrdersPlanMailboxResource.md)
- [MailV1OrdersPlanResource](docs/Model/MailV1OrdersPlanResource.md)
- [MailV1SchemaChangeMailboxPasswordRequestSchema](docs/Model/MailV1SchemaChangeMailboxPasswordRequestSchema.md)
- [MailV1SchemaCreateApiTokenRequestSchema](docs/Model/MailV1SchemaCreateApiTokenRequestSchema.md)
- [MailV1SchemaCreateApiTokenRequestSchemaScope](docs/Model/MailV1SchemaCreateApiTokenRequestSchemaScope.md)
- [MailV1SchemaCreateMailboxRequestSchema](docs/Model/MailV1SchemaCreateMailboxRequestSchema.md)
- [MailV1SchemaCreateWebhookRequestSchema](docs/Model/MailV1SchemaCreateWebhookRequestSchema.md)
- [MailV1SchemaUpdateWebhookRequestSchema](docs/Model/MailV1SchemaUpdateWebhookRequestSchema.md)
- [MailV1WebhooksWebhookCreatedResource](docs/Model/MailV1WebhooksWebhookCreatedResource.md)
- [MailV1WebhooksWebhookDeliveryLogResource](docs/Model/MailV1WebhooksWebhookDeliveryLogResource.md)
- [MailV1WebhooksWebhookMailboxResource](docs/Model/MailV1WebhooksWebhookMailboxResource.md)
- [MailV1WebhooksWebhookResource](docs/Model/MailV1WebhooksWebhookResource.md)
- [MailV1WebhooksWebhookSecretResource](docs/Model/MailV1WebhooksWebhookSecretResource.md)
- [MailV1WebhooksWebhookTestResultResource](docs/Model/MailV1WebhooksWebhookTestResultResource.md)
- [ReachListContactsV1200Response](docs/Model/ReachListContactsV1200Response.md)
- [ReachListProfileSegmentContactsV1200Response](docs/Model/ReachListProfileSegmentContactsV1200Response.md)
- [ReachV1ContactsContactResource](docs/Model/ReachV1ContactsContactResource.md)
- [ReachV1ContactsGroupsContactGroupResource](docs/Model/ReachV1ContactsGroupsContactGroupResource.md)
- [ReachV1ContactsSegmentsContactSegmentResource](docs/Model/ReachV1ContactsSegmentsContactSegmentResource.md)
- [ReachV1ContactsSegmentsSegmentResource](docs/Model/ReachV1ContactsSegmentsSegmentResource.md)
- [ReachV1ContactsSegmentsSegmentationContactResource](docs/Model/ReachV1ContactsSegmentsSegmentationContactResource.md)
- [ReachV1ContactsSegmentsStoreRequest](docs/Model/ReachV1ContactsSegmentsStoreRequest.md)
- [ReachV1ContactsSegmentsStoreRequestConditionsInner](docs/Model/ReachV1ContactsSegmentsStoreRequestConditionsInner.md)
- [ReachV1ContactsSegmentsStoreRequestConditionsInnerValue](docs/Model/ReachV1ContactsSegmentsStoreRequestConditionsInnerValue.md)
- [ReachV1ContactsStoreRequest](docs/Model/ReachV1ContactsStoreRequest.md)
- [ReachV1ProfilesDomainsDnsRecordStatus](docs/Model/ReachV1ProfilesDomainsDnsRecordStatus.md)
- [ReachV1ProfilesDomainsDnsRecordStatusActualInner](docs/Model/ReachV1ProfilesDomainsDnsRecordStatusActualInner.md)
- [ReachV1ProfilesDomainsDnsRecordStatusSuggestedInner](docs/Model/ReachV1ProfilesDomainsDnsRecordStatusSuggestedInner.md)
- [ReachV1ProfilesDomainsDnsStatusResource](docs/Model/ReachV1ProfilesDomainsDnsStatusResource.md)
- [ReachV1ProfilesProfileResource](docs/Model/ReachV1ProfilesProfileResource.md)
- [ReachV1ProfilesProfileResourceLimits](docs/Model/ReachV1ProfilesProfileResourceLimits.md)
- [ReachV1ProfilesProfileResourceProfilesInner](docs/Model/ReachV1ProfilesProfileResourceProfilesInner.md)
- [VPSV1ActionActionResource](docs/Model/VPSV1ActionActionResource.md)
- [VPSV1ActionListResponse](docs/Model/VPSV1ActionListResponse.md)
- [VPSV1BackupBackupResource](docs/Model/VPSV1BackupBackupResource.md)
- [VPSV1BackupListResponse](docs/Model/VPSV1BackupListResponse.md)
- [VPSV1DataCenterDataCenterResource](docs/Model/VPSV1DataCenterDataCenterResource.md)
- [VPSV1DockerManagerContainerPortResource](docs/Model/VPSV1DockerManagerContainerPortResource.md)
- [VPSV1DockerManagerContainerResource](docs/Model/VPSV1DockerManagerContainerResource.md)
- [VPSV1DockerManagerContainerStatsResource](docs/Model/VPSV1DockerManagerContainerStatsResource.md)
- [VPSV1DockerManagerContentResource](docs/Model/VPSV1DockerManagerContentResource.md)
- [VPSV1DockerManagerLogEntryResource](docs/Model/VPSV1DockerManagerLogEntryResource.md)
- [VPSV1DockerManagerLogsResource](docs/Model/VPSV1DockerManagerLogsResource.md)
- [VPSV1DockerManagerProjectResource](docs/Model/VPSV1DockerManagerProjectResource.md)
- [VPSV1FirewallFirewallResource](docs/Model/VPSV1FirewallFirewallResource.md)
- [VPSV1FirewallFirewallRuleResource](docs/Model/VPSV1FirewallFirewallRuleResource.md)
- [VPSV1FirewallListResponse](docs/Model/VPSV1FirewallListResponse.md)
- [VPSV1FirewallRulesStoreRequest](docs/Model/VPSV1FirewallRulesStoreRequest.md)
- [VPSV1FirewallStoreRequest](docs/Model/VPSV1FirewallStoreRequest.md)
- [VPSV1IPAddressIPAddressResource](docs/Model/VPSV1IPAddressIPAddressResource.md)
- [VPSV1MalwareMetricsResource](docs/Model/VPSV1MalwareMetricsResource.md)
- [VPSV1MetricsMetricsCollection](docs/Model/VPSV1MetricsMetricsCollection.md)
- [VPSV1MetricsMetricsResource](docs/Model/VPSV1MetricsMetricsResource.md)
- [VPSV1PostInstallScriptListResponse](docs/Model/VPSV1PostInstallScriptListResponse.md)
- [VPSV1PostInstallScriptPostInstallScriptResource](docs/Model/VPSV1PostInstallScriptPostInstallScriptResource.md)
- [VPSV1PostInstallScriptStoreRequest](docs/Model/VPSV1PostInstallScriptStoreRequest.md)
- [VPSV1PublicKeyAttachRequest](docs/Model/VPSV1PublicKeyAttachRequest.md)
- [VPSV1PublicKeyListResponse](docs/Model/VPSV1PublicKeyListResponse.md)
- [VPSV1PublicKeyPublicKeyResource](docs/Model/VPSV1PublicKeyPublicKeyResource.md)
- [VPSV1PublicKeyStoreRequest](docs/Model/VPSV1PublicKeyStoreRequest.md)
- [VPSV1SnapshotSnapshotResource](docs/Model/VPSV1SnapshotSnapshotResource.md)
- [VPSV1TemplateTemplateResource](docs/Model/VPSV1TemplateTemplateResource.md)
- [VPSV1VirtualMachineDockerManagerUpRequest](docs/Model/VPSV1VirtualMachineDockerManagerUpRequest.md)
- [VPSV1VirtualMachineHostnameUpdateRequest](docs/Model/VPSV1VirtualMachineHostnameUpdateRequest.md)
- [VPSV1VirtualMachineMetricGetRequest](docs/Model/VPSV1VirtualMachineMetricGetRequest.md)
- [VPSV1VirtualMachineNameserversUpdateRequest](docs/Model/VPSV1VirtualMachineNameserversUpdateRequest.md)
- [VPSV1VirtualMachinePTRStoreRequest](docs/Model/VPSV1VirtualMachinePTRStoreRequest.md)
- [VPSV1VirtualMachinePanelPasswordUpdateRequest](docs/Model/VPSV1VirtualMachinePanelPasswordUpdateRequest.md)
- [VPSV1VirtualMachinePurchaseRequest](docs/Model/VPSV1VirtualMachinePurchaseRequest.md)
- [VPSV1VirtualMachineRecoveryStartRequest](docs/Model/VPSV1VirtualMachineRecoveryStartRequest.md)
- [VPSV1VirtualMachineRecreateRequest](docs/Model/VPSV1VirtualMachineRecreateRequest.md)
- [VPSV1VirtualMachineRootPasswordUpdateRequest](docs/Model/VPSV1VirtualMachineRootPasswordUpdateRequest.md)
- [VPSV1VirtualMachineSetupRequest](docs/Model/VPSV1VirtualMachineSetupRequest.md)
- [VPSV1VirtualMachineSetupRequestPublicKey](docs/Model/VPSV1VirtualMachineSetupRequestPublicKey.md)
- [VPSV1VirtualMachineVirtualMachineResource](docs/Model/VPSV1VirtualMachineVirtualMachineResource.md)
- [WordPressV1CommonVulnerabilityResource](docs/Model/WordPressV1CommonVulnerabilityResource.md)
- [WordPressV1HostingerPluginsAiOptionStatusResource](docs/Model/WordPressV1HostingerPluginsAiOptionStatusResource.md)
- [WordPressV1HostingerPluginsUpdateAiOptionStatusRequest](docs/Model/WordPressV1HostingerPluginsUpdateAiOptionStatusRequest.md)
- [WordPressV1InstallationsCheckIsValidRequest](docs/Model/WordPressV1InstallationsCheckIsValidRequest.md)
- [WordPressV1InstallationsCheckIsValidResultResource](docs/Model/WordPressV1InstallationsCheckIsValidResultResource.md)
- [WordPressV1InstallationsDeleteInstallationRequest](docs/Model/WordPressV1InstallationsDeleteInstallationRequest.md)
- [WordPressV1InstallationsInstallWordPressRequest](docs/Model/WordPressV1InstallationsInstallWordPressRequest.md)
- [WordPressV1InstallationsInstallWordPressRequestCredentials](docs/Model/WordPressV1InstallationsInstallWordPressRequestCredentials.md)
- [WordPressV1InstallationsInstallWordPressRequestDatabase](docs/Model/WordPressV1InstallationsInstallWordPressRequestDatabase.md)
- [WordPressV1InstallationsJwtTokenResource](docs/Model/WordPressV1InstallationsJwtTokenResource.md)
- [WordPressV1InstallationsUpdateInstallationRequest](docs/Model/WordPressV1InstallationsUpdateInstallationRequest.md)
- [WordPressV1InstallationsUpdateResource](docs/Model/WordPressV1InstallationsUpdateResource.md)
- [WordPressV1InstallationsVersionResource](docs/Model/WordPressV1InstallationsVersionResource.md)
- [WordPressV1InstallationsWordPressInstallationResource](docs/Model/WordPressV1InstallationsWordPressInstallationResource.md)
- [WordPressV1InstallationsWordPressMcpInstallationResource](docs/Model/WordPressV1InstallationsWordPressMcpInstallationResource.md)
- [WordPressV1LitespeedLitespeedCacheStatusResource](docs/Model/WordPressV1LitespeedLitespeedCacheStatusResource.md)
- [WordPressV1LoginLoginLinksResource](docs/Model/WordPressV1LoginLoginLinksResource.md)
- [WordPressV1MaintenanceMaintenanceStatusResource](docs/Model/WordPressV1MaintenanceMaintenanceStatusResource.md)
- [WordPressV1MaintenanceToggleMaintenanceRequest](docs/Model/WordPressV1MaintenanceToggleMaintenanceRequest.md)
- [WordPressV1MemcachedMemcachedStatusResource](docs/Model/WordPressV1MemcachedMemcachedStatusResource.md)
- [WordPressV1MemcachedToggleMemcachedRequest](docs/Model/WordPressV1MemcachedToggleMemcachedRequest.md)
- [WordPressV1PluginsActivatePluginRequest](docs/Model/WordPressV1PluginsActivatePluginRequest.md)
- [WordPressV1PluginsAvailablePluginResource](docs/Model/WordPressV1PluginsAvailablePluginResource.md)
- [WordPressV1PluginsDeactivatePluginRequest](docs/Model/WordPressV1PluginsDeactivatePluginRequest.md)
- [WordPressV1PluginsInstallPluginsRequest](docs/Model/WordPressV1PluginsInstallPluginsRequest.md)
- [WordPressV1PluginsInstalledPluginResource](docs/Model/WordPressV1PluginsInstalledPluginResource.md)
- [WordPressV1PluginsPluginResource](docs/Model/WordPressV1PluginsPluginResource.md)
- [WordPressV1PluginsPluginResourceIcons](docs/Model/WordPressV1PluginsPluginResourceIcons.md)
- [WordPressV1PluginsSuggestedPluginGroupResource](docs/Model/WordPressV1PluginsSuggestedPluginGroupResource.md)
- [WordPressV1PluginsSuggestedPluginResource](docs/Model/WordPressV1PluginsSuggestedPluginResource.md)
- [WordPressV1PluginsUninstallPluginsRequest](docs/Model/WordPressV1PluginsUninstallPluginsRequest.md)
- [WordPressV1PluginsUpdateHostingerPluginRequest](docs/Model/WordPressV1PluginsUpdateHostingerPluginRequest.md)
- [WordPressV1PluginsUpdatePluginsRequest](docs/Model/WordPressV1PluginsUpdatePluginsRequest.md)
- [WordPressV1PluginsWoocommerceInstalledResource](docs/Model/WordPressV1PluginsWoocommerceInstalledResource.md)
- [WordPressV1ThemesActivateThemeRequest](docs/Model/WordPressV1ThemesActivateThemeRequest.md)
- [WordPressV1ThemesInstallThemeRequest](docs/Model/WordPressV1ThemesInstallThemeRequest.md)
- [WordPressV1ThemesInstalledThemeResource](docs/Model/WordPressV1ThemesInstalledThemeResource.md)
- [WordPressV1ThemesThemeResource](docs/Model/WordPressV1ThemesThemeResource.md)
- [WordPressV1ThemesUninstallThemesRequest](docs/Model/WordPressV1ThemesUninstallThemesRequest.md)
- [WordPressV1ThemesUpdateThemesRequest](docs/Model/WordPressV1ThemesUpdateThemesRequest.md)
