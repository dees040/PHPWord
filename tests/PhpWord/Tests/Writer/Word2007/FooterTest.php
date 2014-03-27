<?php
/**
 * PHPWord
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2014 PHPWord
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt LGPL
 */
namespace PhpOffice\PhpWord\Tests\Writer\Word2007;

use PhpOffice\PhpWord\Writer\Word2007\Footer;
use PhpOffice\PhpWord\Writer\Word2007;
use PhpOffice\PhpWord\Tests\TestHelperDOCX;

/**
 * Test class for PhpOffice\PhpWord\Writer\Word2007\Footer
 *
 * @coversDefaultClass \PhpOffice\PhpWord\Writer\Word2007\Footer
 * @runTestsInSeparateProcesses
 */
class FooterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers  ::writeFooter
     */
    public function testWriteFooter()
    {
        $imageSrc = __DIR__ . "/../../_files/images/PhpWord.png";
        $container = new \PhpOffice\PhpWord\Section\Footer(1);
        $container->addText('');
        $container->addPreserveText('');
        $container->addTextBreak();
        $container->createTextRun();
        $container->addTable()->addRow()->addCell()->addText('');
        $container->addImage($imageSrc);

        $writer = new Word2007();
        $object = new Footer();
        $object->setParentWriter($writer);
        $object->writeFooter($container);
        $writer->setUseDiskCaching(true);
        $xml = simplexml_load_string($object->writeFooter($container));

        $this->assertInstanceOf('SimpleXMLElement', $xml);
    }
}
