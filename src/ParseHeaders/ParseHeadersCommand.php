<?php

namespace Zerotoprod\CurlHelperCli\ParseHeaders;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Zerotoprod\CurlHelper\CurlHelper;

#[AsCommand(
    name: ParseHeadersCommand::signature,
    description: 'Returns the headers of a curl request.'
)]
class ParseHeadersCommand extends Command
{
    public const signature = 'curl-helper-cli:parse-header';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $Args = ParseHeadersArguments::from($input->getArguments());

        $CurlHandle = curl_init($Args->url);
        curl_setopt_array($CurlHandle, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => true,
        ]);
        $response = curl_exec($CurlHandle);
        $header_size = curl_getinfo($CurlHandle, CURLINFO_HEADER_SIZE);
        curl_close($CurlHandle);

        $output->writeln(
            json_encode(
                CurlHelper::parseHeaders($response, $header_size),
                JSON_PRETTY_PRINT
            )
        );

        return Command::SUCCESS;
    }

    public function configure(): void
    {
        $this->addArgument(ParseHeadersArguments::url, InputArgument::REQUIRED, 'The request URI.');
    }
}