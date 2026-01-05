<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testBasicAssertion(): void
    {
        $this->assertTrue(true);
    }

    public function testApplicationStructure(): void
    {
        $this->assertDirectoryExists(__DIR__ . '/../app');
        $this->assertDirectoryExists(__DIR__ . '/../app/Controllers');
        $this->assertDirectoryExists(__DIR__ . '/../app/Models');
        $this->assertDirectoryExists(__DIR__ . '/../config');
        $this->assertDirectoryExists(__DIR__ . '/../routes');
        $this->assertDirectoryExists(__DIR__ . '/../resources');
    }

    public function testConfigFilesExist(): void
    {
        $this->assertFileExists(__DIR__ . '/../config/app.php');
        $this->assertFileExists(__DIR__ . '/../config/database.php');
    }

    public function testRoutesFileExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../routes/web.php');
    }

    public function testPublicIndexExists(): void
    {
        $this->assertFileExists(__DIR__ . '/../public/index.php');
    }
}
