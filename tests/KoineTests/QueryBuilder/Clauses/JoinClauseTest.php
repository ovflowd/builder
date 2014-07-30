<?php

namespace KoineTests\QueryBuilder;

use PHPUnit_Framework_TestCase;
use Koine\QueryBuilder;
use Koine\QueryBuilder\Clauses\JoinClause;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class JoinClauseTest extends PHPUnit_Framework_TestCase
{

    /**
     * @param Koine\QueryBuilder\Clauses\JoinClause
     */
    protected $o;

    public function setUp()
    {
        $this->o = new JoinClause(new QueryBuilder);
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
        $this->o->addParams(array('INNER JOIN table2 t2 ON t1.id = t2.t1_id'));

        $this->assertEquals(
            'INNER JOIN table2 t2 ON t1.id = t2.t1_id',
            $this->o->toSql()
        );
    }

    /**
     * @test
     */
    public function itReturnsEmptyStringWhenNoParamIsGiven()
    {
        $this->assertEquals('', $this->o->toSql());
    }

    /**
     * @test
     */
    public function itInnerJoinsTable()
    {
        $this->o->innerJoin('t2');
        $this->assertEquals('INNER JOIN t2', $this->o->toSql());
    }

    /**
     * @test
     */
    public function itInnerJoinsTableWithOnCondition()
    {
        $this->o->leftJoin('t2', 't1.id = t2.t1_id');
        $this->assertEquals(
            'LEFT JOIN t2 ON t1.id = t2.t1_id',
            $this->o->toSql()
        );
    }

    /**
     * @test
     */
    public function itLeftJoinsTable()
    {
        $this->o->leftJoin('t2');
        $this->assertEquals('LEFT JOIN t2', $this->o->toSql());
    }

    /**
     * @test
     */
    public function itLeftJoinsTableWithOnCondition()
    {
        $this->o->innerJoin('t2', 't1.id = t2.t1_id');
        $this->assertEquals(
            'INNER JOIN t2 ON t1.id = t2.t1_id',
            $this->o->toSql()
        );
    }
}
