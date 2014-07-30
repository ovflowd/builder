<?php

namespace KoineTests\QueryBuilder;

use PHPUnit_Framework_TestCase;
use Koine\QueryBuilder;
use Koine\QueryBuilder\Clauses\FromClause;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class FromClauseTest extends PHPUnit_Framework_TestCase
{

    /**
     * @param Koine\QueryBuilder\Clauses\FromClause
     */
    protected $o;

    public function setUp()
    {
        $this->o = new FromClause(new QueryBuilder);
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
        $this->o->addParams(array('table t1', 'INNER JOIN table2 t2 ON t1.id = t2.t1_id'));

        $this->assertEquals(
            'FROM table t1 INNER JOIN table2 t2 ON t1.id = t2.t1_id',
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
        $this->o->addParam('t1');
        $this->o->innerJoin('t2');
        $this->assertEquals('FROM t1 INNER JOIN t2', $this->o->toSql());
    }

    /**
     * @test
     */
    public function itInnerJoinsTableWithOnCondition()
    {
        $this->o->addParam('t1');
        $this->o->leftJoin('t2', 't1.id = t2.t1_id');
        $this->assertEquals(
            'FROM t1 LEFT JOIN t2 ON t1.id = t2.t1_id',
            $this->o->toSql()
        );
    }

    /**
     * @test
     */
    public function itLeftJoinsTable()
    {
        $this->o->addParam('t1');
        $this->o->leftJoin('t2');
        $this->assertEquals('FROM t1 LEFT JOIN t2', $this->o->toSql());
    }

    /**
     * @test
     */
    public function itLeftJoinsTableWithOnCondition()
    {
        $this->o->addParam('t1');
        $this->o->innerJoin('t2', 't1.id = t2.t1_id');
        $this->assertEquals(
            'FROM t1 INNER JOIN t2 ON t1.id = t2.t1_id',
            $this->o->toSql()
        );
    }
}
