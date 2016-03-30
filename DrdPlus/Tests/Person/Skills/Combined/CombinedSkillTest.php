<?php
namespace DrdPlus\Tests\Person\Skills\Combined;

use DrdPlus\Properties\Base\Charisma;
use DrdPlus\Properties\Base\Knack;
use DrdPlus\Tests\Person\Skills\PersonSkillTest;

class CombinedSkillTest extends PersonSkillTest
{

    protected function getExpectedRelatedPropertyCodes()
    {
        return [Knack::KNACK, Charisma::CHARISMA];
    }

    protected function isCombined()
    {
        return true;
    }

    protected function isPhysical()
    {
        return false;
    }

    protected function isPsychical()
    {
        return false;
    }

}