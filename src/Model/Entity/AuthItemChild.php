<?php declare(strict_types=1);


namespace Qq260101081\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 
 * Class AuthItemChild
 *
 * @since 2.0
 *
 * @Entity(table="auth_item_child")
 */
class AuthItemChild extends Model
{
    /**
     * 
     * @Id(incrementing=false)
     * @Column()
     *
     * @var string
     */
    private $parent;

    /**
     * 
     *
     * @Column()
     *
     * @var string
     */
    private $child;


    /**
     * @param string $parent
     *
     * @return void
     */
    public function setParent(string $parent): void
    {
        $this->parent = $parent;
    }

    /**
     * @param string $child
     *
     * @return void
     */
    public function setChild(string $child): void
    {
        $this->child = $child;
    }

    /**
     * @return string
     */
    public function getParent(): ?string
    {
        return $this->parent;
    }

    /**
     * @return string
     */
    public function getChild(): ?string
    {
        return $this->child;
    }

}
