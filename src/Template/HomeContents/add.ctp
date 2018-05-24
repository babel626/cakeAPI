<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeContent $homeContent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Home Contents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="homeContents form large-9 medium-8 columns content">
    <?= $this->Form->create($homeContent) ?>
    <fieldset>
        <legend><?= __('Add Home Content') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
