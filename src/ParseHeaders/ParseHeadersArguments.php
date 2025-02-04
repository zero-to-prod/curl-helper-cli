<?php

namespace Zerotoprod\CurlHelperCli\ParseHeaders;

use Zerotoprod\DataModel\DataModel;

class ParseHeadersArguments
{
    use DataModel;

    public const url = 'url';
    public string $url;
}