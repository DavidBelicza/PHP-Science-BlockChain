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

use JsonSerializable;

interface DataObjectInterface extends JsonSerializable
{
    /**
     * @param string $key
     * @param mixed  $value
     */
    public function setData(string $key, $value);

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getData(string $key);
}
