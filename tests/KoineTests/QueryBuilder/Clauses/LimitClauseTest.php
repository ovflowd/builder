<?php

namespace KoineTests\QueryBuilder;

use PHPUnit_Framework_TestCase;
use Koine\QueryBuilder;
use Koine\QueryBuilder\Clauses\LimitClause;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 * @group focus
 */
class LimitClauseTest extends PHPUnit_Framework_TestCase
{

    /**
     * @param Koine\QueryBuilder\LimitClause
     */
    protected $o;

    public function setUp()
    {
        $this->o = new LimitClause(new QueryBuilder);
    }

    /**
     * @test
     */
    public function itSetQueryBuilderOnTheConstructor()
    {
        $this->assertInstanceOf('Koine\QueryBuilder\Clauses\Base', $this->o);
    }

    /**
     * @test
     */
    public function itConvertsCorrectlyToString()
    {
        $this->o->addParam(1);
        $this->assertEquals('LIMIT 1', $this->o->toSql());

        $this->o->addParam(2);
        $this->assertEquals('LIMIT 1 OFFSET 2', $this->o->toSql());
    }

    /**
     * @test
     */
    public function itReturnsEmptyStringWhenNoParamIsGiven()
    {
        $this->assertEquals('', $this->o->toSql());
    }
}
