<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HabiletesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HabiletesTable Test Case
 */
class HabiletesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HabiletesTable
     */
    public $Habiletes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Habiletes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Habiletes') ? [] : ['className' => HabiletesTable::class];
        $this->Habiletes = TableRegistry::getTableLocator()->get('Habiletes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Habiletes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
