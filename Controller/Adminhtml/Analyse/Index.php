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
namespace Juashyam\SecurityChecker\Controller\Adminhtml\Analyse;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Framework\Controller\ResultFactory;
use SensioLabs\Security\SecurityChecker;

class Index extends Action
{
    const ADMIN_RESOURCE = 'Juashyam_SecurityChecker::analyse';

    /**
     * @var SecurityChecker
     */
    private $securityChecker;

    /**
     * @var DirectoryList
     */
    private $directoryList;

    public function __construct(
        Context $context,
        SecurityChecker $securityChecker,
        DirectoryList $directoryList
    ) {
        $this->securityChecker = $securityChecker;
        $this->directoryList = $directoryList;
        parent::__construct($context);
    }

    public function execute()
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Juashyam_SecurityChecker::analyse')
            ->addBreadcrumb(__('Security Checker'), __('Security Checker'))
            ->addBreadcrumb(__('Analysis'), __('Analysis'));
        return $resultPage;
    }
}
