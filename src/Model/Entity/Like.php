<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Like Entity
 *
 * @property int $id
 * @property int $posts_id
 * @property int $users_id
 *
 * @property \App\Model\Entity\Post $post
 * @property \App\Model\Entity\User $user
 */
class Like extends Entity
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
        'posts_id' => true,
        'users_id' => true,
        'post' => true,
        'user' => true,
    ];
}
