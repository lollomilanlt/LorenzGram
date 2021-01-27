<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profilepicture $profilepicture
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Profilepicture'), ['action' => 'edit', $profilepicture->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Profilepicture'), ['action' => 'delete', $profilepicture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profilepicture->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Profilepictures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Profilepicture'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profilepictures view content">
            <h3><?= h($profilepicture->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Url') ?></th>
                    <td><?= h($profilepicture->url) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($profilepicture->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
