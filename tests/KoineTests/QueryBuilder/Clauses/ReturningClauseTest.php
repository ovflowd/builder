<?php

namespace KoineTests\QueryBuilder\Clauses;

use Koine\QueryBuilder\Clauses\ReturningClause;
use Koine\QueryBuilder;
use PHPUnit_Framework_TestCase;

class ReturningClauseTest extends PHPUnit_Framework_TestCase
{

    protected $object;

    public function setUp()
    {
        $queryBuilder = new QueryBuilder;
        $this->object = new ReturningClause($queryBuilder);
    }

    public function testCanAssign()
    {
        $this->assertInstanceOf(
            'Koine\QueryBuilder\Clauses\ReturningClause',
            $this->object
        );
    }

    public function testReturnsEmptyStringWhenParamsAreEmpty()
    {
        $this->assertEquals('', $this->object->toSql());
    }

    public function testReturnsTheCorrectSqlStringWhenParamsAreSet()
    {
        $this->object->addParam('id');
        $this->assertEquals('RETURNING id', $this->object->tosql());
    }
}
