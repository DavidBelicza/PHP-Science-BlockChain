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

use PhpScience\BlockChain\Base\BlockChainInterface;
use PhpScience\BlockChain\Base\BlockChainValidatorTrait;
use PhpScience\BlockChain\Base\BlockInterface;

class BlockChain implements BlockChainInterface
{
    use BlockChainValidatorTrait;

    /**
     * @var BlockInterface[]
     */
    private $blocks;

    /**
     * @param array $blocks
     */
    public function __construct(array $blocks)
    {
        $this->blocks = $blocks;
    }

    /**
     *
     */
    public function validate()
    {
        $this->validateChainIntegrity($this->blocks);
    }

    /**
     * @return BlockInterface[]
     */
    public function getBlocks(): array
    {
        return $this->blocks;
    }
}
