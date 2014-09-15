<?php

namespace Koine\QueryBuilder\Clauses;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class LimitClause extends Base
{
    /**
     * Return the resulting query
     */
    public function toSql()
    {
        if ($this->isEmpty()) {
            return '';
        } else {
            return 'LIMIT ' . implode(' OFFSET ', $this->getParams());
        }
    }
}
