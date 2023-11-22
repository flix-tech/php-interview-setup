<?php declare(strict_types=1);

namespace App\Tests;

use App\Model;
use PHPUnit\Framework\TestCase;

final class ModelTest extends TestCase
{
    public function test_testing_something(): void
    {
        $model = new Model();
        $this->assertInstanceOf(Model::class, $model);
    }
}
