<?php

namespace Qq260101081\Model\Dao;

use Qq260101081\Model\Entity\AuthAssignment;
use Swoft\Bean\Annotation\Mapping\Bean;

/**
 * 用户角色关系操作类
 *
 * Class AssignmentDao
 * @package Qq260101081\Model\Dao
 * @Bean()
 */
class AssignmentDao
{
    /**
     * 获取用户角色
     *
     * @param int $user_id
     * @return array
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function getRole(int $user_id)
    {
        return AuthAssignment::where([
            'user_id' => $user_id,
        ])
        ->first()
        ->toArray();
    }

    /**
     * 创建用户角色
     *
     * @param int $user_id
     * @param string $name
     * @return mixed
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function createRole(int $user_id, string $roleName)
    {
        $rule = AuthAssignment::new([
            'role_name' => $roleName,
            'user_id' => $user_id,
        ]);
        $result = $rule->save();
        return $result->getItemName();
    }

    /**
     * 删除指定用户所有角色
     * 
     * @param int $userId
     * @return int|mixed
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function deleteRole(int $userId)
    {
         return AuthAssignment::where('user_id', $userId)
             ->delete();
    }

    /**
     * 删除所有用户角色
     * 
     * @return bool
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function deleteAll()
    {
        return AuthAssignment::delete();
    }

}
