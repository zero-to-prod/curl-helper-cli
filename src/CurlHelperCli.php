<?php

namespace Zerotoprod\CurlHelperCli;

use Symfony\Component\Console\Application;
use Zerotoprod\CurlHelperCli\ParseHeaders\ParseHeadersCommand;
use Zerotoprod\CurlHelperCli\Src\SrcCommand;

class CurlHelperCli
{
    public static function register(Application $Application): void
    {
        $Application->add(new SrcCommand());
        $Application->add(new ParseHeadersCommand());
    }
}