<?php
/**
 * PHP Science TextRank (http://php.science/)
 *
 * @see     https://github.com/davidbelicza/php-science-blockchain
 * @license https://opensource.org/licenses/MIT the MIT License
 * @author  David Belicza <87.bdavid@gmail.com>
 */

declare(strict_types=1);

namespace PhpScience\BlockChain\Base;

interface BlockInterface
{
    /**
     * @return int
     */
    public function getIndex(): int;

    /**
     * @return float
     */
    public function getTimeStamp(): float;

    /**
     * @return string
     */
    public function getPreviousHash(): string;

    /**
     * @return DataObjectInterface
     */
    public function getDataObject(): DataObjectInterface;
}
