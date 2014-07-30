<?php

namespace Koine\QueryBuilder\Clauses;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class GroupClause extends Base
{

    /**
     * Return the resulting query
     * @return string
     */
    public function toSql()
    {
        if ($this->isEmpty()) {
            return '';
        } else {
            return 'GROUP BY ' . implode(', ', $this->getParams());
        }
    }
}
