<?php

namespace Microsoft\BingAds\V11\Bulk;

{
    /**
     * Downloads settings and performance data for all of the account's campaigns.
     * @link https://docs.microsoft.com/en-us/bingads/bulk-service/downloadcampaignsbyaccountids?view=bingads-11 DownloadCampaignsByAccountIds Request Object
     * 
     * @uses CompressionType
     * @uses DataScope
     * @uses DownloadEntity
     * @uses DownloadFileType
     * @uses PerformanceStatsDateRange
     * @used-by BingAdsBulkService::DownloadCampaignsByAccountIds
     */
    final class DownloadCampaignsByAccountIdsRequest
    {
        /**
         * The identifier of the account that contains the campaign data to download.
         * @var integer[]
         */
        public $AccountIds;

        /**
         * The compression type of the download file.
         * @var CompressionType
         */
        public $CompressionType;

        /**
         * You may include performance data such as spend, in addition to entity data such as campaign settings.
         * @var DataScope
         */
        public $DataScope;

        /**
         * The entities to include in the download.
         * @var DownloadEntity[]
         */
        public $DownloadEntities;

        /**
         * The file type of the download file.
         * @var DownloadFileType
         */
        public $DownloadFileType;

        /**
         * The format for records of the download file.
         * @var string
         */
        public $FormatVersion;

        /**
         * The last time that you requested a download.
         * @var \DateTime
         */
        public $LastSyncTimeInUTC;

        /**
         * Defines the start and end date when downloading performance data.
         * @var PerformanceStatsDateRange
         */
        public $PerformanceStatsDateRange;
    }
}
