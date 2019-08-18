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
namespace Juashyam\SecurityChecker\Block\Adminhtml\Security;

use Magento\Backend\Block\Template;
use Magento\Framework\Phrase;
use Magento\Framework\View\Element\AbstractBlock;

/**
 * Class Report
 *
 * @package Juashyam\SecurityChecker\Block\Adminhtml\Security
 */
class Report extends Template
{
    /**
     * Prepare layout
     *
     * @return AbstractBlock
     */
    protected function _prepareLayout()
    {
        $this->getToolbar()->addChild(
            'reload',
            \Magento\Backend\Block\Widget\Button::class,
            [
                'label' => __('Run Security Analysis'),
                'class' => 'save primary run-security-analysis',
                'onclick' => 'document.location.reload()'
            ]
        );
        return parent::_prepareLayout();
    }

    /**
     * Get header
     *
     * @return Phrase
     * @codeCoverageIgnore
     */
    public function getHeader()
    {
        return __('Security Analysis');
    }
}
