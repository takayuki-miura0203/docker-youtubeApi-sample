<?php

require_once('../vendor/autoload.php');

class YoutubeApi
{
    public function run()
    {
        $client = new Google_Client();
        $client->setApplicationName('Sample Application');
        // Note: Replace to your key
        $client->setDeveloperKey('xxxx');
    
        $youtube = new Google_Service_YouTube($client);
    
        // get search result
        $searchResponse = $youtube->search->listSearch(
            'snippet',
            [
                'q' => 'Vtuber',
                'type' => 'channel',
                'order' => 'viewCount',
                'maxResults' => 10,
                'regionCode' => 'JP'
            ]
        );

        foreach($searchResponse->items as $item) {
            // get channel info
            $channelsResponse = $youtube->channels->listChannels(
                'statistics',
                ['id' => $item->snippet->channelId]
            );

            echo('channel title   : ' . $item->snippet->channelTitle);
            echo("\n");
            echo('subscriber count: ' . $channelsResponse->items[0]->statistics->subscriberCount);
            echo("\n");
            echo('view count      : ' . $channelsResponse->items[0]->statistics->viewCount);
            echo("\n");
            echo("----\n\n");
        }
    }
}

$youtubeApi = new YoutubeApi();
$youtubeApi->run();