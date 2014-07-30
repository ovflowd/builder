<?php

namespace KoineTests\QueryBuilder;

use PHPUnit_Framework_TestCase;
use Koine\QueryBuilder;
use Koine\QueryBuilder\Clauses\SelectClause;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class SelectClauseTest extends PHPUnit_Framework_TestCase
{

    /**
     * @param Koine\QueryBuilder\Clauses\SelectClause
     */
    protected $o;

    public function setUp()
    {
        $this->o = new SelectClause(new QueryBuilder);
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
        $this->o->addParams(array('field1', 'field2'));

        $this->assertEquals('SELECT field1, field2', $this->o->toString());
    }

    /**
     * @test
     */
    public function itSelectsAllWhenNoParamIsGiven()
    {
        $this->assertEquals('SELECT *', $this->o->toString());
    }
}
