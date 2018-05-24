<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeContent $homeContent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Home Content'), ['action' => 'edit', $homeContent->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Home Content'), ['action' => 'delete', $homeContent->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeContent->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Home Contents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Home Content'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="homeContents view large-9 medium-8 columns content">
    <h3><?= h($homeContent->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($homeContent->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($homeContent->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($homeContent->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($homeContent->id) ?></td>
        </tr>
    </table>
</div>
