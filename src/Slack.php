<?php

namespace Imunew\Slack;

use wrapi\wrapi as ApiClient;

/**
 * Class Slack
 * @package Imunew\Slack
 */
class Slack extends ApiClient
{
    /**
     * Slack constructor.
     * @param $token
     */
    public function __construct($token)
    {
        $opts = array(
            "headers" => array(
                "User-Agent" => "imunew-slack-php"
            ),
            "query" => array(
                "token" => $token
            )
        );

        $json = file_get_contents(__DIR__. '/api/slack.json');
        $endpoints = json_decode($json, true);
        parent::__construct('https://slack.com/api/',
            $endpoints,
            $opts);
    }

}
