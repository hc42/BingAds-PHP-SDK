<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Defines a criterion that you want applied to the specified ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/adgroupcriterion?view=bingads-11 AdGroupCriterion Data Object
     * 
     * @uses Criterion
     * @uses AdGroupCriterionStatus
     * @used-by AdGroupCriterionAction
     * @used-by AddAdGroupCriterionsRequest
     * @used-by GetAdGroupCriterionsByIdsResponse
     * @used-by UpdateAdGroupCriterionsRequest
     */
    class AdGroupCriterion
    {
        /**
         * The identifier of the ad group to apply the criterion to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The criterion to apply to the ad group.
         * @var Criterion
         */
        public $Criterion;

        /**
         * The unique Bing Ads identifier for the ad group criterion.
         * @var integer
         */
        public $Id;

        /**
         * A status value that determines whether to apply the criterion to the ad group.
         * @var AdGroupCriterionStatus
         */
        public $Status;

        /**
         * The type of ad group criterion.
         * @var string
         */
        public $Type;
    }

}
