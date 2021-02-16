<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 *
 * @property integer $id
 * @property integer $active
 * @property integer $cb_code
 * @property string $cb_code_text
 * @property integer $tb_id
 * @property integer $srf_id
 * @property integer $code_tb
 * @property integer $time_zone
 * @property string $comment
 * @property integer $gosb_id
 */
class Comments extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'comment'], 'required'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['comment'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date' => 'Date/Time',
            'comment' => 'Comment',
        ];
    }
}
