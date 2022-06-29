<?php

declare(strict_types=1);

namespace Tests\Endpoints;

use MeiliSearch\Exceptions\ApiException;
use Tests\TestCase;

final class DumpTest extends TestCase
{
    public function testCreateDumpAndGetStatus(): void
    {
        $dump = $this->client->createDump();

        $this->assertArrayHasKey('taskUid', $dump);
        $this->assertArrayHasKey('status', $dump);
    }
}
