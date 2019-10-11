<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersonnageTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersonnageTable Test Case
 */
class PersonnageTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PersonnageTable
     */
    public $Personnage;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Personnage'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Personnage') ? [] : ['className' => PersonnageTable::class];
        $this->Personnage = TableRegistry::getTableLocator()->get('Personnage', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Personnage);

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
