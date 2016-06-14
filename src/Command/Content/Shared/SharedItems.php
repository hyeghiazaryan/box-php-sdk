<?php namespace AdammBalogh\Box\Command\Content\Shared;

use AdammBalogh\Box\Command\AbstractCommand;
use AdammBalogh\Box\GuzzleHttp\Message\GetRequest;
use AdammBalogh\Box\Request\ExtendedRequest;

class SharedItems extends AbstractCommand
{
    /**
     * @param string $folderId
     * @param ExtendedRequest $extendedRequest
     */
    public function __construct($sharedLink)
    {
        $this->request = new GetRequest('shared_items');
        $this->addSharedLinkHeader($sharedLink);
    }
}
