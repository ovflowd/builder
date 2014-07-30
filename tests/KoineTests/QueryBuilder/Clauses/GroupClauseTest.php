<?php

namespace KoineTests\QueryBuilder;

use PHPUnit_Framework_TestCase;
use Koine\QueryBuilder;
use Koine\QueryBuilder\Clauses\GroupClause;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class GroupClauseTest extends PHPUnit_Framework_TestCase
{

    /**
     * @param Koine\QueryBuilder\Clauses\GroupClause
     */
    protected $o;

    public function setUp()
    {
        $this->o = new GroupClause(new QueryBuilder);
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
        $this->assertEquals('GROUP BY foo', $this->o->toSql());

        $this->o->addParam('bar');
        $this->assertEquals('GROUP BY foo, bar', $this->o->toSql());
    }

    /**
     * @test
     */
    public function itReturnsEmptyStringWhenNoParamIsGiven()
    {
        $this->assertEquals('', $this->o->toSql());
    }
}
