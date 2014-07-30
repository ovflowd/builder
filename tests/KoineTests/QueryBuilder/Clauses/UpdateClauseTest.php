<?php

namespace KoineTests\QueryBuilder;

use PHPUnit_Framework_TestCase;
use Koine\QueryBuilder;
use Koine\QueryBuilder\Clauses\UpdateClause;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class UpdateClauseTest extends PHPUnit_Framework_TestCase
{

    /**
     * @param Koine\QueryBuilder\Clauses\UpdateClause
     */
    protected $o;

    public function setUp()
    {
        $this->o = new UpdateClause(new QueryBuilder);
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
        $this->o->table('table');

        $this->assertEquals('UPDATE table', $this->o->toString());
    }
}
