<?php

namespace Zerotoprod\CurlHelperCli;

use Symfony\Component\Console\Application;
use Zerotoprod\CurlHelperCli\ParseHeaders\ParseHeadersCommand;
use Zerotoprod\CurlHelperCli\Src\SrcCommand;

/**
 * A Cli for Curl Helpers
 *
 * @link https://github.com/zero-to-prod/curl-helper-cli
 */
class CurlHelperCli
{
    /**
     * @link https://github.com/zero-to-prod/curl-helper-cli
     */
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ParseHeadersCommand());
    }
}