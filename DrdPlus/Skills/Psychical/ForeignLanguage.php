<?php
namespace DrdPlus\Skills\Psychical;

use DrdPlus\Codes\Skills\PsychicalSkillCode;
use Doctrine\ORM\Mapping as ORM;
use DrdPlus\Skills\WithBonusToIntelligence;

/**
 * @ORM\Entity()
 */
class ForeignLanguage extends PsychicalSkill implements WithBonusToIntelligence
{
    const FOREIGN_LANGUAGE = PsychicalSkillCode::FOREIGN_LANGUAGE;

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::FOREIGN_LANGUAGE;
    }

    /**
     * @return int
     */
    public function getBonusToIntelligence(): int
    {
        return 3 * $this->getCurrentSkillRank()->getValue();
    }
}