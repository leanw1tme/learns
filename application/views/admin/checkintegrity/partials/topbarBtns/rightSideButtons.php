<?php

//close button
$this->widget(
    'ext.ButtonWidget.ButtonWidget',
    [
        'name' => 'back-button',
        'id' => 'back-button',
        'text' => gT('Back'),
        'icon' => 'ri-rewind-fill',
        'link' => $this->createUrl("admin/index"),
        'htmlOptions' => [
            'class' => 'btn btn-outline-secondary',
            'role' => 'button'
        ],
    ]
);
