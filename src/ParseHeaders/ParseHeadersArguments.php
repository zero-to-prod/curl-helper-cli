<?php

namespace Zerotoprod\CurlHelperCli\ParseHeaders;

use Zerotoprod\DataModel\DataModel;

/**
 * @link https://github.com/zero-to-prod/curl-helper-cli
 */
class ParseHeadersArguments
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/curl-helper-cli
     */
    public const url = 'url';
    /**
     * @link https://github.com/zero-to-prod/curl-helper-cli
     */
    public string $url;
}