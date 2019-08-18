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
namespace Juashyam\SecurityChecker\ViewModel;

use Juashyam\SecurityChecker\Model\DataProvider\Report as DataProviderReport;
use Magento\Framework\DataObject;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Report extends DataObject implements ArgumentInterface
{
    /**
     * CVE Placeholder
     */
    const CVE_PLACEHOLDER = 'CVE-NONE-';

    /**
     * @var DataProviderReport
     */
    private $report;

    private $cveNoneIndex = 0;

    /**
     * Report constructor.
     * @param DataProviderReport $report
     */
    public function __construct(DataProviderReport $report)
    {
        $this->report = $report;
    }

    /**
     * Get known vulnerabilities in the current version
     *
     * @return array|bool|float|int|string|null
     */
    public function getVulnerabilities()
    {
        return $this->report->getVulnerabilities();
    }

    /**
     * Get CVE placeholder
     *
     * @return string
     */
    public function getCvePlaceHolder()
    {
        $padStr = str_pad(++$this->cveNoneIndex, 4, "0", STR_PAD_LEFT);
        return self::CVE_PLACEHOLDER . $padStr;
    }
}
