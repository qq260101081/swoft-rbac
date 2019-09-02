<?php

namespace Qq260101081\Model\Dao;

use Qq260101081\Model\Entity\AuthItem;
use Swoft\Bean\Annotation\Mapping\Bean;

/**
 * Class RuleDao
 * @package Qq260101081\Model\Dao
 * @Bean()
 */
class ItemDao
{
    /**
     * 获取一个角色
     *
     * @param string $name
     * @return array
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function getRole(string $name)
    {
        return AuthItem::where([
            'name' => $name,
            'type' => 1
        ])
        ->first()
        ->toArray();
    }

    /**
     * 获取所有角色
     * 
     * @return array
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function getRoles()
    {
        return AuthItem::where('type', 1)
            ->get()
            ->toArray();
    }

    /**
     * 获取一个权限
     *
     * @param string $name
     * @return array
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function getPermission(string $name)
    {
        return AuthItem::where([
            'name' => $name,
            'type' => 2
        ])
            ->first()
            ->toArray();
    }

    /**
     * 创建一个角色
     *
     * @param string $name
     * @param string $description
     * @param string $rule_name
     * @param string $data
     * @return mixed
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function createRole(string $name, string $description = '', string $rule_name = '', string $data = '')
    {
        $rule = AuthItem::new([
            'name' => $name,
            'type' => 1,
            'description' => $description,
            'rule_name' => $rule_name,
            'data' => $data,
        ]);
        $result = $rule->save();
        return $result->getName();
    }

    /**
     * 创建权限
     *
     * @param string $name
     * @param string $description
     * @param string $rule_name
     * @param string $data
     * @return mixed
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function createPermission(string $name, string $description = '', string $rule_name = '', string $data = '')
    {
        $rule = AuthItem::new([
            'name' => $name,
            'type' => 2,
            'description' => $description,
            'rule_name' => $rule_name,
            'data' => $data,
        ]);
        $result = $rule->save();
        return $result->getName();
    }
}
