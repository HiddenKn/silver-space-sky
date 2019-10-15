<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Game $game
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $game->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $game->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Game'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="game form large-9 medium-8 columns content">
    <?= $this->Form->create($game) ?>
    <fieldset>
        <legend><?= __('Edit Game') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('locked');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
