<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guestbook".
 *
 * @property int $guestbook_id
 * @property string $name
 * @property string $email
 * @property string $content
 */
class Guestbook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guestbook';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'content'], 'required'],
            [['email'], 'email'],
            [['content'], 'string'],
            [['name', 'email'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'guestbook_id' => 'Guestbook ID',
            'name' => 'Name',
            'email' => 'Email',
            'content' => 'Content',
        ];
    }
}
