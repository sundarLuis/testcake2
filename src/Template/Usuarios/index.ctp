<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>

        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>