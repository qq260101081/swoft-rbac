<?php

namespace Qq260101081\Model\Dao;

use Qq260101081\Model\Entity\AuthRule;
use Swoft\Bean\Annotation\Mapping\Bean;

/**
 * Class RuleDao
 * @package Qq260101081\Model\Dao
 * @Bean()
 */
class RuleDao
{
    /**
     * @param string $name
     * @return mixed
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function create(string $name)
    {
        $rule = AuthRule::new([
            'name' => $name
        ]);
        $result = $rule->save();
        return $result->getName();
    }

    /**
     * 获取规则
     * 
     * @param string $name
     * @return array
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function getOne(string $name)
    {
        return AuthRule::where('name', $name)
            ->first()
            ->toArray();
    }

    /**
     * 更新规则
     *
     * @param string $name
     * @param $data
     * @return int
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function update(string $name, $data)
    {
        return AuthRule::where('name', $name)
            ->update(['data' => $data]);
    }

    /**
     * 删除规则
     *
     * @param string $name
     * @return int|mixed
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function delete(string $name)
    {
        return AuthRule::where('name', $name)->delete();
    }

    /**
     * 删除所有规则
     *
     * @return bool
     * @throws \ReflectionException
     * @throws \Swoft\Bean\Exception\ContainerException
     * @throws \Swoft\Db\Exception\DbException
     */
    public function deleteAll()
    {
        return AuthRule::delete();
    }
}
