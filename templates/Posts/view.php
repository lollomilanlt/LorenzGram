<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posts view content">
            <h3><?= h($post->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('UrlPhoto') ?></th>
                    <td><?= h($post->urlPhoto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($post->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($post->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id User') ?></th>
                    <td><?= $this->Number->format($post->id_user) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
