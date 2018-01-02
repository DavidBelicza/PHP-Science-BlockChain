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

use PhpScience\BlockChain\Base\DataObjectInterface;
use PhpScience\BlockChain\Exception\InvalidChainException;

class DataObject implements DataObjectInterface
{
    private $data = [];

    /**
     * @param string $key
     * @param mixed  $value
     */
    public function setData(string $key, $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * @param string $key
     *
     * @return mixed
     * @throws InvalidChainException
     */
    public function getData(string $key)
    {
        if (key_exists($key, $this->data)) {
            return $this->data[$key];
        }

        throw new InvalidChainException(
            sprintf('THe s% key does not exist')
        );
    }

    /**
     * Specify data which should be serialized to JSON
     *
     * @link  http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return $this->data;
    }
}
