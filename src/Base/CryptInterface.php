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

interface CryptInterface
{
    /**
     * @param BlockInterface $block
     *
     * @return string
     */
    public function createHash(BlockInterface $block): string;
}
