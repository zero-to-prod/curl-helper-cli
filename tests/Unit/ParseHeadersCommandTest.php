<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\Test;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Tests\TestCase;
use Zerotoprod\CurlHelperCli\ParseHeaders\ParseHeadersArguments;
use Zerotoprod\CurlHelperCli\ParseHeaders\ParseHeadersCommand;

class ParseHeadersCommandTest extends TestCase
{
    #[Test] public function command(): void
    {
        $Application = new Application();
        $Application->add(new ParseHeadersCommand());
        $Command = $Application->find(ParseHeadersCommand::signature);
        $CommandTester = new CommandTester($Command);

        $CommandTester->execute([
            ParseHeadersArguments::url => 'https://google.com'
        ]);

        $CommandTester->assertCommandIsSuccessful();
    }
}