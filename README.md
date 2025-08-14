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


$apiInstance = new Hostinger\Api\BillingCatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    client: new GuzzleHttp\Client(),
    config: $config
);
$category = VPS; // string | Filter catalog items by category
$name = .COM*; // string | Filter catalog items by name. Use `*` for wildcard search, e.g. `.COM*` to find .com domain

try {
    $result = $apiInstance->getCatalogItemListV1($category, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingCatalogApi->getCatalogItemListV1: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://developers.hostinger.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BillingCatalogApi* | [**getCatalogItemListV1**](docs/Api/BillingCatalogApi.md#getcatalogitemlistv1) | **GET** /api/billing/v1/catalog | Get catalog item list
*BillingOrdersApi* | [**createServiceOrderV1**](docs/Api/BillingOrdersApi.md#createserviceorderv1) | **POST** /api/billing/v1/orders | Create service order
*BillingPaymentMethodsApi* | [**deletePaymentMethodV1**](docs/Api/BillingPaymentMethodsApi.md#deletepaymentmethodv1) | **DELETE** /api/billing/v1/payment-methods/{paymentMethodId} | Delete payment method
*BillingPaymentMethodsApi* | [**getPaymentMethodListV1**](docs/Api/BillingPaymentMethodsApi.md#getpaymentmethodlistv1) | **GET** /api/billing/v1/payment-methods | Get payment method list
*BillingPaymentMethodsApi* | [**setDefaultPaymentMethodV1**](docs/Api/BillingPaymentMethodsApi.md#setdefaultpaymentmethodv1) | **POST** /api/billing/v1/payment-methods/{paymentMethodId} | Set default payment method
*BillingSubscriptionsApi* | [**cancelSubscriptionV1**](docs/Api/BillingSubscriptionsApi.md#cancelsubscriptionv1) | **DELETE** /api/billing/v1/subscriptions/{subscriptionId} | Cancel subscription
*BillingSubscriptionsApi* | [**getSubscriptionListV1**](docs/Api/BillingSubscriptionsApi.md#getsubscriptionlistv1) | **GET** /api/billing/v1/subscriptions | Get subscription list
*DNSSnapshotApi* | [**getDNSSnapshotListV1**](docs/Api/DNSSnapshotApi.md#getdnssnapshotlistv1) | **GET** /api/dns/v1/snapshots/{domain} | Get DNS snapshot list
*DNSSnapshotApi* | [**getDNSSnapshotV1**](docs/Api/DNSSnapshotApi.md#getdnssnapshotv1) | **GET** /api/dns/v1/snapshots/{domain}/{snapshotId} | Get DNS snapshot
*DNSSnapshotApi* | [**restoreDNSSnapshotV1**](docs/Api/DNSSnapshotApi.md#restorednssnapshotv1) | **POST** /api/dns/v1/snapshots/{domain}/{snapshotId}/restore | Restore DNS snapshot
*DNSZoneApi* | [**deleteDNSRecordsV1**](docs/Api/DNSZoneApi.md#deletednsrecordsv1) | **DELETE** /api/dns/v1/zones/{domain} | Delete DNS records
*DNSZoneApi* | [**getDNSRecordsV1**](docs/Api/DNSZoneApi.md#getdnsrecordsv1) | **GET** /api/dns/v1/zones/{domain} | Get DNS records
*DNSZoneApi* | [**resetDNSRecordsV1**](docs/Api/DNSZoneApi.md#resetdnsrecordsv1) | **POST** /api/dns/v1/zones/{domain}/reset | Reset DNS records
*DNSZoneApi* | [**updateDNSRecordsV1**](docs/Api/DNSZoneApi.md#updatednsrecordsv1) | **PUT** /api/dns/v1/zones/{domain} | Update DNS records
*DNSZoneApi* | [**validateDNSRecordsV1**](docs/Api/DNSZoneApi.md#validatednsrecordsv1) | **POST** /api/dns/v1/zones/{domain}/validate | Validate DNS records
*DomainsAvailabilityApi* | [**checkDomainAvailabilityV1**](docs/Api/DomainsAvailabilityApi.md#checkdomainavailabilityv1) | **POST** /api/domains/v1/availability | Check domain availability
*DomainsForwardingApi* | [**createDomainForwardingV1**](docs/Api/DomainsForwardingApi.md#createdomainforwardingv1) | **POST** /api/domains/v1/forwarding | Create domain forwarding
*DomainsForwardingApi* | [**deleteDomainForwardingV1**](docs/Api/DomainsForwardingApi.md#deletedomainforwardingv1) | **DELETE** /api/domains/v1/forwarding/{domain} | Delete domain forwarding
*DomainsForwardingApi* | [**getDomainForwardingV1**](docs/Api/DomainsForwardingApi.md#getdomainforwardingv1) | **GET** /api/domains/v1/forwarding/{domain} | Get domain forwarding
*DomainsPortfolioApi* | [**disableDomainLockV1**](docs/Api/DomainsPortfolioApi.md#disabledomainlockv1) | **DELETE** /api/domains/v1/portfolio/{domain}/domain-lock | Disable domain lock
*DomainsPortfolioApi* | [**disablePrivacyProtectionV1**](docs/Api/DomainsPortfolioApi.md#disableprivacyprotectionv1) | **DELETE** /api/domains/v1/portfolio/{domain}/privacy-protection | Disable privacy protection
*DomainsPortfolioApi* | [**enableDomainLockV1**](docs/Api/DomainsPortfolioApi.md#enabledomainlockv1) | **PUT** /api/domains/v1/portfolio/{domain}/domain-lock | Enable domain lock
*DomainsPortfolioApi* | [**enablePrivacyProtectionV1**](docs/Api/DomainsPortfolioApi.md#enableprivacyprotectionv1) | **PUT** /api/domains/v1/portfolio/{domain}/privacy-protection | Enable privacy protection
*DomainsPortfolioApi* | [**getDomainDetailsV1**](docs/Api/DomainsPortfolioApi.md#getdomaindetailsv1) | **GET** /api/domains/v1/portfolio/{domain} | Get domain details
*DomainsPortfolioApi* | [**getDomainListV1**](docs/Api/DomainsPortfolioApi.md#getdomainlistv1) | **GET** /api/domains/v1/portfolio | Get domain list
*DomainsPortfolioApi* | [**purchaseNewDomainV1**](docs/Api/DomainsPortfolioApi.md#purchasenewdomainv1) | **POST** /api/domains/v1/portfolio | Purchase new domain
*DomainsPortfolioApi* | [**updateDomainNameserversV1**](docs/Api/DomainsPortfolioApi.md#updatedomainnameserversv1) | **PUT** /api/domains/v1/portfolio/{domain}/nameservers | Update domain nameservers
*DomainsWHOISApi* | [**createWHOISProfileV1**](docs/Api/DomainsWHOISApi.md#createwhoisprofilev1) | **POST** /api/domains/v1/whois | Create WHOIS profile
*DomainsWHOISApi* | [**deleteWHOISProfileV1**](docs/Api/DomainsWHOISApi.md#deletewhoisprofilev1) | **DELETE** /api/domains/v1/whois/{whoisId} | Delete WHOIS profile
*DomainsWHOISApi* | [**getWHOISProfileListV1**](docs/Api/DomainsWHOISApi.md#getwhoisprofilelistv1) | **GET** /api/domains/v1/whois | Get WHOIS profile list
*DomainsWHOISApi* | [**getWHOISProfileUsageV1**](docs/Api/DomainsWHOISApi.md#getwhoisprofileusagev1) | **GET** /api/domains/v1/whois/{whoisId}/usage | Get WHOIS profile usage
*DomainsWHOISApi* | [**getWHOISProfileV1**](docs/Api/DomainsWHOISApi.md#getwhoisprofilev1) | **GET** /api/domains/v1/whois/{whoisId} | Get WHOIS profile
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

## Models

- [BillingV1CatalogCatalogItemPriceResource](docs/Model/BillingV1CatalogCatalogItemPriceResource.md)
- [BillingV1CatalogCatalogItemResource](docs/Model/BillingV1CatalogCatalogItemResource.md)
- [BillingV1OrderOrderBillingAddressResource](docs/Model/BillingV1OrderOrderBillingAddressResource.md)
- [BillingV1OrderOrderResource](docs/Model/BillingV1OrderOrderResource.md)
- [BillingV1OrderStoreRequest](docs/Model/BillingV1OrderStoreRequest.md)
- [BillingV1OrderStoreRequestItemsInner](docs/Model/BillingV1OrderStoreRequestItemsInner.md)
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
- [DomainsV1AvailabilityAvailabilityRequest](docs/Model/DomainsV1AvailabilityAvailabilityRequest.md)
- [DomainsV1AvailabilityAvailabilityResource](docs/Model/DomainsV1AvailabilityAvailabilityResource.md)
- [DomainsV1DomainDomainExtendedResource](docs/Model/DomainsV1DomainDomainExtendedResource.md)
- [DomainsV1DomainDomainExtendedResourceDomainContacts](docs/Model/DomainsV1DomainDomainExtendedResourceDomainContacts.md)
- [DomainsV1DomainDomainExtendedResourceNameServers](docs/Model/DomainsV1DomainDomainExtendedResourceNameServers.md)
- [DomainsV1DomainDomainResource](docs/Model/DomainsV1DomainDomainResource.md)
- [DomainsV1ForwardingForwardingResource](docs/Model/DomainsV1ForwardingForwardingResource.md)
- [DomainsV1ForwardingStoreRequest](docs/Model/DomainsV1ForwardingStoreRequest.md)
- [DomainsV1PortfolioPurchaseRequest](docs/Model/DomainsV1PortfolioPurchaseRequest.md)
- [DomainsV1PortfolioPurchaseRequestDomainContacts](docs/Model/DomainsV1PortfolioPurchaseRequestDomainContacts.md)
- [DomainsV1PortfolioUpdateNameserversRequest](docs/Model/DomainsV1PortfolioUpdateNameserversRequest.md)
- [DomainsV1WHOISProfileResource](docs/Model/DomainsV1WHOISProfileResource.md)
- [DomainsV1WHOISStoreRequest](docs/Model/DomainsV1WHOISStoreRequest.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject2Errors](docs/Model/InlineObject2Errors.md)
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
