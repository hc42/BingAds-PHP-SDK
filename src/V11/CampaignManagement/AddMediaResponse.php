<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds the specified media to an account's media library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addmedia?view=bingads-11 AddMedia Response Object
     * 
     * @used-by BingAdsCampaignManagementService::AddMedia
     */
    final class AddMediaResponse
    {
        /**
         * The identifiers of the media that you added to the library.
         * @var integer[]
         */
        public $MediaIds;
    }
}
