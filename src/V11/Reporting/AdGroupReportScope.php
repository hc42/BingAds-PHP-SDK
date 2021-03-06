<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines an ad group to include in the report.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/adgroupreportscope?view=bingads-11 AdGroupReportScope Data Object
     * 
     * @used-by AccountThroughAdGroupReportScope
     */
    final class AdGroupReportScope
    {
        /**
         * The identifier of the account that the ad group belongs to.
         * @var integer
         */
        public $AccountId;

        /**
         * The identifier of the campaign that the ad group belongs to.
         * @var integer
         */
        public $CampaignId;

        /**
         * The identifier of the ad group to limit the scope to.
         * @var integer
         */
        public $AdGroupId;
    }

}
