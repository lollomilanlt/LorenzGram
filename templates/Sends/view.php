<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Send $send
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Send'), ['action' => 'edit', $send->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Send'), ['action' => 'delete', $send->id], ['confirm' => __('Are you sure you want to delete # {0}?', $send->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sends'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Send'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sends view content">
            <h3><?= h($send->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Text') ?></th>
                    <td><?= h($send->text) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($send->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Sender') ?></th>
                    <td><?= $this->Number->format($send->id_sender) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Receiver') ?></th>
                    <td><?= $this->Number->format($send->id_receiver) ?></td>
                </tr>
                <tr>
                    <th><?= __('Chrono') ?></th>
                    <td><?= h($send->chrono) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
