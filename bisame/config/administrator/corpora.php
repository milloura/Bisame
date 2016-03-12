<?php
return array(
    'title' => 'Corpora',
    'single' => 'corpus',
    'model' => 'App\Models\Corpus',
    'columns' => array(
        'id',
        'name'
    ),
    'edit_fields' => array(
        'name',
        'sentences' => array (
            'type' => 'relationship',
            'title' => 'Sentences',
            'name_field' => 'name',
            )
    )
);