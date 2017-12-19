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

use PhpScience\BlockChain\Exception\InvalidChainException;
use PhpScience\BlockChain\Exception\NotChainException;

trait BlockChainValidatorTrait
{
    /**
     * @param BlockInterface[] $blocks
     */
    protected function validateChainIntegrity(array &$blocks)
    {
        $this->validateChain($blocks);

        $blocksSize = count($blocks);

        for ($i = 1; $i < $blocksSize; $i++) {
            $this->validateHashes($blocks[$i], $blocks[$i - 1]);
        }
    }

    /**
     * @param BlockInterface[] $blocks
     *
     * @throws NotChainException
     */
    private function validateChain(array &$blocks)
    {
        if (count($blocks) <= 1) {
            throw new NotChainException(
                'It is not a chain'
            );
        }
    }

    /**
     * @param BlockInterface $currentBlock
     * @param BlockInterface $previousBlock
     *
     * @throws InvalidChainException
     */
    private function validateHashes(BlockInterface $currentBlock, BlockInterface $previousBlock)
    {
        if ($currentBlock->getPreviousHash() !== $previousBlock->getHash()) {
            throw new InvalidChainException(
                sprintf(
                    'Relation of "%s" and "%s" blocks is invalid',
                    $previousBlock->getIndex(),
                    $currentBlock->getIndex()
                )
            );
        }
    }
}
