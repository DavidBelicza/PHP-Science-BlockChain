<?php
/**
 * PHP Science BlockChain (http://php.science/)
 *
 * @see     https://github.com/davidbelicza/php-science-blockchain
 * @license https://opensource.org/licenses/MIT the MIT License
 * @author  David Belicza <87.bdavid@gmail.com>
 */

declare(strict_types=1);

namespace PhpScience\BlockChain;

use PHPUnit\Framework\TestCase;

class BlockChainIntegrityTest extends TestCase
{
    /**
     * @expectedException \PhpScience\BlockChain\Exception\InvalidChainException
     */
    public function testWorkingBLockChain()
    {
        $blockChain = new BlockChain();
        $blockFactory = new BlockFactory();

        $dto = new DataObject();
        $dto->setData('balance', 10.00);

        $block = $blockFactory->createBlock(
            0,
            microtime(true),
            '',
            $dto
        );

        $blockChain->addBlock($block);

        for ($i = 1; $i < 10; $i++) {
            $dto = new DataObject();
            $dto->setData('balance', 10.00);

            $block = $blockFactory->createBlock(
                $i,
                microtime(true),
                $blockChain->getLastBlock()->getHash(),
                $dto
            );

            $blockChain->addBlock($block);
        }

        $dto = new DataObject();
        $dto->setData('balance', 10.00);

        $block = $blockFactory->createBlock(
            0,
            microtime(true),
            'wrong-hash',
            $dto
        );

        $blockChain->addBlock($block);

        $blockChain->validate();
    }
}
