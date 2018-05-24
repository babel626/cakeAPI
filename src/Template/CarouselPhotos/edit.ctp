<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarouselPhoto $carouselPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carouselPhoto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carouselPhoto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Carousel Photos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="carouselPhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($carouselPhoto) ?>
    <fieldset>
        <legend><?= __('Edit Carousel Photo') ?></legend>
        <?php
            echo $this->Form->control('src');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
