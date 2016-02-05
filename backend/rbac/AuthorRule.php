<?php
namespace backend\rbac;
use yii\rbac\Rule;
use Yii;
class AuthorRule extends Rule
{
    public $name = 'isAuthor';
    public function execute($user, $item, $params)
    {
        if (!isset($params['article'])) {
            return false;
        }
        return ($params['article']->author_id == $user);
    }
}