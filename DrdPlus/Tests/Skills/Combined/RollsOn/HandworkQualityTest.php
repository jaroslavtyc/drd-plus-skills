<?php
namespace DrdPlus\Tests\Skills\Combined\RollsOn;

use DrdPlus\Skills\Skill;
use DrdPlus\Tests\Skills\RollOnQualityWithSkillTest;

class HandworkQualityTest extends RollOnQualityWithSkillTest
{

    /**
     * @param int $bonusToRoll
     * @return Skill|\Mockery\MockInterface
     */
    protected function createSkill(int $bonusToRoll): Skill
    {
        $skill = $this->mockery($this->getSutConstructorParameterClass(1));
        $skill->shouldReceive('getBonusToKnack')
            ->andReturn($bonusToRoll);

        return $skill;
    }
}