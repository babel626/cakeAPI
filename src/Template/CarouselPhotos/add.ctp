<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CarouselPhoto $carouselPhoto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Carousel Photos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="carouselPhotos form large-9 medium-8 columns content">
    <?= $this->Form->create($carouselPhoto) ?>
    <fieldset>
        <legend><?= __('Add Carousel Photo') ?></legend>
        <?php
            echo $this->Form->control('src');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
