<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GalleryPhoto $galleryPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gallery Photo'), ['action' => 'edit', $galleryPhoto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gallery Photo'), ['action' => 'delete', $galleryPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galleryPhoto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gallery Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gallery Photo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galleryPhotos view large-9 medium-8 columns content">
    <h3><?= h($galleryPhoto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Src') ?></th>
            <td><?= h($galleryPhoto->src) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($galleryPhoto->id) ?></td>
        </tr>
    </table>
</div>
