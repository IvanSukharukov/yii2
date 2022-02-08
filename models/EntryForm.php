<?php

namespace app\models;

use yii\base\Model;

class EntryForm extends Model
{
   public $name;
   public $email;
   public $text;
   public $topic;

   public function rules()
   {
      return [
         [['name', 'email', 'text'], 'required'],
         ['name', 'string', 'min' => 3, 'max' => 12, 'tooLong' => 'слишком длинное'],
         ['email', 'email'],
         ['topic', 'required', 'message' => 'custom validation message']
      ];
   }

   public function attributeLabels()
   {
      return [
         'name' => 'your name',
         'email' => 'your e-mail',
         'text' => 'your text',
      ];
   }
}
