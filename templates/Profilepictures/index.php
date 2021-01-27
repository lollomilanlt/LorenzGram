<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profilepicture[]|\Cake\Collection\CollectionInterface $profilepictures
 */
?>
<div class="profilepictures index content">
    <?= $this->Html->link(__('New Profilepicture'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Profilepictures') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('url') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profilepictures as $profilepicture): ?>
                <tr>
                    <td><?= $this->Number->format($profilepicture->id) ?></td>
                    <td><?= h($profilepicture->url) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $profilepicture->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profilepicture->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profilepicture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profilepicture->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
