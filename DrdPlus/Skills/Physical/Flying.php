<?php
namespace DrdPlus\Skills\Physical;

use DrdPlus\Codes\PhysicalSkillCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 */
class Flying extends PhysicalSkill
{
    const FLYING = PhysicalSkillCode::FLYING;

    /**
     * @return string
     */
    public function getName()
    {
        return self::FLYING;
    }
}