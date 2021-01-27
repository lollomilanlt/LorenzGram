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
            <?= $this->Html->link(__('List Sends'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sends form content">
            <?= $this->Form->create($send) ?>
            <fieldset>
                <legend><?= __('Add Send') ?></legend>
                <?php
                    echo $this->Form->control('chrono');
                    echo $this->Form->control('id_sender');
                    echo $this->Form->control('id_receiver');
                    echo $this->Form->control('text');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
