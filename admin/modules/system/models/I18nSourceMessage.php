<?php

namespace admin\modules\system\models;

use Yii;

/**
 * This is the model class for table "{{%i18n_source_message}}".
 *
 * @property integer $id
 * @property string $category
 * @property string $message
 *
 * @property I18nMessage[] $i18nMessages
 */
class I18nSourceMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%i18n_source_message}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message'], 'string'],
            [['category'], 'string', 'max' => 32]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('admin', 'ID'),
            'category' => Yii::t('admin', 'Category'),
            'message' => Yii::t('admin', 'Message'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getI18nMessages()
    {
        return $this->hasMany(I18nMessage::className(), ['id' => 'id']);
    }
}