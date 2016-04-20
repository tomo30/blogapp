<?php
App::uses('AppModel', 'Model');
class Post extends AppModel {
    public $displayField = 'title';
/**
 * Validation rules
 *
 * @var array
 */
    public $validate = [
        'title' => [
            'notEmpty' => [
                'rule' => ['notEmpty'],
                'message' => 'タイトルは必須入力です',
            ],
            'maxLength' => [
                'rule' => ['maxLength', '255'],
                'message' => 'タイトルは255文字以内で入力してください',
            ],
        ],
    ];
}
