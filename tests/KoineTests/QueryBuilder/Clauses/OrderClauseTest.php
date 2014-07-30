<?php

namespace KoineTests\QueryBuilder;

use PHPUnit_Framework_TestCase;
use Koine\QueryBuilder;
use Koine\QueryBuilder\Clauses\OrderClause;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class OrderClauseTest extends PHPUnit_Framework_TestCase
{

    /**
     * @param Koine\QueryBuilder\Clauses\OrderClause
     */
    protected $o;

    public function setUp()
    {
        $this->o = new OrderClause(new QueryBuilder);
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
        $this->o->addParam('foo');
        $this->assertEquals('ORDER BY foo', $this->o->toSql());

        $this->o->addParam('bar DESC');
        $this->assertEquals('ORDER BY foo, bar DESC', $this->o->toSql());
    }

    /**
     * @test
     */
    public function itReturnsEmptyStringWhenNoParamIsGiven()
    {
        $this->assertEquals('', $this->o->toSql());
    }
}
