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

use PhpScience\BlockChain\Base\BlockConcatTrait;
use PhpScience\BlockChain\Base\BlockInterface;
use PhpScience\BlockChain\Base\CryptArgonTrait;
use PhpScience\BlockChain\Base\DataObjectInterface;

class Block implements BlockInterface
{
    use BlockConcatTrait;
    use CryptArgonTrait;

    /**
     * @var int
     */
    private $index;

    /**
     * @var float
     */
    private $timeStamp;

    /**
     * @var string
     */
    private $previousHash;

    /**
     * @var DataObjectInterface
     */
    private $dataObject;

    /**
     * @var string
     */
    private $hash;

    /**
     * Block constructor.
     *
     * @param int                 $index
     * @param float               $timeStamp
     * @param string              $previousHash
     * @param DataObjectInterface $dataObject
     */
    public function __construct(
        int $index,
        float $timeStamp,
        string $previousHash,
        DataObjectInterface $dataObject
    ) {
        $this->index = $index;
        $this->timeStamp = $timeStamp;
        $this->previousHash = $previousHash;
        $this->dataObject = $dataObject;
        $this->hash =  $this->crypt($this->concatData($this));
    }

    /**
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * @return float
     */
    public function getTimeStamp(): float
    {
        return $this->timeStamp;
    }

    /**
     * @return string
     */
    public function getPreviousHash(): string
    {
        return $this->previousHash;
    }

    /**
     * @return DataObjectInterface
     */
    public function getDataObject(): DataObjectInterface
    {
        return $this->dataObject;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->hash;
    }
}
