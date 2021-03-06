<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * Defines the possible bid opportunity types you can request when calling GetBidOpportunities.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/bidopportunitytype?view=bingads-11 BidOpportunityType Value Set
     * 
     * @used-by GetBidOpportunitiesRequest
     */
    final class BidOpportunityType
    {
        /** The bid opportunity may lead to ads shown in one of the first page positions of search results. */
        const FirstPage = 'FirstPage';

        /** The bid opportunity may lead to ads shown in one of the mainline positions of search results. */
        const MainLine = 'MainLine';

        /** The bid opportunity may lead to ads shown in the first mainline position of search results. */
        const MainLine1 = 'MainLine1';
    }

}
