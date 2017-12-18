<?php
/**
 * PHP Science TextRank (http://php.science/)
 *
 * @see     https://github.com/davidbelicza/php-science-blockchain
 * @license https://opensource.org/licenses/MIT the MIT License
 * @author  David Belicza <87.bdavid@gmail.com>
 */

declare(strict_types=1);

namespace PhpScience\BlockChain;

use PhpScience\BlockChain\Base\BlockInterface;
use PhpScience\BlockChain\Base\CryptInterface;
use PhpScience\BlockChain\Base\DataObjectInterface;

class BlockFactory
{
    /**
     * @var CryptInterface
     */
    private $crypt;

    /**
     * BlockFactory constructor.
     *
     * @param CryptInterface $crypt
     */
    public function __construct(CryptInterface $crypt)
    {
        $this->crypt = $crypt;
    }

    /**
     * @param int                 $index
     * @param float               $timeStamp
     * @param string              $previousHash
     * @param DataObjectInterface $dataObject
     *
     * @return BlockInterface
     */
    public function createBlock(
        int $index,
        float $timeStamp,
        string $previousHash,
        DataObjectInterface $dataObject
    ): BlockInterface {

        return new Block(
            $index,
            $timeStamp,
            $previousHash,
            $dataObject
        );
    }
}