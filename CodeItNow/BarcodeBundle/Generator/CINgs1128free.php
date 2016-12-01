<?php
/**
 *----------------------------------------------------------------------
 *
 * Calculate the GS1-128 (non-formatted) based on the Code-128 encoding.
 *
 *----------------------------------------------------------------------
 *
 */
namespace CodeItNow\BarcodeBundle\Generator;

class CINgs1128free extends CINgs1128 {
    /**
     * Constructors
     *
     * @param null $start
     */
    public function __construct($start = null) {
        parent::__construct($start);

        // To use non-formatted codes
        $this->setAllowsUnknownIdentifier(true);
    }

    /**
     * Returns false to always use non-formatted format.
     *
     * @param string $id
     * @param bool $yAlreadySet
     * @param string $realNameId
     * @return bool
     */
    protected function findIdNotFormated($id, &$yAlreadySet, &$realNameId) {
        return false;
    }
}
?>
