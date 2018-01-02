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

interface BlockChainInterface
{
    /**
     *
     */
    public function validate();

    /**
     * @param BlockInterface $block
     */
    public function addBlock(BlockInterface $block);

    /**
     * @return BlockInterface
     */
    public function getLastBlock(): BlockInterface;

    /**
     * @return BlockInterface[]
     */
    public function getBlocks(): array;
}
