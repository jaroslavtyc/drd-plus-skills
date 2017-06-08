<?php
namespace DrdPlus\Tests\Skills\Combined;

use DrdPlus\Tests\Skills\WithBonusToCharismaTest;

class SeductionTest extends WithBonusToCharismaTest
{
    use CreateCombinedSkillPointTrait;

    protected function getExpectedBonusFromSkill(int $skillRankValue): int
    {
        return $skillRankValue;
    }
}