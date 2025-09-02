# Zerotoprod\CurlHelperCli

![](art/logo.png)

[![Repo](https://img.shields.io/badge/github-gray?logo=github)](https://github.com/zero-to-prod/curl-helper-cli)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/curl-helper-cli/test.yml?label=test)](https://github.com/zero-to-prod/curl-helper-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/curl-helper-cli/backwards_compatibility.yml?label=backwards_compatibility)](https://github.com/zero-to-prod/curl-helper-cli/actions)
[![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/zero-to-prod/curl-helper-cli/build_docker_image.yml?label=build_docker_image)](https://github.com/zero-to-prod/curl-helper-cli/actions)
[![Packagist Downloads](https://img.shields.io/packagist/dt/zero-to-prod/curl-helper-cli?color=blue)](https://packagist.org/packages/zero-to-prod/curl-helper-cli/stats)
[![php](https://img.shields.io/packagist/php-v/zero-to-prod/curl-helper-cli.svg?color=purple)](https://packagist.org/packages/zero-to-prod/curl-helper-cli/stats)
[![Packagist Version](https://img.shields.io/packagist/v/zero-to-prod/curl-helper-cli?color=f28d1a)](https://packagist.org/packages/zero-to-prod/curl-helper-cli)
[![License](https://img.shields.io/packagist/l/zero-to-prod/curl-helper-cli?color=pink)](https://github.com/zero-to-prod/curl-helper-cli/blob/main/LICENSE.md)
[![wakatime](https://wakatime.com/badge/github/zero-to-prod/curl-helper-cli.svg)](https://wakatime.com/badge/github/zero-to-prod/curl-helper-cli)
[![Hits-of-Code](https://hitsofcode.com/github/zero-to-prod/curl-helper-cli?branch=main)](https://hitsofcode.com/github/zero-to-prod/curl-helper-cli/view?branch=main)

## Contents

- [Introduction](#introduction)
- [Requirements](#requirements)
- [Installation](#installation)
- [Documentation Publishing](#documentation-publishing)
  - [Automatic Documentation Publishing](#automatic-documentation-publishing)
- [Usage](#usage)
  - [Available Commands](#available-commands)
    - [`curl-helper-cli:parse-header`](#curl-helper-cliparse-header)
    - [`curl-helper-cli:src`](#curl-helper-clisrc)
- [Docker Image](#docker-image)
- [Local Development](./LOCAL_DEVELOPMENT.md)
- [Image Development](./IMAGE_DEVELOPMENT.md)
- [Contributing](#contributing)

## Introduction

A Cli for Curl Helpers

## Requirements

- PHP 8.1 or higher.

## Installation

Install `Zerotoprod\CurlHelperCli` via [Composer](https://getcomposer.org/):

```bash
composer require zero-to-prod/curl-helper-cli
```

This will add the package to your project's dependencies and create an autoloader entry for it.

## Documentation Publishing

You can publish this README to your local documentation directory.

This can be useful for providing documentation for AI agents.

This can be done using the included script:

```bash
# Publish to default location (./docs/zero-to-prod/curl-helper-cli)
vendor/bin/zero-to-prod-curl-helper-cli

# Publish to custom directory
vendor/bin/zero-to-prod-curl-helper-cli /path/to/your/docs
```

### Automatic Documentation Publishing

You can automatically publish documentation by adding the following to your `composer.json`:

```json
{
    "scripts": {
        "post-install-cmd": [
            "zero-to-prod-curl-helper-cli"
        ],
        "post-update-cmd": [
            "zero-to-prod-curl-helper-cli"
        ]
    }
}
```

## Usage

Run this command to see the available commands:

```shell
vendor/bin/curl-helper-cli list
```

### Available Commands

#### `curl-helper-cli:parse-header`

Returns the headers of a curl request as a JSON response.

**Description:** This command makes a HTTP request to the specified URL and parses the response headers into a structured JSON format.

**Usage:**
```shell
vendor/bin/curl-helper-cli curl-helper-cli:parse-header <url>
```

**Arguments:**
- `url` (required): The request URI to fetch headers from

**Examples:**

```shell
# Get headers from a website
vendor/bin/curl-helper-cli curl-helper-cli:parse-header https://httpbin.org/get

# Get headers from an API endpoint
vendor/bin/curl-helper-cli curl-helper-cli:parse-header https://api.github.com/users/octocat

# Get headers from a local development server
vendor/bin/curl-helper-cli curl-helper-cli:parse-header http://localhost:8000/api/status
```

**Sample Output:**
```json
{
    "Content-Type": "application/json",
    "Content-Length": "234",
    "Server": "nginx/1.18.0",
    "Date": "Mon, 01 Jan 2024 12:00:00 GMT",
    "Cache-Control": "no-cache, private"
}
```

#### `curl-helper-cli:src`

Displays the project source link.

**Description:** A simple command that outputs the GitHub repository URL for this project.

**Usage:**
```shell
vendor/bin/curl-helper-cli curl-helper-cli:src
```

**Arguments:** None

**Example:**
```shell
vendor/bin/curl-helper-cli curl-helper-cli:src
```

**Output:**
```
https://github.com/zero-to-prod/curl-helper-cli
```

## Docker Image

You can also run the cli using the [docker image](https://hub.docker.com/repository/docker/davidsmith3/curl-helper-cli/general):

```shell
docker run --rm davidsmith3/curl-helper-cli
```

## Contributing

Contributions, issues, and feature requests are welcome!
Feel free to check the [issues](https://github.com/zero-to-prod/curl-helper-cli/issues) page if you want to contribute.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Create a new Pull Request.
