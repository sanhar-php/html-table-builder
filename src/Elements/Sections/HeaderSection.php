<?php

namespace Tlr\Tables\Elements\Sections;

use Tlr\Tables\Elements\Interfaces\RowInterface;
use Tlr\Tables\Elements\Rows\HeaderRow;
use Tlr\Tables\Elements\Section;

class HeaderSection extends Section
{
    /**
     * Get the element
     *
     * @return string
     */
    public function getElement() : string
    {
        return 'thead';
    }

    /**
     * Make a new row
     *
     * @return \Tlr\Tables\Elements\Interfaces\RowInterface
     */
    public function row() : RowInterface
    {
        return $this->rows[] = $row = new HeaderRow;
    }
}
