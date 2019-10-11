<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Personnage Entity
 *
 * @property int $id
 * @property string $Nom
 * @property string $Description
 * @property int $Habiletes
 * @property int $Allies
 * @property int $Image
 */
class Personnage extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'Nom' => true,
        'Description' => true,
        'Habiletes' => true,
        'Allies' => true,
        'Image' => true
    ];
}
