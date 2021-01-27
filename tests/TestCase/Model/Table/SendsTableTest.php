<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SendsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SendsTable Test Case
 */
class SendsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SendsTable
     */
    protected $Sends;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Sends',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Sends') ? [] : ['className' => SendsTable::class];
        $this->Sends = $this->getTableLocator()->get('Sends', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Sends);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
