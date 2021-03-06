<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/appealeditorialrejections?view=bingads-11 AppealEditorialRejections Request Object
     * 
     * @uses EntityIdToParentIdAssociation
     * @uses EntityType
     * @used-by BingAdsCampaignManagementService::AppealEditorialRejections
     */
    final class AppealEditorialRejectionsRequest
    {
        /**
         * A list of unique identifiers of the ads or keywords that failed editorial review.
         * @var EntityIdToParentIdAssociation[]
         */
        public $EntityIdToParentIdAssociations;

        /**
         * The type of entity that the entity to parent list contains.
         * @var EntityType
         */
        public $EntityType;

        /**
         * The justification for the appeal.
         * @var string
         */
        public $JustificationText;
    }
}
