<?php
// Generated on 4/4/2017 5:50:30 AM

namespace Microsoft\BingAds\V10\CampaignManagement;

{
    /**
     * Adds the specified media to an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.100).aspx AddMedia Request Object
     * 
     * @uses Media
     * @used-by BingAdsCampaignManagementService::AddMedia
     */
    final class AddMediaRequest
    {
        /**
         * The identifier of the account that owns the media library.
         * @var integer
         */
        public $AccountId;

        /**
         * An array of Media to add to the account's media library.
         * @var Media[]
         */
        public $Media;
    }
}
