<?php namespace AdammBalogh\Box\Command\Content\File;

use AdammBalogh\Box\Command\Command;
use AdammBalogh\Box\GuzzleHttp\Message\PutRequest;
use AdammBalogh\Box\Request\ExtendedRequest;

class CreateSharedFileLink extends Command
{
    /**
     * @param string $fileId
     * @param ExtendedRequest $extendedRequest
     */
    public function __construct($fileId, ExtendedRequest $extendedRequest)
    {
        $this->request = new PutRequest("files/{$fileId}");

        $this->request->setRawJsonBody($extendedRequest->getPostBodyFields());
    }
}
