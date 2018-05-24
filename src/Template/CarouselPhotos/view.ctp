<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarouselPhoto $carouselPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Carousel Photo'), ['action' => 'edit', $carouselPhoto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Carousel Photo'), ['action' => 'delete', $carouselPhoto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carouselPhoto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Carousel Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carousel Photo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="carouselPhotos view large-9 medium-8 columns content">
    <h3><?= h($carouselPhoto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Src') ?></th>
            <td><?= h($carouselPhoto->src) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($carouselPhoto->id) ?></td>
        </tr>
    </table>
</div>
