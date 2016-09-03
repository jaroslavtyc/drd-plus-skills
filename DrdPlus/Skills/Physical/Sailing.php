<?php
namespace DrdPlus\Skills\Physical;
use DrdPlus\Codes\PhysicalSkillCode;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity()
 */
class Sailing extends PhysicalSkill
{
    const SAILING = PhysicalSkillCode::SAILING;

    /**
     * @return string
     */
    public function getName()
    {
        return self::SAILING;
    }
}