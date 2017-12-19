<?php
/**
 * PHP Science BlockChain (http://php.science/)
 *
 * @see     https://github.com/davidbelicza/php-science-blockchain
 * @license https://opensource.org/licenses/MIT the MIT License
 * @author  David Belicza <87.bdavid@gmail.com>
 */

declare(strict_types=1);

namespace PhpScience\BlockChain\Base;

trait BlockConcatTrait
{
    protected function concatData(BlockInterface $block): string
    {
        return $block->getIndex()
            . '|' . $block->getTimeStamp()
            . '|' . $block->getPreviousHash()
            . '|' . $block->getDataObject()->jsonSerialize();
    }
}
