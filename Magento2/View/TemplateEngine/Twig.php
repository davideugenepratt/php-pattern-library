<?php
namespace DavidEugenePratt\PhpPatternLibrary\PatternLibrary\Magento2\View\TemplateEngine;

use Magento\Framework\View\TemplateEngine\Php;
use Magento\Framework\App\Filesystem\DirectoryList;

class Twig extends Php
{

    /**
     * @var \Twig_Environment
     */
    protected $_twig;

    /**
     * Base Directory Path
     */
    protected $_baseDir;

    /**
     * @var \Magento\Framework\App\Filesystem\DirectoryList
     */
    protected $_directoryList;

    /**
     * Constructor
     */
    public function __construct(
        DirectoryList $directoryList
    ) {
        $this->_directoryList = $directoryList;
        $this->_baseDir = $this->getBaseDir();
        $this->loadTwig();
    }

    /**
     * Initialize Twig
     */
    protected function loadTwig()
    {
        $loader = new \Twig_Loader_Filesystem($this->_baseDir);
        $this->_twig = new \Twig_Environment($loader);
    }

    /**
     * Get Base Directory Path
     */
    public function getBaseDir()
    {
        return $this->_directoryList->getPath(DirectoryList::ROOT)."/";
    }

    /**
     * Render Template
     */
    public function render(\Magento\Framework\View\Element\BlockInterface $block, $fileName, array $dictionary = [])
    {
        $this->_currentBlock = $block; // set current block instance for further use
        $template = str_replace($this->_baseDir, '', $fileName); // get path of template file from magento root directory
        return $this->_twig->loadTemplate($template)->render($dictionary); // load twig template
    }
}