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

trait CryptArgonTrait
{
    /**
     * @param string $data
     *
     * @return string
     */
    public function crypt(string $data): string
    {
        return password_hash(
            $data,
            PASSWORD_ARGON2I
        );
    }
}
