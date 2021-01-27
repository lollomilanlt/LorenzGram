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
            <?= $this->Html->link(__('List Profilepictures'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="profilepictures form content">
            <?= $this->Form->create($profilepicture) ?>
            <fieldset>
                <legend><?= __('Add Profilepicture') ?></legend>
                <?php
                    echo $this->Form->control('url');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
