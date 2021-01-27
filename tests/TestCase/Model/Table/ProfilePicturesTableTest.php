<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilepicturesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilepicturesTable Test Case
 */
class ProfilepicturesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilepicturesTable
     */
    protected $Profilepictures;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Profilepictures',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profilepictures') ? [] : ['className' => ProfilepicturesTable::class];
        $this->Profilepictures = $this->getTableLocator()->get('Profilepictures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Profilepictures);

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
