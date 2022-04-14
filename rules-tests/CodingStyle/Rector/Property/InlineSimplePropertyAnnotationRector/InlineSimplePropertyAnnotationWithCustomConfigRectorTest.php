<?php

declare(strict_types=1);

namespace Rector\Tests\CodingStyle\Rector\Property\InlineSimplePropertyAnnotationRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

final class InlineSimplePropertyAnnotationWithCustomConfigRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    /**
     * @return Iterator<SmartFileInfo>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture/CustomConfig');
    }

    public function provideConfigFilePath(): string
    {
        return __DIR__ . '/config/configure_rule_custom_config.php';
    }
}
