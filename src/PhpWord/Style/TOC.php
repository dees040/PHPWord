<?php
/**
 * PHPWord
 *
 * @link        https://github.com/PHPOffice/PHPWord
 * @copyright   2014 PHPWord
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt LGPL
 */

namespace PhpOffice\PhpWord\Style;

/**
 * TOC style
 */
class TOC
{
    const TABLEADER_DOT = 'dot';
    const TABLEADER_UNDERSCORE = 'underscore';
    const TABLEADER_LINE = 'hyphen';
    const TABLEADER_NONE = '';

    /**
     * Tab Leader
     *
     * @var string
     */
    private $_tabLeader;

    /**
     * Tab Position
     *
     * @var int
     */
    private $_tabPos;

    /**
     * Indent
     *
     * @var int
     */
    private $_indent;


    /**
     * Create a new TOC Style
     */
    public function __construct()
    {
        $this->_tabPos = 9062;
        $this->_tabLeader = self::TABLEADER_DOT;
        $this->_indent = 200;
    }

    /**
     * Get Tab Position
     *
     * @return int
     */
    public function getTabPos()
    {
        return $this->_tabPos;
    }

    /**
     * Set Tab Position
     *
     * @param int $pValue
     */
    public function setTabPos($pValue)
    {
        $this->_tabPos = $pValue;
    }

    /**
     * Get Tab Leader
     *
     * @return string
     */
    public function getTabLeader()
    {
        return $this->_tabLeader;
    }

    /**
     * Set Tab Leader
     *
     * @param string $pValue
     */
    public function setTabLeader($pValue = self::TABLEADER_DOT)
    {
        $this->_tabLeader = $pValue;
    }

    /**
     * Get Indent
     *
     * @return int
     */
    public function getIndent()
    {
        return $this->_indent;
    }

    /**
     * Set Indent
     *
     * @param string $pValue
     */
    public function setIndent($pValue)
    {
        $this->_indent = $pValue;
    }

    /**
     * Set style value
     *
     * @param string $key
     * @param string $value
     */
    public function setStyleValue($key, $value)
    {
        $this->$key = $value;
    }
}
