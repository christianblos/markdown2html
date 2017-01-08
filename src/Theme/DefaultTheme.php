<?php
namespace Markdown2Html\Theme;

class DefaultTheme extends Theme
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $additionalCss;

    /**
     * @var string
     */
    private $themePath;

    /**
     * @param string $themePath
     */
    public function __construct($themePath)
    {
        $this->themePath = $themePath;
        parent::__construct($themePath . '/doc.php');
    }

    /**
     * @return array
     */
    public function getCopyFiles()
    {
        return [
            $this->themePath . '/assets' => 'assets',
        ];
    }
}
