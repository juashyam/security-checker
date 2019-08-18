<?php
/**
 * This file is part of the juashyam/security-checker library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Shyam Kumar <kumar.30.shyam@gmail.com>
 * @license http://opensource.org/licenses/MIT MIT
 * @link https://packagist.org/packages/juashyam/security-checker Packagist
 * @link https://github.com/juashyam/security-checker GitHub
 */
namespace Juashyam\SecurityChecker\Model\DataProvider;

use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Serialize\SerializerInterface;
use SensioLabs\Security\SecurityChecker;

class Report
{
    /**
     * Composer lock file name
     */
    const COMPOSER_LOCK_FILE = 'composer.lock';

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var DirectoryList
     */
    private $directoryList;

    /**
     * @var SecurityChecker
     */
    private $securityChecker;

    /**
     * Report constructor
     *
     * @param SerializerInterface $serializer
     * @param DirectoryList $directoryList
     * @param SecurityChecker $securityChecker
     */
    public function __construct(
        SerializerInterface $serializer,
        DirectoryList $directoryList,
        SecurityChecker $securityChecker
    ) {
        $this->serializer = $serializer;
        $this->securityChecker = $securityChecker;
        $this->directoryList = $directoryList;
    }

    /**
     * Analyse dependencies in composer.lock for all known vulnerabilities
     *
     * @return array|bool|float|int|string|null
     */
    public function getVulnerabilities()
    {
        return $this->serializer->unserialize($this->securityChecker->check(
             $this->directoryList->getRoot() . DIRECTORY_SEPARATOR . self::COMPOSER_LOCK_FILE
        ));
    }
}
