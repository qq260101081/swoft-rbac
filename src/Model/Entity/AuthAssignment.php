<?php declare(strict_types=1);


namespace Qq260101081\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 
 * Class AuthAssignment
 *
 * @since 2.0
 *
 * @Entity(table="auth_assignment")
 */
class AuthAssignment extends Model
{
    /**
     * 
     * @Id(incrementing=false)
     * @Column(name="item_name", prop="itemName")
     *
     * @var string
     */
    private $itemName;

    /**
     * 
     *
     * @Column(name="user_id", prop="userId")
     *
     * @var string
     */
    private $userId;

    /**
     * 
     *
     * @Column(name="created_at", prop="createdAt")
     *
     * @var int|null
     */
    private $createdAt;


    /**
     * @param string $itemName
     *
     * @return void
     */
    public function setItemName(string $itemName): void
    {
        $this->itemName = $itemName;
    }

    /**
     * @param string $userId
     *
     * @return void
     */
    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @param int|null $createdAt
     *
     * @return void
     */
    public function setCreatedAt(?int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getItemName(): ?string
    {
        return $this->itemName;
    }

    /**
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * @return int|null
     */
    public function getCreatedAt(): ?int
    {
        return $this->createdAt;
    }

}
