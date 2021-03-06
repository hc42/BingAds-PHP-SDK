<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified campaigns within an account.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getcampaignsbyids?view=bingads-11 GetCampaignsByIds Request Object
     * 
     * @uses CampaignType
     * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
     */
    final class GetCampaignsByIdsRequest
    {
        /**
         * The identifier of the account that contains the campaigns to get.
         * @var integer
         */
        public $AccountId;

        /**
         * A maximum of 100 identifiers of the campaigns to get from the specified account.
         * @var integer[]
         */
        public $CampaignIds;

        /**
         * The type of campaigns to get, for example SearchAndContent, Shopping, or DynamicSearchAds.
         * @var CampaignType
         */
        public $CampaignType;
    }
}
